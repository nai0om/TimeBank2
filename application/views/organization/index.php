<?= HTML::anchor('company/view/'.$company->id, 'View Company Profile'); ?>
<br />
<?= HTML::anchor('event/create', 'Create event'); ?>

<hr/>
<h2> User added</h2>
<table >
<tr>
	<th>Event</th>
	<th>User</th>
	<th>Time</th>
</tr>
<?php foreach( $user_event as $row ):?>

	<td><?= HTML::anchor('event/view/'.$row['event_id'], $row['event_name']); ?></td>
	<td><?= HTML::anchor('user/view/'.$row['user_id'], $row['user_name']); ?> </td>
	<td><?= $row['timestamp'] ?></td>
</tr>
<?php endforeach; ?>
</table>


<h2> Comment on Events</h2>
<table >
<tr>
	<th>Event</th>
	<th>User</th>
	<th>Time</th>
</tr>
<?php foreach( $coments_update as $row ):?>

	<td><?= HTML::anchor('event/view/'.$row['event_id'], $row['event_name']); ?></td>
	<?php if( $row['user_id'] == 0 ):?>
		<td><?= HTML::anchor('user/view/'.$row['user_id'], $row['user_ip']); ?> </td>
	<?php else:?>
		<td><?= HTML::anchor('user/view/'.$row['user_id'], $row['user_name']); ?> </td>
	<?php endif; ?>
	<td><?= $row['timestamp'] ?></td>
</tr>
<?php endforeach; ?>
</table>