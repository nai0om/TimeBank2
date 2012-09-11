<?php include Kohana::find_file('views', 'admin/menus') ?>
<h2>แก้ไข้ training</h2>

<?= Form::open('admin/edittraining/'.$training->id, array('enctype' => 'multipart/form-data')); ?>
    <?php include Kohana::find_file('views', 'admin/trainingform') ?>  
    <input type="submit" value="แก้ไข">
<?= Form::close(); ?>

 <label>รูปเพิ่มเติม</label> <br />
 
 <? foreach($training->images->find_all() as $image) : ?>
 <p>
 	<a href="<?= url::base().'media/upload/training/'.$image->image ?>" target="_blank"><img style="max-width:107px; border:0px" src="<?= url::base().'media/upload/training/'.$image->image  ?>"></a> <br />
    <?= HTML::anchor('admin/trainingdeleteimage/'.$training->id.'?id='.$image->id, '<strong>ลบ</strong>'); ?> 
 </p>
		
 <? endforeach ?>
 <br />
 <br />
 <br />
 <br />
 
<?= Form::open('admin/trainingaddimage/'.$training->id, array('enctype' => 'multipart/form-data')); ?>
<div id='subimage'/>

    <input type="button" onclick="addInput()" name="add" value="เพิ่มรูป" /><br /><br />
     <input type="submit" value="อัพเดทรูปเสริม">
<?= Form::close(); ?>

<script language="javascript">
	fields = 0;
	function addInput() {
	//if (fields != 10) {
	document.getElementById('subimage').innerHTML = "<input type='file' value='' name=sub_"+ fields +" /><br />" + document.getElementById('subimage').innerHTML;
	fields += 1;
//	} else {
	//document.getElementById('subimage').innerHTML += "<br />Only 10 upload fields allowed.";
	//document.form.add.disabled=true;
	//}
	}
</script>