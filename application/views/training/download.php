<div id="training">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ความรู้</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div class="title left"></div>
		<div class="title body past"><?= HTML::anchor('training', 'ฝึกอบรม'); ?></div>
		<div class="title right"></div>
		<div class="title left"></div>
		<div class="title body"><?= HTML::anchor('training/download', 'ความรู้'); ?></div>
		<div class="title right"></div>
		<div style="clear:both"></div>
		
        <div id="content">
        	<br />
        	<h2>คู่มือจิตอาสา</h2>
            <p>ภาคี เครือข่ายจิตอาสา เครือข่ายพุทธิกา สสส. และ สช. ร่วมแบ่งปัน "คู่มือจิตอาสา" สำหรับทั้งอาสาสมัครและ องค์กรที่บริหารจัดการอาสาสมัคร</p>
			<p>เป็นแนวทางง่ายๆ ที่ช่วยให้การออกมาทำความดีร่วมกันเกิดประโยชน์สูงสุดทั้งผู้ให้และผู้รับ ช่วยให้อาสาสมัคร ทำงานโดยมี "จิตอาสา" เกิดผลดีทั้งต่องานและต่อการเรียนรู้ ฝึกฝน ขัดเกลาตนเอง</p> 
			<p>มีสองเวอร์ชัน คือ</p>
			<p><a href="<?= url::base().'media/upload/download/volunteer_2011_guidline.pdf' ?>">1. Volunteer 2011 Guideline: สำหรับแผ่นพับขนาดเอสี่ สองหน้า (หน้าหลัง พับครึ่ง)</a></p>
			<p><a href="<?= url::base().'media/upload/download/volunteer_2011_guidline_poster.pdf' ?>">2. Volunteer 2011 Guideline Poster: สำหรับโปสเตอร์ขนาดเอสี่ สองหน้าต่อกัน</a></p>
			<p>สามารถผลิตเพิ่มและใช้ได้ตามสะดวก</p> 
			<p>ยินดีรับคำแนะนำเพื่อการพัฒนาเอกสารให้รับใช้สังคมได้ดีที่สุด โดยส่งมาที่ JitArsaBank (เครื่องหมาย @) gmail.com</p>

        </div>
		
		<div style="clear:left"></div>
		<div class="line" style="width:82%;float:left"></div>
		
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
				width: 403,
				height: 272,
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
				width: 886,
				height: 197,
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