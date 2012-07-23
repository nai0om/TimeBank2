<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
    <meta name="language" content="en-us" /> 
    <title><?= $meta_page_title ?></title> 

	  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
		   More info: h5bp.com/i/378 -->
	 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>TimeBank</title>
    
	<meta name="description" content="">

	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width">

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?= url::base(); ?>media/js/jquery-1.7.2.min.js"><\/script>')</script>

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<link rel="stylesheet" href="<?= url::base(); ?>media/css/style.css">
	<link type="text/css" rel="stylesheet" href="<?= url::base(); ?>media/widget/css/rcarousel.css" />
    <link type="text/css" rel="stylesheet" href="<?= url::base(); ?>media/widget/css/rcarousel.css" />
    
     <link type="text/css" rel="stylesheet" href="<?= url::base(); ?>media/css/ui-lightness/jquery-ui-1.8.21.custom.css" />
  
	<script src="<?= url::base(); ?>media/js/libs/modernizr-2.5.3.min.js"></script>


  <script type="text/javascript" src="<?= url::base(); ?>media/js/jquery-ui-1.8.21.custom.min.js"></script>

  <script type="text/javascript" src="<?= url::base(); ?>media/widget/lib/jquery.ui.core.js"></script>
  <script type="text/javascript" src="<?= url::base(); ?>media/widget/lib/jquery.ui.widget.js"></script>
  <script type="text/javascript" src="<?= url::base(); ?>media/widget/lib/jquery.ui.rcarousel.js"></script>
  <script type="text/javascript" src="<?= url::base(); ?>media/js/jquery-ui-timepicker-addon.js"></script>
  <script type="text/javascript" src="<?= url::base(); ?>media/js/jquery.ui.datepicker-th.js"></script>
	
  
</head> 
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>
	<h2>ธนาคารจิตอาสา</h2>
	<?= HTML::anchor('/', '<img src="'.url::base().'media/img/logo.png"/>'); ?>
	<nav>
		<ul>
			<li><?= HTML::anchor('welcome/aboutus', 'เกี่ยวกับเรา', array('id' => 'aboutUs')); ?></li>
			<li><?= HTML::anchor('welcome/timebank', 'Time Bank', array('id' => 'timeBank')); ?></li>
			<li><?= HTML::anchor('training', 'ฝึกอบรมและความรู้', array('id' => 'training')); ?></li>
			<li><?= HTML::anchor('news', 'News Update', array('id' => 'news')); ?></li>
			<li><?= HTML::anchor('welcome/donation', 'Donation', array('id' => 'donation')); ?></li>
		</ul>
	</nav>
  </header>
  
    <div id="content">
        <?= $content; ?>
    </div>
    
  <footer>
	<p>นโยบายลิขสิทธิ์

สำหรับข้อมูลต่างๆ บน website และ mobile app

		<br><br><a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/"><img alt="สัญญาอนุญาตของครีเอทีฟคอมมอนส์" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png" /></a> <br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Dataset" rel="dct:type">ผลงาน</span>นี้ โดย <a xmlns:cc="http://creativecommons.org/ns#" href="" property="cc:attributionName" rel="cc:attributionURL">ธนาคารจิตอาสา</a> ใช้ <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/">สัญญาอนุญาตของครีเอทีฟคอมมอนส์แบบ แสดงที่มา-ไม่ใช้เพื่อการค้า 3.0 ต้นฉบับ</a>.

		</p></p>
	<ul>
    	<li><?= HTML::anchor('welcome/term', 'Term & Conditions'); ?></li>
        <li><?= HTML::anchor('welcome/privacy', 'Privacy'); ?></li>
        <li><?= HTML::anchor('contactus', 'Contact Us'); ?></li></ul>
  </footer>

  <!-- scripts concatenated and minified via build script -->
  <script src="<?= url::base(); ?>media/js/plugins.js"></script>
  <script src="<?= url::base(); ?>media/js/script.js"></script>
  <!-- end scripts -->
  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>

    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
    
</body>
</html>