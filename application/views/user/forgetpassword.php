<div id="data" class="popup">
  <div id="main" role="main">

		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		
		<div id="content">
			<h2>Forgot Password</h2>
			<h3><span style="color:#666">กรุณาใส่อีเมล์ที่คุณเคยให้ไว้กับ Jitarsabank.org</span><br>
				<?= Form::open('user/forgetpassword', array('style' => 'margin-top:20px;')); ?>
					<label style="color:#666">อีเมล์ * </label>
                    <?= Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?>
                    <input type="submit" value="ส่งข้อมูล">
				<?= Form::close(); ?>
                <font color="red"><?= $message ?></font>
			</h3>
		</div>
		
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
 </div>
 