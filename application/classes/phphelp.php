<?php defined('SYSPATH') or die('No direct script access.');
 
class phphelp {
 
	public static function startsWith($haystack, $needle)
	{
		$length = strlen($needle);
		return (substr($haystack, 0, $length) === $needle);
	}
	
	public static function endsWith($haystack, $needle)
	{
		$length = strlen($needle);
		if ($length == 0) {
			return true;
		}
	
		return (substr($haystack, -$length) === $needle);
	}
	

	public static function thai_date($time){  
		$thai_day_arr = Kohana::$config->load('timebank')->get('thai_day_arr'); 
		$thai_month_arr = Kohana::$config->load('timebank')->get('thai_month_arr');
		 
		$thai_date_return="วัน".$thai_day_arr[date("w",$time)];  
		$thai_date_return.= "ที่ ".date("j",$time);  
		$thai_date_return.=" เดือน".$thai_month_arr[date("n",$time)];  
		$thai_date_return.= " พ.ศ.".(date("Y",$time)+543);  
	
		return $thai_date_return;  
	} 
	
		public static function thaidate_todate($time){  
		$thai_day_arr = Kohana::$config->load('timebank')->get('thai_day_arr'); 
		$thai_month_arr = Kohana::$config->load('timebank')->get('thai_month_arr');
		 
		$thai_date_return="วัน".$thai_day_arr[date("w",$time)];  
		$thai_date_return.= "ที่ ".date("j",$time);  
		$thai_date_return.=" เดือน".$thai_month_arr[date("n",$time)];  
		$thai_date_return.= " พ.ศ.".(date("Y",$time));  
	
		return $thai_date_return;  
	} 
	
	public static function getDateAsArray($date){  
		return explode("-", $date);
	}
	
}
 
?>