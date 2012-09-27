<div id="data" class="popup">
  <div id="main" role="main">

		<div id="content">
				<div id="warn">
			<h2>ยืนยันการใช้เวลา</h2><br>
			<p>คุณเข้าร่วมงานอาสาครบชั่วโมงหรือไม่?</p>
			 <?= Form::open('user/approvetime/'.$event->id); ?>
				<p><input type="radio" name="time" checked="checked" value="<?= $event->time_cost ?>" style="width:auto"> ครบชั่วโมง</p>
				<p><input type="radio" name="time" value="text" style="width:auto"> ไม่ครบชั่วโมง (โปรดระบุ <a style="color:#F00">ต้องไม่เกิน <?= $event->time_cost ?> ชั่วโมง</a>) 
                	<input type="text" name="text" style="width:100px;"> ชั่วโมง</p>
				<div><input type="submit" value="บันทึก"></div>
			<?= Form::close(); ?>

		</div>
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
		
  </div>
 </div>
 