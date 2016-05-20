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
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<tr>
    <td colspan="6">
        <div class="fix">

        <?php
                for($i = 1; $i <= $total_page; $i++){
                    if( $i == $page)
                    {
                        echo '<span class="current-page">'.$i.'</span>';
                    }
                    else
                    {
                        echo ''.HTML::anchor('/admin/organization?page='.$i.'&', $i) .'';
                    }
                }
            ?>

        </div>

    </td>
</tr>
  <table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000">
    <th width="25%"> ข้อมูลองค์กร</th>
<th> รายละเอียดเพิ่มเติม</th>
<? foreach ($organizations as $organization ) :?><tr>
<td width="25%">
<a style="cursor:pointer" onclick="OnDelete('<?= url::base().'admin/organizationdelete/'.$organization['id'] ?>')"><strong>ลบ</strong> </a>|
 <?= HTML::anchor('admin/organizationedit/'.$organization['id'], '<strong>แก้ไข</strong>'); ?> |
  <?= HTML::anchor('admin/event?org='.$organization['id'], '<strong>งานอาสา</strong>'); ?> |
  <?= HTML::anchor('admin/organizationinbox/'.$organization['id'], '<strong>การแจ้งเตือน (ทางเว็บไซต์) </strong>'); ?> |

  <br />
  ขื่อองค์กร:
  <strong>
    <?= HTML::anchor('organization/view/'.$organization['id'], $organization['name']) ?>
    </strong><br />
  id:
  <?= $organization['id'] ?> | อีเมล:
  <?= $organization['email']  ?> | สถานะการเป็นสมาชิก:
  <?= $organization['verified']  ?>
  <br />
  ที่อยู่ :
  <?= $organization['address']  ?>
  <br />
  เขต / อำเภอ :
  <?= $organization['district']  ?>
  <br />
 จังหวัด :
  <?= $organization['province']  ?>
  <br />
  รหัสไปรษณีย์ :
  <?= $organization['postcode']  ?>
  <br />
  โทร.สำนักงาน :
  <?= $organization['homephone']  ?> | โทรสาร :
  <?= $organization['fax']  ?>
  <br />
  ชื่อผู้ติดต่อ :
  <?= $organization['contactperson']  ?>
  <br />
  <?php if ($organization['facebook'] != ''): ?>เฟสบุ๊ค :   <?= Text::auto_link_urls($organization['facebook'])  ?>  <br /><? endif ?>
  <?php if ($organization['twitter'] != ''): ?>ทวิตเตอร์ :   <?= $organization['twitter']  ?>  <br /><? endif ?>
  <?php if ($organization['website'] != ''): ?>เว็บไซต์ :   <?= Text::auto_link($organization['website'])  ?>  <br /><? endif ?>
        เวลาสมัครสมาชิก :
        <?= $organization['timestamp']  ?></td>
<td>        	<?php if ($organization['logo'] != ''): ?>
        		<img src="<?= url::base().'media/upload/organizations/'.$organization['logo']; ?>" align="right" style="max-height: 150px; max-width:150px;" />
    	    <? endif ?><p><strong>วัตถุประสงค์ :</strong>
  <?= $organization['objective']  ?>
</p>
  <p><strong>ลักษณะกิจกรรม : </strong>
    <?= $organization['activity']  ?>
  </p></td>
</tr>
<? endforeach ?>
</table>
</div>
</div>
