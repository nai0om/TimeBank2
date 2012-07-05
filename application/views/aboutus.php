<div id="about_us">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>เกี่ยวกับเว็บไซต์</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		<div style="clear:both"></div>
		<h2>เกี่ยวกับเวบไซต์</h2>
		<div class="column two">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
			
			<div id="bannerRotating">
			<div id="carouselBanner">
				<div id="slide01" class="slide">
					<img src="<?= url::base(); ?>media/img/about_banners.jpg">
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
		</div>
		
		<div class="column two">
			<img src="<?= url::base(); ?>media/img/about_01.jpg">
			<h3>เวลาตั้งใจอาสา</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
			<h3>เวลางานอาสา</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
			<h3>เวลาทำอาสา</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
		</div>

		<ol>
			<li>
				<img src="<?= url::base(); ?>media/img/about_website_1.jpg">
				<div class="top"></div>
				<div class="body">
					<p>Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
				</div>
				<div class="bottom"></div>
				<p class="sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			</li>
			<li>
				<img src="<?= url::base(); ?>media/img/about_website_2.jpg">
				<div class="top"></div>
				<div class="body">
					<p>Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
				</div>
				<div class="bottom"></div>
				<p class="sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			</li>
			<li>
				<img src="<?= url::base(); ?>media/img/about_website_3.jpg">
				<div class="top"></div>
				<div class="body">
					<p>Neque tum eos illa opinio fefellit.  Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.  Illi autem statim hominem deduxerunt in.</p>
				</div>
				<div class="bottom"></div>
				<p class="sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			</li>
		</ol>
		
		

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