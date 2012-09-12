<?php include Kohana::find_file('views', 'admin/menus') ?>

<?= Form::open('admin/userinboxedit/'.$inbox->user_id, array('enctype' => 'multipart/form-data')); ?>

    <label>title</label>
    <?= Form::input('title', $inbox->title ); ?> <br />   
    
    <label>message</label>
    <?= Form::input('message', $inbox->message ); ?> <br />   
    
    <label>is_removed</label>
    <?= Form::input('is_removed', $inbox->is_removed ); ?> <br />   
    
    <label>is_read</label>
    <?= Form::input('is_read', $inbox->is_read ); ?> <br />   
    
    <label>send_status</label>
    <?= Form::input('send_status', $inbox->send_status ); ?> <br />   

<input type="submit" value="แก้ไข">


<?= Form::close(); ?>
