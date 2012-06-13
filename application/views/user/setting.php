<div id="member" class="setting">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ตั้งค่าบัญชีผู้ใช้</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
			<?php include Kohana::find_file('views', 'shared/usermenu') ?>
		</div>
		
		
		<div id="main_right">
			
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">ตั้งค่าบัญชีผู้ใช้</div>
			<div class="title right"></div>
			
			<div style="clear:both"></div>
<? if ($message) : ?>
    <h3 class="error">
        <?= $message; ?>
    </h3>
<? endif; ?>
			<?= Form::open('user/setting', array('enctype' => 'multipart/form-data')); ?>	
                
				<?= Form::label('displayname', 'ดิสเพลเนม :'); ?>
				<?= Form::input('displayname', HTML::chars($user->displayname) ); ?>
                <div class="error"><?= Arr::get($errors, 'displayname'); ?></div>
                
				<label>รหัสผู้ใช้ (อีเมล์) :</label><p><?= HTML::chars($user->email) ?></p>
                
				<?= Form::label('email', 'เปลี่ยนรหัสผู้ใช้ใหม่ (อีเมล์) :'); ?>
				<?= Form::input('email', Arr::get($values, 'email')); ?>
                <div class="error"><?= Arr::get($errors, 'email'); ?></div>
                
				<?= Form::label('password', 'รหัสผ่านเดิม :'); ?>
				<?= Form::password('password'); ?>
                <div class="error"><?= Arr::get($errors, 'password'); ?></div>
                
				<?= Form::label('newpassword', 'รหัสผ่านใหม่ :'); ?>
				<?= Form::password('newpassword'); ?>
                <div class="error"><?= Arr::get($errors, 'newpassword'); ?></div>
                
				<?= Form::label('newpasswordconfirm', 'ยืนยันรหัสผ่านใหม่อีกครั้ง :'); ?>
				<?= Form::password('newpasswordconfirm'); ?>
                <div class="error"><?= Arr::get($errors, 'newpasswordconfirm'); ?></div>



				<label></label><input type="submit" value="บันทึกการเปลี่ยนแปลง">
			<?= Form::close(); ?>
			
		</div>
		
		</div>
	
  </div>
  
 