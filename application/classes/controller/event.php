<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Event extends Controller_Template {
	
	public function action_index()
	{
		Request::current()->redirect('event/browse');
	}

	public function action_browse()
	{
		$events = ORM::factory('event')->order_by('timestamp','desc')->limit(7)->find_all();
		$jobs = Kohana::$config->load('timebank')->get('jobs'); 
		$jobs_count = array();
		for ($i = 1; $i < sizeof($jobs); $i++) {
			$records = ORM::factory('event')->where('tags', 'like', '%'.$jobs[$i].'%');
			$records->reset(FALSE); // !!!!
			$count = $records->count_all();

			$jobs_count[$i] = $count;
		}
		 $provices = Kohana::$config->load('timebank')->get('provices'); 
		$this->template->content = View::factory('event/browse')
										->bind('events', $events)
										->bind('jobs_count', $jobs_count)
										->bind('jobs', $jobs)
										->bind('provices', $provices);

	}
		
	public function action_create()
	{
        $this->template->content = View::factory('event/create')
            //->bind('locations', $locations)
            ->bind('message', $message)
			->bind('errors', $errors)
			->bind('event', $event);
		
		// If user have permission to create organization
		if (is_null($this->orguser))
		{	// Redirect to step 1
			throw new HTTP_Exception_404(__('Is not organization account'));
		}
		
		//$locations = Location::get_location_array();
		
		$event = ORM::factory('event');
		$event->organization_id  = $this->orguser->id;
		$this->save_event($event, $this->orguser, $message, $errors);
	} 

	public function action_created()
	{
		$id = $this->request->param('id'); 
		$this->template->content = View::factory('event/created')
									->bind('id', $id);		
	}
	
	public function action_edit()
	{
        $this->template->content = View::factory('event/edit')
            //->bind('locations', $locations)
            ->bind('message', $message)
			->bind('errors', $errors)
			->bind('event', $event);
		
		// If user have permission to create event
		if (is_null($this->orguser))
		{
			// Redirect to step 1
			Request::current()->redirect('organization/create');
			return;
		}
		
		// If this event belong to this user
		$company = $this->orguser;
		
		if (!$company->loaded())
		{
			// Redirect to step 1
			Request::current()->redirect('organization/create');
			return;
		}

		$event = ORM::factory('event')
					->where('organization_id', '=', $company->id)
					->where('id', '=', $this->request->param('id'))
					->find();

		if (!$event->loaded())
		{
			throw new HTTP_Exception_404(__('Event id :id doesn\'t belong to you', array(':id' => $this->request->param('id'))));
		}

		//$locations = Location::get_location_array();
		
		$this->save_event($event, $message, $errors);
	}
	
	public function action_view()
	{
        $this->template->content = View::factory('event/view')
            ->bind('event', $event)
            ->bind('event_status', $event_status)
            ->bind('mode', $mode)
			->bind('isAdmin', $isAdmin);
		
		if (! is_null($this->orguser))
		{
			$isAdmin = true;
		}
		$event = ORM::factory('event', $this->request->param('id'));

		if (!$event->loaded())
		{
			throw new HTTP_Exception_404(__('Event id :id not found', array(':id' => $this->request->param('id'))));
		}

		$event_status = Kohana::$config->load('timebank')->get('event_status');
		//$locations = Location::get_location_array();
		
		$mode = Arr::get($_GET, 'mode');
	
	}
	
	public function action_advance_search()
	{
        $this->template->content =$this->search_event('event/advanced_search');
	}
	
	public function action_search()
	{
		$this->template->content = $this->search_event('event/search');	
	}
	
	public function action_removeimage()
	{
		$this->auto_render = false;
		
		if (HTTP_Request::GET == $this->request->method()) 
		{
			$event = ORM::factory('event', $this->request->param('id'));			
			if (!$event->loaded())
			{
				throw new HTTP_Exception_404(__('Event id :id not found', array(':id' => $this->request->param('id'))));
			}
			
			if($this->orguser->id != $event->organization_id) 
			{
				throw new Kohana_Exception('Not allow to remove image', array(':code' => '550'));
			}
			
			//$images = $event->images->where('image', '=', Arr::get($_GET, 'image'))->find();
			$image = ORM::factory('image', array('image' => Arr::get($_GET, 'image')));			
			unlink(DOCROOT.'media/upload/events/'.$image->image);
			$image->delete();
			
			// Redirect to event view
			Request::current()->redirect('event/view/'.$event->id.'?mode=3');
		}
	}
	
	public function action_addimage()
	{
		$this->auto_render = false;
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$event = ORM::factory('event', $this->request->param('id'));
			
			if (!$event->loaded())
			{
				throw new HTTP_Exception_404(__('Event id :id not found', array(':id' => $this->request->param('id'))));
			}
			$image = ORM::factory('image');
			$image->event = $event;
			$image->description  =  Arr::get($_POST, 'text');
			if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != '')
			{
				$image->image = $_FILES['image']['name'];
			}
			try
			{
				$image->save();
                 				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
            }
			// Redirect to event view
			Request::current()->redirect('event/view/'.$event->id.'?mode=3');
		}
	}
	public function action_addcomment()
	{
		$this->auto_render = false;
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$event = ORM::factory('event', $this->request->param('id'));
	
			if (!$event->loaded())
			{
				throw new HTTP_Exception_404(__('Event id :id not found', array(':id' => $this->request->param('id'))));
			}

			$comment = ORM::factory('comment');
			$comment->type = '2';
			$comment->comment = Arr::get($_POST, 'comment');
			$comment->event = $event;
			$comment->ip = Request::$client_ip;
			
			// If this is logged in user, stamp user_id
	
			if (isset($this->user))
			{
				$comment->user = $this->user;
			}
			else if (isset($this->orguser))
			{
				$comment->user = $this->orguser;
			}
			
			try
			{
				$comment->save();
                 				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
            }

			// Redirect to event view
			Request::current()->redirect('event/view/'.$event->id);
		}
	}
	
	public function action_apply()
	{
		
		if ($this->user)
		{
			try
			{
				$event = ORM::factory('event', $this->request->param('id'));
				if ($this->user->has('events', $event))
				{
					Request::current()->redirect('user/');
				}
				else 
				{
	
					$organization_id = $event->organization_id;
					$organization = ORM::factory('organization', $organization_id);
					if (!$organization->loaded())
					{
						throw new HTTP_Exception_404(__('organization id :id not found', array(':id' => $organization_id)));
						return;
					}
					$this->user->add('events', $event);
					$this->user->save();
					$organam = $organization->name;
					$this->template->content = View::factory('event/apply')
												->bind('organam', $organam);
				}
			} catch (ORM_Validation_Exception $e) {
			
				// Set failure message
				$message = $e->getMessage();
				// Set errors using custom messages
				$errors = $e->errors('user');
			}
		}
		
	}
	
	public function action_test()
	{
		$this->auto_render = FALSE;
		
		$query = DB::select()->from('users_events')->where('user_id', '=', '3')->where('event_id', '=', '8');
		$results = $query->execute()->as_array();
		if (count($results) > 0)
		{
			$user_event = $results[0];
			$query = DB::update('users_events')->set(array('status' => '2'))->where('user_id', '=', '3')->where('event_id', '=', '8');
			$query->execute();
		}
	}
	
	private function search_event( $view)
	{
		$jobs = Kohana::$config->load('timebank')->get('jobs'); 
		$provinces = Kohana::$config->load('timebank')->get('provices');
		$page = 1;
		$job = 0;
		$type = 'open';
		$province = 0;
		$query = '';
		$events = ORM::factory('event');
		if (HTTP_Request::GET == $this->request->method()) 
		{
			if(Arr::get($_GET, 'advance') != '')
				Request::current()->redirect('event/advance_search/');
				
			$query = Arr::get($_GET, 'query');
			$type = Arr::get($_GET, 'type'); // open, close, member
			
			if ($type == '')
				$type = 'open';
				
			$job = Arr::get($_GET, 'job');
			if($job == '')
				$job = 0;
		
			$province = Arr::get($_GET, 'province');
			if($province == '')
				$province = 0;
				
			$page = Arr::get($_GET, 'page');
			if ($page == '') 
				$page = 1;
			
			$start = Arr::get($_GET, 'start'); 
			$end = Arr::get($_GET, 'end'); 
			
			$begin_time = Arr::get($_GET, 'begin_time'); 
			$end_time = Arr::get($_GET, 'end_time'); 
			
			$time_cost 	= Arr::get($_GET, 'time_cost'); 
			
			if($start != '')	
				$events = $events->where('volunteer_begin_date', '>=', date("Y-m-d", strtotime(Arr::get($_GET, $start ))));	
			if($end != '')
				$events = $events->where('volunteer_end_date', '<=', date("Y-m-d", strtotime(Arr::get($_GET, $end ))));	
				
			if($begin_time != '')	
				$events = $events->where('volunteer_begin_time', '>=', $begin_time );	
			if($end_time != '')
				$events = $events->where('volunteer_end_time', '<=', $end_time );	

			if($time_cost != 0)
				$events = $events->where('time_cost', '=', $time_cost);
			if($job != 0)
				$events = $events->where('tags', 'like', '%'.$jobs[$job].'%');
			if($province != 0)
				$events = $events->where('location_province', '=', $province);
			if($query != '')
				$events = $events->where('search_temp', 'like', '%'.$query.'%');
				
			echo 'dayyyyyyyyyyy'.	Arr::get($_GET, 'day');
			//day 
			if ( Arr::get($_GET, 'day') == '0')
			{
				$days = Kohana::$config->load('timebank')->get('days'); 
				for($i = 0 ; $i < sizeof($days) ; $i++){
				
					if (Arr::get($_GET, 'day'.$i ) != ''){
				
					$events = $events->where('days', 'like', '%'.$days[ $i ].'%');
				 }
				}
			}
			else if ( Arr::get($_GET, 'day') == '1')
			{
				$events = $events->where('days', '=', '');
			}
			//skills
		   $skills = Kohana::$config->load('timebank')->get('skills'); 
			for($i = 0 ; $i < sizeof($skills) ; $i++){
				if (Arr::get($_GET, 'skill'.$i ) != ''){
				
					$events = $events->where('skills', 'like', '%'.$skills[ $i ].'%');
				 }
			
			}
									
			//languates
			$languates = Kohana::$config->load('timebank')->get('languates'); 
			for($i = 0 ; $i < sizeof($languates) ; $i++){
				$checked = FALSE;
				if (Arr::get($_GET, 'languate'.$i) != ''){
				   $events = $events->where('languates', 'like', '%'.$languates[ $i ].'%');
				}
			}
		}
		
		if($type == 'open')
			$events = $events->where('status', '=', '1');
		if($type == 'closed')
			$events = $events->where('status', '=', '0');
			
		$event_obj =  $events;
		$event_obj->reset(FALSE); // !!!!
		$count = $event_obj->count_all();
		$total_page = ceil($count/15);
		$events = $events->order_by('timestamp','desc')->limit(15)->offset(($page-1)*15)->find_all();	
		
		$link = 'event/search?';
		if($job != 0)
			$link .= 'job='.$job.'&';
		if($province != 0)
			$link .= 'province='.$province.'&';
		if($query != '')
			$link .= 'query='.$query.'&';

		$content = View::factory($view)
					->bind('events', $events)
					->bind('count', $count)
					->bind('total_page', $total_page)
					->bind('provices', $provinces)
					->bind('jobs', $jobs)
					->bind('link', $link)
					->bind('gets', $_GET);

		return $content;
	}
	
	private function save_event($event, $orguser, &$message, &$errors)
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$event->name = Arr::get($_POST, 'name');
			$event->project_name = Arr::get($_POST, 'project_name');
			$event->signup_begin_date = date("Y-m-d", strtotime(Arr::get($_POST, 'signup_begin_date')));
			$event->signup_end_date = date("Y-m-d", strtotime(Arr::get($_POST, 'signup_end_date')));
			$event->volunteer_begin_date = date("Y-m-d", strtotime(Arr::get($_POST, 'volunteer_begin_date')));
			$event->volunteer_end_date = date("Y-m-d", strtotime(Arr::get($_POST, 'volunteer_end_date')));
			$event->signup_begin_time = Arr::get($_POST, 'signup_begin_time');
			$event->signup_end_time = Arr::get($_POST, 'signup_end_time');
			$event->volunteer_begin_time = Arr::get($_POST, 'volunteer_begin_time');
			$event->volunteer_end_time = Arr::get($_POST, 'volunteer_end_time');
			$event->location_name = Arr::get($_POST, 'location_name');
			$event->location_province = Arr::get($_POST, 'location_province');
			$event->location_district = Arr::get($_POST, 'location_district');
			$event->location_postcode = Arr::get($_POST, 'location_postcode');
			$event->volunteer_need_count = Arr::get($_POST, 'volunteer_need_count');			
			$event->detail = Arr::get($_POST, 'detail');			
			$event->travel_detail = Arr::get($_POST, 'travel_detail');			
			$event->inquiry_detail = Arr::get($_POST, 'inquiry_detail');			
			$event->is_need_expense = Arr::get($_POST, 'is_need_expense');
			$event->expense_detail = Arr::get($_POST, 'expense_detail');
			$event->phone = Arr::get($_POST, 'phone');	
			$event->time_cost = Arr::get($_POST, 'time_cost');	
			//name,  project_name, location_name, detail
			$event->search_temp =  $event->name.'/'.$event->project_name.'/'.$event->contractor_name.'/'.$event->detail.'/'.$event->location_name;
			
			
			$jobs = Kohana::$config->load('timebank')->get('jobs'); 
			foreach ($jobs as $job){
				$job =  str_replace(' ', '_', $job);
				if ( Arr::get($_POST, $job) != '')
						$event->tags  = $event->tags.''.Arr::get($_POST, $job) .', ';
			}
			if (Arr::get($_POST, 'day') != 'everyday' ){
				$days = Kohana::$config->load('timebank')->get('days');
				foreach ($days as $day){
					if ( Arr::get($_POST, $day) != '') 
						$event->days  = $event->days.''.Arr::get($_POST, $day) .', ';
				}
			}
			
			$skills = Kohana::$config->load('timebank')->get('skills');
			foreach ($skills as $skill){
				$skill = str_replace(' ', '_', $skill);
				if ( Arr::get($_POST, $skill) != '') 
					$event->skills  = $event->skills.''.Arr::get($_POST, $skill) .', ';
			}
			
			$technicals = Kohana::$config->load('timebank')->get('technicals');
			foreach ($technicals as $technical){
				$technical = str_replace(' ', '_', $technical);
				if ( Arr::get($_POST, $technical) != '') 
					$event->technical  = $event->technical.''.Arr::get($_POST, $technical) .', ';
			}
			
			$languates = Kohana::$config->load('timebank')->get('languates');
			foreach ($languates as $languate){
				if ( Arr::get($_POST, str_replace(' ', '_', $languate)) != '') 
					$event->languates  = $event->languates.''.Arr::get($_POST, $languate) .', ';
			}
			
			
			if ( Arr::get($_POST, 'any_languate') != '') 
				$event->languates  = $event->languates.''.Arr::get($_POST, 'any_languate') ;
			
				
			$event->organization = $orguser;
			
			if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != '')
			{
				$event->image = $_FILES['image']['name'];
			}
	
			
			try
			{
				$event->save();
                 
				// Redirect to event view
				Request::current()->redirect('event/created/'.$event->id);
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
				
				//print_r($errors);
            }
		}		
	}
}