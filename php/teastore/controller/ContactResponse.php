<?php
namespace teastore\controller;

class ContactResponse extends \teastore\controller\Controller{
   
    
    public function __construct() {
                
        $name = filter_input(INPUT_POST,'name');      
        $email = filter_input(INPUT_POST, 'email');
        $subject = filter_input(INPUT_POST, 'subject');
        $message = filter_input(INPUT_POST, 'message');
       
        $this->model = new \teastore\model\Contact($name,$email,$subject,$message);
        
    }

    public function getTitle() {

    }

    public function generateOutput() {
       
      $contactresponse = ['success' => 'yes','message'=>'thank you for contacting us','url'=>PROJECT_URL . 'contact'];
      
      if($this->model->isError())
      {
          $contactresponse['success'] = 'no';
          $contactresponse['message'] = $this->model->getError();
      }

        echo  json_encode($contactresponse);
    }

}

?>
