<?php defined('SYSPATH') or die('No direct script access.');

class TimebankNotification {
	
	private static function renderHtmlEmail($email_view, $vars) {
 		ob_start();
    	include Kohana::find_file('views', 'email/'.$email_view);
    	$html = ob_get_clean();
		
		return $html;
	}
	
	public static function notify_new_volunteer($user, $password)
	{
		$from = 'Jitarsa Bank'.' <JitArsaBank@gmail.com>';
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

	public static function notify_new_organization($user, $org_name, $password)
	{
		$from = 'Jitarsa Bank'.' <JitArsaBank@gmail.com>';
		$to = array($user->email);
		$subject = 'ยินดีต้อนรับสู่ธนาคารจิตอาสา (สำหรับองค์กร)';
		$body = self::renderHtmlEmail('new_organization', array(
															'name' => $org_name,
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
		$from = 'Jitarsa Bank'.' <JitArsaBank@gmail.com>';
		$to = array($user->email);
		$subject = 'รหัสผ่านใหม่ของท่าน';
		$body = self::renderHtmlEmail('forgetpassword', array(
															'displayname' => $user->displayname,
															'email' => $user->email,
															'password' => $password,
															));
		TimebankUtil::send_email($from, $to, $subject, $body);
	} 
	
	public static function notify_eventapproved_volunteer($user, $event, $orgnization)
	{
		$from = 'Jitarsa Bank'.' <JitArsaBank@gmail.com>';
		$to = array($user->email);
	}
	
	public static function notify_eventapplied_org($user, $event)
	{
		$from = 'Jitarsa Bank'.' <JitArsaBank@gmail.com>';
		$to = array($user->email);
	}

	public static function notify_event_almosttimeout_org($user, $event)
	{
		$from = 'Jitarsa Bank'.' <JitArsaBank@gmail.com>';
		$to = array($user->email);
	}
}
