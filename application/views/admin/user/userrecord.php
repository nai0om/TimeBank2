<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
<?php include Kohana::find_file('views', 'admin/menus') ?>


<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
    <th> ตัวเลือก </th>
    <th>ชั่วโมง</th>
    <th>หมายเหตุ</th>
    <th>เวลา</th>
</tr>
<? foreach ($records as $record ) :?>
    <tr>
    <td>
		<?= HTML::anchor('admin/userrecordedit/'.$record['id'], '<strong>แก้ไข</strong>'); ?> 
    </td> 
    <td><?= $record['hour']  ?></td>
    <td><?= $record['description']  ?></td>
    <td><?= $record['timestamp']  ?></td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>