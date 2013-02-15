<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-09 02:10:07 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'timebank_test' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2013-01-09 02:10:07 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'timebank_test' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('timebank_test')
#1 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /Applications/MAMP/htdocs/TimeBank/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('events')
#4 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#5 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#6 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#7 /Applications/MAMP/htdocs/TimeBank/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#8 /Applications/MAMP/htdocs/TimeBank/application/classes/controller/event.php(12): Kohana_ORM::factory('event')
#9 [internal function]: Controller_Event->action_browse()
#10 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Event))
#11 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#14 {main}
2013-01-09 02:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:15:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:15:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:15:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:15:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:16:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:16:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:17:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:17:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:19:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:19:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:19:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:19:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:20:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:20:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:22:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000453.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000453.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000453.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000453.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/DSC02690.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/DSC02690.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:23:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:23:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/events/50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:25:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/DSC02690.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:25:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/DSC02690.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:25:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/DSC02690.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:25:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/DSC02690.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:27:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:27:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:27:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:27:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:27:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:27:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:27:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:27:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:32:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:32:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:32:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:32:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/50b61f5bf0501thaihealth.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/WP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/504f7d87122beWP_000454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/a100_504d6b07d5f17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/training/click_504d6f5b8e368.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:35:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/DSC02690.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:35:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/DSC02690.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:35:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/DSC02690.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:35:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/DSC02690.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/DSC02680.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/DSC02680.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f56031edDSC02744.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f56031edDSC02744.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f56ddcbeDSC02803.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f56ddcbeDSC02803.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f551f4a9DSC02721.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f551f4a9DSC02721.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f57c6104DSC02817.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f57c6104DSC02817.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f56031edDSC02744.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f56031edDSC02744.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f56ddcbeDSC02803.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f56ddcbeDSC02803.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f551f4a9DSC02721.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f551f4a9DSC02721.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f57c6104DSC02817.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/505e1f57c6104DSC02817.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 02:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/DSC02680.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-01-09 02:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/upload/news/DSC02680.JPG ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#1 {main}