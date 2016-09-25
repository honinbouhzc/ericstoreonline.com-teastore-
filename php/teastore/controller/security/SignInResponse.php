<?php
namespace teastore\controller\security;

class SignInResponse extends \teastore\controller\Controller{
   
    public function __construct() {
                
        $username = filter_input(INPUT_POST,SignIn::FORM_USERNAME);
        $password = filter_input(INPUT_POST, SignIn::FORM_PASSWORD);
        
        $validData = ($username && $password );
        
        if($validData)
        {
            $this->model = new \teastore\model\security\SignIn($username, $password);
        } 
    else {
            $this->error = "Please complete all fields in the form.";
         }
    }

    public function getTitle() {

    }

    public function generateOutput() {

         $response = ['success' => 'yes','message'=>'thank you for signing in','url'=>PROJECT_URL . 'sign-in'];
        
         if(\teastore\model\security\SignIn::isAdmin())
         {
             $response['url'] = PROJECT_URL .'admin';
         } else if (\teastore\model\security\SignIn::isSignedIn()){
             $response['url'] = PROJECT_URL .'my-account';
         }
         
         
         
        if(isset($_SESSION['referer']))
        {
            $response['url'] = $_SESSION['referer'];
            unset($_SESSION['referer']);
        }
         
         
        if($this->getError())
        {
            $response['success'] = 'no';
            $response['message'] = $this->getError();
        }
        
        echo  json_encode($response);
    }
   
    
    
}

?>
