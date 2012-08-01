<div id="org" class="job">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>หน้าหลักสมาชิกองค์กร</li>
			<li>หน้าหลัก</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
			<ul>
				<li><?= HTML::anchor('organization/index', 'หน้าหลัก'); ?></li>
				<li><?= HTML::anchor('organization/profile', 'โปร์ไพล์'); ?></li>
				<li class="current"><?= HTML::anchor('organization/event', 'งานอาสา'); ?></li>
				<li><?= HTML::anchor('organization/notification', 'การแจ้งเตือน'); ?></li>
			</ul>
		</div>
        		
		<div id="main_right">
		 <? 
		 	// default of mode
		 	$open = '';
			$close = 'past';
		 	if ($mode == '1' ) // closed event 
		 	{
				$open = 'past';
				$close = '';	
			}
		 ?>
         
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body <?= $open ?>"><?= HTML::anchor('organization/event', 'งานอาสาที่เปิดรับสมัคร'); ?></div>
			<div class="title right"></div>
			<div class="title left"></div>
			<div class="title body <?= $close ?>"><?= HTML::anchor('organization/event?mode=1', 'งานอาสาที่จบไปแล้ว'); ?></div>
			<div class="title right"></div>
			<div style="clear:both"></div>
			<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;"><?= count($events) ?></span><?= HTML::anchor('event/create', 'สร้างงานอาสาใหม่', array('class'=>'button')); ?></p>
			<div id="selection"><form><input type="checkbox"> Select All <input type="submit" value="ลบ"></form><div>ระบุเดือนที่ต้องการดู <select></select></div></div>
            <? if ($mode == '1' ) : // closed event ?>
            <table>
				<tbody><tr>
					<th></th>
					<th>งานอาสา</th>
					<th>ต้องการจากอาสา</th>
					<th>จำนวนรับสมัคร</th>
					<th>จำนวนคนที่ไปจริง</th>
					<th>เขียนคำขอบคุณ</th>
                    <th>เปิดไหม่</th>
				</tr>
               	
                <? foreach($events as $event) : ?>
                  <?= Form::open('event/addjoined/'.$event->id, array('enctype' => 'multipart/form-data')); ?>	
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?= HTML::anchor('event/view/'.$event->id, $event->name) ?></td>
                        <td><?=  $event->time_cost ?> ชม.</td>
                        <td><?=  $event->volunteer_need_count ?> คน</td>
                        <td><?= Form::input('value', $event->volunteer_joined); ?>  <?= Form::submit(NULL, 'บันทึก'); ?></td>
                        <td><?= HTML::anchor('event/view/'.$event->id, 'เขียน') ?></td>
                        <td><?= HTML::anchor('event/reopen/'.$event->id, 'เปิด') ?></td>
                    </tr>
                 <?= Form::close(); ?>	
                <? endforeach ?>
           	
             </table>
            <? else : ?>
			<table>
				<tbody><tr>
					<th></th>
					<th>งานอาสา</th>
					<th>ต้องการจากอาสา</th>
					<th>จำนวนรับสมัคร</th>
					<th>ตัวเลือก</th>
				</tr>
				
                <? foreach($events as $event) : ?>
                <tr>
					<td><input type="checkbox"></td>
					<td><?= HTML::anchor('event/view/'.$event->id, $event->name) ?></td>
					<td><?=  $event->time_cost ?> ชม.</td>
					<td><?=  $event->volunteer_need_count ?> คน</td>
                    <td><?= HTML::anchor('event/edit/'.$event->id, 'แก้ไข') ?>
                    	<?= HTML::anchor('event/approve/'.$event->id, 'ดูอาสาสมัคร') ?>
                    	<?= HTML::anchor('event/closed/'.$event->id, 'ปิดงาน') ?></td>
				</tr>
                <? endforeach ?>
				
			<? endif ?>
			</tbody></table>
		</div>
		
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>