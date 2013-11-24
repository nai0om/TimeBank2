<div id="tb_browse_new">
  <div id="main" role="main">
		<div id="sitemap">
			<li><?= HTML::anchor('welcome/home', 'หน้าแรก') ?></li>
			<li><?= HTML::anchor('welcome/timebank', 'ธนาคารจิตอาสา') ?></li>
			<li><?= HTML::anchor('event/create','สร้างงานอาสาใหม่') ?></li>
		</div>
		
		<h2>สร้างงานอาสาใหม่</h2>
		<?= Form::open('event/create', array('enctype' => 'multipart/form-data')); ?>
			<?php include Kohana::find_file('views', 'event/form') ?>
			</div>
			<div style="clear:both"></div>
			<input style="margin:0 auto;" type="submit" value="สร้างงานอาสา">
		<?= Form::close(); ?>
		
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>