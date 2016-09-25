<?php
namespace teastore\model\admin;

class Users extends \teastore\model\Model{
    
    public function __construct() {
        parent::__construct();

        $query = "select id, first_name, last_name,email,newsletter, status,locked from users";
        $this->query($query);
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
    
    
    function isLocked(){
        return ($this->get('locked')== 0);
    }
}
