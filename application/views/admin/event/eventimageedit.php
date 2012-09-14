<div id="home">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<?= Form::open('admin/eventimageedit/'.$image->id, array('enctype' => 'multipart/form-data')); ?>

     <?php if ($image->image != ''): ?>
        	<img src="<?= url::base().'media/upload/events/'.$image->image; ?>" /> <br />
        <? endif ?>
		<?= Form::file('image') ?>  <br />
    
    <label>description</label>
    <?= Form::input('description', $image->description ); ?> <br />   
    <label>highlight</label>
    <?= Form::input('highlight', $image->highlight); ?> <br /> 
<input type="submit" value="แก้ไข"/>


<?= Form::close(); ?>

</div>
</div>
