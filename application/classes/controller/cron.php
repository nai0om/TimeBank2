<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Cron extends Controller_Template {

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
	
}