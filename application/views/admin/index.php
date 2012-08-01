 <h1>Admin Page (Unverified organizations)</h1>
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
