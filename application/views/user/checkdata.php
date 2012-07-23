<div id="data" class="popup">
    <div id="content">
            <h2>Before Join Please update your information</h2>
			<?= Form::open('user/checkdata/'.$eventid, array ('style' => 'margin-top:20px;')); ?>
            <p>
               <label>ชื่อเล่น : </label>
                <?= Form::input('nickname', $user->nickname); ?>
            </p> 
            <p>
           		<label>ชื่อ : </label>
	            <?= Form::input('first_name', $user->first_name); ?>
            </p>
            <p>
            	<label>นามสกุล : </label>
	            <?= Form::input('last_name', $user->last_name); ?>
            </p>
            <p><label>อีเมล์ : </label><span><?= $user->email ?></span></p>  
            <p>
                <label>เบอร์โทรศัพท์ : </label>
                <?= Form::input('phone', $user->phone); ?>
                <div class="error"><?= Arr::get($errors, 'phone'); ?></div>
            </p>
            <?= Form::submit(NULL, 'อัพเดทข้อมูล'); ?> 
            <?= Form::close(); ?>
    </div>
</div>