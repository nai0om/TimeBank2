<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
	
	public function action_index()
	{
		$this->template->content = View::factory('welcome')
									->bind('time_donate', $time_donate)
									->bind('time_want', $time_want)
									->bind('time_done', $time_done)
									->bind('events', $events);
		$time_done = 0;
		$time_donate = 0;
		$time_want = 0;									
		$time_donate = DB::select(array('SUM("hour")', 'time_donate'))
					->from('user_timebanks')
					->where('status','=','1')->execute()->get('time_donate', 0);
					
	 
	
		$done_event = ORM::factory('event')->where('status', '=', '0')->find_all();
		foreach($done_event as $done)
		{
			$time_done += $done->time_cost * $done->volunteer_need_count;
		}
	
		$time_want = DB::select(array('SUM("time_cost")', 'time_want'))
					->from('events')
					->where('status','=','1')->execute()->get('time_want', 0);
					
		$events = ORM::factory('event')->order_by('timestamp','desc')->limit(3)->find_all();
	
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
	
	$time_done = 0;
	$time_donate = 0;
	$time_want = 0;
	$time_donate = DB::select(array('SUM("hour")', 'time_donate'))
				->from('user_timebanks')
				->where('status','=','1')->execute()->get('time_donate', 0);
	

	$done_event = ORM::factory('event')->where('status', '=', '0')->find_all();
	foreach($done_event as $done)
	{
		$time_done += $done->time_cost * $done->volunteer_need_count;
	}

	$time_want = DB::select(array('SUM("time_cost")', 'time_want'))
			->from('events')
			->where('status','=','1')->execute()->get('time_want', 0);
		
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
		$time_done = 0;
		$time_donate = 0;
		$time_want = 0;
										
		$time_donate = DB::select(array('SUM("hour")', 'time_donate'))
					->from('user_timebanks')
					->where('status','=','1')->execute()->get('time_donate', 0);
					
	
		$done_event = ORM::factory('event')->where('status', '=', '0')->find_all();
		foreach($done_event as $done)
		{
			$time_done += $done->time_cost * $done->volunteer_need_count;
		}
	
		$time_want = DB::select(array('SUM("time_cost")', 'time_want'))
					->from('events')
					->where('status','=','1')->execute()->get('time_want', 0);
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
