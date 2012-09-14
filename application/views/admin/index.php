<div id="home">
  <div id="main" role="main">
   <h1>Admin Page (Unverified organizations)</h1>
	<?php include Kohana::find_file('views', 'admin/menus') ?>
 <p>
 	<h3> เพิ่มงานอาสา แนะนำ (ใส่ event ID) <h3>
	<?= Form::open('admin/addrecommend'); ?>
    <?= Form::input('1',  (array_key_exists('1', $event)? $event['1']['event_id'] : '')); ?>
    <?= Form::input('2',  (array_key_exists('2', $event)? $event['2']['event_id'] : '')); ?>
    <?= Form::input('3',  (array_key_exists('3', $event)? $event['3']['event_id'] : '')); ?>
    <?= Form::submit(NULL,'update'); ?>
    <?= Form::close(); ?>
  </p>
  
  <p>
 	<h3> เพิ่มบอกเล่าจากใจอาสา (ใส่ comment ID) <h3>
	<?= Form::open('admin/addHighlighComment'); ?>
    <?= Form::input('1',  (array_key_exists('1', $comments)? $comments['1']['comment_id'] : '')); ?>
    <?= Form::input('2',  (array_key_exists('2', $comments)? $comments['2']['comment_id'] : '')); ?>
    <?= Form::input('3',  (array_key_exists('3', $comments)? $comments['3']['comment_id'] : '')); ?>
    <?= Form::submit(NULL,'update'); ?>
    <?= Form::close(); ?>
  </p>
  
 <table border="1">
  <tr>
	<th>name</th>
	<th>objective</th>
	<th>activity</th>
	<th>address</th>
	<th>district</th>
	<th>province</th>
	<th>postcode</th>
	<th>homephone</th>
	<th>fax</th>
	<th>contactperson</th>
	<th>facebook</th>
	<th>twitter</th>
	<th>website</th>
	<th>logo</th>
  </tr>
<?php foreach ($organizations as $organization):?>
	<tr>
	<td><?= $organization->name ?></td>
	<td><?= $organization->objective ?></td>
	<td><?= $organization->activity ?></td>
	<td><?= $organization->address ?></td>
	<td><?= $organization->district ?></td>
	<td><?= $organization->province ?></td>
	<td><?= $organization->postcode ?></td>
	<td><?= $organization->homephone ?></td>
	<td><?= $organization->fax ?></td>
	<td><?= $organization->contactperson ?></td>
	<td><?= $organization->facebook ?></td>
	<td><?= $organization->twitter ?></td>
	<td><?= $organization->website ?></td>
	<td><img src="<?= url::base().'media/upload/organizations/'.$organization->logo; ?>" /></td>
	</tr>
<? endforeach ?>

</table> 
<?= Form::open('admin/approve'); ?>
<select name="organization_id">
<?php foreach ($organizations as $organization) {
	if ( $organization->verified == '0' )
	{
		echo '<option value="'.$organization->id.' ">'.$organization->name.'</option>';
	}
}?>
</select>
<?= Form::submit('approve', 'approve'); ?>
<?= Form::close(); ?>


</div>
</div>