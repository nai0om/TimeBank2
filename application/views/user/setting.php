<div id="member" class="setting">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ตั้งค่าบัญชีผู้ใช้</li>
		</div>

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
                
                <label>อีเมลผู้ใช้ :</label><p><?= HTML::chars($user->email) ?></p>
				<?= Form::label('displayname', 'ชื่อที่ใช้แสดง (Display Name) :'); ?>
				<?= Form::input('displayname', HTML::chars($user->displayname) ); ?>
                <div class="error"><?= Arr::get($errors, 'displayname'); ?></div>
				<label></label><input type="submit" value="บันทึกการเปลี่ยนแปลง">
			<?= Form::close(); ?>
              <h2><?= HTML::anchor('user/changeemail', 'เปลี่ยนอีเมลผู้ใช้'); ?></h2>
            <h2><?= HTML::anchor('user/changepassword', 'เปลี่ยนรหัสผ่าน'); ?></h2>
			
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
	</div>	
</div>
  
 