<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-28 22:34:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-09-28 22:34:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-09-28 22:34:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
2015-09-28 22:34:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menuadmin.php(23): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 23, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\application\classes\controller\admin.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Admin->before()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-09-28 22:37:56 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
2015-09-28 22:37:56 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menuadmin.php(23): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 23, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\application\classes\controller\admin.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Admin->before()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-09-28 22:37:59 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
2015-09-28 22:37:59 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menuadmin.php(23): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 23, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\application\classes\controller\admin.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Admin->before()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-09-28 22:43:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
2015-09-28 22:43:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 22:43:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
2015-09-28 22:43:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 22:43:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
2015-09-28 22:43:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 22:43:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
2015-09-28 22:43:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 22:43:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
2015-09-28 22:43:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 22:43:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
2015-09-28 22:43:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 22:44:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
2015-09-28 22:44:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\widgets\w_menuadmin.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 22:46:18 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\widgets\w_menuadmin.php [ 25 ]
2015-09-28 22:46:18 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\widgets\w_menuadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menuadmin.php(25): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 25, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\application\classes\controller\admin.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Admin->before()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-09-28 22:48:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\widgets\w_menuadmin.php [ 25 ]
2015-09-28 22:48:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\widgets\w_menuadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menuadmin.php(25): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 25, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\application\classes\controller\admin.php(18): Kohana_Request->execute()
#9 [internal function]: Controller_Admin->before()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-09-28 22:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-28 22:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}