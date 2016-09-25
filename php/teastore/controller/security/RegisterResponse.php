<?php
namespace teastore\controller\security;

class RegisterResponse extends \teastore\controller\Controller{
   
    
    public function __construct() {
                
        $username = filter_input(INPUT_POST,Register::FORM_USERNAME);
        $password = filter_input(INPUT_POST, Register::FORM_PASSWORD);
        $passwordConfirm= filter_input(INPUT_POST, Register::FORM_PASSWORD_CONFIRMATION);
        $email = filter_input(INPUT_POST, Register::FORM_EMAIL,FILTER_VALIDATE_EMAIL);
        $firstName = filter_input(INPUT_POST, Register::FORM_FIRST_NAME);
        $lastName = filter_input(INPUT_POST, Register::FORM_LAST_NAME);
        $newsletter = filter_input(INPUT_POST, Register::FORM_NEWSLETTER);
       
        // if $newletter is null then put false into newsletter
        $newsletter = !($newsletter == null);
        
        $validData = ($username && $password && $passwordConfirm && $email && $firstName && $lastName);
        
        if($validData)
        {
            $this->model = new \teastore\model\security\Register($username, $password, $firstName, $lastName, $email,$newsletter);
        } 
    else {
            $this->error = "Please complete all fields in the form.";
         }
    
    }

    public function getTitle() {

    }

    public function generateOutput() {
         $response = ['success' => 'yes','message'=>'thank you for registering'];
        
        if($this->getError())
        {
            $response['success'] = 'no';
            $response['message'] = $this->getError();
        }
        
        echo  json_encode($response);
    }

}

?>
