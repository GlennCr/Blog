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
2011-09-26 11:27:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH/views/site.php [ 102 ]
2011-09-26 11:27:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH/views/site.php [ 102 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 11:27:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/views/site.php [ 103 ]
2011-09-26 11:27:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/views/site.php [ 103 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 11:28:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/views/site.php [ 103 ]
2011-09-26 11:28:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/views/site.php [ 103 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 11:28:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/views/site.php [ 103 ]
2011-09-26 11:28:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/views/site.php [ 103 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 11:40:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/auth.php [ 22 ]
2011-09-26 11:40:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/auth.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 11:41:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/auth.php [ 24 ]
2011-09-26 11:41:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/auth.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 11:46:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(title, author) VALUES (J, J WHERE p_id = J' at line 1 [ UPDATE posts (title, author) VALUES (J, J WHERE p_id = J ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-26 11:46:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(title, author) VALUES (J, J WHERE p_id = J' at line 1 [ UPDATE posts (title, author) VALUES (J, J WHERE p_id = J ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE posts (t...', false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(52): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/editpost.php(54): Model_Post->edit_post('Jrray')
#3 [internal function]: Controller_Editpost->action_update()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-26 11:50:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH/classes/controller/editpost.php [ 46 ]
2011-09-26 11:50:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH/classes/controller/editpost.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 11:51:21 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/classes/controller/editpost.php [ 43 ]
2011-09-26 11:51:21 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/classes/controller/editpost.php [ 43 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/editpost.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 43, Array)
#1 [internal function]: Controller_Editpost->action_update()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-26 11:51:38 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/classes/controller/editpost.php [ 43 ]
2011-09-26 11:51:38 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/classes/controller/editpost.php [ 43 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/editpost.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 43, Array)
#1 [internal function]: Controller_Editpost->action_update()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-26 11:52:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: postedit ~ APPPATH/classes/controller/editpost.php [ 48 ]
2011-09-26 11:52:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: postedit ~ APPPATH/classes/controller/editpost.php [ 48 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/editpost.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 48, Array)
#1 [internal function]: Controller_Editpost->action_update()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-26 11:52:19 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/classes/model/post.php [ 52 ]
2011-09-26 11:52:19 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/classes/model/post.php [ 52 ]
--
#0 /home/dev/web/projects/blog/application/classes/model/post.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 52, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/editpost.php(48): Model_Post->edit_post(Array)
#2 [internal function]: Controller_Editpost->action_update()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-26 11:52:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(title, content) VALUES (Another Post, Just another post. Made to better show th' at line 1 [ UPDATE posts (title, content) VALUES (Another Post, Just another post. Made to better show the 'all posts' controller and what it's doing as well as give me something else to click modify on. Nothing to see here really. Nothing at all. p WHERE p_id =  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-26 11:52:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(title, content) VALUES (Another Post, Just another post. Made to better show th' at line 1 [ UPDATE posts (title, content) VALUES (Another Post, Just another post. Made to better show the 'all posts' controller and what it's doing as well as give me something else to click modify on. Nothing to see here really. Nothing at all. p WHERE p_id =  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE posts (t...', false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(52): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/editpost.php(48): Model_Post->edit_post(Array)
#3 [internal function]: Controller_Editpost->action_update()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-26 11:53:45 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(title, content) VALUES (Another Post, Just another post. Made to better show th' at line 1 [ UPDATE posts (title, content) VALUES (Another Post, Just another post. Made to better show the 'all posts' controller and what it's doing as well as give me something else to click modify on. Nothing to see here really. Nothing at all. p WHERE p_id =  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-26 11:53:45 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(title, content) VALUES (Another Post, Just another post. Made to better show th' at line 1 [ UPDATE posts (title, content) VALUES (Another Post, Just another post. Made to better show the 'all posts' controller and what it's doing as well as give me something else to click modify on. Nothing to see here really. Nothing at all. p WHERE p_id =  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE posts (t...', false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(52): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/editpost.php(48): Model_Post->edit_post(Array)
#3 [internal function]: Controller_Editpost->action_update()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-26 11:54:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/views/modify.php [ 108 ]
2011-09-26 11:54:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH/views/modify.php [ 108 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(108): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 108, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-26 11:58:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH/classes/model/post.php [ 53 ]
2011-09-26 11:58:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH/classes/model/post.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 12:00:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(title, content) VALUES ('Another Post', "Just another post. Made to better show' at line 1 [ UPDATE posts (title, content) VALUES ('Another Post', "Just another post. Made to better show the 'all posts' controller and what it's doing as well as give me something else to click modify on. Nothing to see here really. Nothing at all. p") WHERE p_id = 6 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-26 12:00:12 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(title, content) VALUES ('Another Post', "Just another post. Made to better show' at line 1 [ UPDATE posts (title, content) VALUES ('Another Post', "Just another post. Made to better show the 'all posts' controller and what it's doing as well as give me something else to click modify on. Nothing to see here really. Nothing at all. p") WHERE p_id = 6 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE posts (t...', false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(53): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/editpost.php(48): Model_Post->edit_post(Array)
#3 [internal function]: Controller_Editpost->action_update()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-26 12:01:25 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(title, content) VALUES ("Another Post", "Just another post. Made to better show' at line 1 [ UPDATE posts (title, content) VALUES ("Another Post", "Just another post. Made to better show the 'all posts' controller and what it's doing as well as give me something else to click modify on. Nothing to see here really. Nothing at all. p") WHERE p_id = 6 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-26 12:01:25 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(title, content) VALUES ("Another Post", "Just another post. Made to better show' at line 1 [ UPDATE posts (title, content) VALUES ("Another Post", "Just another post. Made to better show the 'all posts' controller and what it's doing as well as give me something else to click modify on. Nothing to see here really. Nothing at all. p") WHERE p_id = 6 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE posts (t...', false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(53): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/editpost.php(48): Model_Post->edit_post(Array)
#3 [internal function]: Controller_Editpost->action_update()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-26 12:05:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/model/post.php [ 53 ]
2011-09-26 12:05:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/model/post.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 12:05:54 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'all posts' controller and what it's doing as well as give me something else to c' at line 1 [ UPDATE `posts` SET `title` = 'Another Post', `content` = 'Just another post. Made to better show the 'all posts' controller and what it's doing as well as give me something else to click modify on. Nothing to see here really. Nothing at all. p' WHERE p_id = 6 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-26 12:05:54 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'all posts' controller and what it's doing as well as give me something else to c' at line 1 [ UPDATE `posts` SET `title` = 'Another Post', `content` = 'Just another post. Made to better show the 'all posts' controller and what it's doing as well as give me something else to click modify on. Nothing to see here really. Nothing at all. p' WHERE p_id = 6 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `posts` ...', false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(53): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/editpost.php(48): Model_Post->edit_post(Array)
#3 [internal function]: Controller_Editpost->action_update()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-26 12:10:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/model/post.php [ 38 ]
2011-09-26 12:10:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/model/post.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 12:53:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/editpost.php [ 88 ]
2011-09-26 12:53:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/editpost.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 12:53:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/model/post.php [ 59 ]
2011-09-26 12:53:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/model/post.php [ 59 ]
--
#0 /home/dev/web/projects/blog/application/classes/model/post.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 59, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/editpost.php(89): Model_Post->delete_post('6')
#2 [internal function]: Controller_Editpost->action_delete()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-26 12:54:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: pagetitle ~ APPPATH/views/modify.php [ 85 ]
2011-09-26 12:54:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: pagetitle ~ APPPATH/views/modify.php [ 85 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(85): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 85, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-26 12:55:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/controller/editpost.php [ 99 ]
2011-09-26 12:55:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/controller/editpost.php [ 99 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/editpost.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 99, Array)
#1 [internal function]: Controller_Editpost->action_delete()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-26 12:56:06 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/modify.php [ 91 ]
2011-09-26 12:56:06 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/modify.php [ 91 ]
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
2011-09-26 12:57:47 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/modify.php [ 91 ]
2011-09-26 12:57:47 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/modify.php [ 91 ]
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
2011-09-26 13:03:54 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/modify.php [ 91 ]
2011-09-26 13:03:54 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/modify.php [ 91 ]
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
2011-09-26 13:06:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/model/post.php [ 27 ]
2011-09-26 13:06:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/model/post.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 13:08:47 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/modify.php [ 91 ]
2011-09-26 13:08:47 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/modify.php [ 91 ]
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
2011-09-26 13:11:53 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/modify.php [ 96 ]
2011-09-26 13:11:53 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/modify.php [ 96 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(96): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 96, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-26 13:21:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/editpost.php [ 69 ]
2011-09-26 13:21:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/controller/editpost.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 13:26:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/editpost.php [ 71 ]
2011-09-26 13:26:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/controller/editpost.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 13:29:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test' in 'field list' [ INSERT INTO posts (title, content, author) VALUES (Title, test, Author) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-26 13:29:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test' in 'field list' [ INSERT INTO posts (title, content, author) VALUES (Title, test, Author) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO pos...', false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(45): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/editpost.php(74): Model_Post->add_post(Array)
#3 [internal function]: Controller_Editpost->action_create()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-26 13:33:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_NS_SEPARATOR ~ APPPATH/classes/model/post.php [ 45 ]
2011-09-26 13:33:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_NS_SEPARATOR ~ APPPATH/classes/model/post.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 13:33:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_NS_SEPARATOR ~ APPPATH/classes/model/post.php [ 45 ]
2011-09-26 13:33:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_NS_SEPARATOR ~ APPPATH/classes/model/post.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}