<?php
namespace teastore\model\cart;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ExecutePayment
 *
 * @author Paul
 */
class ExecutePayment extends \teastore\model\cart\Cart{
    
    
    public function __construct($purchaseId,$PayPalId,$status) {
         parent::__construct('','',0);
         
        $query = 'update purchases set paypal_id=:paypal_id, status=:status where id = :id';
     
        $this->prepare($query,array(':paypal_id'=>$PayPalId,':status'=>$status,":id"=>$purchaseId));
        
         $query = "select products.id as id,name,image,description,url,category_url,instock,purchased_quantity,purchased_price from products join purchased_items on products.id=purchased_items.product_id where purchases_id = $purchaseId";
         
         $this->query($query);
        
    }
    public function nextProduct()
    {
      if($this->next())
      {
        $this->total += $this->getSubtotal();
        return true;     
        }
        return false;
    }
     
    public function getQuantity()
    {   
     return $this->get('purchased_quantity');
    }
   
   public function getPrice()
    {   
     return $this->get('purchased_price');
    }
    
    
}
