<div id="tb_browse_new_thankyou">

  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>สร้างงานอาสาใหม่</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		
		<div id="content">
			<h2>ขณะนี้งานอาสาของคุณได้ขึ้นเว็บไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคูนได้ <?= HTML::anchor('event/view/'.$id, 'ที่นี่'); ?></h2>
			<h3>หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ <span style="color:#a90402;text-decoration:underline;">และอย่าลืม</span> เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย</h3>
		</div>
		
  </div>
  
</div>