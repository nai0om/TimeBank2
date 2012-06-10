<?php
$job = isset($gets['job'])? $gets['job'] : '0';
$query = isset($gets['query'])? $gets['query'] : '';
$province = isset($gets['province'])? $gets['province'] : '0';
$type = isset($gets['type'])? $gets['type'] : 'open';
$page = isset($gets['page'])? $gets['page'] : '1';
$start = isset($gets['start'])? $gets['start'] : '';
$end = isset($gets['end'])? $gets['end'] : '';
?>
<div id="tb_browse_detail" class="search">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ดูงานอาสา</li>
			<li>ค้นหาแบบละเอียด</li>
		</div>
		<ul><li>สมัครสมาชิก</li><li>เข้าสู่ระบบ</li></ul>

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
   					<p><?= Form::input('start', $end, array('class' => 'datepicker', 'id' => 'dp1338212246578'));  ?></p>
					<p><label>ถึงวันที่</label></p>
					<p><?= Form::input('end', $end, array('class' => 'datepicker', 'id' => 'dp1338212246579'));  ?></p>
					<p><label>เปิดรับสมัคร หรือ ปิดรับสมัคร</label></p>
					<p><?= Form::select('type', array('open' => 'เปิด', 'closed' => 'ปิด'), $type, array('style', 'width:300px;')); ?></p>
					<p><label>จำนวนชั่วโมง</p>
					<p><input type="text"></p>
					<p><input type="radio" name="day">ทุกวัน (จันทร์ - อาทิตย์)</p>
					<p><input type="radio" checked="" name="day">ระบุวัน (เลือกได้มากกว่า 1)</p>
					<p style="margin:3px 0 3px 78px"><input type="checkbox"><label class="day">จันทร์</label><input type="checkbox"><label class="day">อังคาร</label><input type="checkbox"><label class="day">พุธ</label></p>
					<p style="margin:3px 0 3px 78px"><input type="checkbox"><label class="day">พฤหัสบดี</label><input type="checkbox"><label class="day">ศุกร์</label><input type="checkbox"><label class="day">เสาร์</label></p>
					<p style="margin:3px 0 3px 78px"><input type="checkbox"><label class="day">อาทิตย์</label></p>
					<p><label>ตั้งแต่เวลา</label>
					<select><option></option></select>
					<label>ถึง</label>
					<select><option></option></select></p>
				</fieldset>
			</div>
			<div id="rightSide">
				<fieldset>
					<p><label><strong>ทักษะของอาสาสมัครที่ต้องการ</strong></label></p>
					<ol>
						<li><p>ความสามารถพิเศษ</p>
							<p><label>ทักษะทั่วไป (เลือกได้มากกว่า 1)</label></p>
							<p><input type="checkbox"> การขับขี่พาหนะ (จักรยานยนต์/รถยนต์)</p>
							<p><input type="checkbox"> ว่ายน้ำ</p>
							<p><label>การใช้ภาษา (สื่อสารได้/อ่านเขียนได้/แปลได้) (เลือกได้มากกว่า 1)</label></p>
							<p><input type="checkbox"> <label class="day">อังกฤษ</label>
							<input type="checkbox"> <label class="day">จีน</label>
							<input type="checkbox"> <label class="day">เยอรมัน</label></p>
							<p><input type="checkbox"> <label class="day">ญี่ปุ่น</label>
							<input type="checkbox"> <label>อื่นๆ (ให้ระบุ) </label><input type="text" style="width:50px;margin:0;display:inline;"></p>
						</li>
						<input type="submit" value="ค้นหาแบบละเอียด">
					</ol>
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
                        <td><?= $event->signup_begin_date ?><br>ถึง <?= $event->signup_end_date ?></td>
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
            </tbody></table>
		
  </div>
  <footer>
	<p>Copyright 2012 Jitarsa All rights reserved.</p>
	<ul><li>Team & Conditions</li><li>Privacy</li><li>Contact Us</li></ul>
  </footer>
</div>
<script>
$(document).ready( function () {
  	$(function() {
			$(".datepicker" ).datepicker();
				});
});
</script>