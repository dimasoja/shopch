<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-14 00:07:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\v_base.php [ 26 ]
2015-11-14 00:07:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\v_base.php [ 26 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\v_base.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 26, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 00:08:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 00:08:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 00:08:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 00:08:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 00:08:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 00:08:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 00:23:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\v_base.php [ 26 ]
2015-11-14 00:23:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\v_base.php [ 26 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\v_base.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 26, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 00:23:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\v_base.php [ 26 ]
2015-11-14 00:23:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\v_base.php [ 26 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\v_base.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 26, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 00:35:06 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\index\auth.php [ 64 ]
2015-11-14 00:35:06 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\index\auth.php [ 64 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\auth.php(64): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\shopch....', 64, Array)
#1 [internal function]: Controller_Index_Auth->action_login_admin()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 00:35:25 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:35:25 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:37:15 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:37:15 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:37:16 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:37:16 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:37:18 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:37:18 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:37:19 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:37:19 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:37:19 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:37:19 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:37:20 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:37:20 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:37:20 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:37:20 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:37:20 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:37:20 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:37:20 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:37:20 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:37:21 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:37:21 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:40:55 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:40:55 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:40:57 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:40:57 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:40:58 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:40:58 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:40:58 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:40:58 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:40:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:40:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:40:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:40:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:41:26 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:41:26 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:41:27 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:41:27 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 00:41:28 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 00:41:28 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:22:05 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\auth.php [ 63 ]
2015-11-14 01:22:05 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\auth.php [ 63 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\auth.php(63): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 63, Array)
#1 [internal function]: Controller_Index_Auth->action_login_admin()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 01:23:23 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:23:23 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:23:24 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:23:24 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:23:25 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:23:25 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:23:25 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:23:25 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:05 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:05 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:43 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:43 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:44 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:44 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:46 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:46 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:46 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:46 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:46 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:46 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:47 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:47 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:47 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:47 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:48 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:48 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:48 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:48 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:48 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:48 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:49 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:49 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:49 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:49 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:49 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:49 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:50 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:50 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:25:50 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:25:50 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:28:02 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2015-11-14 01:28:02 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-11-14 01:30:21 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-11-14 01:30:21 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 Z:\home\shopch.ru\www\application\classes\controller\base.php(13): Kohana_Controller_Template->before()
#4 Z:\home\shopch.ru\www\application\classes\controller\index.php(10): Controller_Base->before()
#5 [internal function]: Controller_Index->before()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#10 {main}
2015-11-14 01:30:22 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-11-14 01:30:22 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 Z:\home\shopch.ru\www\application\classes\controller\base.php(13): Kohana_Controller_Template->before()
#4 Z:\home\shopch.ru\www\application\classes\controller\index.php(10): Controller_Base->before()
#5 [internal function]: Controller_Index->before()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#10 {main}
2015-11-14 01:30:23 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-11-14 01:30:23 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 Z:\home\shopch.ru\www\application\classes\controller\base.php(13): Kohana_Controller_Template->before()
#4 Z:\home\shopch.ru\www\application\classes\controller\index.php(10): Controller_Base->before()
#5 [internal function]: Controller_Index->before()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#10 {main}
2015-11-14 01:30:23 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-11-14 01:30:23 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 Z:\home\shopch.ru\www\application\classes\controller\base.php(13): Kohana_Controller_Template->before()
#4 Z:\home\shopch.ru\www\application\classes\controller\index.php(10): Controller_Base->before()
#5 [internal function]: Controller_Index->before()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#10 {main}
2015-11-14 01:30:23 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-11-14 01:30:23 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 Z:\home\shopch.ru\www\application\classes\controller\base.php(13): Kohana_Controller_Template->before()
#4 Z:\home\shopch.ru\www\application\classes\controller\index.php(10): Controller_Base->before()
#5 [internal function]: Controller_Index->before()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#10 {main}
2015-11-14 01:30:35 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-11-14 01:30:35 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 Z:\home\shopch.ru\www\application\classes\controller\base.php(13): Kohana_Controller_Template->before()
#4 Z:\home\shopch.ru\www\application\classes\controller\index.php(10): Controller_Base->before()
#5 [internal function]: Controller_Index->before()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#10 {main}
2015-11-14 01:32:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 01:32:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 10:24:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:24:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:24:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 10:24:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 10:34:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:34:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:35:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:35:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:35:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:35:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL authadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL authadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL authadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 10:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL authadmin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 10:41:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index\auth\v_auth_login.php [ 2 ]
2015-11-14 10:41:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index\auth\v_auth_login.php [ 2 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 2, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:41:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index\auth\v_auth_login.php [ 2 ]
2015-11-14 10:41:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index\auth\v_auth_login.php [ 2 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 2, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:41:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index\auth\v_auth_login.php [ 2 ]
2015-11-14 10:41:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index\auth\v_auth_login.php [ 2 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 2, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:41:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index\auth\v_auth_login.php [ 2 ]
2015-11-14 10:41:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index\auth\v_auth_login.php [ 2 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 2, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:42:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index\auth\v_auth_login.php [ 2 ]
2015-11-14 10:42:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index\auth\v_auth_login.php [ 2 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 2, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:42:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
2015-11-14 10:42:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 7, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:42:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
2015-11-14 10:42:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 7, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:42:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
2015-11-14 10:42:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 7, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:42:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
2015-11-14 10:42:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 7, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:42:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
2015-11-14 10:42:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 7, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:42:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
2015-11-14 10:42:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 7, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:42:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
2015-11-14 10:42:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 7, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:42:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
2015-11-14 10:42:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 7, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:42:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
2015-11-14 10:42:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 7, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:42:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
2015-11-14 10:42:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 7, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:42:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
2015-11-14 10:42:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 7, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:45:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:45:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:45:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:45:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:45:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:45:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:45:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:45:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:45:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:45:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:46:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:46:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:46:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:46:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:46:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:46:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:46:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:46:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:46:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:46:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:46:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:46:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:48:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:48:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:48:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:48:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:48:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:48:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:48:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:48:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:48:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:48:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:48:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:48:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:48:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:48:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:48:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
2015-11-14 10:48:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\authadmin.php [ 25 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 25, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 10:48:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index\auth\v_auth_login.php [ 2 ]
2015-11-14 10:48:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index\auth\v_auth_login.php [ 2 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 2, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:48:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index\auth\v_auth_login.php [ 2 ]
2015-11-14 10:48:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\index\auth\v_auth_login.php [ 2 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 2, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 10:49:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
2015-11-14 10:49:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\v_auth_login.php [ 7 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\auth\v_auth_login.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 7, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 11:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-11-14 11:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 11:20:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-11-14 11:20:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 11:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-11-14 11:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 11:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-11-14 11:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 11:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-11-14 11:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 11:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-11-14 11:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 11:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-11-14 11:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 11:20:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-11-14 11:20:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login_admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 12:12:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
2015-11-14 12:12:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\v_base.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 76, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 12:12:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
2015-11-14 12:12:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\v_base.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 76, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 12:12:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
2015-11-14 12:12:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\v_base.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 76, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 12:12:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
2015-11-14 12:12:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\v_base.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 76, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 12:12:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
2015-11-14 12:12:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\v_base.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 76, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 12:12:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
2015-11-14 12:12:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\v_base.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 76, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 12:12:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
2015-11-14 12:12:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\v_base.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 76, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 12:12:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
2015-11-14 12:12:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\v_base.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 76, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 12:12:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
2015-11-14 12:12:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\v_base.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 76, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 12:12:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
2015-11-14 12:12:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\v_base.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 76, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 12:12:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
2015-11-14 12:12:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\v_base.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 76, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 12:12:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
2015-11-14 12:12:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\v_base.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 76, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 12:12:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
2015-11-14 12:12:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: block_top ~ APPPATH\views\index\v_base.php [ 76 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\v_base.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 76, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-11-14 12:33:11 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
2015-11-14 12:33:11 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\shopch.ru\www\system\classes\kohana\session.php(54): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(58): Kohana_Session::instance('native')
#3 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(14): Kohana_Auth::instance()
#5 [internal function]: Controller_Index_Authadmin->action_index()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#10 {main}
2015-11-14 12:34:37 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:37 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 12:34:38 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:38 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 12:34:38 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:38 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 12:34:39 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:39 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 12:34:39 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:39 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 12:34:40 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:40 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 12:34:40 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:40 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 12:34:41 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:41 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 12:34:41 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:41 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 12:34:42 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:42 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 12:34:42 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:42 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 12:34:43 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:43 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 12:34:43 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:43 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 12:34:43 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:43 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 12:34:44 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
2015-11-14 12:34:44 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\authadmin.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\authadmin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\shopch....', 15, Array)
#1 [internal function]: Controller_Index_Authadmin->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Authadmin))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-11-14 13:34:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 13:34:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-11-14 14:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-11-14 14:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 14:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 14:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 15:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 15:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 16:24:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 16:24:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 19:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 19:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:19:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:19:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:20:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:20:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-11-14 20:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-11-14 20:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}