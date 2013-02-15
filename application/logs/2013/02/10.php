<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-10 10:12:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cron was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2013-02-10 10:12:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cron was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Applications/MAMP/htdocs/TimeBank/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Applications/MAMP/htdocs/TimeBank/index.php(109): Kohana_Request->execute()
#3 {main}