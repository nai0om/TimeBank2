<div id="tb_browse_new_thankyou">

  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>สร้างงานอาสาใหม่</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		
		<div id="content">
        
			<h2>ขณะนี้งานอาสาของคุณได้ถูกสร้างเรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ <?= HTML::anchor('event/view/'.$id, 'ที่นี่'); ?></h2>
			<h3>หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งไปยังกล่องแจ้งเตือนในหน้าหลักสมาชิกขององค์กร  และ/หรือ อีเมลที่องค์กร <span style="color:#a90402;text-decoration:underline;">และอย่าลืม</span> เข้ามาตอบรับ (Approve) อาสาสมัคร  ตามจำนวนเปิดรับสมัครด้วยนะครับ</h3>
		</div>
		
  </div>
  
</div>