<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-15 10:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-15 10:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-15 10:49:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\widgets\w_menuproducts.php [ 1 ]
2015-05-15 10:49:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\widgets\w_menuproducts.php [ 1 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menuproducts.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 1, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuproducts))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(13): Kohana_Request->execute()
#9 [internal function]: Controller_Admin_Products->before()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-05-15 10:53:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\admin\categories.php [ 29 ]
2015-05-15 10:53:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\admin\categories.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-15 11:03:27 --- ERROR: View_Exception [ 0 ]: The requested view admin/categories/v_catecories_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-15 11:03:27 --- STRACE: View_Exception [ 0 ]: The requested view admin/categories/v_catecories_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/categorie...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/categorie...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(17): Kohana_View::factory('admin/categorie...')
#3 [internal function]: Controller_Admin_Categories->action_index()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-15 11:03:28 --- ERROR: View_Exception [ 0 ]: The requested view admin/categories/v_catecories_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-15 11:03:28 --- STRACE: View_Exception [ 0 ]: The requested view admin/categories/v_catecories_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/categorie...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/categorie...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(17): Kohana_View::factory('admin/categorie...')
#3 [internal function]: Controller_Admin_Categories->action_index()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-15 11:03:28 --- ERROR: View_Exception [ 0 ]: The requested view admin/categories/v_catecories_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-15 11:03:28 --- STRACE: View_Exception [ 0 ]: The requested view admin/categories/v_catecories_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/categorie...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/categorie...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(17): Kohana_View::factory('admin/categorie...')
#3 [internal function]: Controller_Admin_Categories->action_index()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-15 14:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-15 14:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-15 14:38:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\admin\categories\v_categories_index.php [ 2 ]
2015-05-15 14:38:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\admin\categories\v_categories_index.php [ 2 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\categories\v_categories_index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 2, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(27): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-15 15:12:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cat ~ APPPATH\views\widgets\w_menu.php [ 11 ]
2015-05-15 15:12:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cat ~ APPPATH\views\widgets\w_menu.php [ 11 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 11, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-05-15 15:12:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cat ~ APPPATH\views\widgets\w_menu.php [ 11 ]
2015-05-15 15:12:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cat ~ APPPATH\views\widgets\w_menu.php [ 11 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 11, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-05-15 15:12:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cat ~ APPPATH\views\widgets\w_menu.php [ 11 ]
2015-05-15 15:12:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cat ~ APPPATH\views\widgets\w_menu.php [ 11 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 11, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-05-15 15:12:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cat ~ APPPATH\views\widgets\w_menu.php [ 11 ]
2015-05-15 15:12:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cat ~ APPPATH\views\widgets\w_menu.php [ 11 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 11, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-05-15 15:12:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cat ~ APPPATH\views\widgets\w_menu.php [ 11 ]
2015-05-15 15:12:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cat ~ APPPATH\views\widgets\w_menu.php [ 11 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 11, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-05-15 15:12:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cat ~ APPPATH\views\widgets\w_menu.php [ 11 ]
2015-05-15 15:12:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cat ~ APPPATH\views\widgets\w_menu.php [ 11 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 11, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-05-15 16:14:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fulltree() ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-15 16:14:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fulltree() ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-15 16:14:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fulltree() ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-15 16:14:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fulltree() ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-15 16:14:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fulltree() ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-15 16:14:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fulltree() ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-15 16:14:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fulltree() ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-15 16:14:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fulltree() ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}