<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-06 11:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-06 11:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-06 11:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-06 11:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-06 11:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-06 11:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-06 14:55:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ' was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-06 14:55:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ' was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-06 14:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-06 14:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-06 15:01:15 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
2015-05-06 15:01:15 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
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
2015-05-06 15:01:30 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
2015-05-06 15:01:30 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ыыы - assumed 'ыыы' ~ APPPATH\messages\validation.php [ 29 ]
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