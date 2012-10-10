
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
	
	public static function build_skill_for_display($str_skill, &$normal_skill, &$special_skill, $noXshowS = true)
	{
				$dict = Kohana::$config->load('timebank')->get('worddict'); 
				$skill_list = explode ('|', $str_skill);
				
				
				for($i = 0 ; $i < count($skill_list) ; $i++)
				{
					$name = trim($skill_list[$i]);
					$text = "";	
					if( $name == '' ) continue;
					
					if(strpos($name , '=') !== false)
					{
						
						$texts = explode('=', $name);
						$name = $texts[0];
						$text = $texts[1];
					}
					
					if( !array_key_exists( trim( $name ), $dict ) ) continue;
					
					if(phphelp::startsWith($name, '2'))
					{
						if($text == '')
							$special_skill .=  timebankhelper::display_skill($name, $dict, $noXshowS); 
						else
							$special_skill .= $text.', '; 
						
					}
					else
					{
						if($text == '')
							$normal_skill .=  timebankhelper::display_skill($name, $dict, $noXshowS) ; 
						else
						{
							if(phphelp::startsWith($name, 'S'))
							{
								$normal_skill .=  $text.' '.timebankhelper::display_skill($name, $dict, $noXshowS) ; 
							}
							else
								$normal_skill .=  $text.', '; 	
						}
						

					}
			
				}
			
			 $normal_skill = substr($normal_skill , 0, -2); 
			 $special_skill = substr($special_skill , 0, -2); 
			 
	}
	
	public static function display_skill($skill,  $dict, $noXshowS = true )
	{
		if($noXshowS == true && phphelp::startsWith($skill, 'X'))
		{
			
			return '';
			
		}
		else if($noXshowS == false && phphelp::startsWith($skill, 'S'))
		{
			
			return '';
		}
		
		$result = __($skill);
		if($result == $skill)
			$result = $dict[$skill];
		return $result.', ';
	}
	public static function buildSkilsForm($skills = array(), $noX = false)
	{
	   $skill = Kohana::$config->load('timebank')->get('all_skills'); 
	   $dict = Kohana::$config->load('timebank')->get('worddict');
	   $i = 1;
	   foreach ($skill as $title => $value)
	   { 
	   		$str_level = $i.'.';
	   		echo '<div class="title_userprofile hide" id="'.$title.'"> <label>'.$str_level.' '.$dict[$title].'</label></div>';
		
			echo '<div class="userprofile" id="'.$title.'-panel">';
			timebankhelper::buildSubNode($value, $skill, $dict, $skills, $str_level, $noX);
			echo '<script>
					$("#'.$title.'").click(function () {
						if($("#'.$title.'-panel").is(":hidden")){
							 close();
							 $("#'.$title.'-panel").slideDown("slow");
							 $(this).addClass("expand");
							 $(this).removeClass("collapse");
						}
						else{
							 $("#'.$title.'-panel").slideUp("slow");
							 $(this).addClass("collapse");
							 $(this).removeClass("expand");
						}
					 });
					 
					 function close(){
						$.each($(".expand"), function(index, value) { 
							var panel = $(this).attr("id")+"-panel";
							$("#"+panel).slideUp("slow");
							$(this).addClass("collapse");
							$(this).removeClass("expand");
						});
					 }
				 </script>';
			echo '</div>';
		 $i++;
	   }
	}
	
	public static function buildSubNode($value, $skill, $dict, $skills, $str_level, $noX, $key = '', $level = 0)
	{
		$magine =  $level*0;
		$i = 1;
		 foreach ($value as $title2 => $value2)
		 {
			 $title2 = trim($title2);
			 if(!is_array($value2) && phphelp::startsWith($value2, 'A'))
			 {
				 $title2 = $value2;
			 	$value2 = Kohana::$config->load('timebank')->get($value2); 
			 }
			
			if(phphelp::startsWith($title2, 'X') && $noX)
			{
				$value2 = $title2;
			}
			
			if (is_array($value2) )
			{	
				
				
				$str_level_sub ='';
				if($str_level != '')
					$str_level_sub = $str_level.$i.'.';
				$checked = '';
				if(phphelp::endsWith($title2, 'TT'))
				{
					$val = '';
					if(array_key_exists(trim($title2), $skills))
					{
					  $val = $skills[$title2];
					}
					
					echo '<span style="margin-left: '.(10 + $magine).'px;cursor: pointer;" id="'.$title2.'">'.$dict[$title2].'</span> <br />';
					echo  '<input id="'.$title2.'-input" name='.$title2.' value="'.$val.'"  type="text" style="display:inline;width:40%;margin-left:'.(10 + $magine).'px;" /><br />';
						echo '<script> 
								$("#'.$title2.'-input").click(function () {
									$("#'.$title2.'-panel").slideDown("slow");	
									$(this).addClass("expand");
									$(this).removeClass("collapse");
								
								}
								);
							</script>'; 
				}
				else if(phphelp::startsWith($title2, 'X'))
				{	
					$checked ='';
					if(array_key_exists(trim($title2), $skills))
					{
						$checked = 'checked="true"';
					}
					echo  '<input name="'.$title2.'" id="'.$title2.'-checkbok" style="margin-left: '.(10 + $magine).'px;" '. $checked .' type="checkbox" /> 
							<span  style="cursor: pointer;" id="'.$title2.'">'.$dict[$title2].'</span> <br />';
							echo '<script> 
								$("#'.$title2.'-checkbok").click(function () {
									if($("#'.$title2.'-checkbok").is(":checked"))
									{
											$("#'.$title2.'-panel").slideDown("slow");
											$(this).addClass("expand");
											$(this).removeClass("collapse");
									}
									else
									{
										$("#'.$title2.'-panel").slideUp("slow");	
										$(this).addClass("collapse");
										$(this).removeClass("expand");
									}
								
								}
								);
								</script>'; 
				}
				else
				{	
					echo  '<label id="'.$title2.'" style="margin-left:'.(10 + $magine).'px; cursor: pointer; " > '.$str_level_sub.' '.$dict[$title2].'</label> <br />'; 
				}
				
				if($str_level != '' || phphelp::startsWith($title2, 'X'))
					echo '<div class="userprofile" id="'.$title2.'-panel">';
				else
					echo '<div class="userprofile" style="display: block;" >';
					
				timebankhelper::buildSubNode($value2, $skill, $dict, $skills, '', $noX, $title2, $level + 1);
				echo '<script>
					$("#'.$title2.'").click(function () {
						if($("#'.$title2.'-panel").is(":hidden")){
							 close_sub();
							 $("#'.$title2.'-panel").slideDown("slow");
							 $(this).addClass("expand");
							 $(this).removeClass("collapse");
						}
						else{
							 $("#'.$title2.'-panel").slideUp("slow");
							 $(this).addClass("collapse");
							 $(this).removeClass("expand");
						}
					 });
					  function close_sub(){
						$.each($(".userprofile .expand"), function(index, value) { 
							var panel = $(this).attr("id")+"-panel";
							$("#"+panel).slideUp("slow");
						});
					 }
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
						echo  '<span style="margin-left: '.(10 + $magine).'px;">'.$dict[$value2].'</span> <br />';
						echo  '<input id="'.$value2.'-input" name='.$value2.' value="'.$value.'" type="text" style="display:inline;width:40%;margin-left:'.(10 + $magine).'px;" /><br />';
						echo '<script> 
							$("#'.$value2.'-input").click(function () {
									$("#'.$value2.'").attr("checked", true);
								}
							);
							</script>'; 
					}
					else if(phphelp::startsWith($value2, 'S'))
					{
						echo  '<input type="radio" name="'.$key.'" value="'.$value2.'"  style="margin-left: '.(20 + $magine).'px;" '. $checked .'name='.$value2.' />
								 <span>'.$dict[$value2].'</span> <br />';
					}
					else
					{
						echo  '<input style="margin-left: '.(20 + $magine).'px;" '. $checked .' type="checkbox" name='.$value2.' /> 
								<span>'.$dict[$value2].'</span> <br />';
					}
				}
			}
			
	}
}
 
?>

 