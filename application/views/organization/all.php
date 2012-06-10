 <h1> All Company Page </h1>
<?= Form::open('company/search', array('method' => 'get')); ?> 
<?= Form::input('q'); ?>
<?= Form::submit('', 'search'); ?>
<br />
<br />
 <table border="1">
  <tr>
	<th>name</th>
	<th>objective</th>
	<th>website</th>
	<th>show</th>
  </tr>
<?php foreach ($companies as $company):?>
	<tr>
	<td><?= $company->name ?></td>
	<td><?= $company->objective ?></td>
	<td><?= $company->website ?></td>
	<td><?= HTML::anchor('company/view/'.$company->id, 'show'); ?></td>
	</tr>
<? endforeach ?>