<div id="member" class="detail">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>หน้าหลักสมาชิกอาสา</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
			<?php include Kohana::find_file('views', 'shared/usermenu') ?>
		</div>
		
		
		<div id="main_right">
			<div id="summary">
				<div id="photo" style="float:left;">
                <a href="<?= url::base().'user/profile'; ?>">
         <? if ($user->profile_image) : ?>
        	<p><img style="width:271px;height:259px;" src="<?= url::base().'media/upload/volunteers/'.$user->profile_image; ?>" /></p>
         <? else :?>
         	<img src="<?= url::base().'media/img/mem_sample_profile.png'; ?>" />
         <? endif ?>
         		</a>
					<div style="clear:both"></div>
				</div>
				<div class="sum"><div class="sum_hours"><?= $time ?> ชั่วโมง</div>
				<div class="sub_title"> เวลาตั้งใจอาสา</div></div>
				<div></div>
				<div class="sum"><div class="sum_hours"><?= $work_time ?> ชั่วโมง</div>
				<div class="sub_title">เวลาทำอาสา</div></div>
			</div>
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">งานอาสาที่เหมาะกับโปร์ไพล์คุณ</div>
			<div class="title right"></div>
			<div class="line" style="width:374px;"></div>
			<a class="more">Load more</a>
			<div style="clear:both"></div>
			<ul class="list">
				<? foreach ($events_rand as $event) : ?>
				<li>
	                <?	if ($event->image == '' || $event->image == NULL) : ?>
	                	<img src="<?= url::base(); ?>media/img/mem_sample_list.png">
                    <? else : ?>
                    	<img src="<?= url::base().'media/upload/events/'.$event->image;  ?>" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                    <? endif ?>
                    <div class="description"><?= $event->name ?></div>
                    <div class="hours"><?= $event->time_cost ?> ชม.</div>
                </li>
                <? endforeach ?>
			</ul>
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">งานอาสาที่ทางเวบไซต์อยากแนะนำ</div>
			<div class="title right"></div>
			<div class="line"></div>
			<a class="more">Load more</a>
			<div style="clear:both"></div>
			<ul class="list">
				<? foreach ($events as $event) : ?>
				<li>
	                <?	if ($event->image == '' || $event->image == NULL) : ?>
	                	<img src="<?= url::base(); ?>media/img/mem_sample_list.png">
                    <? else : ?>
                    	<img src="<?= url::base().'media/upload/events/'.$event->image;  ?>" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                    <? endif ?>
                    <div class="description"><?= $event->name ?></div>
                    <div class="hours"><?= $event->time_cost ?> ชม.</div>
                </li>
                <? endforeach ?>
			</ul>
			
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
	</div>
</div>