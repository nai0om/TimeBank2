<div id="member" class="notice">
  <div id="main" role="main">
		<div id="sitemap">
			<li><?= HTML::anchor('welcome/home', 'หน้าแรก') ?></li>
			<li><?= HTML::anchor('user/inbox', 'การแจ้งเตือน') ?></li>
		</div>

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
		
		<p><span style="color: #0099CC;font-size: 25px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-size: 25px;font-weight: bold;"><?= count($inboxes) ?></span></p>
		<div id="selection">
        <?= Form::open('user/deleteinbox'); ?><input type="checkbox"  onclick="clickall()"> เลือกทั้งหมด <?= Form::submit('submit', 'ลบ'); ?></div>
		<table>
			<tr>
				<th colspan="2" width="80%">ข้อความ</th>
				<th>ส่งมาวันที่</th>
			</tr>
            <?php foreach ($inboxes as $inbox) : ?>
			<tr id="<?= $inbox->id?>"  <? if ($inbox->is_read == 1)  echo "class=deactivated" ?> >
				<td><?= Form::checkbox('ib[]', $inbox->id, 0, array("class" => "ib")); ?></td>
				<td width="80%"><?= $inbox->title ?><br /><a><?= $inbox->message ?></a></td>
				<td><?= phphelp::timestamp_to_thai($inbox->created) ?></td>
                <script>
					$('#<?= $inbox->id?>').click( 
						function()
						{
							$.ajax({
									  url: "<?=  url::base()."user/inboxred/".$inbox->id ?>",
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
 							     	url: "<?=  url::base()."user/inboxred/".$inbox->id ?>",
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