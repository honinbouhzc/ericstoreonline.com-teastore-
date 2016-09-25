<?php
namespace teastore\model\admin\report;

class OrderByName extends \teastore\model\Model{
    
    public function __construct() {
        parent::__construct();

        $query = "select purchased_items.product_id as `Product ID`,products.name as `Product Name` ,products.category_url as `Product Category`, purchased_items.purchased_quantity as`Quantity Ordered`,sum(products.price * purchased_items.purchased_quantity) as `Total Price Sold`
from purchased_items,products
where products.id = purchased_items.product_id 
group by purchased_items.product_id 
order by products.name asc";
        $this->query($query);
    }

    function getProductID() {
        return $this->get('Product ID');
    }
   
    function getProductName() {
        return $this->get('Product Name');
    }
    
    function getProductCategory() {
        return $this->get('Product Category');
    }
    
    function getQuantityOrdered() {
        return $this->get('Quantity Ordered');
    }
   
    function getTotalPriceSold() {
        return $this->get('Total Price Sold');
    }
    

   
}
