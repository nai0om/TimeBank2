<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-07 20:00:17 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'timebank_test' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2013-01-07 20:00:17 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'timebank_test' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
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
2013-01-07 21:43:26 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'timebank_test' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2013-01-07 21:43:26 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'timebank_test' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
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
2013-01-07 21:43:54 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'timebank_test' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2013-01-07 21:43:54 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'timebank_test' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
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
2013-01-07 21:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:45:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:45:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50abc3be32d0fScreen_Shot_2555-09-23_at_11.04.57_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50abc3be32d0fScreen_Shot_2555-09-23_at_11.04.57_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50abc3be32d0fScreen_Shot_2555-09-23_at_11.04.57_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50abc3be32d0fScreen_Shot_2555-09-23_at_11.04.57_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:47:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:47:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:48:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: valunteer ~ APPPATH/views/user/forms/profileforms.php [ 79 ]
2013-01-07 21:48:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: valunteer ~ APPPATH/views/user/forms/profileforms.php [ 79 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/profileforms.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 79, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(14): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(71): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(90): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template->after()
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#15 {main}
2013-01-07 21:51:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: valunteer ~ APPPATH/views/user/forms/profileforms.php [ 79 ]
2013-01-07 21:51:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: valunteer ~ APPPATH/views/user/forms/profileforms.php [ 79 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/profileforms.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 79, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(14): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(71): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(90): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template->after()
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#15 {main}
2013-01-07 21:52:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: valunteer ~ APPPATH/views/user/forms/profileforms.php [ 79 ]
2013-01-07 21:52:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: valunteer ~ APPPATH/views/user/forms/profileforms.php [ 79 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/profileforms.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 79, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(14): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(71): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(90): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template->after()
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#15 {main}
2013-01-07 21:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50abc3be32d0fScreen_Shot_2555-09-23_at_11.04.57_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50abc3be32d0fScreen_Shot_2555-09-23_at_11.04.57_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50abc3be32d0fScreen_Shot_2555-09-23_at_11.04.57_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50abc3be32d0fScreen_Shot_2555-09-23_at_11.04.57_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:52:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: valunteer ~ APPPATH/views/user/forms/profileforms.php [ 79 ]
2013-01-07 21:52:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: valunteer ~ APPPATH/views/user/forms/profileforms.php [ 79 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/profileforms.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 79, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(14): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(71): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(90): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template->after()
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#15 {main}
2013-01-07 21:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 21:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 21:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:06:27 --- ERROR: ReflectionException [ 0 ]: Function length() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
2013-01-07 22:06:27 --- STRACE: ReflectionException [ 0 ]: Function length() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/validation.php(383): ReflectionFunction->__construct('length')
#1 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check()
#2 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#3 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#4 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(601): Kohana_ORM->save()
#5 [internal function]: Controller_User->action_profile()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-07 22:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-07 22:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-07 22:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/volunteers/50216d46cb0e4DSC_3074.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}