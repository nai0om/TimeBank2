<?php defined('SYSPATH') or die('No direct script access.');
 
class linkscreator {
 
	public static function set_event_link($event)
	{
		$settings = settings::getInstance();
		 DB::delete('links')->where('event_id', '=', $event->id)->execute();
		// default event link to itself
		linkscreator::add_link(0, $event->id, 0, '0' , 0, $event->signup_end_date);
	
		$users = ORM::factory('user')->where('role', '<>', '1')->find_all();
		$days = $event->days;
		// type of event;
		$types = explode(',', $event->tags);
		$skills = explode('|', $event->skills);
		$provice = $event->location_province;
		
		foreach ($users as $user)
		{
			 // check day user want 
			 // if $days ..... 
			 //TODO
			 $jobs = Kohana::$config->load('timebank')->get('jobs'); 
			 // check interest 
			 foreach($types as $type)
			 {	
				$type = trim($type);
				if($type == '') continue;
				$index = linkscreator::contrain_key($type, $user->interest_tags, ','); 
				if ( $index >= 0) 
				{	
					$porp = 'top_interest_'.($index + 1);
					$point = $settings->$porp;
					linkscreator::add_link($user->id, $event->id, $index + 1, array_search($type, $jobs),$point, $event->signup_end_date);
				}
			 }
			 
			//check skill
			foreach($skills as $skill)
			{
				$skill = trim($skill);
				if($skill == '') continue;
	
				$index = linkscreator::contrain_key($skill, $user->skills, '|'); 
				if ( $index >= 0) 
				{
					linkscreator::add_link($user->id, $event->id, 5, $skill, $settings->skill, $event->signup_end_date);
				}
			}
			
			if($user->province == $provice)
			{
				linkscreator::add_link($user->id, $event->id, 6, $provice, $settings->location, $event->signup_end_date);
			}
		}
		
	}
	
	public static function get_top_event($user_id, $limit)
	{
		$settings = settings::getInstance();
		return DB::query(DATABASE::SELECT, 
						'SELECT event_id, sum(rate) - '.$settings->end_date.'*datediff(end_date, NOW()) as rate_point			
						FROM links
						WHERE (user_id=0 or user_id='.$user_id.') and datediff(end_date, NOW()) >= 0
						group by event_id
						order by rate_point desc
						limit '.$limit.';')
						->execute()
						->as_array();
	
	}
	
	public static function set_user_link($user)
	{
		$settings = settings::getInstance();
		//clean up
		DB::delete('links')->where('user_id', '=', $user->id)->execute();
		// default event link to itself
		
		$events = ORM::factory('event')->where('status', '=', '1')->find_all();
		//	$days = $event->days;
		// type of event;
		$types = explode(',', $user->interest_tags);
		$skills = explode('|', $user->skills);
		$provice = $user->province;
		
		
		foreach ($events as $event)
		{
			 // check day user want 
			 // if $days ..... 
			 //TODO
			 $jobs = Kohana::$config->load('timebank')->get('jobs'); 
			 // check interest 
			 $i = 1;
			 foreach($types as $type)
			 {	
				$type = trim($type);
				if($type == '') continue;
				$index = linkscreator::contrain_key($type, $event->tags, ','); 
				if ( $index >= 0) 
				{
					$porp = 'top_interest_'.$i;
					$point = $settings->$porp;
					linkscreator::add_link($user->id, $event->id, $i, array_search($type, $jobs), $point, $event->signup_end_date);
				}
				$i++;
			 }
			 
			//check skill
			foreach($skills as $skill)
			{
				$skill = trim($skill);
				if($skill == '') continue;
	
				$index = linkscreator::contrain_key($skill, $event->skills, '|'); 
				if ( $index >= 0) 
				{
					linkscreator::add_link($user->id, $event->id, 5, $skill, $settings->skill, $event->signup_end_date);
				}
			}
			
			if($event->location_province == $provice)
			{
				linkscreator::add_link($user->id, $event->id, 6, $provice, $settings->location, $event->signup_end_date);
			}
		}
	}
	
	
	public static function remove_event($event_id)
	{
		 DB::delete('links')->where('event_id', '=', $event->id)->execute();
	}
	
	public static function contrain_key($key, $array_tag_string, $separate)
	{
		$key = trim($key);
		$tags = explode($separate, trim($array_tag_string));
		$i = 0 ;
		foreach ($tags as $tag)
		{
			if($key == $tag)
			{
				
				return $i;
			}
			$i++;
		}
		
		return -1;
	}
	
	public static function add_link($user_id, $event_id, $linktype, $data, $rate, $end_date)
	{
		 if($data == '') 	return;
		
		$check = DB::select()->from('links')
					->where('user_id', '=', $user_id)
					->where('event_id', '=', $event_id)
					->where('link_type', '=', $linktype)
					->where('data', '=', $data)
					->execute();	
					
		if(count($check) > 0)
		{
			//update
			DB::update('links')->set(array('rate' => $rate, 'end_date' => $end_date))
						->where('user_id', '=',  $user_id)
						->where('event_id', '=',  $event_id)
						->where('link_type', '=',  $linktype)
						->where('data', '=',  $data)
						->execute();
			
		}
		else
		{
			
			//insert
			DB::query(NULL, 
		'INSERT INTO  `links` (`user_id`, `event_id`, `link_type`, `data` , `rate`, `end_date` )
				VALUES ("'.$user_id.'",  "'.$event_id.'",  "'.$linktype.'",  "'.$data.'",  "'.$rate.'",  "'.$end_date.'")
				')->execute();
		}

					
	}
	

	
	
	
	 
}
 
?>