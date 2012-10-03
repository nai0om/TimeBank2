<div id="org" class="warn">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>องค์กร</li>
			<li>การแจ้งเตือน</li>
		</div>

		<div style="clear:both"></div>
		<div id="menu_left">
        	<ul>
				<li><?= HTML::anchor('organization/index', 'หน้าหลัก'); ?></li>
				<li><?= HTML::anchor('organization/profile', 'แก้ไขข้อมูลองค์กร'); ?></li>
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
				<p><?= Form::checkbox('noti_volunteerregister', 1, (bool) $organization->noti_volunteerregister); ?> เมื่อมีอาสา สมัครเข้าร่วมกิจกรรมอาสาขององค์กร (แจ้งเตือนทันที)</p>
                	<p><?= Form::checkbox('noti_volunteercancel', 1, (bool) $organization->noti_volunteercancel); ?> เมื่อมีอาสา ยกเลิกกิจกรรมอาสาขององค์กร (แจ้งเตือนทันที)</p>
				<p><?= Form::checkbox('noti_eventalmostend', 1, (bool) $organization->noti_eventalmostend); ?> ก่อนงานอาสาจะสิ้นสุดการรับสมัคร 3 วัน</p>
				<p><?= Form::checkbox('noti_eventend', 1, (bool) $organization->noti_eventend); ?> เมื่อกิจกรรมอาสา จบเรียบร้อยแล้ว (แจ้งเตือนทันที)</p>
                 
                <p><?= Form::checkbox('noti_eventvolunteercomment', 1, (bool) $organization->noti_eventvolunteercomment); ?> เมื่อมีคนมาฝากข้อความในงานขององค์กร (ส่งทันที)</p>
				<!--p class="indent"><input type="checkbox"> อย่าลืมเข้าไปเขียนคำขอบคุณในหน้ารายละเอียดกิจกรรม</p>
				<p class="indent"><input type="checkbox"> อย่าลืมเข้าไปบันทึกจำนวนคนที่ไปร่วมกิจกรรมจริง</p>
				<p class="indent"><input type="checkbox"> อย่าลืม upload ภาพกิจกรรมลงในหน้าภาพกิจกรรม</p-->
				<p></p>
				<p><i>หมายเหตุ: การแจ้งเตือนทางอีเมลจะส่งไปยังอีเมลผู้ใช้ของคุณ (ชื่อบัญชีผู้ใช้) หากไม่ได้รับการแจ้งเตือนกรุณาตรวจสอบในกล่องอีเมลขยะ (spam หรือ junk mail)</p>
				<div><?= Form::submit('edit', 'บันทึกการเปลี่ยนแปลง'); ?><div class="line" style="width:576px;"></div></div>
			<?= Form::close(); ?>

		
		</div>
	
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>