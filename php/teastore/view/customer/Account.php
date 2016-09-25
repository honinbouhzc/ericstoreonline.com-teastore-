<?php
namespace teastore\view\customer;

class Account extends \teastore\view\View{
    
    public function article() {
         $Account = $this->model;
        
        ?>
      
        <section class="col-md-4 col-sm-3"></section>
            <section class="col-md-4 col-sm-6 col-xs-12 text-center">          
               
                    
                <p>ID: <?= $Account->getId() ?></p>
                <p>First Name: <?= $Account->getFirstName() ?></p>
                <p>Last Name: <?= $Account->getLastName() ?></p>
               <p>Email Address:<?= $Account->getEmail() ?></p>
               <p>Status: <?= $Account->getStatus() ?></p>
            </section> 
        
        

   <?php
    }
}
