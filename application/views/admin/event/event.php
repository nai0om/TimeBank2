<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
<th> ตัวเลือก</th>
<th> id</th>
<th> ชื่อกิจกรรม</th>
<th> เริ่ม</th>
<th> จบ</th>
<th> องค์กร</th>
<th> สถานะการเปิดรับสมัคร</th>

<th> จำนวนอาสาที่เปิดรับ</th>
<th> เวลาที่ต้องใช้ / คน</th>
<th> อาสาที่เข้าร่วมงานจริง (องกรณ์ใส่ตอนปิดงาน)</th>
</tr>
<? foreach ($events as $event ) :?>
    <tr>
    <td>
		<?= HTML::anchor('admin/eventedit/'.$event->id, '<strong>แก้ไข</strong>'); ?>  <br />
        <?= HTML::anchor('admin/eventdelete/'.$event->id, '<strong>ลบงานอาสา</strong>'); ?>  <br />
   		<?= HTML::anchor('admin/eventuser/'.$event->id, '<strong>ดูอาสา</strong>'); ?>  <br />
        <?= HTML::anchor('admin/eventimage/'.$event->id, '<strong>รูปภาพ</strong>'); ?>   <br />
        <?= HTML::anchor('admin/eventcomment/'.$event->id, '<strong>comment</strong>'); ?>  <br />
    </td> 
    <td><?= $event->id ?></td>
    <td><?= HTML::anchor('event/view/'.$event->id, $event->name); ?></td>
    <td><?= $event->volunteer_begin_date ?></td>
    <td><?= $event->volunteer_end_date ?></td>
    <td><?= $event->organization_id ?></td>
    <td><?= $event->status ?></td>

    <td><?= $event->volunteer_need_count ?></td>
    <td><?= $event->time_cost ?></td>
    <td><?= $event->volunteer_joined ?></td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>