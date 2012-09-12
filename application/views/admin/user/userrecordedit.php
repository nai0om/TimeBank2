<?php include Kohana::find_file('views', 'admin/menus') ?>

<?= Form::open('admin/userrecordedit/'.$record['id'] , array('enctype' => 'multipart/form-data')); ?>
    <label>ชัวโมง</label>
    <?= Form::input('hour', $record['hour']  ); ?>    <br />
    <label>หมายเหตุ</label>
    <?= Form::input('description', $record['description'] ); ?> <br />   
<input type="submit" value="แก้ไข">


<?= Form::close(); ?>
