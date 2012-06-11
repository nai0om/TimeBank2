<div id="org" class="profile">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>หน้าหลักสมาชิกองค์กร</li>
			<li>หน้าหลัก</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
			<ul>
				<li><?= HTML::anchor('organization/index', 'หน้าหลัก'); ?></li>
				<li class="current"><?= HTML::anchor('organization/profile', 'โปร์ไพล์'); ?></li>
				<li><?= HTML::anchor('organization/event', 'งานอาสาของฉัน'); ?></li>
				<li><?= HTML::anchor('organization/notification', 'การแจ้งเตือน'); ?></li>
			</ul>
		</div>
		
		
		<div id="main_right">
			
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">รูปโลโก้และภาพอื่นๆ</div>
			<div class="title right"></div>
			<p style="font-family:tahoma;color:#8B4C03;font-size:13px;font-weight:bold;">ภาพที่เกี่ยวข้องไม่เกิน 5 ภาพ</p>
			<div style="clear:both"></div>

			<div id="photo">
				<img src="img/org_profile_logo.png" style="float:left">
				<img src="img/org_profile_logo.png_small.png">
				<img src="img/org_profile_logo.png_small.png">
				<img src="img/org_profile_logo.png_small.png">
				<img src="img/org_profile_logo.png_small.png">
				<img src="img/org_profile_logo.png_small.png">
			</div>
			
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">แก้ไขข้อมูลองค์กร</div>
			<div class="title right"></div>
			<div style="clear:both"></div>

			<?= Form::open('organization/profile/', array('enctype' => 'multipart/form-data')); ?>
				<p><label>ชื่อองค์กร</label></p>
				<p>
					<?= Form::input('name', HTML::chars($organization->name)); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'name'); ?>
                    </div>
                </p>
				<p><label>วัตถุประสงค์ / เป้าหมายองค์กร</label></p>
				<p>
					<?= Form::input('objective', HTML::chars($organization->objective), array('class'=>'long')); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'objective'); ?>
                    </div>
                </p>
				<p><label>ลักษณะกิจกรรมขององค์กร</label></p>
				<p>
					<?= Form::input('activity', HTML::chars($organization->activity), array('class'=>'long')); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'activity'); ?>
                    </div>
                </p>
				<div class="one">
					<p><label>ที่อยู่</label></p>
					<p>
						<?= Form::input('address', HTML::chars($organization->address)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'address'); ?>
                        </div>
                    </p>
					<p><label>จังหวัด</label></p>
					<p>
						<?= Form::input('province', HTML::chars($organization->province)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'province'); ?>
                        </div>
                    </p>
					<p><label>เบอร์โทรศัพท์บ้าน</label></p>
					<p>
						<?= Form::input('homephone', HTML::chars($organization->homephone)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'homephone'); ?>
                        </div>
                    </p>
					<p><label>อีเมล์</label></p>
					<p><input type="text"></p>
				</div>
				<div class="one">
					<p><label>เขต</label></p>
					<p>
						<?= Form::input('district', HTML::chars($organization->district)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'district'); ?>
                        </div>
                    </p>
					<p><label>รหัสไปรษณีย์</label></p>
					<p>
						<?= Form::input('postcode', HTML::chars($organization->postcode)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'postcode'); ?>
                        </div>
                    </p>
					<p><label>เบอร์โทรสาร</label></p>
					<p>
						<?= Form::input('fax', HTML::chars($organization->fax)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'fax'); ?>
                        </div>
                    </p>
					<p><label>ติดต่อคุณ</label></p>
					<p>
						<?= Form::input('contactperson', HTML::chars($organization->homephone)); ?>
                        <div class="error">
                            <?= Arr::get($errors, 'homephone'); ?>
                        </div>
                    </p>
				</div>
				<p><label>website URL</label></p>
                <p>
                    <?= Form::input('website', HTML::chars($organization->website)); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'website'); ?>
                    </div>
                </p>
				<p><label>Facebook</label></p>
                <p>
                    <?= Form::input('facebook', HTML::chars($organization->facebook)); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'facebook'); ?>
                    </div>
                </p>
				<p><label>Twitter</label></p>
                <p>
                    <?= Form::input('twitter', HTML::chars($organization->twitter)); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'twitter'); ?>
                    </div>
                </p>
				<?= Form::submit('edit', 'บันทึกการเปลี่ยนแปลง'); ?>
                <div class="line"></div>
                <?= Form::close(); ?>		
		</div>
	
  </div>
</div>

<?= Form::label('logo', 'Company logo'); ?>
<img src="<?= url::base().'media/upload/'.$organization->logo; ?>" />
<?= Form::file('logo') ?>
<div class="error">
    <?= Arr::get($errors, 'logo'); ?>
</div>