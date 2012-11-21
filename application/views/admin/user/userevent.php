<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
<?php include Kohana::find_file('views', 'admin/menus') ?>


<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
<th> ตัวเลือก </th>
<th>กิจกรรม</th>
<th>ตอบรับเข้าร่วมงาน <br>1 = ได้รับการตอบรับ <br>0 = ยังไม่ได้ตอบรับ</th>
<th>ยืนยันการใช้เวลา <br>1 = อาสาได้ยืนยันการใช้เวลาแล้ว <br>0 = ยังไม่ได้ยืนยัน</th>
</tr>
<? foreach ($records as $record ) :?>
	<? if($record['event_name'] != '') : ?>
        <tr>
        <td>
            <?= HTML::anchor('admin/usereventedit?u='.$record['user_id'].'&e='.$record['event_id'], '<strong>แก้ไข</strong>'); ?>
            <?= HTML::anchor('admin/usereventremove?u='.$record['user_id'].'&e='.$record['event_id'], '<strong>ลบ</strong>'); ?>        
        </td> 
        <td>  <?= HTML::anchor('event/view/'.$record['event_id'], $record['event_name']); ?></td>
        <td><?= $record['status']  ?></td>
        <td><?= $record['time_approve']  ?></td>
        </tr>
    <? endif ?>
<? endforeach ?>
</table>

</div>
</div>