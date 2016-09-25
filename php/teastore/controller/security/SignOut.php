<?php
namespace teastore\controller\security;

class SignOut extends \teastore\controller\Controller{
   

    public function __construct() { 

          \teastore\model\security\SignIn::signOut();
          
        if(isset($_SERVER['HTTP_REFERER']))
        {
           header('Location:' . $_SERVER['HTTP_REFERER']);  
        }
        else
        {
           header('Location:' . PROJECT_URL  . 'home');    
        }

    }

    public function getTitle() {
        return "";
    }

    public function generateOutput() {

    }


}

?>
