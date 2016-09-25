<?php
namespace teastore\controller\customer;

class Account extends Customer{
   
    public function __construct($url) {
       parent::__construct();   
 
     $this->model = new \teastore\model\customer\Account();
       
    }

    public function generateOutput() {
// instaniate the view and give it a title and model
        $Account = new \teastore\view\customer\Account($this);
// generate the HTML page
        $Account->page();
    }

    public function getTitle() {
        return "Hello," .  \teastore\model\security\SignIn::getName();
    }

}
