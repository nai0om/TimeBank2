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
					<h3>XXX ชม.</h3>
					<p>จํานวนรวมเวลาที่อาสาสมัคร<br>ฝากไว้กับระบบทั้งหมด</p>
				</div>
						
				<div id="slide02" class="slide">
					<h3>YYY ชม.</h3>
					<p>จํานวนรวมเวลาที่อาสาสมัคร<br>ฝากไว้กับระบบทั้งหมด</p>
				</div>
						
				<div id="slide03" class="slide">
					<h3>ZZZ ชม.</h3>
					<p>จํานวนรวมเวลาที่อาสาสมัคร<br>ฝากไว้กับระบบทั้งหมด</p>
				</div>
					
			</div>
				<a href="#" id="ui-carousel-next"><span>next</span></a>
				<a href="#" id="ui-carousel-prev"><span>prev</span></a>
			<div id="pages2"></div>
		</div>
		
		<div id="banner"><img src="<?= url::base(); ?>media/img/banner.png" /></div>
		
		<blockquote>
			<h2>สนใจเป็นอาสาสมัคร</h2>
			<p>Loremi psumonsecte tueradipisci ngelit, seddiamn onummyni bheuismod. Loremipsum onsectetuerad ipiscingelit, seddiamnon ummynibheuismod.</p>
			<h3><span style="text-decoration:underline">ดูงานอาสา</span>   <span style="font-size:20px;">หรือ</span>   <span style="text-decoration:underline">สร้างโอกาสในการใช้เวลา</span></h3>
		</blockquote>

		<h3 class="title">ขั้นตอนหาอาสามัคร</h3>
		<ol>
			<li><strong>สมัครบอกเล่าแนะนำตัว</strong><p>สร้างบัญชีผู้ใช้และให้ข้อมูลองค์กร</p></li>
			<li><strong>สร้างงาน เปิดโอกาสการใช้เวลาอาสา</strong><p>ระบุรายละเอียดของงาน เพื่อให้อาสาสมัครได้พบงานที่ตรงกับความสนใจและความสามารถ</p></li>
			<li><strong>ตอบรับและตอบกลับ เมื่องานเสร็จ</strong><p>ตอบรับอาสาที่สมัครเข้าร่วมและบันทึกเวลาเมื่อจบงานพร้อมคำขอบคุณ</p></li>
		</ol>
		
		<h3 class="title">ขั้นตอนสมัครอาสา</h3>
		<ol>
			<li><strong>สมัครบอกความตั้งใจให้เวลา</strong><p>กรอกชื่อ อีเมล รหัสผ่าน</p></li>
			<li><strong>เลือกใช้เวลากับงานอาสาที่ตรงใจ</strong><p>ค้นหาและสมัครไปอาสากับงานที่สอดคล้องกับความสนใจหรือทักษะของเรา</p></li>
			<li><strong> บอกเล่าประสบการณ์และยืนยันการใช้เวลา</strong><p>เล่าความประทับใจ การเรียนรู้ เรื่องราวจากงานอาสาและยืนยันเวลาที่ใช้ไปหลังได้ทำงานแล้ว</p></li>
		</ol>
		
		<h3 class="title" align="center">จากใจ...อาสาสมัคร</h3>
		<ul id="volunteer">
			<li>
				<img src="<?= url::base(); ?>media/img/tb_sample_profile.png"/>
				<p><strong>name surname</strong></p>
				<p>Neque tum eos illa opinio fefellit.</p>
				<a>ชมภาพ</a>
				<div>Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</div>
			</li>
			<li>
				<img src="<?= url::base(); ?>media/img/tb_sample_profile.png"/>
				<p><strong>name surname</strong></p>
				<p>Neque tum eos illa opinio fefellit.</p>
				<a>ชมภาพ</a>
				<div>Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</div>
			</li>
			<li>
				<img src="<?= url::base(); ?>media/img/tb_sample_profile.png"/>
				<p><strong>name surname</strong></p>
				<p>Neque tum eos illa opinio fefellit.</p>
				<a>ชมภาพ</a>
				<div>Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</div>
			</li>
		</ul>
		<p align="center" style="margin:0;"><img src="<?= url::base(); ?>media/img/tb_line.png"/></p>
		<ul id="summary">
			<li><p>อาสาสมัครเข้าร่วมงานอาสาสมัครขณะนี้ ....</p><div class="showNumber">92</div></li>
			<li><p>งานอาสาที่ต้องการอาสาสมัครขณะนี้ ....</p><div class="showNumber">92</div></li>
			<li><p>งานอาสาที่ผ่านมาทั้งหมด....</p><div class="showNumber">92</div></li>
			<li><p>อาสาสมัครทั้งหมดที่เคยผ่านงานอาสากับเรา</p><div class="showNumber">92</div></li>
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