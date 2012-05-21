<div id="tb_browse">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
			<li>ดูงานอาสา</li>
		</div>
		<ul><li>สมัครสมาชิก</li><li>เข้าสู่ระบบ</li></ul>
		
		<h2>หางานอาสา</h2>
		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>
		
		<?php 
			echo Form::open('event/search', array ('id' => 'search')); 
        	echo Form::input('text', 'ใส่ชื่องานอาสา, ชื่อองค์กร, ชื่อสถานที่"'); 
		
            $jobs = Kohana::$config->load('timebank')->get('jobs'); 
            echo Form::select('jobs', $jobs, '--ประเภทงานอาสา--');
            
            $provices = Kohana::$config->load('timebank')->get('provices'); 
            echo Form::select('location_province', $provices, '--จังหวัด--');
            
	        echo Form::submit(NULL, 'หางานอาสา', array ('class' => 'mid')); 
            echo Form::submit(NULL, 'ค้นหาแบบละเอียด', array ('class' => 'long')); 
			echo Form::close();
		?>

		
		<blockquote>
			<h2>สนใจเป็นอาสาสมัคร</h2>
			<h3><span style="text-decoration:underline">ดูงานอาสา</span>   <span style="font-size:20px;">หรือ</span>   <span style="text-decoration:underline">สร้างโอกาสในการใช้เวลา</span></h3>
		</blockquote>
		
		<h3 class="title">ประเภทงานอาสา</h3>
		<ul class="type">
			<?php  
				$jobs = Kohana::$config->load('timebank')->get('jobs'); 
				foreach ($jobs as $job):
					echo '<li><a href="" >'.$job.'</a><span>[3941]</span></li>';
				endforeach;
            ?> 
		</ul>

		<h3 class="title" style="float:left;">งานอาสามาใหม่</h3>
		<img src="<?= url::base(); ?>media/img/tb_browse_line.png" style="position:relative;top:20px;"/><a class="read_more">แสดงเพิ่มเติม</a>
		<table cellpadding=0 cellspacing=0>
			<tr bgcolor="#0099CC">
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
				<td>1 มค. 2555<br>ถึง 31 มค. 2555</td>
				<td>ทุกวัน (จันทร์-อา)<br>เวลา 8.30 น. - 17.30 น.</td>
				<td><?= HTML::anchor('event/view/'.$event->id, 'สมัคร') ?></td>
			</tr>
            <?php endforeach; ?>
			<tr class="pagination">
				<td colspan="6"><ul>
					<li>Page 1</li>
					<li>2</li>
					<li>3</li>
				</ul></td>
			<tr>
		</table>
  </div>
</div>