<?php
namespace teastore\view\security;

class SignIn extends \teastore\view\View{
    
    public function article() {
        
        if(\teastore\model\security\SignIn::isSignedIn())
        {
          ?>   
        <div class="container">
            <!-- Example row of columns -->
            <div class="row">   
                <div class ="col-md-4 col-sm-3 col-xs-0"></div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">  
                    <div >You are signed in, <?= \teastore\model\security\SignIn::getName(); ?></div>
                </div>
            </div>
        </div>    
        <?php    
        }
        else
        {
        
        
        $ctrl = "teastore\controller\security\SignIn";
      
        ?>
      
        <article class="container" style="margin-bottom:100px;">
            <!-- Example row of columns -->
            <div class="row">   
                <div class="col-md-offset-1 col-md-10">

                    <form class="form-horizontal" role="form" action="/" id="signinForm">
                                <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" placeholder="username" name="<?= $ctrl::FORM_USERNAME ?>" required="required">
					</div>
				  </div>
                        
                                  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					 <input type="password" class="form-control" placeholder="password" name="<?= $ctrl::FORM_PASSWORD ?>" required="required">
					</div>
				  </div>
                        
                                  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					 <button type="submit" class="btn btn-theme btn-lg btn-block">Sign In</button>
					</div>
				  </div>  
                    </form>
      <!--          <div class ="col-md-4 col-sm-3 col-xs-0"></div>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">  
                    <div id="response"></div>
                    <form action="/" id="signinForm">    -->
<!--                   <form action="<?= PROJECT_URL ?>register" method="post"> -->
       <!--                 <div class="form-group">
                         <input type="text" class="form-control" placeholder="username" name="<?= $ctrl::FORM_USERNAME ?>" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="password" name="<?= $ctrl::FORM_PASSWORD ?>" required="required">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" >
                        </div>
                    </form>  -->
                </div>
            </div>
        </article>

<script>


      // attach a submit event handler to the form
                    $("#signinForm").submit(function(event){
                      
    // prevent the default operation
                        event.preventDefault();
    
    // serialize the form data
                        var formData = $("#signinForm").serialize();
    
    
    // post the data to  register-response                        
                        var posting = $.post("<?= PROJECT_URL ?>sign-in-response",formData);
                        // read the response from PHP code
                        
                        posting.done(function(data){
                            try{                         
                            var response = JSON.parse(data);

                            var message = response.message;

                            if(response.success == 'yes')
                                {
                                  
                                  open(response.url,"_self");
                                
                                }
                                else
                                {
                                  $("#response").css('color',"brown"); 
                                  $("#response").empty().append(message);
                                }
                                
                            
                            
                            }catch(e){
                              $("#response").empty().append(data); 
                            }
              
               });
               
 });
                  
</script>
    <?php
        }
    }
}

?>
