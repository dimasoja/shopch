<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_Productajax extends Controller {
    
    
    public function action_index()
	{
		$this->response->body('hello, world!');
	}
        
      public function  action_gettest(){
         $cat_tree =(string) Response::factory()->body(View::factory('widgets/w_test'));
            $cat_tree =(string) Request::factory('widgets/test')->execute();
             echo json_encode($cat_tree);
      }   
    
      public  function action_limitcost(){
            if(!$this->request->is_ajax())
			throw new HTTP_Exception_403;
            $min = Arr::get($_POST, 'min', ' ');
            $max = Arr::get($_POST, 'max', ' ');
            $id = Arr::get($_POST, 'id', '');
            $cat = (int) $this->request->param('cat');
            $category = ORM::factory('category')->where('id', '=', $cat)->find();
           // ORM::factory('category')->where('id', '=', $cat)->and_where($category, $op, $id)
            $products = $category->products->where('status', '!=', 0)
                                           ->and_where('coust', '>', $min)
                                           ->and_where('coust', '<', $max)
                                           ->find_all();
             $content = View::factory('index/catalog/v_catalog_cat', array(
            'products' => $products,
            'cat' => $cat,
             //  'search_form' => $search_form,
        ));
            
           echo json_encode($com_send);  
      }




      public function  action_getaddcomment(){
         
         if(!$this->request->is_ajax())
			throw new HTTP_Exception_403;
         $name = Arr::get($_POST, 'name', '');
         $text = Arr::get($_POST, 'text', '');
         $id = Arr::get($_POST, 'id', '');
        // $name='sdsdsd';
//         $data = array();
//         $data['product_id'] = $id;
//         $data['name'] = $name;
//         $data['text'] = $text;
          $com_send = array();
         try {
             $cm_db = ORM::factory('comment');
             
             $cm_db->product_id =$id;
             $cm_db->name =$name;
             $cm_db->text =$text;
             $cm_db->date = date('d.m.Y  H:i:s');
             $cm_db->save();
             
         } catch (ORM_Validation_Exception $ex) {
             $error = $ex->errors('validation');
             $add_er=array();
             foreach( $error as $er){
                 array_push( $add_er, $er); 
                 
             }
             $com_send['error']=$add_er;
         }
            $pr_db = ORM::factory('product', $id);
            $count = $pr_db->comments->count_all();
           
            $com_send['name']=$name;
            $com_send['text']=$text;
            $com_send['date']=date('d.m.Y H:i:s');
            $com_send['count']=$count;
            
       
         //print_r($comment);
         echo json_encode($com_send);
    }

    public function action_getpodcat(){
        
       if(!$this->request->is_ajax())
			throw new HTTP_Exception_403;
       
       $id = Arr::get($_POST, 'id_cat', '');
       $p_cat = ORM::factory('category')->where('id', '=', $id)->find();
       $cats = array();
        foreach ($p_cat->children() as $cat){
            $cats[$cat->id] = $cat->c_title;
       }

		// Make some delay for demonstration purposes
		//sleep(1.5);
      //      $cats=array(
	//		'Test #1', 'Test #2', 'Test #3');
              echo json_encode($cats);
    }
    
    public function action_getpodcatp(){
        
       if(!$this->request->is_ajax())
			throw new HTTP_Exception_403;
       
       $id = Arr::get($_POST, 'id_cat', '');
       
       if ($id == 'select'){
           $cats['sel_p']="Выберите подкатегорию";
           echo json_encode($cats);
           
       }
       else{
       $p_cat = ORM::factory('category')->where('id', '=', $id)->find();
       $cats = array();
        foreach ($p_cat->children() as $cat){
            $cats[$cat->id] = $cat->c_title;
       }
       $cats['sel_p']="Выберите подкатегорию";
       //array_push($cats, "Выберите подкатегорию");
		// Make some delay for demonstration purposes
		//sleep(1.5);
      //      $cats=array(
	//		'Test #1', 'Test #2', 'Test #3');
              echo json_encode($cats);
       }
    }

     public function echo_full_tree($id_move){
      //   $categories = ORM::factory('category');
        $categories =  ORM::factory('category')
                ->where('lvl', '=', 1)
                ->order_by('scope', 'ASC')
                ->order_by('lft', 'ASC')
                ->find_all()->as_array();
     //   print_r($categories);
        $i=0;
         $cats[$i++]=$id_move;
        foreach ($categories as $cat){
           $cats[$i++]=array($cat->id, str_repeat('&nbsp;', 2 * $cat->lvl). $cat->c_title); 
          //  $cats[$cat->id]=$cat->title;
        }
        echo json_encode( $cats);
        
    }
   
    
    public function action_getaddprev(){
        if(!$this->request->is_ajax())
			throw new HTTP_Exception_403;
         sleep(0.1);
         $id = Arr::get($_POST, 'id_cat', '');
         $id_move=$id;
         $categories = ORM::factory('category');
         $cat = ORM::factory('category')->where('id', '=', $id)->find();
         if ($cat->lvl == '1'){
         $categall = ORM::factory('category')->where('lvl', '=', 1)
                ->order_by('scope', 'ASC')
                ->order_by('lft', 'ASC')
                ->find_all()->as_array();
         $id_k = array_search($cat, $categall);
             if ($id_k > 0){
                $prev_k = $id_k-1;
                $prev = $categall[$prev_k];
                $child = $categall[$id_k]->children()->as_array();
                $categories->c_title=$cat->c_title;
               try{
                $categories->insert_as_prev_sibling($prev);
                
                ORM::factory('category', $id)->delete();
                $id_move=$this->move_child($prev_k, $child);
                }
                catch (ORM_Validation_Exception $e)
                 {
                     $errors = $e->errors('validation');
                }
             }
              $this->echo_full_tree($id_move);
         }
           if ($cat->lvl == '2'){
                $categall = ORM::factory('category')->where('lvl', '=', 2)
                             ->where('parent_id', '=', $cat->parent_id)
                             ->order_by('scope', 'ASC')
                             ->order_by('lft', 'ASC')
                             ->find_all()->as_array();
                $id_k = array_search($cat, $categall);
                if ($id_k > 0){
                  $prev_k = $id_k-1;
                  $prev = $categall[$prev_k];
                  $categories->c_title=$cat->c_title;
                  $categories->insert_as_prev_sibling($prev);
                  ORM::factory('category', $id)->delete();
               }
            }
            //$this->echo_full_tree($categories);
    }
        
    public function move_child($id, $child){
         $categall = ORM::factory('category')->where('lvl', '=', 1)
                            ->order_by('scope', 'ASC')
                            ->order_by('lft', 'ASC')
                            ->find_all()->as_array();
                 $move_id = $categall[$id];
                 $cat_move = ORM::factory('category')->where('id', '=', $move_id)->find();
                 foreach ($child as $ch){
                     $categories = ORM::factory('category');
                     $categories->c_title = $ch->c_title;
                     $categories->insert_as_last_child($cat_move);
                }
           return $cat_move->id;
        
    }
    
 
    public function action_getaddnext(){
         if(!$this->request->is_ajax())
			throw new HTTP_Exception_403;
         sleep(0.1);
        $id = Arr::get($_POST, 'id_cat', '');
        $id_move=$id;
        $categories = ORM::factory('category');
        $cat = ORM::factory('category')->where('id', '=', $id)->find();
        if ($cat->lvl == '1'){
        $categall = ORM::factory('category')->where('lvl', '=', 1)
                ->order_by('scope', 'ASC')
                ->order_by('lft', 'ASC')
                ->find_all()->as_array();
         $id_k = array_search($cat, $categall);
         $cnt= sizeof($categall)-1;
         if (($cnt > 0) && ($id_k<$cnt) ){
                $next_k = $id_k+1;
                $next = $categall[$next_k];
                $child = $categall[$id_k]->children()->as_array();
                $categories->c_title=$cat->c_title;
                try{
                $categories->insert_as_next_sibling($next);
                
                ORM::factory('category', $id)->delete();
                }
                catch (ORM_Validation_Exception $e)
                {
                $errors = $e->errors('validation');
                }
                $id_move=$this->move_child($next_k, $child);
             }
             $this->echo_full_tree($id_move);
         }
           if ($cat->lvl == '2'){
                $categall = ORM::factory('category')->where('lvl', '=', 2)
                            ->where('parent_id', '=', $cat->parent_id)
                            ->order_by('scope', 'ASC')
                            ->order_by('lft', 'ASC')
                            ->find_all()->as_array();
                $id_k = array_search($cat, $categall);
                $cnt= sizeof($categall)-1;
                if (($cnt > 0) && ($id_k<$cnt) ){
                $next_k = $id_k+1;
                $next = $categall[$next_k];
                $categories->c_title=$cat->c_title;
                $categories->insert_as_next_sibling($next);
                ORM::factory('category', $id)->delete();
            }
          }
       // $this->echo_full_tree($categories);     
        
    }
     
  }


 
    
