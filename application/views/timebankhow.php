<div id="tb_hiw">
<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>วิธีใช้งาน</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		
		<h2>วิธีใช้งาน</h2>
		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('help', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>
		<div style="clear:both;"></div>
		
		<div class="table left"><h3 class="title">ขั้นตอนฝากเวลาเป็นอาสา</h3>
		<ol>
			<li><strong>1. สมัครบอกความตั้งใจให้เวลา</strong><p>กรอกชื่อ อีเมล รหัสผ่าน และฝากจำนวนชั่วโมงตามที่ตั้งใจ</p><p class="link" style="top:70px;"><a><img src="<?= url::base(); ?>media/img/tb_icon_heart.png"/>ฝากเวลา</a></P></li>
			<li><strong>2. เลือกใช้เวลากับงานอาสาที่ตรงใจ</strong><p>ค้นหาและสมัครภารกิจจิตอาสาที่สอดคล้องกับเวลา ความสนใจ หรือทักษะของเรา</p><p class="link" style="top:28px;"><a><img src="<?= url::base(); ?>media/img/tb_icon_plus.png"/>ค้นหางานจิตอาสา</a></p></li>
			<li><strong>3. แบ่งปันประสบการณ์และยืนยันการใช้เวลา</strong><p>เล่าความประทับใจ การเรียนรู้ เรื่องราวจากภารกิจจิตอาสา และยืนยันเวลาที่ได้ใช้ไปแล้ว</p></li>
		</ol></div>
		
		<div class="table right"><h3 class="title">ขั้นตอนสร้างภารกิจจิตอาสา</h3>
		<ol>
			<li><strong>1. ให้ข้อมูลและแนะนำองค์กร</strong><p>สร้างบัญชีผู้ใช้ และบอกเล่าเรื่องราวเกี่ยวกับกลุ่ม/องค์กรอาสาของเรา</p><p class="link" style="top:70px;"><a><img src="<?= url::base(); ?>media/img/tb_icon_alarm.png"/>สมัคร</a></P></li>
			<li><strong>2. สร้างภารกิจ เปิดโอกาสใช้เวลาจิตอาสา</strong><p>ระบุรายละเอียดของภารกิจให้ครบถ้วน เช่นเวลาที่ใช้ ลักษณะงาน และทักษะที่ต้องการ</p><p class="link" style="top:10px;"><a><img src="<?= url::base(); ?>media/img/tb_icon_glass.png"/>สร้างภารกิจ</a></p></li>
			<li><strong>3. ตอบรับและตอบกลับ เมื่อบรรลุภารกิจ</strong><p>ตอบรับอาสาที่สมัครเข้าร่วมและตอบกลับเมื่อสิ้นภารกิจโดยบันทึกเวลาพร้อมคำขอบคุณ</p></li>
		</ol></div>
		
  </div>
</div>