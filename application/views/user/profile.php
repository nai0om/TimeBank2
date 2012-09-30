<link rel="stylesheet" href="<?= url::base(); ?>media/css/ui-lightness/jquery-ui-1.8.20.custom.css">
<div id="member" class="profile">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>แก้ไขข้อมูลส่วนตัว</li>
		</div>

		<div style="clear:both"></div>
		<div id="menu_left">
			<?php include Kohana::find_file('views', 'shared/usermenu') ?>
		</div>
        <?= Form::open('user/profile', array('enctype' => 'multipart/form-data')); ?>	
			<?php include Kohana::find_file('views', 'user/forms/profileforms') ?>	
               <div class="line" style="float:left"></div>
	  		<?php include Kohana::find_file('views', 'user/forms/skillforms') ?>
            
        <div style="clear:both"></div>
        	<?= Form::submit(NULL, 'บันทึกการเปลี่ยนแปลง'); ?>
		<?= Form::close(); ?>
		</div>
<?php include Kohana::find_file('views', 'shared/footer') ?>
		
		</div>
	
  </div>

  <script type="text/javascript" src="<?= url::base(); ?>media/widget/lib/jquery-1.7.1.js"></script>
  <script type="text/javascript" src="<?= url::base(); ?>media/widget/lib/jquery.ui.core.js"></script>
  <script type="text/javascript" src="<?= url::base(); ?>media/widget/lib/jquery.ui.widget.js"></script>
  <script type="text/javascript" src="<?= url::base(); ?>media/widget/lib/jquery.ui.rcarousel.js"></script>
  <script type="text/javascript" src="<?= url::base(); ?>media/js/jquery-ui-1.8.20.custom.min.js"></script>
  <script type="text/javascript">
			jQuery(function($) {
			
				$(function() {
					$( ".datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
				});
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