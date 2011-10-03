<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-28 13:14:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/site.php [ 97 ]
2011-09-28 13:14:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/site.php [ 97 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 97, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(27): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:15:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/site.php [ 97 ]
2011-09-28 13:15:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/site.php [ 97 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 97, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(27): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:15:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/site.php [ 97 ]
2011-09-28 13:15:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/site.php [ 97 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 97, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(27): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:17:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/site.php [ 97 ]
2011-09-28 13:17:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/site.php [ 97 ]
--
#0 /home/dev/web/projects/blog/application/views/site.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 97, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(27): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:17:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
2011-09-28 13:17:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 96, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(27): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:18:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
2011-09-28 13:18:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 96, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(27): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:19:12 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/controller/editpost.php [ 25 ]
2011-09-28 13:19:12 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/controller/editpost.php [ 25 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/editpost.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/home/dev/web/p...', 25, Array)
#1 [internal function]: Controller_Editpost->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-28 13:20:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
2011-09-28 13:20:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 96, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(26): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:20:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
2011-09-28 13:20:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 96, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(26): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:22:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/editpost.php [ 24 ]
2011-09-28 13:22:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/editpost.php [ 24 ]
--
#0 /home/dev/web/projects/blog/application/classes/controller/editpost.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/dev/web/p...', 24, Array)
#1 [internal function]: Controller_Editpost->action_index()
#2 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#3 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#6 {main}
2011-09-28 13:22:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
2011-09-28 13:22:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 96, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(26): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:22:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
2011-09-28 13:22:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 96, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(26): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:24:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
2011-09-28 13:24:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 96, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(26): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:24:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
2011-09-28 13:24:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 96 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 96, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(26): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:25:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 97 ]
2011-09-28 13:25:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/modify.php [ 97 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 97, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(26): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:25:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/modify.php [ 97 ]
2011-09-28 13:25:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/modify.php [ 97 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 97, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(26): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:27:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/modify.php [ 97 ]
2011-09-28 13:27:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/modify.php [ 97 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 97, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(26): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:28:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/editpost.php [ 55 ]
2011-09-28 13:28:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/editpost.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-28 13:28:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/modify.php [ 97 ]
2011-09-28 13:28:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH/views/modify.php [ 97 ]
--
#0 /home/dev/web/projects/blog/application/views/modify.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/dev/web/p...', 97, Array)
#1 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/dev/web/projects/blog/application/classes/controller/editpost.php(26): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Editpost->action_index()
#7 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#11 {main}
2011-09-28 13:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editposts/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-28 13:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editposts/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-28 13:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editposts/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-28 13:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editposts/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-28 13:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editposts/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-28 13:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editposts/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-28 13:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editposts/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-28 13:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editposts/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-28 13:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editposts/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-28 13:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editposts/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-28 13:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editposts/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-28 13:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editposts/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#3 {main}
2011-09-28 13:43:38 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Form::submit(), called in /home/dev/web/projects/blog/application/views/modify.php on line 124 and defined ~ SYSPATH/classes/kohana/form.php [ 354 ]
2011-09-28 13:43:38 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Form::submit(), called in /home/dev/web/projects/blog/application/views/modify.php on line 124 and defined ~ SYSPATH/classes/kohana/form.php [ 354 ]
--
#0 /home/dev/web/projects/blog/system/classes/kohana/form.php(354): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/dev/web/p...', 354, Array)
#1 /home/dev/web/projects/blog/application/views/modify.php(124): Kohana_Form::submit('submit')
#2 /home/dev/web/projects/blog/system/classes/kohana/view.php(61): include('/home/dev/web/p...')
#3 /home/dev/web/projects/blog/system/classes/kohana/view.php(343): Kohana_View::capture('/home/dev/web/p...', Array)
#4 /home/dev/web/projects/blog/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /home/dev/web/projects/blog/system/classes/kohana/response.php(160): Kohana_View->__toString()
#6 /home/dev/web/projects/blog/application/classes/controller/editpost.php(26): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Editpost->action_index()
#8 /home/dev/web/projects/blog/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Editpost))
#9 /home/dev/web/projects/blog/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/dev/web/projects/blog/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/dev/web/projects/blog/index.php(109): Kohana_Request->execute()
#12 {main}