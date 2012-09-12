<?php include Kohana::find_file('views', 'admin/menus') ?>
<h2>แก้ไข้ news</h2>

<?= Form::open('admin/editnews/'.$news->id, array('enctype' => 'multipart/form-data')); ?>
    <?php include Kohana::find_file('views', 'admin/newsform') ?>  
    <input type="submit" value="แก้ไข">
<?= Form::close(); ?>

 <label>รูปเพิ่มเติม</label> <br />
 
 <? foreach($news->images->find_all() as $image) : ?>
 <p>
 	<a href="<?= url::base().'media/upload/news/'.$image->image ?>" target="_blank"><img style="max-width:107px; border:0px" src="<?= url::base().'media/upload/news/'.$image->image  ?>"></a> <br />
    <?= HTML::anchor('admin/newsdeleteimage/'.$news->id.'?id='.$image->id, '<strong>ลบ</strong>'); ?> 
 </p>
		
 <? endforeach ?>
 <br />
 <br />
 <br />
 <br />
 
<?= Form::open('admin/newsaddimage/'.$news->id, array('enctype' => 'multipart/form-data')); ?>
<p id='subimage'>
	
</p>
    <input type="button" onclick="addInput()" name="add" value="เพิ่มรูป" /><br /><br />
     <input type="submit" value="อัพเดทรูปเสริม" />
<?= Form::close(); ?>

<script language="javascript">
	fields = 0;
	function addInput() {
		var subimage = document.getElementById('subimage');//innerHTML += "<input type='file' value='' name=sub_"+ fields +" />";
		var newdiv = document.createElement('input');
		var divIdName = "sub_"+ fields ;
		newdiv.setAttribute('name', divIdName);
		newdiv.setAttribute('type', 'file');
		subimage.appendChild(newdiv);
		subimage.appendChild(document.createElement('br'));
		fields += 1;

	}
</script>