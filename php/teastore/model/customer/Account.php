<?php
namespace teastore\model\customer;

class Account extends \teastore\model\Model{
    
    public function __construct() {
        parent::__construct();
        $userId = \teastore\model\security\SignIn::getId();
        $query = "select id, first_name, last_name, email, newsletter, status,locked from users where id = $userId";
        $this->query($query);
        $this->next();
    }
    
    function getId(){
        return $this->get('id');
    }
    
    function getFirstName() {
        return $this->get('first_name');
    }
   
    function getLastName() {
        return $this->get('last_name');
    }
    
    function getEmail() {
        return $this->get('email');
    }

    function getStatus() {
        return $this->get('status');
    }
    
    function isNewsletter() {
        return ($this->get('newsletter') == 1);
    }
    
   
}
