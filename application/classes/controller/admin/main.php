<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Admin_Main extends Controller_Admin {

    public function action_index() {
        
        $overview = array();
        $overview['news'] = ORM::factory('new')->count_all();
	$overview['articles'] = 0;
        $overview['categories'] = ORM::factory('category')->count_all();
        $overview['users'] = ORM::factory('user')->count_all();
       // $overview['pages'] = ORM::factory('Admin_Page')->count_all();
        $overview['comments'] = 0;
        $overview['all_comments'] = ORM::factory('comment')->count_all();
        //$overview['banned'] = ORM::factory('Admin_User')->where('status', '=', 0)->count_all();

        $content = View::factory('admin/main/v_main_index', array( 'overview' => $overview));

        // Вывод в шаблон
        $this->template->page_title = 'Главная';
        
        
        
        
        $this->template->block_center = array($content);
    }
}