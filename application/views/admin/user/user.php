<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
<?php include Kohana::find_file('views', 'admin/menus') ?><br />

A = noti_eventrecommended, 
B = noti_eventapproved, 
C = noti_almosteventdate, 
D = noti_eventthank, 
E = noti_sms_eventapproved, 
F = noti_sms_almosteventdate, 
G = noti_sms_news<br />

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
<th> ตัวเลือก </th>
<th>id</th>
<th>email</th>
<th>displayname</th>
<th>A</th>
<th>B</th>
<th>C</th>
<th>D</th>
<th>E</th>
<th>F</th>
<th>G</th>
<th>nickname</th>
<th>role</th>
<th>first_name</th>
<th>last_name</th>
<th>profile_image</th>
<th>sex</th>
</tr>
<? foreach ($users as $user ) :?>
    <tr>
    <td>
		<?= HTML::anchor('admin/useredit/'.$user->id, '<strong>แก้ไข</strong>'); ?> 
   		<?= HTML::anchor('admin/userrecord/'.$user->id, '<strong>record</strong>'); ?> 
        <?= HTML::anchor('admin/userevent/'.$user->id, '<strong>event</strong>'); ?>  
        <?= HTML::anchor('admin/userinbox/'.$user->id, '<strong>inbox</strong>'); ?> 
    </td> 
    <td><?= $user->id ?></td>
    <td><?= $user->email  ?></td>
    <td><?= $user->displayname  ?></td>
    <td><?= $user->noti_eventrecommended  ?></td>
    <td><?= $user->noti_eventapproved  ?></td>
    <td><?= $user->noti_almosteventdate  ?></td>
    <td><?= $user->noti_eventthank  ?></td>
    <td><?= $user->noti_sms_eventapproved  ?></td>
    <td><?= $user->noti_sms_almosteventdate  ?></td>
    <td><?= $user->noti_sms_news  ?></td>
    <td><?= $user->nickname  ?></td>
    <td><?= $user->role  ?></td>
    <td><?= $user->first_name  ?></td>
    <td><?= $user->last_name  ?></td>
    <td>    
      <?php if ($user->profile_image != ''): ?>
      <img src="<?= url::base().'media/upload/events/'.$user->profile_image; ?>" style="max-height: 150px; max-width:150px;" />
      <? endif ?>
    </td>
    <td><?= $user->sex  ?></td>
    </tr>
<? endforeach ?>
</table>
</div>
</div>