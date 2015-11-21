<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-04 10:06:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-06-04 10:06:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-06-04 10:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-06-04 10:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-06-04 10:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cart was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-06-04 10:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cart was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-06-04 10:55:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\index\cart.php [ 28 ]
2015-06-04 10:55:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\index\cart.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-06-04 13:11:58 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
2015-06-04 13:11:58 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\shopch.ru\www\system\classes\kohana\session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(58): Kohana_Session::instance('native')
#3 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\shopch.ru\www\application\classes\controller\base.php(16): Kohana_Auth::instance()
#5 Z:\home\shopch.ru\www\application\classes\controller\index\catalog.php(8): Controller_Base->before()
#6 [internal function]: Controller_Index_Catalog->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-06-04 13:12:23 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
2015-06-04 13:12:23 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\shopch.ru\www\system\classes\kohana\session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(58): Kohana_Session::instance('native')
#3 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\shopch.ru\www\application\classes\controller\base.php(16): Kohana_Auth::instance()
#5 Z:\home\shopch.ru\www\application\classes\controller\index\catalog.php(8): Controller_Base->before()
#6 [internal function]: Controller_Index_Catalog->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-06-04 13:12:24 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
2015-06-04 13:12:24 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\shopch.ru\www\system\classes\kohana\session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(58): Kohana_Session::instance('native')
#3 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\shopch.ru\www\application\classes\controller\base.php(16): Kohana_Auth::instance()
#5 Z:\home\shopch.ru\www\application\classes\controller\index\catalog.php(8): Controller_Base->before()
#6 [internal function]: Controller_Index_Catalog->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-06-04 13:12:30 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
2015-06-04 13:12:30 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\shopch.ru\www\system\classes\kohana\session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(58): Kohana_Session::instance('native')
#3 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\shopch.ru\www\application\classes\controller\base.php(16): Kohana_Auth::instance()
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(10): Controller_Base->before()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-06-04 13:15:08 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
2015-06-04 13:15:08 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\shopch.ru\www\system\classes\kohana\session.php(54): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(58): Kohana_Session::instance('native')
#3 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\shopch.ru\www\application\classes\controller\base.php(16): Kohana_Auth::instance()
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(10): Controller_Base->before()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-06-04 13:15:10 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
2015-06-04 13:15:10 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\shopch.ru\www\system\classes\kohana\session.php(54): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(58): Kohana_Session::instance('native')
#3 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\shopch.ru\www\application\classes\controller\base.php(16): Kohana_Auth::instance()
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(10): Controller_Base->before()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-06-04 13:15:12 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
2015-06-04 13:15:12 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\shopch.ru\www\system\classes\kohana\session.php(54): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(58): Kohana_Session::instance('native')
#3 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\shopch.ru\www\application\classes\controller\base.php(16): Kohana_Auth::instance()
#5 Z:\home\shopch.ru\www\application\classes\controller\index.php(10): Controller_Base->before()
#6 [internal function]: Controller_Index->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-06-04 13:15:16 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
2015-06-04 13:15:16 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\shopch.ru\www\system\classes\kohana\session.php(54): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(58): Kohana_Session::instance('native')
#3 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\shopch.ru\www\application\classes\controller\base.php(16): Kohana_Auth::instance()
#5 Z:\home\shopch.ru\www\application\classes\controller\index\catalog.php(8): Controller_Base->before()
#6 [internal function]: Controller_Index_Catalog->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-06-04 13:15:23 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
2015-06-04 13:15:23 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 325 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\shopch.ru\www\system\classes\kohana\session.php(54): Kohana_Session->__construct(Array, NULL)
#2 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(58): Kohana_Session::instance('native')
#3 Z:\home\shopch.ru\www\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\shopch.ru\www\application\classes\controller\base.php(16): Kohana_Auth::instance()
#5 Z:\home\shopch.ru\www\application\classes\controller\index\catalog.php(8): Controller_Base->before()
#6 [internal function]: Controller_Index_Catalog->before()
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#11 {main}
2015-06-04 14:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-06-04 14:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-06-04 14:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-06-04 14:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-06-04 14:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-06-04 14:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-06-04 14:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-06-04 14:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-06-04 14:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-06-04 14:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-06-04 14:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-06-04 14:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-06-04 15:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-06-04 15:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-06-04 15:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-06-04 15:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}