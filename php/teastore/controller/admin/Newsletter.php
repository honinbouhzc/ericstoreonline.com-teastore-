<?php
namespace teastore\controller\admin;

class Newsletter extends Admin{
    
    private $emailSent = false;
    private $email = 'zhchhan@gmail.com';

    public function __construct() {
        parent::__construct(); 
        
        $this->model = new \teastore\model\admin\Newsletter();
        
        $this->email();
    }

    public function generateOutput(){
// instaniate the view and give it a title and model
        $Users = new \teastore\view\admin\Newsletter($this);
// generate the HTML page
        $Users->page();
    }

    public function getTitle() {
        return "Newsletter";
    }

     public function email() {

        $mail = new \PHPMailer;
        
    
// Set PHPMailer to use the sendmail transport
        $mail->isMail();
//Set who the message is to be sent from
        $mail->setFrom($this->email, 'Zhichao Han');
        

//Set an alternative reply-to address
        $mail->addReplyTo($this->email, 'Zhichao Han');
        
        $mail->addAddress($this->email, "Zhichao Han");
//Set who the message is to be sent to
        $mail->addAddress($this->email, 'Zhichao');
        while($this->model->next()) {
        $mail->addAddress($this->model->getEmail(), $this->model->getName());
          }
//Set the subject line
        $mail->Subject = 'PHPMailer sendmail test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
        $mail->msgHTML("<p>Hi</p><p>Attached is this months tea product newsletter</p>");
//Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';
//Attach an image file

        $mail->addAttachment(NEWSLETTER . "newsletter.pdf");
     
//send the message, check for errors
        $this->emailSent = $mail->send();

    }


    public function isEmailSent()
    {
        return $this->emailSent;
    }   
    
}
