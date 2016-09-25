<?php
namespace teastore\controller\cart;

class Checkout extends \teastore\controller\Controller{
        
    public function __construct($data)
    {
   
         
    // get the product details from the database and store in the session    
        $this->model = new \teastore\model\cart\Cart("","",0);
                   
    }
    
    public function generateOutput(){
            $this->view = new \teastore\view\cart\Checkout($this);
            $this->view->page();
    }

    public function getTitle() {
        return "Check Out";
    }

}

?>