<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Базовый класс главной страницы
 */
class Controller_Index_Authadmin extends Controller_Base {

    public $template = 'index/auth/v_auth_admin';
    
    public function before() {
        parent::before();
        
    }
     public function action_index()
    {
        $auth = Auth::instance();
        $this->template->auth = $auth;
        $this->template->user = $auth->get_user();
    }
    
     public function action_login_admin(){
         
          if (isset($_POST['submit'])){
            $data = Arr::extract($_POST, array('username', 'password', 'remember'));
            $status = Auth::instance()->login($data['username'], $data['password'], (bool) $data['remember']);
           
            if ($status){
               if( !Auth::instance()->logged_in('admin') )
               {
                     if(Auth::instance()->logout()) {
                             $this->request->redirect('authadmin');
        }
               }
               else {
                   $this->request->redirect('admin');
               }
            }
            else {
                $errors = array(Kohana::message('auth/user', 'no_user'));
            }
        }

     }
}