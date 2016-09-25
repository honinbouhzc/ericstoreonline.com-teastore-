<?php
namespace teastore\model\admin\report;

class QuantityOrderedLowest extends \teastore\model\Model{
    
    public function __construct() {
        parent::__construct();

        $query = "select purchased_items.product_id AS `Product ID`, 
            products.name AS `Product Name`, 
            sum(purchased_items.purchased_quantity)AS `Quantity Ordered`
from products,purchased_items
where purchased_items.product_id = products.id
group by purchased_items.product_id
order by purchased_items.purchased_quantity";
        $this->query($query);
    }

    function getProductID() {
        return $this->get('Product ID');
    }
   
    function getProductname() {
        return $this->get('Product Name');
    }
    
    function getQuantityOrder() {
        return $this->get('Quantity Ordered');
    }

   
}
