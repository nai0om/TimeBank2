<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Organization extends Controller_Template {
	
	public function action_index()
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
			$inbox_ids = Arr::get($_POST, 'ib');	
			
			foreach ($inbox_ids as $id)
			{
				$inbox = ORM::factory('inbox', $id);
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
            ->bind('organization', $organization);
		
		$organization = ORM::factory('organization', $this->request->param('id'));

		if (!$organization->loaded())
		{
			throw new HTTP_Exception_404(__('Organization id :id not found', array(':id' => 10)));
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
			$this->orguser->twitter = Arr::get($_POST, 'twitter');			
			$this->orguser->website = Arr::get($_POST, 'website');			
			//$company->search_temp = $company->name.'/'.$company->objective.'/'.$company->address.'/'.$company->detail.'/'.$company->website;
			
			/*
			if (isset($_FILES['logo']['name']) && $_FILES['logo']['name'] != '')
			{
				$company->logo = 'logo';
			}
			*/
			try
			{
				$this->orguser->save();
                 
				Request::current()->redirect('organization/profile');
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                
                // Set errors using custom messages
                $errors = $e->errors('models');
            }
		}
	}
}