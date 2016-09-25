<?php
namespace teastore\controller\security;

class Register extends \teastore\controller\Controller{
   
    const FORM_USERNAME = 'un';
    const FORM_PASSWORD = 'pw';
    const FORM_PASSWORD_CONFIRMATION = 'pwc';
    const FORM_FIRST_NAME = 'fn';
    const FORM_LAST_NAME = 'ln';
    const FORM_EMAIL = 'em';
    const FORM_NEWSLETTER = 'ne';
    
    
    public function __construct() {
  
    }


    public function generateOutput() {
    
        $view = new \teastore\view\security\Register($this);
        $view->page();
    }

    
    public function getTitle() {
        return "Registration Form";
    }
    
}

?>
