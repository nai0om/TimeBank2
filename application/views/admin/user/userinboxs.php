<div id="home">
  <div id="main" role="main">
<?php include Kohana::find_file('views', 'admin/menus') ?>


<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr> 	
    <th> ตัวเลือก</th>
    <th> id </th>
    <th> is_removed </th>
    <th> is_read </th>
    <th> title </th>
    <th>message</th>
    <th>send_status</th>
    <th>created</th>
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