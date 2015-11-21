<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-02 05:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 05:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:17:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:17:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:17:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:17:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:17:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:17:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:17:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 11:17:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 11:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 11:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 11:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 11:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 11:19:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 11:19:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 11:23:57 --- ERROR: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\controller\admin\pages.php [ 9 ]
2015-05-02 11:23:57 --- STRACE: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\controller\admin\pages.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:26 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:26 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:27 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:27 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:27 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:27 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:27 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:27 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:27 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:27 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:28 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:28 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:28 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:28 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:28 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:28 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:29 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:29 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:29 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:29 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:29 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:29 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:29 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:29 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:30 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:30 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:30 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:30 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:30 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:30 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:30 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:30 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:31 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:31 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:24:31 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
2015-05-02 11:24:31 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menupages.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:25:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-02 11:25:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 11:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-02 11:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 11:28:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-02 11:28:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 11:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 11:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 11:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 11:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 11:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/news/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-02 11:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/news/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 11:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/news/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-02 11:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/news/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 11:38:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/products was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 11:38:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/products was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 11:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:42:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: products ~ APPPATH\views\admin\products\v_products_index.php [ 8 ]
2015-05-02 11:42:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: products ~ APPPATH\views\admin\products\v_products_index.php [ 8 ]
--
#0 Z:\home\site.ru\www\application\views\admin\products\v_products_index.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 8, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\admin\v_base.php(27): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-02 11:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/edit.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/edit.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/add.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/add.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/edit.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/edit.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/delete.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/delete.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-02 11:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 11:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:53:26 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_New as array ~ APPPATH\views\admin\news\v_news_index.php [ 2 ]
2015-05-02 11:53:26 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_New as array ~ APPPATH\views\admin\news\v_news_index.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:53:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:53:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:53:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:53:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/see.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/see.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/see.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/see.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 11:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 11:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:56:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 11:56:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:57:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 11:57:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:59:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 11:59:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 11:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 11:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 11:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/products was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 12:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/products was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 12:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/edit/admin/pages ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/edit/admin/pages ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 12:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 12:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:06:55 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menuorders.php [ 5 ]
2015-05-02 12:06:55 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\menuorders.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:07:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:07:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:07:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:07:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 12:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 12:16:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 12:16:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 12:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 12:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 12:17:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:17:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:17:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:17:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:17:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:17:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:17:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:17:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:17:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 12:17:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 12:17:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 12:17:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/orders was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 12:17:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/products was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 12:17:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/products was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 12:19:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:19:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:19:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:19:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:19:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:19:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:19:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:19:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:01 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:01 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:22:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:22:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:24:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:24:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:24:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:24:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:24:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:24:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:24:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:24:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:24:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:24:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:24:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:24:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:24:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:24:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:24:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:24:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:24:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:24:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:24:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:24:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:26:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:26:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:26:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:26:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:26:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:26:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:26:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:26:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:26:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:26:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:26:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:26:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:26:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:26:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:26:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:26:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:26:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:26:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:26:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:26:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:26:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:26:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:28:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:28:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:28:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:28:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:28:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:28:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 12:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 12:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:30:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:30:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:30:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:30:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:30:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:30:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:39:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2015-05-02 12:39:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:43:28 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_New as array ~ APPPATH\views\widgets\w_news.php [ 9 ]
2015-05-02 12:43:28 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_New as array ~ APPPATH\views\widgets\w_news.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 12:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:44:59 --- ERROR: View_Exception [ 0 ]: The requested view index/news/v_news_get could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-02 12:44:59 --- STRACE: View_Exception [ 0 ]: The requested view index/news/v_news_get could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index/news/v_ne...')
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index/news/v_ne...', Array)
#2 Z:\home\site.ru\www\application\classes\controller\index\news.php(38): Kohana_View::factory('index/news/v_ne...', Array)
#3 [internal function]: Controller_Index_News->action_get()
#4 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_News))
#5 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-02 12:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:48:19 --- ERROR: View_Exception [ 0 ]: The requested view index/news/v_news_get could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-02 12:48:19 --- STRACE: View_Exception [ 0 ]: The requested view index/news/v_news_get could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index/news/v_ne...')
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index/news/v_ne...', Array)
#2 Z:\home\site.ru\www\application\classes\controller\index\news.php(38): Kohana_View::factory('index/news/v_ne...', Array)
#3 [internal function]: Controller_Index_News->action_get()
#4 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_News))
#5 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-02 12:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:55:06 --- ERROR: View_Exception [ 0 ]: The requested view index/news/v_news_get could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-02 12:55:06 --- STRACE: View_Exception [ 0 ]: The requested view index/news/v_news_get could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index/news/v_ne...')
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index/news/v_ne...', Array)
#2 Z:\home\site.ru\www\application\classes\controller\index\news.php(38): Kohana_View::factory('index/news/v_ne...', Array)
#3 [internal function]: Controller_Index_News->action_get()
#4 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_News))
#5 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-02 12:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 12:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 12:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 13:13:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 13:13:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 13:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/home.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 13:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/home.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 13:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/home.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 13:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/home.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 13:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/home.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 13:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/home.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 13:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/home.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 13:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/home.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 13:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/home.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 13:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/home.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 13:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/home.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 13:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/home.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 13:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/home.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-02 13:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/home.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-02 13:27:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
2015-05-02 13:27:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_menuadmin.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 3, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\admin.php(11): Kohana_Request->execute()
#9 Z:\home\site.ru\www\application\classes\controller\admin\orders.php(8): Controller_Admin->before()
#10 [internal function]: Controller_Admin_Orders->before()
#11 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#12 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-05-02 13:27:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
2015-05-02 13:27:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_menuadmin.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 3, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\admin.php(11): Kohana_Request->execute()
#9 Z:\home\site.ru\www\application\classes\controller\admin\orders.php(8): Controller_Admin->before()
#10 [internal function]: Controller_Admin_Orders->before()
#11 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#12 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-05-02 13:27:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
2015-05-02 13:27:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_menuadmin.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 3, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\admin.php(11): Kohana_Request->execute()
#9 Z:\home\site.ru\www\application\classes\controller\admin\orders.php(8): Controller_Admin->before()
#10 [internal function]: Controller_Admin_Orders->before()
#11 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#12 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-05-02 13:27:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
2015-05-02 13:27:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_menuadmin.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 3, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\admin.php(11): Kohana_Request->execute()
#9 Z:\home\site.ru\www\application\classes\controller\admin\orders.php(8): Controller_Admin->before()
#10 [internal function]: Controller_Admin_Orders->before()
#11 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#12 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-05-02 13:27:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
2015-05-02 13:27:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_menuadmin.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 3, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\admin.php(11): Kohana_Request->execute()
#9 Z:\home\site.ru\www\application\classes\controller\admin\orders.php(8): Controller_Admin->before()
#10 [internal function]: Controller_Admin_Orders->before()
#11 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#12 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-05-02 13:27:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
2015-05-02 13:27:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_menuadmin.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 3, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\admin.php(11): Kohana_Request->execute()
#9 Z:\home\site.ru\www\application\classes\controller\admin\orders.php(8): Controller_Admin->before()
#10 [internal function]: Controller_Admin_Orders->before()
#11 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#12 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-05-02 13:27:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
2015-05-02 13:27:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_menuadmin.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 3, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\admin.php(11): Kohana_Request->execute()
#9 Z:\home\site.ru\www\application\classes\controller\admin\orders.php(8): Controller_Admin->before()
#10 [internal function]: Controller_Admin_Orders->before()
#11 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#12 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-05-02 13:27:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
2015-05-02 13:27:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_menuadmin.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 3, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\admin.php(11): Kohana_Request->execute()
#9 Z:\home\site.ru\www\application\classes\controller\admin\orders.php(8): Controller_Admin->before()
#10 [internal function]: Controller_Admin_Orders->before()
#11 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#12 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-05-02 13:27:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
2015-05-02 13:27:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_menuadmin.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 3, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\admin.php(11): Kohana_Request->execute()
#9 Z:\home\site.ru\www\application\classes\controller\admin\orders.php(8): Controller_Admin->before()
#10 [internal function]: Controller_Admin_Orders->before()
#11 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#12 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-05-02 13:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-02 13:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-02 13:55:03 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\index\auth.php [ 12 ]
2015-05-02 13:55:03 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\index\auth.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 13:57:08 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
2015-05-02 13:57:08 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 13:57:09 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
2015-05-02 13:57:09 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 13:57:09 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
2015-05-02 13:57:09 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 13:57:09 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
2015-05-02 13:57:09 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 13:57:09 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
2015-05-02 13:57:09 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 13:57:10 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
2015-05-02 13:57:10 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 13:57:10 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
2015-05-02 13:57:10 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 13:57:10 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
2015-05-02 13:57:10 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 13:57:10 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
2015-05-02 13:57:10 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 13:57:11 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
2015-05-02 13:57:11 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 13:57:11 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
2015-05-02 13:57:11 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 13:57:11 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
2015-05-02 13:57:11 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Widgets' not found ~ APPPATH\classes\controller\widgets\login.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-02 13:58:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Index_Account::$auth ~ APPPATH\classes\controller\index\account.php [ 9 ]
2015-05-02 13:58:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Index_Account::$auth ~ APPPATH\classes\controller\index\account.php [ 9 ]
--
#0 Z:\home\site.ru\www\application\classes\controller\index\account.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\site.ru...', 9, Array)
#1 [internal function]: Controller_Index_Account->before()
#2 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Account))
#3 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-02 14:02:54 --- ERROR: View_Exception [ 0 ]: The requested view index/auth/v_auth_register could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-02 14:02:54 --- STRACE: View_Exception [ 0 ]: The requested view index/auth/v_auth_register could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index/auth/v_au...')
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index/auth/v_au...', NULL)
#2 Z:\home\site.ru\www\application\classes\controller\index\auth.php(62): Kohana_View::factory('index/auth/v_au...')
#3 [internal function]: Controller_Index_Auth->action_register()
#4 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#5 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-02 14:04:53 --- ERROR: View_Exception [ 0 ]: The requested view index/auth/v_auth_register could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-02 14:04:53 --- STRACE: View_Exception [ 0 ]: The requested view index/auth/v_auth_register could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index/auth/v_au...')
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index/auth/v_au...', NULL)
#2 Z:\home\site.ru\www\application\classes\controller\index\auth.php(62): Kohana_View::factory('index/auth/v_au...')
#3 [internal function]: Controller_Index_Auth->action_register()
#4 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#5 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-02 14:05:00 --- ERROR: View_Exception [ 0 ]: The requested view index/auth/v_auth_register could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-02 14:05:00 --- STRACE: View_Exception [ 0 ]: The requested view index/auth/v_auth_register could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index/auth/v_au...')
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index/auth/v_au...', NULL)
#2 Z:\home\site.ru\www\application\classes\controller\index\auth.php(62): Kohana_View::factory('index/auth/v_au...')
#3 [internal function]: Controller_Index_Auth->action_register()
#4 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#5 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-02 14:06:56 --- ERROR: Kohana_Exception [ 0 ]: The first_name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 692 ]
2015-05-02 14:06:56 --- STRACE: Kohana_Exception [ 0 ]: The first_name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 692 ]
--
#0 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(643): Kohana_ORM->set('first_name', '??????')
#1 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(736): Kohana_ORM->__set('first_name', '??????')
#2 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->values(Array, Array)
#3 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-05-02 14:07:11 --- ERROR: Kohana_Exception [ 0 ]: The first_name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 692 ]
2015-05-02 14:07:11 --- STRACE: Kohana_Exception [ 0 ]: The first_name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 692 ]
--
#0 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(643): Kohana_ORM->set('first_name', '??????')
#1 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(736): Kohana_ORM->__set('first_name', '??????')
#2 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->values(Array, Array)
#3 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-05-02 14:07:17 --- ERROR: Kohana_Exception [ 0 ]: The first_name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 692 ]
2015-05-02 14:07:17 --- STRACE: Kohana_Exception [ 0 ]: The first_name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 692 ]
--
#0 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(643): Kohana_ORM->set('first_name', '??????')
#1 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(736): Kohana_ORM->__set('first_name', '??????')
#2 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->values(Array, Array)
#3 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-05-02 14:08:22 --- ERROR: Kohana_Exception [ 0 ]: The first_name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 692 ]
2015-05-02 14:08:22 --- STRACE: Kohana_Exception [ 0 ]: The first_name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 692 ]
--
#0 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(643): Kohana_ORM->set('first_name', '??????')
#1 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(736): Kohana_ORM->__set('first_name', '??????')
#2 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->values(Array, Array)
#3 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-05-02 14:08:44 --- ERROR: Kohana_Exception [ 0 ]: The first_name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 692 ]
2015-05-02 14:08:44 --- STRACE: Kohana_Exception [ 0 ]: The first_name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 692 ]
--
#0 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(643): Kohana_ORM->set('first_name', '??????')
#1 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(736): Kohana_ORM->__set('first_name', '??????')
#2 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->values(Array, Array)
#3 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-05-02 14:08:49 --- ERROR: Kohana_Exception [ 0 ]: The first_name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 692 ]
2015-05-02 14:08:49 --- STRACE: Kohana_Exception [ 0 ]: The first_name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 692 ]
--
#0 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(643): Kohana_ORM->set('first_name', '??????')
#1 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(736): Kohana_ORM->__set('first_name', '??????')
#2 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->values(Array, Array)
#3 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-05-02 14:13:33 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 155 ]
2015-05-02 14:13:33 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 155 ]
--
#0 [internal function]: Kohana_Auth->hash('ddd')
#1 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1140): call_user_func_array(Array, Array)
#2 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(664): Kohana_ORM->run_filter('password', 'ddd')
#3 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(643): Kohana_ORM->set('password', 'ddd')
#4 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(736): Kohana_ORM->__set('password', 'ddd')
#5 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->values(Array, Array)
#6 Z:\home\site.ru\www\application\classes\controller\index\auth.php(49): Model_Auth_User->create_user(Array, Array)
#7 [internal function]: Controller_Index_Auth->action_register()
#8 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-02 14:14:35 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-02 14:14:35 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'Z:\home\site.ru...', 377, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\validation.php(377): call_user_func_array(Array, Array)
#2 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1202): Kohana_Validation->check()
#3 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1230): Kohana_ORM->check(Object(Validation))
#4 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#5 Z:\home\site.ru\www\application\classes\controller\index\auth.php(49): Model_Auth_User->create_user(Array, Array)
#6 [internal function]: Controller_Index_Auth->action_register()
#7 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-02 14:15:09 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-02 14:15:09 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'Z:\home\site.ru...', 377, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\validation.php(377): call_user_func_array(Array, Array)
#2 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1202): Kohana_Validation->check()
#3 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1230): Kohana_ORM->check(Object(Validation))
#4 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#5 Z:\home\site.ru\www\application\classes\controller\index\auth.php(49): Model_Auth_User->create_user(Array, Array)
#6 [internal function]: Controller_Index_Auth->action_register()
#7 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-02 14:23:52 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-02 14:23:52 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'Z:\home\site.ru...', 377, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\validation.php(377): call_user_func_array(Array, Array)
#2 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1202): Kohana_Validation->check()
#3 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1230): Kohana_ORM->check(Object(Validation))
#4 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#5 Z:\home\site.ru\www\application\classes\controller\index\auth.php(49): Model_Auth_User->create_user(Array, Array)
#6 [internal function]: Controller_Index_Auth->action_register()
#7 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-02 14:26:39 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-02 14:26:39 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'Z:\home\site.ru...', 377, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\validation.php(377): call_user_func_array(Array, Array)
#2 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1202): Kohana_Validation->check()
#3 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1230): Kohana_ORM->check(Object(Validation))
#4 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#5 Z:\home\site.ru\www\application\classes\controller\index\auth.php(49): Model_Auth_User->create_user(Array, Array)
#6 [internal function]: Controller_Index_Auth->action_register()
#7 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-02 14:35:04 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-02 14:35:04 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'Z:\home\site.ru...', 377, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\validation.php(377): call_user_func_array(Array, Array)
#2 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1202): Kohana_Validation->check()
#3 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1230): Kohana_ORM->check(Object(Validation))
#4 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#5 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#6 [internal function]: Controller_Index_Auth->action_register()
#7 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-02 14:43:25 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-02 14:43:25 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'Z:\home\site.ru...', 377, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\validation.php(377): call_user_func_array(Array, Array)
#2 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1202): Kohana_Validation->check()
#3 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1230): Kohana_ORM->check(Object(Validation))
#4 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#5 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#6 [internal function]: Controller_Index_Auth->action_register()
#7 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-02 14:48:50 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-02 14:48:50 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'Z:\home\site.ru...', 377, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\validation.php(377): call_user_func_array(Array, Array)
#2 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1202): Kohana_Validation->check()
#3 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1230): Kohana_ORM->check(Object(Validation))
#4 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#5 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#6 [internal function]: Controller_Index_Auth->action_register()
#7 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-02 14:49:10 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-02 14:49:10 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'Z:\home\site.ru...', 377, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\validation.php(377): call_user_func_array(Array, Array)
#2 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1202): Kohana_Validation->check()
#3 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1230): Kohana_ORM->check(Object(Validation))
#4 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#5 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#6 [internal function]: Controller_Index_Auth->action_register()
#7 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-05-02 15:02:29 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-02 15:02:29 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'Z:\home\site.ru...', 377, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\validation.php(377): call_user_func_array(Array, Array)
#2 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1202): Kohana_Validation->check()
#3 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1230): Kohana_ORM->check(Object(Validation))
#4 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#5 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#6 [internal function]: Controller_Index_Auth->action_register()
#7 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}