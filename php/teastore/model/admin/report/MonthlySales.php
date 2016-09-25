<?php
namespace teastore\model\admin\report;

class MonthlySales extends \teastore\model\Model{
    
    public function __construct() {
        parent::__construct();

        $query = "select MONTHNAME(purchases.date) as`Month Number`,YEAR(purchases.date) as`Year`,count(purchases.date) as`Amount of Sales`,sum(purchased_items.purchased_price)as`Monthly Total`
from purchased_items,purchases
where purchases.id=purchased_items.purchases_id
group by MONTHNAME(purchases.date),YEAR(purchases.date)
order by YEAR(purchases.date)";
        $this->query($query);
    }

    function getMonthNumber() {
        return $this->get('Month Number');
    }
   
    function getYear() {
        return $this->get('Year');
    }
    
    function getAmountofSales() {
        return $this->get('Amount of Sales');
    }
    
    function getMonthlyTotal() {
        return $this->get('Monthly Total');
    }
   
    

   
}
