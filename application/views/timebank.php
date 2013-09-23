<div id="main_timeBank">
 <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ใช้บริการธนาคารจิตอาสา</li>
		</div>

		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('help', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
			<h2>ใช้บริการธนาคารจิตอาสา</h2>
		</div>
		 <?	
			$style1 = '';
			$style2 = '';
			$style3 = '';
			
			if($time_donate > 100000000)
				$style1 = 'font-size: 35px; line-height: 70px;';
			if($time_want > 100000000)
				$style2 = 'font-size: 35px; line-height: 70px;';
			if($time_done > 100000000)
				$style3 = 'font-size: 35px; line-height: 70px;';
				
			if($time_donate > 100000000000000)
				$style1 = 'font-size: 25px; line-height: 70px;';
			if($time_want > 100000000000000)
				$style2 = 'font-size: 25px; line-height: 70px;';
			if($time_done > 100000000000000)
				$style3 = 'font-size: 25px; line-height: 70px;';

		?>
		<div id="bannerRotating">
			<div id="carouselBanner">
				<div id="slide01" class="slide">
					<h3  style="<?= $style1 ?>" ><?= number_format($time_donate) ?> ชั่วโมง</h3>
					<p>เวลารวมที่อาสา<br>ฝากไว้กับธนาคาร</p>
				</div>
						
				<div id="slide02" class="slide">
					<h3  style="<?= $style2 ?>" ><?= number_format($time_want) ?> ชั่วโมง</h3>
					<p>เวลารวมของภารกิจ<br>ที่ต้องการอาสา</p>
				</div>
						
				<div id="slide03" class="slide">
					<h3  style="<?= $style3 ?>" ><?= number_format($time_done) ?> ชั่วโมง</h3>
					<p>เวลารวมที่อาสา<br>ได้ปฏิบัติภารกิจไปแล้ว</p>
				</div>
					
			</div>
				<a href="#" id="ui-carousel-next"><span>next</span></a>
				<a href="#" id="ui-carousel-prev"><span>prev</span></a>
			<div id="pages2"></div>
		</div>
		
		<div id="banner"><img src="<?= url::base(); ?>media/img/banner.png" /></div>
		
		<blockquote>
			<h2>ปันเวลาช่วยกัน</h2>
			<p>มาช่วยกันสร้างสรรค์สังคมของเรา ผ่านการฝากเวลา เพื่อปฏิบัติภารกิจจิตอาสา (หากคุณเป็นอาสาสมัคร) หรือสร้างภารกิจจิตอาสา เพื่อเป็นโอกาสในการใช้เวลา (หากคุณเป็นองค์กรอาสา) </p>
			<h3><a href="<?= url::base().'user/record' ?>"><span style="text-decoration:underline">ฝากเวลา</span></a>  <span style="font-size:20px;">หรือ</span> 
             <a href="<?= url::base().'event/create' ?>"> <span style="text-decoration:underline">สร้างภารกิจจิตอาสา</span></a></h3>

		</blockquote>
		
	<h3 class="title" align="center">บอกเล่าจากใจอาสา</h3>
		<ul id="volunteer">
        <? foreach($comments as $comment) : ?>
			<li>
            	<? if ($comment['user_image'] != '') :?>
					<img src="<?= url::base().'media/upload/volunteers/'.$comment['user_image'] ?>" style="width:150px; height:150px" />
                 <? else : ?>
                 	<img src="<?= url::base().'sample_member_01.png'?>" style="width:150px; height:150px" />
                 <? endif ?>
				<p><strong><?= $comment['user_display'] ?></strong></p>
				<p></p>
				<?= HTML::anchor('event/view/'.$comment['event_id'],  'ดูภารกิจ'); ?>
				<div><?= $comment['comment']?>
                <? if ($comment['need_more'] == true) :?>
				   <a href="<?= url::base(); ?>event/view/<?= $comment['event_id'].'#'.$comment['comment_id']; ?>" class="readmore">[ อ่านต่อ ]</a>
                <? endif ?>
				</div>
                
			</li>
        <? endforeach ?>
		</ul>
		
		<h3 class="title">ขั้นตอนฝากเวลาเป็นอาสา</h3>
		<ol>
			<li><strong>สมัครบอกความตั้งใจให้เวลา</strong><p>กรอกชื่อ อีเมล รหัสผ่าน และฝากจำนวนชั่วโมงตามที่ตั้งใจ <a href="http://www.youtube.com/watch?v=W3dbESdNf54">(ดูคลิปแนะนำ)</a></p></li>
			<li><strong>เลือกใช้เวลากับงานอาสาที่ตรงใจ</strong><p>ค้นหาและสมัครภารกิจจิตอาสาที่สอดคล้องกับเวลา ความสนใจ หรือทักษะของเรา <a href="http://www.youtube.com/watch?v=zxc8n6V4Eak">(ดูคลิปแนะนำ)</a></p></li>
			<li><strong>แบ่งปันประสบการณ์และยืนยันการใช้เวลา</strong><p>เล่าความประทับใจ การเรียนรู้ เรื่องราวจากภารกิจจิตอาสา และยืนยันเวลาที่ได้ใช้ไปแล้ว <a href="http://www.youtube.com/watch?v=_JWTzdpmbKQ">(ดูคลิปแนะนำ)</a></p></p></li>
		</ol>
        
		<h3 class="title">ขั้นตอนสร้างภารกิจจิตอาสา</h3>
		<ol>
			<li><strong>ให้ข้อมูลและแนะนำองค์กร</strong><p>สร้างบัญชีผู้ใช้ และบอกเล่าเรื่องราวเกี่ยวกับกลุ่ม/องค์กรอาสาของเรา</p></li>
			<li><strong>สร้างภารกิจ เปิดโอกาสใช้เวลาจิตอาสา</strong><p>ระบุรายละเอียดของภารกิจให้ครบถ้วน เช่นเวลาที่ใช้ ลักษณะงาน และทักษะที่ต้องการ</p></li>
			<li><strong>ตอบรับและตอบกลับ เมื่อบรรลุภารกิจ</strong><p>ตอบรับอาสาที่สมัครเข้าร่วมและตอบกลับเมื่อสิ้นภารกิจโดยบันทึกเวลาพร้อมคำขอบคุณ</p></li>
		</ol>
	
		<p align="center" style="margin:0;"><img src="<?= url::base(); ?>media/img/tb_line.png"/></p>
		<ul id="summary">
			<li><p>จำนวนอาสาที่ร่วมฝากเวลา ....</p><div class="showNumber"><?= number_format(timebankhelper::getAllValunteerNumber()) ?></div></li>
			<li><p>จำนวนภารกิจที่กำลังเปิดรับ ....</p><div class="showNumber"><?= number_format(timebankhelper::getOpenEventNumber()) ?></div></li>
			<li><p>จำนวนภารกิจที่เสร็จสิ้นแล้ว ....</p><div class="showNumber"><?= number_format(timebankhelper::getClosedEventNumber()) ?></div></li>
			<li><p>จำนวนอาสาทั้งหมดที่เคยร่วมปฏิบัติภารกิจ ....</p><div class="showNumber"><?= number_format(timebankhelper::getJoinedValunteerNumber()) ?></div></li>
		</ul>
<?php include Kohana::find_file('views', 'shared/footer') ?>
  </div>
</div>

<script type="text/javascript">
	jQuery(function($) {
		function generatePages() {
			var _total, i, _link;
			
			_total = $( "#carousel" ).rcarousel( "getTotalPages" );
			
			for ( i = 0; i < _total; i++ ) {
				_link = $( "<a href='#'></a>" );
				
				$(_link)
					.bind("click", {page: i},
						function( event ) {
							$( "#carousel" ).rcarousel( "goToPage", event.data.page );
							event.preventDefault();
						}
					)
					.addClass( "bullet off" )
					.appendTo( "#pages" );
			}
				
			// mark first page as active
			$( "a:eq(0)", "#pages" )
				.removeClass( "off" )
				.addClass( "on" )
				.css( "background-image", "url(<?= url::base(); ?>media/img/brown_circle.png)" );


		}
		
		function generatePages2() {
			
			var _total2, i, _link;
			
			_total2 = $( "#carouselBanner" ).rcarousel( "getTotalPages" );
			
			for ( i = 0; i < _total2; i++ ) {
				_link = $( "<a href='#'></a>" );
				
				$(_link)
					.bind("click", {page: i},
						function( event ) {
							$( "#carouselBanner" ).rcarousel( "goToPage", event.data.page );
							event.preventDefault();
						}
					)
					.addClass( "bullet off" )
					.appendTo( "#pages2" );
			}
			
			// mark first page as active
			$( "a:eq(0)", "#pages2" )
				.removeClass( "off" )
				.addClass( "on" )
				.css( "background-image", "url(<?= url::base(); ?>media/img/brown_circle.png)" );	

		}

		function pageLoaded( event, data ) {
			$( "a.on", "#pages" )
				.removeClass( "on" )
				.css( "background-image", "url(<?= url::base(); ?>media/img/brown_circle.png)" );

			$( "a", "#pages" )
				.eq( data.page )
				.addClass( "on" )
				.css( "background-image", "url(<?= url::base(); ?>media/img/brown_circle.png)" );
		}
		
		function pageLoaded2( event, data ) {
			$( "a.on", "#pages2" )
				.removeClass( "on" )
				.css( "background-image", "url(<?= url::base(); ?>media/img/brown_circle.png)" );

			$( "a", "#pages2" )
				.eq( data.page )
				.addClass( "on" )
				.css( "background-image", "url(<?= url::base(); ?>media/img/brown_circle.png)" );
				
		}
		
		$("#carousel").rcarousel(
			{
				visible: 1,
				step: 1,
				speed: 700,
				auto: {
					enabled: true
				},
				width: 350,
				height: 250,
				start: generatePages,
				pageLoaded: pageLoaded
			}
		);
		
		$("#carouselBanner").rcarousel(
			{
				visible: 1,
				step: 1,
				speed: 700,
				auto: {
					enabled: true
				},
				width: 450,
				height: 215,
				start: generatePages2,
				pageLoaded: pageLoaded2
			}
		);
		
		$( "#ui-carousel-next" )
			.add( "#ui-carousel-prev" )
			.add( ".bullet" )
			.hover(
				function() {
					$( this ).css( "opacity", 0.7 );
				},
				function() {
					$( this ).css( "opacity", 1.0 );
				}
			);
	});
</script>