<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<?= Form::open('admin/organizationinboxedit/'.$inbox->id, array('enctype' => 'multipart/form-data')); ?>

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

<input type="submit" value="แก้ไข" />


<?= Form::close(); ?>
</div>
</div>