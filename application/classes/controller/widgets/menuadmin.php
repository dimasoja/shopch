<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Меню админа"
 */
class Controller_Widgets_Menuadmin extends Controller_Template {

    public $template = 'widgets/w_menuadmin';    // Шаблон виждета
    
    public function action_index()
    {
        $select = Request::initial()->controller();

        $menu = array(
            'Главная' => array('main', false),
            'Заказы' => array('Заказы'=>'orders', 'Заказы'=>'orders'),
            'Страницы' => array('Страницы'=>'pages', 'Новости'=>'news'),
            'Каталог' => array('Товары'=>'products', 'Категории'=>'categories', 'Настройки'=>'categories'),
            'Пользователи' => array('Пользователи' =>'users', 'Пользователи' =>'users'),
            'Настройки' => array('Настройки' =>'settings', 'Настройки' =>'settings'),
        );

        // Вывод в шаблон
        $this->template->menu = $menu;
        $this->template->select = $select;
    }
}