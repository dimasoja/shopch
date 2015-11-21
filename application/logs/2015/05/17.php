<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-17 06:26:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:26:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-17 06:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-17 06:27:04 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:04 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:27:05 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:05 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:27:06 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:06 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:27:06 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:06 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:27:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:27:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:27:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:27:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:27:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:27:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:27:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:27:10 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:10 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:27:10 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:10 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:27:11 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:11 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:27:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:27:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 06:43:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
2015-05-17 06:43:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\w_menu.php [ 9 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 9, Array)
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
2015-05-17 07:01:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
2015-05-17 07:01:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\users\v_users_index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 12, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(27): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-17 07:03:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
2015-05-17 07:03:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\users\v_users_index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 12, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(27): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-17 07:03:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
2015-05-17 07:03:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\users\v_users_index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 12, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(27): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-17 07:03:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
2015-05-17 07:03:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\users\v_users_index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 12, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(27): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-17 07:03:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
2015-05-17 07:03:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\users\v_users_index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 12, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(27): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-17 07:03:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
2015-05-17 07:03:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\users\v_users_index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 12, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(27): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-17 07:03:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
2015-05-17 07:03:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\users\v_users_index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 12, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(27): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-17 07:03:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
2015-05-17 07:03:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\users\v_users_index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 12, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(27): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-17 07:03:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
2015-05-17 07:03:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\users\v_users_index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 12, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(27): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-17 07:03:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
2015-05-17 07:03:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users\v_users_index.php [ 12 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\users\v_users_index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 12, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(27): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-17 07:04:14 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\users.php [ 26 ]
2015-05-17 07:04:14 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\admin\users.php [ 26 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\users.php(26): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\shopch....', 26, Array)
#1 [internal function]: Controller_Admin_Users->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-17 07:05:00 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2015-05-17 07:05:00 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\shopch....', 28, Array)
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\users.php(25): Kohana_View::factory('admin/users/v_u...', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Admin_Users->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-17 07:05:02 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2015-05-17 07:05:02 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\shopch....', 28, Array)
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\users.php(25): Kohana_View::factory('admin/users/v_u...', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Admin_Users->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-17 07:05:02 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2015-05-17 07:05:02 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\shopch....', 28, Array)
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\users.php(25): Kohana_View::factory('admin/users/v_u...', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Admin_Users->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-17 07:05:03 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2015-05-17 07:05:03 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\shopch....', 28, Array)
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\users.php(25): Kohana_View::factory('admin/users/v_u...', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Admin_Users->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-17 07:05:03 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2015-05-17 07:05:03 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\shopch....', 28, Array)
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\users.php(25): Kohana_View::factory('admin/users/v_u...', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Admin_Users->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-17 07:05:04 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2015-05-17 07:05:04 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\shopch....', 28, Array)
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\users.php(25): Kohana_View::factory('admin/users/v_u...', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Admin_Users->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-17 07:05:04 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2015-05-17 07:05:04 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\shopch....', 28, Array)
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\users.php(25): Kohana_View::factory('admin/users/v_u...', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Admin_Users->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-17 07:05:05 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2015-05-17 07:05:05 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\shopch....', 28, Array)
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\users.php(25): Kohana_View::factory('admin/users/v_u...', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Admin_Users->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-17 07:05:05 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2015-05-17 07:05:05 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\shopch.ru\www\application\classes\controller\admin\users.php on line 25 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\shopch....', 28, Array)
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\users.php(25): Kohana_View::factory('admin/users/v_u...', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Admin_Users->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-17 07:42:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\widgets\w_menu.php [ 16 ]
2015-05-17 07:42:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\widgets\w_menu.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 07:42:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\widgets\w_menu.php [ 16 ]
2015-05-17 07:42:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\widgets\w_menu.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 07:42:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\widgets\w_menu.php [ 16 ]
2015-05-17 07:42:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\widgets\w_menu.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 07:42:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\widgets\w_menu.php [ 16 ]
2015-05-17 07:42:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\widgets\w_menu.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 08:38:53 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\widgets\menu.php [ 21 ]
2015-05-17 08:38:53 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\widgets\menu.php [ 21 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(21): Kohana_Core::error_handler(4096, 'Object of class...', 'Z:\home\shopch....', 21, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:39:05 --- ERROR: ErrorException [ 2 ]: sort() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\widgets\menu.php [ 21 ]
2015-05-17 08:39:05 --- STRACE: ErrorException [ 2 ]: sort() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\widgets\menu.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sort() expects ...', 'Z:\home\shopch....', 21, Array)
#1 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(21): sort(NULL)
#2 [internal function]: Controller_Widgets_Menu->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#7 [internal function]: Controller_Index->before()
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-17 08:39:06 --- ERROR: ErrorException [ 2 ]: sort() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\widgets\menu.php [ 21 ]
2015-05-17 08:39:06 --- STRACE: ErrorException [ 2 ]: sort() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\widgets\menu.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sort() expects ...', 'Z:\home\shopch....', 21, Array)
#1 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(21): sort(NULL)
#2 [internal function]: Controller_Widgets_Menu->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#7 [internal function]: Controller_Index->before()
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-17 08:39:06 --- ERROR: ErrorException [ 2 ]: sort() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\widgets\menu.php [ 21 ]
2015-05-17 08:39:06 --- STRACE: ErrorException [ 2 ]: sort() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\widgets\menu.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sort() expects ...', 'Z:\home\shopch....', 21, Array)
#1 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(21): sort(NULL)
#2 [internal function]: Controller_Widgets_Menu->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#7 [internal function]: Controller_Index->before()
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-17 08:39:07 --- ERROR: ErrorException [ 2 ]: sort() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\widgets\menu.php [ 21 ]
2015-05-17 08:39:07 --- STRACE: ErrorException [ 2 ]: sort() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\widgets\menu.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sort() expects ...', 'Z:\home\shopch....', 21, Array)
#1 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(21): sort(NULL)
#2 [internal function]: Controller_Widgets_Menu->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#7 [internal function]: Controller_Index->before()
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-17 08:51:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-17 08:51:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 20, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:51:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-17 08:51:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 20, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:51:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-17 08:51:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 20, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:51:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-17 08:51:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 20, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:51:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-17 08:51:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 20, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:51:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-17 08:51:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 20, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:51:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-17 08:51:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 20, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:51:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-17 08:51:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 20, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:51:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-17 08:51:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 20, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:51:37 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-17 08:51:37 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 20, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:51:37 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-17 08:51:37 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 20, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:51:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-17 08:51:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 20, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:51:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-17 08:51:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 20, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:51:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
2015-05-17 08:51:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$left_column ~ APPPATH\classes\controller\widgets\menu.php [ 20 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\widgets\menu.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 20, Array)
#1 [internal function]: Controller_Widgets_Menu->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-17 08:56:50 --- ERROR: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
2015-05-17 08:56:50 --- STRACE: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 08:56:51 --- ERROR: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
2015-05-17 08:56:51 --- STRACE: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 08:56:52 --- ERROR: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
2015-05-17 08:56:52 --- STRACE: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 08:56:52 --- ERROR: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
2015-05-17 08:56:52 --- STRACE: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 08:56:53 --- ERROR: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
2015-05-17 08:56:53 --- STRACE: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 08:56:53 --- ERROR: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
2015-05-17 08:56:53 --- STRACE: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 08:56:54 --- ERROR: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
2015-05-17 08:56:54 --- STRACE: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 08:56:54 --- ERROR: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
2015-05-17 08:56:54 --- STRACE: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 08:56:54 --- ERROR: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
2015-05-17 08:56:54 --- STRACE: ErrorException [ 1 ]: Call to undefined function factory() ~ MODPATH\orm-mptt\classes\kohana\orm\mptt.php [ 596 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 10:39:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '(' ~ APPPATH\views\widgets\w_menu.php [ 10 ]
2015-05-17 10:39:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '(' ~ APPPATH\views\widgets\w_menu.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 10:39:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '(' ~ APPPATH\views\widgets\w_menu.php [ 10 ]
2015-05-17 10:39:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '(' ~ APPPATH\views\widgets\w_menu.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 10:39:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '(' ~ APPPATH\views\widgets\w_menu.php [ 10 ]
2015-05-17 10:39:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '(' ~ APPPATH\views\widgets\w_menu.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 10:39:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ';' ~ APPPATH\views\widgets\w_menu.php [ 12 ]
2015-05-17 10:39:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ';' ~ APPPATH\views\widgets\w_menu.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 10:39:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ';' ~ APPPATH\views\widgets\w_menu.php [ 12 ]
2015-05-17 10:39:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ';' ~ APPPATH\views\widgets\w_menu.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 12:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-17 12:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-17 12:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-17 12:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-17 12:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-17 12:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-17 12:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-17 12:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-17 12:29:42 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:29:42 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:29:43 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:29:43 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:29:44 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:29:44 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:29:44 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:29:44 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:29:44 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:29:44 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:29:45 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:29:45 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:29:45 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:29:45 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:31:19 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:31:19 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:31:20 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:31:20 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:31:21 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:31:21 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:31:21 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:31:21 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:31:21 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:31:21 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:31:22 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:31:22 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:31:22 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:31:22 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:31:23 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:31:23 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:31:23 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:31:23 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:31:24 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:31:24 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:31:24 --- ERROR: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-17 12:31:24 --- STRACE: View_Exception [ 0 ]: The requested view admin/products/v_products_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/products/...')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/products/...', NULL)
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(84): Kohana_View::factory('admin/products/...')
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-17 12:34:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Products::_upload_img() ~ APPPATH\classes\controller\admin\products.php [ 59 ]
2015-05-17 12:34:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Products::_upload_img() ~ APPPATH\classes\controller\admin\products.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 12:35:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Products::_upload_img() ~ APPPATH\classes\controller\admin\products.php [ 59 ]
2015-05-17 12:35:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Products::_upload_img() ~ APPPATH\classes\controller\admin\products.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-17 12:38:02 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\kohana\image.php [ 631 ]
2015-05-17 12:38:02 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\kohana\image.php [ 631 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(117): Kohana_Image->save('media/uploads/s...')
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(59): Controller_Admin_Products->_upload_img('Z:\tmp\php92AD....')
#2 [internal function]: Controller_Admin_Products->action_add()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-17 12:58:49 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\kohana\image.php [ 631 ]
2015-05-17 12:58:49 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\kohana\image.php [ 631 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(117): Kohana_Image->save('media/uploads/s...')
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(59): Controller_Admin_Products->_upload_img('Z:\tmp\php97CD....')
#2 [internal function]: Controller_Admin_Products->action_add()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-17 14:06:48 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\kohana\image.php [ 631 ]
2015-05-17 14:06:48 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\kohana\image.php [ 631 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(117): Kohana_Image->save('media/uploads/s...')
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(59): Controller_Admin_Products->_upload_img('Z:\tmp\phpD676....')
#2 [internal function]: Controller_Admin_Products->action_add()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-17 14:07:39 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\kohana\image.php [ 631 ]
2015-05-17 14:07:39 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\kohana\image.php [ 631 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(117): Kohana_Image->save('/media/uploads/...')
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(59): Controller_Admin_Products->_upload_img('Z:\tmp\php9DEA....')
#2 [internal function]: Controller_Admin_Products->action_add()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-17 14:08:41 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\kohana\image.php [ 631 ]
2015-05-17 14:08:41 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\kohana\image.php [ 631 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(117): Kohana_Image->save('/media/uploads/...')
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(59): Controller_Admin_Products->_upload_img('Z:\tmp\php8FB8....')
#2 [internal function]: Controller_Admin_Products->action_add()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-17 14:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/edit/99 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-17 14:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/edit/99 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-17 14:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/edit/99 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-17 14:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/edit/99 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-17 14:15:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/edit/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-17 14:15:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/edit/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-17 14:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/edit/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-17 14:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/edit/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-17 14:17:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/edit/100 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-17 14:17:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/edit/100 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-17 15:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-17 15:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}