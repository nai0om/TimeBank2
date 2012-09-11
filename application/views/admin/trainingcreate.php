<?php include Kohana::find_file('views', 'admin/menus') ?>
<h2>สร้างง training</h2>

<?= Form::open('admin/createtraining', array('enctype' => 'multipart/form-data', 'id' => 'createtraining', "autocomplete" => "on")); ?>
    <?php include Kohana::find_file('views', 'admin/trainingform') ?>
    <label>รูปเพิ่มเติม</label>
  	<div id='subimage'/>
    <input type="button" onclick="addInput()" name="add" value="Add small image" /><br />
    <input type="submit" value="สร้าง">
    
<? Form::close(); ?>


<script language="javascript">
	fields = 0;
	function addInput() {
	//if (fields != 10) {
	document.getElementById('subimage').innerHTML = "<input type='file' value='' name=sub_"+ fields +" /><br />" + document.getElementById('subimage').innerHTML ;
	fields += 1;
//	} else {
	//document.getElementById('subimage').innerHTML += "<br />Only 10 upload fields allowed.";
	//document.form.add.disabled=true;
	//}
	}
</script>