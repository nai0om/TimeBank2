<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<h1><?= HTML::anchor('admin/createnews', '<strong>+ สร้าง "ข่าว"</strong>'); ?> </h1>

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
    <th WIDTH="10">id</th>		 	 		 	 		
    <th style="width:650px;">หัวข้อข่าว</th>	 			 	 	 					 
	 	 	 						 
    <th WIDTH="10">วันที่สร้าง</th>
    <th>แก้ไข</th>
    <th>ลบ</th>
</tr>
<? foreach ($news as $new ) :?>
    <tr>
        <td WIDTH="10"><?=  $new->id; ?></td>
        <td WIDTH="10"><?= HTML::anchor('news/view/'.$new->id, '<strong>'.$new->topic.'</strong>'); ?></td>

        <td WIDTH="10"><?=  $new->timestamp; ?></td>
        <td><?= HTML::anchor('admin/editnews/'.$new->id, '<strong>แก้ไข</strong>'); ?></td> 
        <td><a style="cursor:pointer" onclick="OnDelete('<?= url::base().'admin/deletenews/'.$new->id ?>')">
        <strong>ลบ</strong> </a></td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>