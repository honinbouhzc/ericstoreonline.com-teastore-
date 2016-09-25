<?php
namespace teastore\controller\admin\report;

class CustomState extends \teastore\controller\admin\Admin{
   
    public function __construct() {
        parent::__construct(); 
        
        $this->model = new \teastore\model\admin\report\CustomState();
    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $CustomState = new \teastore\view\admin\report\CustomState($this);
// generate the HTML page
        $CustomState->page();
    }

    public function getTitle() {
        return "Customers to a state";
    }

}
