<div id="about_us">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>เกี่ยวกับเรา</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		<div style="clear:both"></div>
		<h2>เกี่ยวกับเรา</h2>
		<div class="column two">
			<p>เราเชื่อว่าสังคมไทยจะเป็นสังคมอุดมไปด้วยความรักความสุข มีความมั่นคง และพัฒนาก้าวหน้าต่อไปได้ เพราะทุกคนร่วมสร้างสังคมนี้ขึ้นมา ไม่จำกัดว่าเป็นวัยไหนหรืออยู่ในหน้าที่การงานใด เราต่างมีความมุ่งมั่นตั้งใจเพื่อสร้างประเทศไทย เราไม่นิ่งเฉยดูดาย แต่จะลุกขึ้นยื่นมือมาช่วยเหลือกัน ทุกๆ คนบนผืนแผ่นดินไทยสามารถเป็นอาสาสมัครผู้อุทิศกำลังความสามารถและเวลาอันมีค่าของตนให้แก่ประโยชน์ส่วนรวม</p>

			<p>ธนาคารจิตอาสาเป็นพื้นที่ให้ทุกคนได้เข้ามาใช้เพื่อประกาศความตั้งใจที่จะแบ่งปันเวลาให้กับสังคม เวลาเหล่านี้คือทุนของความมุ่งมั่นตั้งใจของคนไทยทั้งประเทศเป็นทุน และหลักประกันความมั่นคงของสังคม เป็นเครื่องชี้ว่าจิตอาสาคือคุณค่าที่สังคมไทยยึดถือ เพราะการให้เวลาคือการมอบสมบัติล้ำค่าที่เรา ทุกคนมีอยู่อย่างเท่าเทียมกันให้แก่ส่วนรวม และให้แก่กันและกัน จากเดิมที่เราพร้อมจะมอบเวลาให้คนที่เรารัก ธนาคารจิตอาสาช่วยเพิ่มช่องทางให้เราสามารถมอบเวลาให้กับสังคม ให้กับบ้านที่เรารัก โดยมีระบบแนะนำกิจกรรมอาสาที่เหมาะกับความสนใจ ความสามารถ และแบบแผนการใช้ชีวิต/เวลาว่าง อีกทั้งมีบริการเสริมความรู้ ความเข้าใจ ทักษะ เตรียมความพร้อม ให้กับทั้งอาสาและองค์กร รวมถึงการแลกเปลี่ยนเรียนรู้สะท้อนแบ่งปันประสบการณ์หลังกิจกรรม</p>
			
			<div id="bannerRotating">
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
		?>
			<div id="carouselBanner">
				<div id="slide01" class="slide">
					<h3 style="<?= $style1 ?>" ><?= number_format($time_donate) ?> ชั่วโมง</h3>
					<p>เวลารวมที่อาสา<br>ฝากไว้กับธนาคาร</p>
				</div>
						
				<div id="slide02" class="slide">
					<h3 style="<?= $style2 ?>" ><?= number_format($time_want) ?> ชั่วโมง</h3>
					<p>เวลารวมของภารกิจ<br>ที่กำลังต้องการอาสา</p>
				</div>
						
				<div id="slide03" class="slide">
					<h3 style="<?= $style3 ?>" ><?= number_format($time_done) ?> ชั่วโมง</h3>
					<p>เวลารวมที่อาสา<br>ได้ปฏิบัติภารกิจไปแล้ว</p>
				</div>
					
			</div>
				<a href="#" id="ui-carousel-next"><span>next</span></a>
				<a href="#" id="ui-carousel-prev"><span>prev</span></a>
			<div id="pages2"></div>
			</div>
		</div>
		
		<div class="column two">
	
			<img src="<?= url::base(); ?>media/img/logo_big.png">
			<h3>เวลารวมที่อาสาฝากไว้กับธนาคาร</h3>
			<p>คือเวลาทั้งหมดที่อาสาได้มาประกาศความตั้งใจเพื่อนำไปทำงานจิตอาสา</p>
			<h3>เวลารวมของภารกิจที่ต้องการอาสา</h3>
			<p>คือเวลารวมทั้งหมดของโอกาสในการทำจิตอาสา</p>
			<h3>เวลารวมที่อาสาได้ปฏิบัติภารกิจไปแล้ว</h3>
			<p>คือเวลารวมทั้งหมดที่ถูกใช้ในการทำงานอาสาแล้ว</p>
		</div>
        
        <div style="clear:both"></div>
        <br /><br />
		<p><center><h1>ธนาคารจิตอาสามีภารกิจ 3 ส่วนหลัก ได้แก่</h1></center></p>
	
		<ol>
			<li>
				<img class="thum" src="<?= url::base(); ?>media/img/about_timebank.jpg">
				<div class="top"></div>
				<div class="body">
					<p>1. ระบบธนาคารเวลา <br />(Time Bank)</p>
				</div>
				<div class="bottom"></div>
				<p class="sub">Time Bank เป็นระบบสนับสนุนการทำงานอาสา ที่เข้าถึงได้ทาง Internet ให้อาสาสมัครได้แสดงความตั้งใจจะใช้เวลาเพื่อทำงานอาสา โดยรวบรวมสถิติการใช้เวลา ยังมีระบบคัดเลือกและแนะนำงาน (matching) ให้ค้นหางานอาสาที่เหมาะกับตนเอง ตรงกับความสนใจ ความถนัด ทักษะ ความสามารถ หรือความสะดวก ไม่เฉพาะแต่ในสถานการณ์ภัยพิบัติเท่านั้น แต่ยังรวมถึงงานอาสาสมัครเพื่อสังคมทุกประเภทที่มีอยู่แล้วในประเทศไทยด้วย </p>
			</li>
			<li>
				<img class="thum" src="<?= url::base(); ?>media/img/about_training.jpg">
				<div class="top"></div>
				<div class="body">
					<p>2. การปฐมนิเทศและการอบรม <br /> (Orientation and Training) </p>
				</div>
				<div class="bottom"></div>
				<p class="sub">การปฐมนิเทศและการอบรมอาสาเป็นกระบวนการเตรียมพร้อมอาสาสมัครก่อนลงไปทำงานอาสา 
				เพื่อให้อาสาได้เกิดประสบการณ์ที่ดี ได้เรียนรู้ และพัฒนาตนเองอย่างรอบด้านทั้งทางกาย ทางใจ และทางสังคม นอกจากนี้การจัดอบรมให้กับองค์กรที่รับอาสาเข้าไปทำงานก็เป็นสิ่งสำคัญเช่นกัน เพราะการจัดกิจกรรมเพื่อให้เกิดประโยชน์สูงสุดกับอาสานั้นจำเป็นต้องมีทั้งความเข้าใจและทักษะ
				รวมถึงมีการจัดทำคู่มือรวบรวมองค์ความรู้เรื่องการปฐมนิเทศและการอบรมด้วย </p>
			</li>
			<li>
				<img class="thum" src="<?= url::base(); ?>media/img/about_vrm.jpg">
				<div class="top"></div>
				<div class="body">
					<p>3.  อาสาสัมพันธ์ <br />(Volunteer Relation Managaement) </p>
				</div>
				<div class="bottom"></div>
				<p class="sub">งานอาสาสัมพันธ์เป็นการสร้างความต่อเนื่องในการมีกิจกรรมความร่วมมือและสื่อสาระะหว่างอาสาสมัครและองค์กรที่จัดกิจกรรม นอกจากจะเป็นช่องทางในการสื่อสาร งานอาสาสัมพันธ์ยังช่วยให้กำลังใจ เปิดโอกาสการแลกเปลี่ยนประสบการณ์ และความประทับใจ จากการทำงาน ตลอดจนสามารถพัฒนาเป็นชุมชนเครือข่ายความร่วมมือตามประเด็นความสนใจ หรือตามพื้นที่ต่อไป</p>
			</li>
		
		</ol>
				<div class="column two" style="text-align:center; width:100%; position:relative;">
			<p><h3>ด้วยการสนับสนุนจากสำนักงานกองทุนสนับสนุนการสร้างเสริมสุขภาพ (สสส.) <br /> ธนาคารจิตอาสาพร้อมยินดีรับใช้และให้บริการ มาร่วมกันเป็นส่วนสำคัญของการสร้างความมั่นคงยั่งยืน <br />ให้กับชุมชนจิตอาสาและสังคมไทย ด้วยการแบ่งปันเวลาและลงมือทำกับธนาคารจิตอาสา</h3></p>
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