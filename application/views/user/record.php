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
		<div class="title body">ชั่วโมงอาสาของคุณที่ให้ไว้</div>
		<div class="title right"></div>
		<div style="clear:both"></div>
		
			<div id="timeSave">
				<?= Form::open('user/addhour', array('enctype' => 'multipart/form-data')); ?>	
					<label>ต้องการฝากชั่วโมงเพิ่มเป็นเวลา</label>
				<input type="text" name="hour" style="width:130px;height:40px;"><span style="color:#0099CC;font-size:28px;"> ชม.</span>
                <div class="error"><?= Arr::get($errors, 'hour'); ?></div>
					<input type="submit" value="บันทึกการเปลี่ยนแปลง">
				<?= Form::close(); ?>
			</div>
			<div id="summary">
				<div id="details">
					<p>
						คิดไม่ออก<br>
						ใช้ตัวช่วยคำนวณ<br>
						ตามวันที่คุณว่าง<br>
						<span style="text-decoration:underline">ที่นี่</span>
					</p>
				</div>
				<div class="sum"><div class="sum_hours"><?= $total_hour ?> ชั่วโมง</div>
				<div class="sub_title">เวลาตั้งใจอาสา</div></div>
				<div></div>
				<div class="sum"><div class="sum_hours">16 ชั่วโมง</div>
				<div class="sub_title">เวลาทำอาสา</div></div>
                
			</div>	
            <div style="clear:both"></div>
<? if (count($records) > 0) :?>
 <table border="1">
  <tr>
	<th>status</th>
	<th>hour</th>
	<th>datetime</th>
  </tr>



<?php foreach ($records as $record):?>
	<tr>
	<td><?= $record->status ?></td>
	<td><?= $record->hour ?></td>
	<td><?= $record->timestamp ?></td>
	</tr>
<? endforeach ?>
</table>
Total hour = <?= $total_hour ?>
<? endif ?>
		</div>

		</div>

  </div>
  </div>