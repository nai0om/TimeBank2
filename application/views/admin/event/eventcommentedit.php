<div id="home">
  <div id="main" role="main">
<?php include Kohana::find_file('views', 'admin/menus') ?>

<?= Form::open('admin/eventcommentedit/'.$comment->id, array('enctype' => 'multipart/form-data')); ?>

    id	: <?= $comment->id  ?><br /> 
    user_id  : <?= $comment->user_id  ?><br /> 
    organization_id	: <?= $comment->organization_id  ?><br /> 
    ip	: <?= $comment->ip  ?><br /> 
    <label>comment</label>
    <?= Form::input('comment', $comment->comment ); ?> <br />   
<input type="submit" value="แก้ไข " />


<?= Form::close(); ?>
</div>
</div>