<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-18 01:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-18 01:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-18 04:23:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-18 04:23:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-18 18:02:27 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] ����������� �� �����������, �.�. �������� ��������� ������ ������ �� �����������.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2015-10-18 18:02:27 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] ����������� �� �����������, �.�. �������� ��������� ������ ������ �� �����������.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\shopch.ru\www\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('news')
#3 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#4 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\shopch.ru\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 Z:\home\shopch.ru\www\application\classes\controller\widgets\news.php(12): Kohana_ORM::factory('new')
#8 [internal function]: Controller_Widgets_News->action_index()
#9 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Widgets_News))
#10 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\shopch.ru\www\application\classes\controller\index.php(12): Kohana_Request->execute()
#13 [internal function]: Controller_Index->before()
#14 Z:\home\shopch.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#15 Z:\home\shopch.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 Z:\home\shopch.ru\www\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#18 {main}
2015-10-18 18:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-18 18:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-18 18:23:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-18 18:23:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2015-10-18 21:23:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
2015-10-18 21:23:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1152 ]
--
#0 Z:\home\shopch.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}