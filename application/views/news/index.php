<div id="training">
	<div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>ข่าวแวดวง</li>
		</div>

		<div style="clear:both"></div>
		<div class="title left"></div>
		<div class="title body">ข่าวแวดวง</div>
		<div class="title right"></div>
		
		<div id="bannerRotating">
			<div id="carouselBanner">
				<div id="slide01" class="slide">
					<img src="<?= url::base(); ?>media/img/long_banner6.png">
				</div>
						
				<div id="slide02" class="slide">
					<img src="<?= url::base(); ?>media/img/long_banner4.png">
				</div>
						
				<div id="slide03" class="slide">
					<img src="<?= url::base(); ?>media/img/long_banner8.png">
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
		
		<p><span style="color: #0099CC;font-family: tahoma;font-size: 20px;font-weight: bold;">ทั้งหมด</span> <span style="color: #f9941c;font-family: tahoma;font-size: 20px;font-weight: bold;"><?= count($news) ?></span></p>
		 
		<ul id="list">
        <? foreach($news as $new) : ?>
			<li>
				<?= HTML::anchor('news/view/'.$new->id, '<img src="'.url::base().'media/upload/news/'. $new->pic_thm. '" style="float:left;">') ?>
				<h3><?= $new->topic ?></h3>
				<p><?= substr($new->message, 0, 100); ?><?= HTML::anchor('news/view/'.$new->id, '...[อ่านต่อ]'); ?> </p>
			</li>
        <? endforeach?>
		</ul>
		
		<div style="clear:left"></div>
		<div class="line" style="width:82%;float:left"></div>
		<!--ul id="pagination">
			<li>Page 1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
		</ul -->
		
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
				width: 960,
				height: 225,
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