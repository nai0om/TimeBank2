<div id="data" class="popup">
    <div id="content" >
            <h2>โปรดให้ข้อมูลของคุณเพิ่มเติม</h2>
			<?= Form::open('user/checkdata/'.$eventid, array ('style' => 'display: table')); ?>

            <p>
           		<label>ชื่อ : </label>
	            <?= Form::input('first_name', $user->first_name); ?>
            </p>
            <p>
            	<label>นามสกุล : </label>
	            <?= Form::input('last_name', $user->last_name); ?>
            </p>
            <p><label>อีเมล : </label><span><?= $user->email ?></span></p>  
            <p>
                <label>หมายเลขโทรศัพท์ : </label>
                <?= Form::input('phone', $user->phone); ?>
                <div class="error"><?= Arr::get($errors, 'phone'); ?></div>
            </p>
            <?= Form::submit(NULL, 'อัพเดทข้อมูล'); ?> 
            <?= Form::close(); ?>
    </div>
</div>