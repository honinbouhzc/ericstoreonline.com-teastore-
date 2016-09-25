<?php
namespace teastore\controller\admin\report;

class CustomerMessage extends \teastore\controller\admin\Admin{
   
    public function __construct() {
        parent::__construct(); 
        
        $this->model = new \teastore\model\admin\report\CustomerMessage();
    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $CustomerMessage = new \teastore\view\admin\report\CustomerMessage($this);
// generate the HTML page
        $CustomerMessage->page();
    }

    public function getTitle() {
        return "Customer Messages";
    }

}
