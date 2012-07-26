<ul><?php $menuitem = array(
    'index' => 'หน้าหลัก', 
    'profile' => 'โปรไฟล์',
    'record' => 'ฝากเวลาของฉัน', 
    'myevent' => 'งานอาสาของฉัน',
    'eventsearch' => 'ค้นหางานอาสา', 
    'mytraining' => 'งานฝึกอบรมของฉัน',
    'notification' => 'งานแจ้งเตือน',
); ?>

<? foreach ($menuitem as $actionname => $menuname):?>
	<? if ($action == $actionname) : ?>
		<li  class="current"><?= $menuname  ?></li>
	<? else : ?>
		<li><?= HTML::anchor('user/'.$actionname, $menuname); ?></li>
	<? endif ?>
<? endforeach  ?>




			</ul>