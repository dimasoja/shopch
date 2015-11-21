<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Корзина
 */
class Controller_Index_Cart extends Controller_Index {

    public function before()
    {
        parent::before();

        // Выводим в шаблон
        $this->template->block_left = null;
        $this->template->block_right = null;
    }

    public function action_index()
    {
         $products_s = $this->session->get('products');

        if ($products_s != NULL)
        {
            $products = ORM::factory('product');

            foreach($products_s as $id => $count)
            {
                $products->or_where('id', '=', $id);
            }

            $products = $products->find_all();
            //print_r($products[0]->id);

            // Формирование корзины
            $cart = array();
            $sum = 0;
            
            foreach ($products as $product)
            {
                $cart['products'][] = array(
                    'id' => $product->id,
                    'title' => $product->title,
                    'count' => $products_s[$product->id],
                    'cost' => $product->cost,
                );
                
                $sum += $product->cost * $products_s[$product->id];
            }
            
            $cart['sum'] = $sum;
            $this->session->set('sum', $sum);
        }
        else
        {
            $products = NULL;
        }

        $content = View::factory('index/cart/v_cart_index')
                ->bind('products', $cart['products'])
                ->bind('sum', $cart['sum']);
        

        // Выводим в шаблон
        $this->template->title = 'Ваша корзина';
        $this->template->page_title = 'Ваша корзина';
        $this->template->block_center = array($content);

    }
    
     public function action_add()
    {
        // Получить существующие товары из куков
        $products_s = $this->session->get('products');
        $id = $this->request->param('id');

        if (isset($products_s[$id]))
        {
            $products_s[$id]++;
        }
        else
        {
            $products_s[$id] = 1;
        }

        $this->session->set('products', $products_s);
        print_r($this->session->get('products'));
      // $this->request->redirect('cart');
       
    }

}