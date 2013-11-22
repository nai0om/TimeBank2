<div id="tb_browse_new_thankyou">

  <div id="main" role="main">
		<div id="sitemap">
			<li><?= HTML::anchor('welcome/home', 'หน้าแรก') ?></li>
			<li><?= HTML::anchor('welcome/timebank', 'ธนาคารจิตอาสา') ?></li>
			<li><?= HTML::anchor('event/created','สร้างงานอาสาใหม่') ?></li>
		</div>
		
		<div id="content">
        
			<h2 style="font-size:23px;">ขณะนี้งานอาสาของคุณได้ถูกสร้างเรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ <?= HTML::anchor('event/view/'.$id, 'ที่นี่'); ?></h2>
			<h3 style="font-size:21px;">หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งไปยังกล่องแจ้งเตือนในหน้าหลักสมาชิกขององค์กร  และ อีเมล (หากท่านเปิดการแจ้งเตืนทางอีเมลไว้) <span style="color:#a90402;text-decoration:underline;">และอย่าลืม</span> เข้ามาตอบรับ (Approve) อาสาสมัคร  ตามจำนวนเปิดรับสมัครด้วยนะครับ</h3>
		</div>
		
  </div>
  
</div>