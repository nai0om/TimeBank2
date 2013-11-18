
<div id="volunteerSignup" class="popup big">
  <div id="main" role="main">
		
		<div id="content">
			<h2>สมัครสมาชิก และ เปิดบัญชีฝากเวลา (สำหรับอาสาสมัคร)</h2>
            <?= Form::open('user/create',array('style'=>'margin-top:20px;display:inline;')); ?>
				<div id="leftSide">
					<h3 style="color:#0099cc;">ชื่อบัญชีผู้ใช้</h3>
                  
					<p>
                        <label>ชื่อที่ใช้แสดง   
						(Display Name)*</label>
                        <?= Form::input('displayname', HTML::chars(Arr::get($_POST, 'displayname'))); ?>
                  <div class="error"><?= __(Arr::get($errors, 'displayname')); ?></div>
                    </p>
					<p>
                    	<label>ชื่อผู้ใช้ (อีเมล) *</label>
                       <?= Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?>
                  <div class="error" style="margin:0px"><?= __(Arr::get($errors, 'email')); ?></div>
                  <div class="error" id="thai-email-error" style="margin:0px; display:none"></div>
                  <div class="error" id="caps-email-error" style="margin:0px; display:none"></div>
                    </p>
					<p><label>รหัสผ่าน *</label>
                       <?= Form::password('password', HTML::chars(Arr::get($_POST, 'password'))); ?>
                  <div class="error" style="margin:0px"><?= __(Arr::get($errors, 'password')); ?></div>
                  <div class="error" id="thai-password-error" style="margin:0px; display:none"></div>
                  <div class="error" id="caps-password-error" style="margin:0px; display:none"></div>
                    </p>
					<p><label>ยืนยันรหัสผ่าน *</label>
                       <?= Form::password('password_confirm', HTML::chars(Arr::get($_POST, 'password_confirm'))); ?>
                  <div class="error"><?= __(Arr::get($errors, 'password_confirm')); ?></div>
                    </p>
					
				</div>
		  <div id="rightSide">
					<h3 style="color:#0099cc;">ฝากเวลาที่คุณตั้งใจจะแบ่งปัน*</h3>
					<div id="left"><?= Form::input('hour', HTML::chars(Arr::get($_POST, 'hour')),  array('style'=>'color:#0099cc;font-size: 70pt;width: 240px;margin: 20 0px;')); ?>
                  <span style="color:#0099CC;font-size:28px;"> ชั่วโมง</span></div><div class="error left"><?= __(Arr::get($errors, 'hour')); ?></div>
				   <p><label></label></p>
				   <p>ฝากเวลาได้สูงสุด 100 ชั่วโมง และสามารถฝากเพิ่มได้</p> 
				   <p><b>เวลามากน้อยไม่สำคัญเท่ากับความตั้งใจแบ่งปันเวลาเพื่อทำจิตอาสาของพวกเรานะครับ</b></p>
					<div id="right">
						<!--div id="details">
						<p>
							คิดไม่ออก<br>
							คุณอาจลองใช้<br>
							ตัวช่วยคำนวณ<br>
							<span style="text-decoration:underline">ที่นี่</span>
						</p>
						</div -->
					</div>
					
				</div>

					<p>&nbsp; </p>
					<p><div style=" float:left; width:600px;">
					  <?= Form::checkbox('acceptterm', 1, false); ?> 
					  ข้าพเจ้ายินยอมตาม <?= HTML::anchor('welcome/term', 'เงื่อนไขและข้อตกลง', array('target' => '_blank')); ?> ของเว็บไซต์</p>
                      	<div class="error left">
                    		<?= __(Arr::path($errors, 'acceptterm')); ?>
                		</div>  
                     <?= Form::hidden('back_url', Arr::get($_GET, 'back_url')) ?>
					<p><?= Form::submit('create', 'สมัครสมาชิก'); ?></p>
                   
                </div>

			<?= Form::close(); ?>
		</div>
		
		<div align="center">
		<h2>ต้องการความช่วยเหลือ? ลองดูคลิปแนะนำการใช้งานเบื้องต้นกันทางนี้กันเลย (แค่ 3 นาทีกว่าๆ เอง)</h2>
		<iframe width="500" height="315" src="http://www.youtube.com/embed/W3dbESdNf54" frameborder="10" allowfullscreen></iframe>
		</div>
		
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
 </div>
 