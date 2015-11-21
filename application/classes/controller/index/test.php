<?php


 class Controller_Index_Test extends Controller {
     
     public function  action_index(){
         
         $p = ORM::factory('product');
         $p->title = 'GHb';
         $p->description = 'ssss';
         $p->cost = 10;
         $p->status = 1;
         $p->save();
         
         echo "привет";
         
     }
     
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

