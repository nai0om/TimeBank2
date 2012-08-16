<div id="member" class="warn">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>การแจ้งเดือน</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
			<?php include Kohana::find_file('views', 'shared/usermenu') ?>
		</div>
		
		
		<div id="main_right">
		
		<div class="title left"></div>
		<div class="title body"><?= HTML::anchor('user/notification', 'แจ้งเตือนงานอาสา'); ?></div>
		<div class="title right"></div>
		<div class="title left"></div>
        <div class="title body past"><?= HTML::anchor('user/inbox', 'ข้อความเตือน ('.$notification_count.')'); ?></div>
		<div class="title right"></div>
		<div style="clear:both"></div>
		
		<?= Form::open('user/notification'); ?>
			<div class="headline">แจ้งเตือนทางอีเมล</div><div class="line"></div>
			<p><?= Form::checkbox('noti_eventrecommended', 1, (bool) $user->noti_eventrecommended); ?> เมื่อมีงานอาสาที่เหมาะกับโปรไพล์ของฉัน</p>
			<!--p><input type="radio"> ให้แจ้งเตือนทันที</p>
			<p><input type="radio"> ให้แจ้งเตือน <select><option>วันละ 1 ครั้ง</option></select></p-->
			<p><?= Form::checkbox('noti_eventapproved', 1, (bool) $user->noti_eventapproved); ?> เมื่อมีงานอาสาที่สมัครไป ตอบรับ (Approve) ให้ฉันเข้าร่วม</p>
			<p><?= Form::checkbox('noti_almosteventdate', 1, (bool) $user->noti_almosteventdate); ?> เมื่อมีงานอาสาที่สมัครไป ใกล้ถึงวันจัดกิจกรรม</p>
			<!--p><?= Form::checkbox('noti_eventthank', 1, (bool) $user->noti_eventthank); ?> เมื่อมีงานอาสาที่สมัครไป ประกาศรายชื่ออาสาสมัคร และฉันได้ไป หรือไม่ได้ไป</p-->
			<p><?= Form::checkbox('noti_eventthank', 1, (bool) $user->noti_eventthank); ?> หลังจากฉันได้เข้าร่วมภารกิจจิตอาสาที่สมัครไปแล้ว และองค์กรผู้จัดได้ปิดภารกิจนี้ (ซึ่งอาจมีภาพกิจกรรมมาแสดง และ/หรือ ได้เขียนขอบคุณอาสาสมัคร)</p>
			
			<div class="headline">แจ้งเตือนทางมือถือ</div><div class="line"></div>
			<p><?= Form::checkbox('noti_sms_eventapproved', 1, (bool) $user->noti_sms_eventapproved); ?> เมื่อมีงานอาสาที่สมัครไป ตอบรับ (Approve) ให้ฉันเข้าร่วม</p>
			<p><?= Form::checkbox('noti_sms_almosteventdate', 1, (bool) $user->noti_sms_almosteventdate); ?> เมื่อมีงานอาสาที่สมัครไป ใกล้ถึงวันจัดกิจกรรม</p>
			<p><?= Form::checkbox('noti_sms_news', 1, (bool) $user->noti_sms_news); ?> รับข่าวสารพิเศษจากทางเว็บไซต์</p>
			<p><?= Form::submit('edit', 'บันทึกการเปลี่ยนแปลง'); ?></p>
		<?= Form::close(); ?>
		
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
        
    </div>
</div>
  
 