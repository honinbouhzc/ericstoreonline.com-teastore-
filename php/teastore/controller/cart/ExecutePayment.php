<?php
namespace teastore\controller\cart;

use Exception;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use \teastore\model\cart\Cart;
/**
 * Description of ExecutePayment
 *
 * @author Paul
 */
class ExecutePayment extends \teastore\controller\Controller {

    private $result = null;
    private $purchaseId = null;
    private $paymentId = null;

    public function __construct($url) {



        $success = filter_input(INPUT_GET, 'success');
        $payerId = filter_input(INPUT_GET, 'PayerID');
        $this->paymentId = filter_input(INPUT_GET, 'paymentId');

        if ($success == 'true' && $payerId && $this->paymentId) {
            try {

                // increase the default timout from 30 to 300 seconds
 //               \PayPal\Core\PPConfigManager::mergrDefaults(array("http.ConnectionTimeOut" => "300"));

                $sdkConfig = array("mode" => "sandbox");


                $cred = new \PayPal\Auth\OAuthTokenCredential("AWDrphDmjwQcRRPJEX2vHyIpODDBXpD6wWwH8CJ1fleKkv8HGFD1rQFiTyeC",
                "EG6l5RAhTuSjhLgjBWTpCQqyAO8jGORS0Jsdeow8ADk6VLMBvOub0kI-yxr1",$sdkConfig);
                //      $accessToken =  $cred->getAccessToken(array('mode'=>'sandbox'));
           //     $paymentId = Cart::getPaymentId();
 
//  $cred = filter_input(INPUT_GET,'token');  
//$cred = "Bearer A0150rExqCF5JItbkTtjZUaEYDpxB6taMZKkS8BcC6jkxSE";
                $apiContext = new \PayPal\Rest\ApiContext($cred, 'Request' . time());
                $apiContext->setConfig($sdkConfig);

// Get the payment Object by passing paymentId
                // payment id was previously stored in session in
                // CreatePaymentUsingPayPal.php

                $payment = Payment::get( $this->paymentId, $apiContext);
                
 //               echo "payment " . $payment . '<br/>';

                // PaymentExecution object includes information necessary 
                // to execute a PayPal account payment. 
                // The payer_id is added to the request query parameters
                // when the user is redirected from paypal back to your site

                $execution = new PaymentExecution();
                $execution->setPayerId($payerId);
 //               echo "execution " . $execution . '<br/>';
                //Execute the payment
                // (See bootstrap.php for more on `ApiContext`)
                $this->result = $payment->execute($execution, $apiContext);
                
                
                $this->model = new \teastore\model\cart\ExecutePayment(Cart::getPurchaseId(),$this->result->getId(),$this->result->getState());
   
                $this->purchaseId = Cart::getPurchaseId();
                
                Cart::clearPurchaseId();
                
                } catch (\PayPal\Exception\PPConnectionException $ex) {

                      //  $data = json_decode($ex->getData());

                       error_log($ex->getMessage());
                        
                      $this->error = "Transaction could not be completed";
                       
                    } catch (Exception $ex) {

                       error_log($ex->getMessage());
                       $this->error = "Transaction could not be completed"; 
                           
                    }
                } else {
                   $this->error =  "Payer cancelled payment.";
                }
                
                
            }

    public function generateOutput() {
                $this->view = new \teastore\view\cart\ExecutePayment($this);
                $this->view->page();
                if(isset($this->result))$this->close($this->result->getState());
            }

            public function getTitle() {
                return '';
            }

            public function getPayment() {
                return $this->result;
            }

            public function getPayPalPaymentId()
            {
               return $this->paymentId; 
            }
            
            public function getPurchaseId() {
                return $this->purchaseId;
            }
            
            public function getPayer() {
                return ($this->result)?$this->result->getPayer()->getPayerInfo():null;
            }

            public function close($status)
            {
                if($status == 'pending')
                {
                    $this->clearPurchaseId();                   
                }
                
                Cart::clearCart();
            }




}
        