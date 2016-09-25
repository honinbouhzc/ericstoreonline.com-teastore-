<?php
namespace teastore\controller\admin;

class ProductData extends Admin{
   
    public function __construct() {
        parent::__construct(); 
        
        $this->model = new \teastore\model\admin\ProductData();
    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $ProductData = new \teastore\view\admin\ProductData($this);
// generate the HTML page
        $ProductData->page();
    }

    public function getTitle() {
        return "Product Data";
    }

}


