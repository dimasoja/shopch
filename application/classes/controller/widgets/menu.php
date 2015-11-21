<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Меню сайта"
 */
class Controller_Widgets_Menu extends Controller_Template {

    public $template = 'widgets/w_menu';    // Шаблон виждета
    
    
    public function action_index()
    {
       

        $select = Request::initial()->param('cat');
        
        $cat = ORM::factory('category', $select);
        $id_p = $select ;
        if ($cat->lvl != 1)
            $id_p = $cat->parent_id;   
        // Получаем список категорий
        $categories = ORM::factory('category')->where('lvl', '=', 1)
                ->order_by('scope', 'ASC')
                ->order_by('lft', 'ASC')
                ->find_all();
    
        $this->template->categories = $categories;
        $this->template->id_p = $id_p;
      
    }

}