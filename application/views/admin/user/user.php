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
<p>การแจ้งเตือนทางอีเมล และ SMS</p>
A = noti_eventrecommended  B = noti_eventapproved   C = noti_almosteventdate  D = noti_eventthank<br>  
E = noti_sms_eventapproved   F = noti_sms_almosteventdate   G = noti_sms_news<br />
<p>ประเภทสมาชิก: 0 = อาสา, 1 = องค์กร, 2 = Admin (ผู้ดูแลระบบ) </p>

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
<th width="152">ชื่อที่ใช้แสดง + รายละเอียด</th>
<th>ข้อมูลส่วนตัว</th>
<th width="450">รูป/ทักษะ/ความสนใจ</th>
</tr>
<? foreach ($users as $user ) :?>
    <tr>
    <td><strong><?= HTML::anchor('user/view/'.$user->id,  $user->displayname); ?> </strong>      
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
      <a style="cursor:pointer" onclick="OnDelete('<?= url::base().'admin/userdelete/'.$user->id ?>')"><strong>ลบอาสา</strong> </a>
      |<?= HTML::anchor('admin/useredit/'.$user->id, '<strong>แก้ไข</strong>'); ?>
      | <?= HTML::anchor('admin/userrecord/'.$user->id, '<strong>รายการเดินบัญชีเวลา</strong>'); ?>
      | <?= HTML::anchor('admin/userevent/'.$user->id, '<strong>งานอาสา</strong>'); ?>
      | <?= HTML::anchor('admin/userinbox/'.$user->id, '<strong>การแจ้งเตือน (ทางเว็บไซต์) </strong>'); ?>
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
      ทักษะ: 
      <? 
	  	$normal_skill = "";
		$special_skill = "";
		timebankhelper::build_skill_for_display($user->skills, $normal_skill, $special_skill, true);
		echo $normal_skill.','.$special_skill;
	  ?>
      <br />

      สิ่งที่สนใจ/ใส่ใจ: 
      <?= $user->interest_tags     ?>
      <br />
    </td>
    </tr>
<? endforeach ?>
</table>
</div>
</div>