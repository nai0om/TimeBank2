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
	
	public static function str_to_thai_date($string)
	{
		$time = strtotime($string); 
		return phphelp::thai_date($time);
	}

	public static function thai_date($time)
	{  
		$thai_day_arr = Kohana::$config->load('timebank')->get('thai_day_arr'); 
		$thai_month_arr = Kohana::$config->load('timebank')->get('thai_month_arr');
		 
		//$thai_date_return="วัน".$thai_day_arr[date("w",$time)];  
		$thai_date_return= "".date("j",$time);  
		$thai_date_return.=" ".$thai_month_arr[date("n",$time)];  
		$thai_date_return.= " ".(date("Y",$time)+543);  
	
		return $thai_date_return;  
	} 
	
		public static function thaidate_todate($time){  
		$thai_day_arr = Kohana::$config->load('timebank')->get('thai_day_arr'); 
		$thai_month_arr = Kohana::$config->load('timebank')->get('thai_month_arr');
		 
		//$thai_date_return="วัน".$thai_day_arr[date("w",$time)];  
		$thai_date_return= "วันที่ ".date("j",$time);  
		$thai_date_return.=" ".$thai_month_arr[date("n",$time)];  
		$thai_date_return.= " ".(date("Y",$time));  
	
		return $thai_date_return;  
	} 
	
	public static function getDateAsArray($date){  
		return explode("-", $date);
	}
	
	
	public static function  timestamp_to_thai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth = date("n",strtotime($strDate));
		$strDay = date("j",strtotime($strDate));
		$strHour = date("H",strtotime($strDate));
		$strMinute = date("i",strtotime($strDate));
		$strSeconds = date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai = $strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear, $strHour:$strMinute:$strSeconds น.";
	}
	 
}
 
?>