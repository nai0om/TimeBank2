<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_User extends Controller_Template {
 
    public function action_index()
    {
		
        // if a user is not logged in, redirect to login page
        if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }

        $action = $this->request->action();
		$this->template->content = View::factory('user/index')
		->bind('action', $action)
		->bind('time', $time)
		->bind('work_time', $work_time)
		->bind('events', $events)
		->bind('events_rand', $events_rand)
		->bind('event_recommends', $event_recommends);
		
		$time = Controller_User::getTotalTime($this->user->id);
		$work_time = Controller_User::getTotalWorkedTime($this->user->id);
		//events is get from admin
		$events = timebankhelper::getRecommendEvent(15);
		//event-rand is latest event.
		$events_rand = ORM::factory('event')->where('event.status', '=', '1')->order_by('id','desc')->limit(15)->find_all();
		
		$recommend_event_ids = linkscreator::get_top_event_from_rank($this->user);
		if(count($recommend_event_ids) <= 0)
		{
			linkscreator::refresh_rank($this->user);
			$recommend_event_ids = linkscreator::get_top_event_from_rank($this->user);
		}
		$need_update = true;
		while($need_update)
		{	
			$need_update = false;
			$event_recommends = array();
			foreach($recommend_event_ids as $event_id)
			{
				$event = ORM::factory('event', $event_id['event_id']);
			
				if(!$event->loaded() || $event->status == 0) 
				{
					linkscreator::remove_event($event_id['event_id']);
					$need_update = true;
					
				}
				else
				{

					$event_recommends[] = ORM::factory('event', $event_id['event_id']);
				}
			}
			
			if($need_update)
			{
				linkscreator::refresh_rank($this->user);
				$recommend_event_ids = linkscreator::get_top_event_from_rank($this->user);
			}
		}
    }

    public function action_record()
    {
        // if a user is not logged in, redirect to login page
        if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }
		
		$records = ORM::factory('user_timebank')->where('user_id', '=', $this->user->id)->find_all();
		
		$total_hour = 0;
		foreach ($records as $record)
		{
			$total_hour += $record->hour;
		}

		$action = $this->request->action();
		$this->template->content = View::factory('user/record')
								->bind('records', $records)
								->bind('time', $time)
								->bind('work_time', $work_time)
								->bind('action', $action)
								->bind('error', $error)
								->bind('message', $message);
							
		$error = __(Arr::get($_GET, 'error'));
		$message = __(Arr::get($_GET, 'message'));									
		$time = Controller_User::getTotalTime($this->user->id);
		$work_time = Controller_User::getTotalWorkedTime($this->user->id);
		
    }
	
	public function action_addhour()
	{
        // if a user is not logged in, redirect to login page
        if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }
				
        if (HTTP_Request::POST == $this->request->method()) 
        {           
		   $errors = '';
		   $message = '';
            try {
				if (!is_numeric(Arr::get($_POST, 'hour')))
				{
					$message = __('Please insert hours number.');
					
				}
				else if(Arr::get($_POST, 'hour') <= 0)
				{
					$message = __('hours must more than 0');
					
				} 			
				else 
				{
					$time = Controller_User::getTotalTime($this->user->id);	
				
					if($time +  Arr::get($_POST, 'hour') > 2000)
					{
						$message = __('time is maximum at 2000');	
					}
					else
					{
						// Create an timebank and attach it to the user (one-to-many)
						$timebank = ORM::factory('user_timebank')->values(array(
							'hour'			=> Arr::get($_POST, 'hour'),
							'status'  		=> 1,
							'user_id'		=> $this->user->id, // sets the fk
						));
						$timebank->save();
					}
				}
           //  Request::current()->redirect('user/record');    
            } catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('models');
            }
			  Request::current()->redirect('user/record?error='.$message)->bind('errors', $errors);        
		}	
	}
	
    public function action_signup()
    {
		$this->template->content = View::factory('user/signup');
    }

    public function action_forgetpassword()
    {
		if (HTTP_Request::POST == $this->request->method()) 
		{
			if (Arr::get($_POST, 'email') != '')
			{
				$user = ORM::factory('user')->where('email', '=', Arr::get($_POST, 'email'))->find();
				if ($user->loaded())
				{
					// Reset password and send email
					$newpassword = TimebankUtil::randomstring(10);
					$user->password = $newpassword;
					$user->save();
					
					TimebankNotification::notify_forgetpassword($user, $newpassword);
					
					$this->template->content = View::factory('user/forgetpassword_finish')->set('email', $user->email);
					return;
				}
				else
				{
					$message = 'กรุณากรอกอีเมล์ที่สมัครไว้กับธนาคารจิตอาสา';
				}
			}
			else
			{
				$message = 'Please enter email address';	
			}
		}
		
		$this->template->content = View::factory('user/forgetpassword')
									->bind('message', $message);

    }
	
	public function action_removeevent()
	{
		if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }
		
		$event = ORM::factory('event', $this->request->param('id'));
		$organization = ORM::factory('organization', $event->organization_id);
		$this->user->remove('events', $event);
		try {
		
			$this->user->save();
			
			TimebankNotification::notify_eventusercancel_org($this->user, $organization, $event, Arr::get($_GET, 'message'));
			 
		} catch (ORM_Validation_Exception $e) {
			//silent error		
		}
		
		 Request::current()->redirect('/user/myevent');
		
	}
	public function action_create()
	{
		$this->template->content = View::factory('user/create')
									->bind('message', $message)
									->bind('errors', $errors)
									->bind('newuser', $user);
		$user = ORM::factory('user');		
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			
			$pass = true;
			$errors = array();
		
			if (Arr::get($_POST, 'displayname') == '')
			{
				$errors['displayname'] = 'displayname cannot be empty.';
				
			}
			
			if (Arr::get($_POST, 'acceptterm') == '')
			{
				$errors['acceptterm'] = 'Please accept term&condition.';
				
			}
			
			$user->email = Arr::get($_POST, 'email');
			
			if (Arr::get($_POST, 'password') == '')
			{
				$errors['password'] = 'Password can\'t be empty.';
			
			}

			if (Arr::get($_POST, 'password') != Arr::get($_POST, 'password_confirm'))
			{
				$errors['password_confirm'] = 'The password fields did not match.';
				
			}
			
			if (Arr::get($_POST, 'email') == '')
			{
				$errors['email'] = 'Please enter email address';
				
			}
			
			$hour = trim(Arr::get($_POST, 'hour'));
			if (!is_numeric($hour))
			{
				$errors['hour'] = 'Please insert hours number.';
				
			} 
			else if($hour  <= 0)
			{
				$errors['hour'] = __('hours must more than 0');
				
			} 
			else if ($hour > 2000)
			{
				$errors['hour'] =  __('time is maximum at 2000');	
			}
			
			if(count($errors) >0)
			{
				return;
			}
			
			$user->password = Arr::get($_POST, 'password');
			$user_roles = Kohana::$config->load('timebank')->get('user_roles');
			$user->role = $user_roles['volunteer'];
			$user->displayname = Arr::get($_POST, 'displayname');

			try
			{
				$user->save();

				// Log in
				$this->login(Arr::get($_POST, 'email'), Arr::get($_POST, 'password'));
				//add user hour
				$this_user = ORM::factory('user')->where('email', '=', $user->email)->find();
				if ($hour != '')
				{
					try {
				 
						// Create an timebank and attach it to the user (one-to-many)
						$timebank = ORM::factory('user_timebank')->values(array(
							'hour'			=> $hour ,
							'status'  		=> 1,
							'user_id'		=> $this_user->id, // sets the fk
						));
						$timebank->save();
						 
					} catch (ORM_Validation_Exception $e) {
						 
						// Set errors using custom messages
						$this->template->content = View::factory('user/record')
							->bind('errors', $errors)
							->bind('records', $records);

						$errors = $e->errors('models');
						$records = ORM::factory('user_timebank')->where('user_id', '=', $this->user->id)->find_all();
					}
                }

				TimebankNotification::notify_new_volunteer($user, Arr::get($_POST, 'password'));

				// Redirect
				if (Arr::get($_POST, 'back_url') != '')
				{
					Request::current()->redirect(Arr::get($_POST, 'back_url'));
				}
				else
				{
					Request::current()->redirect('/user/index');
				}
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = ('There were errors, please see form below.');
                
                // Set errors using custom messages
                $errors = $e->errors('models');
				//print_r($errors);
            }
		}
	}
	
    public function action_thanks()
    {
		$this->template->content = View::factory('user/thanks');
    }
	
	public function action_changeemail()
	{
		// if a user is not logged in, redirect to login page
		if (is_null($this->user))
        {
            Request::current()->redirect('user/login');
			return;
        }	
		$this->template->content = View::factory('user/email')
			->set('values', $_POST)
            ->bind('errors', $errors)
			->bind('action', $action)
            ->bind('message', $message);
			
		$action = $this->request->action();
        if (HTTP_Request::POST == $this->request->method()) 
        {
			$errors = array();
			$password = Arr::get($_POST, 'password');
			if ($password == '')
			{
				$errors['password'] = 'Password can\'t be empty.';
			
			}
	
			$email = Arr::get($_POST, 'email');
			if ($email == '')
			{
				$errors['email'] = 'email can\'t be empty.';
			}
			// check old email
			if($this->user->email != $email)
			{
				$errors['email'] = 'email is incorrect.';
			}
			
			$newemail = Arr::get($_POST, 'newemail');
			if ($newemail == '')
			{
				$errors['newemail'] = 'newemail can\'t be empty.';
			}
			
			// check email is valid
			$emailvalid = ORM::factory('user')->where('email', '=', $newemail)->find_all();
			if(count($emailvalid) > 0)
				$errors['newemail'] = 'email is exist.';
			
			if(count($errors) > 0 )
				return;
				
			
			$hash_password = $this->user->oldhash_password($password);
			if ($this->user->password == $hash_password)
			{
				$this->user->email = Arr::get($_POST, 'newemail');
				$this->user->password = Arr::get($_POST, 'password');
									
				try
				{
					$this->user->save();       
					echo'<script>'.
					'alert ("'.__('Update complete').'"); '.
					'window.location = "'.url::base().'user/setting/"'.
					'</script>';
						 
				} catch (ORM_Validation_Exception $e) {
					// Set failure message
					$message = 'There were errors, please see form below.';
					// Set errors using custom messages
					$errors = $e->errors('models');
					return;
				}
			}
			else
			{
				$message = 'Incorrect Password';
			}
        }	

	}
	

    public function action_profile() 
    {	
		
		// if a user is not logged in, redirect to login page
        if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }
	
       $action = $this->request->action();
	   
	   	
		$jobs = Kohana::$config->load('timebank')->get('jobs'); 
		
	
	   $this->template->content = View::factory('user/profile')
            ->bind('errors', $errors)
            ->bind('message', $message)
			->bind('skills', $skills)
			->bind('occupations', $occupations)
			->bind('action', $action)
			->bind('interest_tags', $interest_tags);
			
			
		
		$skill_list = explode ('|', $this->user->skills);
		$skills = array();
		for($i = 0 ; $i < count($skill_list) ; $i++)
		{
			$cut =  explode('=', $skill_list[$i]);
			if($cut[0] != ''){
				if(count($cut) >= 2)
				{ 
					$skills[$cut[0]] = $cut[1];
				}
				else 
				{
					$skills[$cut[0]] = 'true';	
				}
			}
		}	
		   $interest_tags = array();
		   $interests = explode(',', $this->user->interest_tags);
		  	foreach($interests as $interest)
			{
				for($i = 0 ; $i < count($jobs) ; $i++)
				{
					if($interest == $jobs[$i])
					{
						$interest_tags[] = $i;
						break;
					}
				}
			}
			
        if (HTTP_Request::POST == $this->request->method()) 
        {
			
			$errors = array();
			$this->user->nickname = Arr::get($_POST, 'nickname');
			$this->user->first_name = Arr::get($_POST, 'first_name');
			$this->user->last_name = Arr::get($_POST, 'last_name');
			
			if (Arr::get($_POST, 'phone') == '')
				 $errors['phone'] = __('phone much not empty.');
			$this->user->phone = Arr::get($_POST, 'phone');
			$year = Arr::get($_POST, 'year') - 543;
			$month = Arr::get($_POST, 'month');
			$day = Arr::get($_POST, 'day');
			$this->user->birthday = $year.'-'.$month.'-'.$day;
			$this->user->address = Arr::get($_POST, 'address');
			$this->user->location = Arr::get($_POST, 'location');
			$this->user->province = Arr::get($_POST, 'province');
			$this->user->website = Arr::get($_POST, 'website');
			$this->user->sex = Arr::get($_POST, 'sex');
			
			// add/remove skill for this user as data recieve from post
		
			 $this->user->skills = self::get_skill();
			 $this->user->skills .= self::get_laguate();
		
			 
			$tags = '';
			if (Arr::get($_POST, 'interest_1') != 0)
				$tags .= $jobs[Arr::get($_POST, 'interest_1')].',';
			if (Arr::get($_POST, 'interest_2') != 0)
				$tags .= $jobs[Arr::get($_POST, 'interest_2')].',';
			if (Arr::get($_POST, 'interest_3') != 0)
				$tags .= $jobs[Arr::get($_POST, 'interest_3')].',';
			if (Arr::get($_POST, 'interest_4') != 0)
				$tags .= $jobs[Arr::get($_POST, 'interest_4')];
				
			$this->user->interest_tags = $tags; 

			$tagvalidate = "";
			
			
			
			
			$tagvalidate = $jobs[Arr::get($_POST, 'interest_1')];
			$pos = strpos($tagvalidate, $jobs[Arr::get($_POST, 'interest_2')]);
			if (  $pos >= 0 && $pos !== false && Arr::get($_POST, 'interest_2') != 0)
				array_key_exists('interest_2', $errors) ? '': $errors['interest_2'] = __('do not duplicate') ;
			
			$tagvalidate .= $jobs[Arr::get($_POST, 'interest_2')];
			$pos = strpos($tagvalidate, $jobs[Arr::get($_POST, 'interest_3')]);
			if (  $pos >= 0 && $pos !== false && Arr::get($_POST, 'interest_3') != 0)
				array_key_exists('interest_3', $errors) ? '':  $errors['interest_3'] = __('do not duplicate') ;
			
			$tagvalidate .= $jobs[Arr::get($_POST, 'interest_3')];	
			$pos = strpos($tagvalidate, $jobs[Arr::get($_POST, 'interest_4')]);
			if (  $pos >= 0 && $pos !== false && Arr::get($_POST, 'interest_3') != 0)
				array_key_exists('interest_4', $errors) ? '': $errors['interest_4'] = __('do not duplicate') ;
			
			
							
			if (isset($_FILES['profile_image']['name']) && $_FILES['profile_image']['name'] != '')
			{
				$this->user->profile_image = 'profile_image';
			}
			
			$this->user->remove('tags');
			if (Arr::get($_POST, 'tag') != '')
			{
				
				$tags = explode(',', Arr::get($_POST, 'tag'));
			
				foreach($tags as $tag)
				{
					$temp = ORM::factory('tag', trim($tag));				
					if(!$temp->loaded())
					{
						$temp = ORM::factory('tag');
						$temp->name = trim($tag);
						$temp->save();
					}
					
					if(!$this->user->has('tags', $temp))
					{
						$this->user->add('tags', $temp);
					}
				}
			}
			if(count($errors) > 0) 
				return;

            try {
				
		
            	$this->user->save();       
                 
              	linkscreator::set_user_link($this->user);
				Request::current()->redirect('user/profile');
                 
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = 'There were errors, please see form below.';
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
            }
        }
		
	
    }
	
	private function get_laguate()
	{
		$languate = "";
		$Alanguates = Kohana::$config->load('timebank')->get('Alanguates');
		foreach( $Alanguates as $key => $value)
		{
			 $val = Arr::get($_POST,  $key);
			 
			 if($val == 'on')
			 { 
				 $languate .= $key.'|';
				foreach($value as $key2 => $value2)
				{
					
					$val = Arr::get($_POST,  $key2);
					
					if($val != '')
						$languate .= $val.'|';
				} 
			 }
			 else if($val != '' && phphelp::endsWith($key, 'TT'))
			{
				$languate .= $key.'='.$val.'|';
				foreach($value as $key2 => $value2)
				{
					
					$val2 = Arr::get($_POST,  $key2);
					
					if($val != '')
						$languate .= $val2.'='.$val.'|';
				} 
			}
			
		}

		return $languate;
	}
	 
	private function get_skill( $array_skill = NULL)
	{
		if($array_skill == NULL)
			$array_skill = Kohana::$config->load('timebank')->get('all_skills');
		
		 $skill = '';
		 foreach($array_skill  as $key => $val)
		 { 
			 if(is_array($val))
			 {
				 $skill .= self::get_skill($val);
			 }
			 else
			 {
				 $value = Arr::get($_POST,  $val);
				 if( $value != '') 
				 {
					 if($value == 'on')
					 {
						$skill .= $val.'|'; 
					 }
					 else if (phphelp::startsWith($value, 'S'))
					 {
						
						 $skill .= $value.'|'; 
					 }
					 else
					 {
						 $skill .= $val.'='.$value.'|'; 
					 }
				 }
			 }
		 }
		 return $skill;
	}
	
	public function action_checkhours()
	{
		$eventid = $this->request->param('id');
		if (!$this->user)
        {
			$back_url = urlencode('user/checkhours/'.$eventid);
			Request::current()->redirect('user/login?back_url='.$back_url);
			return;
        }
		
		$this->template->content = View::factory('user/checkhours')
										->bind('event', $event);
										
		$event_id = $this->request->param('id');
	
		$event = ORM::factory('event', $event_id);	
	}
	
	public function action_approvetime()
	{
		if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$event_id = $this->request->param('id');
			$event = ORM::factory('event', $event_id);
			$time = trim(Arr::get($_POST, 'time'));
			if($time == 'text')
			{
				$time = trim(Arr::get($_POST, 'text'));
			}
			
			if (!is_numeric($time) || $time <= 0 || $time > $event->time_cost)
			{	
				Request::current()->redirect('user/checkhours/'.$event_id);
				return;
			}
			
				
			$status = DB::select()->from('users_events')
						->where('user_id', '=',  $this->user->id)
						->where('event_id', '=',  $event_id)->execute()->get('time_approve', 0);
						
			if($status == 0)
			{
				
				// update timebank of user 
				// this process not synconize with  approve status action
				// status 2 means it comes from finshed event
				DB::insert('user_timebanks', array('user_id', 'status', 'hour', 'description'))
							->values( array($this->user->id, 2, -1*$time,'ได้รับจากงานอาสา '.$event->name))
							->execute();
							
				// update user approve status for event
				DB::update('users_events')->set(array('time_approve' => '1'))
						->where('user_id', '=',  $this->user->id)
						->where('event_id', '=',  $event_id)
						->execute();
				
				$time = Controller_User::getTotalTime($this->user->id);	
				
				if($time < 0 )
				{
					DB::insert('user_timebanks', array('user_id', 'status', 'hour', 'description'))
							->values( array($this->user->id, 1, -1*$time,'ระบบฝากเวลาเพิ่ม auto '.-1*$time. ' ชั่วโมง'))
							->execute();
				}
		
			
			}
		}
	
	 Request::current()->redirect('user/myevent?mode=1');
		
	}
	
    public function action_myevent()
    {
		$action = $this->request->action();
		$this->template->content = View::factory('user/myevent')
								->bind('records', $records)
								->bind('errors', $errors)
								->bind('action', $action)
								->bind('statuses', $statuses)
								->bind('mode', $mode);
        // if a user is not logged in, redirect to login page
        if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }
		$status = 0;
		if (HTTP_Request::GET == $this->request->method()) 
		{
			if(Arr::get($_GET, 'mode') == 1)
			{
				$mode = 1; //pass event
				$status = 1;		
			}
		}
		$events = $this->user->events->find_all();
		$query = DB::select()->from('users_events')->where('user_id', '=',  $this->user->id)->where('time_approve', '=', $status);
		$statuses = $query->execute()->as_array('event_id');
		$records = array();
		
		foreach ($events as $event)
		{
			if( !array_key_exists(trim($event->id), $statuses)) continue;
			
			$records[] = $event;
			
			// this only for first page (mode=0)
			if($mode != 1)
			{
				// event was closed and user was approved to event
				if($event->status == 0 && $statuses[$event->id]['status'] == 1)
				{
					// then this means that user waiting for approve time.
					$statuses[$event->id]['status'] = 2;
					
				}
				else if ($statuses[$event->id]['status'] == 1)
				{
					// user was approved.
					$statuses[$event->id]['status'] = 1;
				}
				else
				{
					// get number of users that were aprroved to go event.
					$approved = count(DB::select()->from('users_events')->where('event_id', '=', $event->id)->where('status', '=', '1')->execute());
					
					// if approved user equals need then change status to -1 (if status is 0)
					if ($event->volunteer_need_count <= $approved)
					{
						if($statuses[$event->id]['status'] == 0)
						{
							$statuses[$event->id]['status'] = -1;
						}
					}
				}
			}
		
		}
    }
	
    public function action_myeventpast()
    {
        if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }

		$action = $this->request->action();
		$this->template->content = View::factory('user/myeventpast')
							->bind('action', $action);
    }
	
    public function action_eventsearch()
    {
		Request::current()->redirect('event');
    }
	
    public function action_notification()
    {
        if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }

		$action = $this->request->action();
		$this->template->content = View::factory('user/notification')
							->bind('action', $action);

		if (HTTP_Request::POST == $this->request->method()) 
		{
			if (isset($_POST['noti_eventrecommended']))
				$this->user->noti_eventrecommended = 1;
			else
				$this->user->noti_eventrecommended = 0;
				
			if (isset($_POST['noti_eventapproved']))
				$this->user->noti_eventapproved = 1;
			else
				$this->user->noti_eventapproved = 0;
				
			if (isset($_POST['noti_almosteventdate']))
				$this->user->noti_almosteventdate = 1;
			else
				$this->user->noti_almosteventdate = 0;

			if (isset($_POST['noti_eventthank']))
				$this->user->noti_eventthank = 1;
			else
				$this->user->noti_eventthank = 0;
				
			if (isset($_POST['noti_eventcomment']))
				$this->user->noti_eventcomment = 1;
			else
				$this->user->noti_eventcomment = 0;	
				

			if (isset($_POST['noti_sms_eventapproved']))
				$this->user->noti_sms_eventapproved = 1;
			else
				$this->user->noti_sms_eventapproved = 0;

			if (isset($_POST['noti_sms_almosteventdate']))
				$this->user->noti_sms_almosteventdate = 1;
			else
				$this->user->noti_sms_almosteventdate = 0;
		
			if (isset($_POST['noti_sms_news']))
				$this->user->noti_sms_news = 1;
			else
				$this->user->noti_sms_news = 0;
			
			
			
			
			if (isset($_POST['noti_sms_event_matched_check']))
			{
				$this->user->noti_sms_event_matched = $_POST['noti_sms_event_matched'];
			}
			else
				$this->user->noti_sms_event_matched = 0;

			try
			{
				$this->user->save();
                 
				Request::current()->redirect('user/notification');
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                
                // Set errors using custom messages
                $errors = $e->errors('models');
            }
		}
    }
	
    public function action_inbox()
    {
        if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }

		$action = $this->request->action();
		$this->template->content = View::factory('user/inbox')
									->bind('inboxes', $inboxes)
									->bind('action', $action);

		$inboxes = ORM::factory('inbox')
						->where('user_id', '=', $this->user->id)
						->and_where('is_removed', '=', 0)
						->order_by('created', 'desc')
						->find_all();
    }
	
	public function action_inboxred()
    {
		$this->auto_render = false;
        if (!$this->user)
        {
			return;
		}
		
		$id = $this->request->param('id');
		$message = ORM::factory('inbox', $id);
		if($message->user_id == $this->user->id)
		{
			$message->is_read = 1;
			$message->save();
		}
    }

	public function action_deleteinbox()
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			if (!$this->user)
			{
				Request::current()->redirect('user/login');
				return;
			}
			
			$inbox_ids = Arr::get($_POST, 'ib');	
			
			if(count($inbox_ids) > 0)
			{
				foreach ($inbox_ids as $id)
				{
					$inbox = ORM::factory('inbox', array('id' => $id, 'user_id' => $this->user->id));
					$inbox->is_removed = 1;
					
					try
					{
						$inbox->save();
					} catch (ORM_Validation_Exception $e){}				
				}
			}
			Request::current()->redirect('user/inbox');
		}
	}	
	/*
    public function action_mytraining()
    {
		$action = $this->request->action();
		$this->template->content = View::factory('user/mytraining')
		->bind('action', $action);
    }
	*/

	public function action_setting()
    {
        // if a user is not logged in, redirect to login page
        if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }
		
		$action = $this->request->action();
		$this->template->content = View::factory('user/setting')
			->set('values', $_POST)
            ->bind('errors', $errors)
            ->bind('message', $message)
			->bind('action', $action);
			
        if (HTTP_Request::POST == $this->request->method()) 
        {
			//$email = Arr::get($_POST, 'email');
			$this->user->displayname = Arr::get($_POST, 'displayname');
			
			try
			{
					$this->user->save();       
					echo'<script>'.
						'alert ("'.__('Update complete').'"); '.
						'</script>';
					 
			}
			catch (ORM_Validation_Exception $e) 
			{
					// Set failure message
					$message = 'There were errors, please see form below.';
					// Set errors using custom messages
					$errors = $e->errors('models');
					return;
			}
        }
    }

	public function action_changepassword()
	{
        // if a user is not logged in, redirect to login page
        if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }
		
		$action = $this->request->action();
		$this->template->content = View::factory('user/password')
			->set('values', $_POST)
            ->bind('errors', $errors)
            ->bind('message', $message)
			->bind('action', $action);
			
        if (HTTP_Request::POST == $this->request->method()) 
        {
			$password = Arr::get($_POST, 'password');
			if ($password == '')
			{
				$message = ('There were errors, please see form below.');
				$errors = array('password' => 'Password can\'t be empty.');
				return;
			}
			
			if (Arr::get($_POST, 'newpassword') != Arr::get($_POST, 'newpasswordconfirm'))
			{
				$message = ('There were errors, please see form below.');
				$errors = array('newpasswordconfirm' => 'The password fields did not match.');
				return;
			}
			
			$hash_password = $this->user->oldhash_password($password);
			if ($this->user->password == $hash_password)
			{
				$this->user->password = Arr::get($_POST, 'newpassword');
									
				try
				{
					$this->user->save();       
				  	echo'<script>'.
						'alert ("'.__('Update complete').'"); '.
						'window.location = "'.url::base().'user/setting/"'.
						'</script>';
						 
				} catch (ORM_Validation_Exception $e) {
					// Set failure message
					$message = 'There were errors, please see form below.';
					// Set errors using custom messages
					$errors = $e->errors('models');
					return;
				}
			}
			else
			{
				$message = 'Incorrect Password';
			}
        }		
	}
	
	public function action_view()
	{
		if (!$this->orguser && !isset($this->user) )
        {
			Request::current()->redirect('user/login');
				return;
        }
		else if (isset($this->user) && $this->user->role != 2)
		{
			Request::current()->redirect('user/login');
				return;
		}
	    $this->template->content = View::factory('user/view')
							->bind('view_user', $view_user)
							->bind('time', $time)
							->bind('work_time', $work_time)
							->bind('events', $events)
							->bind('mode', $mode);
		
		$view_user = ORM::factory('user', $this->request->param('id'));
		// if a user is not logged in, redirect to login page
        if (!$view_user->loaded())
        {
            Request::current()->redirect('user/login');
			return;
		}
 
	
		$time = DB::select(array('SUM("hour")', 'time'))
				->from('user_timebanks') 	
				->where('status','=','1')
				->where('user_id','=',$view_user->id)->execute()->get('time', 0);
		$work_time = 0;		
		
		$pass_event = $view_user->events->where('event.status', '=', '0')->find_all();
		foreach($pass_event as $pass)
		{
			$work_time += $pass->time_cost;
		}
		
		$mode = Arr::get($_GET, 'mode');
		if($mode == '' || $mode == '1')
		{
			$status = 0;
			$mode  = 1;
		}
		else
		{
			$status = 1;
		}
		$event = array();
		$query = DB::select()->from('users_events')->where('user_id', '=',  $view_user->id)->where('time_approve', '=', $status);
		$user_events = DB::select()->from('events')->execute()->as_array();
		$statuses = $query->execute()->as_array('event_id');
		$now = date("Y-m-d");
		for($i = 0; $i < count($user_events); $i++)
		{
				
			if (array_key_exists($user_events[$i]['id'], $statuses) )
			{
				if($status == 0)
				{	
					$event_id = $user_events[$i]['id'];
					$userstatus = $statuses[$event_id]['status'];
					
					$signup_end_date = $user_events[$i]['signup_end_date'];
					$volunteer_begin_date = $user_events[$i]['volunteer_begin_date'];
					
					if($userstatus == 1 && $now <= $volunteer_begin_date)
					{	$user_events[$i]['ustatus'] = 'ได้รับการตอบรับ';
						$events[] = $user_events[$i];
					}
					else if($userstatus == 0 && $now <= $signup_end_date)
					{
						$user_events[$i]['ustatus'] = 'รอการตอบรับ';
						$events[] = $user_events[$i];
					}
				}
				else
				{
					$events[] = $user_events[$i];
				}
			}
		}
	}
	
	public function action_checkdata()
	{
		$eventid = $this->request->param('id');

		if (!isset($this->user))
		{
			$back_url = urlencode('user/checkdata/'.$eventid);
			Request::current()->redirect('user/login?back_url='.$back_url);
		}
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
		 	$this->template->content = View::factory('user/checkdata')
										->bind('user', $this->user)
										->bind('eventid', $evetnid)
										->bind('errors', $errors);
			$errors = array();
			try
			{
				/*$this->user->nickname = Arr::get($_POST, 'nickname');
				if($this->user->nickname == '')
					$errors['nickname'] = __('nickname much not empty.');
				*/	
				$this->user->first_name = Arr::get($_POST, 'first_name');
				if($this->user->first_name == '')
					$errors['first_name'] = __('first_name much not empty.');
					
				$this->user->last_name = Arr::get($_POST, 'last_name');
				if($this->user->last_name == '')
					$errors['last_name'] = __('last_name much not empty.');
					
				$this->user->phone = Arr::get($_POST, 'phone');
				if($this->user->phone == '')
					$errors['phone'] = __('phone much not empty.');
				
				if (count($errors) > 0)
					return;
				$this->user->save();	 
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}
		
		if(	$this->user->first_name == '' ||
			$this->user->last_name == '' ||
			$this->user->phone == '')
		{
			 $this->template->content = View::factory('user/checkdata')
										->bind('user', $this->user)
										->bind('eventid', $eventid)
										->bind('errors', $errors); 
		}
		else
		{
			if (Controller_User::getTotalTime($this->user->id) <= 0 )
			{
				Request::current()->redirect('user/record?message=Thank you, your mission is complete.');
			}
			else if($eventid == '')
			{
				Request::current()->redirect('user/profile');
			}
			else
			{
				Request::current()->redirect('event/apply/'.$eventid);	
			}
			
		}
	
	}
	public function action_login()
	{
		// If user already logged in
		if (isset($this->user))
		{
			timebankhelper::redirectToHome();
		}

		$this->template->content = View::factory('user/login')
									->bind('message', $message)
									->bind('errors', $errors);

		if (HTTP_Request::POST == $this->request->method()) 
		{
			$user = $this->login(Arr::get($_POST, 'email'), Arr::get($_POST, 'password'));
			
			if ($user !== FALSE)
			{
				$user_roles = Kohana::$config->load('timebank')->get('user_roles');
				$redirect_url = '';
				if ($user->role == $user_roles['volunteer'])
				{
                	$redirect_url = 'user/index';
				}
				else
				{
					// Find organization that belong to this user
					$organization = ORM::factory('organization')
								->where('user_id', '=', $user->id)
								->find();

					if ($organization->loaded())
					{
						if ($organization->verified == 0)
						{
							Controller_User::logout();
							$message = ('Account is not verified by JitArsa Bank team yet. Please wait.');
							return;
						}
					}
					
					$redirect_url = 'organization/index';
				}
				

				if (Arr::get($_POST, 'back_url') != '')
				{
					Request::current()->redirect(Arr::get($_POST, 'back_url'));
				}
				else
				{
					Request::current()->redirect($redirect_url);
				}
			}
			else
			{
				$message = ('Email or password is incorrect.');
			}
		}
	}

	public static function get_logged_in_user()
	{
		$session = Session::instance(Session::$default);
		
		$user = $session->get(Session::$default, NULL);
		if (is_null($user) || is_null($user->id))
		{
			return NULL;
		}
		else
		{
			return $user;
		}
	}

	public static function login($email, $password)
	{
		if (empty($password))
			return FALSE;

		$user = ORM::factory('user', array('email' => $email));
		if (!$user->loaded())
		{
			return FALSE;
		}
		
		$hash_password = $user->oldhash_password($password);
		if ($user->password == $hash_password)
		{
			$session = Session::instance(Session::$default);
			
			// Regenerate session_id
			$session->regenerate();
	
			// Store username in session
			$session->set(Session::$default, $user);
			return $user;
		}
		else
		{
			return FALSE;
		}
	}
	
	public static function getTotalWorkedTime($id)
	{
		return -1* DB::select(array('SUM("hour")', 'time'))
				->from('user_timebanks') 	
				->where('status','=','2')
				->where('user_id','=',$id)->execute()->get('time', 0);
	}
	public static function getTotalTime($id)
	{
		return DB::select(array('SUM("hour")', 'time'))
					->from('user_timebanks') 	
					->where('user_id','=',$id)->execute()->get('time', 0);
	} 
	
	public static function logout()
	{
		$session = Session::instance(Session::$default);
		$session->destroy();
	}
	
	public static function action_logout()
	{
		Controller_User::logout();
		// Redirect
		timebankhelper::redirectToHome();
	}
	
	
	///////////////////////////////////////////
	// Below is test/snippet function only
	
	public function action_test()
	{
        $this->template->content = View::factory('user/index');
         
        // Load the user information
		$activity = ORM::factory('activity');
		$activity->name = "pack sand";
		$activity->description = "pack description";
		$activity->save();
		
		// Attach activity to user (many-to-many)
		$this->user->add('activities', ORM::factory('activity', array('name' => 'pack sand'), array('test' => 'lnw')));
	}

	public function snippet()
	{
		// Create an timebank and attach it to the user (one-to-many)
		$timebank = ORM::factory('user_timebank')->values(array(
			'approve'       => 5,
			'status'  		=> 22,
			'user_id'		=> $user->id, // sets the fk
		));
		$timebank->save();
		
		///////////////
		
		// Create skill
		$skill = ORM::factory('skill');
		$skill->name = "programmer";
		$skill->description = "programmer description";
		$skill->save();
		
		// Attach skill to user (many-to-many)
		$user->add('skills', ORM::factory('skill', array('name' => 'programmer')));

		///////////////

		// Create occupation
		$occupation = ORM::factory('occupation');
		$occupation->name = "developer";
		$occupation->description = "developer description";
		$occupation->save();
		
		// Attach occupation to user (many-to-many)
		$user->add('occupations', ORM::factory('occupation', array('name' => 'developer')));
		
		///////////////

		// Create location
		$location = ORM::factory('location');
		$location->name = "laksi";
		$location->description = "laksi description";
		$location->save();
		
		// Attach location to user (many-to-many)
		$user->add('locations', ORM::factory('location', array('name' => 'laksi')));
		
		///////////////

		// Create activity
		$activity = ORM::factory('activity');
		$activity->name = "pack sand";
		$activity->description = "pack description";
		$activity->save();
		
		// Attach activity to user (many-to-many)
		$user->add('activities', ORM::factory('activity', array('name' => 'pack sand')));
		
		///////////////

		// Create company
		$company_type = ORM::factory('company_type');
		$company_type->name = 'private sector';
		$company_type->save();
		
		$company = ORM::factory('company');
		$company->user = $user;
		$company->objective = "objobj";
		$company->company_type = $company_type;
		$company->save();
		
		///////////////

		// Create event
		$event = ORM::factory('event');
		$event->phone = "089";
		$event->location = ORM::factory('location', 4);
		$event->company = ORM::factory('company', 2);
		$event->save();
		
	}
 
}