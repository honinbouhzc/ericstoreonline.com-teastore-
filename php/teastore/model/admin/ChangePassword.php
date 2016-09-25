<?php
namespace teastore\model\admin;

class ChangePassword extends \teastore\model\Model{
    
    private $email = '';
    
    public function __construct($userId) {
        parent::__construct();

        
        $query = "select email, salt from users where id = $userId";
        $this->query($query);
        $this->next();
        $salt = $this->get('salt');
        $this->email = $this->get('email');
        // concatenate the $passsword with the salt
        $saltedPassword = 'xyz123' . $salt;
        
        // has the salted password
        $encryptedPassword = hash('sha256', $saltedPassword);
        
         $query  = "update users set password = '$encryptedPassword' where id = $userId";
            
         $this->execute($query);
        
    }
   
    
    
    function getEmail() {
             return $this->email;
            }
        

    
    
}