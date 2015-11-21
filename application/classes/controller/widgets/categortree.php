<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Корзина"
 */
class Controller_Widgets_Categortree extends Controller_Template {
    
    public $template = 'widgets/w_categortree';

    public function action_index()
    {
        $categories = ORM::factory('category')->where('lvl', '=', 1)
                ->order_by('scope', 'ASC')
                ->order_by('lft', 'ASC')
                ->find_all();
    
        $this->template->categories = $categories;
    }

}