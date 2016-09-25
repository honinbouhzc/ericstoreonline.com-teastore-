<?php
namespace teastore\model\admin\report;

class CustomerMessage extends \teastore\model\Model{
    
    public function __construct() {
        parent::__construct();

        $query = "select name,email,subject,message from messages ";
        $this->query($query);
    }

    function getName() {
        return $this->get('name');
    }
   
    function getCustomerEmail() {
        return $this->get('email');
    }
    function getSubject() {
        return $this->get('subject');
    }
    function getMessage() {
        return $this->get('message');
    }
    

   
}
