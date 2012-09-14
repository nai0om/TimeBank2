<div id="home">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
<th> ตัวเลือก</th>
<th> id</th>
<th> signup_begin_date</th>
<th> signup_end_date</th>
<th> volunteer_begin_date</th>
<th> volunteer_end_date</th>
<th> signup_begin_time</th>
<th> signup_end_time</th>
<th> volunteer_begin_time</th>
<th> volunteer_end_time</th>
<th> organization_id</th>
<th> location_name</th>
<th> location_district</th>
<th> location_province</th>
<th> location_postcode</th>
<th> status</th>
<th> name</th>
<th> phone</th>
<th> contractor_name</th>
<th> project_name</th>
<th> volunteer_need_count</th>
<th> time_cost</th>
<th> detail</th>
<th> travel_detail</th>
<th> inquiry_detail</th>
<th> is_need_expense</th>
<th> expense_detail</th>
<th> image</th>
<th> skills</th>
<th> languates</th>
<th> technical</th>
<th> days</th>
<th> timestamp</th>
<th> tags</th>
<th> message</th>
<th> volunteer_joined</th>
</tr>
<? foreach ($events as $event ) :?>
    <tr>
    <td>
		<?= HTML::anchor('admin/eventedit/'.$event->id, '<strong>แก้ไข</strong>'); ?>  <br />
   		<?= HTML::anchor('admin/eventuser/'.$event->id, '<strong>ดู อาสา</strong>'); ?>  <br />
        <?= HTML::anchor('admin/eventimage/'.$event->id, '<strong>รูปภาพ</strong>'); ?>   <br />
        <?= HTML::anchor('admin/eventcomment/'.$event->id, '<strong>comment</strong>'); ?>  <br />
    </td> 
    <td><?= $event->id ?></td>
    <td><?= $event->signup_begin_date ?></td>
    <td><?= $event->signup_end_date ?></td>
    <td><?= $event->volunteer_begin_date ?></td>
    <td><?= $event->volunteer_end_date ?></td>
    <td><?= $event->signup_begin_time ?></td>
    <td><?= $event->signup_end_time ?></td>
    <td><?= $event->volunteer_begin_time ?></td>
    <td><?= $event->volunteer_end_time ?></td>
    <td><?= $event->organization_id ?></td>
    <td><?= $event->location_name ?></td>
    <td><?= $event->location_district ?></td>
    <td><?= $event->location_province ?></td>
    <td><?= $event->location_postcode ?></td>
    <td><?= $event->status ?></td>
    <td><?= $event->name ?></td>
    <td><?= $event->phone ?></td>
    <td><?= $event->contractor_name ?></td>
    <td><?= $event->project_name ?></td>
    <td><?= $event->volunteer_need_count ?></td>
    <td><?= $event->time_cost ?></td>
    <td><?= $event->detail ?></td>
    <td><?= $event->travel_detail ?></td>
    <td><?= $event->inquiry_detail ?></td>
    <td><?= $event->is_need_expense ?></td>
    <td><?= $event->expense_detail ?></td>
    <td><?= $event->image ?></td>
    <td><?= $event->skills ?></td>
    <td><?= $event->languates ?></td>
    <td><?= $event->technical ?></td>
    <td><?= $event->days ?></td>
    <td><?= $event->timestamp ?></td>
    <td><?= $event->tags ?></td>
    <td><?= $event->message ?></td>
    <td><?= $event->volunteer_joined ?></td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>