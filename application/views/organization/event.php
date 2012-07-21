<div id="org" class="job">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>หน้าหลักสมาชิกองค์กร</li>
			<li>หน้าหลัก</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
			<ul>
				<li><?= HTML::anchor('organization/index', 'หน้าหลัก'); ?></li>
				<li><?= HTML::anchor('organization/profile', 'โปร์ไพล์'); ?></li>
				<li class="current"><?= HTML::anchor('organization/event', 'งานอาสาของฉัน'); ?></li>
				<li><?= HTML::anchor('organization/notification', 'การแจ้งเตือน'); ?></li>
			</ul>
		</div>
        		
		<div id="main_right">
			
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">งานอาสาที่เปิดรับสมัคร</div>
			<div class="title right"></div>
			<div class="title left"></div>
			<div class="title body past">งานอาสาที่จบไปแล้ว</div>
			<div class="title right"></div>
			<div style="clear:both"></div>
			<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;">120</span><?= HTML::anchor('event/create', 'สร้างงานอาสาใหม่', array('class'=>'button')); ?></p>
			<div id="selection"><form><input type="checkbox"> Select All <input type="submit" value="ลบ"></form><div>ระบุเดือนที่ต้องการดู <select></select></div></div>
			<table>
				<tbody><tr>
					<th></th>
					<th>งานอาสา</th>
					<th>ต้องการจากอาสา</th>
					<th>จำนวนรับสมัคร</th>
					<th>แก้ไข</th>
					<th>อนุมัติอาสา</th>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>Loremip  sumons  ectetueradip</td>
					<td>8 ชม.</td>
					<td>132 คน</td>
					<td><a href="#">แก้ไข</a></td>
					<td><a href="#">ดูอาสาสมัคร</a></td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>Loremip  sumons  ectetueradip</td>
					<td>8 ชม.</td>
					<td>132 คน</td>
					<td><a href="#">แก้ไข</a></td>
					<td><a href="#">ดูอาสาสมัคร</a></td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>Loremip  sumons  ectetueradip</td>
					<td>8 ชม.</td>
					<td>132 คน</td>
					<td><a href="#">แก้ไข</a></td>
					<td><a href="#">ดูอาสาสมัคร</a></td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>Loremip  sumons  ectetueradip</td>
					<td>8 ชม.</td>
					<td>132 คน</td>
					<td><a href="#">แก้ไข</a></td>
					<td><a href="#">ดูอาสาสมัคร</a></td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>Loremip  sumons  ectetueradip</td>
					<td>8 ชม.</td>
					<td>132 คน</td>
					<td><a href="#">แก้ไข</a></td>
					<td><a href="#">ดูอาสาสมัคร</a></td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>Loremip  sumons  ectetueradip</td>
					<td>8 ชม.</td>
					<td>132 คน</td>
					<td><a href="#">แก้ไข</a></td>
					<td><a href="#">ดูอาสาสมัคร</a></td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>Loremip  sumons  ectetueradip</td>
					<td>8 ชม.</td>
					<td>132 คน</td>
					<td><a href="#">แก้ไข</a></td>
					<td><a href="#">ดูอาสาสมัคร</a></td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>Loremip  sumons  ectetueradip</td>
					<td>8 ชม.</td>
					<td>132 คน</td>
					<td><a href="#">แก้ไข</a></td>
					<td><a href="#">ดูอาสาสมัคร</a></td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>Loremip  sumons  ectetueradip</td>
					<td>8 ชม.</td>
					<td>132 คน</td>
					<td><a href="#">แก้ไข</a></td>
					<td><a href="#">ดูอาสาสมัคร</a></td>
				</tr>
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
			</tbody></table>
		</div>
		
  </div>
</div>