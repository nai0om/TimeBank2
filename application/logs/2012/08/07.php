<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-07 00:21:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 63 ]
2012-08-07 00:21:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 63 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 63, Array)
#1 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Template->after()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-07 00:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/bg_org.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/bg_org.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:49:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:49:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 00:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 00:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/org_01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 01:13:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH/views/event/view.php [ 322 ]
2012-08-07 01:13:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH/views/event/view.php [ 322 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 01:44:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/controller/user.php [ 120 ]
2012-08-07 01:44:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/controller/user.php [ 120 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(120): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 120, Array)
#1 [internal function]: Controller_User->action_addhour()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-07 01:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 01:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 01:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/removecomment/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-07 01:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/removecomment/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-07 02:02:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 63 ]
2012-08-07 02:02:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 63 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 63, Array)
#1 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Template->after()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Event))
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-07 02:04:28 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete comment model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-08-07 02:04:28 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete comment model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/event.php(424): Kohana_ORM->delete()
#1 [internal function]: Controller_Event->action_removecomment()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Event))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-07 02:04:46 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete comment model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-08-07 02:04:46 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete comment model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/event.php(424): Kohana_ORM->delete()
#1 [internal function]: Controller_Event->action_removecomment()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Event))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-07 02:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 02:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 02:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 02:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 02:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 02:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 02:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_4.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 02:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_4.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 02:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_5.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 02:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_5.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 02:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_6.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 02:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_6.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 02:17:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH/views/event/approve.php [ 25 ]
2012-08-07 02:17:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH/views/event/approve.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 02:36:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/views/user/myevent.php [ 42 ]
2012-08-07 02:36:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/views/user/myevent.php [ 42 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/myevent.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', '/Applications/M...', 42, Array)
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
2012-08-07 02:47:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::whare() ~ APPPATH/classes/controller/user.php [ 449 ]
2012-08-07 02:47:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::whare() ~ APPPATH/classes/controller/user.php [ 449 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 02:48:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::count_all() ~ APPPATH/classes/controller/user.php [ 449 ]
2012-08-07 02:48:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::count_all() ~ APPPATH/classes/controller/user.php [ 449 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 02:48:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting ':' ~ APPPATH/views/user/myevent.php [ 44 ]
2012-08-07 02:48:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting ':' ~ APPPATH/views/user/myevent.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 03:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 03:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 03:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_3.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 03:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_1.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 03:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_5.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 03:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_5.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 03:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_4.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 03:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_4.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 03:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 03:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 03:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_6.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 03:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/main_6.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 03:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 03:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 03:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 03:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 03:32:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/controller/event.php [ 674 ]
2012-08-07 03:32:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/controller/event.php [ 674 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 03:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 03:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 03:38:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 03:38:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:38:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:38:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:38:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:38:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:41:05 --- ERROR: View_Exception [ 0 ]: The requested view event/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-08-07 21:41:05 --- STRACE: View_Exception [ 0 ]: The requested view event/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(137): Kohana_View->set_filename('event/')
#1 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(30): Kohana_View->__construct('event/', NULL)
#2 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/event.php(675): Kohana_View::factory('event/')
#3 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/event.php(196): Controller_Event->search_event('event/')
#4 [internal function]: Controller_Event->action_advance_search()
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Event))
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-07 21:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:47:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:47:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:47:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/contact_bg.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:47:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/contact_bg.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:47:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:47:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:50:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:50:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:51:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:51:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:51:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:51:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:52:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:52:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:55:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:55:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:55:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:55:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:55:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:55:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:57:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/event.php [ 639 ]
2012-08-07 21:57:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/event.php [ 639 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 21:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:57:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/event.php [ 639 ]
2012-08-07 21:57:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/event.php [ 639 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 21:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:57:46 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/event.php [ 639 ]
2012-08-07 21:57:46 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/event.php [ 639 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/event.php(639): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 639, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/event.php(197): Controller_Event->search_event('event/advanceds...')
#2 [internal function]: Controller_Event->action_advance_search()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Event))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-07 21:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:59:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:59:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 21:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 21:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-07 22:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/img/brown_circle.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-07 22:09:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Event::whare() ~ APPPATH/classes/controller/event.php [ 16 ]
2012-08-07 22:09:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Event::whare() ~ APPPATH/classes/controller/event.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-07 23:02:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: organization ~ APPPATH/views/user/myevent.php [ 28 ]
2012-08-07 23:02:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: organization ~ APPPATH/views/user/myevent.php [ 28 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/myevent.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 28, Array)
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
2012-08-07 23:05:29 --- ERROR: Database_Exception [ 1052 ]: Column 'status' in where clause is ambiguous [ SELECT `event`.* FROM `events` AS `event` JOIN `users_events` ON (`users_events`.`event_id` = `event`.`id`) WHERE `users_events`.`user_id` = '1' AND `status` = 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-07 23:05:29 --- STRACE: Database_Exception [ 1052 ]: Column 'status' in where clause is ambiguous [ SELECT `event`.* FROM `events` AS `event` JOIN `users_events` ON (`users_events`.`event_id` = `event`.`id`) WHERE `users_events`.`user_id` = '1' AND `status` = 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `event`....', 'Model_Event', Array)
#1 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(458): Kohana_ORM->find_all()
#4 [internal function]: Controller_User->action_myevent()
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-07 23:05:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'events.status' in 'where clause' [ SELECT `event`.* FROM `events` AS `event` JOIN `users_events` ON (`users_events`.`event_id` = `event`.`id`) WHERE `users_events`.`user_id` = '1' AND `events`.`status` = 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-07 23:05:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'events.status' in 'where clause' [ SELECT `event`.* FROM `events` AS `event` JOIN `users_events` ON (`users_events`.`event_id` = `event`.`id`) WHERE `users_events`.`user_id` = '1' AND `events`.`status` = 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `event`....', 'Model_Event', Array)
#1 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(458): Kohana_ORM->find_all()
#4 [internal function]: Controller_User->action_myevent()
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#9 {main}