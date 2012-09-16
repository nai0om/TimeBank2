<div id="home">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>


<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
<th> ตัวเลือก </th>
<th> id </th>	
<th> e-mail </th>
<th> verified </th>
<th> noti_volunteerregister </th>
<th> noti_eventalmostend </th>
<th> noti_eventend </th>
<th> name </th>
<th> objective </th>
<th> activity </th>
<th> address </th>
<th> district </th>
<th> province </th>
<th> postcode </th>
<th> homephone </th>
<th> fax </th>
<th> contactperson </th>
<th> facebook </th>
<th> twitter </th>
<th> website </th>
<th> logo </th>
<th> timestamp </th>
</tr>
<? foreach ($organizations as $organization ) :?>
    <tr>
        <td>
            <?= HTML::anchor('admin/organizationedit/'.$organization['id'], '<strong>แก้ไข</strong>'); ?> 
            <?= HTML::anchor('admin/event?org='.$organization['id'], '<strong>event</strong>'); ?> 
            <?= HTML::anchor('admin/organizationinbox/'.$organization['id'], '<strong>inbox</strong>'); ?> 
        </td> 
        <td><?= $organization['id'] ?></td>	
        <td><?= $organization['email']  ?></td>
        <td><?= $organization['verified']  ?></td>
        <td><?= $organization['noti_volunteerregister']  ?></td>
        <td><?= $organization['noti_eventalmostend']  ?></td>
        <td><?= $organization['noti_eventend']  ?></td>
        <td><?= $organization['name']  ?></td>
        <td><?= $organization['objective']  ?></td>
        <td><?= $organization['activity']  ?></td>
        <td><?= $organization['address']  ?></td>
        <td><?= $organization['district']  ?></td>
        <td><?= $organization['province']  ?></td>
        <td><?= $organization['postcode']  ?></td>
        <td><?= $organization['homephone']  ?></td>
        <td><?= $organization['fax']  ?></td>
        <td><?= $organization['contactperson']  ?></td>
        <td><?= $organization['facebook']  ?></td>
        <td><?= $organization['twitter']  ?></td>
        <td><?= $organization['website']  ?></td>
        <td>
        	<?php if ($organization['logo'] != ''): ?>
        		<img src="<?= url::base().'media/upload/organizations/'.$organization['logo']; ?>" style="max-height: 150px; max-width:150px;" />
    	    <? endif ?>
	    </td>

        <td><?= $organization['timestamp']  ?></td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>