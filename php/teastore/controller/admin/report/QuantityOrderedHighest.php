<?php
namespace teastore\controller\admin\report;

class QuantityOrderedHighest extends \teastore\controller\admin\Admin{
   
    public function __construct() {
        parent::__construct(); 
        
        $this->model = new \teastore\model\admin\report\QuantityOrderedHighest();
    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $QuantityOrderedHighest = new \teastore\view\admin\report\QuantityOrderedHighest($this);
// generate the HTML page
        $QuantityOrderedHighest->page();
    }

    public function getTitle() {
        return "Quantity of Products Ordered by Highest";
    }

}
