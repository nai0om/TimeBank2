<div style="clear:both"></div>
<div id="insideFooter">
    <div class="line" style="padding-bottom:40px; padding-top:40px"></div>
        <ul id="section">
            <li>
                <h4>จิตอาสา</h4>
                <ul>
                    <li><?= HTML::anchor('welcome/aboutus', 'เกี่ยวกับเว็บไซต์'); ?></li>
                    <li><?= HTML::anchor('welcome/timebank', 'ธนาคารจิตอาสา'); ?></li>
                    <li><?= HTML::anchor('training', 'ฝึกอบรมอาสาสมัคร'); ?></li>
                    <li><?= HTML::anchor('news', 'ข่าวสารอัพเดท'); ?></li>
                    <li><?= HTML::anchor('welcome/donation', 'ร่วมบริจาค'); ?></li>
                </ul>
            </li>
            <li>
                <h4>งานอาสา</h4>
                <ul>
                   	<? $jobs = Kohana::$config->load('timebank')->get('jobs'); ?>
					<? for($i = 1 ; $i < sizeof($jobs) ; $i++): ?>
                     		<li><?= HTML::anchor('event/search/?job='.$i, $jobs[$i]); ?></li>
                    <? endfor ?>
                </ul>
            </li>
            <li>
                <h4>บริการสมาชิก</h4>
                <ul>
                    <li><?= HTML::anchor('user/signup', 'สมัครสมาชิก'); ?></li>
                    <li><?= HTML::anchor('user/login', 'เข้าสู่ระบบ'); ?></li>
                    <li><?= HTML::anchor('user/forgetpassword', 'ลืมรหัสผ่าน'); ?></li>
                </ul>
            </li>
            <li>
                <h4>ช่วยเหลือ</h4>
                <ul>
                    <li><?= HTML::anchor('welcome/timebankhow', 'วิธีใช้ธนาคารจิตอาสา'); ?></li>
                    <li>คำถาม คำตอบ</li>
                    <li>ค้นหางานอาสา</li>
                    <li><?= HTML::anchor('contactus', 'ติดต่อทีมงานอาสา'); ?></li>
                </ul>
            </li>
        </ul>
    </div>
</div>