<?php
namespace teastore\controller\admin\report;

class OrderByName extends \teastore\controller\admin\Admin{
   
    public function __construct() {
        parent::__construct(); 
        
        $this->model = new \teastore\model\admin\report\OrderByName();
    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $OrderByName = new \teastore\view\admin\report\OrderByName($this);
// generate the HTML page
        $OrderByName->page();
    }

    public function getTitle() {
        return "Order By Name";
    }

}
