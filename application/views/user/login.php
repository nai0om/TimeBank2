<div id="data" class="popup big">
  <div id="main" role="main">

		
		<div id="content">
			<h2>เข้าสู่ระบบ / Sign In</h2>
			<?= Form::open('user/login?back_url='.urlencode(Arr::get($_GET, 'back_url')), array('style' => 'margin-top:20px;')); ?>
                <p><label>ชื่อบัญชีผู้ใช้ (อีเมล)  * : </label><?= Form::input('email', $data["user"]); ?></p>
				<p><label>รหัสผ่าน * : </label><?= Form::password('password', $data["pass"]); ?></p>
				<p><label></label><?= Form::checkbox('remember'); ?> จำอีเมลและรหัสผ่าน</p>
                <div class="error"><?= __($message); ?></div>
                <div class="error" id="thai-error" style="display:none"></div>
                <div class="error" id="caps-error" style="display:none"></div>
                <input id="back_url" name="back_url" type="hidden" value="<?= Arr::get($_GET, 'back_url') ?>" />
				<p><label></label><input type="submit" value="เข้าสู่ระบบ">
                <input onclick="window.location='<?=url::base().'user/forgetpassword' ?>'; return false" type="submit" value="ลืมรหัสผ่าน">
                </p>
			<?= Form::close(); ?>
			<div class="line"></div>
			<div id="sub">
			<h3><b>สมัครเป็นสมาชิกธนาคารจิตอาสา</b></h3>
			<p></p>
			<p><?= HTML::anchor('user/signup?back_url='.urlencode(Arr::get($_GET, 'back_url')), 'สมัครสมาชิก',array('class'=>'button')); ?></p>
			</div>

		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
<script src="<?= url::base(); ?>media/js/englishcheck-for-input.js"></script>
  </div>
</div>
 