<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-18 11:52:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\views\v_base.php [ 35 ]
2015-02-18 11:52:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH\views\v_base.php [ 35 ]
--
#0 Z:\home\localhost\www\site\application\views\v_base.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 35, Array)
#1 Z:\home\localhost\www\site\system\classes\kohana\view.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\www\site\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\www\site\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\localhost\www\site\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\www\site\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\localhost\www\site\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\site\index.php(109): Kohana_Request->execute()
#9 {main}