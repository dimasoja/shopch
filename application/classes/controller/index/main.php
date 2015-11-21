<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Index_Main extends Controller_Index {

     public function action_index() {
         
        $all_products_popul = ORM::factory('product')->where('popular', '=', 1)->find_all();
        $data= array('all_products_popul' => $all_products_popul);
        $block_center = View::factory('index/main/v_index',  $data);

        // Вывод в шаблон
        
        $this->template->page_title = 'Главная';
        $this->template->block_center = array($block_center);
    }
}