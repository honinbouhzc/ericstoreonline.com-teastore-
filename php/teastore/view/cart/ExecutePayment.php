<?php

namespace teastore\view\cart;

use \teastore\model\cart\Cart;

/**
 * Description of ExecutePayment
 *
 * @author Paul
 */
class ExecutePayment extends \teastore\view\cart\Cart {

    public function article() {

        $model = $this->model;
   /*     
        if ($this->error) {
            ?>
            <h2  class="container text-center page-heading"><?= $this->error ?></h2>
            <?php
        } else
    */
 
    
    
            $this->editable = false;
            $result = $this->controller->getPayment();
            
            if($result != null)
            {
            
            $payer = $this->controller->getPayer();

            $payment = $result->toArray();

            $payerInfo = $payer->toArray();
            ?>
         
            <h3  class="container text-center">Thank you <?= $payerInfo['first_name'] . " " . $payerInfo['last_name'] ?></h3>
            <h3 class="container text-center">for your purchase</h3>
            <div class="container text-center">PayPal ID <?= $payerInfo['payer_id'] ?></div>

            <?php
            /*
              PayPal ID QUWDL8LXSGTM2
              array(5) { ["email"]=> string(15) "abbie@payne.com" ["first_name"]=> string(5) "Abbie" ["last_name"]=> string(5) "Payne" ["payer_id"]=> string(13) "QUWDL8LXSGTM2" ["shipping_address"]=> array(6) { ["line1"]=> string(10) "23 Hole St" ["city"]=> string(8) "Universe" ["state"]=> string(3) "Nsw" ["postal_code"]=> string(4) "2345" ["country_code"]=> string(2) "AU" ["recipient_name"]=> string(12) "John Wheeler" } }
             */
            ?>
            <h4 class="container text-center">Shipping Address</h4>
            <div class="container">
                <div class="row">

                <div class="col-md-offset-5 col-md-2 col-sm-offset-0 col-sm-12"><?= $payerInfo["shipping_address"]["recipient_name"] ?></div> 
                </div>
                <div class="row">
                    <div class="col-md-offset-5 col-md-2 col-sm-offset-0 col-sm-12"><?= $payerInfo["shipping_address"]["line1"] ?></div>
                </div>
                <div class="row"> 

                    <div class="col-md-offset-5 col-md-2 col-sm-offset-0 col-sm-12"><?= $payerInfo["shipping_address"]["city"] ?></div> 
                </div>
                <div class="row">
                    <div class="col-md-offset-5 col-md-2 col-sm-offset-0 col-sm-12"><?= $payerInfo["shipping_address"]["postal_code"] . "   " . $payerInfo["shipping_address"]["state"] ?></div> 
                </div>
                <div class="row">
                    <div class="col-md-offset-5 col-md-2 col-sm-offset-0 col-sm-12"><?= $payerInfo["shipping_address"]["country_code"] ?></div> 
                </div>

            </div>
            <h4 class="container text-center">Receipt Numbers</h4>
            <div class="container">
                <div class="row col-md-6 col-md-offset-3">
                    <table  class="table table-striped"> 
                        <tr><td>Tea Store Online : </td><td style="text-align: left"><?= $this->controller->getPurchaseId() ?></td></tr>
                        <tr><td>PayPal : </td><td style="text-align: left"><?= $this->controller->getPayment()->getId() ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <h4 class="container text-center">Purchased Items</h4>
            <?php
            //       echo $payer;
            parent::displayCart($model);
        
        ?>
        <div class="container">
            <div class="row col-md-6 col-md-offset-3 text-center">     

                <a href='<?= PROJECT_URL . 'home' ?>'><button class="cart-button" type='button' >home</button></a>
            </div>

        </div>
        <?php
       }
       else
       {
           ?>
            <h3>transaction finished</h3>
            <?php
       }
    }
}
//put your code here

