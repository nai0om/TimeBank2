<h2>Create event</h2>
<? if ($message) : ?>
    <h3 class="message">
        <?= $message; ?>
    </h3>
<? endif; ?>
 
<?= Form::open('event/create', array('enctype' => 'multipart/form-data')); ?>

<?php include Kohana::find_file('views', 'event/form') ?>

<?= Form::submit('create', 'Create company'); ?>
<?= Form::close(); ?>