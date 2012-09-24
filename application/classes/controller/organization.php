<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Organization extends Controller_Template {
	
	public function action_indexold()
	{
		if (is_null($this->orguser))
		{
			Request::current()->redirect('user/login');
		}
		
	}

	public function action_createwait()
	{		
		$this->template->content = View::factory('organization/createwait');
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
			$errors = array();
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
			$organization->mobilephone = Arr::get($_POST, 'mobilephone');	
			$organization->contactperson = Arr::get($_POST, 'contactperson');			
			$organization->facebook = Arr::get($_POST, 'facebook');			
			$organization->twitter = str_replace('@', '', Arr::get($_POST, 'twitter'));	
			$organization->website = Arr::get($_POST, 'website');			

			// First level validation
			if (Arr::get($_POST, 'acceptterm') == '')
			{
				$errors['acceptterm'] = __('Please accept term&condition.');
				
			}
						
			if (Arr::get($_POST, 'password') == '')
			{
				
				$errors['password'] = __('Password can\'t be empty.');
				
			}

			if (Arr::get($_POST, 'password') != Arr::get($_POST, 'password_confirm'))
			{
				
				$errors['password_confirm'] = __('The password fields did not match.');
			
			}
	
			try
			{
				try
				{
					// Pre-validation before save all value
					$user_check = $user->check();
	
					$organization->user_id = 0;
					$organization_check = $organization->check();
									
					 
					// Save this new user
				
					$user->save();
				} catch (ORM_Validation_Exception $e) {
					$errors = array_merge ($e->errors('models'), $errors );
					
				}
				$organization->user_id = $user->id;
				
					$organization->save();
	

				// Send email
				TimebankNotification::notify_new_organization($user, $organization, Arr::get($_POST, 'password'));
					
				// Log in
				//Controller_User::login(Arr::get($_POST, 'email'), Arr::get($_POST, 'password'));

				// Redirect
				Request::current()->redirect('/organization/createwait');
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                
                // Set errors using custom messages
                $errors = array_merge ($e->errors('models'), $errors );
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
	
	public function action_inboxred()
    {
		$this->auto_render = false;
        if (!$this->orguser)
        {
			return;
		}
		
		$id = $this->request->param('id');
		$message = ORM::factory('inbox', $id);
		if($message->organization_id == $this->orguser->id)
		{
			$message->is_read = 1;
			$message->save();
		}
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
			if(count($inbox_ids) > 0 )
			{
				foreach ($inbox_ids as $id)
				{
					$inbox = ORM::factory('inbox', array('id' => $id, 'organization_id' => $this->orguser->id));
					$inbox->is_removed = 1;
					
					try
					{
						$inbox->save();
					} catch (ORM_Validation_Exception $e){}				
				}
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
			->bind('events', $events)
			->bind('mode', $mode);
		
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
				
			if (isset($_POST['noti_volunteercancel']))
				$this->orguser->noti_volunteercancel = 1;
			else
				$this->orguser->noti_volunteercancel = 0;
					
				
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
			$this->orguser->mobilephone = Arr::get($_POST, 'mobilephone');	
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

	public function action_changeemail()
	{
		// if a user is not logged in, redirect to login page
		if (is_null($this->orguser))
        {
            Request::current()->redirect('user/login');
			return;
        }	
		$this->template->content = View::factory('organization/email')
			->set('values', $_POST)
            ->bind('errors', $errors)
            ->bind('message', $message);
			
        if (HTTP_Request::POST == $this->request->method()) 
        {
			$errors = array();
			$password = Arr::get($_POST, 'password');
			if ($password == '')
			{
				$errors['password'] = 'Password can\'t be empty.';
			
			}
	
			$org_user = ORM::factory('user', $this->orguser->user_id);
			
		
			$email = Arr::get($_POST, 'email');
			if ($email == '')
			{
				$errors['email'] = 'email can\'t be empty.';
			}
			// check old email
			if($org_user->email != $email)
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
				
			
			$hash_password = $org_user->oldhash_password($password);
			if ($org_user->password == $hash_password)
			{
				$org_user->email = Arr::get($_POST, 'newemail');
				$org_user->password = Arr::get($_POST, 'password');
									
				try
				{
					$org_user->save();       
					echo '<script>'.
						'alert ("'.__('Update complete').'"); '.
						'window.location = "'.url::base().'organization/setting/"'.
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
			$hash_password = $org_user->oldhash_password($password);
			if ($org_user->password == $hash_password)
			{
				$org_user->password = Arr::get($_POST, 'newpassword');
									
				try
				{
					$org_user->save();       
					echo'<script>'.
						'alert ("'.__('Update complete').'"); '.
						'window.location = "'.url::base().'organization/setting/"'.
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
	
	public function action_image()
	{
		$this->template->content = View::factory('viewimage')
										->bind('images', $images)
										->bind('first_page', $first_page);
		$organization = ORM::factory('organization', $this->request->param('id'));
		$organization_event = $organization->events->find_all();
		$images = array();
		$first_page = 1;
		$selected = Arr::get($_GET, 'index');
		$i = 0;
		foreach($organization_event as $event)
		{
			$image = $event->image;
			if($image == $selected)
				$first_page = $i;
			$temp = array();
			$temp['image'] = 'media/upload/events/'.$image;
			$temp['id'] = $event->id;
			$temp['description'] = $event->name;
			$temp['link'] = 'event/view/'.$event->id;
			$images[] = $temp;
			$i++;
		}
		
		
	}

}