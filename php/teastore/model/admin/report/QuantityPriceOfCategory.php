<?php
namespace teastore\model\admin\report;

class QuantityPriceOfCategory extends \teastore\model\Model{
    
    public function __construct() {
        parent::__construct();

        $query = "select products.category_url as `Product Category`, sum(purchased_items.purchased_quantity) as `Quantity Sold` , sum(purchased_price * purchased_quantity) as `Total Amount Sold` from products,purchased_items,purchases where products.id = purchased_items.product_id and purchased_items.purchases_id = purchases.id group by products.category_url order by sum(products.price * purchased_items.purchased_quantity)desc";
        $this->query($query);
    }

    function getProductCategory() {
        return $this->get('Product Category');
    }
   
    function getQuantitySold() {
        return $this->get('Quantity Sold');
    }
    
    function getTotalAmountSold() {
        return $this->get('Total Amount Sold');
    }
    
    function getMonthlyTotal() {
        return $this->get('Monthly Total');
    }
   
    

   
}
