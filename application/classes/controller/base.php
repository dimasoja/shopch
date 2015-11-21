<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

    public $template = 'index/v_base'; 
        
    protected $user;
    protected $auth;
    protected $session;
    
    public function before() {
        parent::before();
        I18n::lang('ru');
        Session::$default = 'cookie';
        $site_name = 'Дочки-Сыночки';
        $site_description = 'ИНТЕРНЕТ-МАГАЗИН ДЕТСКОЙ ОДЕЖДЫ';
        $this->auth = Auth::instance();
        $this->user = $this->auth->get_user();
        
         
         $this->session = Session::instance();

        // Вывод в шаблон
        $this->template->site_name = $site_name;
        $this->template->site_description = $site_description;
        $this->template->top_menu  = Request::factory('widgets/topmenu')->execute();
        $this->template->cart =  Request::factory('widgets/cart')->execute();
        $this->template->search = Request::factory('widgets/search')->execute();
        $this->template->page_title = null;

        // Подключаем стили и скрипты
        $this->template->styles = array('/media/css/style.css' , '/media/css/stylesheet.css' );
        $this->template->scripts = array('/media/js/jquery-latest.min.js' , '/media/js/menu.js' );

        // Подключаем блоки
        $this->template->block_left = null;
        $this->template->block_center = null;
        $this->template->block_right = null;
        $this->template->block_top = null;
    }
}


