<?php
#header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="'.$name.'.csv"');
header("Content-Type: application/ms-excel");
echo "ชื่อจริง,นามสกุล,ชื่อที่แสดง,อายุ,เพศ,Email,เบอร์โทร\n";
?>
<? foreach($valunteers as $valunteer) : ?>
<?
$sex = Kohana::$config->load('timebank')->get('sexs');
$row = $valunteer->first_name.','.$valunteer->last_name.','.$valunteer->displayname.','.phphelp::getYearAge($valunteer->birthday).','.$sex[$valunteer->sex].','.$valunteer->email.',\''.$valunteer->phone;
echo $row."\n";
?>
<? endforeach ?>
