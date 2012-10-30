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

A = noti_eventrecommended<br> 
B = noti_eventapproved<br>  
C = noti_almosteventdate<br>  
D = noti_eventthank<br>  
E = noti_sms_eventapproved<br>  
F = noti_sms_almosteventdate<br>  
G = noti_sms_news<br />

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
<th width="152">ชื่อที่ใช้แสดง + รายละเอียด</th>
<th>ข้อมูลส่วนตัว</th>
<th width="450">รูป/ทักษะ/ความสนใจ</th>
</tr>
<? foreach ($users as $user ) :?>
    <tr>
    <td><strong><?= $user->displayname  ?></strong>      
      <br />
      <br />
      id:<?= $user->id ?>
        <br />
        ประเภทสมาชิก:
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
	  <?= HTML::anchor('admin/userdelete/'.$user->id, '<strong>ลบอาสา</strong>'); ?>
      |<?= HTML::anchor('admin/useredit/'.$user->id, '<strong>แก้ไข</strong>'); ?>
      | <?= HTML::anchor('admin/userrecord/'.$user->id, '<strong>รายการเดินบัญชีเวลา</strong>'); ?>
      | <?= HTML::anchor('admin/userevent/'.$user->id, '<strong>งานอาสา</strong>'); ?>
      | <?= HTML::anchor('admin/userinbox/'.$user->id, '<strong>การแจ้งเตือน</strong>'); ?>
      <br />
      <br />
      ชื่อ-สกุล (ชื่อเล่น):
<?= $user->first_name  ?> <?= $user->last_name  ?> 
      <?php if ($user->profile_image != ''): ?>  (<?= $user->nickname  ?>)<? endif ?>
      <br />
      เพศ:
      <?= $user->sex  ?>
      <br />
โทร.: 
<?= $user->phone  ?>
<br /> 
      อีเมล: 
      <?= $user->email  ?>
      <br />
      วันเกิด: 
      <?= $user->birthday  ?>
      <br />
      ที่อยู่:
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
      ทักษะ: 
      <?= $user->skills    ?><br />

      สิ่งที่สนใจ/ใส่ใจ: 
      <?= $user->interest_tags     ?>
      <br />
    </td>
    </tr>
<? endforeach ?>
</table>
</div>
</div>