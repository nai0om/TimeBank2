<div id="tb_browse_new">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>สร้างงานอาสาใหม่</li>
		</div>
		<ul><li>สมัครสมาชิก</li><li>เข้าสู่ระบบ</li></ul>
		
		<h2>แก้ไขงานอาสา</h2>
		<?= Form::open('event/edit/'.$event->id, array('enctype' => 'multipart/form-data')); ?>
			<?php include Kohana::find_file('views', 'event/form') ?>
			<input type="submit" value="สร้างงานอาสา">
			</div>
		<?= Form::close(); ?>
		
  </div>
</div>