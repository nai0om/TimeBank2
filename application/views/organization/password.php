<div id="member" class="setting">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ตั้งค่าบัญชีผู้ใช้</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
			<ul>
				<li><?= HTML::anchor('organization/index', 'หน้าหลัก'); ?></li>
				<li><?= HTML::anchor('organization/profile', 'ข้อมูลองค์กร'); ?></li>
				<li class="current"><?= HTML::anchor('organization/event', 'งานอาสา'); ?></li>
				<li><?= HTML::anchor('organization/notification', 'การแจ้งเตือน'); ?></li>
			</ul>
		
		</div>
		
		
		<div id="main_right">
			
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">เปลี่ยนรหัสผ่าน</div>
			<div class="title right"></div>
			
			<div style="clear:both"></div>
<? if ($message) : ?>
    <h3 class="error">
        <?= __($message); ?>
    </h3>
<? endif; ?>
			<?= Form::open('organization/changepassword', array('enctype' => 'multipart/form-data')); ?>	
                             
				<?= Form::label('password', 'รหัสผ่านเดิม :'); ?>
				<?= Form::password('password'); ?>
                <div class="error"><?= __(Arr::get($errors, 'password')); ?></div>
                
				<?= Form::label('newpassword', 'รหัสผ่านใหม่ :'); ?>
				<?= Form::password('newpassword'); ?>
                <div class="error"><?= __(Arr::get($errors, 'newpassword')); ?></div>
                
				<?= Form::label('newpasswordconfirm', 'ยืนยันรหัสผ่านใหม่อีกครั้ง :'); ?>
				<?= Form::password('newpasswordconfirm'); ?>
                <div class="error"><?= __(Arr::get($errors, 'newpasswordconfirm')); ?></div>

				<label></label><input type="submit" value="บันทึกการเปลี่ยนแปลง">
			<?= Form::close(); ?>
			
		</div>
		
<?php include Kohana::find_file('views', 'shared/footer') ?>
		</div>
	
  </div>
  
 