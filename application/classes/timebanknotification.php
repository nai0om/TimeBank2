<?php defined('SYSPATH') or die('No direct script access.');

class TimebankNotification {
	
	public static function getUrlBase()
	{
		return Kohana::$config->load('timebank')->get('server_url');
	}
	
	public static function renderHtmlEmail($email_view, $vars) {
		$vars['urlbase'] = Kohana::$config->load('timebank')->get('server_url');
 		ob_start();
    	include Kohana::find_file('views', 'email/'.$email_view);
    	$html = ob_get_clean();
		
		return $html;
	}
	
	public static function queuesms($phone, $message, $note)
	{
		if ($phone == '')  return;
		
		$smsqueue = ORM::Factory('smsqueue');
		$smsqueue->phone = $phone;
		$smsqueue->message = $message;
		$smsqueue->note = $note; // add user id.
		$smsqueue->save();
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
		$inbox->user_id = $user_id;
		$inbox->organization_id = $org_id;
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
		
		// send to all admin
		$admins = ORM::factory('user')->where('role', '=', '2')->find_all();
		foreach($admins as $admin)
		{
			$from = Kohana::$config->load('timebank')->get('server_email');
			$to = $admin->email;
			$subject = 'มีองค์กรสมัครสมาชิก';
			$body = self::renderHtmlEmail('new_organization_admin', array(
																'org_name' => $organization->name,
																'displayname' => $user->displayname,
																'email' => $user->email,
																));
			self::queuemail($from, $to, $subject, $body);
			self::send_inbox($admin->id, 0, $subject, 'องค์กร "'.$organization->name.'"');
				
		}
		
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
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = $user->email;
		$subject = 'คุณได้รับการตอบรับให้เข้าร่วม "'.$event->name.'"';
		$body = self::renderHtmlEmail('volunteer_approved', array(
															'displayname' 	=> $user->displayname,
															'org_name'		=> $organization->name,
															'event_id'		=> $event->id,
															'event_name'	=> $event->name,
															));
		if ($user->noti_eventapproved == 1)
		{
			self::queuemail($from, $to, $subject, $body);
		}
		
		if($user->noti_sms_almosteventdate = 1)
		{
			self::queuesms($user->phone, $subject.' '.timebanknotification::getUrlBase().'event/view/'.$event->id, $user->id);
		}
		self::send_inbox($user->id, 0, $subject, '<a href="'.url::base().'event/view/'.$event->id.'">ดูรายละเอียดเพิ่มเติม</a>');
		
	}
	
	public static function notify_eventapplied_org($user, $organization, $event)
	{
		$org_user = ORM::Factory('user', $organization->user_id);
		
			$from = Kohana::$config->load('timebank')->get('server_email');
			$to = $org_user->email;
			$subject = 'มีอาสามาสมัครเข้าร่วม "'.$event->name.'"';
			$body = self::renderHtmlEmail('volunteer_apply_event', array(
																'org_name' 		=> $organization->name,
																'event_name'	=> $event->name,
																'event_id' 		=> $event->id,
																));
			if ($organization->noti_volunteerregister == 1)
			{	
				self::queuemail($from, $to, $subject, $body);
			}
			self::send_inbox(0, $organization->id, $subject, '<a href="'.url::base().'event/approve/'.$event->id.'">ดูรายชื่ออาสา</a>');
		
	}
	
	public static function notify_eventusercancel_org($user, $organization, $event, $message)
	{
		$org_user = ORM::Factory('user', $organization->user_id);
		
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = $org_user->email;
		$subject = 'มี "อาสา" ขอยกเลิกงาน "'.$event->name.'"';
		
		$body = self::renderHtmlEmail('volunteer_cancel_event', array(
															'org_name' 		=> $organization->name,
															'event_name'	=> $event->name,
															'event_id' 		=> $event->id,
															'message'		=> $message
															));
		if($organization->noti_volunteercancel == 1)
		{
			self::queuemail($from, $to, $subject, $body);
		}
		self::send_inbox(0, $organization->id, $subject, '<a href="'.url::base().'event/approve/'.$event->id.'">ดูรายชื่อาสาทั้งหมด</a>');
		
	}

	public static function notify_eventend_org($organization, $event)
	{
		$org_user = ORM::Factory('user', $organization->user_id);
		
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = $org_user->email;
		$subject = 'งานอาสา "'.$event->name.'" ได้สิ้นสุดแล้วครับ ';
		$body = self::renderHtmlEmail('event_end_org', array(
															'org_name' 		=> $organization->name,
															'event_name' 	=> $event->name,
															'event_id' 		=> $event->id,
															));
		if ($organization->noti_eventend == 1)
		{
			self::queuemail($from, $to, $subject, $body);
		}	
		self::send_inbox(0, $organization->id, $subject,  '<a href="'.url::base().'event/view/'.$event->id.'">เขียนคำขอบคุณให้อาสา / โพสต์รูป / ปิดงาน ได้ที่นี่</a>');
		
	}

	public static function notify_eventend_volunteer($user, $organization, $event)
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
		if ($user->noti_eventthank == 1)
		{
			self::queuemail($from, $to, $subject, $body);
		}
		self::send_inbox($user->id, 0, $subject, '<a href="'.url::base().'event/view/'.$event->id.'">อ่านคำขอบคุณ / ดูภาพ / แบ่งปันประสบการณ์ ได้ที่นี่</a>');
		
	}

	public static function notify_eventsignup_almostend_org($organization, $event)
	{
		$from = Kohana::$config->load('timebank')->get('server_email');
		$org_user = ORM::Factory('user', $organization->user_id);
		$to = $org_user->email;
		$subject = 'งานอาสา '.$event->name.' กำลังจะสิ้นสุดการรับสมัคร อย่าลืมเข้าไปตอบรับอาสานะครับ';
		$body = self::renderHtmlEmail('event_almostend_org', array(
															'org_name' 		=> $organization->name,
															'event_name' 	=> $event->name,
															'event_id' 		=> $event->id,
															));
		if ($organization->noti_eventalmostend == 1)
		{	
			self::queuemail($from, $to, $subject, $body);
		}
		self::send_inbox(0, $organization->id, $subject, '<a href="'.url::base().'event/approve/'.$event->id.'">ตอบรับอาสา</a>');
		
	}

	public static function notify_event_almoststart_volunteer($user, $event)
	{
				
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = $user->email;
		$subject = 'งานอาสา "'.$event->name.'" ที่คุณสมัครไปใกล้ถึงวันจัดกิจกรรมแล้วนะครับ ';
		$body = self::renderHtmlEmail('event_almoststart_volunteer', array(
															'displayname' 	=> $user->displayname,
															'event_name' 	=> $event->name,
															'event_id' 		=> $event->id,
															));
		if ($user->noti_almosteventdate == 1)
		{	
			self::queuemail($from, $to, $subject, $body);
		}
		
		if($user->noti_sms_almosteventdate == 1)
		{
			self::queuesms($user->phone, $subject.' '.timebanknotification::getUrlBase().'event/view/'.$event->id, $user->id);
		}
		self::send_inbox($user->id, 0, $subject, '<a href="'.url::base().'event/view/'.$event->id.'">ดูรายละเอียดกิจกรรม</a>');
		
	}
		
	public static function notify_contactus($contactus)
	{
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = 'jitarsabank@gmail.com';
		$subject = 'มีข้อความจากหน้าเว็บไซต์ (contact us)';
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
	
	public static function noti_eventcomment($user, $event, $comment)
	{
		$organization = ORM::factory('organization', $event->organization_id);
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = $user->email;
		$subject = 'องค์กรได้ฝากข้อความไว้ในงาน "'.$event->name.'" (ที่คุณได้ฝากข้อความไว้)';
		$body = self::renderHtmlEmail('organization_comment', array(
															'displayname' 	=> $user->displayname,
															'org_name'		=> $organization->name,
															'event_id'		=> $event->id,
															'event_name'	=> $event->name,
															'comment' =>  $comment->comment,
															'comment_id'		=> $comment->id
															));
		if ($user->noti_eventcomment == 1)
		{
			self::queuemail($from, $to, $subject, $body);
		}
		self::send_inbox($user->id, 0, $subject, '<a href="'.url::base().'event/view/'.$event->id.'#'.$comment->id.'">ดูข้อความ</a>');
	}
	
	public static function noti_eventvolunteercomment($user,  $event, $comment)
	{
		$organization = ORM::factory('organization', $event->organization_id);
		$org_user = ORM::Factory('user', $organization->user_id);
		
		$from = Kohana::$config->load('timebank')->get('server_email');
		$to = $org_user->email;
		$subject = 'มีอาสาฝากข้อความไว้ใน "'.$event->name.'"';
		
		$body = self::renderHtmlEmail('volunteer_comment', array(
															'org_name' 		=> $organization->name,
															'event_name'	=> $event->name,
															'event_id' 		=> $event->id,
															'comment'		=> $comment->comment,
															'comment_id'		=> $comment->id
															));
		if($organization->noti_eventvolunteercomment == 1)
		{
			self::queuemail($from, $to, $subject, $body);
		}
		self::send_inbox(0, $organization->id, $subject, '<a href="'.url::base().'event/view/'.$event->id.'#'.$comment->id.'">ดูข้อความ</a>');
		
	}
	
	public static function notify_matchevent($user, $events/*array*/)
	{
		if(count($events) <= 0) return;
		$subject = 'มีงานอาสาที่เหมาะกับคุณ';
		
		//build link 
		$links = '';
		$htmllinks = '';
		foreach($events as $event)
		{
			$links .= timebanknotification::getUrlBase().'event/view/'.$event->id.' ';	
			$htmllinks .=  '<a href="'.url::base().'event/view/'.$event->id.'">'.$event->name.'</a> | ';
		}
			
		if ($user->noti_sms_event_matched == 1)
		{
			
			self::queuesms($user->phone, $subject.' '.$links, $user->id);
		}
		
		self::send_inbox($user->id, 0 , $subject, $htmllinks);
		
	}
}

