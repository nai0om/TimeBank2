<div class="left">
			<div class="title left"></div>
			<div class="title body" style="font-family:chula">ความสามารถเฉพาะของคุณ</div>
			<div class="title right"></div>
			<div style="clear:both"></div>
       <?php
		   $skill = Kohana::$config->load('timebank')->get('all_skills'); 
		   $dict = Kohana::$config->load('timebank')->get('worddict');
		   foreach ($skill as $title => $value)
		   {
   			 echo  '<p><label>'.$dict[$title].'</label>';
			 foreach ($value as $title2 => $value2)
			 {
				echo  '<label style="margin-left: 10px;" > - '.$dict[$title2].'</label><br />'; 
				foreach ($value2 as $name)
				{
					$value = '';
					 $checked = '';
					if(array_key_exists($name, $skills))
					{
					  $value = $skills[$name];
					  if($value <> '')
					  {
						 $checked = 'checked="'.$value.'"'; 
					  }
					}
					
					if(phphelp::endsWith($name, 'T'))
					{
						echo  '<input style="margin-left: 20px;" '. $checked .' type="checkbox"> <span>'.$dict[$name].'</span> <br />';
						echo  '<input name='.$name.' value="'.$value.'" type="text" style="display:inline;width:40%;margin-left: 35px;"><br />';
					}
					else
					{
						echo  '<input style="margin-left: 20px;" '. $checked .' type="checkbox" name='.$name.'> <span>'.$dict[$name].'</span> <br />';
					}
				}
			 }
			 echo '<p>';
		   }
	   ?>
		


		  <label>Tag บ่งบอกกลุ่ม</label>
			<input name="xx" type="text" id="xx">
			<p><span class="tag">SCBStaff</span><span class="tag">วัดไร่ขิงห้อง 6/1</span><p>
		</div>
		
		<div class="right">
			<div class="title left"></div>
			<div class="title body" style="font-family:chula">เรื่องที่คุณใส่ใจ/สนใจ</div>
			<div class="title right"></div>
			<div style="clear:both"></div>
			<label>(เลือกได้มากกว่า 1 ข้อ)</label>
            <?php  
				$jobs = Kohana::$config->load('timebank')->get('jobs'); 
				for($i = 1 ; $i < sizeof($jobs) ; $i++){
					$checked = FALSE;
					if($interest_tags != '') {
						$pos = strpos($interest_tags, $jobs[$i]);
						if (  $pos >= 0 && $pos !== false){
							$checked = TRUE;
						}
					}
					echo Form::checkbox(str_replace(' ','_',$jobs[$i]), $jobs[$i], $checked).''.$jobs[$i].'<br />';
				}
            ?> 
            
            
     
		</div>
		<div style="clear:both"></div>
		<input type="submit" value="บันทึกการเปลี่ยนแปลง"><div class="line"></div>