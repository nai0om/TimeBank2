<div id="org" class="notice">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>หน้าหลักสมาชิกองค์กร</li>
			<li>หน้าหลัก</li>
		</div>
		<ul>
			<li>Welcome <span id="member_name">มูลนิธิกระจกเงา</span></li>
			<li>ข้อความเตือน (5)</li>
			<li>ตั้งค่าบัญชีผู้ใช้</li>
			<li>ออกจากระบบ</li>
		</ul>

		<div style="clear:both"></div>
		<div id="menu_left">
				<li><?= HTML::anchor('organization/index', 'หน้าหลัก'); ?></li>
				<li><?= HTML::anchor('organization/profile', 'โปร์ไพล์'); ?></li>
				<li><?= HTML::anchor('organization/event', 'งานอาสาของฉัน'); ?></li>
				<li class="current"><?= HTML::anchor('organization/notification', 'การแจ้งเตือน'); ?></li>
			</ul>
		</div>
		
		
		<div id="main_right">
			
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body"><?= HTML::anchor('organization/notification', 'แจ้งเตือนงานอาสา'); ?></div>
			<div class="title right"></div>
			<div class="title left"></div>
			<div class="title body past"><?= HTML::anchor('organization/inbox', 'ข้อความเตือน (5)'); ?></div>
			<div class="title right"></div>
			<div style="clear:both"></div>

			<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;">5</span></p>
		<div id="selection">
		<?= Form::open('organization/deleteinbox'); ?><input type="checkbox"> Select All <?= Form::submit('submit', 'ลบ'); ?></div>
		<table>
			<tr>
				<th colspan="2">หัวข้อ</th>
				<th>ส่งมาวันที่</th>
			</tr>
           
            <?php foreach ($inboxes as $inbox) : ?>
			<tr>
				<td><?= Form::checkbox('ib[]', $inbox->id, 0); ?></td>
				<td><?= $inbox->title ?><br /><a><?= $inbox->message ?></a></td>
				<td><?= $inbox->created ?></td>
			</tr>
            <? endforeach ?>
			<tr class="last">
				<td colspan="3">
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
        <?= Form::close(); ?>
		</div>
	
  </div>
</div>