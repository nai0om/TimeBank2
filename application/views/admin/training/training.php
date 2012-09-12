<?php include Kohana::find_file('views', 'admin/menus') ?>

<h1><?= HTML::anchor('admin/createtraining', '<strong>สร้าง Traning</strong>'); ?> <h1>

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
    <th WIDTH="10">id</th>		 	 		 	 		
    <th WIDTH="10">topic</th>	 	 	 	 	 	 		 
    <th WIDTH="10">date_message</th>		 	 	 					 
    <th WIDTH="10">message	text</th>			 	 	 					 
    <th WIDTH="10">main_pic</th>			 	 	 	 	 	 		 
    <th WIDTH="10">thm_pic	</th>		 	 	 					 
   		 	 	 					 
    <th WIDTH="10">video</th>			 	 	 					 
    <th WIDTH="10">created</th>
    <th>edit</th>
    <th>Delete</th>
<tr>
<? foreach ($trainings as $training ) :?>
    <tr>
        <td WIDTH="10"><?=  $training->id; ?></td>
        <td WIDTH="10"><?= HTML::anchor('training/view/'.$training->id, '<strong>'.$training->topic.'<? ?></strong>'); ?></td>
        <td WIDTH="10"><?=  $training->date_message; ?></td>
        <td WIDTH="10"><?=  $training->message; ?><</td>
        <td WIDTH="10"><?=  $training->main_pic; ?></td>
        <td WIDTH="10"><?=  $training->thm_pic; ?></td>   
        <td WIDTH="10"><?=  $training->video; ?></td>
        <td WIDTH="10"><?=  $training->timestamp; ?></td>
        <td><?= HTML::anchor('admin/edittraining/'.$training->id, '<strong>แก้ไข</strong>'); ?></td> 
        <td><?= HTML::anchor('admin/deletetraining/'.$training->id, '<strong>ลบ</strong>'); ?> </td>
	</tr>
<? endforeach ?>
</table>