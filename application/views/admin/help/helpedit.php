<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>
<h2>แก้ไข้ help</h2>

<?= Form::open('admin/edithelp/'.$help->id, array('enctype' => 'multipart/form-data')); ?>
    <?php include Kohana::find_file('views', 'admin/help/helpform') ?>  
    <input type="submit" value="แก้ไข" />
<?= Form::close(); ?>
</div>
</div>

