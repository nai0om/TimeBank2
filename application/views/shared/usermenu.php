<ul><?php $menuitem = array(
    'index' => 'หน้าหลัก', 
    'profile' => 'ข้อมูลส่วนตัว (Profile)',
    'record' => 'ฝากเวลาเพิ่ม', 
    'myevent' => 'งานอาสาของฉัน',
    'eventsearch' => 'ค้นหาภารกิจจิตอาสา', 
    //'mytraining' => 'งานฝึกอบรมของฉัน',
    'notification' => 'การแจ้งเตือน',
); ?>

<? foreach ($menuitem as $actionname => $menuname):?>
	<? if ($action == $actionname) : ?>
		<li  class="current"><?= $menuname  ?></li>
	<? else : ?>
		<li><?= HTML::anchor('user/'.$actionname, $menuname); ?></li>
	<? endif ?>
<? endforeach  ?>




			</ul>