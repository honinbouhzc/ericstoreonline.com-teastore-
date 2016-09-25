<?php
namespace teastore\controller;

class Categories extends Controller{
   
    public function __construct() {
       $this->model = new \teastore\model\Categories();
      
    }

    public function generateOutput() {
// instaniate the view and give it a title and model
        $category = new \teastore\view\Categories($this);
// generate the HTML page
        $category->page();
    }

    public function getTitle() {
        return "Tea Categories";
    }

}
