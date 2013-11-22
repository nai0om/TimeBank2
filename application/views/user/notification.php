<div id="member" class="warn">
  <div id="main" role="main">
		<div id="sitemap">
			<li><?= HTML::anchor('welcome/home', 'หน้าแรก') ?></li>
			<li><?= HTML::anchor('user/notification', 'การแจ้งเดือน') ?></li>
		</div>

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
			<div class="headline">แจ้งเตือนทางอีเมล</div>
            <div class="line"></div>
		
             <p><?= Form::checkbox('noti_event_matched_check', 1, $user->noti_event_matched > 0? true: false); ?> เมื่อมีงานอาสาที่เหมาะกับโปรไฟล์ (ความสนใจ/ ความถนัด) ของอาสา : 
            		 แจ้งเตือน <?= Form::select('noti_event_matched', Kohana::$config->load('timebank')->get('sms_sent_time'), $user->noti_event_matched); ?></p>
			<p><?= Form::checkbox('noti_eventapproved', 1, (bool) $user->noti_eventapproved); ?> เมื่อคุณได้รับการตอบรับเข้าร่วมกิจกรรม (แจ้งเตือนทันที)</p>
			<p><?= Form::checkbox('noti_almosteventdate', 1, (bool) $user->noti_almosteventdate); ?> ก่อนถึงวันจัดกิจกรรมที่คุณได้รับการตอบรับ 3 วัน</p>
			<p><?= Form::checkbox('noti_eventthank', 1, (bool) $user->noti_eventthank); ?> เมื่อองค์กรได้เขียนคำขอบคุณ และ / หรือ โพสต์รูปกิจกรรมที่คุณได้ไปเข้าร่วม </p>
            <p><?= Form::checkbox('noti_eventcomment', 1, (bool) $user->noti_eventcomment); ?> เมื่อมีองค์กรมาเขียนข้อความในงานที่คุณได้ฝากข้อความไว้  </p>
			<p></p>
			<p><i>หมายเหตุ: การแจ้งเตือนทางอีเมลจะส่งไปยังอีเมลผู้ใช้ของคุณ (ชื่อบัญชีผู้ใช้) หากไม่ได้รับการแจ้งเตือนกรุณาตรวจสอบในกล่องอีเมลขยะ (spam หรือ junk mail)</p>
			<div class="headline">แจ้งเตือนทางมือถือ (SMS)</div>
            <div class="line"></div>
            <p><?= Form::checkbox('noti_sms_event_matched_check', 1, $user->noti_sms_event_matched > 0? true: false); ?> เมื่อมีงานอาสาที่เหมาะกับโปรไพล์ (ความสนใจ/ ความถนัด) ของอาสา : 
            		 แจ้งเตือน <?= Form::select('noti_sms_event_matched', Kohana::$config->load('timebank')->get('sms_sent_time'), $user->noti_sms_event_matched); ?></p>
			<p><?= Form::checkbox('noti_sms_eventapproved', 1, (bool) $user->noti_sms_eventapproved); ?> เมื่อคุณได้รับการตอบรับเข้าร่วมกิจกรรม (แจ้งเตือนทันที)</p>
			<p><?= Form::checkbox('noti_sms_almosteventdate', 1, (bool) $user->noti_sms_almosteventdate); ?> ก่อนถึงวันจัดกิจกรรมที่คุณได้รับการตอบรับ 3 วัน</p>
			<p><?= Form::checkbox('noti_sms_news', 1, (bool) $user->noti_sms_news); ?> รับข่าวสารพิเศษจากธนาคารจิตอาสา</p>
			<p></p>
			<p><i>หมายเหตุ: การแจ้งเตือนทาง SMS จะส่งไปยังหมายเลขโทรศัพท์เคลื่อนที่ที่คุณให้ไว้ในข้อมูลส่วนตัว หากไม่ได้รับการแจ้งเตือนกรุณาตรวจสอบหมายเลขโทรศัพท์เคลื่อนที่ หรือ ผู้ให้บริการโทรศัพท์ความเคลื่อนที่ของคุณ</p>
			<p><?= Form::submit('edit', 'บันทึกการเปลี่ยนแปลง'); ?></p>
			
			
		<?= Form::close(); ?>
		
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
        
    </div>
</div>
  
 