<div id="tb_browse_detail" class="thanks">
 <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>สมัครงานอาสา</li>
			<li><?= $name ?></li>

		</div>
		<ul><?php include Kohana::find_file('views', 'shared/accountinfo') ?></ul>

		<div id="icon_set">
			<?=  HTML::anchor('/', '<img src="'.url::base().'media/img/icon_donation.png"/>') ?>
            <?=  HTML::anchor('/', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>') ?>
            <?=  HTML::anchor('/', '<img src="'.url::base().'media/img/icon_browse_event.png"/>') ?>
            <?=  HTML::anchor('/', '<img src="'.url::base().'media/img/icon_help.png"/>') ?>
		</div>
		
		<div style="clear:both"></div>
		<div id="content">
			<h2>ขอบคุณที่ปันเวลามาช่วยกันนะครับ</h2>
			<h3>ระบบได้รับข้อมูลการสมัครเข้าร่วมกิจกรรมอาสาของคุณเรียบร้อยแล้ว<br>
			"<a><?= $organam?></a>" จะแจ้งกลับทางระบบแจ้งเตือน และ/หรือ อีเมล<br>
			เพื่อตอบรับการเข้าร่วมกิจกรรมอาสาที่คุณสมัครไว้ ขอบคุณครับ</h3>
            <h2><?=  HTML::anchor('user/myevent', 'กลับไปดูรายละเอียดภารกิจจิตอาสา ที่คุณสมัครไว้ได้ที่นี่') ?></h2>
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
 </div>