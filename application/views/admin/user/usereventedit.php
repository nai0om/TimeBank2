<?php include Kohana::find_file('views', 'admin/menus') ?>

<?= Form::open('admin/usereventedit/', array('enctype' => 'multipart/form-data')); ?>
   <label>user id</label>  <?= $event_id ?><br />
    <?= Form::hidden('event_id', $event_id  ); ?>   

    <label>event id</label>  <?= $user_id ?><br />
    <?= Form::hidden('user_id', $user_id  ); ?>   
    
    <label>status</label>
    <?= Form::input('status', $record['status'] ); ?> <br />   
    <label>time_approve</label>
    <?= Form::input('time_approve', $record['time_approve'] ); ?> <br /> 
<input type="submit" value="แก้ไข">


<?= Form::close(); ?>
