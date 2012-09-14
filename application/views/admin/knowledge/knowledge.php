<div id="home">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<h1><?= HTML::anchor('admin/createknowledge', '<strong>สร้าง ความรู้</strong>'); ?> </h1>

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
    <th WIDTH="10">id</th>		 	 		 	 		
    <th WIDTH="10">title</th>	 			 	 	 					 
    <th WIDTH="10">content</th>		 	 	 						 
    <th WIDTH="10">created</th>
    <th>edit</th>
    <th>Delete</th>
</tr>
<? foreach ($knowledges as $knowledge ) :?>
    <tr>
        <td WIDTH="10"><?=  $knowledge->id; ?></td>
        <td WIDTH="10"><?= HTML::anchor('news/view/'.$knowledge->id, '<strong>'.$knowledge->title.'</strong>'); ?></td>
        <td WIDTH="10"><?=  $knowledge->content; ?></td>
        <td WIDTH="10"><?=  $knowledge->timestamp; ?></td>
        <td><?= HTML::anchor('admin/editknowledge/'.$knowledge->id, '<strong>แก้ไข</strong>'); ?></td> 
        <td><?= HTML::anchor('admin/deleteknowledge/'.$knowledge->id, '<strong>ลบ</strong>'); ?> </td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>