<div id="main_timeBank">
 <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ธนาคารจิตอาสา</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div id="icon_set">
            <?= HTML::anchor('welcome/timebankhow', '<img src="'.url::base().'media/img/icon_how_it_work.png"/>'); ?>
            <?= HTML::anchor('event/browse', '<img src="'.url::base().'media/img/icon_browse_event.png"/>'); ?>
            <?= HTML::anchor('help', '<img src="'.url::base().'media/img/icon_help.png"/>'); ?>
			<h2>ธนาคารจิตอาสา</h2>
		</div>
		
		<div id="bannerRotating">
			<div id="carouselBanner">
				<div id="slide01" class="slide">
					<h3><?= $time_donate ?> ชม.</h3>
					<p>เวลารวมที่อาสา<br>ฝากไว้กับธนาคาร</p>
				</div>
						
				<div id="slide02" class="slide">
					<h3><?= $time_want ?> ชม.</h3>
					<p>เวลารวมของภารกิจ<br>ที่ต้องการอาสา</p>
				</div>
						
				<div id="slide03" class="slide">
					<h3><?= $time_done ?> ชม.</h3>
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
			<h3><a href="<?= url::base().'user/create' ?>"><span style="text-decoration:underline">ฝากเวลา</span></a>  <span style="font-size:20px;">หรือ</span>  <a href="<?= url::base().'organization/create' ?>"> <span style="text-decoration:underline">สร้างภารกิจจิตอาสา</span></a></h3>
		</blockquote>
	
		<h3 class="title">ข้นตอนฝากเวลาเป็นอาสา</h3>
		<ol>
			<li><strong>สมัครบอกความตั้งใจให้เวลา</strong><p>กรอกชื่อ อีเมล รหัสผ่าน และฝากจำนวนชั่วโมงตามที่ตั้งใจ</p></li>
			<li><strong>เลือกใช้เวลากับงานอาสาที่ตรงใจ</strong><p>ค้นหาและสมัครภารกิจจิตอาสาที่สอดคล้องกับเวลา ความสนใจ หรือทักษะของเรา</p></li>
			<li><strong> แบ่งปันประสบการณ์และยืนยันการใช้เวลา</strong><p>เล่าความประทับใจ การเรียนรู้ เรื่องราวจากภารกิจจิตอาสา และยืนยันเวลาที่ได้ใช้ไปแล้ว</p></li>
		</ol>
        
		<h3 class="title">ขั้นตอนสร้างภารกิจจิตอาสา</h3>
		<ol>
			<li><strong>ให้ข้อมูลและแนะนำองค์กร</strong><p>สร้างบัญชีผู้ใช้ และบอกเล่าเรื่องราวเกี่ยวกับกลุ่ม/องค์กรอาสาของเรา</p></li>
			<li><strong>สร้างภารกิจ เปิดโอกาสใช้เวลาอาสา</strong><p>ระบุรายละเอียดของภารกิจให้ครบถ้วน เช่นเวลาที่ใช้ ลักษณะงาน และทักษะที่ต้องการ</p></li>
			<li><strong>ตอบรับและตอบกลับ เมื่อบรรลุภารกิจ</strong><p>ตอบรับอาสาที่สมัครเข้าร่วมและตอบกลับเมื่อสิ้นภารกิจโดยบันทึกเวลาพร้อมคำขอบคุณ</p></li>
		</ol>
	
		<h3 class="title" align="center">บอกเล่าจากใจอาสา</h3>
		<ul id="volunteer">
			<li>
				<img src="<?= url::base(); ?>media/img/tb_sample_profile.png"/>
				<p><strong>name surname</strong></p>
				<p>Neque tum eos illa opinio fefellit.</p>
				<a>ดูภารกิจ</a>
				<div>Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</div>
			</li>
			<li>
				<img src="<?= url::base(); ?>media/img/tb_sample_profile.png"/>
				<p><strong>name surname</strong></p>
				<p>Neque tum eos illa opinio fefellit.</p>
				<a>ดูภารกิจ</a>
				<div>Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</div>
			</li>
			<li>
				<img src="<?= url::base(); ?>media/img/tb_sample_profile.png"/>
				<p><strong>name surname</strong></p>
				<p>Neque tum eos illa opinio fefellit.</p>
				<a>ดูภารกิจ</a>
				<div>Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</div>
			</li>
		</ul>
		<p align="center" style="margin:0;"><img src="<?= url::base(); ?>media/img/tb_line.png"/></p>
		<ul id="summary">
			<li><p>จำนวนอาสาที่ร่วมฝากเวลา ....</p><div class="showNumber">92</div></li>
			<li><p>จำนวนภารกิจที่กำลังเปิดรับ ....</p><div class="showNumber">92</div></li>
			<li><p>จำนวนภารกิจที่เสร็จสิ้นแล้ว ....</p><div class="showNumber">92</div></li>
			<li><p>จำนวนอาสาทั้งหมดที่เคยร่วมปฏิบัติภารกิจ ....</p><div class="showNumber">92</div></li>
		</ul>
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
				.css( "background-image", "url(img/brown_circle.png)" );


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
				.css( "background-image", "url(img/brown_circle.png)" );	

		}

		function pageLoaded( event, data ) {
			$( "a.on", "#pages" )
				.removeClass( "on" )
				.css( "background-image", "url(img/brown_circle.png)" );

			$( "a", "#pages" )
				.eq( data.page )
				.addClass( "on" )
				.css( "background-image", "url(img/brown_circle.png)" );
		}
		
		function pageLoaded2( event, data ) {
			$( "a.on", "#pages2" )
				.removeClass( "on" )
				.css( "background-image", "url(img/brown_circle.png)" );

			$( "a", "#pages2" )
				.eq( data.page )
				.addClass( "on" )
				.css( "background-image", "url(img/brown_circle.png)" );
				
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