<?php
$job = isset($gets['job'])? $gets['job'] : '0';
$query = isset($gets['query'])? $gets['query'] : '';
$province = isset($gets['province'])? $gets['province'] : '0';
$type = isset($gets['type'])? $gets['type'] : 'open';
$page = isset($gets['page'])? $gets['page'] : '1';
?>

<div id="tb_browse_searchResult" class="search">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ใช้บริการธนาคารจิตอาสา</li>
			
          <?php	
		  	
			if($job != 0){
				echo '<li>ดูภารกิจจิตอาสา</li>';
				echo '<li>'.$jobs[$gets['job']].'</li>';
			}
			else{
				echo '<li>ค้นหาภารกิจจิตอาสา</li>';
				}
			?>
			
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>
		
		<?= Form::open('event/search', array ('id' => 'search', 'method' => 'get'));  ?>
        <?= Form::input('query', $query, array('id' => 'query', 'onclick' => 'clear_text()'));  ?>
        <?= Form::select('job', $jobs, $job); ?>
        <?= Form::select('province', $provices, $province); ?>
        <?= Form::submit(NULL, 'หางานอาสา', array ('class' => 'mid'));  ?>
        <img src="<?= url::base(); ?>media/img/tb_line_form.png" />
     
        <?= Form::submit('advance', 'ค้นหาแบบละเอียด', array ('class' => 'long'));  ?>
        <?= Form::close(); ?>
		
	
	   <?php if (($job != 0 ) || ($query != '' && $job == 0  && $province != 0) ): ?>
       
            <div id="detail" style="width:100%"><h2><?= ($job == 0 ) ? '': $jobs[$job] ?></h2>
                <?php if ($type == 'closed'): ?>
                    <?= HTML::anchor($link.'type=open', 'งานอาสาที่เปิดรับสมัคร'); ?>
                    <?= HTML::anchor($link.'type=closed', 'งานอาสาที่จบไปแล้ว', array('class' => 'current')); ?>
                <? else: ?>
                    <?= HTML::anchor($link.'type=open', 'งานอาสาที่เปิดรับสมัคร', array('class' => 'current')); ?>
                    <?= HTML::anchor($link.'type=closed', 'งานอาสาที่จบไปแล้ว'); ?>
                <? endif ?>
          
            </div>
		<?php endif ?>
		<div style="clear:both"></div>
        <?php if ($type != 'member') : ?>
			<?php if ($query == '' && $job == 0  && $province == 0) : ?>
                    <h3 class="title" style="float:left;">ภารกิจล่าสุด</h3>
             <?php else: ?>
            <p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> 
            <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;"><?= $count ?></span></p>
            <?php endif ?>
            <table>
                <tbody><tr>
                    <th>ชื่อภารกิจ</th>
                    <th>ต้องการเวลา (ชม./คน)</th>
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
            
                    <? if( $type == 'open'): ?>
                        <td><?=  phphelp::str_to_thai_date($event->signup_end_date) ?></td>
                        <td><?=  phphelp::str_to_thai_date($event->volunteer_begin_date) ?><br>ถึง <?=  phphelp::str_to_thai_date($event->volunteer_end_date) ?></td>
                        <td><?= HTML::anchor('event/view/'.$event->id, 'รายละเอียด') ?></td>
                    <? else : ?>
                        <td>- ปิด -</td>
                        <td>- ปิด -</td>
                        <td><?= HTML::anchor('event/view/'.$event->id, 'เปิดดู') ?></td>
                    <? endif ?>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="6">
                        <ul>
                        <?php for($i = 1; $i <= $total_page; $i++){	
                                if( $i == $page)
                                {
                                    echo '<li>หน้า '.$i.'</li>';
                                }
                                else
                                {
                                    if($type != '')
                                        $link .= 'type='.$type.'&';
                                        
                                        $link .= 'page='.$i.'&';
                                    echo '<li>'.HTML::anchor($link, $i) .'</li>';
                                }
                              }
                        ?>
                        </ul>
                    </td>
                </tr>
            </tbody></table>
                    <br />
       <p style="float:right; font-size:22px">	"งานที่แสดงข้างต้นเป็นงานที่เปิดรับสมัครอยู่ หากต้องการค้นหางานที่จบไปแล้ว กรุณา <?= HTML::anchor('event/advance_search', 'ค้นหาแบบละเอียด') ?>"  </p>
		<?php else :?>
        <?php endif ?>
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