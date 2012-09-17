<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
<?php include Kohana::find_file('views', 'admin/menus') ?>
<h2>สร้างง ความรู้</h2>

<?= Form::open('admin/createhelp', array('enctype' => 'multipart/form-data', 'id' => 'createtraining', "autocomplete" => "on")); ?>
    <?php include Kohana::find_file('views', 'admin/help/helpform') ?>
    <input type="submit" value="สร้าง" />
    
<? Form::close(); ?>

</div>
</div>