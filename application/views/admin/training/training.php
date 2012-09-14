<div id="home">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<h1><?= HTML::anchor('admin/createtraining', '<strong>สร้าง Traning</strong>'); ?> </h1>

<table  BORDER="2" CELLPADDING="2" CELLSPACING="2" WIDTH="1000"> 
<tr>
    <th >id</th>		 	 		 	 		
    <th >topic</th>	 	 	 	 	 	 		 
    <th >date_message</th>		 	 	 					 
    <th >message	text</th>			 	 	 					 
    <th >main_pic</th>			 	 	 	 	 	 		 
    <th >thm_pic	</th>		 	 	 					 
   		 	 	 					 
    <th >video</th>			 	 	 					 
    <th >created</th>
    <th>edit</th>
    <th>Delete</th>
</tr>
<? foreach ($trainings as $training ) :?>
    <tr>
        <td ><?=  $training->id; ?></td>
        <td ><?= HTML::anchor('training/view/'.$training->id, '<strong>'.$training->topic.'<? ?></strong>'); ?></td>
        <td ><?=  $training->date_message; ?></td>
        <td ><?=  $training->message; ?></td>
        <td ><?=  $training->main_pic; ?></td>
        <td ><?=  $training->thm_pic; ?></td>   
        <td ><?=  $training->video; ?></td>
        <td ><?=  $training->timestamp; ?></td>
        <td><?= HTML::anchor('admin/edittraining/'.$training->id, '<strong>แก้ไข</strong>'); ?></td> 
        <td><?= HTML::anchor('admin/deletetraining/'.$training->id, '<strong>ลบ</strong>'); ?> </td>
	</tr>
<? endforeach ?>
</table>
</div>
</div>