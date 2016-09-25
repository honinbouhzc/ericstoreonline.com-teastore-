  <section id="spacer1" class="home-section spacer">	
           <div class="container">
               
				<div class="row">
                                    
                                   
					<div class="col-md-12">
                                                
						<div class="color-light">
                                                    <h2 class="wow bounceInDown" data-wow-delay="1s">Welcome to <a href="<?= PROJECT_URL ?>home">Tea Store</a></h2>
						<p class="lead wow bounceInUp" data-wow-delay="2s">
                                                    
                <?php if(\teastore\model\security\SignIn::isSignedIn()){
                    
                ?>
                <a href="<?= PROJECT_URL ?>sign-out">Sign out </a>|
                
                
                <?php if(\teastore\model\security\SignIn::isAdmin()){ ?>
                <a href="<?= PROJECT_URL ?>admin">My account</a>
               <?php }elseif (\teastore\model\security\SignIn::isSignedIn()) { ?>
                    <a href="<?= PROJECT_URL ?>my-account">My account</a>    
                   <?php } ?> 
                        
                        
                        
                    <?php if(teastore\model\cart\Cart::isCart()) { ?>              
                  <a href="<?= PROJECT_URL ?>cart">
               <div><img src="<?= IMAGE_URL ?>shop_cart.png" width="30px" border="0px solid red"/>
                    <?= teastore\model\cart\Cart::getCartItemCount() ?> items</div></a>               
              
               
               <?php } ?>
                <?php } else { ?>
                <a href="<?= PROJECT_URL ?>register">register </a>|
                <a href="<?= PROJECT_URL ?>sign-in">sign in</a>
               <?php } ?>
                                                 </p>	
						</div>
					</div>				
				</div>
			</div>	
	</section>	
