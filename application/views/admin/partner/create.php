<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
<?php include Kohana::find_file('views', 'admin/menus') ?>
<h2>เพิ่ม "ภาคี"</h2>

<?= Form::open('admin/add_partner', array('enctype' => 'multipart/form-data', 'id' => 'createtraining', "autocomplete" => "on")); ?>
   
  <?php include Kohana::find_file('views', 'admin/partner/form') ?>
	<input type="submit" value="==เพิ่มภาคี==" />
    
<? Form::close(); ?>



</div>
</div>