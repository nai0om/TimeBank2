<?php defined('SYSPATH') or die('No direct script access.');
 
class linkscreator {
 
	public static function set_event_link($event)
	{
		
		 DB::delete('links')->where('event_id', '=', $event->id)->execute();
		// default event link to itself
		linkscreator::add_link(0, $event->id, 0, 0,0);
		
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
					linkscreator::add_link($user->id, $event->id, $index + 1, array_search($type, $jobs), 0.5);
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
					linkscreator::add_link($user->id, $event->id, 5, $skill, 0.1);
				}
			}
			
			if($user->province == $provice)
			{
				linkscreator::add_link($user->id, $event->id, 6, $skill, 1);
			}
		}
		
	}
	
	public static function get_top_event($user_id, $limit)
	{
		return DB::select('event_id', array(DB::expr('sum(rate)'), 'rate'))
						->from('links')
						->where('user_id', '=', $user_id)
						->or_where('user_id', '=', '0')
						->group_by('event_id')
						->order_by('rate', 'desc')
						->limit($limit)
						->execute()
						->as_array();
						
		/*	SELECT event_id, sum(rate) as rate
			FROM links
			WHERE user_id=1 or user_id=0
			group by event_id
			order by rate desc; */
	}
	
	public static function set_user_link($user)
	{
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
			 foreach($types as $type)
			 {	
				$type = trim($type);
				if($type == '') continue;
				$index = linkscreator::contrain_key($type, $event->tags, ','); 
				if ( $index >= 0) 
				{
					linkscreator::add_link($user->id, $event->id, $index + 1, array_search($type, $jobs), 0.5);
				}
			 }
			 
			//check skill
			foreach($skills as $skill)
			{
				$skill = trim($skill);
				if($skill == '') continue;
	
				$index = linkscreator::contrain_key($skill, $event->skills, '|'); 
				if ( $index >= 0) 
				{
					linkscreator::add_link($user->id, $event->id, 5, $skill, 0.1);
				}
			}
			
			if($event->location_province == $provice)
			{
				linkscreator::add_link($user->id, $event->id, 6, $skill, 1);
			}
		}
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
	
	public static function add_link($user_id, $event_id, $linktype, $data, $rate)
	{
		DB::query(NULL, 
				'INSERT INTO  `timebank_test`.`links` (`user_id`, `event_id`, `link_type`, `data` , `rate` )
						VALUES ("'.$user_id.'",  "'.$event_id.'",  "'.$linktype.'",  "'.$data.'",  "'.$rate.'")
						ON DUPLICATE KEY UPDATE  `rate`="'.$rate.'"')->execute();
					
	}
	

	
	
	
	 
}
 
?>