<?php

namespace teastore\view\security;

class Register extends \teastore\view\View {

    public function article() {

        $ctrl = "teastore\controller\security\Register";
        ?>
        <article class="container" style="margin-bottom:100px;">
            <!-- Example row of columns -->
            <div class="row">  
                <div id="response" style="color:brown" ></div>
                <div class="col-md-offset-1 col-md-10">
                    <form action="/" id="registrationForm" novalidate="novalidate" class="form-horizontal" role="form">
                       <div class="form-group">
                            <div class="col-md-offset-2 col-md-8">
                             <input type="text" class="form-control"  name="<?= $ctrl::FORM_USERNAME ?>" pattern=".*" required="required" placeholder="Username">
                            </div>
			</div>
                        
                        <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="password" id="password1" class="form-control"  name="<?= $ctrl::FORM_PASSWORD ?>" pattern=".{3,20}" required="required" placeholder="Password">
					</div>
			</div>
                        
                        <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="password" id="password2" class="form-control"  name="<?= $ctrl::FORM_PASSWORD_CONFIRMATION ?>" pattern=".{3,20}" required="required" placeholder="Password Confirmation">
					</div>
			</div>
                        
                        <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" name="<?= $ctrl::FORM_FIRST_NAME ?>" pattern="[^0-9]+" required="required" placeholder="First Name">
					</div>
			</div>
                        
                         <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" name="<?= $ctrl::FORM_LAST_NAME ?>" pattern="[^0-9]+" required="required" placeholder="Last Name">
					</div>
			</div>
                        
                        <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="email" class="form-control" id="email" name="<?= $ctrl::FORM_EMAIL ?>" pattern=".+@.+\..+" required="required" placeholder="Email">
					</div>
			 </div>
                        
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-8">
                           <label>Newsletter<input type="checkbox" class="form-control"  name="<?= $ctrl::FORM_NEWSLETTER ?>" checked></label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-8">
                            <input type="submit" class="btn btn-theme btn-lg btn-block" placehold="SUBMIT">
                            </div>
                        </div>
                        
                    </form>
                </div>
                
    
            </div>
        </article>

        <script>
            // validate passwords
            function confirmation()
            {
        // set background color to white for the password fields         
                $('#password1').css('background-color', '#FFFFFF');
                $('#password2').css('background-color', '#FFFFFF');

        // read the password fields
                var password1 = $('#password1').val();
                var password2 = $('#password2').val();

        // test that both fields have values
                if (password1 && password2)
                {
                    // test if there is a difference between the two fields
                    if (password1 != password2)
                    {
                        $('#password1').css('background-color', '#FFC0C0').val('');
                        $('#password2').css('background-color', '#FFC0C0').val('');
                        $('#password1').focus();
                    }
                }
            }

            // register confirmation function as the on blur listener for the password fields       
            $('#password1').on('blur', confirmation);
            $('#password2').on('blur', confirmation);


        //*************************************************************************

            // attach a submit event handler to the form
            $("#registrationForm").submit(function(event) {

                // prevent the default operation
                event.preventDefault();

                // set all input fields background color to white 
                $('input').css("background-color", "#FFFFFF");
                // set any invalid fields background color to pink
                $('input:invalid').css('background-color', "#FFCCCC");
                // if any fields are invalid then send a warning message to the user                                                    
                if ($('input:invalid').length != 0)
                {
                    $("#response").css('color', "brown");
                    $("#response").empty().append("please correct the highlighted fields");
                }
                else
                {
                    // serialize the form data
                    var formData = $("#registrationForm").serialize();

                    console.log(formData);

                    // post the data to  register-response                        
                    var posting = $.post("<?= PROJECT_URL ?>register-response", formData);
                    // read the response from PHP code

                    posting.done(function(data) {
                        
                        try{
                        var response = JSON.parse(data);

                        var message = response.message;

                        if (response.success == 'yes')
                        {
                            $("#registrationForm").fadeOut(500);
                        }
                        else
                        {
                            $("#response").css('color', "brown");
                        }

                        $("#response").empty().append(message);
                    }catch(e)
                    {
                        $("#response").empty().append(data);
                    }   
                    });
                    
                }

            });

        </script>
        <?php
    }

}
?>
