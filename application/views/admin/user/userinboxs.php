<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
<?php include Kohana::find_file('views', 'admin/menus') ?>


<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr> 	
    <th> ตัวเลือก</th>
    <th> id </th>
    <th> การลบ <br>(1= ถูกลบแล้ว) </th>
    <th> การอ่าน <br>(1 = ได้อ่านแล้ว) </th>
    <th> หัวเรื่อง </th>
    <th>ข้อความ</th>
    <th>send_status <br>(ไม่ต้องสนใจ)</th>
    <th>วัน/เวลาที่ส่ง</th>
</tr>
<? foreach ($inboxes as $inbox ) :?>
    <tr>
    <td>
		<?= HTML::anchor('admin/userinboxedit/'. $inbox->id, '<strong>แก้ไข</strong>'); ?> 
    </td> 
    <td><?= $inbox->id  ?></td>
    <td><?= $inbox->is_removed ?></td>
    <td><?= $inbox->is_read ?></td>
    <td><?= $inbox->title?></td>
    <td><?= $inbox->message  ?></td>
    <td><?= $inbox->send_status  ?></td>
    <td><?= $inbox->created  ?></td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>