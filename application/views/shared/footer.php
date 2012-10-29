<div style="clear:both"></div>
<div id="insideFooter">
    <div class="line" style="padding-bottom:40px; padding-top:15px"></div>
        <ul id="section">
            <li class="footerseciton1">
                <h4>ธนาคารจิตอาสา</h4>
                <ul>
                    <li><?= HTML::anchor('welcome/aboutus', 'เกี่ยวกับธนาคารจิตอาสา'); ?></li>
                    <li><?= HTML::anchor('welcome/timebank', 'ธนาคารจิตอาสา'); ?></li>
                    <li><?= HTML::anchor('training', 'ฝึกอบรมและความรู้'); ?></li>
                    <li><?= HTML::anchor('news', 'ข่าวแวดวง'); ?></li>
                    <li><?= HTML::anchor('welcome/donation', 'สนับสนุนธนาคารจิตอาสา'); ?></li>
                </ul>
            </li>
            <li class="footerseciton2">
                <h4>ภารกิจจิตอาสา</h4>
                <ul>
					<li><?= HTML::anchor('event/browse', 'ค้นหาภารกิจ หางานอาสา'); ?></li>
                   	<? $jobs = Kohana::$config->load('timebank')->get('jobs'); ?>
					<? for($i = 1 ; $i < sizeof($jobs) ; $i++): ?>
                     		<li><?= HTML::anchor('event/search/?job='.$i, $jobs[$i]); ?></li>
                    <? endfor ?>
                </ul>
            </li>
            <li class="footerseciton3">
                <h4>สมาชิกอาสา</h4>
                <ul>
                    <li><?= HTML::anchor('user/signup', 'สมัครสมาชิก'); ?></li>
                    <li><?= HTML::anchor('user/login', 'เข้าสู่ระบบ'); ?></li>
                    <li><?= HTML::anchor('user/forgetpassword', 'ลืมรหัสผ่าน'); ?></li>
                </ul>
            </li>
            <li class="footerseciton4">
                <h4>ช่วยเหลือ</h4>
                <ul>
                    <li><?= HTML::anchor('welcome/timebankhow', 'วิธีใช้งาน (โดยย่อ)'); ?></li>
                    <li><?= HTML::anchor('help', 'ช่วยเหลือ'); ?></li>
					<li><?= HTML::anchor('contactus', 'ติดต่อธนาคารจิตอาสา'); ?></li>
                </ul>
            </li>
        </ul>
    </div>
</div>