<div id="tb_browse">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ใช้บริการธนาคารจิตอาสา</li>
			<li>ดูภารกิจจิตอาสา</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		
		<h2>ค้นหาภารกิจจิตอาสา</h2>
		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>
		
		<?php 
			echo Form::open('event/search', array ('id' => 'search', 'method' => 'get')); 
        	echo Form::input('query', 'ใส่ชื่อภารกิจ, ชื่อองค์กร, ชื่อสถานที่'); 
            echo Form::select('jobs', $jobs, '--ประเภทภารกิจ--');
            echo Form::select('location_province', $provices, '--จังหวัด--');
	        echo Form::submit(NULL, 'ค้นหา', array ('class' => 'mid')); 
            echo Form::submit('advance', 'ไปค้นหาแบบละเอียด', array ('class' => 'long')); 
			echo Form::close();
		?>
		
		<h3 class="title">ประเภทภารกิจจิตอาสา</h3>
		<ul class="type">
			<?php for($i = 1; $i < sizeof($jobs); $i++):	?>
				<li><?= HTML::anchor('event/search/?job='.$i,  $jobs[$i]) ?> <span>[<?= $jobs_count[$i] ?>]</span></li>
            <?php endfor; ?>
		</ul>

		 <h3 class="title" style="float:left;">ภารกิจล่าสุด</h3>
         
		<img src="<?= url::base() ?>media/img/tb_browse_line.png" style="position:relative;top:20px;"/><?= HTML::anchor('event/search/', 'แสดงเพิ่มเติม', array('class' => 'read_more')) ?>
		<table cellpadding=0 cellspacing=0>
			<tr>
				<th>ชื่อภารกิจ</th>
				<th>ต้องการเวลา (ช.ม./คน) </th>
				<th>รับจำนวน</th>
				<th>เปิดรับสมัคร</th>
				<th>วัน / เวลาทำงาน</th>
				<th></th>
			</tr>
			
            <?php foreach ($events as $event):	?>
            <tr>
				<td><?= $event->name?></td>
				<td><?= $event->time_cost ?></td>
				<td><?= $event->volunteer_need_count ?> คน</td>
				<td>สิ้นสุด <?= $event->signup_end_date ?></td>
				<td><? 
					$time= strtotime($event->volunteer_begin_date); 
					echo phphelp::thai_date($time);
					?><br>ถึง <?= $event->volunteer_end_date ?></td>
				<td><?= HTML::anchor('event/view/'.$event->id, 'สมัคร') ?></td>
			</tr>
            <?php endforeach; ?>
	
		</table>
       
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>