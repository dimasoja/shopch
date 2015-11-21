<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Пользователи
 */
class Controller_Admin_Users extends Controller_Admin {

    public function before() {
        parent::before();

        // Вывод в шаблон

        $sub_menu = Request::factory('widgets/menuusers')->execute();
        $this->template->submenu =$sub_menu;
     }

    public function action_index() {
        
        
         $users = ORM::factory('user')->find_all();

        $content = View::factory('admin/users/v_users_index');
        $content->users =$users;

        // Вывод в шаблон
        $this->template->block_center = array($content);

        
    }
}