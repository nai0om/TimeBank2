<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-09 00:37:00 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin.php [ 7 ]
2012-08-09 00:37:00 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin.php [ 7 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/admin.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/M...', 7, Array)
#1 [internal function]: Controller_Admin->action_index()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-09 01:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/addrecomend was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-09 01:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/addrecomend was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-09 01:36:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method DB::selete() ~ APPPATH/classes/controller/admin.php [ 19 ]
2012-08-09 01:36:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method DB::selete() ~ APPPATH/classes/controller/admin.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-09 01:36:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'recommend_event' in 'field list' [ SELECT `recommend_event` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-09 01:36:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'recommend_event' in 'field list' [ SELECT `recommend_event` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `recomme...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/admin.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_index()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-09 01:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_4.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 01:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_4.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 01:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 01:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 01:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_5.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 01:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_5.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 01:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 01:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 01:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 01:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 01:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_6.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 01:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_6.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 01:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 01:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 03:02:57 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `event`.* FROM `events` AS `event` WHERE (`id` = ('1', '7', '2012-08-09 03:02:48') OR `id` = ('2', '0', '2012-08-09 03:02:48') OR `id` = ('3', '0', '2012-08-09 03:02:48')) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-09 03:02:57 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `event`.* FROM `events` AS `event` WHERE (`id` = ('1', '7', '2012-08-09 03:02:48') OR `id` = ('2', '0', '2012-08-09 03:02:48') OR `id` = ('3', '0', '2012-08-09 03:02:48')) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `event`....', 'Model_Event', Array)
#1 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/welcome.php(24): Kohana_ORM->find_all()
#4 [internal function]: Controller_Welcome->action_index()
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-09 03:03:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/welcome.php [ 21 ]
2012-08-09 03:03:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/welcome.php [ 21 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/welcome.php(21): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/M...', 21, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-09 03:09:32 --- ERROR: ErrorException [ 8 ]: Undefined offset: 12 ~ APPPATH/classes/timebankhelper.php [ 81 ]
2012-08-09 03:09:32 --- STRACE: ErrorException [ 8 ]: Undefined offset: 12 ~ APPPATH/classes/timebankhelper.php [ 81 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/timebankhelper.php(81): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 81, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(34): timebankhelper::getRecommendEvent()
#2 [internal function]: Controller_User->action_index()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-09 03:11:28 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/user/index.php [ 66 ]
2012-08-09 03:11:28 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/user/index.php [ 66 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/index.php(66): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 66, Array)
#1 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(63): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template->after()
#10 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#14 {main}
2012-08-09 03:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 03:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 03:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/checkhours was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-09 03:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/checkhours was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-09 03:46:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/user.php [ 440 ]
2012-08-09 03:46:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/user.php [ 440 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-09 04:07:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: POST ~ APPPATH/classes/controller/user.php [ 461 ]
2012-08-09 04:07:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: POST ~ APPPATH/classes/controller/user.php [ 461 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 461, Array)
#1 [internal function]: Controller_User->action_approvetime()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-09 04:08:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: POST ~ APPPATH/classes/controller/user.php [ 461 ]
2012-08-09 04:08:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: POST ~ APPPATH/classes/controller/user.php [ 461 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 461, Array)
#1 [internal function]: Controller_User->action_approvetime()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-09 04:10:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:10:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:10:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:10:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:12:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:12:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:12:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:12:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:12:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:12:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:12:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:12:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:12:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:12:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:12:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:12:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:12:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:12:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:13:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:13:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:13:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:13:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:13:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:13:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:13:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:13:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:13:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:13:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:13:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:13:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:13:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:13:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 04:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 04:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 22:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 22:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 22:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-09 22:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-09 23:39:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/views/event/view.php [ 125 ]
2012-08-09 23:39:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/views/event/view.php [ 125 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}