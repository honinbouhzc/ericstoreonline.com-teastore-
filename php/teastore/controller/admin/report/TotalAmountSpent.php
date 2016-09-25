<?php
namespace teastore\controller\admin\report;

class TotalAmountSpent extends \teastore\controller\admin\Admin{
   
    public function __construct() {
        parent::__construct(); 
        
        $this->model = new \teastore\model\admin\report\TotalAmountSpent();
    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $TotalAmountSpent = new \teastore\view\admin\report\TotalAmountSpent($this);
// generate the HTML page
        $TotalAmountSpent->page();
    }

    public function getTitle() {
        return "Total Amount Spent by customers";
    }

}
