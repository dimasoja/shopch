<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-26 02:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:00:48 --- ERROR: ErrorException [ 8 ]: Use of undefined constant нету - assumed 'нету' ~ APPPATH\views\admin\products\v_products_index.php [ 15 ]
2015-07-26 02:00:48 --- STRACE: ErrorException [ 8 ]: Use of undefined constant нету - assumed 'нету' ~ APPPATH\views\admin\products\v_products_index.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_index.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\shopch....', 15, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-07-26 02:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 02:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 02:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 03:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 03:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 03:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 03:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 03:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 03:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 03:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 03:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 03:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 03:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 03:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 03:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 03:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 03:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 03:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 03:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 03:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 03:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 03:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 03:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 03:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 03:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 03:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 03:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 03:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 03:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 03:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 03:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/fonts/glyphicons-halflings-regular.woff ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/fonts/glyphicons-halflings-regular.ttf ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/fonts/glyphicons-halflings-regular.ttf ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:37:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:37:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:37:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:37:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:37:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:37:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-07-26 08:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-07-26 08:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/tiny_grid.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/fonts/glyphicons-halflings-regular.woff ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/fonts/glyphicons-halflings-regular.woff ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 08:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/fonts/glyphicons-halflings-regular.ttf ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 08:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/fonts/glyphicons-halflings-regular.ttf ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 11:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 11:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 11:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 11:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 11:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 11:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 11:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 11:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 11:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-07-26 11:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-07-26 12:55:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-07-26 12:55:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-07-26 12:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 12:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 12:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 12:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 12:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 12:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 12:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 12:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 12:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 12:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 12:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 12:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 13:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 13:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 13:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 13:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 13:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 13:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 13:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 13:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 13:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 13:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 13:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 13:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 13:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 13:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 13:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 13:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 13:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 13:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 13:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 13:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 13:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 13:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 13:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 13:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:20:29 --- ERROR: ErrorException [ 8 ]: Undefined index: image_id ~ APPPATH\views\admin\products\v_product_img.php [ 32 ]
2015-07-26 14:20:29 --- STRACE: ErrorException [ 8 ]: Undefined index: image_id ~ APPPATH\views\admin\products\v_product_img.php [ 32 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_product_img.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\shopch....', 32, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-07-26 14:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:23:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:23:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:23:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:23:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:24:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:24:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:24:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:24:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:24:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:24:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:24:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:24:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delimg/96 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-07-26 14:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delimg/96 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-07-26 14:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delimg/96 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-07-26 14:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delimg/96 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-07-26 14:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 14:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 14:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delimg/91 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-07-26 14:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delimg/91 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-07-26 15:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:06:26 --- ERROR: ErrorException [ 8 ]: Indirect modification of overloaded property Model_Product::$title has no effect ~ APPPATH\classes\controller\admin\products.php [ 237 ]
2015-07-26 15:06:26 --- STRACE: ErrorException [ 8 ]: Indirect modification of overloaded property Model_Product::$title has no effect ~ APPPATH\classes\controller\admin\products.php [ 237 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(237): Kohana_Core::error_handler(8, 'Indirect modifi...', 'Z:\home\shopch....', 237, Array)
#1 [internal function]: Controller_Admin_Products->action_img()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-07-26 15:08:01 --- ERROR: ErrorException [ 8 ]: Indirect modification of overloaded property Model_Product::$title has no effect ~ APPPATH\classes\controller\admin\products.php [ 237 ]
2015-07-26 15:08:01 --- STRACE: ErrorException [ 8 ]: Indirect modification of overloaded property Model_Product::$title has no effect ~ APPPATH\classes\controller\admin\products.php [ 237 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(237): Kohana_Core::error_handler(8, 'Indirect modifi...', 'Z:\home\shopch....', 237, Array)
#1 [internal function]: Controller_Admin_Products->action_img()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-07-26 15:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:19:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]st.php [ 1152 ]
2015-07-26 15:19:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:19:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/mainimg/103 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-07-26 15:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/mainimg/103 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-07-26 15:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/options was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-07-26 15:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/options was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-07-26 15:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:35:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:35:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:35:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:35:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-07-26 15:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-07-26 15:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}