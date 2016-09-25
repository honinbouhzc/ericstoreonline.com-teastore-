<?php
namespace teastore\model\admin\report;

class ProductsInCartNotPaid extends \teastore\model\Model{
    
    public function __construct() {
        parent::__construct();

        $query = "select products.id as `Product ID`, products.name as`Product Name`, purchased_items.purchased_quantity as `Quantity in Cart`,purchases.user_id as`Member` from products,purchases,purchased_items where products.id = purchased_items.product_id and purchases.id = purchased_items.purchases_id and purchases.status != 'approved'";
        $this->query($query);
    }

    function getProductId() {
        return $this->get('Product ID');
    }
   
    function getProductName() {
        return $this->get('Product Name');
    }
    
    function getQuantityinCart() {
        return $this->get('Quantity in Cart');
    }
    
    function getMember() {
        return $this->get('Member');
    }
   
    

   
}
