<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contactus extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('contactus/index')
									->bind('contactus', $contactus)
									->bind('message', $message)
									->bind('errors', $errors);
		
		$contactus = ORM::factory('contactusform');
		$this->save_contactus($contactus, $message, $errors);
   	}

	public function action_thankyou()
	{
		$this->template->content = View::factory('contactus/thankyou');
   	}

	public function action_map()
	{
		$this->template->content = View::factory('contactus/map');
   	}
	
	private function save_contactus($contactus, &$message, &$errors)
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$contactus->name = Arr::get($_POST, 'name');
			$contactus->surname = Arr::get($_POST, 'surname');
			$contactus->email = Arr::get($_POST, 'email');
			$contactus->phoneno = Arr::get($_POST, 'phoneno');
			$contactus->topic = Arr::get($_POST, 'topic');
			$contactus->message = Arr::get($_POST, 'message');
			
			try
			{
				$contactus->save();
                 
				// Redirect
				Request::current()->redirect('contactus/thankyou/');
				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set failure message
                $message = __('There were errors, please see form below.');
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
            }
		}		
	}
		
} // End Welcome
