<div id="training" class="gallery">
  <div id="main" role="main">
			<div style="clear:both"></div>
		<div id="content">
				<div id="carousel">
                <? foreach($images as $image) :?>
                    <div id="slide<?= $image['id']  ?>" class="slide">
                    <? if($image['link'] != '')  echo  '<a href="'.url::base().$image['link'].'" />'; ?>
                 	  
                    	<img  src="<?= url::base().''.$image['image'] ?>" />
                    <? if($image['link'] != '') echo '</a>' ?>
                       <div>
                       	 <h2><?= $image['description'] ?></h2>
                       </div>
                   </div>
                   
                <? endforeach ?>
				</div>
				<a href="#" id="ui-carousel-next"><span>next</span></a>
				<a href="#" id="ui-carousel-prev"><span>prev</span></a>
			<div id="pages"></div>
			
		</div>


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
						.css( "background-image", "url(img/brown_circle.png)" );


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
						.css( "background-image", "url(<?= url::base() ?>media/img/brown_circle.png)" );	

				}

				function pageLoaded( event, data ) {
					$( "a.on", "#pages" )
						.removeClass( "on" )
						.css( "background-image", "url(<?= url::base() ?>media/img/brown_circle.png)" );

					$( "a", "#pages" )
						.eq( data.page )
						.addClass( "on" )
						.css( "background-image", "url(<?= url::base() ?>media/img/brown_circle.png)" );
				}
				
				function pageLoaded2( event, data ) {
					$( "a.on", "#pages2" )
						.removeClass( "on" )
						.css( "background-image", "url(<?= url::base() ?>media/img/brown_circle.png)" );

					$( "a", "#pages2" )
						.eq( data.page )
						.addClass( "on" )
						.css( "background-image", "url(<?= url::base() ?>media/img/brown_circle.png)" );
						
				}
				
				$("#carousel").rcarousel(
					{
						visible: 1,
						step: 1,
						speed: 700,
						startAtPage: <?= $first_page?> ,
						auto: {
							enabled: false
						},
						width: 460,
						height: 311,
						start: generatePages,
						pageLoaded: pageLoaded
					}
				);
				
			
				$( "#ui-carousel-next" )
					.add( "#ui-carousel-prev" )
					.add( ".bullet" )
					.hover(
						function() {
							$( this ).css( "opacity", 0.7 );
						},
						function() {
							$( this ).css( "opacity", 1.0 );
						}
					);
			});
		</script>
  