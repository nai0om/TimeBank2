<?php include Kohana::find_file('views', 'admin/menus') ?>


<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
<th> ตัวเลือก </th>
<th>event id</th>
<th>status 1 คือได้ ตอบแล้ว 0 คือยังไม่ได้ตอบรับ</th>
<th>time_approve user ได้ ใส่ เวลาแล้วหรือยัง</th>
<tr>
<? foreach ($records as $record ) :?>
    <tr>
    <td>
		<?= HTML::anchor('admin/usereventedit?u='.$record['user_id'].'&e='.$record['event_id'], '<strong>แก้ไข</strong>'); ?>
        <?= HTML::anchor('admin/usereventremove?u='.$record['user_id'].'&e='.$record['event_id'], '<strong>ลบ</strong>'); ?>  
       
    </td> 
    <td><?= $record['event_id']  ?></td>
    <td><?= $record['status']  ?></td>
    <td><?= $record['time_approve']  ?></td>
	</tr>
<? endforeach ?>
</table>