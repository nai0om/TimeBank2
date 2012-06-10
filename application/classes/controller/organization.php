<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Organization extends Controller_Template {
	
	public function action_index()
	{
		$company = ORM::factory('company')
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
	
	public function action_create()
	{
        $this->template->content = View::factory('company/create')
            ->bind('message', $message)
			->bind('errors', $errors);
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			try
			{
				// Log out current user
				Auth::instance()->logout();
				
                // Create the user using form values
                $user = ORM::factory('user')->create_user($this->request->post(), array(
                    'username',
                    'password',
					'email',
                ));
                 
                // Grant user login and company role
                $user->add('roles', ORM::factory('role', array('name' => 'login')));
                $user->add('roles', ORM::factory('role', array('name' => 'company')));                 

                $message = __('Please confirm email to continue');
                 
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
            }
		}
	} 
	
	public function action_createcompany()
	{
        $this->template->content = View::factory('company/createcompany')
            ->bind('message', $message)
			->bind('errors', $errors)
			->bind('company', $company);
		
		// If user have permission to create company
		if (!Auth::instance()->logged_in('company'))
		{
			// Redirect to step 1
			Request::current()->redirect('company/create');
			return;
		}
		
		$company = ORM::factory('company');
		$this->save_company($company, $message, $errors);
	} 
	
	public function action_edit()
	{
        $this->template->content = View::factory('company/edit')
            ->bind('message', $message)
			->bind('errors', $errors)
			->bind('company', $company);
		
		// If user have permission to create company
		if (!Auth::instance()->logged_in('company'))
		{
			// Redirect to step 1
			Request::current()->redirect('company/create');
			return;
		}
		
		// If this company belong to this user
		$company = ORM::factory('company')
					->where('user_id', '=', $this->user->id)
					->where('id', '=', $this->request->param('id'))
					->find();
		
		if (!$company->loaded())
		{
			throw new HTTP_Exception_404(__('Company id :id doesn\'t belong to you', array(':id' => $this->request->param('id'))));
		}
		
		$this->save_company($company, $message, $errors);
	}

	public function action_view()
	{
        $this->template->content = View::factory('company/view')
            ->bind('company', $company);
		
		$company = ORM::factory('company', $this->request->param('id'));

		if (!$company->loaded())
		{
			throw new HTTP_Exception_404(__('Company id :id not found', array(':id' => 10)));
		}
	}
	
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
	
	private function save_company($company, &$message, &$errors)
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$company->name = Arr::get($_POST, 'name');
			$company->objective = Arr::get($_POST, 'objective');
			$company->address = Arr::get($_POST, 'address');
			$company->detail = Arr::get($_POST, 'detail');
			$company->website = Arr::get($_POST, 'website');			
			
			$company->user = $this->user;
			$company->temp = $company->name.'/'.$company->objective.'/'.$company->address.'/'.$company->detail.'/'.$company->website;
			
			if (isset($_FILES['logo']['name']) && $_FILES['logo']['name'] != '')
			{
				$company->logo = 'logo';
			}
			
			try
			{
				$company->save();
                 
				// Redirect to company view
				Request::current()->redirect('company/view/'.$company->id);
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                
                // Set errors using custom messages
                $errors = $e->errors('models');
            }
		}
	}
}