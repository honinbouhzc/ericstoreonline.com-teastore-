<?php
namespace teastore\controller\admin;

class Users extends Admin{
   
    public function __construct() {
        parent::__construct(); 
        
        $this->model = new \teastore\model\admin\Users();
    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $Users = new \teastore\view\admin\Users($this);
// generate the HTML page
        $Users->page();
    }

    public function getTitle() {
        return "Users";
    }

}
