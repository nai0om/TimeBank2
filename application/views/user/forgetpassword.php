<div id="data" class="popup">
  <div id="main" role="main">
		
		<div id="content">
			<h2>ลืมรหัสผ่าน</h2>
			<h3><span style="color:#666">กรุณาใส่อีเมลที่คุณเคยสมัครไว้กับ JitArsaBank.com <br/> ทางเราจะทำการส่งรหัสผ่านใหม่ไปให้เพื่อใช้เข้าสู่ระบบ</span><br>
				<?= Form::open('user/forgetpassword', array('style' => 'margin-top:20px;')); ?>
					<label style="color:#666">อีเมล * </label>
                    <?= Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?>
                    <input type="submit" value="ส่งข้อมูล">
				<?= Form::close(); ?>
                <font color="red"><?= __($message) ?></font>
                <div class="error" id="thai-email-error" style="margin:0px; display:none"></div>
                 <div class="error" id="caps-email-error" style="margin:0px; display:none"></div>
			</h3>
		</div>
		
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
 </div>
 