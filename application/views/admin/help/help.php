<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<h1><?= HTML::anchor('admin/createhelp', '<strong>สร้าง help</strong>'); ?> </h1>

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
    <th WIDTH="10">id</th>		 	 		 	 		
    <th WIDTH="10">title</th>	 			 	 	 					 
    <th WIDTH="10">content</th>		 	 	 						 
    <th WIDTH="10">created</th>
    <th>edit</th>
    <th>Delete</th>
</tr>
<? foreach ($helps as $help ) :?>
    <tr>
        <td WIDTH="10"><?=  $help->id; ?></td>
        <td WIDTH="10"><?= HTML::anchor('news#'.$help->id, '<strong>'.$help->topic.'</strong>'); ?></td>
        <td WIDTH="10"><?=  $help->message; ?></td>
        <td WIDTH="10"><?=  $help->timestamp; ?></td>
        <td><?= HTML::anchor('admin/edithelp/'.$help->id, '<strong>แก้ไข</strong>'); ?></td> 
        <td><?= HTML::anchor('admin/deletehelp/'.$help->id, '<strong>ลบ</strong>'); ?> </td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>