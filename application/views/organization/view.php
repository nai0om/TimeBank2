<div id="org">
 <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>หน้าหลักสมาชิกองค์กร</li>
			<li>หน้าหลัก</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>

		<div class="title left"></div>
		<div class="title body">โปรไฟล์ <?= $organization->name ?></div>
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
                	<img src="<?= url::base().'media/upload/events/'.$event->image  ?>" style="width:107px;height:85px;margin:2px; border:3px solid #FFF" >
                <? endif ?>
            <? endforeach ?>
		</div>
		<div id="columnRight">
			<div class="sum"><div class="sum_hours"><?= $hours_sum ?> ชั่วโมง</div>
			<div class="sub_title">เวลาจากอาสาสมัครที่เคยทำงานกับมูลนิธิ</div></div>
			<div class="sum"><div class="sum_hours"><?= $total_valun ?>  อาสาสมัคร</div>
			<div class="sub_title">ที่เคยร่วมงานกับมูลนิธิ</div></div>
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
			<h4>เขต</h4>
			<p><?= $organization->district ?></p>
			<h4>จังหวัด</h4>
			<p><?= $organization->province ?></p>
			<h4>รหัสไปรษณีย์</h4>
			<p><?= $organization->postcode ?></p>
			<h4>เบอร์โทรศัพท์ </h4>
			<p><?= $organization->homephone ?></p>
			<h4>เบอร์โทรสาร</h4>
			<p><?= $organization->fax ?></p>
		</div>
		<div class="column three">
			<h4>อีเมล์</h4><span><?= $org_user->email ?></span>
			<h4>ติดต่อ </h4><span><?= $organization->contactperson ?></span>
			<h4>website URL</h4><span><?= $organization->website ?></span>
			<h4>Facebook</h4><span><a href="<?= 'http://'.$organization->facebook ?>" target="_blank"><?= $organization->facebook ?></a></span>
			<h4>twitter</h4><span><a href="<?='http://www.twitter.com/'.$organization->twitter ?>" target="_blank"><?= '@'.$organization->twitter ?></a></span>
		</div>

		<div style="clear:both"></div>
		<div class="title left"></div>
		<div class="title body"><?= HTML::anchor('organization/view/'.$organization->id, 'งานอาสาที่เปิดรับสมัคร') ?></div>
		<div class="title right"></div>
		<div class="title left"></div>
		<div class="title body past"><?= HTML::anchor('organization/view/'.$organization->id.'?mode=2', 'งานอาสาที่จบไปแล้ว') ?></div>
		<div class="title right"></div>
		<div style="clear:both"></div>
		<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;"><?= $organization->events->count_all()?></span></p>
		
		<table>
			<tbody><tr>
				<th>งานอาสา</th>
				<th>ต้องการจากอาสา</th>
				<th>จำนวนรับสมัคร</th>
				<th>เปิดรับสมัคร</th>
				<th>วัน / เวลาทำงานอาสา</th>
				<th></th>
			</tr>
            <? foreach( $events as $event ): ?>
			<tr>
                <td><?= $event->name?></td>
                <td><?= $event->time_cost ?></td>
                <td><?= $event->volunteer_need_count ?> คน</td>
                
                <? if( $event->status == '1'): ?>
                    <td><?= $event->signup_begin_date ?><br>ถึง <?= $event->signup_end_date ?></td>
                    <td><?= $event->volunteer_begin_date ?><br>ถึง <?= $event->volunteer_end_date ?></td>
                    <td><?= HTML::anchor('event/view/'.$event->id, 'สมัคร') ?></td>
                <? else : ?>
                    <td>- ปิด -</td>
                    <td>- ปิด -</td>
                    <td><?= HTML::anchor('event/view/'.$event->id, 'เปิดดู') ?></td>
                <? endif ?>
			</tr>
			<? endforeach ?>

		</tbody></table>
		
		</div>
	
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>