<?php
#header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="'.$name.'.csv"');
header("Content-Type: application/ms-excel");
echo "ชื่อจริง,นามสกุล,ชื่อที่แสดง,อายุ,เพศ,Email,เบอร์โทร\n";
?>
<? foreach($valunteers as $valunteer) : ?>
<?
$sex = Kohana::$config->load('timebank')->get('sexs');
$phone = $valunteer->phone;
if(!empty($phone) && is_numeric($phone) && strlen($phone) >= 6  ){
    $char = str_split($phone);
    $phone = $char[0].$char[1].$char[2].'-'.$char[3].$char[4].$char[5];
    $phone .= '-'.substr($valunteer->phone, 6);
}

$row = $valunteer->first_name.','.$valunteer->last_name.','.$valunteer->displayname.','.phphelp::getYearAge($valunteer->birthday).','.$sex[$valunteer->sex].','.$valunteer->email.','.$phone;
echo $row."\n";
?>
<? endforeach ?>
