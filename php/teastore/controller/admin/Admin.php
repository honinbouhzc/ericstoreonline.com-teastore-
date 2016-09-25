<?php
namespace teastore\controller\admin;

 abstract class Admin extends \teastore\controller\Controller{
   
    public function __construct() {
       if(!\teastore\model\security\SignIn::isAdmin()){
           header('Location:' . PROJECT_URL . PAGE_NOT_FOUND);
           exit();
       }
    }

   
}
