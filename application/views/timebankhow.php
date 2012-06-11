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
		<div class="table left"><h3 class="title">ขั้นตอนหาอาสามัคร</h3>
		<ol>
			<li><strong>สมัครบอกเล่าแนะนำตัว</strong><p>สร้างบัญชีผู้ใช้และให้ข้อมูลองค์กร</p><p class="link" style="top:70px;"><a><img src="<?= url::base(); ?>media/img/tb_icon_alarm.png"/>ฝากเวลา</a></P></li>
			<li><strong>สร้างงาน เปิดโอกาสการใช้เวลาอาสา</strong><p>ระบุรายละเอียดของงาน เพื่อให้อาสาสมัครได้พบงานที่ตรงกับความสนใจและความสามารถ</p><p class="link" style="top:10px;"><a><img src="<?= url::base(); ?>media/img/tb_icon_glass.png"/>ดูงานอาสา</a></p></li>
			<li><strong>ตอบรับและตอบกลับ เมื่องานเสร็จ</strong><p>ตอบรับอาสาที่สมัครเข้าร่วมและบันทึกเวลาเมื่อจบงานพร้อมคำขอบคุณ</p></li>
		</ol></div>
		
		<div class="table right"><h3 class="title">ขั้นตอนสมัครอาสา</h3>
		<ol>
			<li><strong>สมัครบอกความตั้งใจให้เวลา</strong><p>กรอกชื่อ อีเมล รหัสผ่าน</p><p class="link" style="top:70px;"><a><img src="<?= url::base(); ?>media/img/tb_icon_heart.png"/>สมัคร</a></P></li>
			<li><strong>เลือกใช้เวลากับงานอาสาที่ตรงใจ</strong><p>ค้นหาและสมัครไปอาสากับงานที่สอดคล้องกับความสนใจหรือทักษะของเรา</p><p class="link" style="top:28px;"><a><img src="<?= url::base(); ?>media/img/tb_icon_plus.png"/>สร้างงานอาสา</a></p></li>
			<li><strong> บอกเล่าประสบการณ์และยืนยันการใช้เวลา</strong><p>เล่าความประทับใจ การเรียนรู้ เรื่องราวจากงานอาสาและยืนยันเวลาที่ใช้ไปหลังได้ทำงานแล้ว</p></li>
		</ol></div>
  </div>
</div>