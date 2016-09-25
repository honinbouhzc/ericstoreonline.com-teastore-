<?php
namespace teastore\model\admin\report;

class TotalAmountSpent extends \teastore\model\Model{
    
    public function __construct() {
        parent::__construct();

        $query = "select purchases.user_id as `Member ID`, users.first_name as `Member First Name`, users.last_name as `Member Last Name`, sum(purchased_items.purchased_price) AS `Total Amount Spent`, sum(purchased_items.purchased_quantity) as `Total Quantity Ordered`
from users, purchases,purchased_items
where users.id = purchases.user_id and purchases.id = purchased_items.purchases_id
group by purchases.user_id
order by sum(purchased_items.purchased_price) desc";
        $this->query($query);
    }

    function getMemberId() {
        return $this->get('Member ID');
    }
   
    function getMemberFirstName() {
        return $this->get('Member First Name');
    }
    
    function getMemberLastName() {
        return $this->get('Member Last Name');
    }
    
    function getTotalAmountSpent() {
        return $this->get('Total Amount Spent');
    }
    
    function getTotalQuantityOrdered() {
        return $this->get('Total Quantity Ordered');
    }
    
    

   
}
