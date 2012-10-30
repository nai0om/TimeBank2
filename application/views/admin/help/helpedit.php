<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>
<h2>แก้ไขรายละเอียด</h2>

<?= Form::open('admin/edithelp/'.$help->id, array('enctype' => 'multipart/form-data')); ?>
    <?php include Kohana::find_file('views', 'admin/help/helpform') ?>  
    <input type="submit" value="บันทึกการเปลี่ยนแปลง" />
<?= Form::close(); ?>
</div>
</div>

