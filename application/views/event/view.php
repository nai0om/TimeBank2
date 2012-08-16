<?
$memebers = $event->users->find_all();
$member_count = count($member_event);
$provinces = Kohana::$config->load('timebank')->get('provices');
?>

<?php if ($mode == 2): ?>
<div id="tb_browse_detail" class="members">
<? elseif ($mode == 3): ?>    
<div id="tb_browse_detail" class="photos">
<? else: ?>
<div id="tb_browse_detail">
<? endif ?>
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>ดูงานอาสา</li>
			<li><?= $event->name ?></li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>

		<div id="detail">
			<?php if ($mode == 2): ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=1', 'รายละเอียดงาน'); ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=2', 'ประกาศรายชื่ออาสางานนี้', array('class' => 'current')); ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=3', 'ภาพกิจกรรม'); ?>
            <? elseif ($mode == 3): ?>    
                <?= HTML::anchor('event/view/'.$event->id.'?mode=1', 'รายละเอียดงาน'); ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=2', 'ประกาศรายชื่ออาสางานนี้'); ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=3', 'ภาพกิจกรรม', array('class' => 'current')); ?>
            <? else: ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=1', 'รายละเอียดงาน', array('class' => 'current')); ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=2', 'ประกาศรายชื่ออาสางานนี้'); ?>
                <?= HTML::anchor('event/view/'.$event->id.'?mode=3', 'ภาพกิจกรรม'); ?>
            <? endif ?>
                
			
            <div class="a2a_kit a2a_default_style">
          	  <a id="share" class="a2a_dd" href="http://www.addtoany.com/share_save">Share</a>
            </div>
            <script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script>
            <!-- Lockerz Share END -->

		</div>
		<div style="clear:both"></div>
		
	<? if ($mode == 2): ?>
		<div>
      
			<ul id="member">
            <? foreach( $memebers as $user): ?>
            	<? if (!array_key_exists($user->id, $member_event)) continue; ?>
              	<? if ($user->profile_image == '') : ?>
					<li><img src="<?= url::base(); ?>media/img/sample_member_01.png">
                <? else :?>
                	<li><img src="<?= url::base().'media/upload/volunteers/'.$user->profile_image; ?>" />
                <? endif?>
                <div class="username"><?= $user->displayname ?></div>
                
                </li>
			<?  endforeach ?>
   			</ul>
			<img src="<?= url::base(); ?>media/img/tb_line_form.png">
	
		</div>
	<? elseif ($mode == 3): ?>
		<div>
             <ul id="album" style=" width:100%">
			 	<? foreach ($event->images->find_all() as $image) :?>
                    <li>
                     <? if ( $isAdmin) : ?>
                    	<div class="close" onclick="window.location = '<?= url::base().'event/removeimage/'.$event->id.'?image='.$image->image; ?>';" >ลบรูปนี้</div>
                    <? endif ?>
                        <div class='image'>
                        	<a href="<?= url::base().'media/upload/events/'.$image->image; ?>" style="display: table-cell; vertical-align: middle">
                        		<img  style=" max-width:247px; max-height:203px;"src="<?= url::base().'media/upload/events/'.$image->image; ?>">
                            </a>
                        </div>
                        <div class="caption"><?= $image->description; ?></div>
                    </li>
                <? endforeach ?>
                              <? if ( $isAdmin) : ?>
			  <li class="add">
                    
                         <?= Form::open('event/addimage/'.$event->id, array ('id' => 'search', 'enctype' => 'multipart/form-data'));  ?><br />
                        <div class='image' style="height:180px;">
                        	<img  style=" max-width:257px; max-height:203px;" src="<?= url::base().'media/img/tb_photos_add.png'; ?>" />    
                        </div>
						<div class="caption">
                         <?= Form::file('image') ?><br />
   						 <?= Form::input('text', 'เขียนคำบรรยายที่นี่'); ?> 
						 <?= Form::submit(NULL, 'add'); ?>
						 <?= Form::close(); ?>
                        </div>
                
             </li> 
            <? endif ?>
              </ul>

			<img src="<?= url::base(); ?>media/img/tb_line_form.png">
		</div>
		
		<h2>หลังจากที่ไปร่วมกิจกรรมกันมาแล้วเพื่อนๆ สามารถ พูดคุยกัน ได้ที่นี่นะคะ</h2>
        <h4 class="title">ฝากคอมเม้นต์</h4>
        
        <?= Form::open('event/addcomment/'.$event->id, array ('id' => 'post_comment', 'method' => 'post')); ?>
        <?= Form::textarea('comment'); ?>
        <?= Form::submit(NULL, 'โพส', array( 'style' => 'float:right; margin: 10px;')); ?>
        <? foreach( $event->comments->order_by('timestamp','desc')->find_all() as $comment) : ?>
            <div>
                <? if ($comment->user->id != 0 ) : ?>
                        <a><?= $comment->user->displayname ?></a>
                        <? if ($comment->user->profile_image == '') : ?>
                     		<img src="<?= url::base(); ?>media/img/face.jpg" style="float:left;">
                     	<? else : ?>
                        	<img src="<?= url::base().'media/upload/volunteers/'.$comment->user->profile_image; ?>" style="float:left; width:51px; ">
                    	<? endif ?>
                <? elseif ($comment->organization->id != 0)  : ?>
                        <?= HTML::anchor('organization/view/'.$comment->organization->id,  $comment->organization->name); ?> :
                        <? if($comment->organization->logo == '') : ?>
	                        <img src="<?= url::base(); ?>media/img/face.jpg" style="float:left;">
                        <? else :?>
                        	<img src="<?= url::base().'media/upload/organizations/'.$comment->organization->logo; ?>" style="float:left; width:51px; ">
                        <? endif ?>
                <? endif ?>
            <?= $comment->comment ?>
            </div>
        <? endforeach ?>
        <?= Form::close(); ?>

    <? else: ?>
		<? if($event->message != '') : ?>
        <div id="post">
            <h2>ข้อความขอบคุณจากทีมงาน</h2>
             <p class="post-data"><?= $event->message ?> </p>
        </div>
        <? endif ?>
		<? if($isAdmin) : ?>
            <div id="post">
                <h2>ข้อความขอบคุณสามารถพิมพ์โดย admin ประเภทองค์กรหลังจากจบงาน</h2>
               <?
			   echo Form::open('event/addmessage/'.$event->id, array ('style' => 'float:right;')); 
			   echo Form::textarea('message', ($event->message == '' ? 'เขียนคำขอบคุณที่นี่' : $event->message),  array ('style' => 'height: 50px; width: 760px;')); 
			   echo Form::submit(NULL, 'ส่ง'); 
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
			<h4>ต้องการจากอาสา</h4>
		</div>
		<div class="sub">
			<h3><?= number_format($member_count*$event->time_cost)  ?> ชั่วโมง</h3>
			<h4>รวมเวลาที่ได้ทั้งหมด</h4>
		</div>
		<div class="main">
			<h2>จำนวนอาสาสมัครที่ต้องการ</h2>
			<h3><?= number_format($event->volunteer_need_count) ?> คน</h3>
			<h4>สมัครแล้ว <?= $member_count ?> คน เหลืออีก <?= abs($event->volunteer_need_count - $member_count) ?> คน</h4>
		</div>
		<div style="clear:both"></div>
		
		<h3 class="title"><?= $event->name ?></h3>
		<div id="leftSide">

        	<p><span class="header"> องค์กร : </span> <?= HTML::anchor('organization/view/'.$event->organization_id, $event->organization->name) ?></p>
			<p><span class="header">ในโครงการ : </span> <?= $event->project_name ?></p>
			<p><span class="header">สถานที่ : </span><?= $event->location_name ?></p>
			<p><span class="header">จังหวัด : </span> <?= $provinces[$event->location_province] ?></p>
<p><span class="header">วันทำอาสา</span>
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
					if($name == '') continue;
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
			<p><span class="header">Tag ความสนใจ</span></p>
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
			<p><span class="header">ค่าใช้จ่าย</span></p>
			<p><?= $event->expense_detail ?>  	
			</p>
		</div>
		<div id="rightSide">
			<p><span class="header">เปิดรับสมัคร</span>
				<div id="duration"> 
				สิ้นสุดวันที่ <?
				$time= strtotime($event->signup_end_date); 
				echo phphelp::thai_date($time);
				?> 
                </div>
            </p>
			<p><span class="header">ลักษณะการเดินทาง</span></p>
			<p><?= $event->travel_detail ?></p>
            
              <p><span class="header">ติดต่อสอบถามเพิ่มเติม</span><br />
              <?= $event->inquiry_detail ?>
              </p>
			
		</div>
       
		<? if (!$isOrga && $isOpen) : ?>
			<p align="center"><img src="<?= url::base(); ?>media/img/tb_line.png"><?=  HTML::anchor('user/checkdata/'.$event->id, 'สมัครคลิกที่นี่', array( 'style' => 'position:relative;top:-20px;', 'class' => 'long'))?></p>
        <? endif ?>
        
        	<h4 class="title">ฝากคอมเม้นต์</h4>
            
			<?= Form::open('event/addcomment/'.$event->id, array ('id' => 'post_comment', 'method' => 'post')); ?>
            <?= Form::textarea('comment'); ?>
            <?= Form::submit(NULL, 'โพส', array( 'style' => 'float:right; margin: 10px;')); ?>
            <? foreach( $event->comments->order_by('timestamp','desc')->find_all() as $comment) : ?>
            	<div>
					<? if ($comment->user->id != 0 ) : ?>
                            <a><?= $comment->user->displayname ?></a>
                            <? if ($comment->user->profile_image == '') : ?>
                                <img src="<?= url::base(); ?>media/img/face.jpg" style="float:left;">
                            <? else : ?>
                                <img src="<?= url::base().'media/upload/volunteers/'.$comment->user->profile_image; ?>" style="float:left; width:51px; ">
                            <? endif ?>
                    <? elseif ($comment->organization->id != 0)  : ?>
                            <?= HTML::anchor('organization/view/'.$comment->organization->id,  $comment->organization->name); ?> :
                            <? if($comment->organization->logo == '') : ?>
                                <img src="<?= url::base(); ?>media/img/face.jpg" style="float:left;">
                            <? else :?>
                                <img src="<?= url::base().'media/upload/organizations/'.$comment->organization->logo; ?>" style="float:left; width:51px; ">
                            <? endif ?>
                    <? endif ?>
                	<?= $comment->comment ?>
         
					<? if ( $isAdmin) : ?>
                        <br />
                           <?= HTML::anchor('event/removecomment/'.$event->id.'?c='.$comment->id,  'ลบ comment', array ('style' => 'float:right') ); ?> 
                    <? endif ?>
                </div>
            <? endforeach ?>
            <?= Form::close(); ?>
    <? endif  //end normal mode?>
<?php include Kohana::find_file('views', 'shared/footer') ?>
		
  </div>
</div>
<style>
 .a2a_img{
	background-image:none;
}

</style>