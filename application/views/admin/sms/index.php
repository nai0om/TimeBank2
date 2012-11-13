<?
$times = array();
$time = strtotime("00:00");
$times["00:00:00"] = date("H:i",$time);
for($i = 1;$i < 48;$i++) {
	$time = strtotime("+ 30 minutes",$time);
	$key = date("H:i",$time);
	$times[$key.':00'] = date("H:i",$time);
}
?>

<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

    <p>
    <h3>ส่งข่าวสารทาง SMS ให้ อาสาสมัคร</h3>  
		<?= Form::open('admin/add_sms'); ?>
        <div style="float:left; width:700px">
            <div style="float:left;width:340px;" >
          
             <?= Form::textarea('message', '', array('id' => 'message', 'onkeyup' => 'Ontextchange()')); ?>
              <label >จำนวนทั้งหมด :</label> <label id="count">0</label><label > ตัวอักษร</label>
               <br />
                <a>หากข้อความเป็นอังกฤษล้วน 160 char = 1 message หากมีภาษาไทยบนด้วย 70 char = 1 message</a>
           </div> 
           <label >เลือกวันเวลา :</label> 
			<?= Form::input('send_time', '', array('class' => 'datepicker')); ?>
            <?= Form::select('begin_time', $times); ?><br />
            <a>หากเลือกเวลาก่อน ปัจจุบันระบบจะทำการส่งทั้นที่</a>
           
        </div>
        <div>
        <?= Form::submit('approve', 'ส่ง', array('style' => 'width:80px;height:80px')); ?>
        </div>
        <?= Form::close(); ?>
    </p>
	

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
    <th>id</th>		 	 		 	 		
    <th>ข้อความ</th>	 			 	 	 					 						 
    <th>กำหนดส่ง</th>
    <th>status</th>
    <th>ส่งแล้วเวลา</th>
    <th>ตัวเลือก</th>
</tr>
<? foreach ($smses as $sms ) :?>
    <tr>
        <td ><?=  $sms->id; ?></td>
        <td><?=  $sms->message; ?></td>
        <td><?=  $sms->send_time; ?></td>
        <td><?=  ($sms->status == 1) ? 'ส่งแล้ว' : '-' ?></td>
        <td><?=  $sms->sent_time; ?></td>
        <td ><?= HTML::anchor('admin/remove_sms/'.$sms->id, 'ลบ'); ?></td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>

<script>
function Ontextchange()
{
	$('#count').text($('#message').val().length);
}
</script>