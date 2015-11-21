<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catalog extends Model {

     public function all_products()
    {
        return array(
                'PHP. Сборник рецептов' => 100,
                'Язык программирования Java' => 200,
                'Совершенный код' => 300,
                'Web-сервер глазами хакера' => 400,
            );
    }

    // Список категорий
    public function categories()
    {
        return array(
                'Девочки 5-12 лет' => array(1, 2, 3),
                'Девочки 0-5лет'   => array(4, 5, 6),
                'Девочки 0-1год'    => array(7, 8, 9),
                'Мальчики 5-12 лет'  => array(11, 12, 13),
                'Мальчики 0-5 лет'  => array(14, 15, 16, 17),
                'Мальчики 0-1 год'  => array(18, 19, 20),
           );
    }
} 
