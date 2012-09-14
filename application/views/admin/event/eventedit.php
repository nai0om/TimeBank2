<?php include Kohana::find_file('views', 'admin/menus') ?>

<?= Form::open('admin/eventedit/'.$event->id , array('enctype' => 'multipart/form-data')); ?>

	<?php include Kohana::find_file('views', 'event/form') ?>
    <label>status</label>
    <?= Form::input('status', $event->status); ?><br />

    <label>message</label>
    <?= Form::input('message', $event->message, array('style' => 'width:700px;')); ?>    <br />

    <label>volunteer_joined</label>
    <?= Form::input('volunteer_joined', $event->volunteer_joined); ?>    <br />
 
<input type="submit" value="แก้ไข">
<?= Form::close(); ?>
