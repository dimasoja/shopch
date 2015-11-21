<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Index_Delivery extends Controller_Index {

     public function action_index() {
        $block_center = View::factory('index/delivery/v_delivery');

        // Вывод в шаблон
        
        $this->template->page_title = 'Доставка';
        $this->template->block_center = array($block_center);
    }
}