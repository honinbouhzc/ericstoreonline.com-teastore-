<?php
namespace teastore\controller\cart;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

use PayPal\Api\CreditCard;
use \teastore\model\cart\Cart;
use \teastore\model\cart\PayPalPayment;

/**
 * Description of Checkout
 *
 * @author ppayne
 */
class Payment extends \teastore\controller\Controller {

    public function __construct() {

// read payment type either paypal or credit card
        $fname = filter_input(INPUT_POST, 'first_name');
        $lname = filter_input(INPUT_POST, 'last_name');
        $address = filter_input(INPUT_POST, 'address');
        $city = filter_input(INPUT_POST, 'city');
        $postcode = filter_input(INPUT_POST, 'postcode');
        $country = filter_input(INPUT_POST, 'country');
        $state = filter_input(INPUT_POST, 'state');

        $paymentType = 'paypal';

// if there is no purchase id in the session then save the current cart to the database            

        
        
        if (!Cart::getPurchaseId()) {
            $this->payment = new \teastore\model\cart\Payment(\teastore\model\security\SignIn::getId(),$fname,$lname,$address,$city,$postcode,$state,$country);
            if (!$this->payment->isError()) {
                Cart::setPurchaseId($this->payment->getPurchaseId());
            }
        }
        // if we have a purchase ID proceed to PayPal

        if (Cart::getPurchaseId()) {
            
            if ($paymentType == 'paypal') {
                $this->PayPal = new PayPalPayment($fname,$lname,$address,$city,$state,$postcode,$country);
            }

            if ($paymentType == 'credit card') {
                $fname = filter_input(INPUT_POST, 'fname_cc');
                $lname = filter_input(INPUT_POST, 'lname_cc');
                $type = filter_input(INPUT_POST, 'type');
                $creditCardNumber = filter_input(INPUT_POST, 'cc');
                $cvv = filter_input(INPUT_POST, 'cvv');
                $month = filter_input(INPUT_POST, 'month');
                $year = filter_input(INPUT_POST, 'year');

                $validData = ($creditCardNumber && $cvv && $month && $year);


                if ($validData) {

                    $card = new CreditCard();
                    $card->setType($type)
                            ->setNumber($creditCardNumber)
                            ->setExpireMonth($month)
                            ->setExpireYear($year)
                            ->setCvv2($cvv)
                            ->setFirstName($fname)
                            ->setLastName($lname);

// TODO 
                    $this->PayPal = new \mvc\model\CreditCardPayment();
                }
            }

        } else {
            $this->error = $this->payment->getError();
            echo '{"error":"' . $this->error . '"}'; 
        }
        
       Cart::clearCart(); 

    }



    public function getTitle() {

        return "";
    }

    public function generateOutput() {
        
    }

}

?>
