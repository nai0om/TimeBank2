<div id="main_right">
		
		<div class="title left"></div>
        <div style="height:auto;overflow:auto">
            <div class="title body">รูปภาพของคุณ</div>
            <div class="title right"></div>
            <div style="clear:both"></div>
            
            <? if ($user->profile_image) : ?>
                <p><img style="max-width:500px; max-height:300xp" src="<?= url::base().'media/upload/volunteers/'.$user->profile_image; ?>" /></p>
             <? else :?>
                <p><img src="<?= url::base().'media/img/member.png'; ?>" /></p>
             <? endif ?>
            <?= Form::file('profile_image') ?><br />
            <label style="color:#F00; width:400px;float:left; outline:20px none" >ขนาดภาพไม่เกิน 1.5Mb (ประเภทไฟล์ gif, jpg, png หรือ jpeg)</label>
            <div class="error"><?= Arr::get($errors, 'profile_image'); ?></div>
        </div>
		<div class="title left"></div>
		<div class="title body">แก้ไขข้อมูลส่วนตัว</div>
		<div class="title right"></div>

		<div style="clear:both"></div>
        <? if ($message) : ?>
        <h3 class="message">
            <?= $message; ?>
        </h3>
            <? endif; ?>

			<div class="left">
            
				<?= Form::label('first_name', 'ชื่อ'); ?>
				<?= Form::input('first_name', HTML::chars($user->first_name)); ?>
                <div class="error"><?= Arr::get($errors, 'first_name'); ?></div>
                
				<?= Form::label('nickname', 'ชื่อเล่น'); ?>
				<?= Form::input('nickname', HTML::chars($user->nickname)); ?>
                <div class="error"><?= Arr::get($errors, 'nickname'); ?></div>
				
				<?= Form::label('birthday', 'วันเกิด (วัน/เดือน/ปี)'); ?>
                <?  $dateArray = phphelp::getDateAsArray($user->birthday); ?>
                <?= Form::select('day', timebankhelper::getDaysNumber(), $dateArray[2], array ('class' => 'full')); ?>
                <? $thai_month_arr = Kohana::$config->load('timebank')->get('thai_month_arr'); ?>
                <?= Form::select('month', $thai_month_arr, $dateArray[1], array ('class' => 'full'));	?>
                <?= Form::select('year', timebankhelper::getYearsNumber(), $dateArray[0] == 0 ? 2525 : $dateArray[0] + 543, array ('class' => 'full'));	?>
                <div class="error"><?= Arr::get($errors, 'birthday'); ?></div>
                
				<?= Form::label('sex', 'เพศ'); ?>
				<?= Form::radio('sex', 'm', ($user->sex == 'm')); ?> ชาย
                <?= Form::radio('sex', 'f', ($user->sex == 'f')); ?> หญิง
                <div class="error"><?= Arr::get($errors, 'sex'); ?></div>
                
				<?= Form::label('website', 'เว็บไซต์'); ?>
				<?= Form::input('website', HTML::chars($user->website)); ?>
				
			</div>
			<div class="right">
            
				<?= Form::label('last_name', 'นามสกุล'); ?>
				<?= Form::input('last_name', HTML::chars($user->last_name)); ?>
                <div class="error"><?= Arr::get($errors, 'last_name'); ?></div>
            
				<?= Form::label('phone', 'เบอร์โทรติดต่อ เช่น 0800001111'); ?>
				<?= Form::input('phone', HTML::chars($user->phone)); ?>
                <div class="error"><?= Arr::get($errors, 'phone'); ?></div>
                
				<?= Form::label('address', 'ที่อยู่'); ?>
				<?= Form::input('address', HTML::chars($user->address)); ?>
                <?= Form::label('location', 'เขต/อำเภอ'); ?>
				<?= Form::input('location', HTML::chars($user->location)); ?>
                <?= Form::label('province', 'จังหวัด'); ?>
				 <?php
				$provices = Kohana::$config->load('timebank')->get('provices'); 
				echo Form::select('province', $provices, $user->province, array ('class' => 'full'));
				?>
                <div class="error"><?= Arr::get($errors, 'address'); ?></div>
                
                
			</div>
	