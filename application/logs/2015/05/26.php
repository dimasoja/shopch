<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-26 08:03:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:03:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:04:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:04:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:04:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:04:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:04:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-26 08:04:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(50): Kohana_ORM->add('categories', NULL)
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-26 08:09:09 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'dm3s@mail.ru' for key 'uniq_email' [ INSERT INTO `users` (`username`, `first_name`, `password`, `email`) VALUES ('цццs', 'ывыв', 'e425cc6453acdd9b97e81afaebc63d44351622d241bab5afe1a4a9d07b0390cf', 'dm3s@mail.ru') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-26 08:09:09 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'dm3s@mail.ru' for key 'uniq_email' [ INSERT INTO `users` (`username`, `first_name`, `password`, `email`) VALUES ('цццs', 'ывыв', 'e425cc6453acdd9b97e81afaebc63d44351622d241bab5afe1a4a9d07b0390cf', 'dm3s@mail.ru') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 Z:\home\shopch.ru\www\application\classes\controller\index\auth.php(50): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2015-05-26 08:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:13:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:13:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:13:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:13:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:14:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
2015-05-26 08:14:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 16, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:15:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
2015-05-26 08:15:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 16, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
2015-05-26 08:15:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 16, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
2015-05-26 08:15:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 16, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
2015-05-26 08:15:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 16, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
2015-05-26 08:15:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 16, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
2015-05-26 08:15:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 16, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
2015-05-26 08:15:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 16, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:15:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
2015-05-26 08:15:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 16, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
2015-05-26 08:15:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 16, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
2015-05-26 08:15:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 16, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:15:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
2015-05-26 08:15:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: pod_cats ~ APPPATH\views\admin\products\v_products_add.php [ 16 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 16, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:15:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:15:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:15:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:18:03 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:18:03 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:18:04 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:18:04 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:18:05 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:18:05 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:18:05 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:18:05 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:18:06 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:18:06 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:18:06 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:18:06 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:18:07 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:18:07 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:18:07 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:18:07 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:18:08 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:18:08 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:18:08 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:18:08 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:34 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:34 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:34 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:34 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:37 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:37 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:37 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:37 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:39 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:39 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:39 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:39 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:40 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:40 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:40 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:40 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:41 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:41 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:41 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:41 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:43 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:19:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:19:43 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:21:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:21:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:21:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:21:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:21:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:21:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:21:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:21:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:21:22 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:21:22 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:21:22 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:21:22 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:21:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:21:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:21:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:21:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:21:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:21:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:21:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:21:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:21:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:21:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:21:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:21:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:21:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:21:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:22:49 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:22:49 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:22:49 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:22:49 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:22:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:22:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:22:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:22:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:22:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:22:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:22:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:22:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:22:52 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:22:52 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:22:52 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:22:52 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:22:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:22:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:22:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:22:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:24:51 --- ERROR: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:24:51 --- STRACE: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:26:00 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
2015-05-26 08:26:00 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\shopch....', 13, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:01 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
2015-05-26 08:26:01 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\shopch....', 13, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:03 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
2015-05-26 08:26:03 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\shopch....', 13, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:03 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
2015-05-26 08:26:03 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\shopch....', 13, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:03 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
2015-05-26 08:26:03 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\shopch....', 13, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:55 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
2015-05-26 08:26:55 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\shopch....', 13, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:26:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:57 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
2015-05-26 08:26:57 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\shopch....', 13, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:58 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
2015-05-26 08:26:58 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\shopch....', 13, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:26:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:58 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
2015-05-26 08:26:58 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\shopch....', 13, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:26:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:59 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
2015-05-26 08:26:59 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\products\v_products_add.php [ 13 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\shopch....', 13, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:28:44 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
2015-05-26 08:28:44 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\admin\products.php [ 37 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(37): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\shopch....', 37, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:32:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:32:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:32:44 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:32:44 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:32:44 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:32:44 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:32:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:32:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:32:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:32:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:32:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:32:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:34:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:34:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:34:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:34:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:34:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:34:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:34:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:34:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:34:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:34:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:34:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:34:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:34:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:34:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:34:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:34:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:34:28 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:34:28 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:34:28 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:34:28 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:34:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:34:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:34:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:34:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:34:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
2015-05-26 08:34:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 38 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 38, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:35:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:35:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:35:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:35:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:36:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
2015-05-26 08:36:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 39, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:36:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
2015-05-26 08:36:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 39, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:36:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
2015-05-26 08:36:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 39, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:36:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
2015-05-26 08:36:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 39, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:36:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
2015-05-26 08:36:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 39, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:36:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
2015-05-26 08:36:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 39, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:36:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
2015-05-26 08:36:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 39, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:36:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
2015-05-26 08:36:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 39, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:36:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
2015-05-26 08:36:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 39, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:36:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
2015-05-26 08:36:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 39 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 39, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:40:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 36 ]
2015-05-26 08:40:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 36 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(36): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 36, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:40:39 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 36 ]
2015-05-26 08:40:39 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 36 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(36): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 36, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:40:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 36 ]
2015-05-26 08:40:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 36 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(36): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 36, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:40:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 36 ]
2015-05-26 08:40:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 36 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(36): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 36, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:40:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 36 ]
2015-05-26 08:40:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 36 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(36): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 36, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:40:41 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 36 ]
2015-05-26 08:40:41 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\products.php [ 36 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(36): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\shopch....', 36, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 08:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:46:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: getcat ~ APPPATH\views\admin\products\v_products_add.php [ 15 ]
2015-05-26 08:46:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: getcat ~ APPPATH\views\admin\products\v_products_add.php [ 15 ]
--
#0 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 15, Array)
#1 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#5 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#7 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2015-05-26 08:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:52:54 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, object given, called in Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php on line 16 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
2015-05-26 08:52:54 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, object given, called in Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php on line 16 and defined ~ SYSPATH\classes\kohana\form.php [ 252 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\shopch....', 252, Array)
#1 Z:\home\shopch.ru\www\application\views\admin\products\v_products_add.php(16): Kohana_Form::select('pod_cat', Object(Database_MySQL_Result), NULL, Array)
#2 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#3 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#4 Z:\home\shopch.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#5 Z:\home\shopch.ru\www\application\views\admin\v_base.php(43): Kohana_View->__toString()
#6 Z:\home\shopch.ru\www\system\classes\kohana\view.php(61): include('Z:\home\shopch....')
#7 Z:\home\shopch.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\shopch....', Array)
#8 Z:\home\shopch.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2015-05-26 08:52:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:52:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:52:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:52:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:54:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:54:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 08:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 08:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/options was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-26 09:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/options was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-26 09:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/options was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-05-26 09:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/options was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-26 09:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delete/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-26 09:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delete/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-26 09:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delete/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-26 09:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delete/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-26 09:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delete/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-26 09:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delete/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-26 09:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delete/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-26 09:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delete/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-26 09:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delete/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-26 09:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delete/92 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-26 09:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delete/111 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-05-26 09:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/products/delete/111 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2015-05-26 09:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 09:46:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 09:46:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 13:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 13:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 13:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 13:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 13:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 13:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 13:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 13:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 13:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 13:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 13:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 13:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 13:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 13:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 13:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 13:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:09:29 --- ERROR: ErrorException [ 8 ]: Undefined index: cat ~ APPPATH\classes\controller\admin\products.php [ 63 ]
2015-05-26 14:09:29 --- STRACE: ErrorException [ 8 ]: Undefined index: cat ~ APPPATH\classes\controller\admin\products.php [ 63 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\shopch....', 63, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 14:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:12:26 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-26 14:12:26 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(63): Kohana_ORM->add('categories', NULL)
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-26 14:15:55 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-26 14:15:55 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(68): Kohana_ORM->add('categories', NULL)
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-26 14:16:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-26 14:16:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(68): Kohana_ORM->add('categories', NULL)
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-26 14:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:17:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-26 14:17:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(68): Kohana_ORM->add('categories', NULL)
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-26 14:21:09 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-26 14:21:09 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(68): Kohana_ORM->add('categories', NULL)
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-26 14:23:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-26 14:23:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(68): Kohana_ORM->add('categories', NULL)
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-26 14:23:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-26 14:23:49 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(68): Kohana_ORM->add('categories', NULL)
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-26 14:27:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-26 14:27:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(69): Kohana_ORM->add('categories', NULL)
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-26 14:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:28:55 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-26 14:28:55 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(69): Kohana_ORM->add('categories', NULL)
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-26 14:33:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\controller\admin\products.php [ 100 ]
2015-05-26 14:33:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\controller\admin\products.php [ 100 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-26 14:36:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\admin\products.php [ 59 ]
2015-05-26 14:36:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\admin\products.php [ 59 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 59, Array)
#1 [internal function]: Controller_Admin_Products->action_add()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-26 14:37:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-26 14:37:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(65): Kohana_ORM->add('categories', NULL)
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-26 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-26 14:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-26 14:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}