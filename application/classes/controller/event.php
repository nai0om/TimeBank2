﻿<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Event extends Controller_Template {
	
	public function action_index()
	{
		Request::current()->redirect('event/browse');
	}

	public function action_browse()
	{
		$events = ORM::factory('event')->where('event.status', '=', '1')->order_by('id','desc')->limit(7)->find_all();
		$jobs = Kohana::$config->load('timebank')->get('jobs'); 
		$jobs_count = array();
		for ($i = 1; $i < sizeof($jobs); $i++) {
			$records = ORM::factory('event')->where('status','=','1')->where('tags', 'like', '%'.$jobs[$i].'%');
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
		{	
			Request::current()->redirect('/');
		}
		
		//$locations = Location::get_location_array();
		
		$event = ORM::factory('event');
		$event->organization_id  = $this->orguser->id;
		$this->save_event($event, $this->orguser, $this->request->method(), false, $message, $errors);
	} 

	public function action_created()
	{
		$id = $this->request->param('id'); 
		$this->template->content = View::factory('event/created')
									->bind('id', $id);		
	}
	
	public function action_remove()
	{
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			// remove list of event.
			
			foreach ($_POST as  $event_id )
			{
				$event = ORM::factory('event', $event_id); 
				// If user have permission to create event
				if (is_null($this->orguser) || $event->organization_id != $this->orguser->id)
				{
					continue;
				}
				// remove only one event
				$event->delete();		
			}
		}
		else if ($this->request->param('id') != '')
		{
			$event = ORM::factory('event', $this->request->param('id')); 
			// If user have permission to create event
			if (is_null($this->orguser) || $event->organization_id != $this->orguser->id)
			{
				// Redirect to step 1
				Request::current()->redirect('organization/event');
				return;
			}
			// remove only one event
			 $event->delete();
			
		}
	
			
		Request::current()->redirect('organization/event');
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
		$this->save_event($event, $this->orguser, $this->request->method(), true, $message, $errors);
	}
	
	public function action_view()
	{
        $this->template->content = View::factory('event/view')
										->bind('event', $event)
										->bind('event_status', $event_status)
										->bind('mode', $mode)
										->bind('isAdmin', $isAdmin)
										->bind('isOwner', $isOwner)
										->bind('isOrga', $isOrga)
										->bind('member_event', $member_event)
										->bind('images', $images)
										->bind('page', $page)
										->bind('images_pages', $images_pages)
										->bind('isOpen', $isOpen);
			
			
		
		$isOrga = false;
		$event = ORM::factory('event', $this->request->param('id'));
		
		$query = DB::select()->from('users_events')
					->where('event_id', '=',  $event->id)
					 ->where('status', '=',  1);
		
		if (!is_null($this->orguser))
		{
		 	$isOrga = true;
		}
		
		if((!is_null($this->orguser) && $this->orguser->id == $event->organization_id) )
		{
			$isOwner = true;
		}
		
		if ((!is_null($this->user) && $this->user->role == 2))
		{
			$isAdmin = true;
		}
		
		if (!$event->loaded())
		{
			throw new HTTP_Exception_404(__('Event id :id not found', array(':id' => $this->request->param('id'))));
		}

 		$now = date("Y-m-d");
		$end_time = $event->signup_end_date;
		$isOpen = false;	

		$approved = count(DB::select()->from('users_events')->where('event_id', '=', $event->id)->where('status', '=', 1)->execute());
		
		if ($event->volunteer_need_count <= $approved)
		{
			$isOpen = false;
		}
		else if($end_time >= $now &&  $event->status <> '0')
		{
			 $isOpen = true;
		}
		$event_status = Kohana::$config->load('timebank')->get('event_status');
		//$locations = Location::get_location_array();
		
		$mode = Arr::get($_GET, 'mode');
		
		if($mode == 3)
		{
			$page = Arr::get($_GET, 'page');
			if($page == '')
				$page = 1;
				
				$current = $page*9 - 9;
			$images_pages = ceil(count($event->images->find_all())/9);
			$images = $event->images->order_by('highlight','desc')->order_by('id','desc')->limit(9)->offset($current)->find_all();
			
		}
		
		if($mode == 2)
			$member_event = $query->execute()->as_array('user_id');
		
	}
	
	public function action_export()
	{
		//if ($this->request->param('id') == '') return;
		
		$this->auto_render = FALSE;
		$view  = View::factory('event/export')
		  						->bind('name', $name)
								->bind('valunteers', $valunteers);
								
		$event = ORM::factory('event', $this->request->param('id'));
		
		//if(!$event->loaded()) return;
		//if (is_null($this->orguser) || $this->orguser->id != $event->organization_id) return;
		
		$valunteers = array();
		$valunteers_event = $event->users->order_by('id','desc')->find_all();
		$statuses = DB::select()->from('users_events')->where('event_id', '=', $event->id)->where('status', '=', 1)->execute()->as_array('user_id');
		
		$type = Arr::get($_GET, 'type');
		if($type == 1)
		{
			$name = 'อาสาสมัครงานอาสา '.$event->name.'[ตอบรับแล้ว]';
		}
		else
		{
			$name = 'อาสาสมัครงานอาสา '.$event->name.'[ทั้งหมด]';
		}
		foreach ($valunteers_event as $valunteer_event)
		{
			if($type == 1)
			{
				if(array_key_exists($valunteer_event->id, $statuses))
				{
					$valunteers[] = $valunteer_event;
				}
			}
			else
			{
				$valunteers[] = $valunteer_event;
			}
		}

		
	
 		echo (string)$view;
			
	}
	
	public function action_advance_search()
	{
		
    	$this->search_event('event/advancedsearch');
	}
	
	public function action_search()
	{
		$this->search_event('event/search');	
	}
	
	public function action_addjoined()
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$id = $this->request->param('id');
			// If user have permission to create event
			if (is_null($this->orguser))
			{
				// return to 
				Request::current()->redirect('organization/event?mode=1');
				return;
			}
			
			$event = $this->orguser->events->where('id', '=', $id)->find();
			$event->volunteer_joined = Arr::get($_POST, 'value');
	
			try
			{
				$event->save();
                 				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
            }
			
			Request::current()->redirect('organization/event?mode=1');
		}
		else
		{
			Request::current()->redirect('organization/event?mode=1');
		}
		
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
			
			$image = $event->images->where('image', '=', Arr::get($_GET, 'image'))->find();	
			
			try
			{
				unlink(DOCROOT.'media/upload/events/'.$image->image);
						
            } catch (ORM_Validation_Exception $e) {
				
			}
			
			$image->delete();
			// Redirect to event view
			Request::current()->redirect('event/view/'.$event->id.'?mode=3');
		}
	}
	
	public function action_closed()
	{
		$id = $this->request->param('id'); 
		if (is_null($this->orguser))
		{
			Request::current()->redirect('/');	
		}
		
		$event = ORM::factory('event', $this->request->param('id'));	
		if (!$event->loaded())
		{
			Request::current()->redirect('organization/event');
		}
		if($event->organization_id  == $this->orguser->id)
		{
			$event->status = '0';
			$event->save();	
			TimebankNotification::notify_eventend_org($this->orguser, $event);
			
			foreach($event->users->find_all() as $user)
			{
				TimebankNotification::notify_eventend_volunteer($user, $this->orguser, $event);
			}
		}
		
		Request::current()->redirect('organization/event?mode=1');
	}
	
	public function action_reopen()
	{
		$id = $this->request->param('id'); 
		if (is_null($this->orguser))
		{
			Request::current()->redirect('/');	
		}
	
		$event = ORM::factory('event', $this->request->param('id'));	
		if (!$event->loaded())
		{
			Request::current()->redirect('organization/event');
		}
		
		if($event->organization_id  == $this->orguser->id)
		{
			$event->status = '1';
			$event->save();	
		}
		
		Request::current()->redirect('organization/event?mode=1');
	}
	
	public function action_approve()
	{
		if (is_null($this->orguser))
		{
			$back_url = urlencode('event/approve/'.$this->request->param('id'));
			Request::current()->redirect('user/login?back_url='.$back_url);
		}

		$this->template->content = View::factory('event/approve')
									->bind('event', $event)
									->bind('users', $users);

		$event = ORM::factory('event', $this->request->param('id'));
		if(!$event->loaded())
		{
			echo 'not found event';
			Request::current()->redirect('/');
		}
		
		if($event->organization_id != $this->orguser->id)
		{
			echo 'no permission';			
			Request::current()->redirect('/');
		}
		
		$query = DB::select()->from('users_events')->where('event_id', '=',  $this->request->param('id'));
		$users = $query->execute()->as_array('user_id');
		
       if (HTTP_Request::POST == $this->request->method())
	   {
		  foreach ($users as $user)
		  {
			if(Arr::get($_POST, 'user'.$user['user_id']) != 'on') continue;
			
			if(Arr::get($_POST, 'submit') == 'ตอบรับ')
			{
			
				DB::update('users_events')
					->set(array('status' => '1'))
					->where('user_id', '=', $user['user_id'])
					->where('event_id', '=', $event->id)
					->execute();
					
				TimebankNotification::notify_eventapproved_volunteer( 
												ORM::factory('user', $user['user_id']), $this->orguser, $event);
			}
			else
			{
				$event->remove('users', $user); 
			}
			
		  }
		  $event->save();
		  Request::current()->redirect('event/approve/'.$this->request->param('id'));

	   }
	
								
	}
	
	public function action_addhighlightimage()
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
			
			$image = ORM::factory('image',  Arr::get($_GET, 'id'));	
			$image->highlight = 1;
			$image->save();
			// Redirect to event view
			Request::current()->redirect('event/view/'.$event->id.'?mode=3');
		}
	}
	
	public function action_removehighlightimage()
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
			
			$image = ORM::factory('image',  Arr::get($_GET, 'id'));	
			$image->highlight = 0;
			$image->save();
			// Redirect to event view
			Request::current()->redirect('event/view/'.$event->id.'?mode=3');
		}
	}
	
	public function action_addimage()
	{
		$this->auto_render = false;
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			
			if ( $_FILES['image']['name'] != '' )
			{
				
				$event = ORM::factory('event', $this->request->param('id'));
				
				if (!$event->loaded())
				{
					throw new HTTP_Exception_404(__('Event id :id not found', array(':id' => $this->request->param('id'))));
				}
				$image = ORM::factory('image');
				$image->event = $event;
				if(Arr::get($_POST, 'text') == 'เขียนคำบรรยายที่นี่')
				{
					$image->description  =  '';
				}
				else
				{
					$image->description  =  Arr::get($_POST, 'text');	
				}
				
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
			}
			// Redirect to event view
			Request::current()->redirect('event/view/'.$this->request->param('id').'?mode=3');
		}
	}
	
	public function action_removecomment()
	{
		if (HTTP_Request::GET == $this->request->method()) 
		{
			$comment = ORM::factory('comment', Arr::get($_GET, 'c'));
			$comment->delete();
		}
		
		Request::current()->redirect('event/view/'.$this->request->param('id'));
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
				$comment->organization = $this->orguser;
			}
			else
			{
				Request::current()->redirect('user/login');
			}
			
			try
			{
				$comment->save();
                 				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
            }

			// Redirect to event view
			Request::current()->redirect('event/view/'.$event->id."#".$comment->id);
		}
	}
	
	public function action_apply()
	{
		
		if ($this->user)
		{
			try
			{
				$event = ORM::factory('event', $this->request->param('id'));
				$name = $event->name;
				if ($this->user->has('events', $event))
				{
					Request::current()->redirect('user/myevent');
					
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
					
					TimebankNotification::notify_eventapplied_org($this->user, $organization, $event);
					
					$organam = $organization->name;
					$this->template->content = View::factory('event/apply')
												->bind('organam', $organam)
												->bind('name', $name);
				}
			} catch (ORM_Validation_Exception $e) {
			
				// Set failure message
				$message = $e->getMessage();
				// Set errors using custom messages
				$errors = $e->errors('user');
			}
		}
		else
		{
			Request::current()->redirect('user/login');	
		}
		
	}
	
	public function action_addmessage()
	{
				
		$event = ORM::factory('event', $this->request->param('id'));
		if (is_null($this->orguser) || $this->orguser->id != $event->organization_id)
		{
			throw new HTTP_Exception_404(__('Not Allow to add message'));	
		}
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$event->message = Arr::get($_POST, 'message');
			$event->save();
			Request::current()->redirect('event/view/'. $this->request->param('id'));
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
	
	public function action_image()
	{
		$this->template->content = View::factory('viewimage')
										->bind('images', $images)
										->bind('first_page', $first_page);
		$event = ORM::factory('event', $this->request->param('id'));
		$event_images = $event->images->find_all();
		$images = array();
		$first_page = 1;
		$selected = Arr::get($_GET, 'index');
		$i = 0;
		foreach($event_images as $event_image)
		{
			$image = $event_image->image;
			if($image == $selected)
				$first_page = $i;
			$temp = array();
			$temp['image'] = 'media/upload/events/'.$image;
			$temp['id'] = $event_image->id;
			$temp['description'] = $event_image->description;
			$temp['link'] = '';
			$images[] = $temp;
			$i++;
		}
	}
		
	private function search_event($view)
	{
		$jobs = Kohana::$config->load('timebank')->get('jobs'); 
		$provinces = Kohana::$config->load('timebank')->get('provices');
		$page = 1;
		$job = 0;
		$type = 'open';
		$province = 0;
		$aciontion = 0;
		$query = '';
		$events = ORM::factory('event');
		if (HTTP_Request::GET == $this->request->method()) 
		{
			if(Arr::get($_GET, 'advance') != '')
				Request::current()->redirect('event/advance_search/');
				
			$query = Arr::get($_GET, 'query');
				
			if($query == '' || $query =='ใส่ชื่อภารกิจ, ชื่อองค์กร, ชื่อสถานที่')
				$query = '';
				
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
			
			if(Arr::get($_GET, 'action') == 'ค้นหาแบบละเอียด')
			{
				$action = 1;
			}
			
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
			 $dict = Kohana::$config->load('timebank')->get('worddict');
			 $skill = ' ';
			 foreach($dict  as $key => $val)
			 {
				 
				 $value = Arr::get($_GET,  $key);
				 if( $value != '') 
				 {
					 if($value == 'on')
					 {
						$events = $events->where('skills', 'like', '%'.$key.'%');
					 }
					 else
					 {
						 $events = $events->where('skills', 'like', '%'.$value.'%');
					 }
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
		$events = $events->order_by('id','desc')->limit(15)->offset(($page-1)*15)->find_all();	
		
		$link = 'event/search?';
		if($job != 0)
			$link .= 'job='.$job.'&';
		if($province != 0)
			$link .= 'province='.$province.'&';
		if($query != '')
			$link .= 'query='.$query.'&';

	
		$this->template->content =  View::factory($view)
										->bind('events', $events)
										->bind('count', $count)
										->bind('total_page', $total_page)
										->bind('provices', $provinces)
										->bind('jobs', $jobs)
										->bind('link', $link)
										->bind('gets', $_GET)
										->bind('action', $action);

	}
	
	public static function save_event($event, $orguser, $method, $isupdate, &$message, &$errors)
	{
		$errors  = array();
		$pass = true;
		if (HTTP_Request::POST == $method) 
		{
			$event->name = Arr::get($_POST, 'name');
			$event->project_name = Arr::get($_POST, 'project_name');
			$event->signup_end_date = date("Y-m-d", strtotime(Arr::get($_POST, 'signup_end_date')));
	
			$event->volunteer_begin_time = Arr::get($_POST, 'volunteer_begin_time');
			$event->volunteer_end_time = Arr::get($_POST, 'volunteer_end_time');
	
			$event->location_name = Arr::get($_POST, 'location_name');
			$event->location_province = Arr::get($_POST, 'location_province');
			if($event->location_province  <= 0)
			{
				$errors['location_province'] = __('must select province.');
			}
			$event->location_district = Arr::get($_POST, 'location_district');
			$event->location_postcode = Arr::get($_POST, 'location_postcode');
			$event->volunteer_need_count = Arr::get($_POST, 'volunteer_need_count');			
			$event->detail = Arr::get($_POST, 'detail');			
			$event->travel_detail = Arr::get($_POST, 'travel_detail');			
			$event->inquiry_detail = Arr::get($_POST, 'inquiry_detail');			
			
			
			$event->phone = Arr::get($_POST, 'phone');	
			$event->time_cost = Arr::get($_POST, 'time_cost');	
			//name,  project_name, location_name, detail
			
			
			$event->volunteer_begin_date = date("Y-m-d", strtotime(Arr::get($_POST, 'volunteer_begin_date')));
			$event->volunteer_end_date = date("Y-m-d", strtotime(Arr::get($_POST, 'volunteer_end_date')));
			
		
			if($event->volunteer_begin_date > $event->volunteer_end_date )
			{
				$errors['volunteer_end_date'] = __('volunteer end date much more than start date.');
			}
			
			if( phphelp::dateDiff($event->volunteer_begin_date, $event->volunteer_end_date) > 365 )
			{
				$errors['volunteer_end_date'] = __('limit 365 days per event.');
			}
			
			if($event->time_cost > 2000)
			{
				$errors['time_cost'] = __('limit at 2000 hours.');
			}
			$event->is_need_expense = Arr::get($_POST, 'is_need_expense');
			if($event->is_need_expense == 1 ) 
			{
				if($event->expense_detail == '')
				{
					$errors['expense_detail'] = __('much not empty.');
				}
				else
				{
					$event->expense_detail = Arr::get($_POST, 'expense_detail');
				}
			}
			else
			{
				$event->expense_detail = '';	
			}
			
			$jobs = Kohana::$config->load('timebank')->get('jobs'); 
			foreach ($jobs as $job){
				$job =  str_replace(' ', '_', $job);
				if ( Arr::get($_POST, $job) != '')
						$event->tags  = $event->tags.''.Arr::get($_POST, $job) .', ';
			}
			if (Arr::get($_POST, 'day') != 'everyday' ){
				$days = Kohana::$config->load('timebank')->get('days');
				$event->days = '';
				foreach ($days as $day){
					if ( Arr::get($_POST, $day) != '') 
						$event->days  = $event->days.''.Arr::get($_POST, $day) .', ';
				}
			}
			
			// add/remove skill for this user as data recieve from post
			 $dict = Kohana::$config->load('timebank')->get('worddict');
			 $skill = ' ';
			 foreach($dict  as $key => $val)
			 {
				 
				 $value = Arr::get($_POST,  $key);
				 if( $value != '') 
				 {
					 if($value == 'on')
					 {
						$skill .= $key.'|'; 
					 }
					 else
					 {
						 $skill .= $key.'='.$value.'|'; 
					 }
				 }
			 }
			 $event->skills = $skill;
			

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
			
			if($orguser != NULL)
				$event->organization = $orguser;
			
			if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != '')
			{
				$event->image = $_FILES['image']['name'];
			}
	
			$event->search_temp =  $event->name.'/'.$event->project_name.'/'.$event->contractor_name.'/'.$event->detail.'/'.$event->location_name;
			if(count($errors) > 0 ) return;
			try
			{
				$event->save();
                 
				if($isupdate == true)
				{
					// Redirect to event view
					Request::current()->redirect('event/view/'.$event->id);
	
				}
				else
				{
					// Redirect to event view
					Request::current()->redirect('event/created/'.$event->id);
				}
				
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                 
                // Set errors using custom messages
				foreach($e->errors('models') as $key => $value) {
					   $errors[$key] = $value;
				}
               
				
				//print_r($errors);
            }
		}		
	}
}