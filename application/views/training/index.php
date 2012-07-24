<div id="training">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ฝึกอบรม</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div class="title left"></div>
		<div class="title body"><?= HTML::anchor('training', 'ฝึกอบรม'); ?></div>
		<div class="title right"></div>
		<div class="title left"></div>
		<div class="title body past"><?= HTML::anchor('training/download', 'ความรู้'); ?></div>
		<div class="title right"></div>
		
		<div id="bannerRotating">
			<div id="carouselBanner">
				<div id="slide01" class="slide">
					<img src="<?= url::base(); ?>media/img/long_banner.png">
				</div>
						
				<div id="slide02" class="slide">
					<img src="<?= url::base(); ?>media/img/long_banner.png">
				</div>
						
				<div id="slide03" class="slide">
					<img src="<?= url::base(); ?>media/img/long_banner.png">
				</div>
					
			</div>
				<a href="#" id="ui-carousel-next"><span>next</span></a>
				<a href="#" id="ui-carousel-prev"><span>prev</span></a>
			<div id="pages2"></div>
		</div>
		<div style="clear:left"></div>
		<div class="title left"></div>
		<div class="title body">ข่าวสารต่างๆ</div>
		<div class="title right"></div>
		<div class="line"></div>
		<div style="clear:left"></div>
		
		<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;">20</span></p>
		
		<ul id="list">
			<li>
				<img src="<?= url::base(); ?>media/img/about_02.png" style="float:left;">
				<h3>Consectetuer</h3>
				<p>Neque tum eos illa opinio fefellit. Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.<a>[อ่านต่อ]</a></p>
			</li>
			<li>
				<img src="<?= url::base(); ?>media/img/about_02.png" style="float:left;">
				<h3>Consectetuer</h3>
				<p>Neque tum eos illa opinio fefellit. Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.<a>[อ่านต่อ]</a></p>
			</li>
			<li>
				<img src="<?= url::base(); ?>media/img/about_02.png" style="float:left;">
				<h3>Consectetuer</h3>
				<p>Neque tum eos illa opinio fefellit. Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.<a>[อ่านต่อ]</a></p>
			</li>
			<li>
				<img src="<?= url::base(); ?>media/img/about_02.png" style="float:left;">
				<h3>Consectetuer</h3>
				<p>Neque tum eos illa opinio fefellit. Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.<a>[อ่านต่อ]</a></p>
			</li>
			<li>
				<img src="<?= url::base(); ?>media/img/about_02.png" style="float:left;">
				<h3>Consectetuer</h3>
				<p>Neque tum eos illa opinio fefellit. Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.<a>[อ่านต่อ]</a></p>
			</li>
			<li>
				<img src="<?= url::base(); ?>media/img/about_02.png" style="float:left;">
				<h3>Consectetuer</h3>
				<p>Neque tum eos illa opinio fefellit. Nam Zeuxis ilico quaesivit ab iis,quasnam virgines formosas haberent.<a>[อ่านต่อ]</a></p>
			</li>
		</ul>
		
		<div style="clear:left"></div>
		<div class="line" style="width:82%;float:left"></div>
		<ul id="pagination">
			<li>หน้า 1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
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