<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
	<?php include Kohana::find_file('views', 'admin/menus') ?>
 <p>
     
   <h1>Admin Page </h1>
     <p>
        <h3> เพิ่มงานอาสา แนะนำ (ใส่ event ID) </h3>
        <?= Form::open('admin/addrecommend'); ?>
    		<?=  Form::select('event_id', $event_select) ?>
             <?= Form::submit(NULL, 'เพิ่ม'); ?>
        <?= Form::close(); ?>
        <table border="2">
        <tbody>
         <tr>
         	<th> ตัวเลือก </th>
         	<th>id</th>
            <th> ชื่อโครงการ </th>
         </tr>
         <? foreach($event_recommend as $event) : ?>
         	<tr> 
            	<td><?= HTML::anchor('admin/removerecommend/'.$event->id, '<strong>ลบ</strong>'); ?> </td>
                <td><?= $event->id ?></td>
	            <td><?= $event->name ?></td>
            </tr>
         <? endforeach ?>
         </tbody>
        </table>
      </p>
      
     <br /> 
    <p align="center" style="margin:0;">
    	<img src="<?= url::base()."media/img/tb_line.png" ?>">
    </p>
      <p>
        <h3> เพิ่มบอกเล่าจากใจอาสา </h3>
	   <?= Form::open('admin/addcomment'); ?>
       <?=  Form::select('comment_id', $comment_select) ?>
       <?= Form::submit(NULL, 'เพิ่ม'); ?>
        <?= Form::close(); ?>
        <table border="2">
        <tbody>
         <tr>
         	<th> ตัวเลือก </th>
         	<th>id</th>
            <th> ชื่อโครงการ </th>
         </tr>
         <? foreach($comment_recommend as $comment) : ?>
         	<tr> 
            	<td><?= HTML::anchor('admin/removecomment/'.$comment->id, '<strong>ลบ</strong>'); ?> </td>
                <td><?= $comment->id ?></td>
	            <td><?= $comment->comment ?></td>
            </tr>
         <? endforeach ?>
         </tbody>
        </table>
      </p>
     
    <br />   
    <p align="center" style="margin:0;">
   	 	<img src="<?= url::base()."media/img/tb_line.png" ?>">
    </p>
    <p> <h3>Unverified organizations</h3>  
     <table border="1">
     <tbody>
      <tr>
        <th>name</th>
        <th>objective</th>
        <th>activity</th>
        <th>address</th>
        <th>district</th>
        <th>province</th>
        <th>postcode</th>
        <th>homephone</th>
        <th>fax</th>
        <th>contactperson</th>
        <th>facebook</th>
        <th>twitter</th>
        <th>website</th>
        <th>logo</th>
      </tr>
    <?php foreach ($organizations as $organization):?>
        <tr>
        <td><?= $organization->name ?></td>
        <td><?= $organization->objective ?></td>
        <td><?= $organization->activity ?></td>
        <td><?= $organization->address ?></td>
        <td><?= $organization->district ?></td>
        <td><?= $organization->province ?></td>
        <td><?= $organization->postcode ?></td>
        <td><?= $organization->homephone ?></td>
        <td><?= $organization->fax ?></td>
        <td><?= $organization->contactperson ?></td>
        <td><?= $organization->facebook ?></td>
        <td><?= $organization->twitter ?></td>
        <td><?= $organization->website ?></td>
        <td><img src="<?= url::base().'media/upload/organizations/'.$organization->logo; ?>" /></td>
        </tr>
    <? endforeach ?>
    </tbody>
    </table>
    	<br />
        <p> 
        <?= Form::open('admin/approve'); ?>
        <select name="organization_id">
        <?php foreach ($organizations as $organization) {
            if ( $organization->verified == '0' )
            {
                echo '<option value="'.$organization->id.' ">'.$organization->name.'</option>';
            }
        }?>
        </select>
        <?= Form::submit('approve', 'approve'); ?>
        <?= Form::close(); ?>
        </p>
    </p>
    <p align="center" style="margin:0;">
    	<img src="<?= url::base()."media/img/tb_line.png" ?>">
    </p>
</p>

</div>
</div>