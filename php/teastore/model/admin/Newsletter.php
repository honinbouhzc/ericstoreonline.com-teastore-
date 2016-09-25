<?php
namespace teastore\model\admin;

class Newsletter extends \teastore\model\Model{
    
    public function __construct() {
        parent::__construct();

        $query = "select email,first_name,last_name from users where newsletter = 1";
        $this->query($query);
    }
            
    function getEmail() {
        return $this->get('email');
    }
    
    function getName(){
        return $this->get('first_name')." ".$this->get('last_name');
    }
   
    
    function isNewsletter() {
        return ($this->get('newsletter') == 1);
    }

}
