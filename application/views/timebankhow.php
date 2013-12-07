<div id="tb_hiw">
<div id="main" role="main">
		<div id="sitemap">
			<li><?= HTML::anchor('welcome/home', 'หน้าแรก') ?></li>
			<li><?= HTML::anchor('welcome/timebank', 'ธนาคารจิตอาสา') ?></li>
			<li><?= HTML::anchor('welcome/timebankhow', 'วิธีใช้งาน') ?></li>
		</div>
		
		<h2>วิธีใช้งาน</h2>
		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('help', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>
		<div style="clear:both;"></div>
		
		<div class="table left"><h3 class="title">ขั้นตอนฝากเวลาเป็นอาสา</h3>
		<ol>
			<li><strong>สมัครบอกความตั้งใจให้เวลา</strong><p>กรอกชื่อ อีเมล รหัสผ่าน และฝากจำนวนชั่วโมงตามที่ตั้งใจ</p><a href="http://www.youtube.com/watch?v=W3dbESdNf54">(ดูคลิปแนะนำ)</a> <p class="link" style="top:47px;"><a href="<?= url::base().'user/record' ?>"><img src="<?= url::base(); ?>media/img/tb_icon_heart.png"/>ฝากเวลา</a></P></li>
			<li><strong>เลือกใช้เวลากับงานอาสาที่ตรงใจ</strong><p>ค้นหาและสมัครภารกิจจิตอาสาที่สอดคล้องกับเวลา ความสนใจ หรือทักษะของเรา <a href="http://www.youtube.com/watch?v=zxc8n6V4Eak">(ดูคลิปแนะนำ)</a> </p><p class="link" style="top:10px;"><a href="<?= url::base().'event' ?>"><img src="<?= url::base(); ?>media/img/tb_icon_plus.png"/>ค้นหางานจิตอาสา</a></p></li>
			<li><strong>แบ่งปันประสบการณ์และยืนยันการใช้เวลา</strong><p>เล่าความประทับใจ การเรียนรู้ เรื่องราวจากภารกิจจิตอาสา และยืนยันเวลาที่ได้ใช้ไปแล้ว <a href="http://www.youtube.com/watch?v=_JWTzdpmbKQ">(ดูคลิปแนะนำ)</a></p></li>
		</ol></div>
		
		<div class="table right"><h3 class="title">ขั้นตอนสร้างภารกิจจิตอาสา</h3>
		<ol>
			<li><strong>ให้ข้อมูลและแนะนำองค์กร</strong><p>สร้างบัญชีผู้ใช้ และบอกเล่าเรื่องราวเกี่ยวกับกลุ่ม/องค์กรอาสาของเรา</p><p class="link" style="top:47px;"><a href="<?= url::base().'organization/create' ?>"><img src="<?= url::base(); ?>media/img/tb_icon_alarm.png"/>สมัคร</a></P></li>
			<li><strong>สร้างภารกิจ เปิดโอกาสใช้เวลาจิตอาสา</strong><p>ระบุรายละเอียดของภารกิจให้ครบถ้วน เช่นเวลาที่ใช้ ลักษณะงาน และทักษะที่ต้องการ</p><p class="link" style="top:10px;"><a href="<?= url::base().'event/create' ?>"><img src="<?= url::base(); ?>media/img/tb_icon_glass.png"/>สร้างภารกิจ</a></p></li>
			<li><strong>ตอบรับและตอบกลับ เมื่อบรรลุภารกิจ</strong><p>ตอบรับอาสาที่สมัครเข้าร่วมและตอบกลับเมื่อสิ้นภารกิจโดยบันทึกเวลาพร้อมคำขอบคุณ</p></li>
		</ol></div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
		
  </div>
</div>