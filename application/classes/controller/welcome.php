<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
	
	public function action_index()
	{
		$this->auto_render = false;
		$this->response->body(View::factory('index'));
   	}
	
	public function action_home()
	{
		$this->template->content = View::factory('home')
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
									->bind('time_done', $time_done)
									->bind('comments', $comments);
	
		$time_donate = timebankhelper::getDonatedTime();
	
		$time_done = timebankhelper::getFinsihedTime();
		
		$time_want =  timebankhelper::getWantedTime();
	
		
		$comments = array();
		$comment_recomends =  ORM::factory('comment')->where('recommend', '=', '1')->where('organization_id', '=', '0')->order_by(DB::expr('RAND()'))->limit(3)->find_all();
		
		foreach($comment_recomends as $comment_recomend)
		{
			
			$comment = array();
			$user = ORM::factory('user', $comment_recomend->user_id);
			// in case of organization id.
			if(!$user->loaded()) continue;
			
			$comemnt['need_more'] = false;
			$comment['user_image'] = $user->profile_image;
			$comment['user_display'] = $user->displayname;
			$comment['event_id'] = $comment_recomend->event_id;
			$comment['comment_id'] = $comment_recomend->id;
			$comment['need_more'] = (strlen(utf8_decode($comment_recomend->comment)) > 130); 
			$comment['comment'] = iconv_substr($comment_recomend->comment, 0,130, 'UTF-8');
			if($comment['need_more'] == true)
			{
				$comment['comment'] = $comment['comment'].' ...';	
			}
			$comments[] = $comment;
		}
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
