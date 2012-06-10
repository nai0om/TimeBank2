<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Organization extends Controller_Template {
	
	public function action_index()
	{
		if (is_null($this->user))
		{
			Request::current()->redirect('user/login');
		}

		$company = ORM::factory('organization')
				->where('user_id', '=', $this->user->id)
				->find();
		/*$query = 
				SELECT events.name as event_name , events.id as event_id, users_events.user_id as user_id, users.username as user_name, users_events.timestamp
				FROM 
				events 
				INNER JOIN companies     ON companies.id =  events.company_id
				INNER JOIN users_events   ON events.id  = users_events.event_id
				INNER JOIN users   ON users.id  = users_events.user_id
				where companies.id='5'
				Order by users_events.timestamp DESC; */
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
	}
	
	public function action_profile()
	{
		if (is_null($this->user))
		{
			Request::current()->redirect('user/login');
		}

        $this->template->content = View::factory('organization/profile')
            ->bind('message', $message)
			->bind('errors', $errors)
			->bind('organization', $organization);

		// If this company belong to this user
		$organization = ORM::factory('organization')
					->where('user_id', '=', $this->user->id)
					->find();
		
		if (!$organization->loaded())
		{
			throw new HTTP_Exception_403(__('Not organization account'));
		}
		
		$this->save_organization($organization, $message, $errors);
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
	
	private function save_organization($organization, &$message, &$errors)
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
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
			$organization->twitter = Arr::get($_POST, 'twitter');			
			$organization->website = Arr::get($_POST, 'website');			
			//$company->search_temp = $company->name.'/'.$company->objective.'/'.$company->address.'/'.$company->detail.'/'.$company->website;
			
			/*
			if (isset($_FILES['logo']['name']) && $_FILES['logo']['name'] != '')
			{
				$company->logo = 'logo';
			}
			*/
			try
			{
				$organization->save();
                 
				Request::current()->redirect('organization/profile');
				
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