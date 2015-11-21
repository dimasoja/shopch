<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-05 08:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-05 08:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-05 09:54:15 --- ERROR: ErrorException [ 8 ]: Undefined index: new_chek ~ APPPATH\classes\controller\admin\news.php [ 74 ]
2015-05-05 09:54:15 --- STRACE: ErrorException [ 8 ]: Undefined index: new_chek ~ APPPATH\classes\controller\admin\news.php [ 74 ]
--
#0 Z:\home\site.ru\www\application\classes\controller\admin\news.php(74): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 74, Array)
#1 [internal function]: Controller_Admin_News->action_add()
#2 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_News))
#3 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-05 09:59:05 --- ERROR: ErrorException [ 8 ]: Undefined index: new_chek ~ APPPATH\classes\controller\admin\news.php [ 74 ]
2015-05-05 09:59:05 --- STRACE: ErrorException [ 8 ]: Undefined index: new_chek ~ APPPATH\classes\controller\admin\news.php [ 74 ]
--
#0 Z:\home\site.ru\www\application\classes\controller\admin\news.php(74): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 74, Array)
#1 [internal function]: Controller_Admin_News->action_add()
#2 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_News))
#3 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-05 09:59:20 --- ERROR: ErrorException [ 8 ]: Undefined index: new_chek ~ APPPATH\classes\controller\admin\news.php [ 74 ]
2015-05-05 09:59:20 --- STRACE: ErrorException [ 8 ]: Undefined index: new_chek ~ APPPATH\classes\controller\admin\news.php [ 74 ]
--
#0 Z:\home\site.ru\www\application\classes\controller\admin\news.php(74): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 74, Array)
#1 [internal function]: Controller_Admin_News->action_add()
#2 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_News))
#3 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-05 10:00:37 --- ERROR: ErrorException [ 8 ]: Undefined index: new_chek ~ APPPATH\classes\controller\admin\news.php [ 74 ]
2015-05-05 10:00:37 --- STRACE: ErrorException [ 8 ]: Undefined index: new_chek ~ APPPATH\classes\controller\admin\news.php [ 74 ]
--
#0 Z:\home\site.ru\www\application\classes\controller\admin\news.php(74): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 74, Array)
#1 [internal function]: Controller_Admin_News->action_add()
#2 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_News))
#3 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-05 10:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-05 10:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-05 11:14:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\admin\news\v_news_index.php [ 12 ]
2015-05-05 11:14:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\admin\news\v_news_index.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-05 12:26:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-05 12:26:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-05 14:56:06 --- ERROR: ErrorException [ 8 ]: Use of undefined constant login - assumed 'login' ~ APPPATH\views\widgets\w_login.php [ 6 ]
2015-05-05 14:56:06 --- STRACE: ErrorException [ 8 ]: Use of undefined constant login - assumed 'login' ~ APPPATH\views\widgets\w_login.php [ 6 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_login.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\site.ru...', 6, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Login))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\index.php(11): Kohana_Request->execute()
#9 [internal function]: Controller_Index->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}