<div id="help" class="detail">
<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>ช่วยเหลือ</li>
		</div>
		<ul><li>สมัครสมาชิก</li><li>เข้าสู่ระบบ</li></ul>

		<div id="icon_set">
			<a href="main_timeBank_1.html"><img src="img/icon_donation.png"/></a>
			<a href="main_timeBank_1.html"><img src="img/icon_how_it_work.png"/></a>
			<a href="main_timeBank_2.html"><img src="img/icon_browse_event.png"/></a>
			<a href="main_timeBank_1.html"><img src="img/icon_help.png"/></a>
		</div>

		<div style="clear:both"></div>
		<h2>ช่วยเหลือ</h2>
		<form>
			<input type="text">
			<img src="img/icon_google.png" style="position:relative;top:-2px;"/>
			<input type="submit" value="google search" id="google">
			<div style="clear:both"></div>
			<input type="radio" name="type" ><label>Web</label>
			<input type="radio" name="type" ><label>Jitarsabank.org website</label>
		</form>

		<div style="clear:both"></div>
		<h3><?= $help->topic ?></h3>
		<div id="content">
			<?= $help->message ?>
			<div class="line"><?= HTML::anchor('help', 'ย้อนกลับ'); ?></div>
		</div>
		
  </div>
</div>