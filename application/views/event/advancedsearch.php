<?php
$job = isset($gets['job'])? $gets['job'] : '0';
$query = isset($gets['query'])? $gets['query'] : '';
$province = isset($gets['province'])? $gets['province'] : '0';
$type = isset($gets['type'])? $gets['type'] : 'open';
$page = isset($gets['page'])? $gets['page'] : '1';
$start = isset($gets['start'])? $gets['start'] : '';
$end = isset($gets['end'])? $gets['end'] : '';
$time_cost = isset($gets['time_cost'])? $gets['time_cost'] : '';
$day = isset($gets['day'])? $gets['day'] : '';
$skill = isset($gets['skill'])? $gets['skill'] : '';
$languate = isset($gets['languate'])? $gets['languate'] : '';
$begin_time = isset($gets['begin_time'])? $gets['begin_time'] : '';
$end_time = isset($gets['end_time'])? $gets['end_time'] : '';

$every_day = false;
$pick_day = false;
if($day == '1')
	$every_day = true;
if($day == '0')
	$pick_day = true;
	
//build array of times.
$times = array();
$time = strtotime("00:00");
$times["00:00:00"] = date("H:i",$time);
for($i = 1;$i < 48;$i++) {
	$time = strtotime("+ 30 minutes",$time);
	$key = date("H:i",$time);
	$times[$key.':00'] = date("H:i",$time);
}
$times['23:59:59'] = '23:59';
?>
<div id="tb_browse_detail" class="search">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ดูงานอาสา</li>
			<li>ค้นหาแบบละเอียด</li>
		</div>

		<div style="clear:both"></div>
		<h2>ค้นหาแบบละเอียด</h2>
		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
		</div>
		
		<?= Form::open('event/advance_search', array ('id' => 'search', 'method' => 'get'));  ?>
			<div id="leftSide">
				<fieldset>
					<legend></legend>
					<p><label>ใส่งานอาสา, ชื่อองค์กร, ชื่อสถานที่</p>
					<p><?= Form::input('query', $query);  ?></p>
					<p><label>ประเภทภารกิจที่ท่านสนใจ</p>
					<p><?= Form::select('job', $jobs, $job, array('style', 'width:300px;')); ?></p>
					<p><label>จังหวัด</p>
					<p><?= Form::select('province', $provices, $province, array('style', 'width:300px;')); ?></p>
					<p><label>ตั้งแต่วันที่</label></p>
   					<p><?= Form::input('start', $start, array('class' => 'datepicker', 'id' => 'dp1338212246578'));  ?></p>
					<p><label>ถึงวันที่</label></p>
					<p><?= Form::input('end', $end, array('class' => 'datepicker', 'id' => 'dp1338212246579'));  ?></p>
					<p><label>เปิดรับสมัคร หรือ ปิดรับสมัคร</label></p>
					<p><?= Form::select('type', array('open' => 'เปิด', 'closed' => 'ปิด'), $type, array('style', 'width:300px;')); ?></p>
					<p><label>จำนวนชั่วโมง</p>
					<p><?= Form::input('time_cost', $time_cost);  ?></p>
					<p><label>เวลาที่ต้องการทำอาสา</p>
                    <p><?= Form::radio('day', 1, $every_day, array('id' => 'every_day', 'onChange' => 'everyDayChecked()')) ?>ทุกวัน (จันทร์ - อาทิตย์)</p>
					<p><?= Form::radio('day', 0,  $pick_day,  array('id' => 'day', 'onChange' => 'dayChecked()')) ?>ระบุวัน (เลือกได้มากกว่า 1)</p>
                    <p style="width:250px;" >
                        <?php  
                            $days = Kohana::$config->load('timebank')->get('days'); 
                            for($i = 0 ; $i < sizeof($days) ; $i++){
                                $checked = FALSE;
								if (isset($gets['day'.$i])){
									$checked = TRUE;
								}
							    echo Form::checkbox('day'.$i, $days[$i], $checked, array('id' => 'day'.$i, 'onChange' => 'dayChecked()')).''. Form::label($days[$i], $days[$i], array('class'=>'day')).'<br />';
                            }
                        ?>
                    </p>
                    <p><label>ตั้งแต่เวลา</label>
                    	<?= Form::select('begin_time', $times, $begin_time); ?>
                        <label>ถึง</label>
                        <?= Form::select('end_time', $times, ($end_time == '')? '23:59:59': $end_time); ?>
                    </p>
				</fieldset>
			</div>
			<div id="rightSide">
            <fieldset>
            <p><label><strong>ทักษะที่ท่านมี</strong></label></p>
            <ol>
				<? timebankhelper::buildSkilsForm(array(), true); ?>
                <input type="submit" value="ค้นหาแบบละเอียด" name='action'>
            </ol>
      		</fieldset>
        
        </fieldset>
        </div>
		<?= Form::close(); ?>
		<div style="clear:both"></div>
		<div class="line"></div>
		<p><span style="color: #0099CC;font-size: 25px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-size: 25px;font-weight: bold;"><?= $count ?></span></p>
		 <table id='result'>
                <tbody><tr>
                    <th>งานอาสา</th>
                    <th>ต้องการจากอาสา</th>
                    <th>จำนวนรับสมัคร</th>
                    <th style="width:120px">รับสมัครภายใน</th>
                    <th style="width:120px">ช่วงวันทำงาน</th>
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
                       	<div class="fix advance-fix"> 
                        <?php for($i = 1; $i <= $total_page; $i++){	
                                if( $i == $page)
                                {
                                    echo '<span class="current-page">'.$i.'</span>';
                                }
                                else
                                {
                                    if($type != '')
                                        $link .= 'type='.$type.'&';
                                        
                                        $link .= 'page='.$i.'&';
                                    echo ''.HTML::anchor($link, $i) .'';
                                }
                              }
                        ?>
                        </div>
                    </td>
                </tr>
            </tbody>
         </table>
		<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>


<script>
<? if($action == 1) :?>
     $('html, body').animate({
         scrollTop: $("#result").offset().top -200
     }, 200);
 <? endif ?>
 
$(document).ready( function () {
  	$(function() {
			$(".datepicker" ).datepicker();
				});
});


function dayChecked()
{
	$("#day").prop("checked", true);

}

function everyDayChecked()
{
	$("#every_day").prop("checked", true);
	 for( var i = 0 ; i < 7 ; i++)
	 {
		  $('#day' + i).prop("checked", false);
	 }
		
}
</script>
