<?php
namespace teastore\controller\admin;

class ChangePassword extends Admin{
    
     private $emailSent = false;
     private $email = 'zhchhan@gmail.com';
   
    public function __construct($url) {
        parent::__construct(); 
        
        $id = $url[1];
        
        $p = new \teastore\model\admin\ChangePassword($id);
        
        $this->email($p->getEmail());
        
        $this->model = new \teastore\model\admin\Users();

    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $ChangePassword = new \teastore\view\admin\Users($this);
// generate the HTML page
        $ChangePassword->page();
    }

    public function getTitle() {
        return '';
    }
    
    public function email($email) {

        $mail = new \PHPMailer;
        
    
// Set PHPMailer to use the sendmail transport
        $mail->isMail();
//Set who the message is to be sent from
        $mail->setFrom($this->email, 'Zhichao Han');
        

//Set an alternative reply-to address
        $mail->addReplyTo($this->email, 'Zhichao Han');
        
        $mail->addAddress($this->email, "Zhichao Han");
//Set who the message is to be sent to
        $mail->addAddress($email, '');
     
//Set the subject line
        $mail->Subject = 'PHPMailer sendmail test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
        $mail->msgHTML("<p>Hi</p><p>Change your Password, please to xyz123</p>");
//Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';

//send the message, check for errors
        $this->emailSent = $mail->send();

    }

}
