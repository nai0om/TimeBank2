<div id="data" class="popup">
  <div id="main" role="main">

		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		
		<div id="content">
			<h2>Sign up</h2>

				<h3>สมัครเป็นสมาชิกกับ Jitarsabank.org<br><br>
				<?= HTML::anchor('user/create', 'สมัครสมาชิกอาสา', array('class'=>'button long170')); ?> <span style="color:#0099cc">หรือ</span>
                <?= HTML::anchor('organization/create', 'สมัครสมาชิกองค์กร', array('class'=>'button long170')); ?></h3>

		</div>
		
  </div>
 </div>
 