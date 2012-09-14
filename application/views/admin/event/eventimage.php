<div id="home">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
<th> option </th>
<th> image</th>
<th> desciption</th>
<th> highlight </th>
<th> timestamp</th>
</tr>
<? foreach ($images->find_all() as $image ) :?>
    <tr>
    <td>
		<?= HTML::anchor('admin/eventimageedit/'.$image->id, '<strong>แก้ไข</strong>'); ?>  <br />
   		<?= HTML::anchor('admin/eventimagedelete/'.$image->id, '<strong>ลบ</strong>'); ?>  <br />
    </td> 
    <td>    
        <?php if ($image->image != ''): ?>
        	<img src="<?= url::base().'media/upload/events/'.$image->image; ?>" style="max-height: 150px; max-width:150px;" />
        <? endif ?>
    </td>
    <td><?= $image->description ?></td>
    <td><?= $image->highlight ?></td>
    <td><?= $image->timestamp ?></td>
	</tr>
<? endforeach ?>
</table>

</div>
</div>
