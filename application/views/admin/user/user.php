<style type="text/css">
<!--
table {table-layout: fixed}
td {
	text-align: left;
	overflow: hidden; 
}
-->
</style>
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
<th width="152">displayname</th>
<th>profile</th>
<th width="450">image</th>
</tr>
<? foreach ($users as $user ) :?>
    <tr>
    <td><strong><?= $user->displayname  ?></strong>      
      <br />
      <br />
      id:<?= $user->id ?>
        <br />
        role:
        <?= $user->role  ?>
        <br />
        <br />
        A=
        <?= $user->noti_eventrecommended  ?>
        , B=
        <?= $user->noti_eventapproved  ?>
        , C=
        <?= $user->noti_almosteventdate  ?>
        , D=
        <?= $user->noti_eventthank  ?>
        ,<br />
E=
<?= $user->noti_sms_eventapproved  ?>
        , F=
        <?= $user->noti_sms_almosteventdate  ?>
        , G=
        <?= $user->noti_sms_news  ?>
      </td>
    <td>
      <?= HTML::anchor('admin/useredit/'.$user->id, '<strong>แก้ไข</strong>'); ?>
      | <?= HTML::anchor('admin/userrecord/'.$user->id, '<strong>record</strong>'); ?>
      | <?= HTML::anchor('admin/userevent/'.$user->id, '<strong>event</strong>'); ?>
      | <?= HTML::anchor('admin/userinbox/'.$user->id, '<strong>inbox</strong>'); ?>
      <br />
      <br />
      name:
<?= $user->first_name  ?> <?= $user->last_name  ?> 
      <?php if ($user->profile_image != ''): ?>  (<?= $user->nickname  ?>)<? endif ?>
      <br />
      sex:
      <?= $user->sex  ?>
      <br />
phone: 
<?= $user->phone  ?>
<br /> 
      email: 
      <?= $user->email  ?>
      <br />
      birthday: 
      <?= $user->birthday  ?>
      <br />
      address:
      <?= $user->address  ?>
<br /></td>
    <td>    
      <?php if ($user->profile_image != ''): ?>
      <img src="<?= url::base().'media/upload/volunteers/'.$user->profile_image; ?>" align="right" style="max-height: 150px; max-width:150px;" />
      <? endif ?>
      quote: 
      <?= $user->quote  ?><br />
      description : 
      <?= $user->description   ?>
      <br />
      skills  : 
      <?= $user->skills    ?><br />

      interest_tags   : 
      <?= $user->interest_tags     ?>
      <br />
    </td>
    </tr>
<? endforeach ?>
</table>
</div>
</div>