<div id="member" class="profile">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>โปร์ไพล์</li>
		</div>
		<ul>
			<li>Welcome <span id="member_name"><span id="member_name"><?= $user->nickname ?>, <?= $user->first_name ?> <?= $user->last_name ?></span></li>
			<li>ข้อความเตือน (5)</li>
			<li>ตั้งค่าบัญชีผู้ใช้</li>
			<li>ออกจากระบบ</li>
		</ul>

		<div style="clear:both"></div>
		<div id="menu_left">
			<ul>
				<li><?= HTML::anchor('user/index', 'หน้าหลัก'); ?></li>
				<li class="current">โปร์ไพล์</li>
				<li>ฝากเวลาของฉัน</li>
				<li>งานอาสาของฉัน</li>
				<li>ค้นหางานอาสา</li>
				<li>งานฝึกอบรมของฉัน</li>
				<li>การแจ้งเตือน</li>
			</ul>
		</div>
        <?= Form::open('user/profile', array('enctype' => 'multipart/form-data')); ?>		
		
		<div id="main_right">
		
		<div class="title left"></div>
		<div class="title body">รูปภาพของคุณ</div>
		<div class="title right"></div>
		<div style="clear:both"></div>
        
		<?= Form::label('profile_image', 'รูปภาพของคุณ'); ?>
        <img src="<?= url::base().'media/upload/'.$user->profile_image; ?>" />
		<?= Form::file('profile_image') ?>
        <div class="error"><?= Arr::get($errors, 'profile_image'); ?></div>
        
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
				
				<?= Form::label('birthday', 'วันเกิด'); ?>
				<?= Form::input('birthday', HTML::chars($user->birthday), array('id' => 'datepicker')); ?>
                <div class="error"><?= Arr::get($errors, 'birthday'); ?></div>
                

			</div>
			<div class="right">
            
				<?= Form::label('last_name', 'นามสกุล'); ?>
				<?= Form::input('last_name', HTML::chars($user->last_name)); ?>
                <div class="error"><?= Arr::get($errors, 'last_name'); ?></div>
            
				<?= Form::label('phone', 'เบอร์โทรติดต่อ'); ?>
				<?= Form::input('phone', HTML::chars($user->phone)); ?>
                <div class="error"><?= Arr::get($errors, 'phone'); ?></div>
                
				<?= Form::label('address', 'ที่อยู่'); ?>
				<?= Form::input('address', HTML::chars($user->address)); ?>
                <div class="error"><?= Arr::get($errors, 'address'); ?></div>
                
                
			</div>
			<div style="clear:both"></div>
            <?= Form::submit('profile', 'บันทึกการเปลี่ยนแปลง'); ?>
			<div class="line"></div>
		<?= Form::close(); ?>
		<form>
		<div class="left">
			<div class="title left"></div>
			<div class="title body" style="font-family:chula">ความสามารถเฉพาะของคุณ</div>
			<div class="title right"></div>
			<div style="clear:both"></div>
			<label>1. ความสามารถพิเศษ ทักษะทั่วไป (เลือกได้มากกว่า 1)</label>
			<p><input type="checkbox"> <span>การขับขี่พาหนะ (จักรยานยนต์ / รถยนต์)</span></p>
			<p><input type="checkbox"> <span>ว่ายน้ำ</span></p>
			<label>การใช้ภาษา (สื่อสารได้ / อ่านเขียนได้ / แปลได้) <br>(เลือกได้มากกว่า 1)</label>
			<p><input type="checkbox"> <span>อังกฤษ</span></p>
			<p><input type="checkbox"> <span>จีน</span></p>
			<p><input type="checkbox"> <span>เยอรมัน</span></p>
			<p><input type="checkbox"> <span>ญี่ปุ่น</span></p>
			<p><input type="checkbox"> <span>อื่นๆให้ระบุ </span><input type="text" style="display:inline;width:40%;"></p>
			<p align="center"><img src="img/loading.png"></p>
			<label>Tag บ่งบอกกลุ่ม</label>
			<input type="text">
			<p><span class="tag">SCBStaff</span><span class="tag">วัดไร่ขิงห้อง 6/1</span><p>
		</div>
		
		<div class="right">
			<div class="title left"></div>
			<div class="title body" style="font-family:chula">ความสนใจของคุณ</div>
			<div class="title right"></div>
			<div style="clear:both"></div>
			<label>(เลือกได้มากกว่า 1 ข้อ)</label>
			<p><input type="checkbox"> <span>งานอาสาทั่วไป</span></p>
			<p><input type="checkbox"> <span>กู้ภัยและฟื้นฟูจากภัยพิบัติ</span></p>
			<p><input type="checkbox"> <span>หัตถกรรมและงานฝีมือ เย็บ ปัก ถัก ร้อย</span></p>
			<p><input type="checkbox"> <span>ศาสนาและปฏิบัติธรรม</span></p>
			<p><input type="checkbox"> <span>อาหารและโภชนาการ </span></p>
			<p><input type="checkbox"> <span>ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ</span></p>
			<p align="center"><img src="img/loading.png"></p>
		</div>
		<div style="clear:both"></div>
		<input type="submit" value="บันทึกการเปลี่ยนแปลง"><div class="line"></div>
		</form>
		</div>
		
		</div>
	
  </div>