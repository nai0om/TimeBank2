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
			<p><?= Form::checkbox('noti_eventrecommended', 1, (bool) $user->noti_eventrecommended); ?> เมื่อมีงานอาสาที่เหมาะกับความสนใจ / ความถนัดของฉัน (แจ้งเตือนไม่เกินวันละ 1 ครั้ง)</p>
			<!--p><input type="radio"> ให้แจ้งเตือนทันที</p>
			<p><input type="radio"> ให้แจ้งเตือน <select><option>วันละ 1 ครั้ง</option></select></p-->
			<p><?= Form::checkbox('noti_eventapproved', 1, (bool) $user->noti_eventapproved); ?> เมื่อได้รับการตอบรับเข้าร่วมกิจกรรม (แจ้งเตือนทันที)</p>
			<p><?= Form::checkbox('noti_almosteventdate', 1, (bool) $user->noti_almosteventdate); ?> ก่อนถึงวันจัดกิจกรรมที่ได้รับการตอบรับ 3 วัน</p>
			<!--p><?= Form::checkbox('noti_eventthank', 1, (bool) $user->noti_eventthank); ?> เมื่อมีงานอาสาที่สมัครไป ประกาศรายชื่ออาสาสมัคร และฉันได้ไป หรือไม่ได้ไป</p-->
			<p><?= Form::checkbox('noti_eventthank', 1, (bool) $user->noti_eventthank); ?> เมื่อองค์กรได้เขียนคำขอบคุณ และ / หรือ โพสต์รูปกิจกรรมที่ได้ไปเข้าร่วม </p>
            <p><?= Form::checkbox('noti_eventcomment', 1, (bool) $user->noti_eventcomment); ?> เมื่อมีคนมา comment ในงานที่อาสาได้ comment ไว้  </p>
			
			<div class="headline">แจ้งเตือนทางมือถือ (SMS)</div><div class="line"></div>
			<p><?= Form::checkbox('noti_sms_eventapproved', 1, (bool) $user->noti_sms_eventapproved); ?> เมื่อได้รับการตอบรับเข้าร่วมกิจกรรม (แจ้งเตือนทันที)</p>
			<p><?= Form::checkbox('noti_sms_almosteventdate', 1, (bool) $user->noti_sms_almosteventdate); ?> ก่อนถึงวันจัดกิจกรรมที่ได้รับการตอบรับ 3 วัน</p>
			<p><?= Form::checkbox('noti_sms_news', 1, (bool) $user->noti_sms_news); ?> รับข่าวสารพิเศษจากธนาคารจิตอาสา</p>
			<p><?= Form::submit('edit', 'บันทึกการเปลี่ยนแปลง'); ?></p>
		<?= Form::close(); ?>
		
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
        
    </div>
</div>
  
 