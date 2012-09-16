<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
<?php include Kohana::find_file('views', 'admin/menus') ?>
<h2>สร้างง training</h2>

<?= Form::open('admin/createtraining', array('enctype' => 'multipart/form-data', 'id' => 'createtraining', "autocomplete" => "on")); ?>
    <?php include Kohana::find_file('views', 'admin/training/trainingform') ?>
    <label>รูปเพิ่มเติม</label>
  	<div id='subimage'/>
    <input type="button" onclick="addInput()" name="add" value="Add small image" /><br />
    <input type="submit" value="สร้าง" />
    
<? Form::close(); ?>


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