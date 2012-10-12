<div id="data" class="popup checkdata">
    <div id="content" >
            <h2>โปรดให้ข้อมูลของคุณเพิ่มเติม สำหรับสมัครเข้าร่วมกิจกรรมอาสา</h2>
			<p>(หมายเหตุ: องค์กรผู้จัดกิจกรรมอาสาที่คุณสมัครไปจะเห็นข้อมูลส่วนตัวของคุณเท่านั้น)</p>
			<?= Form::open('user/checkdata/'.$eventid, array ('style' => 'display: table')); ?>

            <p>
           		<label>ชื่อ* : </label>
	            <?= Form::input('first_name', $user->first_name); ?>
                <a class="error"><?= Arr::get($errors, 'first_name'); ?></a>
            </p>
            <p>
            	<label>นามสกุล* : </label>
	            <?= Form::input('last_name', $user->last_name); ?>
                <a class="error"><?= Arr::get($errors, 'last_name'); ?></a>
            </p>
            <p><label>อีเมล* : </label><span><?= $user->email ?></span></p>  
            <p>
                <label>หมายเลขโทรศัพท์* : </label>
                <?= Form::input('phone', $user->phone); ?>
                <a class="error"><?= Arr::get($errors, 'phone'); ?></a>
            </p>
            <?= Form::submit(NULL, 'เพิ่มข้อมูล'); ?> 
            <?= Form::close(); ?>
    </div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
</div>