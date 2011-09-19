<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-16 17:24:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-16 17:24:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-16 17:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-16 17:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-16 17:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-16 17:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-16 17:26:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-16 17:26:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-16 21:27:07 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2011-09-16 21:27:07 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 21:44:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/classes/controller/hello.php [ 18 ]
2011-09-16 21:44:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/classes/controller/hello.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 21:45:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/classes/controller/hello.php [ 18 ]
2011-09-16 21:45:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/classes/controller/hello.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 21:46:18 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'dev'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-09-16 21:46:18 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'dev'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/mysql.php(432): Kohana_Database_MySQL->connect()
#1 /home/dev/web/projects/blog/modules/database/classes/kohana/database.php(473): Kohana_Database_MySQL->escape('Glenn')
#2 [internal function]: Kohana_Database->quote('Glenn')
#3 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(189): array_map(Array, Array)
#4 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query/builder/select.php(417): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#6 /home/dev/web/projects/blog/application/classes/controller/hello.php(19): Kohana_Database_Query->execute()
#7 [internal function]: Controller_Hello->action_index()
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#9 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#12 {main}
2011-09-16 21:48:45 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'dev'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-09-16 21:48:45 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'dev'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/mysql.php(432): Kohana_Database_MySQL->connect()
#1 /home/dev/web/projects/blog/modules/database/classes/kohana/database.php(473): Kohana_Database_MySQL->escape('Glenn')
#2 [internal function]: Kohana_Database->quote('Glenn')
#3 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(189): array_map(Array, Array)
#4 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query/builder/select.php(417): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#6 /home/dev/web/projects/blog/application/classes/controller/hello.php(19): Kohana_Database_Query->execute()
#7 [internal function]: Controller_Hello->action_index()
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#9 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#12 {main}
2011-09-16 21:48:50 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'dev'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-09-16 21:48:50 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'dev'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/mysql.php(432): Kohana_Database_MySQL->connect()
#1 /home/dev/web/projects/blog/modules/database/classes/kohana/database.php(473): Kohana_Database_MySQL->escape('Glenn')
#2 [internal function]: Kohana_Database->quote('Glenn')
#3 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(189): array_map(Array, Array)
#4 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query/builder/select.php(417): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#6 /home/dev/web/projects/blog/application/classes/controller/hello.php(19): Kohana_Database_Query->execute()
#7 [internal function]: Controller_Hello->action_index()
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#9 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#12 {main}
2011-09-16 21:49:47 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'dev'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-09-16 21:49:47 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'dev'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/mysql.php(432): Kohana_Database_MySQL->connect()
#1 /home/dev/web/projects/blog/modules/database/classes/kohana/database.php(473): Kohana_Database_MySQL->escape('Glenn')
#2 [internal function]: Kohana_Database->quote('Glenn')
#3 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(189): array_map(Array, Array)
#4 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query/builder/select.php(417): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#6 /home/dev/web/projects/blog/application/classes/controller/hello.php(19): Kohana_Database_Query->execute()
#7 [internal function]: Controller_Hello->action_index()
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#9 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#12 {main}