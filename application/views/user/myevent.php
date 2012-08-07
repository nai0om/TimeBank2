<div id="member" class="job">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>งานอาสาของฉัน</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
			<?php include Kohana::find_file('views', 'shared/usermenu') ?>
            
		</div>
		
		
		<div id="main_right">
			<?
			$isOpen = '';
			$isClose = 'past';
			if($mode == 1)
			{
				//close
				$isOpen = 'past';
				$isClose = '';
			}
		?>
		<div class="title left"></div>
		<div class="title body <?= $isOpen ?>"><?= HTML::anchor('user/myevent/', 'งานอาสาที่สมัครไป') ?></div>
		<div class="title right"></div>
		<div class="title left"></div>
		<div class="title body <?= $isClose ?>"><?= HTML::anchor('user/myevent?mode=1', 'งานอาสาที่เคยร่วม') ?></div>
		<div class="title right"></div>
		<div style="clear:both"></div>
		
		<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;"><?= count($records) ?></span></p>
		<!-- div id="selection">ระบุเดือนที่ต้องการดู <select></select></div -->
		<? if (count($records) > 0) :?>
                <table>
                    <tr>
                    	<th style="width:130px;">สถานะ</th>
                        <th>ชื่อภารกิจ</th>
                        <th>ต้องการเวลา (ช.ม./คน)</th>
                        <th>รับจำนวน</th>
                        <th>เปิดรับสมัคร</th>
                        <th>วัน / เวลาทำงาน</th>
                        <th>ตัวเลือก</th>
                    </tr>
        <?php foreach ($records as $record):?>
        		<? if($mode != 1) : ?>
                    <tr>
                    	<td style="font-weight:bold; color:#F00; text-align:center">
                        <? if( $statuses[$record->id]['status'] == '1' ) : ?>    
                        	ได้รับการตอบรับแล้ว
                        <? elseif( $statuses[$record->id]['status'] == '0' ) : ?>
                        	รอการตอบรับ
                        <? else : ?>
                        	งานนี้ไม่ได้รับการตอบรับ
                        <? endif ?>
                        </td>
                        <td><?= $record->name ?></td>
                        <td><?= $record->time_cost ?></td>
                        <td><?= $record->volunteer_need_count ?>
                      คน</td>
                        <td>สิ้นสุดวันที่ <?= $record->signup_end_date ?></td>
                        <td><?= $record->volunteer_begin_date ?>
                          <br />
                          ถึง
                      <?= $record->volunteer_end_date ?></td>
                        <td><?= HTML::anchor('event/view/'.$record->id, 'เปิดดู') ?> <?= HTML::anchor('user/removeevent/'.$record->id, 'ยกเลิก') ?> </td>
                    </tr>
                 <? else : ?>
                    <tr>
                    	<td style="font-weight:bold; color:#F00; text-align:center">
                        <? if( $statuses[$record->id]['status'] == '1' ) : ?>    
                        	ยืนยันการใช้แล้ว
                        <? else : ?>
                        	<?= HTML::anchor('user/approvetime/'.$record->id, 'ยืนยันการใช้เวลา') ?> 
                        <? endif ?>
                        </td>
                        <td><?= $record->name ?></td>
                        <td><?= $record->time_cost ?></td>
                        <td><?= $record->volunteer_need_count ?>
                      คน</td>
                        <td>- ปิด -</td>
                   		<td>- ปิด -</td>
                        <td><?= HTML::anchor('event/view/'.$record->id, 'เปิดดู') ?> <?= HTML::anchor('user/removeevent/'.$record->id, 'ยกเลิก') ?> </td>
                    </tr>
                 <? endif ?>
            
        <? endforeach ?>
                <tr>
	
			</tr>
		</table>
<? endif ?>
		
		<!--div id="update">
		  <form><a href="#">ยกเลิก</a> <input type="text"><input type="submit" value="บันทึก"><a class="cross"></a></form>
		</div -->
		
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
		</div>
	
  </div>
  
 