<?php
namespace teastore\controller\admin\report;

class QuantityPriceOfCategory extends \teastore\controller\admin\Admin{
   
    public function __construct() {
        parent::__construct(); 
        
        $this->model = new \teastore\model\admin\report\QuantityPriceOfCategory();
    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $QuantityPriceOfCategory = new \teastore\view\admin\report\QuantityPriceOfCategory($this);
// generate the HTML page
        $QuantityPriceOfCategory->page();
    }

    public function getTitle() {
        return "Quantity and price of Categories";
    }

}
