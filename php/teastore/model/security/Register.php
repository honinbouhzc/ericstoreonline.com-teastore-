<?php

namespace teastore\model\security;

class Register extends \teastore\model\Model {

    private $successful = false;
    
    public function __construct($username, $password, $firstName, $lastName, $email,$newsletter) {
        parent::__construct();
        
        // generate a unique salt 
        $salt = uniqid(mt_rand(), true);

        //hash it with sha256 to make 64 character
        $salt = hash('sha256', $salt);

        // concatenate the $passsword with the salt
        $saltedPassword = $password . $salt;
        
        // has the salted password
        $encryptedPassword = hash('sha256', $saltedPassword);

        // encrypt username
        $encryptedUsername = hash('sha256', $username);

        // test if the username is available
        $query = "select username from users where username = '$encryptedUsername'";
        
        $this->query($query);
        
        $this->next();

        if($this->getRowCount() != 0)
        {
            $this->setError("your username is not available");
            return;
        }
        
        $query = "INSERT INTO users set 
     username = :username,
     password = :password,
     salt = :salt,
     first_name = :first_name,
     last_name = :last_name,
     email = :email,
     newsletter = :newsletter";

        $parameters = array(
            ':username' => $encryptedUsername,
            ':password' => $encryptedPassword,
            ':salt' => $salt,
            ':first_name' => $firstName,
            ':last_name' => $lastName,
            ':email' => $email,
            ':newsletter' => ($newsletter)?1:0
        );

        $this->prepare($query, $parameters);
        
        $this->successful = $this->getRowCount() == 1;
        
        if(!$this->successful) $this->setError("Unable to register you at the moment. Please try again later.");
    }

function isSuccessful()
{
    return $this->successful;
}
    
}



?>
