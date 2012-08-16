<?php if (is_null($user) && is_null($orguser)) : ?>
    <ul>
        <li><?= HTML::anchor('user/signup', 'สมัครสมาชิก'); ?></li>
        <li><?= HTML::anchor('user/login', 'เข้าสู่ระบบ'); ?></li>
    </ul>
<? elseif (isset($user)) : ?>       
    <ul>
        <li>สวัสดีครับ :-)  <span id="member_name"><?= HTML::anchor('user/profile/'.$user->id , $user->displayname ); ?></span></li>
        <li><?= HTML::anchor('user/inbox', 'ข้อความเตือน ('.$notification_count.')'); ?></li>
        <li><?= HTML::anchor('user/setting', 'ตั้งค่าบัญชีผู้ใช้'); ?></li>
        <li><?= HTML::anchor('user/logout', 'ออกจากระบบ'); ?></li>
    </ul>
<? elseif (isset($orguser)) : ?>       
    <ul>
        <li>สวัสดีครับ :D  <span id="member_name"><?= HTML::anchor('organization/profile/'.$orguser->id , $orguser->name ); ?></span></li>
        <li><?= HTML::anchor('organization/inbox', 'ข้อความเตือน ('.$notification_count.')'); ?></li>
        <li><?= HTML::anchor('organization/setting', 'ตั้งค่าบัญชีผู้ใช้'); ?></li>
        <li><?= HTML::anchor('user/logout', 'ออกจากระบบ'); ?></li>
    </ul>
<? endif ?>