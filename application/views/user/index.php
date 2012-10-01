<div id="member" class="detail">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>หน้าหลักสมาชิกอาสา</li>
		</div>

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
				<div class="sub_title">เวลาที่ได้ทำอาสาไปแล้ว</div></div>
			</div>
            
            <div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">ภารกิจจิตอาสาที่เหมาะกับคุณ</div>
			<div class="title right"></div>
			<div class="line" style="width:374px;"></div>
			<a class="more">ดูเพิ่มเติม</a>
			<div style="clear:both"></div>
			<div class="showlist">
			<ul class="list">
				<? foreach ($event_recommends as $event) : ?>
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
                    <div class="description"><?= HTML::anchor('event/view/'.$event->id,  $event->name) ?></div>
                    <div class="detail">
						<? if ($event->days != 'ค้างคืน') :?>
                        ตั้งแต่ <?=  phphelp::str_to_thai_date($event->volunteer_begin_date ); ?> 
                        <br />
                        ถึง <?= phphelp::str_to_thai_date($event->volunteer_end_date);  ?> 
                        <br>
                        เวลา : <?= date("H:i", strtotime($event->volunteer_begin_time)); ?> น. - 
                        <?= date("H:i", strtotime($event->volunteer_end_time));?> น.
                        <br />
                        <?=  'ทุกวัน '.(($event->days == '') ?  '': $event->days).' (ไป-กลับ)' ?>
                        <br>
                        <? else  : ?>
                        
                        ตั้งแต่ <?=  phphelp::str_to_thai_date($event->volunteer_begin_date ); ?> 
                        เวลา : <?= date("H:i", strtotime($event->volunteer_begin_time)); ?> น.
                        <br />
                        ถึง <?= phphelp::str_to_thai_date($event->volunteer_end_date);  ?> 
                        เวลา : <?= date("H:i", strtotime($event->volunteer_end_time));?> น.
                        <br />
                        <?= $event->days ?>
                     <? endif?>
                    </div>
                    <div class="hours"><?= $event->time_cost ?> ชม.</div>
                </li>
                <? endforeach ?>
			</ul></div>
			<div class="hidelist" id="list_yourevent">
			<ul class="list">
								<li>
	                	                	<img src="/media/img/mem_sample_list.png">
                                        <div class="description"><a href="/event/view">event/view/</a></div>
                    <div class="detail">
						                        ตั้งแต่ 1 มกราคม 2513 
                        <br />
                        ถึง 1 มกราคม 2513 
                        <br>
                        เวลา : 07:00 น. - 
                        07:00 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours"> ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/50634eb437ec8high-cut-girl-1.jpg" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/99">ปิดรับ 30</a></div>
                    <div class="detail">
						                        ตั้งแต่ 1 ตุลาคม 2555 
                        <br />
                        ถึง 3 ตุลาคม 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        18:00 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">54 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/5060264a939a0DSC04602.JPG" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/88">โท๊ดดดด สอบบบบ 2</a></div>
                    <div class="detail">
						                        ตั้งแต่ 3 พฤศจิกายน 2555 
                        <br />
                        ถึง 8 ธันวาคม 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        23:59 น.
                        <br />
                        ทุกวัน ศุกร์, เสาร์ (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">264 ชม.</div>
                </li>
                			</ul>
										<ul class="list">
								<li>
	                	                	<img src="/media/img/mem_sample_list.png">
                                        <div class="description"><a href="/event/view">event/view/</a></div>
                    <div class="detail">
						                        ตั้งแต่ 1 มกราคม 2513 
                        <br />
                        ถึง 1 มกราคม 2513 
                        <br>
                        เวลา : 07:00 น. - 
                        07:00 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours"> ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/50634eb437ec8high-cut-girl-1.jpg" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/99">ปิดรับ 30</a></div>
                    <div class="detail">
						                        ตั้งแต่ 1 ตุลาคม 2555 
                        <br />
                        ถึง 3 ตุลาคม 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        18:00 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">54 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/5060264a939a0DSC04602.JPG" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/88">โท๊ดดดด สอบบบบ 2</a></div>
                    <div class="detail">
						                        ตั้งแต่ 3 พฤศจิกายน 2555 
                        <br />
                        ถึง 8 ธันวาคม 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        23:59 น.
                        <br />
                        ทุกวัน ศุกร์, เสาร์ (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">264 ชม.</div>
                </li>
                			</ul>
										<ul class="list">
								<li>
	                	                	<img src="/media/img/mem_sample_list.png">
                                        <div class="description"><a href="/event/view">event/view/</a></div>
                    <div class="detail">
						                        ตั้งแต่ 1 มกราคม 2513 
                        <br />
                        ถึง 1 มกราคม 2513 
                        <br>
                        เวลา : 07:00 น. - 
                        07:00 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours"> ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/50634eb437ec8high-cut-girl-1.jpg" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/99">ปิดรับ 30</a></div>
                    <div class="detail">
						                        ตั้งแต่ 1 ตุลาคม 2555 
                        <br />
                        ถึง 3 ตุลาคม 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        18:00 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">54 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/5060264a939a0DSC04602.JPG" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/88">โท๊ดดดด สอบบบบ 2</a></div>
                    <div class="detail">
						                        ตั้งแต่ 3 พฤศจิกายน 2555 
                        <br />
                        ถึง 8 ธันวาคม 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        23:59 น.
                        <br />
                        ทุกวัน ศุกร์, เสาร์ (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">264 ชม.</div>
                </li>
                			</ul>
							</div>
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">ภารกิจจิตอาสาล่าสุด</div>
			<div class="title right"></div>
			<div class="line" style="width:374px;"></div>
			<a class="more">ดูเพิ่มเติม</a>
			<div style="clear:both"></div>
			<div class="showlist">
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
                    <div class="description"><?= HTML::anchor('event/view/'.$event->id,  $event->name) ?></div>
                    <div class="detail">
						<? if ($event->days != 'ค้างคืน') :?>
                        ตั้งแต่ <?=  phphelp::str_to_thai_date($event->volunteer_begin_date ); ?> 
                        <br />
                        ถึง <?= phphelp::str_to_thai_date($event->volunteer_end_date);  ?> 
                        <br>
                        เวลา : <?= date("H:i", strtotime($event->volunteer_begin_time)); ?> น. - 
                        <?= date("H:i", strtotime($event->volunteer_end_time));?> น.
                        <br />
                        <?=  'ทุกวัน '.(($event->days == '') ?  '': $event->days).' (ไป-กลับ)' ?>
                        <br>
                        <? else  : ?>
                        
                        ตั้งแต่ <?=  phphelp::str_to_thai_date($event->volunteer_begin_date ); ?> 
                        เวลา : <?= date("H:i", strtotime($event->volunteer_begin_time)); ?> น.
                        <br />
                        ถึง <?= phphelp::str_to_thai_date($event->volunteer_end_date);  ?> 
                        เวลา : <?= date("H:i", strtotime($event->volunteer_end_time));?> น.
                        <br />
                        <?= $event->days ?>
                     <? endif?>
                    </div>
                    <div class="hours"><?= $event->time_cost ?> ชม.</div>
                </li>
                <? endforeach ?>
			</ul></div>
			<div class="hidelist" id="list_newevent">
			<ul class="list">
								<li>
	                                    	<img src="/media/upload/events/5063c6d83deb3DSC04760.JPG" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/101">test After implement matching </a></div>
                    <div class="detail">
						                        ตั้งแต่ 27 กันยายน 2555 
                        <br />
                        ถึง 27 กันยายน 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        15:30 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">16 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/50634eb437ec8high-cut-girl-1.jpg" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/99">ปิดรับ 30</a></div>
                    <div class="detail">
						                        ตั้งแต่ 1 ตุลาคม 2555 
                        <br />
                        ถึง 3 ตุลาคม 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        18:00 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">54 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/506346e2cecd5design_yourself-1920x1200.jpg" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/97">start 30 sep close 8 oct</a></div>
                    <div class="detail">
						                        ตั้งแต่ 30 กันยายน 2555 
                        <br />
                        ถึง 8 ตุลาคม 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        02:30 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">23 ชม.</div>
                </li>
                			</ul>
										<ul class="list">
								<li>
	                                    	<img src="/media/upload/events/5063c6d83deb3DSC04760.JPG" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/101">test After implement matching </a></div>
                    <div class="detail">
						                        ตั้งแต่ 27 กันยายน 2555 
                        <br />
                        ถึง 27 กันยายน 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        15:30 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">16 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/50634eb437ec8high-cut-girl-1.jpg" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/99">ปิดรับ 30</a></div>
                    <div class="detail">
						                        ตั้งแต่ 1 ตุลาคม 2555 
                        <br />
                        ถึง 3 ตุลาคม 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        18:00 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">54 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/506346e2cecd5design_yourself-1920x1200.jpg" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/97">start 30 sep close 8 oct</a></div>
                    <div class="detail">
						                        ตั้งแต่ 30 กันยายน 2555 
                        <br />
                        ถึง 8 ตุลาคม 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        02:30 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">23 ชม.</div>
                </li>
                			</ul>
										<ul class="list">
								<li>
	                                    	<img src="/media/upload/events/5063c6d83deb3DSC04760.JPG" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/101">test After implement matching </a></div>
                    <div class="detail">
						                        ตั้งแต่ 27 กันยายน 2555 
                        <br />
                        ถึง 27 กันยายน 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        15:30 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">16 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/50634eb437ec8high-cut-girl-1.jpg" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/99">ปิดรับ 30</a></div>
                    <div class="detail">
						                        ตั้งแต่ 1 ตุลาคม 2555 
                        <br />
                        ถึง 3 ตุลาคม 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        18:00 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">54 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/506346e2cecd5design_yourself-1920x1200.jpg" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/97">start 30 sep close 8 oct</a></div>
                    <div class="detail">
						                        ตั้งแต่ 30 กันยายน 2555 
                        <br />
                        ถึง 8 ตุลาคม 2555 
                        <br>
                        เวลา : 00:00 น. - 
                        02:30 น.
                        <br />
                        ทุกวัน  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">23 ชม.</div>
                </li>
                			</ul>
							</div>
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">ภารกิจจิตอาสาที่น่าสนใจ</div>
			<div class="title right"></div>
			<div class="line"></div>
			<a class="more">ดูเพิ่มเติม</a>
			<div style="clear:both"></div>
			<div class="showlist">
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
                    <div class="description"><?= HTML::anchor('event/view/'.$event->id,  $event->name) ?></div>
                    <div class="detail">
                    <? if ($event->days != 'ค้างคืน') :?>
                        ตั้งแต่ <?=  phphelp::str_to_thai_date($event->volunteer_begin_date ); ?> 
                        <br />
                        ถึง <?= phphelp::str_to_thai_date($event->volunteer_end_date);  ?> 
                        <br>
                        เวลา : <?= date("H:i", strtotime($event->volunteer_begin_time)); ?> น. - 
                        <?= date("H:i", strtotime($event->volunteer_end_time));?> น.
                        <br />
                        <?=  'ทุกวัน '.(($event->days == '') ?  '': $event->days).' (ไป-กลับ)' ?>
                        <br>
                        <? else  : ?>
                        
                        ตั้งแต่ <?=  phphelp::str_to_thai_date($event->volunteer_begin_date ); ?> 
                        เวลา : <?= date("H:i", strtotime($event->volunteer_begin_time)); ?> น.
                        <br />
                        ถึง <?= phphelp::str_to_thai_date($event->volunteer_end_date);  ?> 
                        เวลา :<?= date("H:i", strtotime($event->volunteer_end_time));?> น.
                        <br />
                        <?= $event->days ?>
                    <? endif?>
                    </div>
                    <div class="hours"><?= $event->time_cost ?> ชม.</div>
                </li>
                <? endforeach ?>
			</ul></div>
			<div class="hidelist" id="list_interestevent">
			<ul class="list">
								<li>
	                                    	<img src="/media/upload/events/50330fc0aac80224355_406106769439262_1042410411_n.jpg" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/46">วัฒนธรรมชนบท การช่วงชิงพื้นที่ของการถูกกำหนดนิยาม</a></div>
                    <div class="detail">
                                            ตั้งแต่ 28 สิงหาคม 2555 
                        <br />
                        ถึง 28 สิงหาคม 2555 
                        <br>
                        เวลา : 08:30 น. - 
                        12:00 น.
                        <br />
                        ทุกวัน อังคาร,  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">4 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/506029b99b25bDSC04635.JPG" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/93">โท๊ดดดด สอบบบบ 34534</a></div>
                    <div class="detail">
                                            ตั้งแต่ 3 พฤศจิกายน 2555 
                        <br />
                        ถึง 14 ธันวาคม 2555 
                        <br>
                        เวลา : 09:30 น. - 
                        21:30 น.
                        <br />
                        ทุกวัน เสาร์ (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">72 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/50601f255c773JBank_website_IE8_spapshot_120919_17.png" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/84">ทดสอบบบบบบ บอบบบ บออบบบบบ 234</a></div>
                    <div class="detail">
                                            
                        ตั้งแต่ 6 ตุลาคม 2555 
                        เวลา : 05:00 น.
                        <br />
                        ถึง 13 ตุลาคม 2555 
                        เวลา :18:30 น.
                        <br />
                        ค้างคืน                                        </div>
                    <div class="hours">182 ชม.</div>
                </li>
                			</ul>
										<ul class="list">
								<li>
	                                    	<img src="/media/upload/events/50330fc0aac80224355_406106769439262_1042410411_n.jpg" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/46">วัฒนธรรมชนบท การช่วงชิงพื้นที่ของการถูกกำหนดนิยาม</a></div>
                    <div class="detail">
                                            ตั้งแต่ 28 สิงหาคม 2555 
                        <br />
                        ถึง 28 สิงหาคม 2555 
                        <br>
                        เวลา : 08:30 น. - 
                        12:00 น.
                        <br />
                        ทุกวัน อังคาร,  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">4 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/506029b99b25bDSC04635.JPG" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/93">โท๊ดดดด สอบบบบ 34534</a></div>
                    <div class="detail">
                                            ตั้งแต่ 3 พฤศจิกายน 2555 
                        <br />
                        ถึง 14 ธันวาคม 2555 
                        <br>
                        เวลา : 09:30 น. - 
                        21:30 น.
                        <br />
                        ทุกวัน เสาร์ (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">72 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/50601f255c773JBank_website_IE8_spapshot_120919_17.png" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/84">ทดสอบบบบบบ บอบบบ บออบบบบบ 234</a></div>
                    <div class="detail">
                                            
                        ตั้งแต่ 6 ตุลาคม 2555 
                        เวลา : 05:00 น.
                        <br />
                        ถึง 13 ตุลาคม 2555 
                        เวลา :18:30 น.
                        <br />
                        ค้างคืน                                        </div>
                    <div class="hours">182 ชม.</div>
                </li>
                			</ul>
										<ul class="list">
								<li>
	                                    	<img src="/media/upload/events/50330fc0aac80224355_406106769439262_1042410411_n.jpg" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/46">วัฒนธรรมชนบท การช่วงชิงพื้นที่ของการถูกกำหนดนิยาม</a></div>
                    <div class="detail">
                                            ตั้งแต่ 28 สิงหาคม 2555 
                        <br />
                        ถึง 28 สิงหาคม 2555 
                        <br>
                        เวลา : 08:30 น. - 
                        12:00 น.
                        <br />
                        ทุกวัน อังคาร,  (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">4 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/506029b99b25bDSC04635.JPG" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/93">โท๊ดดดด สอบบบบ 34534</a></div>
                    <div class="detail">
                                            ตั้งแต่ 3 พฤศจิกายน 2555 
                        <br />
                        ถึง 14 ธันวาคม 2555 
                        <br>
                        เวลา : 09:30 น. - 
                        21:30 น.
                        <br />
                        ทุกวัน เสาร์ (ไป-กลับ)                        <br>
                                            </div>
                    <div class="hours">72 ชม.</div>
                </li>
                				<li>
	                                    	<img src="/media/upload/events/50601f255c773JBank_website_IE8_spapshot_120919_17.png" 
                        style="width:216px; height:167px;border:5px solid #FFF;
                                -moz-box-shadow: 3px 3px 5px #999;
                                -webkit-box-shadow: 3px 5px 2px #999;
                                box-shadow: 3px 3px 5px #999;
                                ">
                                        <div class="description"><a href="/event/view/84">ทดสอบบบบบบ บอบบบ บออบบบบบ 234</a></div>
                    <div class="detail">
                                            
                        ตั้งแต่ 6 ตุลาคม 2555 
                        เวลา : 05:00 น.
                        <br />
                        ถึง 13 ตุลาคม 2555 
                        เวลา :18:30 น.
                        <br />
                        ค้างคืน                                        </div>
                    <div class="hours">182 ชม.</div>
                </li>
                			</ul>
							</div>
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
	</div>
</div>
<script type="text/javascript">
//scripts for expand event
  $(".more").click(function () {
    if ($(this).is("#yourevent")) {
		if($("#list_yourevent").is(":hidden")){
			$(".hidelist").hide();
			$("#list_yourevent").slideDown("slow");}
		else{
		$("#list_yourevent").hide();
		}
    } else if ($(this).is("#newevent")) {
     if($("#list_newevent").is(":hidden")){
			$(".hidelist").hide();
			$("#list_newevent").slideDown("slow");}
		else{
		$("#list_newevent").hide();
		}
    } else if ($(this).is("#interestevent")) {
     if($("#list_interestevent").is(":hidden")){
			$(".hidelist").hide();
			$("#list_interestevent").slideDown("slow");}
		else{
		$("#list_interestevent").hide();
		}
    }
  });
 //end script
</script>