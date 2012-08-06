<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Organization extends Controller_Template {
	
	public function action_indexold()
	{
		if (is_null($this->orguser))
		{
			Request::current()->redirect('user/login');
		}
		
		/*$query = 
				SELECT events.name as event_name , events.id as event_id, users_events.user_id as user_id, users.username as user_name, users_events.timestamp
				FROM 
				events 
				INNER JOIN companies     ON companies.id =  events.company_id
				INNER JOIN users_events   ON events.id  = users_events.event_id
				INNER JOIN users   ON users.id  = users_events.user_id
				where companies.id='5'
				Order by users_events.timestamp DESC; */
		/*		
		$query = DB::select(
						array('events.name', 'event_name'),
						array('events.id', 'event_id'),
						array('users.id', 'user_id'),
						array('users.username', 'user_name'),
						array('users_events.timestamp', 'timestamp')
						)
			->from('events')
			->join('companies','INNER')->on('companies.id', '=', 'events.company_id')
			->join('users_events','INNER')->on('events.id', '=', 'users_events.event_id')
			->join('users','INNER')->on('users.id', '=', 'users_events.user_id')
			->where('companies.id', '=',$company->id)
			->order_by('users_events.timestamp', 'DESC');
		
		$user_event = $query->execute();
		
		$query = DB::select(
						array('events.name', 'event_name'),
						array('events.id', 'event_id'),
						array('users.id', 'user_id'),
						array('users.username', 'user_name'),
						array('comments.ip', 'user_ip'),
						array('comments.timestamp', 'timestamp')
						)
			->from('events')
			->join('companies','INNER')->on('companies.id', '=', 'events.company_id')
			->join('comments','INNER')->on('events.id', '=', 'comments.event_id')
			->join('users','LEFT')->on('users.id', '=', 'comments.user_id')
			->where('companies.id', '=',$company->id)
			->order_by('comments.timestamp', 'DESC');
		
		$coments_update = $query->execute();
		
		$this->template->content = View::factory('company/index')
			->bind('company', $company)
			->bind('coments_update', $coments_update)
			->bind('user_event', $user_event);
		*/
	}

	public function action_create()
	{		
		$this->template->content = View::factory('organization/create')
									->bind('message', $message)
									->bind('errors', $errors)
									->bind('organization', $organization)
									->bind('newuser', $user);
		$user = ORM::factory('user');	
		$organization = ORM::factory('organization');		
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			// Prepare data for user
			$user->email = Arr::get($_POST, 'email');
			$user->password = Arr::get($_POST, 'password');
			$user_roles = Kohana::$config->load('timebank')->get('user_roles');
			$user->role = $user_roles['organization'];

			// Prepare data for organization
			$organization->name = Arr::get($_POST, 'name');
			$organization->objective = Arr::get($_POST, 'objective');
			$organization->activity = Arr::get($_POST, 'activity');
			$organization->address = Arr::get($_POST, 'address');
			$organization->province = Arr::get($_POST, 'province');
			$organization->postcode = Arr::get($_POST, 'postcode');
			$organization->district = Arr::get($_POST, 'district');
			$organization->fax = Arr::get($_POST, 'fax');
			$organization->homephone = Arr::get($_POST, 'homephone');			
			$organization->contactperson = Arr::get($_POST, 'contactperson');			
			$organization->facebook = Arr::get($_POST, 'facebook');			
			$organization->twitter = str_replace('@', '', Arr::get($_POST, 'twitter'));	
			$organization->website = Arr::get($_POST, 'website');			

			// First level validation
			if (Arr::get($_POST, 'acceptterm') == '')
			{
				$message = __('There were errors, please see form below.');
				$errors = array('acceptterm' => 'Please accept term&condition.');
				return;
			}
						
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

			try
			{
				// Pre-validation before save all value
				$user_check = $user->check();

				$organization->user_id = 0;
				$organization_check = $organization->check();
				
				// Save this new user
				$user->save();
				$organization->user_id = $user->id;
				$organization->save();

				// Send email
				TimebankNotification::notify_new_organization($user, $organization, Arr::get($_POST, 'password'));
					
				// Log in
				Controller_User::login(Arr::get($_POST, 'email'), Arr::get($_POST, 'password'));

				// Redirect
				Request::current()->redirect('/organization/index');
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                
                // Set errors using custom messages
                $errors = $e->errors('models');
				//print_r($errors);
            }
		}
	}
	
	public function action_index()
	{
		if (is_null($this->orguser))
		{
			Request::current()->redirect('user/login');
		}
		
		Request::current()->redirect('/organization/view/'.$this->orguser->id);
	
	}
	
	public function action_profile()
	{
		if (is_null($this->orguser))
		{
			Request::current()->redirect('user/login');
		}

        $this->template->content = View::factory('organization/profile')
            ->bind('message', $message)
			->bind('errors', $errors)
			->bind('organization', $this->orguser);
		
		$this->save_organization($message, $errors);
	}

	public function action_event()
	{
		if (is_null($this->orguser))
		{
			Request::current()->redirect('user/login');
		}

        $this->template->content = View::factory('organization/event')
			->bind('events', $events)
			->bind('mode', $mode);
			
		if (HTTP_Request::GET == $this->request->method()) 
		{
			$mode =	Arr::get($_GET, 'mode');
			if($mode =='1')
			{
				// closed event
				$events = $this->orguser->events->where('status', '=', '0')->find_all()->as_array();
			}
			else
			{
				$events = $this->orguser->events->where('status', '=', '1')->find_all()->as_array();
			}
		}
		
	}
		
	public function action_notification()
	{
		if (is_null($this->orguser))
		{
			Request::current()->redirect('user/login');
		}

        $this->template->content = View::factory('organization/notification')
			->bind('organization', $this->orguser);
	
		$this->save_notification();
	}

	public function action_inbox()
	{
		if (is_null($this->orguser))
		{
			Request::current()->redirect('user/login');
		}

        $this->template->content = View::factory('organization/inbox')
			->bind('organization', $this->orguser)
			->bind('inboxes', $inboxes);
			
		$inboxes = ORM::factory('inbox')
						->where('organization_id', '=', $this->orguser->id)
						->and_where('is_removed', '=', 0)
						->order_by('created', 'desc')
						->find_all();
	}
	
	public function action_deleteinbox()
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			if (is_null($this->orguser))
			{
				Request::current()->redirect('user/login');
			}
			
			$inbox_ids = Arr::get($_POST, 'ib');	
			
			foreach ($inbox_ids as $id)
			{
				$inbox = ORM::factory('inbox', array('id' => $id, 'organization_id' => $this->orguser->id));
				$inbox->is_removed = 1;
				
				try
				{
					$inbox->save();
				} catch (ORM_Validation_Exception $e){}				
			}
			
			Request::current()->redirect('organization/inbox');
		}
	}
		
	public function action_view()
	{
        $this->template->content = View::factory('organization/view')
            ->bind('organization', $organization)
            ->bind('org_user', $org_user)
			->bind('hours_sum', $hours_sum)
			->bind('total_valun', $total_valun)
			->bind('events', $events);
		
		$organization = ORM::factory('organization', $this->request->param('id'));
		if (is_null($organization))
		{
			throw new HTTP_Exception_404(__('Organization id :id not found', array(':id' => $this->request->param('id'))));
		}
		
		$org_user = ORM::factory('user', $organization->user_id);
		$mode = 1;
		if (HTTP_Request::GET == $this->request->method()) 
		{
			$mode = Arr::get($_GET, 'mode');
		
		}
		if($mode == 2)
		{
			//closed events
			$events = $organization->events->where('event.status', '=', '0')->find_all();	
		}
		else
		{
			// open events
			$events = $organization->events->where('event.status', '=', '1')->find_all();	
		}
		$hours_sum = 0;		
		$total_valun = 0;
		$events_pass = $organization->events->where('event.status', '=', '0')->find_all();					
		foreach($events_pass as $event)
		{
			$hours_sum +=  $event->time_cost * $event->volunteer_joined;
			$total_valun += $event->volunteer_joined;
		}
	}
	
	/*
	public function action_all()
	{
		$companies = ORM::factory('company')->find_all();
		$this->template->content = View::factory('company/all')->bind('companies', $companies);
	}
	
	public function action_search()
	{
		if (HTTP_Request::GET == $this->request->method()) 
		{
			$message =  'Search: '.Arr::get($_GET, 'q');
			$query =  '%'.Arr::get($_GET, 'q').'%';
			$companies = ORM::factory('company')->where('temp', 'like', $query)->find_all();
			$this->template->content = View::factory('company/search')
				->bind('message', $message)
				->bind('companies', $companies);
		}
	}
	*/

	private function save_notification()
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			if (isset($_POST['noti_volunteerregister']))
				$this->orguser->noti_volunteerregister = 1;
			else
				$this->orguser->noti_volunteerregister = 0;
				
			if (isset($_POST['noti_eventend']))
				$this->orguser->noti_eventend = 1;
			else
				$this->orguser->noti_eventend = 0;
				
			if (isset($_POST['noti_eventalmostend']))
				$this->orguser->noti_eventalmostend = 1;
			else
				$this->orguser->noti_eventalmostend = 0;
			try
			{
				$this->orguser->save();
				
				Request::current()->redirect('organization/notification');
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                
                // Set errors using custom messages
                $errors = $e->errors('models');
				print_r($errors);
            }
		}
	}
		
	private function save_organization(&$message, &$errors)
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$this->orguser->name = Arr::get($_POST, 'name');
			$this->orguser->objective = Arr::get($_POST, 'objective');
			$this->orguser->activity = Arr::get($_POST, 'activity');
			$this->orguser->address = Arr::get($_POST, 'address');
			$this->orguser->province = Arr::get($_POST, 'province');
			$this->orguser->postcode = Arr::get($_POST, 'postcode');
			$this->orguser->district = Arr::get($_POST, 'district');
			$this->orguser->fax = Arr::get($_POST, 'fax');
			$this->orguser->homephone = Arr::get($_POST, 'homephone');			
			$this->orguser->contactperson = Arr::get($_POST, 'contactperson');			
			$this->orguser->facebook = Arr::get($_POST, 'facebook');			
			$this->orguser->twitter = str_replace('@', '', Arr::get($_POST, 'twitter'));	
			$this->orguser->website = Arr::get($_POST, 'website');			
			//$company->search_temp = $company->name.'/'.$company->objective.'/'.$company->address.'/'.$company->detail.'/'.$company->website;
			if (isset($_FILES['logo']['name']) && $_FILES['logo']['name'] != '')
			{
				$this->orguser->logo = $_FILES['logo']['name'];
			}
			
			try
			{
				$this->orguser->save();
                 
				Request::current()->redirect('organization/profile');
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                
                // Set errors using custom messages
                $errors = $e->errors('models');
				//print_r($errors);
            }
		}
	}
	
	public function action_setting()
    {
        // if a user is not logged in, redirect to login page
		if (is_null($this->orguser))
        {
            Request::current()->redirect('user/login');
			return;
        }
		
		$action = $this->request->action();
		$org_user = ORM::factory('user', $this->orguser->user_id);
		$this->template->content = View::factory('organization/setting')
			->bind('action', $action)
			->bind('org_user', $org_user);
    }

	public function action_changepassword()
	{
        // if a user is not logged in, redirect to login page
		if (is_null($this->orguser))
        {
            Request::current()->redirect('user/login');
			return;
        }
		
		$action = $this->request->action();
		$this->template->content = View::factory('organization/password')
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
			
			$org_user = ORM::factory('user', $this->orguser->user_id);
			$hash_password = $org_user->hash_password($password);
			if ($org_user->password == $hash_password)
			{
				$org_user->password = Arr::get($_POST, 'newpassword');
									
				try
				{
					$org_user->save();       
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

}