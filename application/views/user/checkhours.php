<div id="data" class="popup">
  <div id="main" role="main">

		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		<div id="content">
				<div id="warn">
			<h2>Check hour(s)</h2>
			 <?= Form::open('user/approvetime/'.$event->id); ?>
				<p><input type="radio" name="time" value="<?= $event->time_cost ?>" style="width:auto"> ครบชั่วโมง</p>
				<p><input type="radio" name="time" value="text" style="width:auto"> ไม่ครบชั่วโมง (โปรดระบุ) 
                	<input type="text" name="text"> ชั่วโมง</p>
				<div><input type="submit" value="บันทึก"></div>
			<?= Form::close(); ?>

		</div>
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
		
  </div>
 </div>
 