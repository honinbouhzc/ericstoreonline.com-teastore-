<?php
namespace teastore\model\cart;

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ShippingAddress;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PayPalPayment
 *
 * @author ppayne
 */
class PayPalPayment extends Cart{
    
 private $payment = null;   
  
 public function __construct($fname,$lname,$address,$city,$state,$postcode,$country) {
    
    parent::__construct('','',0);
    
    $itemList = new ItemList();    
 

   while($this->nextProduct())
        {
            $item = new Item();

            $item->setName($this->getName())
	->setCurrency('USD')
	->setQuantity($this->getQuantity())
	->setPrice($this->getPrice())
                ->setSku($this->getId());
                      
            
            $itemList->addItem($item);            
        }
  
// this shipping address will appear once a personal account is logged into PayPal
   
$shipping_address = new ShippingAddress();

$shipping_address->setCity($city);
$shipping_address->setCountryCode($country);
$shipping_address->setPostalCode($postcode);
$shipping_address->setLine1($address);
$shipping_address->setState($state);
$shipping_address->setRecipientName($fname . " " . $lname);

$itemList->setShippingAddress($shipping_address);        
        
    
         $sdkConfig = array(
	"mode" => "sandbox"
);
   
try {         
         
 $cred = new \PayPal\Auth\OAuthTokenCredential("AWDrphDmjwQcRRPJEX2vHyIpODDBXpD6wWwH8CJ1fleKkv8HGFD1rQFiTyeC",
                "EG6l5RAhTuSjhLgjBWTpCQqyAO8jGORS0Jsdeow8ADk6VLMBvOub0kI-yxr1",$sdkConfig);
       
        
       $accessToken =  $cred->getAccessToken(array('mode'=>'sandbox'));
        
   //     $accessToken = $oa->getAccessToken(array('mode'=>'sandbox'));
        
  


//$cred = "Bearer A0150rExqCF5JItbkTtjZUaEYDpxB6taMZKkS8BcC6jkxSE";
$apiContext = new \PayPal\Rest\ApiContext($cred, 'Request' . time());
$apiContext->setConfig($sdkConfig);       
        
        
        
  // ### Additional payment details
// Use this optional field to set additional
// payment information such as tax, shipping
// charges etc.
$shipping = 2.50;
$tax = 1.30;
        
$details = new Details();
$details->setShipping($shipping)
	->setTax($tax)
	->setSubtotal($this->getTotal());      
        
 // ### Amount
// Lets you specify a payment amount.
// You can also specify additional details
// such as shipping, tax.
$amount = new Amount();
$amount->setCurrency("USD")
	->setTotal($shipping + $tax + $this->getTotal())
	->setDetails($details);       
  
// ### Payer
// A resource representing a Payer that funds a payment
// For paypal account payments, set payment method
// to 'paypal'.
$payer = new Payer();
$payer->setPaymentMethod("paypal");

// ### Transaction
// A transaction defines the contract of a
// payment - what is the payment for and who
// is fulfilling it. 
$transaction = new Transaction();
$transaction->setAmount($amount)
	->setItemList($itemList)
	->setDescription("payment id=" + Cart::getPurchaseId());
// ### Redirect urls
// Set the urls that the buyer must be redirected to after 
// payment approval/ cancellation.
$baseUrl = PROJECT_URL;
$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl($baseUrl . "execute-payment?success=true")
	->setCancelUrl($baseUrl . "execute-payment?success=false");

// ### Payment
// A Payment Resource; create one using
// the above types and intent set to 'sale'
$this->payment = new \PayPal\Api\Payment();
$this->payment->setIntent("sale")
	->setPayer($payer)
	->setRedirectUrls($redirectUrls)
	->setTransactions(array($transaction));

// ### Create Payment
// Create a payment by calling the 'create' method
// passing it a valid apiContext.
// (See bootstrap.php for more on `ApiContext`)
// The return object contains the state and the
// url to which the buyer must be redirected to
// for payment approval



	$this->payment->create($apiContext);
        
        
        
        
} catch (\PayPal\Exception\PayPalConnectionException $ex) {
 
             // get the data of the exception which gives feedback 
             // if PayPal does not like the format of the data sent or
             // finds inconsistencies in data eg total does not equal sum of subtotals plus tax 
             // 
             echo '{"exception":';
    
              echo $ex->getData();    

            // for debugging send back all the data sent by payment to PayPal
            // check the data is valid
    
             if($this->payment != null)
             {
                 echo ',"data sent":';
                 echo $this->payment->toJSON();
             }
              echo "}";
             
              exit();
    
              echo'{"error":"Unable to contact PayPal. Your cart has been saved. Please try again later."}';
	
              exit();
}

// ### Get redirect url
// The API response provides the url that you must redirect
// the buyer to. Retrieve the url from the $payment->getLinks()
// method
foreach($this->payment->getLinks() as $link) {

	if($link->getRel() == 'approval_url') {
                    $redirectUrl = $link->getHref();
		break;
	}
}

// ### Redirect buyer to PayPal website
// Save the payment id so that you can 'complete' the payment
// once the buyer approves the payment and is redirected
// back to your website.
//
// It is not a great idea to store the payment id
// in the session. In a real world app, you may want to 
// store the payment id in a database.

Cart::setPaymentId($this->payment->getId());

if(isset($redirectUrl)) {
        
//	header("Location: $redirectUrl");
 //              echo $redirectUrl;
 echo '{"href":"'. $redirectUrl . '"}';	
}
}

public function getPayPalPaymentId()
{
    return ($this->payment)?$this->payment->getId():'';
}

}


