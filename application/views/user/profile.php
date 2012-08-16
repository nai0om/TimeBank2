<link rel="stylesheet" href="<?= url::base(); ?>media/css/ui-lightness/jquery-ui-1.8.20.custom.css">
<div id="member" class="profile">
  <div id="main" role="main">
		<div id="sitemap">
			<li>หน้าแรก</li>
			<li>โปร์ไพล์</li>
		</div>
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>

		<div style="clear:both"></div>
		<div id="menu_left">
			<?php include Kohana::find_file('views', 'shared/usermenu') ?>
		</div>
        <?= Form::open('user/profile', array('enctype' => 'multipart/form-data')); ?>		
		
		<div id="main_right">
		
		<div class="title left"></div>
		<div class="title body">รูปภาพของคุณ</div>
		<div class="title right"></div>
		<div style="clear:both"></div>
        
        <? if ($user->profile_image) : ?>
        	<p><img style="max-width:500px; max-height:300xp" src="<?= url::base().'media/upload/volunteers/'.$user->profile_image; ?>" /></p>
         <? else :?>
         	<p><img src="<?= url::base().'media/img/member.png'; ?>" /></p>
         <? endif ?>
		<?= Form::file('profile_image') ?>
        <div class="error"><?= Arr::get($errors, 'profile_image'); ?></div>
        
		<div class="title left"></div>
		<div class="title body">แก้ไขข้อมูลส่วนตัว</div>
		<div class="title right"></div>

		<div style="clear:both"></div>
        <? if ($message) : ?>
    <h3 class="message">
        <?= $message; ?>
    </h3>
<? endif; ?>

			<div class="left">
            
				<?= Form::label('first_name', 'ชื่อ'); ?>
				<?= Form::input('first_name', HTML::chars($user->first_name)); ?>
                <div class="error"><?= Arr::get($errors, 'first_name'); ?></div>
                
				<?= Form::label('nickname', 'ชื่อเล่น'); ?>
				<?= Form::input('nickname', HTML::chars($user->nickname)); ?>
                <div class="error"><?= Arr::get($errors, 'nickname'); ?></div>
				
				<?= Form::label('birthday', 'วันเกิด (วัน/เดือน/ปี)'); ?>
                <?  $dateArray = phphelp::getDateAsArray($user->birthday); ?>
                <?= Form::select('day', timebankhelper::getDaysNumber(), $dateArray[2], array ('class' => 'full')); ?>
                <? $thai_month_arr = Kohana::$config->load('timebank')->get('thai_month_arr'); ?>
                <?= Form::select('month', $thai_month_arr, $dateArray[1], array ('class' => 'full'));	?>
                 <? echo ''.$dateArray[0] ?>
                <?= Form::select('year', timebankhelper::getYearsNumber(), $dateArray[0] == 0 ? 2525 : $dateArray[0] + 543, array ('class' => 'full'));	?>
                <div class="error"><?= Arr::get($errors, 'birthday'); ?></div>
                
				<?= Form::label('sex', 'เพศ'); ?>
				<?= Form::radio('sex', 'm', ($user->sex === 'm')); ?> ชาย
                <?= Form::radio('sex', 'f', ($user->sex === 'f')); ?> หญิง
                <div class="error"><?= Arr::get($errors, 'sex'); ?></div>
                
				<?= Form::label('website', 'Website'); ?>
				<?= Form::input('website', HTML::chars($user->website)); ?>
				
			</div>
			<div class="right">
            
				<?= Form::label('last_name', 'นามสกุล'); ?>
				<?= Form::input('last_name', HTML::chars($user->last_name)); ?>
                <div class="error"><?= Arr::get($errors, 'last_name'); ?></div>
            
				<?= Form::label('phone', 'เบอร์โทรติดต่อ'); ?>
				<?= Form::input('phone', HTML::chars($user->phone)); ?>
                <div class="error"><?= Arr::get($errors, 'phone'); ?></div>
                
				<?= Form::label('address', 'ที่อยู่'); ?>
				<?= Form::input('address', HTML::chars($user->address)); ?>
                <?= Form::label('location', 'เขต/อำเภอ'); ?>
				<?= Form::input('location', HTML::chars($user->location)); ?>
                <?= Form::label('province', 'จังหวัด'); ?>
				 <?php
				$provices = Kohana::$config->load('timebank')->get('provices'); 
				echo Form::select('province', $provices, $user->province, array ('class' => 'full'));
				?>
                <div class="error"><?= Arr::get($errors, 'address'); ?></div>
                
                
			</div>
			<div style="clear:both"></div>
            <?= Form::submit('profile', 'บันทึกการเปลี่ยนแปลง'); ?>
			<div class="line"></div>
		<?= Form::close(); ?>
        
        
        

		<?= Form::open('user/addskill', array('enctype' => 'multipart/form-data')); ?>	
  <div class="left">
			<div class="title left"></div>
			<div class="title body" style="font-family:chula">ความสามารถเฉพาะของคุณ</div>
			<div class="title right"></div>
			<div style="clear:both"></div>
       <?php
		   $skill = Kohana::$config->load('timebank')->get('all_skills'); 
		   $dict = Kohana::$config->load('timebank')->get('worddict');
		   foreach ($skill as $title => $value)
		   {
   			 echo  '<p><label>'.$dict[$title].'</label>';
			 foreach ($value as $title2 => $value2)
			 {
				echo  '<label style="margin-left: 10px;" > - '.$dict[$title2].'</label><br />'; 
				foreach ($value2 as $name)
				{
					$value = '';
					 $checked = '';
					if(array_key_exists($name, $skills))
					{
					  $value = $skills[$name];
					  if($value <> '')
					  {
						 $checked = 'checked="'.$value.'"'; 
					  }
					}
					
					if(phphelp::endsWith($name, 'T'))
					{
						echo  '<input style="margin-left: 20px;" '. $checked .' type="checkbox"> <span>'.$dict[$name].'</span> <br />';
						echo  '<input name='.$name.' value="'.$value.'" type="text" style="display:inline;width:40%;margin-left: 35px;"><br />';
					}
					else
					{
						echo  '<input style="margin-left: 20px;" '. $checked .' type="checkbox" name='.$name.'> <span>'.$dict[$name].'</span> <br />';
					}
				}
			 }
			 echo '<p>';
		   }
	   ?>
		


		  <label>Tag บ่งบอกกลุ่ม</label>
			<input name="xx" type="text" id="xx">
			<p><span class="tag">SCBStaff</span><span class="tag">วัดไร่ขิงห้อง 6/1</span><p>
		</div>
		
		<div class="right">
			<div class="title left"></div>
			<div class="title body" style="font-family:chula">ความสนใจของคุณ</div>
			<div class="title right"></div>
			<div style="clear:both"></div>
			<label>(เลือกได้มากกว่า 1 ข้อ)</label>
            <?php  
				$jobs = Kohana::$config->load('timebank')->get('jobs'); 
				for($i = 1 ; $i < sizeof($jobs) ; $i++){
					$checked = FALSE;
					if($interest_tags != '') {
						$pos = strpos($interest_tags, $jobs[$i]);
						if (  $pos >= 0 && $pos !== false){
							$checked = TRUE;
						}
					}
					echo Form::checkbox(str_replace(' ','_',$jobs[$i]), $jobs[$i], $checked).''.$jobs[$i].'<br />';
				}
            ?> 
            
            
     
		</div>
		<div style="clear:both"></div>
		<input type="submit" value="บันทึกการเปลี่ยนแปลง"><div class="line"></div>
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