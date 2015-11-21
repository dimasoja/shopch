<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-27 09:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-04-27 09:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-04-27 09:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 09:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-04-27 09:59:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\index\v_base.php [ 36 ]
2015-04-27 09:59:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\index\v_base.php [ 36 ]
--
#0 Z:\home\site.ru\www\application\views\index\v_base.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 36, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-04-27 09:59:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\index\v_base.php [ 36 ]
2015-04-27 09:59:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\index\v_base.php [ 36 ]
--
#0 Z:\home\site.ru\www\application\views\index\v_base.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 36, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-04-27 09:59:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\index\v_base.php [ 36 ]
2015-04-27 09:59:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\index\v_base.php [ 36 ]
--
#0 Z:\home\site.ru\www\application\views\index\v_base.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 36, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-04-27 09:59:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\index\v_base.php [ 36 ]
2015-04-27 09:59:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\index\v_base.php [ 36 ]
--
#0 Z:\home\site.ru\www\application\views\index\v_base.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 36, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-04-27 09:59:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\index\v_base.php [ 36 ]
2015-04-27 09:59:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\index\v_base.php [ 36 ]
--
#0 Z:\home\site.ru\www\application\views\index\v_base.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 36, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-04-27 11:16:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 11:16:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-04-27 11:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 11:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-04-27 11:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 11:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-04-27 11:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 11:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-04-27 12:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 12:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-04-27 13:30:00 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menuusers.php [ 5 ]
2015-04-27 13:30:00 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menuusers.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-04-27 13:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/products was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 13:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/products was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-04-27 13:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 13:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-04-27 13:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL widgets/menuusersd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 13:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL widgets/menuusersd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\application\classes\controller\admin\users.php(13): Kohana_Request->execute()
#3 [internal function]: Controller_Admin_Users->before()
#4 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-04-27 13:46:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: submenu ~ APPPATH\views\admin\v_base.php [ 25 ]
2015-04-27 13:46:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: submenu ~ APPPATH\views\admin\v_base.php [ 25 ]
--
#0 Z:\home\site.ru\www\application\views\admin\v_base.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 25, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-04-27 13:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 13:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-04-27 13:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 13:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-04-27 14:38:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
2015-04-27 14:38:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 6, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
2015-04-27 14:51:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 6, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
2015-04-27 14:51:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 6, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
2015-04-27 14:51:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 6, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
2015-04-27 14:51:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 6, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
2015-04-27 14:51:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 6, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
2015-04-27 14:51:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 6, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
2015-04-27 14:51:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 6, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
2015-04-27 14:51:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 6, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
2015-04-27 14:51:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: all_news ~ APPPATH\views\widgets\w_news.php [ 6 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 6, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:54 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
2015-04-27 14:51:54 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 9, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:55 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
2015-04-27 14:51:55 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 9, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:56 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
2015-04-27 14:51:56 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 9, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:56 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
2015-04-27 14:51:56 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 9, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:57 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
2015-04-27 14:51:57 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 9, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:57 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
2015-04-27 14:51:57 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 9, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:57 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
2015-04-27 14:51:57 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 9, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:58 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
2015-04-27 14:51:58 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 9, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:51:58 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
2015-04-27 14:51:58 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\views\widgets\w_news.php [ 9 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_news.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 9, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-04-27 14:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 14:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-04-27 14:53:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL news/get/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 14:53:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL news/get/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-04-27 15:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL news/get/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 15:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL news/get/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-04-27 15:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-04-27 15:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}