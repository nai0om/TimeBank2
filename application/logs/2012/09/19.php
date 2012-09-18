<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-19 00:20:45 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
2012-09-19 00:20:45 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/skillforms.php(62): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 62, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(17): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(64): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template->after()
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#15 {main}
2012-09-19 00:22:32 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
2012-09-19 00:22:32 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/skillforms.php(62): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 62, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(17): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(64): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template->after()
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#15 {main}
2012-09-19 00:23:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
2012-09-19 00:23:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/skillforms.php(62): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 62, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(17): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(64): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template->after()
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#15 {main}
2012-09-19 00:23:24 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
2012-09-19 00:23:24 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/skillforms.php(62): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 62, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(17): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(64): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template->after()
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#15 {main}
2012-09-19 00:23:47 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
2012-09-19 00:23:47 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/skillforms.php(62): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 62, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(17): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(64): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template->after()
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#15 {main}
2012-09-19 00:23:53 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
2012-09-19 00:23:53 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/skillforms.php(62): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 62, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(17): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(64): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template->after()
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#15 {main}
2012-09-19 00:24:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
2012-09-19 00:24:43 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/skillforms.php(62): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 62, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(17): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(64): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template->after()
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#15 {main}
2012-09-19 00:24:58 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
2012-09-19 00:24:58 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/skillforms.php(62): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 62, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(17): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(64): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template->after()
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#15 {main}
2012-09-19 00:31:26 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
2012-09-19 00:31:26 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/skillforms.php(62): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 62, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(17): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(64): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template->after()
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#15 {main}
2012-09-19 00:34:24 --- ERROR: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, integer given ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
2012-09-19 00:34:24 --- STRACE: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, integer given ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Applications/M...', 62, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/skillforms.php(62): array_key_exists(0, 0)
#2 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(17): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(64): Kohana_View->__toString()
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#9 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#11 [internal function]: Controller_Template->after()
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#16 {main}
2012-09-19 00:35:13 --- ERROR: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, integer given ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
2012-09-19 00:35:13 --- STRACE: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, integer given ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Applications/M...', 62, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/skillforms.php(62): array_key_exists('0', 0)
#2 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(17): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(64): Kohana_View->__toString()
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#9 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#11 [internal function]: Controller_Template->after()
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#16 {main}
2012-09-19 00:35:15 --- ERROR: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, integer given ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
2012-09-19 00:35:15 --- STRACE: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, integer given ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Applications/M...', 62, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/skillforms.php(62): array_key_exists('0', 0)
#2 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(17): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(64): Kohana_View->__toString()
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#9 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#11 [internal function]: Controller_Template->after()
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#16 {main}
2012-09-19 00:36:13 --- ERROR: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, integer given ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
2012-09-19 00:36:13 --- STRACE: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, integer given ~ APPPATH/views/user/forms/skillforms.php [ 62 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Applications/M...', 62, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/skillforms.php(62): array_key_exists(0, 0)
#2 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(17): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(64): Kohana_View->__toString()
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#9 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#11 [internal function]: Controller_Template->after()
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#16 {main}
2012-09-19 01:02:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH/classes/controller/user.php [ 309 ]
2012-09-19 01:02:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH/classes/controller/user.php [ 309 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(309): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 309, Array)
#1 [internal function]: Controller_User->action_profile()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-19 01:06:26 --- ERROR: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/timebankhelper.php [ 97 ]
2012-09-19 01:06:26 --- STRACE: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ APPPATH/classes/timebankhelper.php [ 97 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Applications/M...', 97, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/timebankhelper.php(97): array_key_exists('11011', NULL)
#2 /Applications/MAMP/htdocs/TimeBank/application/views/user/forms/skillforms.php(6): timebankhelper::buildSkilsForm(NULL)
#3 /Applications/MAMP/htdocs/TimeBank/application/views/user/profile.php(17): include('/Applications/M...')
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(64): Kohana_View->__toString()
#8 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#9 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#10 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Template->after()
#13 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_User))
#14 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#17 {main}