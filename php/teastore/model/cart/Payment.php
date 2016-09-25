<?php
namespace teastore\model\cart;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
use PDOException;
/**
 * Description of Checkout
 *
 * @author ppayne
 */
class Payment extends \teastore\model\Model{
    
    private $purchaseId = '';
    
    public function __construct($id,$fname,$lname,$address,$city,$postcode,$state,$country) {
        parent::__construct();
        
        try{
            
        $this->startTransaction();

        $query = "insert into purchases set name=:name,address=:address,city=:city,postcode=:postcode,state=:state,country=:country,user_id = $id";
        
        $this->prepare($query);
        
        $this->prepareBind(array(':name'=>$fname . " " . $lname,':address'=>$address,':city'=>$city,':postcode'=>$postcode,':state'=>$state,':country'=>$country));
        
        if($this->isError()) throw new PDOException();
      
        $this->purchaseId = $this->getLastId();
  
         
        foreach(\teastore\model\cart\Cart::getCart() as $pid => $quantity)
        {
  /*          $url = explode('/',$pid);
            
            $categoryURL = $url[0];
            $productURL = $url[1];
 */           

            $query =  "select id,price from products where url = '$pid'";
            $this->query($query);
            if($this->isError()) throw new PDOException();
                  
            $this->next();
            
            $productId = $this->get('id');
            $productPrice = $this->get('price');
             
            $updateStock = "update products set instock = instock - $quantity where id = $productId";
            
            $this->execute($updateStock);
            
            $insert = "insert into purchased_items set purchases_id=$this->purchaseId, product_id=$productId,purchased_price=$productPrice,purchased_quantity=$quantity";
            
            $this->execute($insert);
            if($this->isError()) throw new PDOException();
        }
               
        $this->commit();
        }catch(PDOException $ex)
        {
            error_log($ex->getMessage());
            $this->purchaseId = '';
 //           $this->setError("unable to finalize purchase.");
 //           $this->setError($ex->getMessage());
            $this->rollBack();
        }
    }
        
    public function getPurchaseId()
    {
        return $this->purchaseId;
    }
}

?>
