<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-25 02:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL viewpost/indexd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-09-25 02:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL viewpost/indexd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 02:20:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: viewpost/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-09-25 02:20:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: viewpost/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#1 {main}
2011-09-25 02:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 02:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 02:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 02:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 02:25:30 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/model/post.php [ 20 ]
2011-09-25 02:25:30 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/model/post.php [ 20 ]
--
#0 /home/dev/web/projects/blog/application/classes/model/post.php(20): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 20, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/front.php(29): Model_Post->get_posts(0, 2)
#2 [internal function]: Controller_Front->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-25 02:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 02:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 02:40:33 --- ERROR: ErrorException [ 1 ]: Class 'DBH' not found ~ APPPATH/classes/model/post.php [ 46 ]
2011-09-25 02:40:33 --- STRACE: ErrorException [ 1 ]: Class 'DBH' not found ~ APPPATH/classes/model/post.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 02:40:43 --- ERROR: ErrorException [ 1 ]: Class 'DBH' not found ~ APPPATH/classes/model/post.php [ 46 ]
2011-09-25 02:40:43 --- STRACE: ErrorException [ 1 ]: Class 'DBH' not found ~ APPPATH/classes/model/post.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 02:45:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/classes/model/post.php [ 94 ]
2011-09-25 02:45:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/classes/model/post.php [ 94 ]
--
#0 /home/dev/web/projects/blog/application/classes/model/post.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 94, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/front.php(35): Model_Post->length()
#2 [internal function]: Controller_Front->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-25 02:46:09 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 68 ]
2011-09-25 02:46:09 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 68 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(68): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 68, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 02:47:14 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/site.php [ 70 ]
2011-09-25 02:47:14 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/site.php [ 70 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 70, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 02:47:55 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 68 ]
2011-09-25 02:47:55 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 68 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(68): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 68, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 02:49:38 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 68 ]
2011-09-25 02:49:38 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 68 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(68): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 68, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 02:50:38 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
2011-09-25 02:50:38 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 70, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 02:55:09 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ APPPATH/views/site.php [ 82 ]
2011-09-25 02:55:09 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ APPPATH/views/site.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/home/dev/web/p...', 82, Array)
#1 /home/dev/web/projects/blog/application/views/site.php(82): explode('', Array)
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#4 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-25 02:55:19 --- ERROR: ErrorException [ 2 ]: explode() expects at least 2 parameters, 1 given ~ APPPATH/views/site.php [ 82 ]
2011-09-25 02:55:19 --- STRACE: ErrorException [ 2 ]: explode() expects at least 2 parameters, 1 given ~ APPPATH/views/site.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/home/dev/web/p...', 82, Array)
#1 /home/dev/web/projects/blog/application/views/site.php(82): explode(Array)
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#4 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-25 02:55:26 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 1 to be string, array given ~ APPPATH/views/site.php [ 82 ]
2011-09-25 02:55:26 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 1 to be string, array given ~ APPPATH/views/site.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/home/dev/web/p...', 82, Array)
#1 /home/dev/web/projects/blog/application/views/site.php(82): explode(Array, '')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#4 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-25 02:55:36 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 1 to be string, array given ~ APPPATH/views/site.php [ 82 ]
2011-09-25 02:55:36 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 1 to be string, array given ~ APPPATH/views/site.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/home/dev/web/p...', 82, Array)
#1 /home/dev/web/projects/blog/application/views/site.php(82): explode(Array, '')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#4 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-25 02:55:40 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/site.php [ 82 ]
2011-09-25 02:55:40 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/site.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/dev/web/p...', 82, Array)
#1 /home/dev/web/projects/blog/application/views/site.php(82): implode(Array, '')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#4 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-25 02:55:53 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/site.php [ 82 ]
2011-09-25 02:55:53 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/site.php [ 82 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/dev/web/p...', 82, Array)
#1 /home/dev/web/projects/blog/application/views/site.php(82): implode('', Array)
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#4 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#10 {main}
2011-09-25 02:56:22 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/site.php [ 82 ]
2011-09-25 02:56:22 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/site.php [ 82 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(82): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 82, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 02:56:41 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/views/site.php [ 82 ]
2011-09-25 02:56:41 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/views/site.php [ 82 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(82): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 82, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:01:04 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
2011-09-25 03:01:04 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 70, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:02:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/post.php [ 57 ]
2011-09-25 03:02:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/post.php [ 57 ]
--
#0 /home/dev/web/projects/blog/application/classes/model/post.php(57): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 57, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/front.php(20): Model_Post->query_posts(2)
#2 [internal function]: Controller_Front->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-25 03:03:53 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/post.php [ 65 ]
2011-09-25 03:03:53 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/post.php [ 65 ]
--
#0 /home/dev/web/projects/blog/application/classes/model/post.php(65): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 65, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/front.php(20): Model_Post->query_posts(2)
#2 [internal function]: Controller_Front->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-25 03:04:56 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
2011-09-25 03:04:56 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 70, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:05:21 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
2011-09-25 03:05:21 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 70, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:05:57 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 82 ]
2011-09-25 03:05:57 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 82 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(82): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 82, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:06:03 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/site.php [ 82 ]
2011-09-25 03:06:03 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/site.php [ 82 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(82): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 82, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:06:22 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/site.php [ 82 ]
2011-09-25 03:06:22 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/site.php [ 82 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(82): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 82, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:07:52 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/site.php [ 82 ]
2011-09-25 03:07:52 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/site.php [ 82 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(82): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 82, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:08:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/site.php [ 82 ]
2011-09-25 03:08:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/site.php [ 82 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(82): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 82, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:12:27 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/classes/model/post.php [ 68 ]
2011-09-25 03:12:27 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/classes/model/post.php [ 68 ]
--
#0 /home/dev/web/projects/blog/application/classes/model/post.php(68): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 68, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/front.php(20): Model_Post->query_posts(2)
#2 [internal function]: Controller_Front->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-25 03:13:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/model/post.php [ 64 ]
2011-09-25 03:13:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/model/post.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 03:14:23 --- ERROR: ErrorException [ 1 ]: Call to undefined function select_posts() ~ APPPATH/classes/controller/front.php [ 24 ]
2011-09-25 03:14:23 --- STRACE: ErrorException [ 1 ]: Call to undefined function select_posts() ~ APPPATH/classes/controller/front.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 03:15:05 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
2011-09-25 03:15:05 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 70, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:16:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/model/post.php [ 61 ]
2011-09-25 03:16:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/classes/model/post.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 03:16:16 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
2011-09-25 03:16:16 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 70, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:18:50 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
2011-09-25 03:18:50 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 70, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:22:10 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
2011-09-25 03:22:10 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 70, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:23:06 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
2011-09-25 03:23:06 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 70, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:23:12 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
2011-09-25 03:23:12 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 70, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:23:16 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
2011-09-25 03:23:16 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 70, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 03:26:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/post.php [ 57 ]
2011-09-25 03:26:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/post.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 03:27:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/post.php [ 57 ]
2011-09-25 03:27:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/post.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 03:27:05 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2' at line 1 [ 2 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-25 03:27:05 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2' at line 1 [ 2 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 2, false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(59): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/front.php(20): Model_Post->query_posts(2, 1)
#3 [internal function]: Controller_Front->action_index()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-25 03:27:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2' at line 1 [ 2 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-25 03:27:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2' at line 1 [ 2 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 2, false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(58): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/front.php(20): Model_Post->query_posts(2, 1)
#3 [internal function]: Controller_Front->action_index()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-25 03:29:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2' at line 1 [ 2 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-25 03:29:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2' at line 1 [ 2 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 2, false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(62): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/front.php(20): Model_Post->query_posts(2, 1)
#3 [internal function]: Controller_Front->action_index()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-25 03:29:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2' at line 1 [ 2 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-25 03:29:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2' at line 1 [ 2 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, '2', false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(62): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/front.php(20): Model_Post->query_posts(2, 1)
#3 [internal function]: Controller_Front->action_index()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-25 03:30:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2'' at line 1 [ 2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-25 03:30:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2'' at line 1 [ 2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, '2'', false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(62): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/front.php(20): Model_Post->query_posts(2, 1)
#3 [internal function]: Controller_Front->action_index()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-25 03:30:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/model/post.php [ 64 ]
2011-09-25 03:30:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/model/post.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 03:32:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/model/post.php [ 64 ]
2011-09-25 03:32:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/model/post.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 03:32:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 1 [ 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-25 03:32:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 1 [ 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 1, false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(59): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/front.php(20): Model_Post->query_posts(2, 1)
#3 [internal function]: Controller_Front->action_index()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-25 03:41:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: donothing ~ APPPATH/views/post.php [ 1 ]
2011-09-25 03:41:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: donothing ~ APPPATH/views/post.php [ 1 ]
--
#0 /home/dev/web/projects/blog/application/views/post.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 1, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Viewpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 15:26:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 15:26:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 15:26:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 15:26:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 15:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 15:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 15:28:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2011-09-25 15:28:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:28:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2011-09-25 15:28:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:29:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2011-09-25 15:29:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:29:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2011-09-25 15:29:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:29:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2011-09-25 15:29:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:30:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2011-09-25 15:30:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:30:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2011-09-25 15:30:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:31:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2011-09-25 15:31:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:32:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CLASS ~ APPPATH/classes/model/login.php [ 3 ]
2011-09-25 15:32:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CLASS ~ APPPATH/classes/model/login.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:33:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CLASS ~ APPPATH/classes/model/login.php [ 3 ]
2011-09-25 15:33:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CLASS ~ APPPATH/classes/model/login.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:34:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CLASS ~ APPPATH/classes/model/login.php [ 3 ]
2011-09-25 15:34:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CLASS ~ APPPATH/classes/model/login.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:34:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH/classes/controller/auth.php [ 21 ]
2011-09-25 15:34:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH/classes/controller/auth.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:34:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH/classes/controller/auth.php [ 21 ]
2011-09-25 15:34:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH/classes/controller/auth.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:35:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH/classes/controller/auth.php [ 21 ]
2011-09-25 15:35:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH/classes/controller/auth.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:35:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH/classes/controller/auth.php [ 21 ]
2011-09-25 15:35:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH/classes/controller/auth.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:35:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/auth.php [ 22 ]
2011-09-25 15:35:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/auth.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:35:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH/classes/controller/auth.php [ 22 ]
2011-09-25 15:35:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH/classes/controller/auth.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:35:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting '(' ~ APPPATH/classes/controller/auth.php [ 21 ]
2011-09-25 15:35:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting '(' ~ APPPATH/classes/controller/auth.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:35:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH/classes/controller/auth.php [ 22 ]
2011-09-25 15:35:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH/classes/controller/auth.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:36:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[', expecting '(' ~ APPPATH/classes/controller/auth.php [ 22 ]
2011-09-25 15:36:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[', expecting '(' ~ APPPATH/classes/controller/auth.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:36:39 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
2011-09-25 15:36:39 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/views/site.php [ 70 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 70, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 15:38:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/login.php [ 77 ]
2011-09-25 15:38:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/login.php [ 77 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 15:38:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/login.php [ 77 ]
2011-09-25 15:38:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/login.php [ 77 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 17:28:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/model/login.php [ 6 ]
2011-09-25 17:28:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/model/login.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 17:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 17:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 17:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 17:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 17:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 17:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL default was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 17:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 17:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 17:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 17:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 17:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 17:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 17:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 17:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL view was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 18:30:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'BY p_id DESC' at line 3 [ SELECT * 
											FROM posts 
											WHERE p_id BETWEEN 1 AND 3ORDER BY p_id DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-25 18:30:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'BY p_id DESC' at line 3 [ SELECT * 
											FROM posts 
											WHERE p_id BETWEEN 1 AND 3ORDER BY p_id DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * ??????...', false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(66): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/front.php(20): Model_Post->query_posts(3, 1)
#3 [internal function]: Controller_Front->action_index()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-25 18:30:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE p_id BETWEEN 1 AND 3' at line 3 [ SELECT * 
											FROM posts ORDER BY p_id DESC 
											WHERE p_id BETWEEN 1 AND 3 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-25 18:30:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE p_id BETWEEN 1 AND 3' at line 3 [ SELECT * 
											FROM posts ORDER BY p_id DESC 
											WHERE p_id BETWEEN 1 AND 3 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * ??????...', false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(66): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/front.php(20): Model_Post->query_posts(3, 1)
#3 [internal function]: Controller_Front->action_index()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-25 18:31:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESCENDING
											WHERE p_id BETWEEN 1 AND 3' at line 3 [ SELECT * 
											FROM posts 
											ORDER BY p_id DESCENDING
											WHERE p_id BETWEEN 1 AND 3 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-25 18:31:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESCENDING
											WHERE p_id BETWEEN 1 AND 3' at line 3 [ SELECT * 
											FROM posts 
											ORDER BY p_id DESCENDING
											WHERE p_id BETWEEN 1 AND 3 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * ??????...', false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(67): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/front.php(20): Model_Post->query_posts(3, 1)
#3 [internal function]: Controller_Front->action_index()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-25 18:31:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE p_id BETWEEN 1 AND 3' at line 4 [ SELECT * 
											FROM posts 
											ORDER BY p_id
											WHERE p_id BETWEEN 1 AND 3 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-25 18:31:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE p_id BETWEEN 1 AND 3' at line 4 [ SELECT * 
											FROM posts 
											ORDER BY p_id
											WHERE p_id BETWEEN 1 AND 3 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * ??????...', false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(67): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/front.php(20): Model_Post->query_posts(3, 1)
#3 [internal function]: Controller_Front->action_index()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-25 18:32:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'BY p_id' at line 4 [ SELECT * 
											FROM posts 
											
											WHERE p_id BETWEEN 1 AND 3ORDER BY p_id ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-09-25 18:32:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'BY p_id' at line 4 [ SELECT * 
											FROM posts 
											
											WHERE p_id BETWEEN 1 AND 3ORDER BY p_id ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/dev/web/projects/blog/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * ??????...', false, Array)
#1 /home/dev/web/projects/blog/application/classes/model/post.php(68): Kohana_Database_Query->execute()
#2 /home/dev/web/projects/blog/application/classes/controller/front.php(20): Model_Post->query_posts(3, 1)
#3 [internal function]: Controller_Front->action_index()
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#8 {main}
2011-09-25 18:38:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/model/post.php [ 42 ]
2011-09-25 18:38:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/model/post.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 18:47:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/site.php [ 87 ]
2011-09-25 18:47:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/site.php [ 87 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 18:47:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/site.php [ 87 ]
2011-09-25 18:47:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/site.php [ 87 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 18:47:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/site.php [ 87 ]
2011-09-25 18:47:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/site.php [ 87 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 18:49:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/site.php [ 83 ]
2011-09-25 18:49:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/site.php [ 83 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 18:49:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/site.php [ 83 ]
2011-09-25 18:49:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/site.php [ 83 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 18:50:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/site.php [ 84 ]
2011-09-25 18:50:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/site.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 18:50:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/site.php [ 84 ]
2011-09-25 18:50:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/site.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 18:51:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/site.php [ 83 ]
2011-09-25 18:51:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/site.php [ 83 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 18:56:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/site.php [ 87 ]
2011-09-25 18:56:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/site.php [ 87 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 87, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Front))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 18:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL foo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 18:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL foo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 18:59:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '!' ~ APPPATH/classes/controller/front.php [ 29 ]
2011-09-25 18:59:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '!' ~ APPPATH/classes/controller/front.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 18:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL foo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 18:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL foo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 19:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL modify/update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-25 19:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL modify/update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 19:29:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_Modify' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2011-09-25 19:29:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_Modify' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 19:30:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 59 ]
2011-09-25 19:30:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 59 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 59, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 19:31:07 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/modify.php [ 60 ]
2011-09-25 19:31:07 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/modify.php [ 60 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(60): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 60, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 19:32:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/editpost.php [ 23 ]
2011-09-25 19:32:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/editpost.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 19:33:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/editpost.php [ 23 ]
2011-09-25 19:33:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/editpost.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 19:34:36 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/modify.php [ 60 ]
2011-09-25 19:34:36 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/modify.php [ 60 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(60): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 60, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 19:35:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 59 ]
2011-09-25 19:35:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 59 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 59, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 19:36:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 59 ]
2011-09-25 19:36:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 59 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 59, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 19:50:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/model/post.php [ 28 ]
2011-09-25 19:50:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/model/post.php [ 28 ]
--
#0 /home/dev/web/projects/blog/application/classes/model/post.php(28): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 28, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/front.php(21): Model_Post->select_posts(0, 2)
#2 [internal function]: Controller_Front->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-25 19:53:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH/classes/model/post.php [ 26 ]
2011-09-25 19:53:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH/classes/model/post.php [ 26 ]
--
#0 /home/dev/web/projects/blog/application/classes/model/post.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 26, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/front.php(21): Model_Post->select_posts(1, 2)
#2 [internal function]: Controller_Front->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Front))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-25 19:57:18 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 77 ]
2011-09-25 19:57:18 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 77 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(77): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 77, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 19:57:26 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 77 ]
2011-09-25 19:57:26 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 77 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(77): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 77, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 19:57:52 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 83 ]
2011-09-25 19:57:52 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 83 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(83): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 83, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 19:58:09 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/modify.php [ 83 ]
2011-09-25 19:58:09 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/modify.php [ 83 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 83, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 19:59:20 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/modify.php [ 83 ]
2011-09-25 19:59:20 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/modify.php [ 83 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 83, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 19:59:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 77 ]
2011-09-25 19:59:43 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 77 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(77): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 77, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 20:00:21 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/modify.php [ 83 ]
2011-09-25 20:00:21 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH/views/modify.php [ 83 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 83, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 20:00:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 77 ]
2011-09-25 20:00:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 77 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(77): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 77, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 20:02:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 77 ]
2011-09-25 20:02:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 77 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(77): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 77, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 20:03:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/model/post.php [ 37 ]
2011-09-25 20:03:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/model/post.php [ 37 ]
--
#0 /home/dev/web/projects/blog/application/classes/model/post.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 37, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/editpost.php(25): Model_Post->select_posts(0, 1)
#2 [internal function]: Controller_Editpost->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-25 20:05:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: quantity ~ APPPATH/classes/model/post.php [ 26 ]
2011-09-25 20:05:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: quantity ~ APPPATH/classes/model/post.php [ 26 ]
--
#0 /home/dev/web/projects/blog/application/classes/model/post.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 26, Array)
#1 /home/dev/web/projects/blog/application/classes/controller/editpost.php(25): Model_Post->select_posts(0, 1)
#2 [internal function]: Controller_Editpost->action_index()
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#4 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#7 {main}
2011-09-25 20:10:20 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 77 ]
2011-09-25 20:10:20 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/modify.php [ 77 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(77): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 77, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 20:17:57 --- ERROR: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/classes/controller/viewpost.php [ 12 ]
2011-09-25 20:17:57 --- STRACE: ErrorException [ 8 ]: Undefined index: p_id ~ APPPATH/classes/controller/viewpost.php [ 12 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/viewpost.php(12): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 12, Array)
#1 [internal function]: Controller_Viewpost->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Viewpost))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-25 20:22:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/site.php [ 81 ]
2011-09-25 20:22:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/site.php [ 81 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 81, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 20:23:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/site.php [ 81 ]
2011-09-25 20:23:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/site.php [ 81 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 81, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Editpost))
#6 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#9 {main}
2011-09-25 20:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editpost/action_update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-09-25 20:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editpost/action_update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 20:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editpost/action_update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-09-25 20:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editpost/action_update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 20:31:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editpost/action_update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-09-25 20:31:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editpost/action_update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 20:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editpost/action_update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-09-25 20:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editpost/action_update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 20:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editpost/action_update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-09-25 20:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editpost/action_update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 20:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editpost/action_update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-09-25 20:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editpost/action_update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 20:32:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editpost/action_update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-09-25 20:32:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editpost/action_update was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-25 21:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editpost/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-09-25 21:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editpost/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}