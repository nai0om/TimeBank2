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
			<a class="more" id="yourevent">ดูเพิ่มเติม</a>
			<div style="clear:both"></div>
			<div class="showlist">
			<ul class="list">
				 <? for ($i = 0; $i < count($event_recommends) ; $i++) : ?>
                  <?  $event = $event_recommends[$i]; ?>
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
                <? endfor ?>
			</ul></div>
			<div class="hidelist" id="list_yourevent">
			<ul class="list">
                  <? for ($i = 3; $i < count($event_recommends) ; $i++) : ?>
                  <?  $event = $event_recommends[$i]; ?>
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
                <? endfor ?>
               </ul>
				</div>
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">ภารกิจจิตอาสาล่าสุด</div>
			<div class="title right"></div>
			<div class="line" style="width:374px;"></div>
			<a class="more" id="newevent">ดูเพิ่มเติม</a>
			<div style="clear:both"></div>
			<div class="showlist">
			<ul class="list">
				<? for( $i = 0 ; $i < count($events_rand); $i++) : ?>
                <? $event = $events_rand[$i]; ?>
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
                <? endfor ?>
			</ul></div>
			<div class="hidelist" id="list_newevent">
			<ul class="list">
		            
                	<? for( $i = 3 ; $i < count($events_rand); $i++) : ?>
                    <? $event = $events_rand[$i]; ?>
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
                <? endfor ?>
               </ul>
                		
					</div>
			<div style="clear:both"></div>
			<div class="title left"></div>
			<div class="title body">ภารกิจจิตอาสาที่น่าสนใจ</div>
			<div class="title right"></div>
			<div class="line"></div>
			<a class="more" id="interestevent">ดูเพิ่มเติม</a>
			<div style="clear:both"></div>
			<div class="showlist">
			<ul class="list">
				<? for( $i = 0 ; $i < count($events) ; $i++) : ?>
                <? $event = $events[$i]; ?>
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
                <? endfor ?>
			</ul></div>
			<div class="hidelist" id="list_interestevent">
			<ul class="list">
                 	<? for( $i = 3 ; $i < count($events) ; $i++) : ?>
                <? $event = $events[$i]; ?>
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
                <? endfor ?>
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