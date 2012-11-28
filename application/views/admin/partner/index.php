<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<h1><?= HTML::anchor('admin/add_partner', '<strong>+ เพิ่มภาคคี</strong>'); ?> </h1>

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>		 	 		 	 		
    <th>ชื่อ</th>	 
    <th>ว็บไซต์</th>
    <th style="width:150px">รูป</th>
    <th>ลบ</th>
</tr>
<? foreach ($partners as $partner) :?>
    <tr>
        <td ><?= $partner->alias; ?></td>
        <td ><?= $partner->link; ?></td>
        <td ><img style="max-width:100px; max-height:100px;" src="<?= url::base().'media/upload/'.$partner->image;  ?>"/></td>
        <td><strong>  <?= HTML::anchor('admin/remove_partner/'.$partner->id, 'ลบ'); ?></strong> </a></td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>