<?php

namespace teastore\view\cart;

class Checkout extends Cart {

   public function article() {
        
        $this->editable = false;
        
     parent::article();        

       if (\teastore\model\cart\Cart::isCart()) {
        ?> 

<form action='/' id="checkout">
<div class="container">
    <div class="row"><div class="col-md-offset-4 col-md-4  text-center"><h2>postal address</h2></div></div>

                <div class="row">
                    <div  class="col-md-4 col-sm-3"></div>
                    <div class="form-group col-md-4">
                        <label>first name</label>  
                         <input value="Eric" class='form-control' type="text"  id="first_name" name="first_name" pattern="[a-zA-Z ]{1,20}" required>
                    </div>
                </div>

                <div class="row">
                    <div  class="col-md-4 col-sm-3"></div>
                    <div class="form-group col-md-4">
                        <label>last name</label>  
                         <input value="Han" class='form-control' type="text" id="last_name" name="last_name" pattern="[a-zA-Z ]{1,20}" required>
                    </div>
                </div>

                <div class="row">
                    <div  class="col-md-4 col-sm-3"></div>
                    <div class="form-group col-md-4">
                        <label>address</label>  
                         <input value="21 wonga st" class='form-control' type="text" id="address" name="address"  required>
                    </div>
                </div>

                <div class="row">
                    <div  class="col-md-4 col-sm-3"></div>
                    <div class="form-group col-md-4">
                        <label>city</label>  
                         <input value="Canterbury" class='form-control' type="text" id="city" name="city" pattern="[a-zA-Z]{1,20}" required>
                    </div>
                </div>

                <div class="row">
                    <div  class="col-md-4 col-sm-3"></div>
                    <div class="form-group col-md-4">
                        <label>postcode</label>  
                         <input value="2193" class='form-control' type="text" id="postcode" name="postcode" pattern="[a-zA-Z0-9]{1,8}" required>
                    </div>
                </div>
    
    
    
                <div class="row">
                    <div  class="col-md-4 col-sm-3"></div>
                    <div class="form-group col-md-4">
                        <label>state</label>  
                         <input value="NSW" class='form-control' type="text" id="postcode" name="state" pattern="[a-zA-Z0-9]{1,8}" required>
                    </div>
                </div>
    
    


              <div class="row">
                    <div  class="col-md-4 col-sm-3"></div>
                    <div class="form-group col-md-4">
                        <label>country</label>  
                         <input value="AU" class='form-control' type="text" id="country" name="country" pattern="[a-zA-Z]{1,20}" required>
                    </div>
                </div>



                    
 <!--           </fieldset>  -->
</div>
<div class="container" style="margin:2em 1em">
    <div class="row"><div class="col-md-offset-4 col-md-4  text-center"><h2>payment type</h2></div></div>
<div class="row">    
<div class="col-md-offset-4 col-md-4  text-center">
<div class='col-md-4 text-center'><input type="radio" name="payment_type" value="paypal" id='ppButton' checked >PayPal</input></div>
<div class='col-md-4 text-center'>or</div>
<div class='col-md-4 text-center'><input type="radio" name="payment_type" value="credit card"  id='ccButton'>Credit Card</input></div>
</div>
</div>
</div>



<div class='container' id='ccPanel' style="display:none;margin:2em 1em">
 <div class="row"><div class="col-md-offset-4 col-md-4  text-center"><h2>credit card details</h2></div></div>

              <div class="row">

                     
                      <div class="col-md-offset-4 col-md-4  text-center" style="margin-bottom:2em">
    <div class='col-md-5 text-center'><input type="radio" name="payment_type" value="mastercard" id='mastercard' checked >Matercard</input></div>
<div class='col-md-2 text-center'>or</div>
<div class='col-md-5 text-center'><input type="radio" name="payment_type" value="visa"  id='visa'>Visa</input></div>
</div>
                    </div>
              
                 <div class="row">
                    <div  class="col-md-4 col-sm-3"></div>
                    <div class="form-group col-md-4">
                        <label>first name</label>  
                         <input class='form-control' type="text" name="fname_cc" pattern="[a-zA-Z ]{1,50}" required>
                    </div>
                </div>
                  <div class="row">
                    <div  class="col-md-4 col-sm-3"></div>
                    <div class="form-group col-md-4">
                        <label>last name</label>  
                         <input class='form-control' type="text" name="lname_cc" pattern="[a-zA-Z ]{1,50}" required>
                    </div>
                </div>
                 <div class="row">
                    <div  class="col-md-4 col-sm-3"></div>
                    <div class="form-group col-md-4">
                        <label>card number</label>  
                         <input class='form-control' type="text" name="cc" pattern="\d{16}" required>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-md-4 col-sm-3"></div>
                    <div class="form-group col-md-1">
                        <label>cvv</label>  
                         <input class='form-control' type="text" name="cvv" pattern="^\d{3,4}$" required style='width:3em' required>
                    </div>
                    <div class="form-group col-md-2">
                        <label>expiry date : </label>
                        <div class="form-control">
                            <select name="month" id="month" type='switch'>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <select  name="year" id="year">
                                <?php
                                $currrentYear = (int)date("Y");

                                for ($i = 0; $i < 20; $i++) {
                                    $year = $currrentYear + $i;
                                    echo "<option value='$year'>$year</option>";
                                }
                                ?>
                            </select>
                        </div>
                        </div>
                </div>
</div>
  
<div class="container">
<div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="col-md-2"></div>
                        <a href='<?= PROJECT_URL . 'categories' ?>' class="btn btn-success col-md-3 text-center">continue</a>
                        <div class="col-md-2"></div>
                        <div id='makePayment' class="btn btn-success col-md-3 text-center" name='make payment'>make payment</div>
                        <div class="col-md-2"></div>
                    </div>
</div>
</div>

<div class="container">
    <div class="row">
        <div id="message" class="col-md-6 col-md-offset-3"></div>
    </div>
</div>
</form>

            <script>
        /*
        $('#ccButton').click(function (event){  
               $('#ccPanel').css('display','block');
        }
       );
        
              $('#ppButton').click(function (event){  
               $('#ccPanel').css('display','none');   
        }
       );  
        */
            $('#makePayment').on('click',
                    function(){

                        $(this).attr("disable","disable");
                       
                        data = $('#checkout').serialize();
                        
                        console.log(data);

                        $('#message').html("<div style='text-align:center'>saving cart to database, please wait</div>");

                        $.post('<?= PROJECT_URL ?>payment?x='+Math.random(),data,
                      
                            function(text){
                                try{
                                console.dir(text);
                                message =  JSON.parse(text);
                                console.dir(message);
                                if(message.href)
                                {
                                $('#message').html("<div style='text-align:center'>redirecting to PayPal</div>");    
                                location.href = message.href;
                                }
                                else
                                {
                                $('#message').html("<div style='text-align:center'>" + message.error + '</div>'); 
                                }
                            }catch(e)
                            {
                               $('#message').html(e);  
                            }
                        });
                                   
        });
                    
            </script>
        <?php      
        
       }
        
    }

}
