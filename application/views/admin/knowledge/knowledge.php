<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<h1><?= HTML::anchor('admin/createknowledge', '<strong>+ สร้าง "ความรู้"</strong>'); ?> </h1>

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
    <th WIDTH="10">id</th>		 	 		 	 		
    <th style="width: 200px;">ชื่อเรื่อง</th>	 			 	 	 					 
    <th style="width: 500px;">เนื่อหา</th>		 	 	 						 
    <th WIDTH="10">วันที่สร้าง</th>
    <th>แก้ไข</th>
    <th>ลบ</th>
</tr>
<? foreach ($knowledges as $knowledge ) :?>
    <tr>
        <td WIDTH="10"><?=  $knowledge->id; ?></td>
        <td WIDTH="10"><?= HTML::anchor('training/download#'.$knowledge->id, '<strong>'.$knowledge->title.'</strong>'); ?></td>
        <td WIDTH="10"><?=  $knowledge->content; ?></td>
        <td WIDTH="10"><?=  $knowledge->timestamp; ?></td>
        <td><?= HTML::anchor('admin/editknowledge/'.$knowledge->id, '<strong>แก้ไข</strong>'); ?></td> 
        <td><?= HTML::anchor('admin/deleteknowledge/'.$knowledge->id, '<strong>ลบ</strong>'); ?> </td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>