<?
$provinces = Kohana::$config->load('timebank')->get('provices');

?>
<div id="org">
 <div id="main" role="main">
		<div id="sitemap">
			<li><?= HTML::anchor('welcome/home', 'หน้าแรก') ?></li>
			<li><?= HTML::anchor('user/view', 'ดูข้อมูลอาสา') ?></li>
		</div>

		<div style="clear:both"></div>

		<div class="title left"></div>
		<div class="title body"> <?= $view_user->displayname  ?></div>
		<div class="title right"></div>
		
		<div style="clear:both"></div>
		<h2><?= $view_user->first_name ?> <?= $view_user->last_name ?></h2>
		
		<div id="columnLeft">
			<? if ( $view_user->profile_image == '' or  $view_user->profile_image == NULL) : ?>
				<img src="<?= url::base() ?>media/img/org_profile_logo.png" style="float:left">
            <? else :?>
            	<img src="<?= url::base().'media/upload/volunteers/'.$view_user->profile_image; ?>" style="float:left;width:265px;height:253px;border:3px solid #FFF;margin:2px">
            <? endif ?>
		</div>
		<div id="columnRight">
			<div class="sum"><div class="sum_hours"><?= $time ?> ชั่วโมง</div>
			<div class="sub_title">เวลาตั้งใจอาสา</div></div>
			<div class="sum"><div class="sum_hours"><?= $work_time ?> ชั่วโมง</div>
			<div class="sub_title">ที่เคยร่วมกิจกรรมอาสา</div></div>
		</div>
		
		<div style="clear:both"></div>
		<div class="column one">
			<h3>ความสนใจของอาสา</h3>
			<p><?= $view_user->interest_tags ?></p>
               <? 
					$normal_skill = "";
					$special_skill = "";
					timebankhelper::build_skill_for_display($view_user->skills, $normal_skill, $special_skill, true);
									
				?>
            <h3>ความสามารถพิเศษ (Special Skill) : </h3> <p><?= $normal_skill	 ?></p>
			<h3> ทักษะวิชาชีพ (Professional Skill) : </h3> <p><?= $special_skill ?></p>
		</div>
		<div class="column two">
        	<h4>ชื่อเล่น</h4><p><?= $view_user->nickname ?></p>
             
			<h4>วันเกิด </h4>
            <p><?=  phphelp::str_to_thai_date($view_user->birthday); ?></p>
            
			<h4>เพศ</h4>	<p><? $sex = Kohana::$config->load('timebank')->get('sexs');
									echo $sex[$view_user->sex] ?></p>
		
		</div>
		<div class="column three">
        	<h4>ที่อยู่</h4><span><?= $view_user->address ?></span>
			<h4>จังหวัด</h4><span><?= ( $view_user->province  == '' ? '' : $provinces[$view_user->province]) ?></span>
			<h4>เบอร์โทรติดต่อ</h4><span><?= $view_user->phone ?></span>
			<h4>อีเมล</h4><span><?= $view_user->email ?></span>
		</div>

			<?
			$isOpen = '';
			$isClose = 'past';
			if($mode != 1)
			{
				//close
				$isOpen = 'past';
				$isClose = '';
			}
		?>
        <div style="clear:both"></div>
		
		<div class="title left"></div>
		<div class="title body <?= $isOpen ?>"><?= HTML::anchor('user/view/'.$view_user->id, 'งานอาสาที่สมัครไป') ?></div>
		<div class="title right"></div>
		<div class="title left"></div>
		<div class="title body <?= $isClose ?>"><?= HTML::anchor('user/view/'.$view_user->id.'?mode=2', 'งานอาสาที่เคยร่วม') ?></div>
		<div class="title right"></div>
		<div style="clear:both"></div>
		
		<p><span style="color: #0099CC;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-size: 20px;font-weight: bold;"><?= count($events) ?></span></p>
		<!-- div id="selection">ระบุเดือนที่ต้องการดู <select></select></div -->
			<? if (count($events) > 0) :?>
                    <table> 	 	 	
                        <tr>
                        	<? if($mode == 1 ) : ?>
                            	 <th style="width:100px;">สถานะ</th>
                            <? endif ?>
                            <th>งานอาสา</th>
                            <th>ชั่วโมงที่ได้รับ</th>
                            <th>รับจำนวน</th>
                            <th>วัน / เวลาทำงานอาสา</th>
                            <th>ประเภทของงาน</th>
                        </tr>
            <?php foreach ($events as $event):?>
            		<tr>
						<? if($mode == 1) : ?>
                              <td><?= $event['ustatus'] ?> </td>                
                         <? endif ?> 
                        <td><?= HTML::anchor('event/view/'.$event['id'],  $event['name']) ?></td>
                        <td><?= $event['time_cost'] ?></td>
                        <td><?= $event['volunteer_need_count'] ?></td>
                        <td><?=  phphelp::str_to_thai_date($event['volunteer_begin_date']);?></td>
                        <td><?= $event['tags'] ?></td>
                 </tr>
           <? endforeach ?>
                   
            </table>
    <? endif ?>

		<?php include Kohana::find_file('views', 'shared/footer') ?>
		</div>

	
  </div>
</div>
