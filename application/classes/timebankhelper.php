
<?php defined('SYSPATH') or die('No direct script access.');
 
class timebankhelper {
 	
	public static function getAllValunteerNumber()
	{
		return ORM::factory('user')->where('role', '=', '0')->count_all();
	}
	public static function getOpenEventNumber()
	{
		return ORM::factory('event')->where('status', '=', '1')->count_all();
	}
	public static function getClosedEventNumber()
	{
		return ORM::factory('event')->where('status', '=', '0')->count_all();
	}
	public static function getJoinedValunteerNumber()
	{
		return DB::select(array('SUM("volunteer_joined")', 'jointed'))
					->from('events')
					->where('status','=','0')->execute()->get('jointed', 0);
	}
	
	public static function getDaysNumber()
	{
		$days = array();
		for($i = 0; $i <= 30 ; $i++)
		{
			$days[$i + 1] = $i + 1;
		}
		return $days; 
	}
	
	public static function getYearsNumber()
	{
		$years = array();
		for($i = 0; $i <= 150 ; $i++)
		{
			$years[$i +2400] = $i +2400;
		}
		return $years; 
	}
	
}
 
?>

 