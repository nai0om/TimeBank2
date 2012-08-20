<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-08 00:35:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/timeapprove/7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-08 00:35:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/timeapprove/7 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-08 00:36:00 --- ERROR: ErrorException [ 1 ]: Call to undefined function select() ~ APPPATH/classes/controller/user.php [ 443 ]
2012-08-08 00:36:00 --- STRACE: ErrorException [ 1 ]: Call to undefined function select() ~ APPPATH/classes/controller/user.php [ 443 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-08 00:36:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: event ~ APPPATH/classes/controller/user.php [ 445 ]
2012-08-08 00:36:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: event ~ APPPATH/classes/controller/user.php [ 445 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(445): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 445, Array)
#1 [internal function]: Controller_User->action_approvetime()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-08 00:36:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: event ~ APPPATH/classes/controller/user.php [ 445 ]
2012-08-08 00:36:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: event ~ APPPATH/classes/controller/user.php [ 445 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(445): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 445, Array)
#1 [internal function]: Controller_User->action_approvetime()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-08 00:36:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: event ~ APPPATH/classes/controller/user.php [ 445 ]
2012-08-08 00:36:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: event ~ APPPATH/classes/controller/user.php [ 445 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(445): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 445, Array)
#1 [internal function]: Controller_User->action_approvetime()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-08 00:36:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: event ~ APPPATH/classes/controller/user.php [ 446 ]
2012-08-08 00:36:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: event ~ APPPATH/classes/controller/user.php [ 446 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(446): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 446, Array)
#1 [internal function]: Controller_User->action_approvetime()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-08 00:37:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method DB::from() ~ APPPATH/classes/controller/user.php [ 451 ]
2012-08-08 00:37:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method DB::from() ~ APPPATH/classes/controller/user.php [ 451 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-08 00:40:14 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ UPDATE `users_events` SET  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 00:40:14 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ UPDATE `users_events` SET  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users_e...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(453): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 00:58:14 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม `create` สมัครสมาชิกองค์กร /organ' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม `create` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 00:58:14 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม `create` สมัครสมาชิกองค์กร /organ' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม `create` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(465): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 00:59:46 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create` สมัครสมาชิกองค์กร /organization/create' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, `ได้รับจากงานอาสา ปุ่ม `create` สมัครสมาชิกองค์กร /organization/create`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 00:59:46 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create` สมัครสมาชิกองค์กร /organization/create' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, `ได้รับจากงานอาสา ปุ่ม `create` สมัครสมาชิกองค์กร /organization/create`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(465): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:04:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method DB::escape() ~ APPPATH/classes/controller/user.php [ 458 ]
2012-08-08 01:04:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method DB::escape() ~ APPPATH/classes/controller/user.php [ 458 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-08 01:08:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method DB::quote() ~ APPPATH/classes/controller/user.php [ 458 ]
2012-08-08 01:08:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method DB::quote() ~ APPPATH/classes/controller/user.php [ 458 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-08 01:08:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method DB::quote() ~ APPPATH/classes/controller/user.php [ 458 ]
2012-08-08 01:08:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method DB::quote() ~ APPPATH/classes/controller/user.php [ 458 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-08 01:08:43 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Database::quote() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/user.php [ 458 ]
2012-08-08 01:08:43 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Database::quote() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/user.php [ 458 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(458): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Applications/M...', 458, Array)
#1 [internal function]: Controller_User->action_approvetime()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-08 01:11:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม `create` สมัครสมาชิกองค์กร /organ' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม `create` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:11:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม `create` สมัครสมาชิกองค์กร /organ' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม `create` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:12:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '', '' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/controller/user.php [ 458 ]
2012-08-08 01:12:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '', '' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/controller/user.php [ 458 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-08 01:12:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม `create` สมัครสมาชิกองค์กร /organ' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม `create` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:12:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม `create` สมัครสมาชิกองค์กร /organ' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม `create` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:13:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/user.php [ 460 ]
2012-08-08 01:13:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/user.php [ 460 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-08 01:13:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create` สมัครสมาชิกองค์กร /organization/create' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, `ได้รับจากงานอาสา ปุ่ม `create` สมัครสมาชิกองค์กร /organization/create`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:13:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create` สมัครสมาชิกองค์กร /organization/create' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, `ได้รับจากงานอาสา ปุ่ม `create` สมัครสมาชิกองค์กร /organization/create`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:13:54 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม `create` สมัครสมาชิกองค์กร /organ' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม `create` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:13:54 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม `create` สมัครสมาชิกองค์กร /organ' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม `create` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:14:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create` สมัครสมาชิกองค์กร /organization/create' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, `ได้รับจากงานอาสา ปุ่ม `create` สมัครสมาชิกองค์กร /organization/create`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:14:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create` สมัครสมาชิกองค์กร /organization/create' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, `ได้รับจากงานอาสา ปุ่ม `create` สมัครสมาชิกองค์กร /organization/create`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:16:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม \`create\` สมัครสมาชิกองค์กร /org' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:16:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม \`create\` สมัครสมาชิกองค์กร /org' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:16:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create\` สมัครสมาชิกองค์กร /organization/creat' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, `ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:16:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create\` สมัครสมาชิกองค์กร /organization/creat' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, `ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:16:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create\" สมัครสมาชิกองค์กร /organization/creat' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, `ได้รับจากงานอาสา ปุ่ม \`create\" สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:16:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create\" สมัครสมาชิกองค์กร /organization/creat' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, `ได้รับจากงานอาสา ปุ่ม \`create\" สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:17:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''ได้รับจากงานอาสา ปุ่ม \`create\` สม' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, 'ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create') VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:17:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''ได้รับจากงานอาสา ปุ่ม \`create\` สม' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, 'ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create') VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:17:26 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''ได้รับจากงานอาสา ปุ่ม \`create\` สม' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, 'ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create') VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:17:26 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''ได้รับจากงานอาสา ปุ่ม \`create\` สม' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, 'ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create') VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:17:48 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create\` สมัครสมาชิกองค์กร /organization/creat' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, `ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:17:48 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create\` สมัครสมาชิกองค์กร /organization/creat' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, `ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create`) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:18:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม \`create\` สมัครสมาชิกองค์กร /org' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:18:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม \`create\` สมัครสมาชิกองค์กร /org' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:18:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม \`create\` สมัครสมาชิกองค์กร /org' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:18:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม \`create\` สมัครสมาชิกองค์กร /org' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:18:45 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม \`create\` สมัครสมาชิกองค์กร /org' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:18:45 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม \`create\` สมัครสมาชิกองค์กร /org' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:18:46 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม \`create\` สมัครสมาชิกองค์กร /org' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:18:46 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ปุ่ม \`create\` สมัครสมาชิกองค์กร /org' at line 1 [ INSERT INTO `users_timebanks` (`1`, `2`, `138820`, ได้รับจากงานอาสา ปุ่ม \`create\` สมัครสมาชิกองค์กร /organization/create) VALUES  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(461): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:19:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Insert::set() ~ APPPATH/classes/controller/user.php [ 454 ]
2012-08-08 01:19:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Insert::set() ~ APPPATH/classes/controller/user.php [ 454 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-08 01:24:11 --- ERROR: Database_Exception [ 1146 ]: Table 'timebank_test.users_timebanks' doesn't exist [ INSERT INTO `users_timebanks` (`user_id`, `status`, `hour`, `description`) VALUES ('1', 2, '138820', 'ได้รับจากงานอาสา ปุ่ม \\\"create\\\" สมัครสมาชิกองค์กร /organization/create') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:24:11 --- STRACE: Database_Exception [ 1146 ]: Table 'timebank_test.users_timebanks' doesn't exist [ INSERT INTO `users_timebanks` (`user_id`, `status`, `hour`, `description`) VALUES ('1', 2, '138820', 'ได้รับจากงานอาสา ปุ่ม \\\"create\\\" สมัครสมาชิกองค์กร /organization/create') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(456): Kohana_Database_Query->execute()
#2 [internal function]: Controller_User->action_approvetime()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:36:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: mode ~ APPPATH/views/organization/view.php [ 70 ]
2012-08-08 01:36:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: mode ~ APPPATH/views/organization/view.php [ 70 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/views/organization/view.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 70, Array)
#1 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/TimeBank/application/views/template.php(63): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/template.php(88): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template->after()
#10 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Organization))
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#14 {main}
2012-08-08 01:55:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: event ~ APPPATH/classes/controller/organization.php [ 299 ]
2012-08-08 01:55:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: event ~ APPPATH/classes/controller/organization.php [ 299 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/organization.php(299): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 299, Array)
#1 [internal function]: Controller_Organization->action_view()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Organization))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-08 01:55:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'count(*)' in 'field list' [ SELECT `event_id`, `count(*)` AS `total` FROM `users_events` WHERE `time_approve` = 1 GROUP BY `event_id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:55:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'count(*)' in 'field list' [ SELECT `event_id`, `count(*)` AS `total` FROM `users_events` WHERE `time_approve` = 1 GROUP BY `event_id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `event_i...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/organization.php(301): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Organization->action_view()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Organization))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:56:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'COUNT(*)' in 'field list' [ SELECT `event_id`, `COUNT(*)` AS `total` FROM `users_events` WHERE `time_approve` = 1 GROUP BY `event_id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 01:56:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'COUNT(*)' in 'field list' [ SELECT `event_id`, `COUNT(*)` AS `total` FROM `users_events` WHERE `time_approve` = 1 GROUP BY `event_id` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `event_i...', false, Array)
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/organization.php(301): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Organization->action_view()
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Organization))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-08 01:59:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ APPPATH/classes/controller/organization.php [ 304 ]
2012-08-08 01:59:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ APPPATH/classes/controller/organization.php [ 304 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/organization.php(304): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 304, Array)
#1 [internal function]: Controller_Organization->action_view()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Organization))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-08 02:00:30 --- ERROR: ErrorException [ 8 ]: Undefined offset: 7 ~ APPPATH/classes/controller/organization.php [ 304 ]
2012-08-08 02:00:30 --- STRACE: ErrorException [ 8 ]: Undefined offset: 7 ~ APPPATH/classes/controller/organization.php [ 304 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/organization.php(304): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 304, Array)
#1 [internal function]: Controller_Organization->action_view()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Organization))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-08 02:29:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/classes/controller/user.php [ 502 ]
2012-08-08 02:29:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/classes/controller/user.php [ 502 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-08 02:31:41 --- ERROR: Kohana_Exception [ 0 ]: Directory DOCROOT/media\upload/volunteers must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2012-08-08 02:31:41 --- STRACE: Kohana_Exception [ 0 ]: Directory DOCROOT/media\upload/volunteers must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/model/user.php(97): Kohana_Upload::save(Array, NULL, '/Applications/M...')
#1 /Applications/MAMP/htdocs/TimeBank/application/classes/model/user.php(81): Model_User->upload('profile_image')
#2 [internal function]: Model_User->check_upload('profile_image', 'profile_image')
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/validation.php(364): call_user_func_array(Array, Array)
#4 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check()
#5 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#6 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#7 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/user.php(338): Kohana_ORM->save()
#8 [internal function]: Controller_User->action_profile()
#9 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#10 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#13 {main}
2012-08-08 02:50:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/event/view.php [ 119 ]
2012-08-08 02:50:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/event/view.php [ 119 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-08 03:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/bg_org.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-08 03:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/bg_org.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-08 23:44:10 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin.php [ 7 ]
2012-08-08 23:44:10 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin.php [ 7 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/admin.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/M...', 7, Array)
#1 [internal function]: Controller_Admin->action_index()
#2 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#6 {main}