<?php include Kohana::find_file('views', 'admin/menus') ?>
<h2>แก้ไข้ knowledge</h2>

<?= Form::open('admin/editknowledge/'.$knowledge->id, array('enctype' => 'multipart/form-data')); ?>
    <?php include Kohana::find_file('views', 'admin/knowledgeform') ?>  
    <input type="submit" value="แก้ไข">
<?= Form::close(); ?>


