<div id="org" class="notice">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>หน้าหลักสมาชิกองค์กร</li>
			<li>หน้าหลัก</li>
		</div>

		<div style="clear:both"></div>
		<div id="menu_left">
        	<ul>
				<li><?= HTML::anchor('organization/index', 'หน้าหลัก'); ?></li>
				<li><?= HTML::anchor('organization/profile', 'ข้อมูลองค์กร'); ?></li>
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
		<?= Form::open('organization/deleteinbox'); ?><input type="checkbox" onclick="clickall()"> เลือกทั้งหมด <?= Form::submit('submit', 'ลบ'); ?></div>
		<table>
			<tr>
				<th colspan="2">หัวข้อ</th>
				<th>ส่งมาวันที่</th>
			</tr>
           
            <?php foreach ($inboxes as $inbox) : ?>
			<tr id="<?= $inbox->id?>"  <? if ($inbox->is_read == 1)  echo "class=deactivated" ?> >
				<td><?= Form::checkbox('ib[]', $inbox->id, 0, array("class" => "ib")); ?></td>
				<td><?= $inbox->title ?><br /><?= $inbox->message ?></td>
				<td><?= phphelp::timestamp_to_thai($inbox->created) ?></td>
                  <script>
					$('#<?= $inbox->id?> ').mouseup( 
						function()
						{ 
							
							$.ajax({
									  url: "<?=  url::base()."organization/inboxred/".$inbox->id ?>",
									}).done(function ( data ) {
									 	$('#<?= $inbox->id?>').addClass('deactivated');
									});
							
						}
					);
					
						$('#<?= $inbox->id?> a').mouseup( 
						function()
						{ 
							$.ajax({
									async: false,
									url: "<?=  url::base()."organization/inboxred/".$inbox->id ?>",
									}).done(function ( data ) {
									 	$('#<?= $inbox->id?>').addClass('deactivated');
									});
							
						}
					);
				</script>
			</tr>
            <? endforeach ?>
		</table>
        <?= Form::close(); ?>
		</div>
	
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>

<script>
function clickall()
{
	$('.ib').attr('checked', 'checked');
}
</script>