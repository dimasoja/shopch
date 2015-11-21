<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Новости"
 */
class Controller_Widgets_News extends Controller_Template {
    
    public $template = 'widgets/w_news';

    public function action_index()
    {
        // Получаем список категорий
        $all_news = ORM::factory('new')->where('new_chek', '=', 1)->find_all();
     //   $all_news = ORM::factory('new')->limit(3)->find_all();
        $this->template->all_news = $all_news;
    }

}