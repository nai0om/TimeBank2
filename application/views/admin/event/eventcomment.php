<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
<?php include Kohana::find_file('views', 'admin/menus') ?>

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
    <th> option </th>
    <th> id </th>
    <th> user_id </th>
    <th> organization_id </th>
    <th> ip </th>
    <th> comment </th>
    <th> timestamp </th>
</tr>
<? foreach ($comments->find_all() as $comment ) :?>
    <tr>
      	<td>
			<?= HTML::anchor('admin/eventcommentedit/'.$comment->id, '<strong>แก้ไข</strong>'); ?>  <br />
   			<?= HTML::anchor('admin/eventcommentdelete/'.$comment->id, '<strong>ลบ</strong>'); ?>  <br />
    	</td> 
        <td><?= $comment->id  ?></td>
        <td><?= $comment->user_id  ?></td>
        <td><?= $comment->organization_id  ?></td>
        <td><?= $comment->ip  ?></td>
        <td><?= $comment->comment  ?></td>
        <td><?= $comment->timestamp  ?></td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>