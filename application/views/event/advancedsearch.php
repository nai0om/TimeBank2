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
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<h2>ดูงานอาสา</h2>
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
					<p><label>ประเภทงานอาสา</p>
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
                    <p><?= Form::radio('day', 1, $every_day, array('id' => 'every_day', 'onChange' => 'everyDayChecked()')) ?>ทุกวัน (จันทร์ - อาทิตย์)</p>
					<p><?= Form::radio('day', 0,  $pick_day,  array('id' => 'day', 'onChange' => 'dayChecked()')) ?>ระบุวัน (เลือกได้มากกว่า 1)</p>
                    <p style="margin:3px 0 3px 78px; width:250px;" >
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
							 <p><label><strong>ทักษะของอาสาสมัครที่ต้องการ</strong></label></p>
        <ol>
           <?php
			
		   $skill = Kohana::$config->load('timebank')->get('all_skills'); 
		   $dict = Kohana::$config->load('timebank')->get('worddict');
		   foreach ($skill as $title => $value)
		   {
   			 echo  '<p><label>'.$dict[$title].'</label>';
			 foreach ($value as $title2 => $value2)
			 {
				echo  '<label style="margin-left: 10px;" > - '.$dict[$title2].'</label> <br />'; 
				foreach ($value2 as $name)
				{
					$value = '';
					 $checked = '';
					
					
					if(phphelp::endsWith($name, 'T'))
					{
						echo  '<input style="margin-left: 20px;" '. $checked .' type="checkbox"> <span>'.$dict[$name].'</span> <br />';
						echo  '<input name='.$name.' value="'.$value.'" type="text" style="display:inline;width:40%;margin-left: 50px;"><br />';
					}
					else
					{
						echo  '<input style="margin-left: 20px;" '. $checked .' type="checkbox" name='.$name.'> <span>'.$dict[$name].'</span> <br />';
					}
				}
			 }
			 echo '<p>';
		   }
	   ?>
       <input type="submit" value="ค้นหาแบบละเอียด">
        </ol>
			</fieldset>

				</fieldset>
			</div>
		</form>
		<div style="clear:both"></div>
		<div class="line"></div>
		<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;"><?= $count ?></span></p>
		 <table>
                <tbody><tr>
                    <th>งานอาสา</th>
                    <th>ต้องการจากอาสา</th>
                    <th>จำนวนรับสมัคร</th>
                    <th>เปิดรับสมัคร</th>
                    <th>วัน / เวลาทำงานอาสา</th>
                    <th></th>
                </tr>
                <?php foreach ($events as $event):	?>
                <tr>
                    <td><?= $event->name?></td>
                    <td><?= $event->time_cost ?></td>
                    <td><?= $event->volunteer_need_count ?> คน</td>
            
                    <? if( $type == 'open'): ?>
                        <td>สิ้นสุด <?= $event->signup_end_date ?></td>
                        <td><?= $event->volunteer_begin_date ?><br>ถึง <?= $event->volunteer_end_date ?></td>
                        <td><?= HTML::anchor('event/view/'.$event->id, 'สมัคร') ?></td>
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
                                    echo '<li>Page '.$i.'</li>';
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
            </tbody>
         </table>
		<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>


<script>
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