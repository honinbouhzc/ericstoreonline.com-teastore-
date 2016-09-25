<?php
namespace teastore\controller\admin\report;

class ProductsInCartNotPaid extends \teastore\controller\admin\Admin{
   
    public function __construct() {
        parent::__construct(); 
        
        $this->model = new \teastore\model\admin\report\ProductsInCartNotPaid();
    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $ProductsInCartNotPaid = new \teastore\view\admin\report\ProductsInCartNotPaid($this);
// generate the HTML page
        $ProductsInCartNotPaid->page();
    }

    public function getTitle() {
        return "Products In Shopping Cart Not Paid For";
    }

}
