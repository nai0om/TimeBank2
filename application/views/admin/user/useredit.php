<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
  <?php include Kohana::find_file('views', 'admin/menus') ?>

<?= Form::open('admin/useredit/'.$valunteer->id , array('enctype' => 'multipart/form-data')); ?>

<?php include Kohana::find_file('views', 'user/forms/adminprofileforms') ?>	

<?php include Kohana::find_file('views', 'user/forms/adminskillforms') ?>
<hr>
<label>email</label>
<?= Form::input('email', $valunteer->email ); ?>    
<div class="error">
    <font color="red"><?= Arr::get($errors, 'email'); ?></font>
</div>  
        

<label>displayname</label>
<?= Form::input('displayname', $valunteer->displayname ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'displayname'); ?></font>
</div>  
        
<label>noti_eventrecommended</label>
<?= Form::input('noti_eventrecommended', $valunteer->noti_eventrecommended ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'noti_eventrecommended'); ?></font>
</div>  

<label>noti_eventapproved</label>
<?= Form::input('noti_eventapproved', $valunteer->noti_eventapproved ); ?>    
<div class="error">
    <font color="red"><?= Arr::get($errors, 'noti_eventapproved'); ?></font>
</div>  

<label>noti_almosteventdate</label>
<?= Form::input('noti_almosteventdate', $valunteer->noti_almosteventdate ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'noti_almosteventdate'); ?></font>
</div>  

<label>noti_eventthank</label>
<?= Form::input('noti_eventthank', $valunteer->noti_eventthank ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'noti_eventthank'); ?></font>
</div>  

<label>noti_sms_eventapproved</label>
<?= Form::input('noti_sms_eventapproved', $valunteer->noti_sms_eventapproved ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'noti_sms_eventapproved'); ?></font>
</div> 
        
<label>noti_sms_almosteventdate</label>
<?= Form::input('noti_sms_almosteventdate', $valunteer->noti_sms_almosteventdate ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'noti_sms_almosteventdate'); ?></font>
</div>

<label>noti_sms_news</label>
<?= Form::input('noti_sms_news', $valunteer->noti_sms_news ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'noti_sms_news'); ?></font>
</div>  
        
<label>role</label>
<?= Form::input('role', $valunteer->role ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'role'); ?></font>
</div>  


<label>quote</label>
<?= Form::input('quote', $valunteer->quote ); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'quote'); ?></font>
</div> 

<label>description</label>
<?= Form::input('description', $valunteer->description ); ?>    
<div class="error">
    <font color="red"><?= Arr::get($errors, 'description'); ?></font>
</div>  




<label>interest_tags</label>
<?= Form::input('interest_tags', $valunteer->interest_tags, array('style' => 'width:1000px')); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'interest_tags'); ?></font>
</div>  

<label>location</label>
<?= Form::input('location', $valunteer->location); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'location'); ?></font>
</div>  

<label>province</label>
<?= Form::input('province', $valunteer->province); ?>    
<div class="error">
	<font color="red"><?= Arr::get($errors, 'province'); ?></font>
</div>  



<input type="submit" value="แก้ไข" />


<?= Form::close(); ?>

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