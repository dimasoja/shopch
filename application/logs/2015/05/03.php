<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-03 06:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-03 06:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-03 06:21:10 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 06:21:10 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 06:21:59 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 06:21:59 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 06:25:06 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 06:25:06 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 06:29:17 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1204 ]
2015-05-03 06:29:17 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1204 ]
--
#0 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1230): Kohana_ORM->check(Object(Validation))
#1 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#2 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#3 [internal function]: Controller_Index_Auth->action_register()
#4 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#5 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-03 06:31:21 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 06:31:21 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 06:31:59 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 06:31:59 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 06:35:50 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 06:35:50 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 06:36:03 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 06:36:03 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 06:38:22 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 06:38:22 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 06:38:46 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 06:38:46 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 06:39:20 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 06:39:20 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 06:39:39 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 06:39:39 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 06:43:58 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 06:43:58 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 06:49:12 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 06:49:12 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 06:59:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Index_Account::$auth ~ APPPATH\classes\controller\index\account.php [ 9 ]
2015-05-03 06:59:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Index_Account::$auth ~ APPPATH\classes\controller\index\account.php [ 9 ]
--
#0 Z:\home\site.ru\www\application\classes\controller\index\account.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\site.ru...', 9, Array)
#1 [internal function]: Controller_Index_Account->before()
#2 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Account))
#3 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-03 07:01:05 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'admin' for key 'uniq_username' [ INSERT INTO `users` (`username`, `first_name`, `password`, `email`) VALUES ('admin', 'sdf sdf ', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 'dimasoja@ukr.net') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-03 07:01:05 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'admin' for key 'uniq_username' [ INSERT INTO `users` (`username`, `first_name`, `password`, `email`) VALUES ('admin', 'sdf sdf ', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 'dimasoja@ukr.net') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\site.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-05-03 07:02:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Index_Account::$auth ~ APPPATH\classes\controller\index\account.php [ 9 ]
2015-05-03 07:02:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Index_Account::$auth ~ APPPATH\classes\controller\index\account.php [ 9 ]
--
#0 Z:\home\site.ru\www\application\classes\controller\index\account.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\site.ru...', 9, Array)
#1 [internal function]: Controller_Index_Account->before()
#2 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Account))
#3 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-03 07:02:24 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'dimasoja@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`username`, `first_name`, `password`, `email`) VALUES ('admk', 'sdf sdf ', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 'dimasoja@gmail.com') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-03 07:02:24 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'dimasoja@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`username`, `first_name`, `password`, `email`) VALUES ('admk', 'sdf sdf ', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 'dimasoja@gmail.com') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\site.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-05-03 07:13:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Index_Account::$auth ~ APPPATH\classes\controller\index\account.php [ 10 ]
2015-05-03 07:13:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Index_Account::$auth ~ APPPATH\classes\controller\index\account.php [ 10 ]
--
#0 Z:\home\site.ru\www\application\classes\controller\index\account.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\site.ru...', 10, Array)
#1 [internal function]: Controller_Index_Account->before()
#2 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Account))
#3 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-03 07:23:54 --- ERROR: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\controller\index\account.php [ 15 ]
2015-05-03 07:23:54 --- STRACE: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\controller\index\account.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-03 07:27:49 --- ERROR: View_Exception [ 0 ]: The requested view index/account/v_account_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-03 07:27:49 --- STRACE: View_Exception [ 0 ]: The requested view index/account/v_account_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index/account/v...')
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index/account/v...', NULL)
#2 Z:\home\site.ru\www\application\classes\controller\index\account.php(24): Kohana_View::factory('index/account/v...')
#3 [internal function]: Controller_Index_Account->action_index()
#4 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Account))
#5 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-03 07:27:51 --- ERROR: View_Exception [ 0 ]: The requested view index/account/v_account_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-03 07:27:51 --- STRACE: View_Exception [ 0 ]: The requested view index/account/v_account_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index/account/v...')
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index/account/v...', NULL)
#2 Z:\home\site.ru\www\application\classes\controller\index\account.php(24): Kohana_View::factory('index/account/v...')
#3 [internal function]: Controller_Index_Account->action_index()
#4 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Account))
#5 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-03 07:27:51 --- ERROR: View_Exception [ 0 ]: The requested view index/account/v_account_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-03 07:27:51 --- STRACE: View_Exception [ 0 ]: The requested view index/account/v_account_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index/account/v...')
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index/account/v...', NULL)
#2 Z:\home\site.ru\www\application\classes\controller\index\account.php(24): Kohana_View::factory('index/account/v...')
#3 [internal function]: Controller_Index_Account->action_index()
#4 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Account))
#5 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-03 07:27:52 --- ERROR: View_Exception [ 0 ]: The requested view index/account/v_account_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-05-03 07:27:52 --- STRACE: View_Exception [ 0 ]: The requested view index/account/v_account_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index/account/v...')
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index/account/v...', NULL)
#2 Z:\home\site.ru\www\application\classes\controller\index\account.php(24): Kohana_View::factory('index/account/v...')
#3 [internal function]: Controller_Index_Account->action_index()
#4 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Account))
#5 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-03 07:29:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ]
2015-05-03 07:29:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ]
--
#0 Z:\home\site.ru\www\application\views\index\account\v_account_profile.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\site.ru...', 12, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\index\v_base.php(60): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Account))
#10 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-03 07:29:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ]
2015-05-03 07:29:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ]
--
#0 Z:\home\site.ru\www\application\views\index\account\v_account_profile.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\site.ru...', 12, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\index\v_base.php(60): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Account))
#10 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-03 08:53:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ]
2015-05-03 08:53:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ]
--
#0 Z:\home\site.ru\www\application\views\index\account\v_account_profile.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\site.ru...', 12, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\index\v_base.php(60): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Account))
#10 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-03 08:53:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ]
2015-05-03 08:53:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\account\v_account_profile.php [ 12 ]
--
#0 Z:\home\site.ru\www\application\views\index\account\v_account_profile.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\site.ru...', 12, Array)
#1 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\index\v_base.php(60): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\kohana\view.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Account))
#10 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-03 13:41:57 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'dimasoja@ukr.net' for key 'uniq_email' [ INSERT INTO `users` (`username`, `first_name`, `password`, `email`) VALUES ('asdd', 'asd', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 'dimasoja@ukr.net') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-03 13:41:57 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'dimasoja@ukr.net' for key 'uniq_email' [ INSERT INTO `users` (`username`, `first_name`, `password`, `email`) VALUES ('asdd', 'asd', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 'dimasoja@ukr.net') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\site.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-05-03 13:52:47 --- ERROR: ErrorException [ 8 ]: Undefined index: admin ~ MODPATH\orm\classes\kohana\orm.php [ 1437 ]
2015-05-03 13:52:47 --- STRACE: ErrorException [ 8 ]: Undefined index: admin ~ MODPATH\orm\classes\kohana\orm.php [ 1437 ]
--
#0 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1437): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 1437, Array)
#1 Z:\home\site.ru\www\application\classes\controller\index\auth.php(54): Kohana_ORM->add('admin', Object(Model_Role))
#2 [internal function]: Controller_Index_Auth->action_register()
#3 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#4 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-05-03 13:53:24 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'dima' for key 'uniq_username' [ INSERT INTO `users` (`username`, `first_name`, `password`, `email`) VALUES ('dima', 'dima', '0ba6a7f733594d4dad0b7a1b7f09b6b6687e89760b8adf84124fc6c3882ec581', 'dm3s@mail.ru') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-03 13:53:24 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'dima' for key 'uniq_username' [ INSERT INTO `users` (`username`, `first_name`, `password`, `email`) VALUES ('dima', 'dima', '0ba6a7f733594d4dad0b7a1b7f09b6b6687e89760b8adf84124fc6c3882ec581', 'dm3s@mail.ru') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\site.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-05-03 13:55:15 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'dimasoja@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`username`, `first_name`, `password`, `email`) VALUES ('dimas', 'dimas', 'f9f6b45dcd29a01dc124dc0141c295df7aa9ee44370309b338c27ae7ceec6b8b', 'dimasoja@gmail.com') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-03 13:55:15 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'dimasoja@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`username`, `first_name`, `password`, `email`) VALUES ('dimas', 'dimas', 'f9f6b45dcd29a01dc124dc0141c295df7aa9ee44370309b338c27ae7ceec6b8b', 'dimasoja@gmail.com') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\site.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\site.ru\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\site.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 Z:\home\site.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 Z:\home\site.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-05-03 14:08:02 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 14:08:02 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 14:10:22 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
2015-05-03 14:10:22 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 377 ]
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
2015-05-03 14:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/users/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-03 14:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/users/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-03 14:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-03 14:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\site.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\site.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\site.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}