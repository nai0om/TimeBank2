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

        $this->template->content = View::factory('user/index');
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

		$this->template->content = View::factory('user/record')
								->bind('records', $records)
								->bind('errors', $errors)
								->bind('total_hour', $total_hour);
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
            try {
         
               	// Create an timebank and attach it to the user (one-to-many)
				$timebank = ORM::factory('user_timebank')->values(array(
					'hour'			=> Arr::get($_POST, 'hour'),
					'status'  		=> 1,
					'user_id'		=> $this->user->id, // sets the fk
				));
				$timebank->save();
				
				Request::current()->redirect('user/record');
                 
            } catch (ORM_Validation_Exception $e) {
                 
                // Set errors using custom messages
				$this->template->content = View::factory('user/record')
					->bind('errors', $errors)
					->bind('records', $records);

                $errors = $e->errors('models');
				$records = ORM::factory('user_timebank')->where('user_id', '=', $this->user->id)->find_all();
            }
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
			$user->email = Arr::get($_POST, 'email');
			
			if (Arr::get($_POST, 'password') == '')
			{
				$message = __('There were errors, please see form below.');
				$errors = array('password' => 'Password can\'t be empty.');
				return;
			}

			if (Arr::get($_POST, 'password') != Arr::get($_POST, 'password_confirm'))
			{
				$message = __('There were errors, please see form below.');
				$errors = array('password_confirm' => 'The password fields did not match.');
				return;
			}
	
			$user->password = Arr::get($_POST, 'password');
			$user_roles = Kohana::$config->load('timebank')->get('user_roles');
			$user->role = $user_roles['volunteer'];

			try
			{
				$user->save();
                 
				// Redirect
				Request::current()->redirect('/user/index');
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                
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
		
        $this->template->content = View::factory('user/profile')
            ->bind('errors', $errors)
            ->bind('message', $message);
             
        if (HTTP_Request::POST == $this->request->method()) 
        {
			$this->user->nickname = Arr::get($_POST, 'nickname');
			$this->user->first_name = Arr::get($_POST, 'first_name');
			$this->user->last_name = Arr::get($_POST, 'last_name');
			$this->user->phone = Arr::get($_POST, 'phone');
			$this->user->birthday = Arr::get($_POST, 'birthday');
			$this->user->address = Arr::get($_POST, 'address');
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
				$message = __('Email or password is incorrect.');
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