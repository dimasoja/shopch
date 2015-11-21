<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Категории товаров
 */
class Controller_Admin_Categories extends Controller_Admin {

    public function before() {
        parent::before();

        // Вывод в шаблон
        $this->template->submenu = Request::factory('widgets/menuproducts')->execute();
       
    }

    public function action_index() {
       // $this->template->value_may=null;
        $categories = ORM::factory('category');
        $cat = Arr::get($_POST, 'cat');
        $pod_cats = Arr::get($_POST, 'pod_cat');
        $pod_cat = array();
        $select = null;
        $disabled='disabled';
        
        if (isset($_POST['add']))
        {
            $title = Arr::get($_POST, 'title');
            $categories->c_title = $title;
            try
            {
                $categories->make_root();
                $this->request->redirect('admin/categories');
            }
            catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('validation');
            }
        }
        if (isset($_POST['addp']))
        {
            $select = $cat;
            $title = Arr::get($_POST, 'titlep');
            $categories->c_title = $title;
            try
            {
                $disabled=null;
                $categories->insert_as_last_child($cat);
                $this->request->redirect('admin/categories/addp/'.$cat);
            //    $p_cat = ORM::factory('category')->where('id', '=', $cat)->find();
            //    foreach ($p_cat->children() as $catp){
            //      $pod_cat[$catp->id] = $catp->title;
             //    }
            }
            catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('validation');
            }
        }

        if (isset($_POST['delete']))
        {
            if ($cat)
            {
                $disabled='disabled';
                ORM::factory('category', $cat)->delete();
            }

         //   $this->request->redirect('admin/categories');
        }
        
        
         if (isset($_POST['deletep']))
        {
              $select = $cat;
            if ($pod_cats)
            {
                ORM::factory('category', $pod_cats)->delete();
            }
             $p_cat = ORM::factory('category')->where('id', '=', $cat)->find();
                    
                    foreach ($p_cat->children() as $catp)
                        $pod_cat[$catp->id] = $catp->c_title;
                        

         //   $this->request->redirect('admin/categories');
        }
        
        $categories = ORM::factory('category')->where('lvl', '=', 1)
                ->order_by('scope', 'ASC')
                ->order_by('lft', 'ASC')
                ->find_all()->as_array();
       

       // $categories = $categories->fulltree()->as_array();
        //$disabled='disabled';
        $content = View::factory('admin/categories/v_categories_index')
                ->bind('categories', $categories)
            //    ->bind('catss', $catss)
                ->bind ('disabled', $disabled)
                ->bind('select', $select)
                ->bind('pod_cat', $pod_cat)
                ->bind('errors', $errors);

        // Вывод в шаблон
     //   $this->template->page_title = "каталог";
        $this->template->block_center = array($content);
    }
    
     public function action_addp() {
         
       //   $categories = ORM::factory('category');
          $cat = (int) $this->request->param('id');
        //  $pod_cats = Arr::get($_POST, 'pod_cat');
          $pod_cat = array();
          $select =  $cat;;
          $disabled=null;
          $p_cat = ORM::factory('category')->where('id', '=', $cat)->find();
                foreach ($p_cat->children() as $catp){
                  $pod_cat[$catp->id] = $catp->c_title;
                 } 
           
           $categories = ORM::factory('category')->where('lvl', '=', 1)
                ->order_by('scope', 'ASC')
                ->order_by('lft', 'ASC')
                ->find_all()->as_array();
       

       // $categories = $categories->fulltree()->as_array();
        //$disabled='disabled';
        $content = View::factory('admin/categories/v_categories_index')
                ->bind('categories', $categories)
            //    ->bind('catss', $catss)
                ->bind ('disabled', $disabled)
                ->bind('select', $select)
                ->bind('pod_cat', $pod_cat)
                ->bind('errors', $errors);

        // Вывод в шаблон
     //   $this->template->page_title = "каталог";
        $this->template->block_center = array($content);
     }
    
   
        
    }
