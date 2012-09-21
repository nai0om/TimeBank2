	<div>
           <p>	
            <? if($isOwner) : ?>
				<?= HTML::anchor('event/export/'.$event->id, 'Download รายชื่อสมาชิก ทั้งหมด')  ?><br />
                <?= HTML::anchor('event/export/'.$event->id.'?type=1', 'Download รายชื่อสมาชิก ที่่ได้รับการตอบรับแล้ว')  ?>
            <? endif ?>
            </p>
			<ul id="member">
            <? foreach( $memebers as $user): ?>
            	<? if (!array_key_exists($user->id, $member_event)) continue; ?>
              	<? if ($user->profile_image == '') : ?>
					<li><img src="<?= url::base(); ?>media/img/sample_member_01.png">
                <? else :?>
                	<li><img src="<?= url::base().'media/upload/volunteers/'.$user->profile_image; ?>" />
                <? endif?>
                <div class="username"><?= $user->displayname ?></div>
                
                </li>
			<?  endforeach ?>
   			</ul>
			<img src="<?= url::base(); ?>media/img/tb_line_form.png">
	
		</div>