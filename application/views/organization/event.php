<div id="org" class="job">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>องค์กร</li>
			<li>งานอาสา</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
			<ul>
				<li><?= HTML::anchor('organization/index', 'หน้าหลัก'); ?></li>
				<li><?= HTML::anchor('organization/profile', 'แก้ไขข้อมูลองค์กร'); ?></li>
				<li class="current"><?= HTML::anchor('organization/event', 'งานอาสา'); ?></li>
				<li><?= HTML::anchor('organization/notification', 'การแจ้งเตือน'); ?></li>
			</ul>
		</div>
        		
		<div id="main_right">
		 <? 
		 	// default of mode
		 	$open = '';
			$close = 'past';
		 	if ($mode == '1' ) // closed event 
		 	{
				$open = 'past';
				$close = '';	
			}
		 ?>
         
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body <?= $open ?>"><?= HTML::anchor('organization/event', 'งานอาสาที่เปิดรับสมัคร'); ?></div>
			<div class="title right"></div>
			<div class="title left"></div>
			<div class="title body <?= $close ?>"><?= HTML::anchor('organization/event?mode=1', 'งานอาสาที่จบไปแล้ว'); ?></div>
			<div class="title right"></div>
			<div style="clear:both"></div>
			<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;"><?= count($events) ?></span><?= HTML::anchor('event/create', 'สร้างงานอาสาใหม่', array('class'=>'button')); ?></p>
			<? if ($mode != '1' ) : ?>
				<?= Form::open('event/remove', array('enctype' => 'multipart/form-data')); ?>
          
                <div id="selection">
                
                <?= Form::checkbox('', '', false, array('id' => 'checkall', 'onChange' => 'check_all()')) ?>
                 เลือกทั้งหมด
                <?= Form::submit(NULL, 'ลบ'); ?>
               </div>
            <? endif ?>	
            <? if ($mode == '1' ) : // closed event ?>
            <table>
				<tbody><tr>
					<th>งานอาสา</th>
					<th>ต้องการจากอาสา</th>
					<th>จำนวนรับสมัคร</th>
					<th>จำนวนอาสาที่ไปจริง</th>
					<th>เขียนคำขอบคุณ</th>
				</tr>
               	
                <? foreach($events as $event) : ?>
                  <?= Form::open('event/addjoined/'.$event->id, array('enctype' => 'multipart/form-data')); ?>	
                    <tr>
                       
                        <td><?= HTML::anchor('event/view/'.$event->id, $event->name) ?></td>
                        <td><?=  $event->time_cost ?> ชม.</td>
                        <td><?=  $event->volunteer_need_count ?> คน</td>
                        <td><?= Form::input('value', $event->volunteer_joined); ?>  <?= Form::submit(NULL, 'บันทึก'); ?></td>
                        <td><?= HTML::anchor('event/view/'.$event->id, 'เขียน') ?></td>                    
                   </tr>
                 <?= Form::close(); ?>	
                <? endforeach ?>
           	
             </table>
            <? else : ?>
			<table>
				<tbody><tr>
					<th></th>
					<th>งานอาสา</th>
					<th>ต้องการจากอาสา</th>
					<th>จำนวนรับสมัคร</th>
					<th>ตัวเลือก</th>
				</tr>
				
                <? foreach($events as $event) : ?>
                <tr>
					 <td><?= Form::checkbox($event->id, $event->id, false, array('id' => 'event')) ?></td>
                     <td><?= HTML::anchor('event/view/'.$event->id, $event->name) ?></td>
					<td><?=  $event->time_cost ?> ชม.</td>
					<td><?=  $event->volunteer_need_count ?> คน</td>
                    <td><?= HTML::anchor('event/edit/'.$event->id, 'แก้ไข') ?>
                    	<?= HTML::anchor('event/approve/'.$event->id, 'ดูอาสาสมัคร') ?>
						<?= HTML::anchor('#', 'ปิดงาน', array('onclick' => "var answer = confirm ('ก่อนปิดงานกรุณาเขียนคำขอบคุณอาสาในหน้างานอาสา และทำการอัพโหลดรูปงานอาสาด้วยครับ หลังจากคุณสั่งปิดงานแล้ว ระบบจะทำการส่งเมล์ไปแจ้งอาสาให้เข้ามาดูคำขอบคุณของคุณ คุณแน่ใจหรือที่จะปิดงาน?') 
if (answer) window.location='".url::base()."event/closed/".$event->id."'") ); ?></td>
				</tr>
                <? endforeach ?>
				
			<? endif ?>
			</tbody></table>
            <? if ($mode != '1' ) : ?>
             </form>
            <? endif ?>
		</div>
		
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>

<script>
function check_all(){
	if( $('#checkall').is(':checked') )
	{	
		$("input:checkbox[id=event]").each(function()
		{
			$(this).prop("checked", true)
		});	
	}
	else
	{
		$("input:checkbox[id=event]").each(function()
		{
			$(this).prop("checked", false)
		});
	}
}
</script>