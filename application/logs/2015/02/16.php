<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-16 10:06:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL widgets/menu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-16 10:06:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL widgets/menu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\application\classes\controller\index.php(13): Kohana_Request->execute()
#3 [internal function]: Controller_Index->before()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#8 {main}
2015-02-16 10:06:28 --- ERROR: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-16 10:06:28 --- STRACE: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('widgets/w_menu')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('widgets/w_menu', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('widgets/w_menu')
#3 [internal function]: Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\application\classes\controller\index.php(13): Kohana_Request->execute()
#8 [internal function]: Controller_Index->before()
#9 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#13 {main}
2015-02-16 10:08:46 --- ERROR: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-16 10:08:46 --- STRACE: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('widgets/w_menu')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('widgets/w_menu', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('widgets/w_menu')
#3 [internal function]: Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\application\classes\controller\index.php(13): Kohana_Request->execute()
#8 [internal function]: Controller_Index->before()
#9 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#13 {main}
2015-02-16 10:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL widgets/menu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-16 10:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL widgets/menu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\application\classes\controller\index.php(13): Kohana_Request->execute()
#3 [internal function]: Controller_Index->before()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#8 {main}
2015-02-16 10:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL widgets/menu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-16 10:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL widgets/menu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\application\classes\controller\index.php(13): Kohana_Request->execute()
#3 [internal function]: Controller_Index->before()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#8 {main}
2015-02-16 10:13:51 --- ERROR: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-16 10:13:51 --- STRACE: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('widgets/w_menu')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('widgets/w_menu', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('widgets/w_menu')
#3 [internal function]: Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\application\classes\controller\index.php(13): Kohana_Request->execute()
#8 [internal function]: Controller_Index->before()
#9 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#13 {main}
2015-02-16 10:18:31 --- ERROR: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-16 10:18:31 --- STRACE: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('widgets/w_menu')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('widgets/w_menu', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('widgets/w_menu')
#3 [internal function]: Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\application\classes\controller\index.php(13): Kohana_Request->execute()
#8 [internal function]: Controller_Index->before()
#9 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#13 {main}
2015-02-16 10:18:33 --- ERROR: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-16 10:18:33 --- STRACE: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('widgets/w_menu')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('widgets/w_menu', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('widgets/w_menu')
#3 [internal function]: Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\application\classes\controller\index.php(13): Kohana_Request->execute()
#8 [internal function]: Controller_Index->before()
#9 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#13 {main}
2015-02-16 10:23:34 --- ERROR: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-16 10:23:34 --- STRACE: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('widgets/w_menu')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('widgets/w_menu', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('widgets/w_menu')
#3 [internal function]: Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\application\classes\controller\index.php(12): Kohana_Request->execute()
#8 [internal function]: Controller_Index->before()
#9 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#13 {main}
2015-02-16 10:32:06 --- ERROR: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-16 10:32:06 --- STRACE: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('widgets/w_menu')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('widgets/w_menu', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('widgets/w_menu')
#3 [internal function]: Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\application\classes\controller\index.php(12): Kohana_Request->execute()
#8 [internal function]: Controller_Index->before()
#9 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#13 {main}
2015-02-16 10:52:06 --- ERROR: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-02-16 10:52:06 --- STRACE: View_Exception [ 0 ]: The requested view widgets/w_menu could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\view.php(137): Kohana_View->set_filename('widgets/w_menu')
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(30): Kohana_View->__construct('widgets/w_menu', NULL)
#2 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(33): Kohana_View::factory('widgets/w_menu')
#3 [internal function]: Kohana_Controller_Template->before()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\application\classes\controller\index.php(12): Kohana_Request->execute()
#8 [internal function]: Controller_Index->before()
#9 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#13 {main}
2015-02-16 10:53:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: catecories ~ APPPATH\views\widgets\w_menu.php [ 2 ]
2015-02-16 10:53:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: catecories ~ APPPATH\views\widgets\w_menu.php [ 2 ]
--
#0 Z:\home\localhost\www\site\application\views\widgets\w_menu.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 2, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\www\site\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\site\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#14 {main}
2015-02-16 10:54:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: catecories ~ APPPATH\views\widgets\w_menu.php [ 2 ]
2015-02-16 10:54:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: catecories ~ APPPATH\views\widgets\w_menu.php [ 2 ]
--
#0 Z:\home\localhost\www\site\application\views\widgets\w_menu.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 2, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\www\site\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\site\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#14 {main}
2015-02-16 10:59:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: catecories ~ APPPATH\views\widgets\w_menu.php [ 2 ]
2015-02-16 10:59:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: catecories ~ APPPATH\views\widgets\w_menu.php [ 2 ]
--
#0 Z:\home\localhost\www\site\application\views\widgets\w_menu.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 2, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\www\site\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\site\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#14 {main}
2015-02-16 11:00:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: catecories ~ APPPATH\views\widgets\w_menu.php [ 2 ]
2015-02-16 11:00:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: catecories ~ APPPATH\views\widgets\w_menu.php [ 2 ]
--
#0 Z:\home\localhost\www\site\application\views\widgets\w_menu.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 2, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\www\site\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\site\application\classes\controller\index.php(12): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#14 {main}
2015-02-16 12:38:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Index::widget_load() ~ APPPATH\classes\controller\index.php [ 11 ]
2015-02-16 12:38:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Index::widget_load() ~ APPPATH\classes\controller\index.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-02-16 12:40:03 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
2015-02-16 12:40:03 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-02-16 14:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-02-16 14:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#1 {main}
2015-02-16 14:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-02-16 14:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#1 {main}
2015-02-16 14:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-02-16 14:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#1 {main}
2015-02-16 14:58:16 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: scripts ~ SYSPATH\classes\kohana\view.php [ 171 ]
2015-02-16 14:58:16 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: scripts ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\localhost\www\site\application\classes\controller\widgets\menu.php(12): Kohana_View->__get('scripts')
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\localhost\www\site\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#8 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#11 {main}
2015-02-16 14:59:48 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: scripts ~ SYSPATH\classes\kohana\view.php [ 171 ]
2015-02-16 14:59:48 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: scripts ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 Z:\home\localhost\www\site\application\classes\controller\widgets\menu.php(13): Kohana_View->__get('scripts')
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\localhost\www\site\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#8 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#11 {main}