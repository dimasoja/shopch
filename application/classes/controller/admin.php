<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Базовый класс главной страницы
 */
class Controller_Admin extends Controller_Base {

    public $template = 'admin/v_base';

    public function  before() {
        parent::before();
         $this->template->scripts[] = 'media/js/ajax.js';
         if (!$this->auth->logged_in('admin')) {
            $this->request->redirect('authadmin');
        }
        $auth = Auth::instance();
        $this->template->auth = $auth;
        $this->template->user = $auth->get_user();
       $menu_admin = Request::factory('widgets/menuadmin')->execute();

        // Вывод в шаблон
        $this->template->styles[] = 'media/css/style.css';
        $this->template->styles[] = 'media/css/style_admin.css';
       // $this->template->styles[] =  'media/css/dashboard.css';
        $this->template->menu_admin = $menu_admin;
	 $this->template->submenu = null;
    }
    
}