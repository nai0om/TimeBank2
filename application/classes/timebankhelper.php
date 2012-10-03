
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
	
	public static function getWantedTime()
	{
		$count = 0;
		$events = ORM::factory('event')->where('status', '=', '1')->find_all();
		foreach ($events as $event)
		{
			$count += $event->time_cost * $event->volunteer_need_count;
		}
		return $count;
	}
	
	public static function getDonatedTime()
	{
		return DB::select(array('SUM("hour")', 'time_donate'))
					->from('user_timebanks')
					->where('status','=','1')->execute()->get('time_donate', 0);
	}
	
	public static function getFinsihedTime()
	{
		$events = ORM::factory('event')->where('status', '=', '0')->find_all();
		$time_done  = 0;
		foreach($events as $event)
		{
			$time_done += $event->time_cost * $event->volunteer_joined;
		}
		return $time_done;
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
	
	public static function getRecommendEvent($limit = 3)
	{
		return ORM::factory('event')->where('recommend', '=', '1')->order_by(DB::expr('RAND()'))->limit($limit)->find_all();
	}
	
	public static function buildSkilsForm($skills = array())
	{
	   $skill = Kohana::$config->load('timebank')->get('all_skills'); 
	   $dict = Kohana::$config->load('timebank')->get('worddict');
	   $i = 1;
	   foreach ($skill as $title => $value)
	   { 
	   		$str_level = $i.'.';
	   		echo '<div class="title_userprofile" id="'.$title.'"> <label>'.$str_level.' '.$dict[$title].'</label></div>';
		
			echo '<div class="userprofile" id="'.$title.'-panel">';
			timebankhelper::buildSubNode($value, $skill, $dict, $skills, $str_level );
			echo '<script>
					$("#'.$title.'").click(function () {
						if($("#'.$title.'-panel").is(":hidden")){
							 $("#'.$title.'-panel").slideDown("slow");
						}
						else{
							 $("#'.$title.'-panel").slideUp("slow");
						}
					 });
				 </script>';
			echo '</div>';
		 $i++;
	   }
	}
	
	public static function buildSubNode($value, $skill, $dict, $skills, $str_level , $level = 0)
	{
		$magine =  $level*0;
		$i = 1;
		 foreach ($value as $title2 => $value2)
		 {
			 if(is_array($value2))
			{	$str_level_sub ='';
				if($str_level != '')
					$str_level_sub = $str_level.$i.'.';
				echo  '<label id="'.$title2.'" style="margin-left:'.(10 + $magine).'px; cursor: pointer; " > '.$str_level_sub.' '.$dict[$title2].'</label> <br />'; 
				
				if($str_level != '')
					echo '<div class="userprofile" id="'.$title2.'-panel">';
				else
					echo '<div class="userprofile" style="display: block;" >';
					
				timebankhelper::buildSubNode($value2, $skill, $dict, $skills, '', $level + 1);
				echo '<script>
					$("#'.$title2.'").click(function () {
						if($("#'.$title2.'-panel").is(":hidden")){
							 $("#'.$title2.'-panel").slideDown("slow");
						}
						else{
							 $("#'.$title2.'-panel").slideUp("slow");
						}
					 });
				 </script>';
				echo '</div>';
				$i++;
			}
			else
			{
					$value = '';
					 $checked = '';
					 
					if(array_key_exists(trim($value2), $skills))
					{
					  $value = $skills[$value2];
					 
					  if($value <> '')
					  {
						 $checked = 'checked="'.$value.'"'; 
					  }
					}
					
					if(phphelp::endsWith($value2, 'T'))
					{
						echo  '<input id="'.$value2.'" style="margin-left: '.(20 + $magine).'px;" '. $checked .' type="checkbox"> <span>'.$dict[$value2].'</span> <br />';
						echo  '<input id="'.$value2.'-input" name='.$value2.' value="'.$value.'" type="text" style="display:inline;width:40%;margin-left:'.(50 + $magine).'px;"><br />';
						echo '<script> 
							$("#'.$value2.'-input").click(function () {
									$("#'.$value2.'").attr("checked", true);
								}
							);
							</script>'; 
					}
					else
					{
						echo  '<input style="margin-left: '.(20 + $magine).'px;" '. $checked .' type="checkbox" name='.$value2.'> <span>'.$dict[$value2].'</span> <br />';
					}
				}
			}
			
	}
}
 
?>

 