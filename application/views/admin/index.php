<div id="home">
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
        </table>
      </p>
    <p align="center" style="margin:0;">
    <img src="/TimeBank/media/img/tb_line.png">
    </p>
      <p>
        <h3> เพิ่มบอกเล่าจากใจอาสา (ใส่ comment ID) </h3>
        <?= Form::open('admin/addHighlighComment'); ?>
        <?= Form::input('1',  (array_key_exists('1', $comments)? $comments['1']['comment_id'] : '')); ?>
        <?= Form::input('2',  (array_key_exists('2', $comments)? $comments['2']['comment_id'] : '')); ?>
        <?= Form::input('3',  (array_key_exists('3', $comments)? $comments['3']['comment_id'] : '')); ?>
        <?= Form::submit(NULL,'update'); ?>
        <?= Form::close(); ?>
      </p>
      
    <p align="center" style="margin:0;">
    <img src="/TimeBank/media/img/tb_line.png">
    </p>
    <p> <h3>Unverified organizations</h3>  
     <table border="1">
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
    
    </table> 
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
    <p align="center" style="margin:0;">
    <img src="/TimeBank/media/img/tb_line.png">
    </p>
</p>

</div>
</div>