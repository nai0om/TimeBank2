<div id="tb_browse_new">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>สร้างงานอาสาใหม่</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		
		<h2>สร้างงานอาสาใหม่</h2>
		<?= Form::open('event/create', array('enctype' => 'multipart/form-data')); ?>
			<?php include Kohana::find_file('views', 'event/form') ?>
			<input type="submit" value="สร้างงานอาสา">
			</div>
		<?= Form::close(); ?>
		
  </div>
</div>