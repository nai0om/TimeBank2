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
              <label >จำนวนตัวอักษรทั้งหมด :</label> <label id="count">0</label><label > ตัวอักษร</label>
               <br />
                <a>ข้อความที่เป็นภาษาอังกฤษล้วน 160 ตัวอักษร = 1 ข้อความ <br>ข้อความที่มีภาษาไทยด้วย 70 ตัวอักษร = 1 ข้อความ</a>
           </div> 
           <label >เลือกวันเวลา :</label> 
			<?= Form::input('send_time', '', array('class' => 'datepicker')); ?>
            <?= Form::select('begin_time', $times); ?><br />
            <p></p>
			<a>ระบบจะส่งข้อความระหว่างเวลา 0800 - 2100 น. หากเลือกเวลาส่งหลัง 2100 ระบบจะส่งข้อความให้ในเวลา 0800 น. ของวันถัดไป
			<p>และหากเลือกเวลาก่อนปัจจุบัน ระบบจะทำการส่งทันที</p></a>
           
        </div>
        <div>
        <?= Form::submit('approve', 'ส่ง', array('style' => 'width:80px;height:80px')); ?>
        </div>
        <?= Form::close(); ?>
    </p>
	

<table style="table-layout: fixed; width: 100%"  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
    <th>id</th>		 	 		 	 		
    <th style="width:400px" >ข้อความ</th>	 			 	 	 					 						 
    <th>กำหนดส่ง</th>
    <th>สถานะการส่ง</th>
    <th>เวลาส่ง</th>
    <th>ตัวเลือก</th>
</tr>
<? foreach ($smses as $sms ) :?>
    <tr>
        <td ><?=  $sms->id; ?></td>
        <td  style="word-wrap: break-word"><?=  $sms->message; ?></td>
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