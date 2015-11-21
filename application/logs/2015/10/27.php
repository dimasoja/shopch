<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-27 20:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 20:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:22:53 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Database_Query as array ~ APPPATH\views\admin\products\v_products_index.php [ 36 ]
2015-10-27 21:22:53 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Database_Query as array ~ APPPATH\views\admin\products\v_products_index.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-10-27 21:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:23:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_Query::$username ~ APPPATH\views\admin\products\v_products_index.php [ 36 ]
2015-10-27 21:23:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_Query::$username ~ APPPATH\views\admin\products\v_products_index.php [ 36 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_index.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 36, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(40): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-10-27 21:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:24:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH\views\admin\products\v_products_index.php [ 36 ]
2015-10-27 21:24:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH\views\admin\products\v_products_index.php [ 36 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_index.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 36, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(40): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-10-27 21:24:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:24:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:24:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:24:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:25:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH\views\admin\products\v_products_index.php [ 36 ]
2015-10-27 21:25:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH\views\admin\products\v_products_index.php [ 36 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_index.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\shopch....', 36, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(40): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-10-27 21:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:27:22 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2015-10-27 21:27:22 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\shopch....', 33, Array)
#1 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #219, 'username')
#2 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\result.php(240): Kohana_Database_MySQL_Result->seek('username')
#3 Z:\home\shopch.ru\www\application\views\admin\products\v_products_index.php(36): Kohana_Database_Result->offsetGet('username')
#4 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#7 Z:\home\shopch.ru\www\application\views\admin\v_base.php(40): Kohana_View->__toString()
#8 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#9 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#10 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 [internal function]: Kohana_Controller_Template->after()
#12 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#13 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#16 {main}
2015-10-27 21:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:36:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'products_categories.categories_id' in 'on clause' [ SELECT * FROM categories join products_categories on categories.id = products_categories.categories_id  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-10-27 21:36:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'products_categories.categories_id' in 'on clause' [ SELECT * FROM categories join products_categories on categories.id = products_categories.categories_id  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', false, Array)
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(25): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin_Products->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 21:37:32 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\admin\products\v_products_index.php [ 34 ]
2015-10-27 21:37:32 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\admin\products\v_products_index.php [ 34 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_index.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\shopch....', 34, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(40): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-10-27 21:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:47:37 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 21:47:37 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\views\widgets\w_categortree.php(22): Kohana_ORM_MPTT->__get('title')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#4 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Categortree))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(23): Kohana_Request->execute()
#10 [internal function]: Controller_Admin_Products->action_index()
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-10-27 21:49:31 --- ERROR: Kohana_Exception [ 0 ]: The c property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 21:49:31 --- STRACE: Kohana_Exception [ 0 ]: The c property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('c')
#1 Z:\home\shopch.ru\www\application\views\widgets\w_categortree.php(22): Kohana_ORM_MPTT->__get('c')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#4 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Categortree))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(23): Kohana_Request->execute()
#10 [internal function]: Controller_Admin_Products->action_index()
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-10-27 21:49:33 --- ERROR: Kohana_Exception [ 0 ]: The c property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 21:49:33 --- STRACE: Kohana_Exception [ 0 ]: The c property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('c')
#1 Z:\home\shopch.ru\www\application\views\widgets\w_categortree.php(22): Kohana_ORM_MPTT->__get('c')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#4 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Categortree))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(23): Kohana_Request->execute()
#10 [internal function]: Controller_Admin_Products->action_index()
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-10-27 21:49:34 --- ERROR: Kohana_Exception [ 0 ]: The c property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 21:49:34 --- STRACE: Kohana_Exception [ 0 ]: The c property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('c')
#1 Z:\home\shopch.ru\www\application\views\widgets\w_categortree.php(22): Kohana_ORM_MPTT->__get('c')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#4 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Categortree))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(23): Kohana_Request->execute()
#10 [internal function]: Controller_Admin_Products->action_index()
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-10-27 21:49:34 --- ERROR: Kohana_Exception [ 0 ]: The c property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 21:49:34 --- STRACE: Kohana_Exception [ 0 ]: The c property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('c')
#1 Z:\home\shopch.ru\www\application\views\widgets\w_categortree.php(22): Kohana_ORM_MPTT->__get('c')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#4 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Categortree))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(23): Kohana_Request->execute()
#10 [internal function]: Controller_Admin_Products->action_index()
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-10-27 21:53:41 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 21:53:41 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(31): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Admin_Products->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 21:53:43 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 21:53:43 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(31): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Admin_Products->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 21:54:28 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 21:54:28 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(80): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Admin_Products->action_index()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 21:55:26 --- ERROR: Kohana_Exception [ 0 ]: The c_title property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 21:55:26 --- STRACE: Kohana_Exception [ 0 ]: The c_title property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(70): Kohana_ORM->__get('c_title')
#1 [internal function]: Controller_Admin_Products->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-10-27 21:55:27 --- ERROR: Kohana_Exception [ 0 ]: The c_title property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 21:55:27 --- STRACE: Kohana_Exception [ 0 ]: The c_title property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(70): Kohana_ORM->__get('c_title')
#1 [internal function]: Controller_Admin_Products->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-10-27 21:55:28 --- ERROR: Kohana_Exception [ 0 ]: The c_title property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 21:55:28 --- STRACE: Kohana_Exception [ 0 ]: The c_title property does not exist in the Model_Product class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(70): Kohana_ORM->__get('c_title')
#1 [internal function]: Controller_Admin_Products->action_index()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-10-27 21:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:59:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\admin\products\v_products_index.php [ 30 ]
2015-10-27 21:59:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\admin\products\v_products_index.php [ 30 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_index.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 30, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(40): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-10-27 21:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 21:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 21:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/themes/default/style.css ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:42:12 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:42:12 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(141): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Admin_Products->action_add()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:18 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:18 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(141): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Admin_Products->action_add()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:19 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:19 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(141): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Admin_Products->action_add()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:19 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:19 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(141): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Admin_Products->action_add()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:20 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:20 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(141): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Admin_Products->action_add()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:43:46 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:46 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:47 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:47 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:49 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:49 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:50 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:50 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:51 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:51 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:52 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:52 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:53 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:53 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:54 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:54 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:55 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:55 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:55 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:55 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:57 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:57 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:58 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:58 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:58 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:58 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:43:59 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:43:59 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:44:00 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:44:00 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:44:09 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:44:09 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:44:10 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:44:10 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:44:11 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:44:11 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:44:12 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:44:12 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:44:54 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:44:54 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:44:56 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:44:56 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:44:56 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:44:56 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(71): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-27 22:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 22:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-27 22:49:29 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:49:29 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\views\admin\categories\v_categories_index.php(14): Kohana_ORM_MPTT->__get('title')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#4 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 Z:\home\shopch.ru\www\application\views\admin\v_base.php(40): Kohana_View->__toString()
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#7 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#8 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-10-27 22:51:00 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:51:00 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\views\admin\categories\v_categories_index.php(14): Kohana_ORM_MPTT->__get('title')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#4 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 Z:\home\shopch.ru\www\application\views\admin\v_base.php(40): Kohana_View->__toString()
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#7 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#8 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-10-27 22:51:01 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:51:01 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\views\admin\categories\v_categories_index.php(14): Kohana_ORM_MPTT->__get('title')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#4 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 Z:\home\shopch.ru\www\application\views\admin\v_base.php(40): Kohana_View->__toString()
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#7 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#8 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-10-27 22:51:53 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:51:53 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\views\admin\categories\v_categories_index.php(14): Kohana_ORM_MPTT->__get('title')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#4 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 Z:\home\shopch.ru\www\application\views\admin\v_base.php(40): Kohana_View->__toString()
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#7 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#8 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-10-27 22:51:55 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 22:51:55 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\views\admin\categories\v_categories_index.php(14): Kohana_ORM_MPTT->__get('title')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#4 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 Z:\home\shopch.ru\www\application\views\admin\v_base.php(40): Kohana_View->__toString()
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#7 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#8 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-10-27 23:23:58 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-27 23:23:58 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\views\widgets\w_menu.php(8): Kohana_ORM_MPTT->__get('title')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#4 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\shopch.ru\www\application\classes\controller\index.php(14): Kohana_Request->execute()
#10 [internal function]: Controller_Index->before()
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#15 {main}
2015-10-27 23:23:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-27 23:23:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}