<?php
namespace teastore\controller\admin\report;

class MonthlySales extends \teastore\controller\admin\Admin{
   
    public function __construct() {
        parent::__construct(); 
        
        $this->model = new \teastore\model\admin\report\MonthlySales();
    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $MonthlySales = new \teastore\view\admin\report\MonthlySales($this);
// generate the HTML page
        $MonthlySales->page();
    }

    public function getTitle() {
        return "Monthly Sales";
    }

}
