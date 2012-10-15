<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
    <meta name="language" content="en-us" /> 
    	<title><?= 'ธนาคารจิตอาสา: ปันเวลาช่วยกัน' ?></title> 
    <title>Jitarsa Bank</title> 

	  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
		   More info: h5bp.com/i/378 -->
	 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>TimeBank</title>
    
	<meta name="description" content="">

	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<link rel="stylesheet" href="<?= url::base(); ?>media/css/style.css">

</head> 
<body>

  
    <div id="content">
        <div id="tb_browse">
              <div id="main" role="main">
                <div id="home" class="mid content" style="width:800px; top:40px">
                    <table>
                        <tr>
                            <td width="50%">
                                <img src="<?= url::base(); ?>media/img/logo_clear.png" id="down100" />
                             
                            <p>
                            <iframe width="297" height="216" src="http://www.youtube.com/embed/XphuDvRjY7c" frameborder="0" allowfullscreen></iframe>
                            </p>
                            <p> 
                            <a style="font-size:32px;">	ขณะนี้ระบบธนาคารจิตอาสา<br />ได้เปิดให้ทดลองใช้แล้ว </a>
                            </p>
                            <p>
                              <?= HTML::anchor('welcome/home', 'เข้าสู่เว็บไซต์ jitarsabank.com', array('style' => 'color:#000')); ?>
                           
                            </p>
                            </td>
                            <td width="50%">
                                <h3 align="left">
                                <img src="<?= url::base(); ?>media/img/if_ask.png"/ >
            
                                </h3>
                            </td>
                        </tr>
                    </table>
                </div>
              </div>
            </div>
    </div>
    
  <footer>
	<p>Copyright 2012 Jitarsa All rights reserved.</p>
  </footer>
  
 
  <script>
    var _gaq=[['_setAccount','UA-34261709-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
    
</body>
</html>