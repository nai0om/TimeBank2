<?php defined('SYSPATH') or die('No direct script access.');

class TimebankNotification {
	
	public static function renderHtmlEmail($email_view, $vars) {
		$vars['urlbase'] = Kohana::$config->load('timebank')->get('server_url');
 		ob_start();
    	include Kohana::find_file('views', 'email/'.$email_view);
    	$html = ob_get_clean();
		
		return $html;
	}
	
	private static function queuemail($from, $to, $subject, $body)
	{
		$mailqueue = ORM::Factory('mailqueue');
		$mailqueue->from = $from;
		$mailqueue->to = $to;
		$mailqueue->subject = $subject;
		$mailqueue->body = $body;
		$mailqueue->sent = 0;
		$mailqueue->sending = 0;
		$mailqueue->save();
	}

	private static function send_inbox($user_id, $org_id, $subject, $body)
	{
		$inbox = ORM::Factory('inbox');
		$inbox->title = $subject;
		$inbox->message = $body;
		$inbox->user_id = $user->id;
		$inbox->save();
	}
		
	public static function notify_new_volunteer($user, $password)
	{
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = $user->email;
		$subject = 'ยินดีต้อนรับสู่ธนาคารจิตอาสา';
		$body = self::renderHtmlEmail('new_volunteer', array(
															'displayname' => $user->displayname,
															'email' => $user->email,
															'password' => $password,
															));
															
		
		self::queuemail($from, $to, $subject, $body);
	} 

	public static function notify_new_organization($user, $organization, $password)
	{
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = $user->email;
		$subject = 'ยินดีต้อนรับสู่ธนาคารจิตอาสา (สำหรับองค์กร)';
		$body = self::renderHtmlEmail('new_organization', array(
															'org_name' => $organization->name,
															'displayname' => $user->displayname,
															'email' => $user->email,
															'password' => $password,
															));
		self::queuemail($from, $to, $subject, $body);
	} 
		
	public static function notify_forgetpassword($user, $password)
	{
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = $user->email;
		$subject = 'รหัสผ่านใหม่ของคุณ';
		$body = self::renderHtmlEmail('forgetpassword', array(
															'displayname' => $user->displayname,
															'email' => $user->email,
															'password' => $password,
															));
		self::queuemail($from, $to, $subject, $body);
	} 
	
	public static function notify_eventapproved_volunteer($user, $organization, $event)
	{
		if ($user->noti_eventapproved == 1)
		{
			$from = Kohana::$config->load('timebank')->get('server_email');
			$to = $user->email;
			$subject = 'คุณได้รับการตอบรับให้เข้าร่วม "'.$event->name.'"';
			$body = self::renderHtmlEmail('volunteer_approved', array(
																'displayname' 	=> $user->displayname,
																'org_name'		=> $organization->name,
																'event_id'		=> $event->id,
																'event_name'	=> $event->name,
																));
			self::queuemail($from, $to, $subject, $body);
			self::send_inbox($user->id, 0, $subject, 'คุณได้รับการตอบรับให้เข้าร่วม "'.$event->name.'"');
		}
	}
	
	public static function notify_eventapplied_org($user, $organization, $event)
	{
		$org_user = ORM::Factory('user', $organization->user_id);
		if ($organization->noti_volunteerregister == 1)
		{	
			$from = Kohana::$config->load('timebank')->get('server_email');
			$to = $org_user->email;
			$subject = 'มี "อาสา" สมัครเข้ามาร่วมกิจกรรมของคุณ "'.$event->name.'"';
			$body = self::renderHtmlEmail('volunteer_apply_event', array(
																'org_name' 		=> $organization->name,
																'event_name'	=> $event->name,
																'event_id' 		=> $event->id,
																));
			self::queuemail($from, $to, $subject, $body);
			self::send_inbox(0, $organization->id, $subject, 'มี "อาสา" สมัครเข้ามาร่วมกิจกรรมของคุณ "'.$event->name.'"');
		}
	}

	public static function notify_eventend_org($organization, $event)
	{
		$org_user = ORM::Factory('user', $organization->user_id);
		if ($organization->noti_eventend == 1)
		{
			$from = Kohana::$config->load('timebank')->get('server_email');
			$to = $org_user->email;
			$subject = 'งานอาสาของคุณเสร็จสิ้นแล้ว: กรุณาเขียนคำขอบคุณ-โพสต์รูป-ปิดงาน "'.$event->name.'"';
			$body = self::renderHtmlEmail('event_end_org', array(
																'org_name' 		=> $organization->name,
																'event_name' 	=> $event->name,
																'event_id' 		=> $event->id,
																));
			self::queuemail($from, $to, $subject, $body);
			self::send_inbox(0, $organization->id, $subject, 'งานอาสาของคุณเสร็จสิ้นแล้ว: กรุณาเขียนคำขอบคุณ-โพสต์รูป-ปิดงาน "'.$event->name.'"');
		}
	}

	public static function notify_eventend_volunteer($user, $organization, $event)
	{
		if ($user->noti_eventthank == 1)
		{
			$from = Kohana::$config->load('timebank')->get('server_email');
			$to = $user->email;
			$subject = 'องค์กรผู้จัดได้ปิดงาน "'.$event->name.'"';
			$body = self::renderHtmlEmail('event_end_volunteer', array(
																'displayname' 	=> $user->displayname,
																'org_name' 		=> $organization->name,
																'event_name' 	=> $event->name,
																'event_id' 		=> $event->id,
																));
			self::queuemail($from, $to, $subject, $body);
			self::send_inbox($user->id, 0, $subject, 'องค์กรผู้จัดได้ปิดงาน "'.$event->name.'"');
		}
	}

	public static function notify_eventsignup_almostend_org($organization, $event)
	{
		if ($organization->noti_eventalmostend == 1)
		{			
			$from = Kohana::$config->load('timebank')->get('server_email');
			$org_user = ORM::Factory('user', $organization->user_id);
			$to = $org_user->email;
			$subject = 'ภารกิจ"['.$event->name.']" ใกล้หมดเวลารับสมัครแล้ว';
			$body = self::renderHtmlEmail('event_almostend_org', array(
																'org_name' 		=> $organization->name,
																'event_name' 	=> $event->name,
																'event_id' 		=> $event->id,
																));
			self::queuemail($from, $to, $subject, $body);
			self::send_inbox(0, $organization->id, $subject, 'ภารกิจ"['.$event->name.']" ใกล้หมดเวลารับสมัครแล้ว');
		}
	}

	public static function notify_event_almoststart_volunteer($user, $event)
	{
		if ($user->noti_almosteventdate == 1)
		{			
			$from = Kohana::$config->load('timebank')->get('server_email');
			$to = $user->email;
			$subject = 'ภารกิจ"['.$event->name.']" ใกล้ถึงเวลาเริ่มกิจกรรมแล้ว';
			$body = self::renderHtmlEmail('event_almoststart_volunteer', array(
																'displayname' 	=> $user->displayname,
																'event_name' 	=> $event->name,
																'event_id' 		=> $event->id,
																));
			self::queuemail($from, $to, $subject, $body);
			self::send_inbox($user->id, 0, $subject, 'ภารกิจ"['.$event->name.']" ใกล้ถึงเวลาเริ่มกิจกรรมแล้ว');
		}
	}
		
	public static function notify_contactus($contactus)
	{
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = 'jitarsabank@gmail.com';
		$subject = 'มี Contact Us อันใหม่';
		$body = self::renderHtmlEmail('contact_us', array(
															'name' 		=> $contactus->name,
															'surname' 	=> $contactus->surname,
															'email' 	=> $contactus->email,
															'phoneno' 	=> $contactus->phoneno,
															'topic' 	=> $contactus->topic,
															'message' 	=> $contactus->message,
															));
		self::queuemail($from, $to, $subject, $body);
	}
}
