<?php
namespace teastore\controller\cart;

class Cart extends \teastore\controller\Controller{
        
    public function __construct($data)
    {
   
        
  // read the category url from the URL       
        $categoryURL = (isset($data[1]))?$data[1]:"";
        
        
        if($categoryURL === 'delete-all')
        {
            \teastore\model\cart\Cart::clearCart();
        }
    
    // read the product url from the URL         
        $productURL = (isset($data[2]))?$data[2]:"";
        
    // read the quantity from the URL    
        $quantity = (isset($data[3])&& is_numeric($data[3]))?intval($data[3]):1;
         
    // get the product details from the database and store in the session    
        $this->model = new \teastore\model\cart\Cart($categoryURL,$productURL,$quantity);
                   
    }
    
    public function generateOutput(){
            $this->view = new \teastore\view\cart\Cart($this);
            $this->view->page();
    }

    public function getTitle() {
        return "shopping cart";
    }

  public function isCheckout()
    {

      
      return false;
    }


}

?>