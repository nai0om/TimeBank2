<?
$memebers = $event->users->find_all();
$member_count = $memebers->count();
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
			<li>เด็กและเยาวชน</li>
			<li>อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div id="icon_set">
            <?= HTML::anchor('welcome/donation', '<img src="'.url::base().'media/img/icon_donation.png"/>'); ?>
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
                
			<a id="share">share</a>
		</div>
		<div style="clear:both"></div>
		
	<?php if ($mode == 2): ?>
		<div>
      
			<ul id="member">
            <?php foreach( $memebers as $user): ?>
              	<?php if ($user->profile_image == '') : ?>
					<li><img src="<?= url::base(); ?>media/img/sample_member_01.png">
                <?php else :?>
                	<li><img src="<?= url::base().'media/upload/volunteers/'.$user->profile_image; ?>" />
                <?php endif?>
                <div class="username"><?= $user->nickname ?></div>
                <div class="name"><?= $user->first_name ?> <?= $user->last_name ?></div>
                </li>
			<?php  endforeach ?>
   			</ul>
			<img src="<?= url::base(); ?>media/img/tb_line_form.png">
				<ul id="pagination">
					<li>Page 1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
				</ul>
		</div>
	<? elseif ($mode == 3): ?>
		<div>
        <? if (! $isAdmin) : ?>
			<ul id="album">
            	<? foreach ($event->images->find_all() as $image) :?>
  			      <li>  <img  style=" max-width:257px; max-height:203px;"src="<?= url::base().'media/upload/events/'.$image->image; ?>"> </li>
                <? endforeach ?>
			</ul>
         <? else :?>
             <ul id="album">
			 	<? foreach ($event->images->find_all() as $image) :?>
                    <li>
                        <img  style=" max-width:257px; max-height:203px;"src="<?= url::base().'media/upload/events/'.$image->image; ?>">
                        <div onclick="window.location = '<?= url::base().'event/removeimage/'.$event->id.'?image='.$image->image; ?>';" class="close">close X</div>
                    </li>
                <? endforeach ?>
              </ul>
			  <div class="add">
                    <div>
                         <?php 
                           echo Form::open('event/addimage/'.$event->id, array ('id' => 'search', 'enctype' => 'multipart/form-data')); 
                           echo Form::input('text', 'เขียนคำบรรยายที่นี่'); 
                           echo Form::file('image');
	       				   echo Form::submit(NULL, 'OK'); 
						  // echo '<input type="file" >'.'<img src="'.url::base().'media/img/tb_photos_add.png"/>'.'</input>';
                           echo Form::close();
                        ?> 
                      </div>
                 </div> 
         <? endif ?>
			<img src="<?= url::base(); ?>media/img/tb_line_form.png">
				<ul id="pagination">
					<li>Page 1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
				</ul>
			
		</div>
		
		<h2>หลังจากที่ไปร่วมกิจกรรมกันมาแล้วเพื่อนๆ สามารถ พูดคุยกัน ได้ที่นี่นะคะ</h2>
		<h4 class="title">ฝากคอมเม้นต์</h4>
		<?= Form::open('event/addcomment/'.$event->id, array ('id' => 'post_comment', 'method' => 'post')); ?>
            <?= Form::textarea('comment'); ?>
            <?= Form::submit(NULL, 'โพส'); ?>
            <? foreach( $event->comments->limit(2)->order_by('timestamp','desc')->find_all() as $comment) : ?>
            	<div>
					<? if ($comment->user->profile_image == '') : ?>
                        <img src="<?= url::base(); ?>media/img/face.jpg" style="float:left;">
                    <? else :?>
                    	 <img src="<?= url::base().'media/upload/volunteers/'.$comment->user->profile_image; ?>" style="float:left; width:51px; ">
                    <? endif ?>
                <?= $comment->comment ?>
                </div>
            <? endforeach ?>
    
            <a href="" class="long">แสดงทั้งหมด</a>			 
            <?= Form::close(); ?>

            
		</div>
    <? else: ?>
		<div id="post">
			<h2>ข้อความขอบคุณสามารถพิมพ์โดย admin ประเภทองค์กรหลังจากจบงาน</h2>
			<a>ดูภาพกิจกรรม</a><form style="float:right;"><input type="text" value="เขียนคำขอบคุณที่นี่"><input type="submit" value="ส่ง"/><input type="submit" value="แก้ไข"/></form>
		</div>
	
    	<? if ($event->image != ''): ?>
			<img src="<?= url::base().'media/upload/events/'.$event->image ?>" style="float:left;">
        <? else :?>
            <img src="<?= url::base().'media/img/tb_detail_sampel.png' ?>" style="float:left;">
        <? endif ?>

		<div class="sub">
			<h3><?= $event->time_cost ?> ชั่วโมง</h3>
			<h4>ต้องการจากอาสา</h4>
		</div>
		<div class="sub">
			<h3><?= $member_count*$event->time_cost  ?> ชั่วโมง</h3>
			<h4>รวมเวลาที่ได้ทั้งหมด</h4>
		</div>
		<div class="main">
			<h2>จำนวนอาสาสมัครที่ต้องการ</h2>
			<h3><?= $event->volunteer_need_count ?> คน</h3>
			<h4>สมัครแล้ว <?= $member_count ?> คน เหลืออีก <?= abs($event->volunteer_need_count - $member_count) ?> คน</h4>
		</div>
		<div style="clear:both"></div>
		
		<h3 class="title"><?= $event->name ?></h3>
		<div id="leftSide">
			<p><span class="header">ในโครงการ:</span> <?= $event->project_name ?></p>
			<p><span class="header">สถานที่:</span><?= $event->location_name ?></p>
			<p><span class="header">จังหวัด:</span> <?= $provincesบ$event->location_province?></p>
			<p><span class="header">รายละเอียดงานอาสา</span></p>
			<p><?= $event->detail ?></p>
			<p><span class="header">ลักษณะการเดินทาง</span></p>
			<p><?= $event->travel_detail ?></p>
			<p><span class="header">ทักษะของอาสาสมัครที่ต้องการ</span></p>
			<p>ความสามารถพิเศษ</p>
			<p>ทักษะทั่วไป 	<?= $event->skills 	 ?></p>
			<p>ทักษะวิชาชีพ 	<?= $event->technical ?></p>
			<p><span class="header">Tag ความสนใจ</span></p>
			<p><?php
					$jobs = Kohana::$config->load('timebank')->get('jobs'); 
					$last = '';
					   for($i = 0 ; $i < sizeof($jobs) ; $i++){
						    $pos = strpos($event->tags , $jobs[$i]);
						   if ( $pos >= 0)
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
				<div id="duration">วันที่ <?= $event->signup_begin_date  ?><br>
				ถึง <?= $event->signup_end_date  ?><br>
				เวลา : <?= date("H:i", strtotime($event->signup_begin_time)); ?> น. - <?= date("H:i", strtotime($event->signup_end_time));?> น.</div></p>
			<p><span class="header">วันทำอาสา</span>
				<div id="duration">วันที่ <?= $event->volunteer_begin_date  ?><br>
				ถึง <?= $event->volunteer_end_date  ?><br>
				วัน : <?php  if ($event->days == '')
							{
								echo 'ทุกวัน';
							}
							else
							{
								echo substr($event->days , 0, -2); 
							}
				
				
					?><br>
				เวลา : <?= date("H:i", strtotime($event->volunteer_begin_time ));?> น. - <?= date("H:i", strtotime($event->volunteer_end_time));?> น.</div></p>
            <?= $event->inquiry_detail ?>
			

			
			<h4 class="title">ฝากคอมเม้นต์</h4>
            
			<?= Form::open('event/addcomment/'.$event->id, array ('id' => 'post_comment', 'method' => 'post')); ?>
            <?= Form::textarea('comment'); ?>
            <?= Form::submit(NULL, 'โพส'); ?>
            <? foreach( $event->comments->limit(2)->order_by('timestamp','desc')->find_all() as $comment) : ?>
            	<div>
					<? if ($comment->user->profile_image == '') : ?>
                        <img src="<?= url::base(); ?>media/img/face.jpg" style="float:left;">
                    <? else :?>
                    	 <img src="<?= url::base().'media/upload/volunteers/'.$comment->user->profile_image; ?>" style="float:left; width:51px; ">
                    <? endif ?>
                <?= $comment->comment ?>
                </div>
            <? endforeach ?>
    
            <a href="" class="long">แสดงทั้งหมด</a>			 
            <?= Form::close(); ?>

		</div>
		<? if (! $isAdmin) : ?>
		<p align="center"><img src="<?= url::base(); ?>media/img/tb_line.png"><?=  HTML::anchor('event/apply/'.$event->id, 'สมัครคลิกที่นี่', array( 'style' => 'position:relative;top:-20px;', 'class' => 'long'))?></p>
        <? endif ?>
    <? endif ?>
		
  </div>
</div>