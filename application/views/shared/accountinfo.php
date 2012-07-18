<?php if (is_null($user) && is_null($orguser)) : ?>
    <ul>
        <li><?= HTML::anchor('user/signup', 'สมัครสมาชิก'); ?></li>
        <li><?= HTML::anchor('user/login', 'เข้าสู่ระบบ'); ?></li>
    </ul>
<? elseif (isset($user)) : ?>       
    <ul>
        <li>Welcome <span id="member_name"><?= $user->displayname ?></span></li>
        <li><?= HTML::anchor('user/inbox', 'ข้อความเตือน (5)'); ?></li>
        <li><?= HTML::anchor('user/setting', 'ตั้งค่าบัญชีผู้ใช้'); ?></li>
        <li><?= HTML::anchor('user/logout', 'ออกจากระบบ'); ?></li>
    </ul>
<? elseif (isset($orguser)) : ?>       
    <ul>
        <li>Welcome <span id="member_name"><?= $orguser->name ?></span></li>
        <li><?= HTML::anchor('organization/inbox', 'ข้อความเตือน (5)'); ?></li>
        <li><?= HTML::anchor('organization/setting', 'ตั้งค่าบัญชีผู้ใช้'); ?></li>
        <li><?= HTML::anchor('user/logout', 'ออกจากระบบ'); ?></li>
    </ul>
<? endif ?>