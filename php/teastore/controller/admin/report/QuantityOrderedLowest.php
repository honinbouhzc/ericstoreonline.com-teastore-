<?php
namespace teastore\controller\admin\report;

class QuantityOrderedLowest extends \teastore\controller\admin\Admin{
   
    public function __construct() {
        parent::__construct(); 
        
        $this->model = new \teastore\model\admin\report\QuantityOrderedLowest();
    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $QuantityOrderedLowest = new \teastore\view\admin\report\QuantityOrderedLowest($this);
// generate the HTML page
        $QuantityOrderedLowest->page();
    }

    public function getTitle() {
        return "Quantity of Products Ordered by Lowest";
    }

}
