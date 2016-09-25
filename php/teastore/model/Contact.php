<?php

namespace teastore\model;

class Contact extends \teastore\model\Model {

    private $successful = false ;
    
    public function __construct($name, $email,$subject, $message) {
        parent::__construct();
        
        
        
$query = "INSERT INTO messages set 
     name = :name,
     email = :email,
     subject = :subject,
     message = :message";

        $parameters = array(
            ':name' => $name,           
            ':email' => $email,
            ':subject' => $subject,
            ':message' => $message          
        );

        $this->prepare($query,$parameters);
        
        $this->successful = $this->getRowCount() == 1;
        

function isSuccessful()
{
    return $this->successful;
}
    
}

}
?>

