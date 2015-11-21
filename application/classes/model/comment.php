<?php defined('SYSPATH') or die('No direct script access.');

class Model_Comment extends ORM {
    
    protected $_belongs_to = array(
        'product' => array(
            'model' => 'product',
            'foreign_key' => 'product_id',
        ),
    );
    
     public function labels()
    {
        return array(
            'name' => 'Автор',
            'text' => 'Текст отзыва',
            
        );
    }
    
    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
            ),
            
            'text' => array(
				array('not_empty'),
				array('min_length', array(':value', 25)),
				
			),
        );
        
    }
}
