<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM_MPTT {

    protected $_has_many = array(
        'products' => array(
            'model'   => 'product',
            'through' => 'products_categories',
        ),
    );
    
    public function rules()
    {
        return array(
            'c_title' => array(
                array('not_empty'),
            ),
        );
    }

    public function labels()
    {
        return array(
            'c_title' => 'Категория',
        );
    }

    public function filters()
    {
        return array(
            TRUE => array(
                array('trim'),
            ),
            'c_title' => array(
                array('strip_tags'),
            ),
        );
    }
    public function  count_prod_all(){
        
        $count=0;
        foreach ($this->children() as $ch)
        {
            $count=$count+$ch->products->count_all();
        }
        return $count;
    }
} 
