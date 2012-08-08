<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin extends Controller_Template {
	
	public function action_index()
	{
		if (!$this->user && $this->user->id < 3)
		{
			Request::current()->redirect('user/login');
			return;
		}
		// show admin page
		$organizations = ORM::factory('organization')->where('verified', '=', 0)->find_all();
		$this->template->content = View::factory('admin/index')
											->bind('organizations', $organizations)
											->bind('event', $event);
		
		
		$event = DB::select()->from('recommend_event')->execute()->as_array('id');
		
	}
	
	public function action_addrecommend()
	{
				
        if (HTTP_Request::POST == $this->request->method()) 
        {           
			// delete all 
		 	DB::delete('recommend_event')->execute();
			
			for($i = 1 ; $i<=3 ; $i++)
			{
				DB::insert('recommend_event', array('id', 'event_id'))
				->values( array($i, Arr::get($_POST, $i)))
				->execute();
			}
		Request::current()->redirect('admin/index');
			
		}
	}
	
	public function action_approve()
	{
		if (!$this->user && $this->user->id < 3)
		{
			Request::current()->redirect('user/login');
			return;
		}
			
		$this->template->content = View::factory('admin/approve')
			->bind('message', $message);
			
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$organization = ORM::factory('organization', $this->request->post('organization_id'));
			if ($organization) 
            {
				$organization->verified = 1;
				
				try
				{
					$organization->save();
					$message = $organization->name.' has been verified';
				
				} catch (ORM_Validation_Exception $e) {
				
					// Set failure message
					$message = $e->getMessage();
					// Set errors using custom messages
					$errors = $e->errors('models');
				}
			}
			else
			{
				$message = 'Not found';
			}
			
		}
	}
}