<div id="tb_browse">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>ดูงานอาสา</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		
		<h2>หางานอาสา</h2>
		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>
		
		<?php 
			echo Form::open('event/search', array ('id' => 'search', 'method' => 'get')); 
        	echo Form::input('text', 'ใส่ชื่องานอาสา, ชื่อองค์กร, ชื่อสถานที่'); 
            echo Form::select('jobs', $jobs, '--ประเภทงานอาสา--');
            echo Form::select('location_province', $provices, '--จังหวัด--');
	        echo Form::submit(NULL, 'หางานอาสา', array ('class' => 'mid')); 
            echo Form::submit('advance', 'ค้นหาแบบละเอียด', array ('class' => 'long')); 
			echo Form::close();
		?>

		<blockquote>
			<h2>ปันเวลาช่วยกัน</h2>
			<h3><span style="text-decoration:underline"><?= HTML::anchor('event/browse', 'ฝากเวลา'); ?></span>   <span style="font-size:20px;">หรือ</span>   <span style="text-decoration:underline"><?= HTML::anchor('event/create', 'สร้างภารกิจจิตอาสา'); ?></span></h3>
		</blockquote>
		
		<h3 class="title">ประเภทงานอาสา</h3>
		<ul class="type">
			<?php for($i = 1; $i < sizeof($jobs); $i++):	?>
				<li><?= HTML::anchor('event/search/?job='.$i,  $jobs[$i]) ?> <span>[<?= $jobs_count[$i] ?>]</span></li>
            <?php endfor; ?>
		</ul>

		 <h3 class="title" style="float:left;">งานอาสามาใหม่</h3>
         
		<img src="<?= url::base() ?>media/img/tb_browse_line.png" style="position:relative;top:20px;"/><?= HTML::anchor('event/search/', 'แสดงเพิ่มเติม', array('class' => 'read_more')) ?>
		<table cellpadding=0 cellspacing=0>
			<tr>
				<th>งานอาสา</th>
				<th>ต้องการจากอาสา</th>
				<th>จำนวนรับสมัคร</th>
				<th>เปิดรับสมัคร</th>
				<th>วัน/เวลาทำงาน</th>
				<th></th>
			</tr>
			
            <?php foreach ($events as $event):	?>
            <tr>
				<td><?= $event->name?></td>
				<td><?= $event->time_cost ?></td>
				<td><?= $event->volunteer_need_count ?> คน</td>
				<td><?	
						$time= strtotime($event->signup_begin_date); 
						echo phphelp::thai_date($time);
					?><br>ถึง <?= $event->signup_end_date ?></td>
				<td><? 
					$time= strtotime($event->volunteer_begin_date); 
					echo phphelp::thai_date($time);
					?><br>ถึง <?= $event->volunteer_end_date ?></td>
				<td><?= HTML::anchor('event/view/'.$event->id, 'สมัคร') ?></td>
			</tr>
            <?php endforeach; ?>
	
		</table>
       
  </div>
</div>