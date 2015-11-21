<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-29 13:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 13:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 13:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 13:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/img/book.png ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 13:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 13:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 13:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 13:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 13:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 13:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 13:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 13:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 13:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 13:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 13:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 13:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 13:34:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-29 13:34:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2015-05-29 13:34:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-29 13:34:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2015-05-29 13:34:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-29 13:34:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2015-05-29 13:35:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-29 13:35:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2015-05-29 14:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:07:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-29 14:07:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2015-05-29 14:11:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::has_children() ~ APPPATH\classes\controller\admin\products.php [ 54 ]
2015-05-29 14:11:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::has_children() ~ APPPATH\classes\controller\admin\products.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-05-29 14:14:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-29 14:14:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(66): Kohana_ORM->add('categories', NULL)
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-29 14:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:18:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:18:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:18:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:18:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:20:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:20:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:20:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:20:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:27:55 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-29 14:27:55 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(66): Kohana_ORM->add('categories', NULL)
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2015-05-29 14:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.MultiFile.pack.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-05-29 14:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/upload.js ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-05-29 14:40:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: cats ~ APPPATH\classes\controller\ajax\productajax.php [ 28 ]
2015-05-29 14:40:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: cats ~ APPPATH\classes\controller\ajax\productajax.php [ 28 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 28, Array)
#1 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-29 14:40:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: cats ~ APPPATH\classes\controller\ajax\productajax.php [ 28 ]
2015-05-29 14:40:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: cats ~ APPPATH\classes\controller\ajax\productajax.php [ 28 ]
--
#0 Z:\home\shopch.ru\www\application\classes\controller\ajax\productajax.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\shopch....', 28, Array)
#1 [internal function]: Controller_Ajax_Productajax->action_getpodcat()
#2 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Ajax_Productajax))
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2015-05-29 14:40:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-05-29 14:40:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1447): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\shopch.ru\www\application\classes\controller\admin\products.php(66): Kohana_ORM->add('categories', NULL)
#3 [internal function]: Controller_Admin_Products->action_add()
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}