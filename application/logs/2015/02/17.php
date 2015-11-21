<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-17 10:57:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\widgets\w_menu.php [ 1 ]
2015-02-17 10:57:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\widgets\w_menu.php [ 1 ]
--
#0 Z:\home\localhost\www\site\application\views\widgets\w_menu.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 1, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\www\site\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\site\application\classes\controller\index.php(14): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#14 {main}
2015-02-17 10:58:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\widgets\w_menu.php [ 1 ]
2015-02-17 10:58:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\widgets\w_menu.php [ 1 ]
--
#0 Z:\home\localhost\www\site\application\views\widgets\w_menu.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 1, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\www\site\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\site\application\classes\controller\index.php(14): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#14 {main}
2015-02-17 10:58:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\widgets\w_menu.php [ 1 ]
2015-02-17 10:58:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\widgets\w_menu.php [ 1 ]
--
#0 Z:\home\localhost\www\site\application\views\widgets\w_menu.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 1, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\www\site\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\site\application\classes\controller\index.php(14): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#14 {main}
2015-02-17 11:50:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/media/css/style.css.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-02-17 11:50:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/media/css/style.css.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#1 {main}
2015-02-17 11:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/media/css/style.css.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-02-17 11:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/media/css/style.css.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#1 {main}
2015-02-17 11:51:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-02-17 11:51:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#1 {main}
2015-02-17 11:51:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-02-17 11:51:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/media/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#1 {main}
2015-02-17 11:52:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: styl ~ APPPATH\views\v_base.php [ 7 ]
2015-02-17 11:52:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: styl ~ APPPATH\views\v_base.php [ 7 ]
--
#0 Z:\home\localhost\www\site\application\views\v_base.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 7, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\www\site\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#9 {main}
2015-02-17 11:56:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\widgets\w_menu.php [ 1 ]
2015-02-17 11:56:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\widgets\w_menu.php [ 1 ]
--
#0 Z:\home\localhost\www\site\application\views\widgets\w_menu.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 1, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\www\site\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\site\application\classes\controller\index.php(14): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#14 {main}
2015-02-17 14:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL widgets/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-17 14:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL widgets/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\application\classes\controller\index.php(12): Kohana_Request->execute()
#3 [internal function]: Controller_Index->before()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#8 {main}
2015-02-17 14:08:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL widgets/news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-17 14:08:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL widgets/news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\localhost\www\site\application\classes\controller\index.php(12): Kohana_Request->execute()
#3 [internal function]: Controller_Index->before()
#4 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#8 {main}
2015-02-17 14:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL widget/topmenu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-02-17 14:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL widget/topmenu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
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
2015-02-17 15:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/buy.gif ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-02-17 15:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/buy.gif ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#1 {main}
2015-02-17 15:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-02-17 15:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#1 {main}
2015-02-17 15:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/buy.gif ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-02-17 15:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/buy.gif ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#1 {main}