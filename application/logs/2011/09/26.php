<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-26 01:12:29 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-09-26 01:12:29 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Front))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-26 01:13:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/front.php [ 17 ]
2011-09-26 01:13:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/front.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 01:13:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method View::factor() ~ APPPATH/classes/controller/front.php [ 17 ]
2011-09-26 01:13:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method View::factor() ~ APPPATH/classes/controller/front.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 01:17:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editposts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-26 01:17:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editposts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-26 01:17:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editposts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-26 01:17:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editposts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-26 01:17:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editposts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-26 01:17:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editposts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-26 01:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editposts/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-26 01:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editposts/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-26 01:18:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ']' ~ APPPATH/views/modify.php [ 91 ]
2011-09-26 01:18:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ']' ~ APPPATH/views/modify.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 01:18:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ']' ~ APPPATH/views/modify.php [ 91 ]
2011-09-26 01:18:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ']' ~ APPPATH/views/modify.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 01:18:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/modify.php [ 130 ]
2011-09-26 01:18:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/modify.php [ 130 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 01:18:50 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/modify.php [ 91 ]
2011-09-26 01:18:50 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/modify.php [ 91 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(91): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 91, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-26 01:28:39 --- ERROR: View_Exception [ 0 ]: The requested view elements/form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-09-26 01:28:39 --- STRACE: View_Exception [ 0 ]: The requested view elements/form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/view.php(137): Kohana_View->set_filename('elements/form')
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(30): Kohana_View->__construct('elements/form', NULL)
#2 /home/dev/web/projects/blog/application/classes/controller/editpost.php(27): Kohana_View::factory('elements/form')
#3 [internal function]: Controller_Editpost->action_index()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-26 01:29:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Editpost::_simple_nav() ~ APPPATH/classes/controller/editpost.php [ 28 ]
2011-09-26 01:29:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Editpost::_simple_nav() ~ APPPATH/classes/controller/editpost.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 01:29:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH/views/modify.php [ 103 ]
2011-09-26 01:29:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH/views/modify.php [ 103 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 01:30:04 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 91 ]
2011-09-26 01:30:04 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 91 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(91): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 91, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-26 01:44:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/controller/editpost.php [ 38 ]
2011-09-26 01:44:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/controller/editpost.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 01:44:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/editpost.php [ 40 ]
2011-09-26 01:44:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/editpost.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 01:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-26 01:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-26 01:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-26 01:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-26 01:50:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-26 01:50:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-26 01:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-26 01:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-26 01:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-26 01:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-26 01:52:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/modify.php [ 105 ]
2011-09-26 01:52:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/modify.php [ 105 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 01:53:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/modify.php [ 104 ]
2011-09-26 01:53:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/modify.php [ 104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 01:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editpost/update> ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-09-26 01:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editpost/update> ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-26 01:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL allposts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-26 01:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL allposts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-26 01:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL allposts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-26 01:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL allposts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-26 01:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL allposts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-26 01:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL allposts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-26 11:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-26 11:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}