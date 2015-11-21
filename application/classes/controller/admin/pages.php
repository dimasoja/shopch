<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_Admin {

    public function before() {
        parent::before();

        // Вывод в шаблон
        $this->template->submenu = Request::factory('widgets/menupages')->execute(); 
        $this->template->page_title = 'Страницы';
    }

    public function action_index() {
        
        $content = View::factory('admin/pages/v_pages_index');

        // Вывод в шаблон
        $this->template->block_center = array($content);
    }

}