<div id="member" class="notice">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>การแจ้งเตือน</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
			<?php include Kohana::find_file('views', 'shared/usermenu') ?>
		</div>
		
		
		<div id="main_right">
		
		<div class="title left"></div>
		<div class="title body"><?= HTML::anchor('user/notification', 'แจ้งเตือนงานอาสา'); ?></div>
		<div class="title right"></div>
		<div class="title left"></div>
		<div class="title body past"><?= HTML::anchor('user/inbox', 'ข้อความเตือน ('.$notification_count.')'); ?></div>
		<div class="title right"></div>
		<div style="clear:both"></div>
		
		<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;"><?= $notification_count ?></span></p>
		<div id="selection">
        <?= Form::open('user/deleteinbox'); ?><input type="checkbox"> Select All <?= Form::submit('submit', 'ลบ'); ?></div>
		<table>
			<tr>
				<th colspan="2" width="80%">หัวข้อ</th>
				<th>ส่งมาวันที่</th>
			</tr>
            <?php foreach ($inboxes as $inbox) : ?>
			<tr>
				<td><?= Form::checkbox('ib[]', $inbox->id, 0); ?></td>
				<td width="80%"><?= $inbox->title ?><br /><a><?= $inbox->message ?></a></td>
				<td><?= $inbox->created ?></td>
			</tr>
            <? endforeach ?>

		</table>
		<?= Form::close(); ?>
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
	</div>
	
  </div>
  
 