<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Event extends Controller_Template {
	
	public function action_index()
	{
		$events = ORM::factory('event')->find_all();
		$this->template->content = View::factory('event/index')->bind('events', $events);
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
		
		// If user have permission to create company
		if (!Auth::instance()->logged_in('company'))
		{
			// Redirect to step 1
			Request::current()->redirect('company/create');
			return;
		}
		
		//$locations = Location::get_location_array();
		
		$event = ORM::factory('event');
		$this->save_event($event, $message, $errors);
	} 

	public function action_edit()
	{
        $this->template->content = View::factory('event/edit')
            //->bind('locations', $locations)
            ->bind('message', $message)
			->bind('errors', $errors)
			->bind('event', $event);
		
		// If user have permission to create event
		if (!Auth::instance()->logged_in('company'))
		{
			// Redirect to step 1
			Request::current()->redirect('company/create');
			return;
		}
		
		// If this event belong to this user
		$company = ORM::factory('company')
					->where('user_id', '=', $this->user->id)
					->find();
		
		if (!$company->loaded())
		{
			// Redirect to step 1
			Request::current()->redirect('company/create');
			return;
		}

		$event = ORM::factory('event')
					->where('company_id', '=', $company->id)
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
            ->bind('mode', $mode);
            //->bind('locations', $locations);
		
		$event = ORM::factory('event', $this->request->param('id'));

		if (!$event->loaded())
		{
			throw new HTTP_Exception_404(__('Event id :id not found', array(':id' => $this->request->param('id'))));
		}
		
		$event_status = Kohana::$config->load('timebank')->get('event_status');
		//$locations = Location::get_location_array();
		
		$mode = Arr::get($_GET, 'mode');
	}
	
	public function action_search()
	{
		$jobs = Kohana::$config->load('timebank')->get('jobs'); 
		$provinces = Kohana::$config->load('timebank')->get('provices');
		$page = 1;
		$job = 0;
		$type = 0;
		$province = 0;
		$events = ORM::factory('event');
		if (HTTP_Request::GET == $this->request->method()) 
		{
			$query = Arr::get($_GET, 'query');
			$type = Arr::get($_GET, 'type'); // open, close, member
			
			$job = Arr::get($_GET, 'job');
			if($job == '')
				$job = 0;
		
			$province = Arr::get($_GET, 'province');
			if($province == '')
				$province = 0;
				
			$page = Arr::get($_GET, 'page');
			if ($page == '') 
				$page = 1;
			
			if($job != 0)
				$events = $events->where('tags', 'like', '%'.$jobs[$job].'%');
			if($province != 0)
				$events = $events->where('location_province', '=', $province);
			if($query != '')
				$events = $events->where('search_temp', 'like', '%'.$query.'%');
		}
		$event_obj =  $events;
		$event_obj->reset(FALSE); // !!!!
		$count = $event_obj->count_all();
		$total_page = ceil($count/15);
		$events = $events->order_by('timestamp','desc')->limit(15)->offset(($page-1)*15)->find_all();	
		
		$this->template->content = View::factory('event/search')
					->bind('query', $query)
					->bind('type', $type)
					->bind('job', $job)
					->bind('events', $events)
					->bind('count', $count)
					->bind('jobs', $jobs)
					->bind('total_page', $total_page)
					->bind('page', $page)
					->bind('provices', $provinces)
					->bind('province', $province);
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
			$user = Auth::instance()->get_user();
			if ($user)
			{
				$comment->user = $user;
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
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$message = 'Not user!';
			if ($this->user)
			{
				try
				{
					$this->user->add('events', ORM::factory('event', $this->request->post('event_id')));
					$this->user->save();
					$message = 'Done!';
				} catch (ORM_Validation_Exception $e) {
				
					// Set failure message
					$message = $e->getMessage();
					// Set errors using custom messages
					$errors = $e->errors('user');
				}
			}
			$this->template->content = View::factory('event/apply')
				->bind('message', $message);
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
	
	private function save_event($event, &$message, &$errors)
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$event->name = Arr::get($_POST, 'name');
			$event->project_name = Arr::get($_POST, 'project_name');
			$event->signup_begin_date = Arr::get($_POST, 'signup_begin_date');
			$event->signup_end_date = Arr::get($_POST, 'signup_end_date');
			$event->volunteer_begin_date = Arr::get($_POST, 'volunteer_begin_date');
			$event->volunteer_end_date = Arr::get($_POST, 'volunteer_end_date');
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
			$tags = '';
			foreach ($jobs as $job):
					$tags  = $tags.''.Arr::get($_POST, $job) .', ';
			endforeach;
			
			$event->tags = $tags;
				
			$event->company = ORM::factory('company')
								->where('user_id', '=', $this->user->id)
								->find();
			
			if (isset($_FILES['pic_1']['name']) && $_FILES['pic_1']['name'] != '')
			{
				$event->pic_1 = 'pic_1';
			}
			/*
			if (isset($_FILES['pic_2']['name']) && $_FILES['pic_2']['name'] != '')
			{
				$event->pic_2 = 'pic_2';
			}
			if (isset($_FILES['pic_3']['name']) && $_FILES['pic_3']['name'] != '')
			{
				$event->pic_3 = 'pic_3';
			}
			if (isset($_FILES['pic_4']['name']) && $_FILES['pic_4']['name'] != '')
			{
				$event->pic_4 = 'pic_4';
			}
			if (isset($_FILES['pic_5']['name']) && $_FILES['pic_5']['name'] != '')
			{
				$event->pic_5 = 'pic_5';
			}
			*/
			
			try
			{
				$event->save();
                 
				// Redirect to event view
				Request::current()->redirect('event/view/'.$event->id);
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
				
				print_r($errors);
            }
		}		
	}
}