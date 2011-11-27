<h2>Info for company "<?= $company->name; ?>"</h2>
 
<ul>
    <li>Name: <?= $company->name; ?></li>
    <li>Objective: <?= $company->objective; ?></li>
    <li>Detail: <?= $company->detail; ?></li>
    <li>Address: <?= $company->address; ?></li>
    <li>Website: <?= $company->website; ?></li>
    <li>Logo: <img src="<?= url::base().'media/upload/'.$company->logo; ?>" /></li>
</ul>


<br />
<h2>Event list</h2>
<br />
 <table border="1">
  <tr>
	<th>name</th>
	<th>status</th>
	<th>time_cost</th>
	<th>show</th>
  </tr>
<?php foreach ($company->events->find_all() as $event):?>
	<tr>
	<td><?= $event->name ?></td>
	<td><?= $event->status ?></td>
	<td><?= $event->time_cost ?></td>
	<td><?= HTML::anchor('event/view/'.$event->id, 'show'); ?></td>
	</tr>
<? endforeach ?>