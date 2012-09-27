<div id="tb_browse">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ใช้บริการธนาคารจิตอาสา</li>
			<li>ดูภารกิจจิตอาสา</li>
		</div>
		
		<h2>ค้นหาภารกิจจิตอาสา</h2>
		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>
		
		<?php 
			echo Form::open('event/search', array ('id' => 'search', 'method' => 'get')); 
        	echo Form::input('query', 'ใส่ชื่อภารกิจ, ชื่อองค์กร, ชื่อสถานที่', array('id' => 'query', 'onclick' => 'clear_text()')); 
            echo Form::select('job', $jobs, 'ประเภทภารกิจ');
            echo Form::select('province', $provices, '--จังหวัด--');
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
				<th>ต้องการเวลา (ชม./คน) </th>
				<th>รับจำนวน</th>
				<th>รับสมัครภายใน</th>
				<th>ช่วงวันทำงาน</th>
				<th></th>
			</tr>
			
            <?php foreach ($events as $event):	?>
            <tr>
				<td><?= HTML::anchor('event/view/'.$event->id, $event->name) ?></td>
				<td><?= $event->time_cost ?></td>
				<td><?= $event->volunteer_need_count ?> คน</td>
				<td><?= phphelp::str_to_thai_date($event->signup_end_date);   ?></td>
				<td><?= phphelp::str_to_thai_date($event->volunteer_begin_date); ?>
                		<br> ถึง <?=  phphelp::str_to_thai_date($event->volunteer_end_date);   ?></td>
				<td><?= HTML::anchor('event/view/'.$event->id, 'รายละเอียด') ?></td>
			</tr>
            <?php endforeach; ?>
			
		</table>
        <br />
       <p style="float:right; font-size:22px">	"งานที่แสดงข้างต้นเป็นงานที่เปิดรับสมัครอยู่ หากต้องการค้นหางานที่จบไปแล้ว กรุณา <?= HTML::anchor('event/advance_search', 'ค้นหาแบบละเอียด') ?>"  </p>
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>

<script>
	function clear_text()
	{
		
		if ($('#query').val() == 'ใส่ชื่อภารกิจ, ชื่อองค์กร, ชื่อสถานที่')
			$('#query').val('');
	}
</script>