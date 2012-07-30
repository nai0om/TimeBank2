<div id="member" class="warn">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>การแจ้งเดือน</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
			<?php include Kohana::find_file('views', 'shared/usermenu') ?>
		</div>
		
		
		<div id="main_right">
		
		<div class="title left"></div>
		<div class="title body">แจ้งเตือนงานอาสา</div>
		<div class="title right"></div>
		<div class="title left"></div>
		<div class="title body past">ข้อความเตือน (5)</div>
		<div class="title right"></div>
		<div style="clear:both"></div>
		
		<form>
			<div class="headline">แจ้งเตือนงานอาสาทางอีเมล</div><div class="line"></div>
			<p><input type="checkbox"> เมื่อมีงานอาสาที่เหมาะกับโปรไพล์ของฉัน</p>
			<p><input type="radio"> ให้แจ้งเตือนทันที</p>
			<p><input type="radio"> ให้แจ้งเตือน <select><option>วันละ 1 ครั้ง</option></select></p>
			<p><input type="checkbox"> เมื่อมีงานอาสาที่สมัครไป ตอบรับ (Approve) ให้ฉันเข้าร่วม</p>
			<p><input type="checkbox"> เมื่อมีงานอาสาที่สมัครไป ใกล้ถึงวันจัดกิจกรรม</p>
			<p><input type="checkbox"> เมื่อมีงานอาสาที่สมัครไป ประกาศรายชื่ออาสาสมัคร และฉันได้ไป หรือไม่ได้ไป</p>
			<p><input type="checkbox"> หลังจากได้ไปร่วมงานอาสาที่สมัครไปเรียบร้อยแล้ว และงานอาสานั้นนำภาพกิจกรรมขึ้นหรือ เขียนข้อความกล่าวขอบคุณอาสาสมัครที่ไปร่วมงาน ให้ฉันสามารถเข้าไปเขียน Comment ภาพงานกิจกรรมได้</p>
			
			<div class="headline">แจ้งเตือนงานอาสาทางมือถือ</div><div class="line"></div>
			<p><input type="checkbox"> เมื่อมีงานอาสาที่สมัครไป ตอบรับ (Approve) ให้ฉันเข้าร่วม</p>
			<p><input type="checkbox"> เมื่อมีงานอาสาที่สมัครไป ใกล้ถึงวันจัดกิจกรรม</p>
			<p><input type="checkbox"> รับข่าวสารพิเศษจากทางเว็บไซต์</p>
			<p><input type="submit" value="บันทึกการเปลี่ยนแปลง"></p>
		</form>
		
		</div>
		</div>
	
  </div>
  
 