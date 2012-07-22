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
			<h2>Thank you!</h2>
			<h3>ได้รับข้อมูลการสมัครอาสาของคุณเรียบร้อยแล้ว<br>
			กรุณารออีเมล์ยืนยันจาก <a><?= $organam?></a> อีกครั้ง <br>
			เพื่อยืนยันการเข้าร่วมกิจกรรมของคุณ ขอบคุณคะ</h3>
		</div>
  </div>
 </div>