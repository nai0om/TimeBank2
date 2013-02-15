<?php defined('SYSPATH') or die('No direct script access.'); ?>
le to find a route to match the URI: media/upload/50cffc430ab69Budnet121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-27 13:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50f7c126ec568เด็กเชียงราย.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-27 13:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50fdf5a0edd4902.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-27 13:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50cffc430ab69Budnet121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 13:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50f7c126ec568เด็กเชียงราย.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 13:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50fdf5a0edd4902.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 13:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50fd4f933209cDSCF8536.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-27 13:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50fd4f933209cDSCF8536.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 13:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d00571346bbThaiHealth121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-27 13:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d00571346bbThaiHealth121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 13:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d00534cee10Thaivolunteer.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-27 13:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d005db88102VSN.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-27 13:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d00534cee10Thaivolunteer.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 13:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d005db88102VSN.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 13:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d0059d975baSiamArsa.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-27 13:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d0059d975baSiamArsa.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-27 14:06:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 71 ]
2013-01-27 14:06:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 71 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 71, Array)
#1 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(90): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Template->after()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Cron))
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-27 14:07:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 71 ]
2013-01-27 14:07:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 71 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 71, Array)
#1 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(90): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Template->after()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Cron))
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#10 {main}