<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
	<meta name="google-site-verification" content="dgCAL2kKmQ1ExVWH66jNv8xi4qVKgafToAFW6YE2ryI" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
    <meta name="language" content="en-us" />
    <meta property="og:title" content="ธนาคารจิตอาสา: ยินดีต้อนรับครับ"/>
    <meta property="og:image" content="http://jitarsabank.com/media/img/logo_clear.png"/>
    <meta property="og:site_name" content="ธนาคารจิตอาสา JitArsaBank.com"/>
    <meta property="og:description" content="ธนาคารจิตอาสาเป็นพื้นที่ให้ทุกคนได้เข้ามาใช้เพื่อประกาศความตั้งใจที่จะแบ่งปันเวลาให้กับสังคม เวลาเหล่านี้คือทุนของความมุ่งมั่นตั้งใจของคนไทยทั้งประเทศเป็นทุน และหลักประกันความมั่นคงของสังคม เป็นเครื่องชี้ว่าจิตอาสาคือคุณค่าที่สังคมไทยยึดถือ เพราะการให้เวลาคือการมอบสมบัติล้ำค่าที่เรา ทุกคนมีอยู่อย่างเท่าเทียมกันให้แก่ส่วนรวม และให้แก่กันและกัน"/>
    <? if ($meta_page_title != '') : ?>
    	<title><?= $meta_page_title.' - ธนาคารจิตอาสา: ปันเวลาช่วยกัน' ?></title> 
	<? else : ?>
    	<title><?= 'ธนาคารจิตอาสา: ปันเวลาช่วยกัน' ?></title> 
    <? endif ?>
	  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
		   More info: h5bp.com/i/378 -->
	 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">    
	<meta name="description" content="">

	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width">

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?= url::base(); ?>media/js/jquery-1.7.2.min.js"><\/script>')</script>

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
    <link rel="stylesheet" href="<?= url::base(); ?>media/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?= url::base(); ?>media/widget/css/rcarousel.css" />
    <link rel="stylesheet" href="<?= url::base(); ?>media/css/token-input.css" type="text/css" />
    <link rel="stylesheet" href="<?= url::base(); ?>media/css/token-input-facebook.css" type="text/css" />
    
    <link type="text/css" rel="stylesheet" href="<?= url::base(); ?>media/css/ui-lightness/jquery-ui-1.8.21.custom.css" />
    <link rel="icon" href="<?= url::base(); ?>favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?= url::base(); ?>favicon.ico" type="image/x-icon"> 
	<script src="<?= url::base(); ?>media/js/libs/modernizr-2.5.3.min.js"></script>


  <script type="text/javascript" src="<?= url::base(); ?>media/js/jquery-ui-1.8.21.custom.min.js"></script>

  <script type="text/javascript" src="<?= url::base(); ?>media/widget/lib/jquery.ui.core.js"></script>
  <script type="text/javascript" src="<?= url::base(); ?>media/widget/lib/jquery.ui.widget.js"></script>
  <script type="text/javascript" src="<?= url::base(); ?>media/widget/lib/jquery.ui.rcarousel.js"></script>
  <script type="text/javascript" src="<?= url::base(); ?>media/js/jquery.ui.datepicker-th.js"></script>
  <script type="text/javascript" src="<?= url::base(); ?>media/js/jquery.ui.datepicker.ext.be.js"></script>
  <script type="text/javascript" src="<?= url::base(); ?>media/js/jquery.tokeninput.js"></script>
  <!-- cript type="text/javascript" src="widget/lib/jquery.ui.rcarousel.js"></script -->
	
  
</head> 
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>
	<h2>ธนาคารจิตอาสา</h2>
	<?= HTML::anchor('welcome/home', '<img src="'.url::base().'media/img/logo.png"/>'); ?>
	<nav>
		<ul>
			<li><?= HTML::anchor('welcome/timebank', 'ใช้บริการธนาคารจิตอาสา', array('id' => 'timeBank')); ?></li>
			<li><?= HTML::anchor('training', 'ฝึกอบรมและความรู้', array('id' => 'training')); ?></li>
			<li><?= HTML::anchor('news', 'ข่าวแวดวง', array('id' => 'news')); ?></li>
			<li><?= HTML::anchor('welcome/donation', 'สนับสนุนธนาคารจิตอาสา', array('id' => 'donation')); ?></li>
			<li><?= HTML::anchor('welcome/aboutus', 'เกี่ยวกับเรา', array('id' => 'aboutUs')); ?></li>
		</ul>
	</nav>
	<div id="new-menu">
		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
	</div>
  </header>
  <div id="head_main"></div>
    <div id="content">
        <?= $content; ?>
    </div>    
    
  <div id="footer_main"></div> 
        
  <footer>
  	<ul>
    	<li><?= HTML::anchor('welcome/term', 'เงื่อนไขและข้อตกลงการใช้บริการ'); ?></li>
        <li><?= HTML::anchor('welcome/privacy', 'นโยบายความเป็นส่วนตัว'); ?></li>
        <li><?= HTML::anchor('contactus', 'ติดต่อธนาคารจิตอาสา'); ?></li></ul>
	<p>นโยบายลิขสิทธิ์

สำหรับข้อมูลต่างๆ บน website และ mobile app

		<br><br>
		<a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/"><img src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png" alt="สัญญาอนุญาตของครีเอทีฟคอมมอนส์" align="absbottom" style="border-width:0" /></a> <span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Dataset" rel="dct:type">ผลงาน</span>นี้ โดย <a xmlns:cc="http://creativecommons.org/ns#" href="" property="cc:attributionName" rel="cc:attributionURL">ธนาคารจิตอาสา</a> ใช้ <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/">สัญญาอนุญาตของครีเอทีฟคอมมอนส์.....แบบ แสดงที่มา-ไม่ใช้เพื่อการค้า 3.0 ต้นฉบับ</a>.
	</p>

  </footer>

  <!-- scripts concatenated and minified via build script -->
  <script src="<?= url::base(); ?>media/js/plugins.js"></script>
  <script src="<?= url::base(); ?>media/js/script.js"></script>
  <script src="<?= url::base(); ?>media/js/englishcheck-for-input.js"></script>
  
  <!-- end scripts -->
  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>

    var _gaq=[['_setAccount','UA-34261709-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
    
</body>
</html>