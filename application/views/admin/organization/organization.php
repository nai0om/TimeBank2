<style type="text/css">
<!--
td {
	text-align: left;
}
-->
</style>
<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>
  <table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
  <th width="25%"> a</th>
<th> a</th>
<? foreach ($organizations as $organization ) :?><tr>
<td>            <?= HTML::anchor('admin/organizationedit/'.$organization['id'], '<strong>แก้ไข</strong>'); ?> |
  <?= HTML::anchor('admin/event?org='.$organization['id'], '<strong>event</strong>'); ?> |
  <?= HTML::anchor('admin/organizationinbox/'.$organization['id'], '<strong>inbox</strong>'); ?> |<br />
  name:
  <strong>
    <?= $organization['name']  ?> 
    </strong><br />
  id:
  <?= $organization['id'] ?> | email: 
  <?= $organization['email']  ?> | verified:
  <?= $organization['verified']  ?>
  <br />
  address: 
  <?= $organization['address']  ?>
  <br />
  district: 
  <?= $organization['district']  ?>
  <br />
  province: 
  <?= $organization['province']  ?>
  <br />
  postcode: 
  <?= $organization['postcode']  ?>
  <br />
  phone: 
  <?= $organization['homephone']  ?> | fax: 
  <?= $organization['fax']  ?>
  <br />
  Contact: 
  <?= $organization['contactperson']  ?>
  <br />
  fb: 
  <?= $organization['facebook']  ?>
  <br />
  twt: 
  <?= $organization['twitter']  ?>
        <br />
        web: 
        <?= $organization['website']  ?>
        <br />
        timestamp: 
        <?= $organization['timestamp']  ?></td>
<td>        	<?php if ($organization['logo'] != ''): ?>
        		<img src="<?= url::base().'media/upload/organizations/'.$organization['logo']; ?>" align="right" style="max-height: 150px; max-width:150px;" />
    	    <? endif ?><p><strong>Objective:</strong>
  <?= $organization['objective']  ?>
</p>
  <p><strong>Activity: </strong> 
    <?= $organization['activity']  ?>
  </p></td>
</tr>
<? endforeach ?>
</table>
</div>
</div>