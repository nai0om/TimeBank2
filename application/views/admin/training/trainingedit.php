<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>
<h2>แก้ไขรายละเอียด</h2>

<?= Form::open('admin/edittraining/'.$training->id, array('enctype' => 'multipart/form-data')); ?>
    <?php include Kohana::find_file('views', 'admin/training/trainingform') ?>  
    <input type="submit" value="************บันทึกการเปลี่ยนแปลง************">
<?= Form::close(); ?>
<p></p>
 <label><b>----------------------------------------------------------------------------------------------------<br>รูปประกอบ (เพิ่มเติม / แก้ไข)</b></label> <br />
 
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
<p id='subimage'>
	
</p>
    <input type="button" onclick="addInput()" name="add" value="เพิ่มรูปประกอบ" /><br /><br />
     <input type="submit" value="บันทึกการเปลี่ยนแปลง (เฉพาะรูปประกอบ)" />
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

</div>
</div>