
<div id="volunteerSignup" class="popup big">
  <div id="main" role="main">

		<ul><li>สมัครสมาชิก</li><li>เข้าสู่ระบบ</li></ul>
		
		<div id="content">
			<h2>Volunteer Sign up</h2>
            <?= Form::open('user/create',array('style'=>'margin-top:20px;display:inline;')); ?>
				<div id="leftSide">
					<h3 style="color:#0099cc;">ชื่อบัญชีผู้ใช้</h3>
                <div class="error">
                    <?= Arr::path($errors, 'acceptterm'); ?>
                </div>    
					<p>
                        <label>ชื่อดิสเพล *</label>
                        <?= Form::input('displayname', HTML::chars(Arr::get($_POST, 'displayname'))); ?>
                  <div class="error"><?= Arr::get($errors, 'displayname'); ?></div>
                    </p>
					<p>
                    	<label>ชื่อผู้ใช้ (อีเมล์) *</label>
                       <?= Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?>
                  <div class="error"><?= Arr::get($errors, 'email'); ?></div>
                    </p>
					<p><label>รหัสผ่าน *</label>
                       <?= Form::password('password', HTML::chars(Arr::get($_POST, 'password'))); ?>
                  <div class="error"><?= Arr::get($errors, 'password'); ?></div>
                    </p>
					<p><label>ยืนยันรหัสผ่าน *</label>
                       <?= Form::password('password_confirm', HTML::chars(Arr::get($_POST, 'password_confirm'))); ?>
                  <div class="error"><?= Arr::get($errors, 'password_confirm'); ?></div>
                    </p>
					
				</div>
		  <div id="rightSide">
					<h3 style="color:#0099cc;">ฝากชั่วโมงว่างที่คุณพอใจ</h3>
					<div id="left"><?= Form::input('hour', HTML::chars(Arr::get($_POST, 'hour')),  array('style'=>'width:130px;height:40px;')); ?>
                  <div class="error"><?= Arr::get($errors, 'hour'); ?></div><span style="color:#0099CC;font-size:28px;"> ชม.</span></div>
					<div id="right">
						<div id="details">
						<p>
							คิดไม่ออก<br>
							ใช้ตัวช่วยคำนวณ<br>
							ตามวันที่คุณว่าง<br>
							<span style="text-decoration:underline">ที่นี่</span>
						</p>
						</div>
					</div>
					
				</div>

					<p>&nbsp; </p>
					<p><div style="margin-top:120px;">
					  <?= Form::checkbox('acceptterm', 1, false); ?> 
					  ข้าพเจ้ายินยอมตาม <?= HTML::anchor('welcome/term', 'เงื่อนไขและข้อตกลง'); ?> ของเว็บไซต์</p>
                      
                  
					<p><?= Form::submit('create', 'Sign up'); ?></p></div>

			<?= Form::close(); ?>
		</div>
		
  </div>
 </div>
 