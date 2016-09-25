<?php
namespace teastore\model\cart;



class Cart extends \teastore\model\Specifications {

    private $invoice;
    private $productKeys;
    private $productIndex = 0;
    private $currentKey = 0;
    protected $total = 0;
    private $instockExceeded = false;

    public function __construct($categoryURL, $productURL, $quantity) {
         
       parent::__construct($productURL);
       
      // create a key for the cart array assocaited with the product
       $productKey =   $productURL;

     // if quantity is zero delete product from the $_SESSION['cart]
     // else
       // add the quantity to the cart with the product
       if ($quantity === 0)
       {        
        unset($_SESSION['cart'][$productKey]);  
       } else if($this->isDataReturned())
       { 
        $_SESSION['cart'][$productKey] = $quantity;
       }
 
       $this->productKeys = array_keys(Cart::getCart());
    }

    public function nextProduct() {
        $this->currentKey = null;
        
        if (isset($this->productKeys[$this->productIndex])) {
            
            $this->currentKey = $this->productKeys[$this->productIndex];

         //   $url = explode('/',$this->currentKey);
            
              $this->prepareBind([':id'=> $this->currentKey]);

            $this->productIndex++;    
            
            if($this->next())
            {
            $this->total += $this->getSubtotal();
            $this->stockExceeded();
            return true;
            }
        }

        return false;
    }

    public function getSubtotal() {
        return $this->getQuantity() * $this->getPrice();
    }

    public function getFormattedSubtotal() {
        return number_format($this->getQuantity() * $this->getPrice(),2);
    }
    
    public function getQuantity() {
        return intval($_SESSION['cart'][$this->currentKey]);
    }

    public function getTotal() {
        return $this->total;
    }

    public function getFormattedTotal() {
        return number_format($this->total,2);
    }
    
    public function stockExceeded() {
 /*
        $exceeded = $this->getInStock() < $this->getQuantity();

        $this->instockExceeded |= $exceeded;
        
        if($exceeded) {
            $this->setError("a quantity in the cart exceeds the available stock");
        }
  * */
  
        return false;
    }

    public function cartExceedsStock() {
        return $this->instockExceeded;
    }

    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;
    }
       
    public function getInvoice()
    {
        return $this->invoice;
    }
 
  public function getProductCount() {
        return count($_SESSION['cart']);
    }   
  
  public static function createCart()
 {
      if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
 }   
    
 public static function getCartItemCount()
 {
     return array_sum($_SESSION['cart']);
 }
  
 public static function isCart()
 {
     return (self::getCartItemCount() > 0);
 }  
 
 public static function clearCart()
 {
    $_SESSION['cart'] = array();
 }
 
 public static function getCart()
 {
    return $_SESSION['cart'];
 }
 
 public static function setPurchaseId($id)
 {
   $_SESSION['cart_purchase_id'] = $id;  
 }
 
  public static function clearPurchaseId()
 {
     unset($_SESSION['cart_purchase_id']);  
 }
 
  public static function getPurchaseId()
 {
   return (isset($_SESSION['cart_purchase_id']))?$_SESSION['cart_purchase_id']:null;  
 }
 
  public static function setPaymentId($id)
 {
      $_SESSION['payment_id'] = $id;
 }
 
  public static function getPaymentId()
 {
   return isset($_SESSION['payment_id'])?$_SESSION['payment_id']:null;  
 }
}
?>
