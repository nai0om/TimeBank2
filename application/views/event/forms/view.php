<? if($event->message != '') : ?>
        <div id="post">
            <h2>ข้อความขอบคุณจากองค์กร</h2>
             <p class="post-data"><?= $event->message ?> </p>
        </div>
        <? endif ?>
		<? if($isOwner) : ?>
            <div id="post">
                <h2>***หลังจบ*** กิจกรรมอาสาแล้ว อย่าลืมมาเขียนคำขอบคุณให้จิตอาสาที่ไปร่วมงานนะครับ</h2>
               <?
			   echo Form::open('event/addmessage/'.$event->id, array ('style' => 'float:right;')); 
			   echo Form::textarea('message', ($event->message == '' ? 'เขียนคำขอบคุณที่นี่' : $event->message),  array ('style' => 'height: 50px; width: 760px;')); 
			   echo Form::submit(NULL,  ($event->message == '' ? 'ส่ง' : 'แก้ไข')); 
			  // echo '<input type="file" >'.'<img src="'.url::base().'media/img/tb_photos_add.png"/>'.'</input>';
			   echo Form::close();
			   ?>
            </div>	
        <? endif ?>
        
    	
    	<? if ($event->image != ''): ?>
			<img src="<?= url::base().'media/upload/events/'.$event->image ?>" style="float:left;">
        <? else :?>
            <img src="<?= url::base().'media/img/tb_detail_sampel.png' ?>" style="float:left;">
        <? endif ?>

		<div class="sub">
			<h3><?= number_format($event->time_cost) ?> ชั่วโมง</h3>
			<h4>เวลาทำงานอาสา</h4>
		</div>
		<div class="sub">
			<h3><?= number_format($member_count*$event->time_cost)  ?> ชั่วโมง</h3>
			<h4>เวลารวมที่ได้จากอาสา</h4>
		</div>
		<div class="main">
			<h2>รับสมัครอาสา</h2>
			<h3><?= number_format($event->volunteer_need_count) ?> คน</h3>
			<h4>สมัครแล้ว <?= $member_count ?> คน ต้องการอีก <?= abs($event->volunteer_need_count - $member_count) ?> คน</h4>
		</div>
		<div style="clear:both"></div>
		
		<h3 class="title"><?= $event->name ?></h3>
		<div id="leftSide" class="normal">

        	<p><span class="header"> องค์กร : </span> <?= HTML::anchor('organization/view/'.$event->organization_id, $event->organization->name) ?></p>
			<p><span class="header">ในโครงการ : </span> <?= $event->project_name ?></p>
			<p><span class="header">สถานที่ : </span><?= $event->location_name ?></p>
			<p><span class="header">จังหวัด : </span> <?= $provinces[$event->location_province] ?></p>
<p><span class="header">ช่วงวันทำงาน</span>
				<div id="duration"> 
				<?
				$time= strtotime($event->volunteer_begin_date ); 
				echo phphelp::thai_date($time);
				?> เวลา : <?= date("H:i", strtotime($event->volunteer_begin_time)); ?>น.
                
                <br>
				ถึง <?
				$time= strtotime($event->volunteer_end_date); 
				echo phphelp::thai_date($time);
				?> เวลา :<?= date("H:i", strtotime($event->volunteer_end_time));?> น.
                <br />
                วัน : <?php  if ($event->days == '')
                        {
                            echo 'ทุกวัน';
                        }
                        else
                        {
                            echo substr($event->days , 0, -2); 
                        }
            
            
                ?><br>
                </div>
            </p>
			<p><span class="header">รายละเอียดงานอาสา</span></p>
			<p><?= $event->detail ?></p>
			<p><span class="header">ทักษะของอาสาสมัครที่ต้องการ</span></p>
			
            <? 
				$dict = Kohana::$config->load('timebank')->get('worddict'); 
				$skill_list = explode ('|', $event->skills);
				$normal_skill = "";
				$special_skill = "";
				for($i = 0 ; $i < count($skill_list) ; $i++)
				{
					$name = trim($skill_list[$i]);
					
					if( $name == '' ) continue;
					
					if( !array_key_exists( trim( $name ), $dict ) ) continue;
					
					if(phphelp::startsWith($name, '2'))
					{
						if(strpos($name , '=') !== false)
						{
							$texts = explode('=', $name);
							$text = $texts[1];
							$special_skill .= $text.', ';  
						}
						else
						{
							$special_skill .= $dict[$name].', '; 
						}	
					}
					else
					{
						if(strpos($name , '=') !== false)
						{
							$texts = explode('=', $name);
							$text = $texts[1];
							$normal_skill .= $text.', '; 
						}
						else
						{
							$normal_skill .= $dict[$name].', '; 
						}	

					}
			
				}
				 $normal_skill = substr($normal_skill , 0, -2); 
				 $special_skill = substr($special_skill , 0, -2); 
			?>
			<p>ความสามารถพิเศษ (Special Skill) : <?= ($normal_skill == '') ? 'ไม่มี' : ''.$normal_skill ?></p>
			<p>ทักษะวิชาชีพ (Professional Skill) : <?= ($special_skill == '') ? 'ไม่มี' : ''.$special_skill  ?></p>
			<p><span class="header">ประเภทงานอาสา</span></p>
			<p><?php
					$jobs = Kohana::$config->load('timebank')->get('jobs'); 
					$last = '';
					   for($i = 0 ; $i < sizeof($jobs) ; $i++){
						    $pos = strpos($event->tags , $jobs[$i]);
						
						   if (  $pos >= 0 && $pos !== false)
						   {
								$last  .=  HTML::anchor('event/search?job='.$i, $jobs[$i]).', ';  
						   }
					   }
					   echo substr($last , 0, -2); 
					
			?> </p>
			<p><span class="header">รายละเอียดค่าใช้จ่าย</span></p>
			<p><?= ($event->expense_detail == '') ? 'ไม่มี' : ''.$event->expense_detail?>  	
			</p>
		</div>
		<div id="rightSide" class="normal">
			<p><span class="header">รับสมัครภายใน</span>
				<div id="duration"> 
				 <?
				$time= strtotime($event->signup_end_date); 
				echo phphelp::thai_date($time);
				?> 
                </div>
            </p>
			<p><span class="header">รายละเอียดการเดินทาง</span></p>
			<p><?= $event->travel_detail ?></p>
            
              <p><span class="header">ติดต่อสอบถามเพิ่มเติมที่</span><br />
              <?= $event->inquiry_detail ?>
              </p>
			
		</div>
       
		<? if (!$isOrga && $isOpen) : ?>
			<p align="center"><img src="<?= url::base(); ?>media/img/tb_line.png"><?=  HTML::anchor('user/checkdata/'.$event->id, 'สมัครคลิกที่นี่', array( 'style' => 'position:relative;top:-20px;', 'class' => 'long'))?></p>
        <? endif ?>
        
        	<h4 class="title">พูดคุยกันก่อนได้ที่นี่นะครับ</h4>
            
			<?= Form::open('event/addcomment/'.$event->id, array ('id' => 'post_comment', 'method' => 'post')); ?>
            <?= Form::textarea('comment'); ?>
            <?= Form::submit(NULL, 'ส่ง', array( 'style' => 'float:right; margin: 10px;')); ?>
            <? foreach( $event->comments->order_by('timestamp','desc')->find_all() as $comment) : ?>
            	<div id="<?= $comment->id ?>">
					<? if ($comment->user->id != 0 ) : ?>
                            <a><?= $comment->user->displayname ?></a>
                            <? if ($comment->user->profile_image == '') : ?>
                                <img src="<?= url::base(); ?>media/img/face.jpg" style="float:left;"/>
                            <? else : ?>
                                <img src="<?= url::base().'media/upload/volunteers/'.$comment->user->profile_image; ?>" style="float:left; width:51px; "/>
                            <? endif ?>
                    <? elseif ($comment->organization->id != 0)  : ?>
                            <?= HTML::anchor('organization/view/'.$comment->organization->id,  $comment->organization->name); ?> 
                            <? if($comment->organization->logo == '') : ?>
                                <img src="<?= url::base(); ?>media/img/face.jpg" style="float:left;">
                            <? else :?>
                                <img src="<?= url::base().'media/upload/organizations/'.$comment->organization->logo; ?>" style="float:left; width:51px; " />
                            <? endif ?>
                    <? endif ?>
                    
                	<?= $comment->comment ?>
         			 	<a style="font-size:11px; color:#666; float:right"><?= phphelp::timestamp_to_thai( $comment->timestamp) ?></a>
					<? if ( $isAdmin) : ?>
                    	<div style="float:right; width:100px;">
                            <label style="color:#999">id : <?= $comment->id ?></label><br />
                            <? if ($comment->recommend <> '1') : ?>
                                <?= HTML::anchor('admin/addcomment/?comment_id='.$comment->id,  'recommend' ); ?> <br /> 
                            <? endif ?>
                           <?= HTML::anchor('event/removecomment/'.$event->id.'?c='.$comment->id,  'ลบ comment'); ?> <br /> 
                         </div>
                    <? endif ?>
                   
                </div>
            <? endforeach ?>
            <?= Form::close(); ?>