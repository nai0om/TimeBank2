<?php defined('SYSPATH') or die('No direct script access.');

class TimebankNotification {
	
	public static function renderHtmlEmail($email_view, $vars) {
		$vars['urlbase'] = Kohana::$config->load('timebank')->get('server_url');
 		ob_start();
    	include Kohana::find_file('views', 'email/'.$email_view);
    	$html = ob_get_clean();
		
		return $html;
	}
	
	public static function notify_new_volunteer($user, $password)
	{
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = array($user->email);
		$subject = 'ยินดีต้อนรับสู่ธนาคารจิตอาสา';
		$body = self::renderHtmlEmail('new_volunteer', array(
															'displayname' => $user->displayname,
															'email' => $user->email,
															'password' => $password,
															));
		TimebankUtil::send_email($from, $to, $subject, $body);
		//echo $body;
	} 

	public static function notify_new_organization($user, $organization, $password)
	{
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = array($user->email);
		$subject = 'ยินดีต้อนรับสู่ธนาคารจิตอาสา (สำหรับองค์กร)';
		$body = self::renderHtmlEmail('new_organization', array(
															'org_name' => $organization->name,
															'displayname' => $user->displayname,
															'email' => $user->email,
															'password' => $password,
															));
		TimebankUtil::send_email($from, $to, $subject, $body);
		echo $body;
		exit;
	} 
		
	public static function notify_forgetpassword($user, $password)
	{
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = array($user->email);
		$subject = 'รหัสผ่านใหม่ของท่าน';
		$body = self::renderHtmlEmail('forgetpassword', array(
															'displayname' => $user->displayname,
															'email' => $user->email,
															'password' => $password,
															));
		TimebankUtil::send_email($from, $to, $subject, $body);
	} 
	
	public static function notify_eventapproved_volunteer($user, $organization, $event)
	{
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = array($user->email);
		$subject = 'ท่านได้รับคำยืนยันให้เข้าร่วมงานอาสา';
		$body = self::renderHtmlEmail('volunteer_approved', array(
															'displayname' 	=> $user->displayname,
															'org_name'		=> $organization->name,
															'event_id'		=> $organization->id,
															'event_name'	=> $event->name,
															));
		TimebankUtil::send_email($from, $to, $subject, $body);
	}
	
	public static function notify_eventapplied_org($user, $organization, $event)
	{
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = array($user->email);
		$subject = 'มีอาสาสมัครเข้ามาในงานอาสาของท่าน';
		$body = self::renderHtmlEmail('volunteer_apply_event', array(
															'org_name' 		=> $organization->name,
															'event_name'	=> $event->name,
															'event_id' 		=> $event->id,
															));
		TimebankUtil::send_email($from, $to, $subject, $body);
	}

	public static function notify_eventend_org($organization, $event)
	{
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = array($user->email);
		$subject = 'งานอาสาของท่านได้สิ้นสุดลงแล้ว';
		$body = self::renderHtmlEmail('event_end_org', array(
															'org_name' 		=> $organization->name,
															'event_name' 	=> $event->name,
															'event_id' 		=> $event->id,
															));
		TimebankUtil::send_email($from, $to, $subject, $body);
	}

	public static function notify_eventend_volunteer($user, $organization, $event)
	{
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = array($user->email);
		$subject = 'มีคนขอบคุณจิตอาสาของท่าน';
		$body = self::renderHtmlEmail('event_end_volunteer', array(
															'displayname' 	=> $user->name,
															'org_name' 		=> $organization->name,
															'event_name' 	=> $event->name,
															'event_id' 		=> $event->id,
															));
		TimebankUtil::send_email($from, $to, $subject, $body);
	}

	public static function notify_contactus($contactus)
	{
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = array('xinexo@gmail.com');
		$subject = 'มี Contact Us อันใหม่';
		$body = self::renderHtmlEmail('contact_us', array(
															'name' 		=> $contactus->name,
															'surname' 	=> $contactus->surname,
															'email' 	=> $contactus->email,
															'phoneno' 	=> $contactus->phoneno,
															'topic' 	=> $contactus->topic,
															'message' 	=> $contactus->message,
															));
		TimebankUtil::send_email($from, $to, $subject, $body);
	}
}
