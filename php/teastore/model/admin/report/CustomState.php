<?php
namespace teastore\model\admin\report;

class CustomState extends \teastore\model\Model{
    
    public function __construct() {
        parent::__construct();

        $query = "select state,count(*) as `Number of Customers`
from purchases
group by state
order by count(*)";
        $this->query($query);
    }

    function getState() {
        return $this->get('state');
    }
   
    function getNumberofCustomers() {
        return $this->get('Number of Customers');
    }
    
    

   
}
