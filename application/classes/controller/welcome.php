<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
	
	public function action_testnoti()
	{
		$this->auto_render = false;

		// Find event that doesn't send "event signup almost end" email notification yet (3 days)
		$today = date("Y-m-d", time()+86400*3);
		echo $today.'<br><br>';
		$events = ORM::Factory('event')->where('almostsignupend_noti', '=', 0)->and_where('signup_end_date', '<=', $today)->find_all();		
		foreach ($events as $event)
		{			
			$organization = ORM::Factory('organization', $event->organization_id);
			if ($organization->loaded())
			{
				echo $event->name.' : '.$event->signup_end_date.' : '.strtotime($event->signup_end_date).'<br>';	
				$event->almostsignupend_noti = 1;
				$event->save();
				TimebankNotification::notify_eventsignup_almostend_org($organization, $event);
			}
		}

		// Find event that doesn't send "event almost start" email notification yet (3 days)

	}
	
	public function action_index()
	{
		$this->template->content = View::factory('welcome')
									->bind('time_donate', $time_donate)
									->bind('time_want', $time_want)
									->bind('time_done', $time_done)
									->bind('events', $events);
										
		$time_donate = timebankhelper::getDonatedTime();
	
		$time_done = timebankhelper::getFinsihedTime();
		
		$time_want =  timebankhelper::getWantedTime();
					
		$events = timebankhelper::getRecommendEvent();
	
   	}
	
	public function action_comingsoon()
	{
		//$this->template->content = View::factory('welcome');
		$this->template->content = View::factory('comingsoon')
							->bind('message', $message)
							->bind('errors', $errors);
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$emailcomingsoon = ORM::factory('emailcomingsoon');
			$emailcomingsoon->email =  Arr::get($_POST, 'email');
			
			try
			{
				$emailcomingsoon->save();
				$message = 'done';
                 				
            } catch (ORM_Validation_Exception $e) {
                 
                // Set errors using custom messages
                $errors = $e->errors('models');
            }
		}
   	}
	
	public function action_timebank()
	{
		$this->template->content = View::factory('timebank')	
									->bind('time_donate', $time_donate)
									->bind('time_want', $time_want)
									->bind('time_done', $time_done);
	
		$time_donate = timebankhelper::getDonatedTime();
	
		$time_done = timebankhelper::getFinsihedTime();
		
		$time_want =  timebankhelper::getWantedTime();
		
   	}
	
	public function action_timebankhow()
	{
		$this->template->content = View::factory('timebankhow');
   	}
	
	public function action_donation()
	{
		$this->template->content = View::factory('donation');
   	}
	
	public function action_aboutus()
	{
		$this->template->content = View::factory('aboutus')
									->bind('time_donate', $time_donate)
									->bind('time_want', $time_want)
									->bind('time_done', $time_done);
									
		$time_donate = timebankhelper::getDonatedTime();
	
		$time_done = timebankhelper::getFinsihedTime();
		
		$time_want =  timebankhelper::getWantedTime();
   	}
	
	public function action_training()
	{
		$this->template->content = View::factory('training');
   	}
	
	public function action_term()
	{
		$this->template->content = View::factory('term');
   	}

	public function action_privacy()
	{
		$this->template->content = View::factory('privacy');
   	}
} // End Welcome
