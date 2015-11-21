<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Index_Contacts extends Controller_Index {

     public function action_index() {
        $block_center = View::factory('index/contacts/v_contacts');

        // Вывод в шаблон
        
        $this->template->page_title = 'Контакты';
        $this->template->block_center = array($block_center);
    }
}