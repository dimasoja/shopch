<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-09 06:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-09 06:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-09 06:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-09 06:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-09 06:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-09 06:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-09 06:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-09 06:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery-1.2.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-09 06:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-09 06:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/menu.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-09 06:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-09 06:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-09 14:37:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\widgets\w_menuadmin.php [ 5 ]
2015-05-09 14:37:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\widgets\w_menuadmin.php [ 5 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_menuadmin.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\site.ru...', 5, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\admin.php(15): Kohana_Request->execute()
#9 [internal function]: Controller_Admin->before()
#10 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#11 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-05-09 14:37:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\widgets\w_menuadmin.php [ 7 ]
2015-05-09 14:37:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\widgets\w_menuadmin.php [ 7 ]
--
#0 Z:\home\site.ru\www\application\views\widgets\w_menuadmin.php(7): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\site.ru...', 7, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\application\classes\controller\admin.php(15): Kohana_Request->execute()
#9 Z:\home\site.ru\www\application\classes\controller\admin\orders.php(8): Controller_Admin->before()
#10 [internal function]: Controller_Admin_Orders->before()
#11 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#12 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-05-09 15:37:15 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
2015-05-09 15:37:15 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
--
#0 Z:\home\site.ru\www\application\messages\validation.php(29): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\site.ru...', 29, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\core.php(800): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\core.php(931): Kohana_Core::load('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\kohana\validation.php(583): Kohana_Core::message('validation', 'min_length')
#4 Z:\home\site.ru\www\modules\orm\classes\kohana\orm\validation\exception.php(172): Kohana_Validation->errors('auth/user', true)
#5 Z:\home\site.ru\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'auth', true)
#6 Z:\home\site.ru\www\application\classes\controller\index\auth.php(60): Kohana_ORM_Validation_Exception->errors('auth')
#7 [internal function]: Controller_Index_Auth->action_register()
#8 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-09 15:39:22 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
2015-05-09 15:39:22 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
--
#0 Z:\home\site.ru\www\application\messages\validation.php(29): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\site.ru...', 29, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\core.php(800): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\core.php(931): Kohana_Core::load('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\kohana\validation.php(583): Kohana_Core::message('validation', 'email')
#4 Z:\home\site.ru\www\modules\orm\classes\kohana\orm\validation\exception.php(172): Kohana_Validation->errors('auth/user', true)
#5 Z:\home\site.ru\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'auth', true)
#6 Z:\home\site.ru\www\application\classes\controller\index\auth.php(60): Kohana_ORM_Validation_Exception->errors('auth')
#7 [internal function]: Controller_Index_Auth->action_register()
#8 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-09 15:40:53 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
2015-05-09 15:40:53 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
--
#0 Z:\home\site.ru\www\application\messages\validation.php(29): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\site.ru...', 29, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\core.php(800): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\core.php(931): Kohana_Core::load('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\kohana\validation.php(583): Kohana_Core::message('validation', 'email')
#4 Z:\home\site.ru\www\modules\orm\classes\kohana\orm\validation\exception.php(172): Kohana_Validation->errors('auth/user', true)
#5 Z:\home\site.ru\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'auth', true)
#6 Z:\home\site.ru\www\application\classes\controller\index\auth.php(60): Kohana_ORM_Validation_Exception->errors('auth')
#7 [internal function]: Controller_Index_Auth->action_register()
#8 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-09 15:41:01 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
2015-05-09 15:41:01 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
--
#0 Z:\home\site.ru\www\application\messages\validation.php(29): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\site.ru...', 29, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\core.php(800): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\core.php(931): Kohana_Core::load('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\kohana\validation.php(583): Kohana_Core::message('validation', 'not_empty')
#4 Z:\home\site.ru\www\modules\orm\classes\kohana\orm\validation\exception.php(172): Kohana_Validation->errors('auth/user', true)
#5 Z:\home\site.ru\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'auth', true)
#6 Z:\home\site.ru\www\application\classes\controller\index\auth.php(60): Kohana_ORM_Validation_Exception->errors('auth')
#7 [internal function]: Controller_Index_Auth->action_register()
#8 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-09 15:41:16 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
2015-05-09 15:41:16 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
--
#0 Z:\home\site.ru\www\application\messages\validation.php(29): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\site.ru...', 29, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\core.php(800): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\core.php(931): Kohana_Core::load('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\kohana\validation.php(583): Kohana_Core::message('validation', 'not_empty')
#4 Z:\home\site.ru\www\modules\orm\classes\kohana\orm\validation\exception.php(172): Kohana_Validation->errors('auth/user', true)
#5 Z:\home\site.ru\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'auth', true)
#6 Z:\home\site.ru\www\application\classes\controller\index\auth.php(60): Kohana_ORM_Validation_Exception->errors('auth')
#7 [internal function]: Controller_Index_Auth->action_register()
#8 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-09 15:41:20 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
2015-05-09 15:41:20 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
--
#0 Z:\home\site.ru\www\application\messages\validation.php(29): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\site.ru...', 29, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\core.php(800): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\core.php(931): Kohana_Core::load('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\kohana\validation.php(583): Kohana_Core::message('validation', 'not_empty')
#4 Z:\home\site.ru\www\modules\orm\classes\kohana\orm\validation\exception.php(172): Kohana_Validation->errors('auth/user', true)
#5 Z:\home\site.ru\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'auth', true)
#6 Z:\home\site.ru\www\application\classes\controller\index\auth.php(60): Kohana_ORM_Validation_Exception->errors('auth')
#7 [internal function]: Controller_Index_Auth->action_register()
#8 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-09 15:41:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
2015-05-09 15:41:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
--
#0 Z:\home\site.ru\www\application\messages\validation.php(29): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\site.ru...', 29, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\core.php(800): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\core.php(931): Kohana_Core::load('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\kohana\validation.php(583): Kohana_Core::message('validation', 'not_empty')
#4 Z:\home\site.ru\www\modules\orm\classes\kohana\orm\validation\exception.php(172): Kohana_Validation->errors('auth/user', true)
#5 Z:\home\site.ru\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'auth', true)
#6 Z:\home\site.ru\www\application\classes\controller\index\auth.php(60): Kohana_ORM_Validation_Exception->errors('auth')
#7 [internal function]: Controller_Index_Auth->action_register()
#8 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}