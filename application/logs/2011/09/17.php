<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-17 01:36:56 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'dev'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-09-17 01:36:56 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'dev'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
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
2011-09-17 14:00:17 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'dev'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-09-17 14:00:17 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'dev'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
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
2011-09-17 14:07:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  blog ~ MODPATH/database/classes/kohana/database.php [ 65 ]
2011-09-17 14:07:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  blog ~ MODPATH/database/classes/kohana/database.php [ 65 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 65, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/hello.php(17): Kohana_Database::instance('blog')
#2 [internal function]: Controller_Hello->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 14:07:47 --- ERROR: ErrorException [ 1 ]: Call to undefined function query() ~ APPPATH/classes/controller/hello.php [ 20 ]
2011-09-17 14:07:47 --- STRACE: ErrorException [ 1 ]: Call to undefined function query() ~ APPPATH/classes/controller/hello.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:08:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ APPPATH/classes/controller/hello.php [ 21 ]
2011-09-17 14:08:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ APPPATH/classes/controller/hello.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:11:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ APPPATH/classes/controller/hello.php [ 21 ]
2011-09-17 14:11:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ APPPATH/classes/controller/hello.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:12:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/hello.php [ 20 ]
2011-09-17 14:12:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/hello.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:12:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/hello.php [ 20 ]
2011-09-17 14:12:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/hello.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:12:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/hello.php [ 20 ]
2011-09-17 14:12:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/hello.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:12:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH/classes/controller/hello.php [ 20 ]
2011-09-17 14:12:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH/classes/controller/hello.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:12:48 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Database_Query::execute() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/hello.php [ 21 ]
2011-09-17 14:12:48 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Database_Query::execute() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/hello.php [ 21 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(21): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/dev/web/p...', 21, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 14:12:54 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Database_Query::execute() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/hello.php [ 21 ]
2011-09-17 14:12:54 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Database_Query::execute() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/hello.php [ 21 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(21): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/dev/web/p...', 21, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 14:13:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/classes/controller/hello.php [ 21 ]
2011-09-17 14:13:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/classes/controller/hello.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:14:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/hello.php [ 20 ]
2011-09-17 14:14:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/hello.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:15:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/hello.php [ 20 ]
2011-09-17 14:15:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/hello.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:16:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/hello.php [ 20 ]
2011-09-17 14:16:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/hello.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:17:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/classes/controller/hello.php [ 23 ]
2011-09-17 14:17:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/classes/controller/hello.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:19:22 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/kohana/database/mysql/result.php [ 33 ]
2011-09-17 14:19:22 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/kohana/database/mysql/result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/home/dev/web/p...', 33, Array)
#1 /home/dev/web/projects/blog/modules/database/classes/kohana/database/mysql/result.php(33): mysql_data_seek(Resource id #62, 'author')
#2 /home/dev/web/projects/blog/modules/database/classes/kohana/database/result.php(236): Kohana_Database_MySQL_Result->seek('author')
#3 /home/dev/web/projects/blog/application/classes/controller/hello.php(26): Kohana_Database_Result->offsetGet('author')
#4 [internal function]: Controller_Hello->action_index()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-17 14:21:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/controller/hello.php [ 29 ]
2011-09-17 14:21:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/controller/hello.php [ 29 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 29, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 14:27:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH/classes/controller/hello.php [ 27 ]
2011-09-17 14:27:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH/classes/controller/hello.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:28:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH/classes/controller/hello.php [ 28 ]
2011-09-17 14:28:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH/classes/controller/hello.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:30:47 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/hello.php [ 27 ]
2011-09-17 14:30:47 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/hello.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/dev/web/p...', 27, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/hello.php(27): implode(' and ', Array)
#2 [internal function]: Controller_Hello->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 14:31:06 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/hello.php [ 27 ]
2011-09-17 14:31:06 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/hello.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/dev/web/p...', 27, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/hello.php(27): implode(' and ', Array)
#2 [internal function]: Controller_Hello->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 14:31:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/controller/hello.php [ 33 ]
2011-09-17 14:31:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/controller/hello.php [ 33 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 33, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 14:32:22 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/hello.php [ 27 ]
2011-09-17 14:32:22 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/hello.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/dev/web/p...', 27, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/hello.php(27): implode(' and ', Array)
#2 [internal function]: Controller_Hello->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 14:32:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/hello.php [ 27 ]
2011-09-17 14:32:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/hello.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:32:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/hello.php [ 27 ]
2011-09-17 14:32:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/hello.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:33:02 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ APPPATH/classes/controller/hello.php [ 27 ]
2011-09-17 14:33:02 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ APPPATH/classes/controller/hello.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/home/dev/web/p...', 27, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/hello.php(27): explode(' and ', Array)
#2 [internal function]: Controller_Hello->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 14:33:10 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/hello.php [ 27 ]
2011-09-17 14:33:10 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/hello.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/dev/web/p...', 27, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/hello.php(27): implode(' and ', Array)
#2 [internal function]: Controller_Hello->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 14:33:26 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/hello.php [ 27 ]
2011-09-17 14:33:26 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/hello.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/dev/web/p...', 27, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/hello.php(27): implode(' and ', Array)
#2 [internal function]: Controller_Hello->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 14:34:10 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/hello.php [ 27 ]
2011-09-17 14:34:10 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/hello.php [ 27 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(27): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 27, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 14:35:01 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/hello.php [ 28 ]
2011-09-17 14:35:01 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/hello.php [ 28 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(28): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 28, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 14:36:30 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/controller/hello.php [ 29 ]
2011-09-17 14:36:30 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/controller/hello.php [ 29 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(29): Kohana_Core::error_handler(4096, 'Object of class...', '/home/dev/web/p...', 29, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 14:36:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::tostring() ~ APPPATH/classes/controller/hello.php [ 29 ]
2011-09-17 14:36:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::tostring() ~ APPPATH/classes/controller/hello.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 14:38:04 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/hello.php [ 27 ]
2011-09-17 14:38:04 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/hello.php [ 27 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(27): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 27, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 14:43:19 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ MODPATH/database/classes/kohana/database/result.php [ 143 ]
2011-09-17 14:43:19 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ MODPATH/database/classes/kohana/database/result.php [ 143 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/result.php(143): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 143, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/hello.php(26): Kohana_Database_Result->as_array('author')
#2 [internal function]: Controller_Hello->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 14:43:36 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ MODPATH/database/classes/kohana/database/result.php [ 143 ]
2011-09-17 14:43:36 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ MODPATH/database/classes/kohana/database/result.php [ 143 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/result.php(143): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 143, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/hello.php(26): Kohana_Database_Result->as_array('author')
#2 [internal function]: Controller_Hello->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 14:47:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/classes/controller/hello.php [ 33 ]
2011-09-17 14:47:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/classes/controller/hello.php [ 33 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 33, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 17:23:31 --- ERROR: ErrorException [ 2048 ]: Non-static method Post::To_String() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/hello.php [ 31 ]
2011-09-17 17:23:31 --- STRACE: ErrorException [ 2048 ]: Non-static method Post::To_String() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/hello.php [ 31 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(31): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/dev/web/p...', 31, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 17:24:03 --- ERROR: ErrorException [ 2048 ]: Non-static method Post::To_String() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/hello.php [ 31 ]
2011-09-17 17:24:03 --- STRACE: ErrorException [ 2048 ]: Non-static method Post::To_String() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/hello.php [ 31 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(31): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/dev/web/p...', 31, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 17:24:35 --- ERROR: ErrorException [ 2048 ]: Non-static method Post::To_String() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/hello.php [ 31 ]
2011-09-17 17:24:35 --- STRACE: ErrorException [ 2048 ]: Non-static method Post::To_String() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/hello.php [ 31 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(31): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/dev/web/p...', 31, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 17:25:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/classes/post.php [ 14 ]
2011-09-17 17:25:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/classes/post.php [ 14 ]
--
#0 /home/dev/web/projects/blog/application/classes/post.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 14, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/hello.php(31): Post::To_String()
#2 [internal function]: Controller_Hello->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 17:31:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Post::Post() ~ APPPATH/classes/controller/hello.php [ 24 ]
2011-09-17 17:31:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Post::Post() ~ APPPATH/classes/controller/hello.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 17:32:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/hello.php [ 24 ]
2011-09-17 17:32:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/controller/hello.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 17:32:48 --- ERROR: ErrorException [ 2 ]: Missing argument 4 for Post::__construct(), called in /home/dev/web/projects/blog/application/classes/controller/hello.php on line 24 and defined ~ APPPATH/classes/post.php [ 12 ]
2011-09-17 17:32:48 --- STRACE: ErrorException [ 2 ]: Missing argument 4 for Post::__construct(), called in /home/dev/web/projects/blog/application/classes/controller/hello.php on line 24 and defined ~ APPPATH/classes/post.php [ 12 ]
--
#0 /home/dev/web/projects/blog/application/classes/post.php(12): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/dev/web/p...', 12, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/hello.php(24): Post->__construct('Glenn', 'Foo', '2011-09-16 18:4...')
#2 [internal function]: Controller_Hello->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 17:33:43 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ APPPATH/classes/controller/hello.php [ 26 ]
2011-09-17 17:33:43 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ APPPATH/classes/controller/hello.php [ 26 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 26, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 17:33:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/controller/hello.php [ 30 ]
2011-09-17 17:33:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/controller/hello.php [ 30 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 30, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 17:34:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/classes/post.php [ 22 ]
2011-09-17 17:34:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: author ~ APPPATH/classes/post.php [ 22 ]
--
#0 /home/dev/web/projects/blog/application/classes/post.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 22, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/hello.php(29): Post->To_String()
#2 [internal function]: Controller_Hello->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-17 18:37:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: displayable ~ APPPATH/views/site.php [ 55 ]
2011-09-17 18:37:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: displayable ~ APPPATH/views/site.php [ 55 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 55, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Hello))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-17 18:39:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/hello.php [ 32 ]
2011-09-17 18:39:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/hello.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 18:44:24 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ APPPATH/views/site.php [ 60 ]
2011-09-17 18:44:24 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ APPPATH/views/site.php [ 60 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(60): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 60, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Hello))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-17 18:54:40 --- ERROR: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 18:54:40 --- STRACE: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 18:55:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 18:55:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 18:55:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 18:55:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 18:55:31 --- ERROR: ErrorException [ 1 ]: Call to undefined function Top_Posts() ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 18:55:31 --- STRACE: ErrorException [ 1 ]: Call to undefined function Top_Posts() ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 18:55:57 --- ERROR: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 18:55:57 --- STRACE: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 18:57:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH/classes/hf.php [ 6 ]
2011-09-17 18:57:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH/classes/hf.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:02:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH/classes/hf.php [ 6 ]
2011-09-17 19:02:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH/classes/hf.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:02:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH/classes/hf.php [ 6 ]
2011-09-17 19:02:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH/classes/hf.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:02:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/hf.php [ 13 ]
2011-09-17 19:02:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/hf.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:02:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/hf.php [ 12 ]
2011-09-17 19:02:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/hf.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:05:10 --- ERROR: ErrorException [ 1 ]: Class 'HF' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:05:10 --- STRACE: ErrorException [ 1 ]: Class 'HF' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:05:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:05:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:06:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:06:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:06:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:06:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:06:33 --- ERROR: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:06:33 --- STRACE: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:06:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:06:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:06:56 --- ERROR: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:06:56 --- STRACE: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:07:06 --- ERROR: ErrorException [ 1 ]: Call to undefined function Helper_Frontpage() ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:07:06 --- STRACE: ErrorException [ 1 ]: Call to undefined function Helper_Frontpage() ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:07:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:07:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:07:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:07:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:07:55 --- ERROR: ErrorException [ 1 ]: Call to undefined function Hello() ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:07:55 --- STRACE: ErrorException [ 1 ]: Call to undefined function Hello() ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:08:04 --- ERROR: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:08:04 --- STRACE: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:09:09 --- ERROR: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:09:09 --- STRACE: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:09:22 --- ERROR: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:09:22 --- STRACE: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:09:33 --- ERROR: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:09:33 --- STRACE: ErrorException [ 1 ]: Class 'Helper_Frontpage' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:10:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/helper.php [ 14 ]
2011-09-17 19:10:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/helper.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:10:15 --- ERROR: ErrorException [ 1 ]: Class 'Helper' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:10:15 --- STRACE: ErrorException [ 1 ]: Class 'Helper' not found ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:10:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Helper::Top_Posts() ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:10:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Helper::Top_Posts() ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:10:36 --- ERROR: ErrorException [ 2048 ]: Non-static method Helper::Top_Posts() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/hello.php [ 22 ]
2011-09-17 19:10:36 --- STRACE: ErrorException [ 2048 ]: Non-static method Helper::Top_Posts() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/hello.php [ 22 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(22): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/dev/web/p...', 22, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 19:10:41 --- ERROR: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 17 ]
2011-09-17 19:10:41 --- STRACE: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:10:55 --- ERROR: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 17 ]
2011-09-17 19:10:55 --- STRACE: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:11:00 --- ERROR: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 17 ]
2011-09-17 19:11:00 --- STRACE: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:11:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Post::Post() ~ APPPATH/classes/helper.php [ 17 ]
2011-09-17 19:11:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Post::Post() ~ APPPATH/classes/helper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:12:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Post::Post() ~ APPPATH/classes/helper.php [ 17 ]
2011-09-17 19:12:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Post::Post() ~ APPPATH/classes/helper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:12:58 --- ERROR: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 17 ]
2011-09-17 19:12:58 --- STRACE: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:13:07 --- ERROR: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 17 ]
2011-09-17 19:13:07 --- STRACE: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:13:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Post::Post() ~ APPPATH/classes/helper.php [ 17 ]
2011-09-17 19:13:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Post::Post() ~ APPPATH/classes/helper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:13:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Post::Post() ~ APPPATH/classes/helper.php [ 17 ]
2011-09-17 19:13:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Post::Post() ~ APPPATH/classes/helper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:13:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Post::instance() ~ APPPATH/classes/helper.php [ 17 ]
2011-09-17 19:13:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Post::instance() ~ APPPATH/classes/helper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:15:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/helper.php [ 17 ]
2011-09-17 19:15:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/helper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:15:52 --- ERROR: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 17 ]
2011-09-17 19:15:52 --- STRACE: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:18:20 --- ERROR: ErrorException [ 1 ]: Call to a member function Content_Preview() on a non-object ~ APPPATH/classes/controller/hello.php [ 27 ]
2011-09-17 19:18:20 --- STRACE: ErrorException [ 1 ]: Call to a member function Content_Preview() on a non-object ~ APPPATH/classes/controller/hello.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:18:32 --- ERROR: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/controller/hello.php [ 21 ]
2011-09-17 19:18:32 --- STRACE: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/controller/hello.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:18:47 --- ERROR: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/controller/hello.php [ 21 ]
2011-09-17 19:18:47 --- STRACE: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/controller/hello.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:19:34 --- ERROR: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/controller/hello.php [ 21 ]
2011-09-17 19:19:34 --- STRACE: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/controller/hello.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:19:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/controller/hello.php [ 27 ]
2011-09-17 19:19:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/controller/hello.php [ 27 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/hello.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 27, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-17 19:23:12 --- ERROR: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 22 ]
2011-09-17 19:23:12 --- STRACE: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:23:41 --- ERROR: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 22 ]
2011-09-17 19:23:41 --- STRACE: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:23:55 --- ERROR: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 18 ]
2011-09-17 19:23:55 --- STRACE: ErrorException [ 1 ]: Call to undefined function Post() ~ APPPATH/classes/helper.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-17 19:24:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/helper.php [ 17 ]
2011-09-17 19:24:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/helper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}