<div id="volunteerOrgSignup" class="popup big">
  <div id="main" role="main">
		
		<div id="content">
			<h2>กรุณาให้ข้อมูลเกี่ยวกับกลุ่ม / องค์กรอาสาของท่าน</h2>
			<?= Form::open('organization/create',array('style'=>'margin-top:20px')); ?>
                <div class="error main">
                    <?= $message ?>
                </div>
				<h3>ชื่อบัญชีผู้ใช้</h3>
				<p>
                	<label>ชื่อผู้ใช้ (อีเมล) *</label>
                    <?= Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'email'); ?>
                    </div>
                    <div class="error" id="thai-email-error" style="margin:0px; display:none"></div>
                    <div class="error" id="caps-email-error" style="margin:0px; display:none"></div>
                </p>
				<p>
                	<label>รหัสผ่าน *</label>
                     <?= Form::password('password'); ?>
                    <div class="error">
                        <?= __(Arr::path($errors, 'password')); ?>
                    </div>
                    <div class="error" id="thai-password-error" style="margin:0px; display:none"></div>
                    <div class="error" id="caps-password-error" style="margin:0px; display:none"></div>
                </p>
				<p>
                	<label>ยืนยันรหัสผ่าน *</label>
                    <?= Form::password('password_confirm'); ?>
                    <div class="error">
                        <?= __(Arr::path($errors, 'password_confirm')); ?>
                    </div>
                </p>
				<div class="line"></div>
				<h3>ข้อมูลกลุ่ม / องค์กร</h3>
				<p><label>ชื่อองค์กร / หน่วยงาน *</label>
					<?= Form::input('name', HTML::chars($organization->name)); ?>
                    <div class="error">
                        <?= __(Arr::get($errors, 'name')); ?>
                    </div>
                </p>
				<p><label>วัตถุประสงค์ / เป้าหมายองค์กร *</label>
					<?= Form::textarea('objective', HTML::chars($organization->objective), array('class'=>'long', 'style'=>'height:58px;')); ?>
                    <div class="error">
                        <?= __(Arr::get($errors, 'objective')); ?>
                    </div>
                </p>
				<p><label>ลักษณะกิจกรรมขององค์กร *</label>
					<?= Form::textarea('activity', HTML::chars($organization->activity), array('class'=>'long', 'style'=>'height:58px;')); ?>
                    <div class="error">
                        <?= __(Arr::get($errors, 'activity')); ?>
                    </div>
                </p>
				<p><label>ที่อยู่ *</label>
						<?= Form::input('address', HTML::chars($organization->address)); ?>
                        <div class="error">
                            <?= __(Arr::get($errors, 'address')); ?>
                        </div>
                </p>
                <p><label>เขต / อำเภอ *</label>
						<?= Form::input('district', HTML::chars($organization->district)); ?>
                        <div class="error">
                            <?= __(Arr::get($errors, 'district')); ?>
                        </div>
                </p>
				<p><label>จังหวัด *</label>
						<?= Form::input('province', HTML::chars($organization->province)); ?>
                        <div class="error">
                            <?= __(Arr::get($errors, 'province')); ?>
                        </div>
                </p>
				<p><label>รหัสไปรษณีย์ *</label>
						<?= Form::input('postcode', HTML::chars($organization->postcode)); ?>
                        <div class="error">
                            <?= __(Arr::get($errors, 'postcode')); ?>
                        </div>
                </p>
				<p><label>โทร.สำนักงาน</label>
						<?= Form::input('homephone', HTML::chars($organization->homephone)); ?>
                        <div class="error">
                            <?= __(Arr::get($errors, 'homephone')); ?>
                        </div>
                </p>
                <p><label>มือถือ</label>
						<?= Form::input('mobilephone', HTML::chars($organization->mobilephone)); ?>
                        <div class="error">
                            <?= __(Arr::get($errors, 'mobilephone')); ?>
                        </div>
                </p>
				<p><label>โทรสาร</label>
						<?= Form::input('fax', HTML::chars($organization->fax)); ?>
                        <div class="error">
                            <?= __(Arr::get($errors, 'fax')); ?>
                        </div>
                </p>
				<p><label>ชื่อผู้ติดต่อ *</label>
						<?= Form::input('contactperson', HTML::chars($organization->contactperson)); ?>
                        <div class="error">
                            <?= __(Arr::get($errors, 'contactperson')); ?>
                        </div>
                </p>
				<p><label>เว็บไซต์</label>
                    <?= Form::input('website', HTML::chars($organization->website)); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'website'); ?>
                    </div>
                </p>
				<p><label>เฟสบุ๊ค (เช่น www.facebook.com/JitArsaBank)</label>
                    <?= Form::input('facebook', HTML::chars($organization->facebook)); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'facebook'); ?>
                    </div>
                </p>
				<p><label>ทวิตเตอร์ (เช่น @JitArsaBank)</label>
                    <?= Form::input('twitter', HTML::chars($organization->twitter)); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'twitter'); ?>
                    </div>      
                </p>
				<p align="center">
				<?= Form::checkbox('acceptterm', 1, false ); ?> ข้าพเจ้ายินยอมตาม <?= HTML::anchor('welcome/term', 'เงื่อนไขและข้อตกลง', array('target' => '_blank')); ?> ของเว็บไซต์
                	<div class="error">
                       <?= Arr::path($errors, 'acceptterm'); ?>
                    </div>
                </p>
				<p align="center"><?= Form::submit('create', 'สมัครสมาชิก'); ?></p>
			<?= Form::close(); ?>
		</div>
		
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>