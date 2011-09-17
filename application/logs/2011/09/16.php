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