<div id="data" class="popup big">
  <div id="main" role="main">

		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		
		<div id="content">
			<h2>Sign In</h2>
			<?= Form::open('user/login', array('style' => 'margin-top:20px;')); ?>
                <p><label>ชื่อบัญชีผู้ใช้ (Email)  * : </label><?= Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?></p>
				<p><label>รหัสผ่าน * : </label><?= Form::password('password'); ?></p>
				<p><label></label><?= Form::checkbox('remember'); ?> จำอีเมลและรหัสผ่าน</p>
                <div class="error"><?= $message; ?></div>
				<p><label></label><input type="submit" value="เข้าสู่ระบบ">
                <input onclick="window.location='<?=url::base().'user/forgetpassword' ?>'; return false" type="submit" value="ลืมรหัสผ่าน">
                </p>
			<?= Form::close(); ?>
			<div class="line"></div>
			<div id="sub">
			<h3>สมัครเป็นสมาชิกอาสา</h3>
			<p></p>
			<p><?= HTML::anchor('user/signup', 'สมัครสมาชิก',array('class'=>'button')); ?></p>
			</div>

		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>
 