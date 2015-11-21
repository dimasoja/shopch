<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Базовый класс главной страницы
 */
class Controller_Index extends Controller_Base {

    
     public function before(){
       
        parent::before();
         //$login = Request::factory('widgets/login')->execute();
        $this->template->scripts[] = 'media/js/jquery-ui-1.8.19.custom.min.js';
        $this->template->styles[] = 'media/css/jquery-ui-1.8.19.custom.css';
        $this->template->styles[] = 'media/css/style_slyder.css';
         $new = Request::factory('widgets/news')->execute();
           
        $menu = Request::factory('widgets/menu')->execute();
        $top = Request::factory('widgets/top')->execute();
        $this->template->block_left = array($menu); 
        $this->template->block_right = array($new); 
        $this->template->block_top = $top;
        
//        $op = Kohana::$config->load('config');
              
        
    }
    

   
}