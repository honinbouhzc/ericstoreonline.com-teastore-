<?php
namespace teastore\controller\customer;

 abstract class Customer extends \teastore\controller\Controller{
   
    public function __construct() {
       if(!\teastore\model\security\SignIn::isSignedIn()){
           header('Location:' . PROJECT_URL . PAGE_NOT_FOUND);
           exit();
       }
    }

   
}
