<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-29 02:23:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-29 02:23:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-29 05:23:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-29 05:23:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-29 20:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-29 20:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-29 20:02:57 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-29 20:02:57 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('title')
#1 Z:\home\shopch.ru\www\application\classes\controller\index\catalog.php(113): Kohana_ORM_MPTT->__get('title')
#2 [internal function]: Controller_Index_Catalog->action_view()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-29 21:23:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-29 21:23:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-29 21:26:47 --- ERROR: Kohana_Exception [ 0 ]: The с_title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-29 21:26:47 --- STRACE: Kohana_Exception [ 0 ]: The с_title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('??_title')
#1 Z:\home\shopch.ru\www\application\classes\controller\index\catalog.php(113): Kohana_ORM_MPTT->__get('??_title')
#2 [internal function]: Controller_Index_Catalog->action_view()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-29 21:26:48 --- ERROR: Kohana_Exception [ 0 ]: The с_title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2015-10-29 21:26:48 --- STRACE: Kohana_Exception [ 0 ]: The с_title property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 Z:\home\shopch.ru\www\modules\orm-mptt\classes\kohana\orm\mptt.php(1010): Kohana_ORM->__get('??_title')
#1 Z:\home\shopch.ru\www\application\classes\controller\index\catalog.php(113): Kohana_ORM_MPTT->__get('??_title')
#2 [internal function]: Controller_Index_Catalog->action_view()
#3 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#4 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2015-10-29 21:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL search was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-29 21:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL search was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}