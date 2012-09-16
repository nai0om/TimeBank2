<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<h1><?= HTML::anchor('admin/createnews', '<strong>สร้าง ข่าว</strong>'); ?> </h1>

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
    <th WIDTH="10">id</th>		 	 		 	 		
    <th WIDTH="10">topic</th>	 			 	 	 					 
    <th WIDTH="10">message</th>			 	 	 					 
    <th WIDTH="10">pic</th>			 	 	 	 	 	 		 
    <th WIDTH="10">pic_thm</th>		 	 	 						 
    <th WIDTH="10">created</th>
    <th>edit</th>
    <th>Delete</th>
</tr>
<? foreach ($news as $new ) :?>
    <tr>
        <td WIDTH="10"><?=  $new->id; ?></td>
        <td WIDTH="10"><?= HTML::anchor('news/view/'.$new->id, '<strong>'.$new->topic.'</strong>'); ?></td>
        <td WIDTH="10"><?=  $new->message; ?></td>
        <td WIDTH="10"><?=  $new->pic; ?></td>
        <td WIDTH="10"><?=  $new->pic_thm; ?></td>
        <td WIDTH="10"><?=  $new->timestamp; ?></td>
        <td><?= HTML::anchor('admin/editnews/'.$new->id, '<strong>แก้ไข</strong>'); ?></td> 
        <td><?= HTML::anchor('admin/deletenews/'.$new->id, '<strong>ลบ</strong>'); ?> </td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>