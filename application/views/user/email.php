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
			<div class="title body">เปลี่ยนอีเมล์</div>
			<div class="title right"></div>
			
			<div style="clear:both"></div>
<? if ($message) : ?>
    <h3 class="error">
        <?= __($message); ?>
    </h3>
<? endif; ?>
			<?= Form::open('user/changeemail', array('enctype' => 'multipart/form-data')); ?>	
                <?= Form::label('email', 'อีเมลเดิม :'); ?>
				<?= Form::input('email'); ?>
                <div class="error"><?= __(Arr::get($errors, 'email')); ?></div>
                            
				<?= Form::label('newemail', 'อีเมลใหม่ :'); ?>
				<?= Form::input('newemail'); ?>
                <div class="error"><?= __(Arr::get($errors, 'newemail')); ?></div>
                
				<?= Form::label('password', 'รหัสผ่าน :'); ?>
				<?= Form::password('password'); ?>
                <div class="error"><?= __(Arr::get($errors, 'password')); ?></div>
                

				<label></label><input type="submit" value="บันทึกการเปลี่ยนแปลง">
			<?= Form::close(); ?>
			
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
		
    </div>

</div>
  
 