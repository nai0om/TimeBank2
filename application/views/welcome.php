<div id="home">
  <div id="main" role="main">
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		<div id="banner">
			<div id="carouselMain">
					<div id="slide01" class="slide">
						<img src="<?= url::base(); ?>media/img/banner_welcome1.png" />
					</div>
							
					<div id="slide02" class="slide">
						<img src="<?= url::base(); ?>media/img/banner_welcome1.png" />
					</div>
							
					<div id="slide03" class="slide">
						<img src="<?= url::base(); ?>media/img/banner_welcome1.png" />
					</div>
				</div>
					
				<a href="#" id="ui-carousel-next"><span>next</span></a>
				<a href="#" id="ui-carousel-prev"><span>prev</span></a>
			
			<div id="pages3" style="margin: 0 auto;width: 90px;"></div>
		
		</div>

		
		<div id="videoRotating">
			<div id="carousel">
				<div id="slide01" class="slide">
					<iframe width="297" height="216" src="http://www.youtube.com/embed/_TAkbT6CxJ4?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
						
				<div id="slide02" class="slide">
					<iframe width="297" height="216" src="http://www.youtube.com/embed/DYgDWw4epK8?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
						
				<div id="slide03" class="slide">
					<iframe width="297" height="216" src="http://www.youtube.com/embed/dZjVzFsRakg?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
					
			</div>
				<a href="#" id="ui-carousel-next"><span>next</span></a>
				<a href="#" id="ui-carousel-prev"><span>prev</span></a>
			<div id="pages"></div>
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
					<h3  style="<?= $style1 ?>"> <?= number_format($time_donate) ?> ชั่วโมง</h3>
					<p>เวลารวมที่อาสา<br>ฝากไว้กับธนาคาร</p>
				</div>
						
				<div id="slide02" class="slide">
					<h3 style="<?= $style2 ?>"><?= number_format($time_want) ?> ชั่วโมง</h3>
					<p>เวลารวมของภารกิจ<br>ที่ต้องการอาสา</p>
				</div>
						
				<div id="slide03" class="slide">
					<h3 style="<?= $style3 ?>"><?= number_format($time_done) ?> ชั่วโมง</h3>
					<p>เวลารวมที่อาสา<br>ได้ปฏิบัติภารกิจไปแล้ว</p>
				</div>
					
			</div>
				<a href="#" id="ui-carousel-next"><span>next</span></a>
				<a href="#" id="ui-carousel-prev"><span>prev</span></a>
			<div id="pages2"></div>
		</div>
		
		<blockquote>
			<h2>ปันเวลาช่วยกัน</h2>
			<p>มาช่วยกันสร้างสรรค์สังคมของเรา <br>ผ่านการฝากเวลา เพื่อปฏิบัติภารกิจจิตอาสา <br>(หากคุณเป็นอาสาสมัคร) หรือ <br>สร้างภารกิจจิตอาสา เพื่อเป็นโอกาสในการใช้เวลา (หากคุณเป็นองค์กรอาสา) </p>
			<h3><a href="<?= url::base().'user/create' ?>"><span style="text-decoration:underline">ฝากเวลา</span></a>  <span style="font-size:20px;">หรือ</span>  <a href="<?= url::base().'organization/create' ?>"> <span style="text-decoration:underline">สร้างภารกิจจิตอาสา</span></a></h3>
		</blockquote>
		
		<section><span style="color:#a73c0c">ภารกิจจิตอาสาที่น่าสนใจ</span></section>
       <?
	  
	   foreach ($events as $event) : ?>
		<article>
			<? if ($event->image != ''): ?>
                <img src="<?= url::base().'media/upload/events/'.$event->image ?>" style="width:145px; height:159px; border:5px solid #FFF">
            <? else :?>
                <img src="<?= url::base().'media/img/sample_01.png' ?>" >
            <? endif ?>

			<div><?= $event->time_cost ?> ชม.</div>
			<a class="subscribe" href="<?= url::base().'event/view/'.$event->id ?>">รายละเอียด</a>
			<p><strong><?= $event->name ?></strong><br />
            <?
				$time= strtotime($event->volunteer_begin_date ); 
				echo phphelp::thai_date($time);
				?> เวลา : <?= date("H:i", strtotime($event->volunteer_begin_time)); ?>น.
                
                <br>
				ถึง <?
				$time= strtotime($event->volunteer_end_date); 
				echo phphelp::thai_date($time);
				?> เวลา :<?= date("H:i", strtotime($event->volunteer_end_time));?> น.</p>
			<a style="font-family:Tahoma, Geneva, sans-serif" href="<?= url::base().'event/view/'.$event->id ?>" >[อ่านต่อ...]</a>
		</article>
        <?php endforeach ?>
	
		<p align="center" style="display:inline-block;margin-bottom:-25px;">
			<img src="<?= url::base(); ?>media/img/tb_line.png"/>
			<span style="text-align: center; display: block; color: #0099CC; font-size: 40px; padding: 20px 0px 0px;">ภาคีหลัก</span>
			<a href="http://www.thaihealth.or.th/" target="_blank"><img style="margin:10px 0 0"src="<?= url::base(); ?>media/img/thaihealth.png" /></a>
			<a href="http://www.thaivolunteer.org/" target="_blank"><img style="margin:10px 0 0"src="<?= url::base(); ?>media/img/thaivolunteer.png" /></a>
			<a href="http://www.volunteerspirit.org/" target="_blank"><img style="margin:10px 0 0"src="<?= url::base(); ?>media/img/volunteerspirit.png" /></a>
			<a href="http://www.facebook.com/SiamArsa" target="_blank"><img style="margin:10px 0 0"src="<?= url::base(); ?>media/img/siamarsa.png" /></a>
		</p>

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
		
		function generatePages3() {
			
			var _total3, i, _link;
			
			_total3 = $( "#carouselMain" ).rcarousel( "getTotalPages" );
			
			for ( i = 0; i < _total3; i++ ) {
				_link = $( "<a href='#'></a>" );
				
				$(_link)
					.bind("click", {page: i},
						function( event ) {
							$( "#carouselMain" ).rcarousel( "goToPage", event.data.page );
							event.preventDefault();
						}
					)
					.addClass( "bullet off" )
					.appendTo( "#pages3" );
			}
			
			// mark first page as active
			$( "a:eq(0)", "#pages3" )
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
		
		function pageLoaded3( event, data ) {
			$( "a.on", "#pages3" )
				.removeClass( "on" )
				.css( "background-image", "url(<?= url::base(); ?>media/img/brown_circle.png)" );

			$( "a", "#pages3" )
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
					enabled: false
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
		
		$("#carouselMain").rcarousel(
			{
				visible: 1,
				step: 1,
				speed: 700,
				auto: {
					enabled: true
				},
				width: 572,
				height: 197,
				start: generatePages3,
				pageLoaded: pageLoaded3
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