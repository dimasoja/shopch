<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Каталог
 */
class Controller_Index_Catalog extends Controller_Index {

    public function  before() {
        parent::before();

        // Виджеты
         $this->template->block_right = null;
     // $login = Request::factory('widgets/login')->execute();
         $action = $this->request->action();
       if ($action == 'cat' || $action == 'catminmax' ){    
        $filter = Request::factory('widgets/filter')->execute();
        $this->template->block_left[] = $filter; 
       }
     //    $top = Request::factory('widgets/top')->execute();
       //  $this->template->block_top = $top;
    }

    public function action_index() {
        // Получаем список продукций
        $products = Model::factory('catalog')->all_products();
        
        $content = View::factory('index/catalog/v_catalog', array(
            'products' => $products,
        ));
        
        // Выводим в шаблон
        $this->template->page_title = 'Каталог';
        $this->template->block_center = array($content);
    }
    
    public function action_catminmax(){
          $cat = (int) $this->request->param('cat');
          $min = (int) $this->request->param('id');
          $max = (int) $this->request->param('id1');
          
           // Получаем список продукций
        $category = ORM::factory('category')->where('id', '=', $cat)->find();
	$cat_pod =$category->c_title;
        if ($category->lvl !=1 ){
			$cat_p = $category->parent();
			$cat_pod =$cat_p->c_title . " &rarr;" . $cat_pod;
	}

        if(!$category->loaded()){
            $this->request->redirect();
        }
          
          $products = $category->products->where('status', '!=', 0)
                                           ->and_where('cost', '>', $min)
                                           ->and_where('cost', '<', $max)
                                           ->find_all();
           $content = View::factory('index/catalog/v_catalog_cat', array(
            'products' => $products,
            'cat' => $cat,
            
          //  'search_form' => $search_form,
        ));
        
        // Выводим в шаблон
       $this->template->title = $cat_pod;
       $this->template->page_title = $cat_pod;
       $this->template->block_center = array($content);
       
    }
    
      public function action_cat() {
            $cat = (int) $this->request->param('cat');
            $min = (int) $this->request->param('id');
          $max = (int) $this->request->param('id1');
        
        // Виджет поиска
       // $search_form = Widget::load('search');

        // Получаем список продукций
        $category = ORM::factory('category')->where('id', '=', $cat)->find();
	$cat_pod =$category->c_title;
        if ($category->lvl !=1 ){
			$cat_p = $category->parent();
			$cat_pod =$cat_p->c_title . " &rarr;" . $cat_pod;
	}

        if(!$category->loaded()){
            $this->request->redirect();
        }
        if (($max!=null) && ($min!=null)){
             $products = $category->products->where('status', '!=', 0)
                                           ->and_where('cost', '>', $min)
                                           ->and_where('cost', '<', $max)
                                           ->find_all();
        }
        else {
          $products = $category->products->where('status', '!=', 0)->find_all();
        }
      // min = $category->products->select();
        $content = View::factory('index/catalog/v_catalog_cat', array(
            'products' => $products,
            'cat' => $cat,
            
          //  'search_form' => $search_form,
        ));
        
        // Выводим в шаблон
       $this->template->title = $cat_pod;
       $this->template->page_title = $cat_pod;
       $this->template->block_center = array($content);
       
          
      }
      
     public function action_view() {
        $cat = (int) $this->request->param('cat');
        $id = (int) $this->request->param('id');
        
         $pg = (int) $this->request->param('page');
         $tab=false;
         if ($pg){
             $tab=true;
         }

         
         
        $product = ORM::factory('product')->where('id', '=', $id)->and_where('status', '!=', 0)->find();
        $category = ORM::factory('category')->where('id', '=', $cat)->find();
        
        if (!$product->loaded()){
            $this->request->redirect();
        }
        
        $count = $product->comments->count_all();
        $pagination = Pagination::factory(array(
            'total_items' => $count,
        ))->route_params(array(
            'controller' => Request::current()->controller(),
            'action' => Request::current()->action(),
                      
            'cat' => Request::current()->param('cat'),
            'id' => Request::current()->param('id'),
        ));
         $comments = $product->comments->limit($pagination->items_per_page)
                    ->offset($pagination->offset)
                    ->find_all();
        
        $content = View::factory('index/catalog/v_catalog_view', array(
            'product' => $product,
            'comments' => $comments,
            'images' => $product->images->find_all(),
            'category' => $category,
            'pagination' => $pagination,
             'tab' => $tab
        ));

        // Выводим в шаблон

        if ($category->loaded()){
            $this->template->page_title = HTML::anchor('catalog/cat/c'. $category->id, $category->c_title) . ' &rarr; ' . $product->title;
        }
        else {
            $this->template->page_title = $product->title;
        }
        
        $this->template->title = $product->title;
        $this->template->block_center = array($content);
       ;
    }
}


