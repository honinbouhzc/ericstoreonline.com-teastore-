<?php
namespace teastore\controller\security;

class SignIn extends \teastore\controller\Controller{
   
    const FORM_USERNAME = 'un';
    const FORM_PASSWORD = 'pw';
  
    public function __construct() {
       if(isset($_SERVER['HTTP_REFERER'])){
           $_SESSION['referer'] = $_SERVER['HTTP_REFERER'];
            
        }
    }

    public function getTitle() {
        return "Sign In Form";
    }

    public function generateOutput() {
        $view = new \teastore\view\security\SignIn($this);
        $view->page();
    }


}

?>
