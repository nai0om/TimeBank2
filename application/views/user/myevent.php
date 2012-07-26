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
		
		<div class="title left"></div>
		<div class="title body">งานอาสาที่สมัครไป</div>
		<div class="title right"></div>
		<div class="title left"></div>
		<div class="title body past">งานอาสาที่เคยร่วม</div>
		<div class="title right"></div>
		<div style="clear:both"></div>
		
		<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;"><?= count($records) ?></span></p>
		<div id="selection">ระบุเดือนที่ต้องการดู <select></select></div>
		<? if (count($records) > 0) :?>
                <table>
                    <tr>
                        <th>งานอาสา</th>
                        <th>ต้องการจากอาสา</th>
                        <th>จำนวนรับสมัคร</th>
                        <th>เปิดรับสมัคร</th>
                        <th>วัน / เวลาทำงาน</th>
                        <th>ยกเลิก</th>
                    </tr>
        <?php foreach ($records as $record):?>
                    <tr>
                        <td><?= $record->name ?></td>
                        <td><?= $record->time_cost ?></td>
                        <td><?= $record->volunteer_need_count ?>
                      คน</td>
                        <td><?= $record->signup_begin_date ?>
                    <br>ถึง 
                    <?= $record->signup_end_date ?></td>
                        <td><?= $record->volunteer_begin_date ?>
                          <br />
                          ถึง
                      <?= $record->volunteer_end_date ?></td>
                        <td><?= HTML::anchor('event/view/'.$record->id, 'เปิดดู') ?> <a href="#">ยกเลิก</a></td>
                    </tr>
            
        <? endforeach ?>
                <tr>
				<td colspan="6">
					<ul>
						<li>Page 1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
						<li>5</li>
					</ul>
				</td>
			</tr>
		</table>
<? endif ?>
		
		<div id="update">
		  <form><a href="#">ยกเลิก</a> <input type="text"><input type="submit" value="บันทึก"><a class="cross"></a></form>
		</div>
		
		</div>
		</div>
	
  </div>
  
 