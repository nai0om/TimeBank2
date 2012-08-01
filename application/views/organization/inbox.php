<div id="org" class="notice">
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
				<li><?= HTML::anchor('organization/event', 'งานอาสา'); ?></li>
				<li class="current"><?= HTML::anchor('organization/notification', 'การแจ้งเตือน'); ?></li>
			</ul>
		</div>
		
		
		<div id="main_right">
			
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body"><?= HTML::anchor('organization/notification', 'แจ้งเตือนงานอาสา'); ?></div>
			<div class="title right"></div>
			<div class="title left"></div>
			<div class="title body past"><?= HTML::anchor('organization/inbox', 'ข้อความเตือน ('.$notification_count.')'); ?></div>
			<div class="title right"></div>
			<div style="clear:both"></div>

			<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;"><?= $notification_count ?></span></p>
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
		</table>
        <?= Form::close(); ?>
		</div>
	
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>