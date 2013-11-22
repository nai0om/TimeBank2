<div id="member" class="setting">
  <div id="main" role="main">
		<div id="sitemap">
			<li><?= HTML::anchor('welcome/home', 'หน้าแรก') ?></li>
			<li><?= HTML::anchor('organization/setting', 'ตั้งค่าบัญชีผู้ใช้') ?></li>
		</div>

		<div style="clear:both"></div>
		<div id="menu_left">
			<ul>
				<li><?= HTML::anchor('organization/index', 'หน้าหลัก'); ?></li>
				<li><?= HTML::anchor('organization/profile', 'แก้ไขข้อมูลองค์กร'); ?></li>
				<li><?= HTML::anchor('organization/event', 'งานอาสา'); ?></li>
				<li><?= HTML::anchor('organization/notification', 'การแจ้งเตือน'); ?></li>
			</ul>
		</div>
		
		
		<div id="main_right">
			
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">ตั้งค่าบัญชีผู้ใช้</div>
			<div class="title right"></div>
			
			<div style="clear:both"></div>
			<h2>อีเมลผู้ใช้ :<?= HTML::chars($org_user->email) ?></h2>
            <h2><?= HTML::anchor('organization/changeemail', 'เปลี่ยนอีเมลผู้ใช้'); ?></h2>
            <h2><?= HTML::anchor('organization/changepassword', 'เปลี่ยนรหัสผ่าน'); ?></h2>
			
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
	</div>	
</div>
  
 