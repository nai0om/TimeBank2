<div id="org" class="warn">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>หน้าหลักสมาชิกองค์กร</li>
			<li>หน้าหลัก</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
        	<ul>
				<li><?= HTML::anchor('organization/index', 'หน้าหลัก'); ?></li>
				<li><?= HTML::anchor('organization/profile', 'ข้อมูลองค์กร'); ?></li>
				<li><?= HTML::anchor('organization/event', 'งานอาสา'); ?></li>
				<li class="current"><?= HTML::anchor('organization/notification', 'การแจ้งเตือน'); ?></li>
			</ul>
		</div>
		
		
		<div id="main_right">
			
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body"><?= HTML::anchor('organization/notification', 'แจ้งเตือนงานอาสา'); ?></div>
			<div class="title right"></div>
			<div class="title left"></div>
			<div class="title body past"><?= HTML::anchor('organization/inbox', 'ข้อความเตือน ('.$notification_count.')'); ?></div>
			<div class="title right"></div>
			<div style="clear:both"></div>

			<?= Form::open('organization/notification'); ?>
				<div class="headline">แจ้งเตือนงานอาสาทางอีเมล</div><div class="line"></div>
				<p><?= Form::checkbox('noti_volunteerregister', 1, (bool) $organization->noti_volunteerregister); ?> เมื่อมีอาสา สมัครเข้าร่วมกิจกรรมอาสาขององค์กร</p>
				<p><?= Form::checkbox('noti_eventalmostend', 1, (bool) $organization->noti_eventalmostend); ?> เมื่องานอาสาที่กำลังเปิดรับสมัคร ใกล้สิ้นสุดวันรับสมัคร</p>
				<p><?= Form::checkbox('noti_eventend', 1, (bool) $organization->noti_eventend); ?> เมื่อกิจกรรมอาสา จบเรียบร้อยแล้ว</p>
				<!--p class="indent"><input type="checkbox"> อย่าลืมเข้าไปเขียนคำขอบคุณในหน้ารายละเอียดกิจกรรม</p>
				<p class="indent"><input type="checkbox"> อย่าลืมเข้าไปบันทึกจำนวนคนที่ไปร่วมกิจกรรมจริง</p>
				<p class="indent"><input type="checkbox"> อย่าลืม upload ภาพกิจกรรมลงในหน้าภาพกิจกรรม</p-->
				<div><?= Form::submit('edit', 'บันทึกการเปลี่ยนแปลง'); ?><div class="line" style="width:576px;"></div></div>
			<?= Form::close(); ?>

		
		</div>
	
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>