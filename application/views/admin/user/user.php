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
NA = noti_eventrecommended  
NB = noti_eventapproved  
NC = noti_almosteventdate  
ND = noti_eventthank   
NE = noti_event_matched
NF = noti_eventcomment
<br>  
SA = noti_sms_eventapproved   
SB = noti_sms_almosteventdate   
SC = noti_sms_news  
SD = noti_sms_event_matched<br />
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
         NA= <?= $user->noti_eventrecommended  ?><br />
         NB= <?= $user->noti_eventapproved  ?><br />
         NC= <?= $user->noti_almosteventdate  ?><br />
         ND= <?= $user->noti_eventthank  ?><br />
         NE= <?= $user->noti_event_matched ?><br />
         NF= <?= $user->noti_eventcomment ?><br />
         SA= <?= $user->noti_sms_eventapproved  ?><br />
         SB= <?= $user->noti_sms_almosteventdate  ?><br />
         SC= <?= $user->noti_sms_news  ?><br />
         SD= <?= $user->noti_sms_event_matched ?><br />
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