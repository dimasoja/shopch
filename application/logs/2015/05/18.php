<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-18 09:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 09:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:00:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: ps ~ APPPATH\views\widgets\w_menu.php [ 16 ]
2015-05-18 10:00:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: ps ~ APPPATH\views\widgets\w_menu.php [ 16 ]
--
#0 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 16, Array)
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
2015-05-18 10:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog/cat/c76 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-18 10:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog/cat/c76 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-18 10:06:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:06:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:06:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: search_form ~ APPPATH\views\index\catalog\v_catalog_cat.php [ 28 ]
2015-05-18 10:06:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: search_form ~ APPPATH\views\index\catalog\v_catalog_cat.php [ 28 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\catalog\v_catalog_cat.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 28, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\index\v_base.php(49): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-18 10:06:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: search_form ~ APPPATH\views\index\catalog\v_catalog_cat.php [ 28 ]
2015-05-18 10:06:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: search_form ~ APPPATH\views\index\catalog\v_catalog_cat.php [ 28 ]
--
#0 Z:\home\shopch.ru\www\application\views\index\catalog\v_catalog_cat.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 28, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\index\v_base.php(49): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-18 10:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:07:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:07:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:07:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:07:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog/view/c73/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-18 10:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog/view/c73/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-18 10:07:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog/view/c73/101 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-18 10:07:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog/view/c73/101 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-18 10:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:07:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:12:18 --- ERROR: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-05-18 10:12:18 --- STRACE: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\catalog.php(73): Kohana_ORM->__get('comments')
#1 [internal function]: Controller_Index_Catalog->action_view()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-18 10:13:44 --- ERROR: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-05-18 10:13:44 --- STRACE: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\catalog.php(73): Kohana_ORM->__get('comments')
#1 [internal function]: Controller_Index_Catalog->action_view()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-18 10:13:45 --- ERROR: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-05-18 10:13:45 --- STRACE: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\catalog.php(73): Kohana_ORM->__get('comments')
#1 [internal function]: Controller_Index_Catalog->action_view()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-18 10:13:45 --- ERROR: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-05-18 10:13:45 --- STRACE: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\catalog.php(73): Kohana_ORM->__get('comments')
#1 [internal function]: Controller_Index_Catalog->action_view()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-18 10:13:45 --- ERROR: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-05-18 10:13:45 --- STRACE: Kohana_Exception [ 0 ]: The comments property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\index\catalog.php(73): Kohana_ORM->__get('comments')
#1 [internal function]: Controller_Index_Catalog->action_view()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-18 10:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/10rya263ftk8djwg.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:23:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/8aoyh5qknl1s0bju.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:23:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/8aoyh5qknl1s0bju.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/8aoyh5qknl1s0bju.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/8aoyh5qknl1s0bju.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/8aoyh5qknl1s0bju.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/8aoyh5qknl1s0bju.jpg ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 10:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 10:31:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 11:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 11:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 11:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 11:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 11:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/users/edit/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-18 11:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/users/edit/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-18 11:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 11:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 11:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-18 11:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-18 11:59:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\admin\categories\v_categories_index.php [ 24 ]
2015-05-18 11:59:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\admin\categories\v_categories_index.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-18 12:57:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ']' ~ APPPATH\views\admin\categories\v_categories_index.php [ 15 ]
2015-05-18 12:57:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ']' ~ APPPATH\views\admin\categories\v_categories_index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-18 14:23:07 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1204 ]
2015-05-18 14:23:07 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1204 ]
--
#0 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1230): Kohana_ORM->check(NULL)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#2 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(386): Kohana_ORM->save()
#3 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(327): Kohana_ORM_MPTT->insert(Object(Model_Category), 'lft', 0, 0)
#4 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(57): Kohana_ORM_MPTT->insert_as_prev_sibling('77')
#5 [internal function]: Controller_Admin_Categories->action_index()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#10 {main}
2015-05-18 14:23:25 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1204 ]
2015-05-18 14:23:25 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1204 ]
--
#0 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1230): Kohana_ORM->check(NULL)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#2 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(386): Kohana_ORM->save()
#3 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(327): Kohana_ORM_MPTT->insert(Object(Model_Category), 'lft', 0, 0)
#4 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(57): Kohana_ORM_MPTT->insert_as_prev_sibling('77')
#5 [internal function]: Controller_Admin_Categories->action_index()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#10 {main}
2015-05-18 14:24:30 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1204 ]
2015-05-18 14:24:30 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1204 ]
--
#0 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1230): Kohana_ORM->check(NULL)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#2 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(386): Kohana_ORM->save()
#3 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(314): Kohana_ORM_MPTT->insert(Object(Model_Category), 'rgt', 0, 1)
#4 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(57): Kohana_ORM_MPTT->insert_as_last_child('77')
#5 [internal function]: Controller_Admin_Categories->action_index()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#10 {main}
2015-05-18 14:35:28 --- ERROR: Database_Exception [ 1100 ]: Table 'category' was not locked with LOCK TABLES [ SELECT `category`.`id` AS `id`, `category`.`title` AS `title`, `category`.`parent_id` AS `parent_id`, `category`.`lft` AS `lft`, `category`.`rgt` AS `rgt`, `category`.`lvl` AS `lvl`, `category`.`scope` AS `scope` FROM `categories` AS `category` WHERE `category`.`id` = '76' ORDER BY `category`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-18 14:35:28 --- STRACE: Database_Exception [ 1100 ]: Table 'category' was not locked with LOCK TABLES [ SELECT `category`.`id` AS `id`, `category`.`title` AS `title`, `category`.`parent_id` AS `parent_id`, `category`.`lft` AS `lft`, `category`.`rgt` AS `rgt`, `category`.`lvl` AS `lvl`, `category`.`scope` AS `scope` FROM `categories` AS `category` WHERE `category`.`id` = '76' ORDER BY `category`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(447): Kohana_ORM->find()
#4 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(485): Kohana_ORM->reload()
#5 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(456): Kohana_ORM_MPTT->move(Object(Model_Category), false, 1, 0, false)
#6 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(59): Kohana_ORM_MPTT->move_to_next_sibling('76')
#7 [internal function]: Controller_Admin_Categories->action_index()
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-18 14:53:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: catsss ~ APPPATH\classes\controller\admin\categories.php [ 74 ]
2015-05-18 14:53:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: catsss ~ APPPATH\classes\controller\admin\categories.php [ 74 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 74, Array)
#1 [internal function]: Controller_Admin_Categories->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-18 14:56:48 --- ERROR: Database_Exception [ 1100 ]: Table 'category' was not locked with LOCK TABLES [ SELECT `category`.`id` AS `id`, `category`.`title` AS `title`, `category`.`parent_id` AS `parent_id`, `category`.`lft` AS `lft`, `category`.`rgt` AS `rgt`, `category`.`lvl` AS `lvl`, `category`.`scope` AS `scope` FROM `categories` AS `category` WHERE `category`.`id` = '79' ORDER BY `category`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-18 14:56:48 --- STRACE: Database_Exception [ 1100 ]: Table 'category' was not locked with LOCK TABLES [ SELECT `category`.`id` AS `id`, `category`.`title` AS `title`, `category`.`parent_id` AS `parent_id`, `category`.`lft` AS `lft`, `category`.`rgt` AS `rgt`, `category`.`lvl` AS `lvl`, `category`.`scope` AS `scope` FROM `categories` AS `category` WHERE `category`.`id` = '79' ORDER BY `category`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(447): Kohana_ORM->find()
#4 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(485): Kohana_ORM->reload()
#5 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(456): Kohana_ORM_MPTT->move(Object(Model_Category), false, 1, 0, false)
#6 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(60): Kohana_ORM_MPTT->move_to_next_sibling(Object(Model_Category))
#7 [internal function]: Controller_Admin_Categories->action_index()
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-18 14:56:53 --- ERROR: Database_Exception [ 1100 ]: Table 'category' was not locked with LOCK TABLES [ SELECT `category`.`id` AS `id`, `category`.`title` AS `title`, `category`.`parent_id` AS `parent_id`, `category`.`lft` AS `lft`, `category`.`rgt` AS `rgt`, `category`.`lvl` AS `lvl`, `category`.`scope` AS `scope` FROM `categories` AS `category` WHERE `category`.`id` = '79' ORDER BY `category`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-18 14:56:53 --- STRACE: Database_Exception [ 1100 ]: Table 'category' was not locked with LOCK TABLES [ SELECT `category`.`id` AS `id`, `category`.`title` AS `title`, `category`.`parent_id` AS `parent_id`, `category`.`lft` AS `lft`, `category`.`rgt` AS `rgt`, `category`.`lvl` AS `lvl`, `category`.`scope` AS `scope` FROM `categories` AS `category` WHERE `category`.`id` = '79' ORDER BY `category`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(447): Kohana_ORM->find()
#4 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(485): Kohana_ORM->reload()
#5 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(456): Kohana_ORM_MPTT->move(Object(Model_Category), false, 1, 0, false)
#6 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(60): Kohana_ORM_MPTT->move_to_next_sibling(Object(Model_Category))
#7 [internal function]: Controller_Admin_Categories->action_index()
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-18 14:57:26 --- ERROR: Database_Exception [ 1100 ]: Table 'category' was not locked with LOCK TABLES [ SELECT `category`.`id` AS `id`, `category`.`title` AS `title`, `category`.`parent_id` AS `parent_id`, `category`.`lft` AS `lft`, `category`.`rgt` AS `rgt`, `category`.`lvl` AS `lvl`, `category`.`scope` AS `scope` FROM `categories` AS `category` WHERE `category`.`id` = '79' ORDER BY `category`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-18 14:57:26 --- STRACE: Database_Exception [ 1100 ]: Table 'category' was not locked with LOCK TABLES [ SELECT `category`.`id` AS `id`, `category`.`title` AS `title`, `category`.`parent_id` AS `parent_id`, `category`.`lft` AS `lft`, `category`.`rgt` AS `rgt`, `category`.`lvl` AS `lvl`, `category`.`scope` AS `scope` FROM `categories` AS `category` WHERE `category`.`id` = '79' ORDER BY `category`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(447): Kohana_ORM->find()
#4 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(485): Kohana_ORM->reload()
#5 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(456): Kohana_ORM_MPTT->move(Object(Model_Category), false, 1, 0, false)
#6 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(60): Kohana_ORM_MPTT->move_to_next_sibling(Object(Model_Category))
#7 [internal function]: Controller_Admin_Categories->action_index()
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-18 14:58:11 --- ERROR: Database_Exception [ 1100 ]: Table 'category' was not locked with LOCK TABLES [ SELECT `category`.`id` AS `id`, `category`.`title` AS `title`, `category`.`parent_id` AS `parent_id`, `category`.`lft` AS `lft`, `category`.`rgt` AS `rgt`, `category`.`lvl` AS `lvl`, `category`.`scope` AS `scope` FROM `categories` AS `category` WHERE `category`.`id` = '79' ORDER BY `category`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-18 14:58:11 --- STRACE: Database_Exception [ 1100 ]: Table 'category' was not locked with LOCK TABLES [ SELECT `category`.`id` AS `id`, `category`.`title` AS `title`, `category`.`parent_id` AS `parent_id`, `category`.`lft` AS `lft`, `category`.`rgt` AS `rgt`, `category`.`lvl` AS `lvl`, `category`.`scope` AS `scope` FROM `categories` AS `category` WHERE `category`.`id` = '79' ORDER BY `category`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(447): Kohana_ORM->find()
#4 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(485): Kohana_ORM->reload()
#5 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(456): Kohana_ORM_MPTT->move(Object(Model_Category), false, 1, 0, false)
#6 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(60): Kohana_ORM_MPTT->move_to_next_sibling(Object(Model_Category))
#7 [internal function]: Controller_Admin_Categories->action_index()
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-18 14:58:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\categories.php [ 74 ]
2015-05-18 14:58:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\categories.php [ 74 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(74): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 74, Array)
#1 [internal function]: Controller_Admin_Categories->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-18 14:59:18 --- ERROR: Database_Exception [ 1100 ]: Table 'category' was not locked with LOCK TABLES [ SELECT `category`.`id` AS `id`, `category`.`title` AS `title`, `category`.`parent_id` AS `parent_id`, `category`.`lft` AS `lft`, `category`.`rgt` AS `rgt`, `category`.`lvl` AS `lvl`, `category`.`scope` AS `scope` FROM `categories` AS `category` WHERE `category`.`id` = '76' ORDER BY `category`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-18 14:59:18 --- STRACE: Database_Exception [ 1100 ]: Table 'category' was not locked with LOCK TABLES [ SELECT `category`.`id` AS `id`, `category`.`title` AS `title`, `category`.`parent_id` AS `parent_id`, `category`.`lft` AS `lft`, `category`.`rgt` AS `rgt`, `category`.`lvl` AS `lvl`, `category`.`scope` AS `scope` FROM `categories` AS `category` WHERE `category`.`id` = '76' ORDER BY `category`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(447): Kohana_ORM->find()
#4 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(485): Kohana_ORM->reload()
#5 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(456): Kohana_ORM_MPTT->move(Object(Model_Category), false, 1, 0, false)
#6 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(60): Kohana_ORM_MPTT->move_to_next_sibling(Object(Model_Category))
#7 [internal function]: Controller_Admin_Categories->action_index()
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2015-05-18 14:59:32 --- ERROR: Database_Exception [ 1100 ]: Table 'category' was not locked with LOCK TABLES [ SELECT `category`.`id` AS `id`, `category`.`title` AS `title`, `category`.`parent_id` AS `parent_id`, `category`.`lft` AS `lft`, `category`.`rgt` AS `rgt`, `category`.`lvl` AS `lvl`, `category`.`scope` AS `scope` FROM `categories` AS `category` WHERE `category`.`id` = '76' ORDER BY `category`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-18 14:59:32 --- STRACE: Database_Exception [ 1100 ]: Table 'category' was not locked with LOCK TABLES [ SELECT `category`.`id` AS `id`, `category`.`title` AS `title`, `category`.`parent_id` AS `parent_id`, `category`.`lft` AS `lft`, `category`.`rgt` AS `rgt`, `category`.`lvl` AS `lvl`, `category`.`scope` AS `scope` FROM `categories` AS `category` WHERE `category`.`id` = '76' ORDER BY `category`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1002): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(910): Kohana_ORM->_load_result(false)
#3 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(447): Kohana_ORM->find()
#4 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(485): Kohana_ORM->reload()
#5 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(456): Kohana_ORM_MPTT->move(Object(Model_Category), false, 1, 0, false)
#6 Z:\home\shopch.ru\www\application\classes\controller\admin\categories.php(60): Kohana_ORM_MPTT->move_to_next_sibling(Object(Model_Category))
#7 [internal function]: Controller_Admin_Categories->action_index()
#8 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}