<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-15 19:20:43 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'timebank_test' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2013-02-15 19:20:43 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'timebank_test' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('timebank_test')
#1 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/mysql.php(432): Kohana_Database_MySQL->connect()
#2 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database.php(473): Kohana_Database_MySQL->escape('1')
#3 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query/builder.php(116): Kohana_Database->quote('1')
#4 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query/builder/select.php(370): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#5 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#6 /Applications/MAMP/htdocs/TimeBank/application/classes/timebankhelper.php(47): Kohana_Database_Query->execute()
#7 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/welcome.php(19): timebankhelper::getDonatedTime()
#8 [internal function]: Controller_Welcome->action_home()
#9 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-15 19:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50cffc430ab69Budnet121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50cffc430ab69Budnet121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50f810fbee867IMG_2605.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50f810fbee867IMG_2605.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d00571346bbThaiHealth121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d00571346bbThaiHealth121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50f813106467bDSCF8536.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50f813106467bDSCF8536.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d00534cee10Thaivolunteer.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d00534cee10Thaivolunteer.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50fd4f933209cDSCF8536.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50fd4f933209cDSCF8536.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d005db88102VSN.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d005db88102VSN.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d0059d975baSiamArsa.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d0059d975baSiamArsa.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50f810fbee867IMG_2605.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50f810fbee867IMG_2605.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50cffc430ab69Budnet121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d00571346bbThaiHealth121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50cffc430ab69Budnet121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d00571346bbThaiHealth121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:24:32 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 19136512 bytes) ~ APPPATH/classes/timebanknotification.php [ 326 ]
2013-02-15 19:24:32 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 19136512 bytes) ~ APPPATH/classes/timebanknotification.php [ 326 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-15 19:26:30 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 10387456 bytes) ~ APPPATH/classes/timebanknotification.php [ 326 ]
2013-02-15 19:26:30 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 10387456 bytes) ~ APPPATH/classes/timebanknotification.php [ 326 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-15 19:27:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 71 ]
2013-02-15 19:27:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 71 ]
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
2013-02-15 19:27:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 71 ]
2013-02-15 19:27:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 71 ]
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
2013-02-15 19:36:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 71 ]
2013-02-15 19:36:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 71 ]
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
2013-02-15 19:37:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 71 ]
2013-02-15 19:37:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 71 ]
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
2013-02-15 19:41:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 71 ]
2013-02-15 19:41:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 71 ]
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
2013-02-15 19:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ac8fab1379a422954_10151035550654397_1639990741_n.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ac8fab1379a422954_10151035550654397_1639990741_n.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50cffc430ab69Budnet121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50cffc430ab69Budnet121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50f80dd2cf641IMG_7991.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d00534cee10Thaivolunteer.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d00534cee10Thaivolunteer.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50f810fbee867IMG_2605.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50f810fbee867IMG_2605.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50f80dd2cf641IMG_7991.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d00571346bbThaiHealth121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d00571346bbThaiHealth121218.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d005db88102VSN.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d005db88102VSN.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-15 19:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d0059d975baSiamArsa.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-15 19:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50d0059d975baSiamArsa.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}