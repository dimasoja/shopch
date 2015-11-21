<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Фильтр"
 */
class Controller_Widgets_Filter extends Controller_Template {
    
    public $template = 'widgets/w_filter';

    public function action_index()
    {
        $select = Request::initial()->param('cat');
        
        $this->template->id = $select;
    }

}