<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Widgets_Test extends Controller {
    
    

    public function action_index()
            
    {
        
       
      $this->response->body(View::factory('widgets/w_test'));
    }

}