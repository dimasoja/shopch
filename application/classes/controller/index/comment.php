<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Каталог
 */
class Controller_Index_Comment extends Controller_Index {
    
    public function action_index() {
        
        
         
    }
    
     public function action_addcoment(){
         $id = (int) $this->request->param('id');
         $name = Arr::get($_POST, 'name_av');
         $text = Arr::get($_POST, 'text_com');
        // $name='sdsdsd';
         $data = array();
         $data['product_id'] = $id;
         $data['name'] = $name;
         $data['text'] = $text;
         try {
             $cm_db = ORM::factory('comment');
             
             $cm_db->product_id =$id;
             $cm_db->name =$name;
             $cm_db->text =$text;
             $cm_db->save();
             
         } catch (Exception $ex) {

         }
          $this->request->redirect('/catalog/'.$name);
         
     }
    
}

