<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
	
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
									->bind('time_done', $time_done)
									->bind('comments', $comments);
	
		$time_donate = timebankhelper::getDonatedTime();
	
		$time_done = timebankhelper::getFinsihedTime();
		
		$time_want =  timebankhelper::getWantedTime();
		
		$comments = array();
		$user_highlight = DB::select()->from('users_comment_highlight')->execute();
		
		foreach($user_highlight as $highlight)
		{
			$id = $highlight['comment_id'];
			$comment = DB::select()->from('comments')->where('id', '=', $id)->execute();
			
			if(count($comment) == 0) continue;
			
			$comment = $comment[0];
			$user = ORM::factory('user', $comment['user_id']);
			// in case of organization id.
			if(!$user->loaded()) continue;
			
			$comment['user_image'] = $user->profile_image;
			$comment['user_display'] = $user->displayname;
			
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
