<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
<?php include Kohana::find_file('views', 'admin/menus') ?>


<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
<th> ตัวเลือก </th>
<th>id</th>
<th>email</th>
<th>password</th>
<th>displayname</th>
<th>noti_eventrecommended</th>
<th>noti_eventapproved</th>
<th>noti_almosteventdate</th>
<th>noti_eventthank</th>
<th>noti_sms_eventapproved</th>
<th>noti_sms_almosteventdate</th>
<th>noti_sms_news</th>
<th>nickname</th>
<th>role</th>
<th>first_name</th>
<th>last_name</th>
<th>birthday</th>
<th>phone</th>
<th>address</th>
<th>profile_image</th>
<th>quote</th>
<th>description</th>
<th>created</th>
<th>sex</th>
<th>website</th>
<th>skills</th>
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
    <td><?= $user->password  ?></td>
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
    <td><?= $user->birthday  ?></td>
    <td><?= $user->phone  ?></td>
    <td><?= $user->address  ?></td>
    <td>    
        <?php if ($user->profile_image != ''): ?>
        	<img src="<?= url::base().'media/upload/events/'.$user->profile_image; ?>" style="max-height: 150px; max-width:150px;" />
        <? endif ?>
    </td>
    <td><?= $user->quote  ?></td>
    <td><?= $user->description  ?></td>
    <td><?= $user->created  ?></td>
    <td><?= $user->sex  ?></td>
    <td><?= $user->website  ?></td>
    <td><?= $user->skills  ?></td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>