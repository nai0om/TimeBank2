<div id="member" class="deposit">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ฝากเวลาของฉัน</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
			<?php include Kohana::find_file('views', 'shared/usermenu') ?>
		</div>
		
		
		<div id="main_right">
		
		<div class="title left"></div>
		<div class="title body">ฝากเวลาตั้งใจอาสา</div>
		<div class="title right"></div>
		<div style="clear:both"></div>
		
			<div id="timeSave">
				<?= Form::open('user/addhour', array('enctype' => 'multipart/form-data')); ?>	
					<label>ต้องการฝากชั่วโมงเพิ่มเป็นเวลา</label>
					<input type="text" name="hour" style="color:#0099cc;font-size: 70pt;width: 240px;"><span style="color:#0099CC;font-size:28px;"> ชั่วโมง</span>
               		<div class="error"><?= $message ?></div>
					<input type="submit" value="บันทึกการเปลี่ยนแปลง" style="margin: 10px 0;">
				<?= Form::close(); ?>
			</div>
			<div id="summary">
				<!--div id="details">
					<p>
						คิดไม่ออก<br>
						ใช้ตัวช่วยคำนวณ<br>
						ตามวันที่คุณว่าง<br>
						<span style="text-decoration:underline">ที่นี่</span>
					</p>
				</div-->
				<div class="sum"><div class="sum_hours"><?= $time ?> ชั่วโมง</div>
				<div class="sub_title">เวลาตั้งใจอาสา</div></div>
				<div></div>
				<div class="sum"><div class="sum_hours"><?= $work_time ?> ชั่วโมง</div>
				<div class="sub_title">เวลาที่ได้ทำอาสาไปแล้ว</div></div>
                
			</div>	
            <div style="clear:both"></div>

 </div>		
<?php include Kohana::find_file('views', 'shared/footer') ?>

 
</div>