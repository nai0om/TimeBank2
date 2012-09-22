<div id="org">
 <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>องค์กร</li>
			<li>ข้อมูลองค์กร</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>

		<div class="title left"></div>
		<div class="title body">ข้อมูล <?= $organization->name ?></div>
		<div class="title right"></div>
		
		<div style="clear:both"></div>
		<h2><?= $organization->name ?></h2>
		
		<div id="columnLeft">
			<? if ( $organization->logo == '' or  $organization->logo == NULL) : ?>
				<img src="<?= url::base() ?>media/img/org_profile_logo.png" style="float:left">
            <? else :?>
            	<img src="<?= url::base().'media/upload/organizations/'.$organization->logo; ?>" style="float:left;width:265px;height:253px;border:3px solid #FFF;margin:2px">
            <? endif ?>
			<? foreach ($organization->events->limit(5)->find_all() as $event) : ?>
				<? if($event->image != '' ) : ?>
               <a href="<?= url::base().'organization/image/'.$organization->id.'?index='.$event->image ?>" target="_blank">
                	<img src="<?= url::base().'media/upload/events/'.$event->image  ?>" style="width:107px;height:85px;margin:2px; border:3px solid #FFF" >
                 </a>
                <? endif ?>
            <? endforeach ?>
		</div>
		<div id="columnRight">
			<div class="sum"><div class="sum_hours"><?= $hours_sum ?> ชั่วโมง</div>
			<div class="sub_title">เวลาจากอาสาที่เคยร่วมงานกับองค์กร</div></div>
			<div class="sum"><div class="sum_hours"><?= $total_valun ?>  คน</div>
			<div class="sub_title">จำนวนอาสาที่เคยร่วมงานกับองค์กร</div></div>
		</div>
		
		<div style="clear:both"></div>
		<div class="column one">
			<h3>วัตถุประสงค์/ เป้าหมายองค์กร:</h3>
			<p><?= $organization->objective ?></p>
			<h3>ลักษณะกิจกรรมขององค์กร:</h3>
			<p><?= $organization->activity ?></p>
		</div>
		<div class="column two">
			<h4>สถานที่ตั้ง</h4>
			<p><?= $organization->address ?></p>
			<h4>เขต / อำเภอ</h4>
			<p><?= $organization->district ?></p>
			<h4>จังหวัด</h4>
			<p><?= $organization->province ?></p>
			<h4>รหัสไปรษณีย์</h4>
			<p><?= $organization->postcode ?></p>
			<h4>โทร.สำนักงาน</h4>
			<p><?= ($organization->homephone == '') ? '-' : $organization->homephone ?></p>
            <h4>มือถือ</h4>
			<p><?= ($organization->mobilephone == '') ? '-' :  $organization->mobilephone?></p>
			<h4>โทรสาร</h4>
			<p><?= ($organization->fax == '' ) ? '-' :  $organization->fax  ?></p>
		</div>
		<div class="column three">
			<h4>อีเมล</h4><span><?= $org_user->email ?></span>
			<h4>ติดต่อ </h4><span><?= $organization->contactperson ?></span>
			<h4>เว็บไซต์</h4><span><a href="<?= $organization->website ?>" target="_blank"><?= $organization->website ?></a></span>
			<h4>เฟสบุ๊ค</h4><span><a href="<?= 'http://'.$organization->facebook ?>" target="_blank"><?= $organization->facebook ?></a></span>
			<h4>ทวิตเตอร์</h4><span><a href="<?='http://www.twitter.com/'.$organization->twitter ?>" target="_blank"><?= ($organization->twitter == '' )?  '': '@'.$organization->twitter ?></a></span>
		</div>

		<?
			$isOpen = '';
			$isClose = 'past';
			if($mode == 2)
			{
				//close
				$isOpen = 'past';
				$isClose = '';
			}
		?>
		<div style="clear:both"></div>
		<div class="title left"></div>
		<div class="title body <?= $isOpen ?>"><?= HTML::anchor('organization/view/'.$organization->id, 'งานอาสาที่เปิดรับสมัคร') ?></div>
		<div class="title right"></div>
		<div class="title left"></div>
		<div class="title body <?= $isClose ?>"><?= HTML::anchor('organization/view/'.$organization->id.'?mode=2', 'งานอาสาที่จบไปแล้ว') ?></div>
		<div class="title right"></div>
		<div style="clear:both"></div>
		<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;"><?=  count($events)?></span></p>
		
		<table>
			<tbody><tr>
				<th>ชื่อภารกิจ</th>
				<th>ต้องการเวลา (ช.ม./คน)</th>
				<th>รับจำนวน</th>
				<th>รับสมัครภายใน</th>
				<th>ช่วงวันทำงาน</th>
				<th></th>
			</tr>
            <? foreach( $events as $event ): ?>
			<tr>
                <td><?= $event->name?></td>
                <td><?= $event->time_cost ?></td>
                <td><?= $event->volunteer_need_count ?> คน</td>
                
                <? if( $event->status == '1'): ?>
                    <td><?=  phphelp::str_to_thai_date($event->signup_end_date) ?></td>
                    <td><?=  phphelp::str_to_thai_date($event->volunteer_begin_date) ?><br>ถึง <?=  phphelp::str_to_thai_date($event->volunteer_end_date) ?></td>
                    <td><?= HTML::anchor('event/view/'.$event->id, 'รายละเอียด') ?></td>
                <? else : ?>
                    <td>- ปิด -</td>
                    <td>- ปิด -</td>
                    <td><?= HTML::anchor('event/view/'.$event->id, 'เปิดดู') ?></td>
                <? endif ?>
			</tr>
			<? endforeach ?>

		</tbody></table>
		<?php include Kohana::find_file('views', 'shared/footer') ?>
		</div>
	

  </div>
</div>