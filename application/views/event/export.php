 <?php
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="'.$name.'.xls"');


?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<HTML>
<HEAD>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
</HEAD>


<BODY>
<TABLE  x:str BORDER="1">
    <TR>
        <TD><b>ชื่อจริง</b></TD>
        <TD><b>นามสกุล</b></TD>
        <TD><b>ชื่อที่แสดง</b></TD>
        <TD><b>อายุ</b></TD>
        <TD><b>เพศ</b></TD>
        <TD><b>ชื่อเล่น</b></TD>
        <TD><b>Email</b></TD>
        <TD><b>เบอร์โทร</b></TD>
    </TR>
	<? foreach($valunteers as $valunteer) : ?>
   		<TR>
            <TD><?= $valunteer->first_name ?></TD>
            <TD><?= $valunteer->last_name ?></TD>
            <TD><?= $valunteer->displayname ?></TD>
            <TD><?= phphelp::getYearAge($valunteer->birthday) ?></TD>
            <TD><? $sex = Kohana::$config->load('timebank')->get('sexs');
					echo $sex[$valunteer->sex] ?></TD>
            <TD><?= $valunteer->email ?></TD>
            <TD><?= $valunteer->phone ?></TD>
        </TR>
    <? endforeach ?>
</TABLE>
</BODY>
</HTML>
