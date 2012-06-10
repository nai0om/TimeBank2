
<div id="data" class="popup big">
  <div id="main" role="main">

		<ul><li>สมัครสมาชิก</li><li>เข้าสู่ระบบ</li></ul>
		
		<div id="content">
			<h2>Sign In</h2>
			<?= Form::open('user/login', array('style' => 'margin-top:20px;')); ?>
                <p><label>รหัสผู้ใช้ (อีเมล์)  * : </label><?= Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?></p>
				<p><label>รหัสผ่าน * : </label><?= Form::password('password'); ?></p>
				<p><label></label><?= Form::checkbox('remember'); ?> บันทึกไว้ในเครื่อง</p>
                <div class="error"><?= $message; ?></div>
				<p><label></label><input type="submit" value="เข้าสู่ระบบ"> <input type="submit" value="ลืมรหัสผ่าน"></p>
			<?= Form::close(); ?>
			<div class="line"></div>
			<div id="sub">
			<h3>สร้างบัญชีผู้ใช้</h3>
			<p>สมัครเป็นสมาชิกกับ Jitarsabank.org</p>
			<p><?= HTML::anchor('user/signup', 'สมัครสมาชิก',array('class'=>'button')); ?></p>
			</div>

		</div>
		
  </div>
 </div>
 