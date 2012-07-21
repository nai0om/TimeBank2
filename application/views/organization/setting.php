<div id="member" class="setting">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ตั้งค่าบัญชีผู้ใช้</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
			<?php include Kohana::find_file('views', 'shared/usermenu') ?>
		</div>
		
		
		<div id="main_right">
			
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">ตั้งค่าบัญชีผู้ใช้</div>
			<div class="title right"></div>
			
			<div style="clear:both"></div>
			<h2>อีเมล์ผู้ใช้ :<?= HTML::chars($org_user->email) ?></h2>
            
            <h2><?= HTML::anchor('organization/changepassword', 'เปลี่ยนรหัสผ่าน'); ?></h2>
			
		</div>
	</div>	
</div>
  
 