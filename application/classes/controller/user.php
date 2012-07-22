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
		->bind('events', $events);
		
		$time = DB::select(array('SUM("hour")', 'time'))
				->from('timebank_test.user_timebanks') 	
				->where('status','=','1')
				->where('user_id','=',$this->user->id)->execute()->get('time', 0);
		$work_time = 0;		
		$pass_event = $this->user->events->where('event.status', '=', '0')->find_all();
		foreach($pass_event as $pass)
		{
			$work_time += $pass->time_cost;
		}
		
			
		$events = ORM::factory('event')->order_by('timestamp','desc')->limit(3)->find_all();
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
								->bind('errors', $errors)
								->bind('time', $time)
								->bind('work_time', $work_time)
								->bind('action', $action);
								
		$time = DB::select(array('SUM("hour")', 'time'))
				->from('timebank_test.user_timebanks') 	
				->where('status','=','1')
				->where('user_id','=',$this->user->id)->execute()->get('time', 0);
		$work_time = 0;		
		$pass_event = $this->user->events->where('event.status', '=', '0')->find_all();
		foreach($pass_event as $pass)
		{
			$work_time += $pass->time_cost;
		}
		
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
            try {
         
               	// Create an timebank and attach it to the user (one-to-many)
				$timebank = ORM::factory('user_timebank')->values(array(
					'hour'			=> Arr::get($_POST, 'hour'),
					'status'  		=> 1,
					'user_id'		=> $this->user->id, // sets the fk
				));
				$timebank->save();
           //  Request::current()->redirect('user/record');    
            } catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('models');
            }
			  Request::current()->redirect('user/record')->bind('errors', $errors);        
		}	
	}
	
    public function action_signup()
    {
		$this->template->content = View::factory('user/signup');
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
		
			if (Arr::get($_POST, 'acceptterm') == '')
			{
				$message = ('There were errors, please see form below.');
				$errors = array('acceptterm' => 'Please accept term&condition.');
				return;
			}
			
			$user->email = Arr::get($_POST, 'email');
			
			if (Arr::get($_POST, 'password') == '')
			{
				$message = ('There were errors, please see form below.');
				$errors = array('password' => 'Password can\'t be empty.');
				return;
			}

			if (Arr::get($_POST, 'password') != Arr::get($_POST, 'password_confirm'))
			{
				$message = ('There were errors, please see form below.');
				$errors = array('password_confirm' => 'The password fields did not match.');
				return;
			}
			if (!is_numeric(Arr::get($_POST, 'hour')))
			{
				$message = ('There were errors, please see form below.');
				$errors = array('hour' => 'Please insert hours number.');
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
				if (Arr::get($_POST, 'hour') != '')
				{
					try {
				 
						// Create an timebank and attach it to the user (one-to-many)
						$timebank = ORM::factory('user_timebank')->values(array(
							'hour'			=> Arr::get($_POST, 'hour'),
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
				// Redirect
				Request::current()->redirect('/user/index');
				
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

    public function action_profile() 
    {
		
		// if a user is not logged in, redirect to login page
        if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }
	
       $action = $this->request->action();
	   $interest = $this->user->interest_tags; 
	   $this->template->content = View::factory('user/profile')
            ->bind('errors', $errors)
            ->bind('message', $message)
			->bind('skills', $skills)
			->bind('occupations', $occupations)
			->bind('action', $action)
			->bind('interest_tags', $interest);
			
        if (HTTP_Request::POST == $this->request->method()) 
        {
			
			$this->user->nickname = Arr::get($_POST, 'nickname');
			$this->user->first_name = Arr::get($_POST, 'first_name');
			$this->user->last_name = Arr::get($_POST, 'last_name');
			$this->user->phone = Arr::get($_POST, 'phone');
			$this->user->birthday = Arr::get($_POST, 'birthday');
			$this->user->address = Arr::get($_POST, 'address');
			$this->user->location = Arr::get($_POST, 'location');
			$this->user->province = Arr::get($_POST, 'province');
			$this->user->website = Arr::get($_POST, 'website');
			$this->user->sex = Arr::get($_POST, 'sex');

			if (isset($_FILES['profile_image']['name']) && $_FILES['profile_image']['name'] != '')
			{
				$this->user->profile_image = 'profile_image';
			}
			

            try {
				
            	$this->user->save();       
                 
                // Redirect to user view
				Request::current()->redirect('user/profile');
                 
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = 'There were errors, please see form below.';
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
            }
        }
		
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
    }
	
    public function action_addskill() 
    {
		
        if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }
             
        if (HTTP_Request::POST == $this->request->method()) 
        {
			
			// add/remove skill for this user as data recieve from post
			 $dict = Kohana::$config->load('timebank')->get('worddict');
			 $skill = '';
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
			 $this->user->skills = $skill;
			 
			$jobs = Kohana::$config->load('timebank')->get('jobs'); 
			$tags = '';
			foreach ($jobs as $job){
				$job =  str_replace(' ', '_', $job);
				if ( Arr::get($_POST, $job) != '')
						$tags  = $tags.''.Arr::get($_POST, $job) .', ';
			}
			$this->user->interest_tags = $tags; 
			try {
						$this->user->save();       
						 
				} catch (ORM_Validation_Exception $e) {
						// Set failure message
						$message = 'update error.';
					
						
				}
        }
		
           Request::current()->redirect('user/profile');
		
		
		
    }
	
    public function action_myevent()
    {
        // if a user is not logged in, redirect to login page
        if (!$this->user)
        {
            Request::current()->redirect('user/login');
			return;
        }
		
		$records = $this->user->events->find_all();
		

		$action = $this->request->action();
		$this->template->content = View::factory('user/myevent')
								->bind('records', $records)
								->bind('errors', $errors)
								->bind('action', $action);
	

    }
	
    public function action_myeventpast()
    {
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
		$action = $this->request->action();
		$this->template->content = View::factory('user/notification')
		->bind('action', $action);
    }
	
    public function action_inbox()
    {
		$action = $this->request->action();
		$this->template->content = View::factory('user/inbox')
		->bind('action', $action);
    }
	
    public function action_mytraining()
    {
		$action = $this->request->action();
		$this->template->content = View::factory('user/mytraining')
		->bind('action', $action);
    }
	

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
					$message = 'Update complete';
					 
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
			
			$hash_password = $this->user->hash_password($password);
			if ($this->user->password == $hash_password)
			{
				$this->user->password = Arr::get($_POST, 'newpassword');
									
				try
				{
					$this->user->save();       
					$message = 'Update complete';
						 
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
        $this->template->content = View::factory('user/view')
            ->bind('user_view', $user_view);
		
		$user_view = ORM::factory('user', $this->request->param('id'));
		
		if (!$user_view->loaded())
		{
			throw new HTTP_Exception_404(__('User id :id not found', array(':id' => $this->request->param('id'))));
		}
	}
	
	public function action_checkdata()
	{
        
		if (!isset($this->user))
		{
			Request::current()->redirect('user/login');
		}
		
		$eventid = $this->request->param('id');
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
		 $this->template->content = View::factory('user/checkdata')
										->bind('user', $this->user)
										->bind('eventid', $evetnid)
										->bind('errors', $errors);
			try
			{
				$this->user->nickname = Arr::get($_POST, 'nickname');
				$this->user->first_name = Arr::get($_POST, 'first_name');
				$this->user->last_name = Arr::get($_POST, 'last_name');
				$this->user->phone = Arr::get($_POST, 'phone');
				$this->user->save();	 
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('models');
			}
		}
		
		if($this->user->nickname == '' ||
			$this->user->first_name == '' ||
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
			if($eventid == '')
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
			Request::current()->redirect('/');
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
				if ($user->role == $user_roles['volunteer'])
				{
                	Request::current()->redirect('user/index');
				}
				else
				{
                	Request::current()->redirect('organization/index');
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
		
		$hash_password = $user->hash_password($password);
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
		    
	public static function logout()
	{
		$session = Session::instance(Session::$default);
		$session->destroy();
	}
	
	public static function action_logout()
	{
		Controller_User::logout();
		// Redirect
		Request::current()->redirect('/');
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