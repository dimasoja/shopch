<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Пользователи
 */
class Controller_Admin_Products extends Controller_Admin {

    public function before() {
        parent::before();
        $this->template->scripts[] = 'media/js/jquery.MultiFile.pack.js';
        $this->template->scripts[] = 'media/js/upload.js';
        $this->template->scripts[] = 'media/js/jquery-min.js';
        $this->template->scripts[] = 'media/js/jquery.cookie.js';
        $this->template->scripts[] = 'media/js/jquery.jstree.js';
        $this->template->styles[] = 'media/css/styletree.css';

        // Вывод в шаблон
        $this->template->submenu = Request::factory('widgets/menuproducts')->execute();
        
    }

    public function action_index() {
       
        $cat_tree = Request::factory('widgets/categortree')->execute();
      
        
        $categories = ORM::factory('category')->where('lvl', '=', 1)->find_all()->as_array();

        $cats = array();
        $p_cats = array();
        foreach ($categories as $cat){
            $cats[$cat->id] = $cat->c_title;
        }
        
       
        $product = ORM::factory('product');
         $count = $product->count_all();
         $pagination = Pagination::factory(array(
            'total_items' => $count,
       ))->route_params(array(
            'controller' => Request::current()->controller(),
            'action' => Request::current()->action(),
            
        ));
         $products = $product->limit($pagination->items_per_page)
                    ->offset($pagination->offset)
                    ->find_all();
       
        
        $poducts_cats=array();
        foreach ($products as $prod){
             $data=array();
             $data['title'] = $prod->title;
             $data['popular'] = $prod->popular;
             $data['cost'] = $prod->cost;
             $data['image_id'] = $prod->image_id;
             $cat=$prod->categories->find_all()->as_array();
             if ($cat){
             if($cat[0]->lvl==1){
                 $data['cat']=$cat[0]->c_title;
                 $data['pod_cat']=' not';
             }
             else{
               $data['pod_cat']=$cat[0]->c_title;  
               $parent_cat = ORM::factory('category', $cat[0]->parent_id);
               $data['cat']=$parent_cat->c_title;
             }
             
        }
        else{
            $data['cat']='not';
                 $data['pod_cat']=' not';
        }
        $poducts_cats[$prod->id]=$data;
        }
        
             
   
         
        $content = View::factory('admin/products/v_products_index', array(
            'poducts_cats' =>$poducts_cats,
            'p_cats' => $p_cats,
            'cats' => $cats,
            'products' => $products,
            'pagination' => $pagination,
            'cat_tree'=>$cat_tree,
           
         ));
        // Вывод в шаблон
        $this->template->page_title = 'Товары';
        $this->template->block_center = array($content);
    }
    
    public function action_catprod(){
        
        $cat_tree = Request::factory('widgets/categortree')->execute();
        $id = (int) $this->request->param('id');
        $count = DB::query(Database::SELECT, 'SELECT * FROM (SELECT * FROM '
                . 'categories join products_categories on categories.id = products_categories.category_id  '
                . 'WHERE categories.id = :id or categories.parent_id = :id ) '
                . 'as tmp join products on tmp.product_id = products.id ')
                 ->param(':id', $id)
                 ->execute() ;
        
         $pagination = Pagination::factory(array(
            'total_items' => $count->count(),
       ))->route_params(array(
            'controller' => Request::current()->controller(),
            'action' => Request::current()->action(),
            'id' => (int) $this->request->param('id'),
        ));
         $query = DB::query(Database::SELECT, 'SELECT * FROM (SELECT * FROM '
                . 'categories join products_categories on categories.id = products_categories.category_id  '
                . 'WHERE categories.id = :id or categories.parent_id = :id ) '
                . 'as tmp join products on tmp.product_id = products.id '
                 . 'LIMIT :items_per_page  OFFSET :ofset')
                 ->parameters(array(':items_per_page' => $pagination->items_per_page,
                    ':ofset' =>  $pagination->offset,
                     ':id' => $id,))
                 ->execute() ;
         
        $poducts_cats=array();
        foreach ($query as $prod){
             $data=array();
             $data['title'] = $prod['title'];
             $data['cost'] = $prod['cost'];
             $data['image_id'] = $prod['image_id'];
             $data['popular'] = $prod['popular'];
            
           
             if($prod['lvl']==1){
                 $data['cat']=$prod['c_title'];
                 $data['pod_cat']=' not';
             }
             else{
               $data['pod_cat']=$prod['c_title'];  
               $parent_cat = ORM::factory('category', $prod['parent_id']);
               $data['cat']=$parent_cat->c_title;
             }
             $poducts_cats[$prod['id']]=$data;
        }
        
        $p_cats=null;
        $cats=null;
        $products=null;
       
       
            $content = View::factory('admin/products/v_products_index', array(
            'poducts_cats' =>$poducts_cats,
            'p_cats' => $p_cats,
            'cats' => $cats,
            'products' => $products,
            'pagination' => $pagination,
            'cat_tree'=>$cat_tree,
            
         ));
        // Вывод в шаблон
        $this->template->page_title = 'Товары';
        $this->template->block_center = array($content);
        
    }


    public function action_add() {
        //Получение категорий
         $categories = ORM::factory('category')->where('lvl', '=', 1)
                ->order_by('scope', 'ASC')
                ->order_by('lft', 'ASC')
                ->find_all();
        $cats = array();
         if ($categories){
       // $i= reset($categories);
        $getcat = $categories[0]->id;
        }
        foreach ($categories as $cat){
            $cats[$cat->id] = $cat->c_title;
        }
        
        $pod_cat = $categories[0]->children();
        foreach ($pod_cat as $cat){
            $pod_cats[$cat->id] = $cat->c_title;
        }
       

        if (isset($_POST['submit']))
        {
             // Работа с товаром
            $cat = Arr::get($_POST, 'cat');
            $categories = ORM::factory('category')->where('id', '=', $cat)->find();
            
            if ($categories->has_children()){
                $cat = Arr::get($_POST, 'pod_cat');
            }
            
             $data = Arr::extract($_POST, array('title', 'description', 'cost', 'status', 'cat'));
            $products = ORM::factory('product');
            $products->values($data);


            try {
                $products->save();
               
               $products->add('categories', $cat);
                // Работа с изображениями
                if (!empty($_FILES['images']['name'][0]))
                {
                    foreach ($_FILES['images']['tmp_name'] as $image)
                    {
                        $filename = $this->_upload_img($image);

                        // Запись в БД
                        $im_db = ORM::factory('image');
                        $im_db->product_id = $products->pk();
                        $im_db->name = $filename;
                        $im_db->save();

                        $p_db = ORM::factory('product', $products->pk());
                        if ($p_db->image_id == 0){
                            $p_db->image_id = $im_db->pk();
                            $p_db->save();
                        }
                    }
                }

                $this->request->redirect('admin/products/edit/' . $products->pk());
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }


        }

        $content = View::factory('admin/products/v_products_add')
                ->bind('errors', $errors)
                ->bind('cats', $cats)
                ->bind('data', $data)
                ->bind('pod_cats', $pod_cats)
                ->bind('getcat', $getcat);

        // Вывод в шаблон
        $this->template->page_title = 'Товары :: Добавить';
        $this->template->block_center = array($content);
    }
    
    
    public function action_edit() {
        $id = (int) $this->request->param('id');
        $products = ORM::factory('product', $id);

        if(!$products->loaded()) {
            $this->request->redirect('admin/products');
        }

        //Получение категорий
         $categories = ORM::factory('category')->where('lvl', '=', 1)
                ->order_by('scope', 'ASC')
                ->order_by('lft', 'ASC')
                ->find_all();

        $cats = array();
        $data = $products->as_array();
        $data['cat'] = $products->categories->find_all()->as_array();
        $getcat=null;
        if ($data['cat']){
        if($data['cat'][0]->lvl==1)
        {
            $getcat = $data['cat'][0]->id;
        }
        else {
            $getcat = $data['cat'][0]->parent_id;
        }
        }
        foreach ($categories as $cat){
           
                $cats[$cat->id] = $cat->c_title;
           
        }
        
         $pod_cat = $categories[0]->children();
        foreach ($pod_cat as $cat){
            $pod_cats[$cat->id] = $cat->c_title;
        }

        
        
        $data['images'] = $products->images->find_all()->as_array();


        // Редактирование
        if (isset($_POST['submit'])) {

            // Работа с товаром
            $data = Arr::extract($_POST, array('title', 'description', 'cost', 'status', 'popular', 'pod_cat'));
            $products->values($data);

            try {
                $products->save();
                $products->remove('categories');
                $products->add('categories', $data['pod_cat']);

                // Работа с изображениями
                if (!empty($_FILES['images']['name'][0]))
                {
                    foreach ($_FILES['images']['tmp_name'] as $i => $image)
                    {
                        $filename = $this->_upload_img($image);

                        // Запись в БД
                        $im_db = ORM::factory('image');
                        $im_db->product_id = $products->pk();
                        $im_db->name = $filename;
                        $im_db->save();

                        $p_db = ORM::factory('product', $products->pk());
                        if ($p_db->image_id == 0){
                            $p_db->image_id = $im_db->pk();
                            $p_db->save();
                        }
                    }
                }

                $this->request->redirect('admin/products/edit/' . $products->pk());
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }
        }

        $content = View::factory('admin/products/v_products_edit')
                ->bind('id', $id)
                ->bind('errors', $errors)
                ->bind('cats', $cats)
                ->bind('pod_cats', $pod_cats)
                ->bind('getcat', $getcat)
                ->bind('data', $data);
                    

        // Вывод в шаблон
        $this->template->page_title = 'Товары :: Редактировать';
        $this->template->block_center = array($content);
    }
    
    public function action_img(){
        $this->template->submenu=null;
        $this->template->menu_admin=null;
        $id = (int) $this->request->param('id');
        $products = ORM::factory('product', $id);
        $title = $products->title;
        $data = $products->as_array();
        $data['images'] = $products->images->find_all()->as_array();
        if (isset($_POST['submit'])) {
        try {
               
                if (!empty($_FILES['images']['name'][0]))
                {
                    foreach ($_FILES['images']['tmp_name'] as $image)
                    {
                        $filename = $this->_upload_img($image);

                        // Запись в БД
                        $im_db = ORM::factory('image');
                        $im_db->product_id = $id;
                        $im_db->name = $filename;
                        $im_db->save();

                        $p_db = ORM::factory('product', $products->pk());
                        if ($p_db->image_id == 0){
                            $p_db->image_id = $im_db->pk();
                            $p_db->save();
                        }
                    }
                }

                $this->request->redirect('admin/products/img/' . $id);
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }
        }
         $content = View::factory('admin/products/v_product_img')
                ->bind('id', $id)
                ->bind('errors', $errors)
                 ->bind('title', $title)
                ->bind('data', $data);
                    

        // Вывод в шаблон
      //  $this->template->page_title = 'Товары :: Редактировать';
        $this->template->block_center = array($content);
    }
  
       // Удалить изображение
    public function action_delimg() {
        $id = (int) $this->request->param('id');
        $images = ORM::factory('image', $id);
        $product_id = $images->product_id;
        
        if(!$images->loaded()) {
            $this->request->redirect('admin/products');
        }

        $p_db = ORM::factory('product', $product_id);
        if ($p_db->image_id == $id){
            $p_db->image_id = 0;
            $p_db->save();
        }

        $images->delete();
        $this->request->redirect('admin/products/edit/' . $product_id);
    }
    
  public function action_delete() {
        $id = (int) $this->request->param('id');
        $products = ORM::factory('product', $id);

        if(!$products->loaded()) {
            $this->request->redirect('admin/products');
        }

        $products->delete();
        $this->request->redirect('admin/products');
    }
    
    public function _upload_img($file, $ext = NULL, $directory = NULL){

        if($directory == NULL)
        {
            $directory = 'media/uploads';
        }

        if($ext== NULL)
        {
            $ext= 'jpg';
        }

        // Генерируем случайное название
        $symbols = '0123456789abcdefghijklmnopqrstuvwxyz';
        $filename = substr(str_shuffle($symbols), 0, 16);

        // Изменение размера и загрузка изображения
        $im = Image::factory($file);

        if($im->width > 150)
        {
            $im->resize(150);
            
        }
        $im->save("$directory/small_$filename.$ext");

        $im = Image::factory($file);
        $im->save("$directory/$filename.$ext");

        return "$filename.$ext";
    }
}