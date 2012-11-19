<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Cron extends Controller_Template {
	
	public function action_updateuserevent()
	{
		$users = ORM::factory('user')->where('role', '<>', '1')->find_all();
		foreach( $users as $user)
		{ 
			$this->auto_render = false;
			echo '<br />updating user id : '.$user->id;
		 	$new_events = linkscreator::refresh_rank($user);
			timebanknotification::notify_matchevent($user, $new_events);
			//send notification here.
		}
	}
	public function action_sendsms()
	{
		$this->auto_render = false;
		$now_time = time();
		if ( $now_time < strtotime('08:00:00') || $now_time > strtotime('21:00:00'))
		{
			echo 'available time is 08:00-21:00';
			return;
		}
		
		echo 'start sending sms... <br />';			
		for ($i = 0; $i < 100; $i++)
		{
			$smsqueue = ORM::Factory('smsqueue')
								->where('sending', '=', 0)
								->and_where('sent', '=', 0)
								->find();
			
			if ($smsqueue->loaded())
			{
				// Stamp that this one is currently sending
				$smsqueue->sending = rand();
				$smsqueue->save();
				echo 'working on '.$smsqueue->id.'<br>';
				
				$status = TimebankUtil::send_sms($smsqueue->id, $smsqueue->phone, $smsqueue->message);
				
				//get resutl
				$return = explode('=', $status[0]);
				// Try again later
				if ($return[1] != 0)
				{	
					$smsqueue->sending = 0;
					$smsqueue->sent = -1;
					$smsqueue->return_status = implode(",", $status);
					$smsqueue->save();
				}
				else
				{
					$smsqueue->sending = 0;
					$smsqueue->return_status = implode(",", $status);
					$smsqueue->sent = 1;
					$smsqueue->save();
				}
			}
			else
			{
				echo 'nothing to send';
				return;	
			}
		}
	}

	public function action_sendmail()
	{
		$this->auto_render = false;
		
		for ($i = 0; $i < 100; $i++)
		{
			$mailqueue = ORM::Factory('mailqueue')
								->where('sending', '=', 0)
								->and_where('sent', '=', 0)
								->find();
			
			if ($mailqueue->loaded())
			{
				// Stamp that this one is currently sending
				$mailqueue->sending = rand();
				$mailqueue->save();
				echo 'working on '.$mailqueue->id.'<br>';
				
				$status = TimebankUtil::send_email($mailqueue->from, array($mailqueue->to), $mailqueue->subject, $mailqueue->body);
				
				// Try again later
				if ($status != 1)
				{
					$mailqueue->sending = 0;
					$mailqueue->save();
				}
				else
				{
					$mailqueue->sending = 0;
					$mailqueue->sent = 1;
					$mailqueue->save();
				}
			}
			else
			{
				echo 'nothing to send';
				return;	
			}
		}
	}
	
	public function action_notification()
	{
		$this->auto_render = false;

		// Find event that doesn't send "event signup almost end" email notification yet (3 days)
		$due_date = date("Y-m-d", time()+86400*3);
		//echo $today.'<br><br>';
		$events = ORM::Factory('event')->where('almostsignupend_noti', '=', 0)->and_where('signup_end_date', '<=', $due_date)->find_all();		
		foreach ($events as $event)
		{			
			$organization = ORM::Factory('organization', $event->organization_id);
			if ($organization->loaded())
			{
				echo $organization->noti_eventalmostend.' '.$event->name.' : '.$event->signup_end_date.' : '.strtotime($event->signup_end_date).'<br>';	
				$event->almostsignupend_noti = 1;
				$event->save();
				TimebankNotification::notify_eventsignup_almostend_org($organization, $event);
			}
		}
		
		echo  'events closed by time. <br />';
		$events = ORM::Factory('event')->where('eventclose_noti', '=', 0)->where(DB::expr('CONCAT(volunteer_end_date, \' \',volunteer_end_time)'), '<=', DB::expr('NOW()'))->find_all();		
		foreach ($events as $event)
		{			
			
			$organization = ORM::Factory('organization', $event->organization_id);
			if ($organization->loaded())
			{
				echo  'event closed: '.$event->id.'<br />';
				$event->eventclose_noti = 1;
				$event->save();
				TimebankNotification::notify_eventend_org($organization, $event);
			}
		}
				
		echo '<br>start almost start<br>';
	
		// Find event that doesn't send "event almost start" email notification yet (3 days)
		$events = ORM::Factory('event')->where('almoststart_noti', '=', 0)->and_where('volunteer_end_date', '<=', $due_date)->find_all();
		foreach ($events as $event)
		{	
			echo $event->name.' : '.$event->volunteer_end_date.'<br>';	
			// Get user from this event
			$query = DB::select()
							->from('users_events')
							->where('event_id', '=',  $event->id)
							->and_where('status', '=', 1);
			$users = $query->execute();
			foreach ($users as $user)
			{
				$orm_user = ORM::Factory('user', $user['user_id']);
				echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$orm_user->displayname.'<br>';	
				TimebankNotification::notify_event_almoststart_volunteer($orm_user, $event);
			}

			$event->almoststart_noti = 1;
			$event->save();
		}
	}
	
	public function action_news()
	{
		$this->auto_render = false;
		
		
		for ($i = 0; $i < 100; $i++)
		{
			$adminsms = ORM::Factory('adminsms')
								->where('status', '=', 0)
								->where('send_time', '<' , date("Y-m-d H:i:s") )
								->find() ;
								
			
			if ($adminsms->loaded())
			{
				$adminsms->status = 2;// sendding
				$adminsms->save();
				$users = ORM::factory('user')->find_all();
				foreach($users as $user)
				{
					TimebankNotification::queuesms($user->phone, $adminsms->message, $user->id);
				}
				$adminsms->sent_time = date("Y-m-d H:i:s");
				$adminsms->status = 1;// finished
				$adminsms->save();
			}
		
		}
	
	}
	
}