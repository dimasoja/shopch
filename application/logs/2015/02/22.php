<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-22 12:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-22 12:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#3 {main}
2015-02-22 12:21:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL widgets/topmenu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-22 12:21:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL widgets/topmenu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\application\classes\controller\base.php(16): Kohana_Request->execute()
#3 Z:\home\localhost\www\site\application\classes\controller\index.php(10): Controller_Base->before()
#4 [internal function]: Controller_Index->before()
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#9 {main}
2015-02-22 12:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL widgets/topmenu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-22 12:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL widgets/topmenu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\application\classes\controller\base.php(16): Kohana_Request->execute()
#3 Z:\home\localhost\www\site\application\classes\controller\index.php(10): Controller_Base->before()
#4 [internal function]: Controller_Index->before()
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#9 {main}
2015-02-22 12:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-22 12:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#3 {main}
2015-02-22 12:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-22 12:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#3 {main}
2015-02-22 13:30:21 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 833 ]
2015-02-22 13:30:21 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 833 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request.php(833): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 833, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(208): Kohana_Request->__construct('/admin', NULL, Array)
#2 Z:\home\localhost\www\site\index.php(108): Kohana_Request::factory()
#3 {main}
2015-02-22 13:32:56 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 833 ]
2015-02-22 13:32:56 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 833 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request.php(833): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 833, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(208): Kohana_Request->__construct('/admin', NULL, Array)
#2 Z:\home\localhost\www\site\index.php(108): Kohana_Request::factory()
#3 {main}
2015-02-22 13:32:59 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 833 ]
2015-02-22 13:32:59 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 833 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request.php(833): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 833, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(208): Kohana_Request->__construct('/admin', NULL, Array)
#2 Z:\home\localhost\www\site\index.php(108): Kohana_Request::factory()
#3 {main}
2015-02-22 13:34:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu_admin ~ APPPATH\views\admin\v_base.php [ 18 ]
2015-02-22 13:34:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu_admin ~ APPPATH\views\admin\v_base.php [ 18 ]
--
#0 Z:\home\localhost\www\site\application\views\admin\v_base.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 18, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\www\site\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#9 {main}
2015-02-22 13:35:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu_admin ~ APPPATH\views\admin\v_base.php [ 18 ]
2015-02-22 13:35:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu_admin ~ APPPATH\views\admin\v_base.php [ 18 ]
--
#0 Z:\home\localhost\www\site\application\views\admin\v_base.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 18, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\www\site\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#9 {main}
2015-02-22 13:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menuadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-22 13:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menuadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\application\classes\controller\admin.php(11): Kohana_Request->execute()
#3 [internal function]: Controller_Admin->before()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#8 {main}
2015-02-22 13:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-22 13:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#3 {main}
2015-02-22 14:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-22 14:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#3 {main}
2015-02-22 14:20:07 --- ERROR: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-22 14:20:07 --- STRACE: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('v_base')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('v_base', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('v_base')
#3 Z:\home\localhost\www\site\application\classes\controller\base.php(8): Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\application\classes\controller\index.php(10): Controller_Base->before()
#5 [internal function]: Controller_Index->before()
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#7 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#10 {main}
2015-02-22 14:20:46 --- ERROR: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-22 14:20:46 --- STRACE: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('v_base')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('v_base', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('v_base')
#3 Z:\home\localhost\www\site\application\classes\controller\base.php(8): Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\application\classes\controller\index.php(10): Controller_Base->before()
#5 [internal function]: Controller_Index->before()
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#7 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#10 {main}
2015-02-22 14:20:49 --- ERROR: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-22 14:20:49 --- STRACE: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('v_base')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('v_base', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('v_base')
#3 Z:\home\localhost\www\site\application\classes\controller\base.php(8): Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\application\classes\controller\index.php(10): Controller_Base->before()
#5 [internal function]: Controller_Index->before()
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#7 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#10 {main}
2015-02-22 14:22:26 --- ERROR: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-22 14:22:26 --- STRACE: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('v_base')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('v_base', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('v_base')
#3 Z:\home\localhost\www\site\application\classes\controller\base.php(8): Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\application\classes\controller\index.php(10): Controller_Base->before()
#5 [internal function]: Controller_Index->before()
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#7 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#10 {main}
2015-02-22 14:22:28 --- ERROR: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-22 14:22:28 --- STRACE: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('v_base')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('v_base', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('v_base')
#3 Z:\home\localhost\www\site\application\classes\controller\base.php(8): Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\application\classes\controller\index.php(10): Controller_Base->before()
#5 [internal function]: Controller_Index->before()
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#7 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#10 {main}
2015-02-22 14:22:30 --- ERROR: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-22 14:22:30 --- STRACE: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('v_base')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('v_base', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('v_base')
#3 Z:\home\localhost\www\site\application\classes\controller\base.php(8): Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\application\classes\controller\index.php(10): Controller_Base->before()
#5 [internal function]: Controller_Index->before()
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#7 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#10 {main}
2015-02-22 14:24:35 --- ERROR: View_Exception [ 0 ]: The requested view index/v_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-22 14:24:35 --- STRACE: View_Exception [ 0 ]: The requested view index/v_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('index/v_index')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('index/v_index', NULL)
#2 Z:\home\localhost\www\site\application\classes\controller\index\main.php(8): Kohana_View::factory('index/v_index')
#3 [internal function]: Controller_Index_Main->action_index()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Main))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#8 {main}
2015-02-22 14:24:38 --- ERROR: View_Exception [ 0 ]: The requested view index/v_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-22 14:24:38 --- STRACE: View_Exception [ 0 ]: The requested view index/v_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('index/v_index')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('index/v_index', NULL)
#2 Z:\home\localhost\www\site\application\classes\controller\index\main.php(8): Kohana_View::factory('index/v_index')
#3 [internal function]: Controller_Index_Main->action_index()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Main))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#8 {main}
2015-02-22 14:26:02 --- ERROR: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-22 14:26:02 --- STRACE: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('v_base')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('v_base', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('v_base')
#3 Z:\home\localhost\www\site\application\classes\controller\base.php(8): Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\application\classes\controller\index.php(10): Controller_Base->before()
#5 [internal function]: Controller_Index->before()
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#7 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#10 {main}
2015-02-22 15:10:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-22 15:10:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#3 {main}
2015-02-22 15:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-22 15:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#3 {main}