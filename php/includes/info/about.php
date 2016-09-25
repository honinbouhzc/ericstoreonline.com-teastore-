<article class="container">
 <h1>About Us</h1>
<section id="about" class="home-section bg-white">
		<div class="container">
                    
			  <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="box-team wow bounceInDown" data-wow-delay="0.1s">
            <img src="<?= IMAGE_URL ?>about/1.png" width="512" height="512" alt="" class="img-responsive" style="border:1px solid #ccc;" />
                    
		</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
					<div class="box-team wow bounceInDown">
                    <img src="<?= IMAGE_URL ?>about/2.jpg" width="512" height="512" alt="" class="img-responsive" style="border:1px solid #ccc;" />
                   
		</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
					<div class="box-team wow bounceInDown">
                    <img src="<?= IMAGE_URL ?>about/3.jpg" width="512" height="512" alt="" class="img-responsive" style="border:1px solid #ccc;"/>
                    
		</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
					<div class="box-team wow bounceInDown">
                    <img src="<?= IMAGE_URL ?>about/4.jpg" width="512" height="512" alt="" class="img-responsive" style="border:1px solid #ccc;" />
                  
		</div>
                </div>
			  </div>			  
		  </div>	  
	 <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <p>Since 2015, Tea Store has devoted their time establishing strong relationships with the finest
			tea producers from the famous tea regions of China.</p>
			<p>We are an Australian business established by Eric, a Chinese, who has been living in Sydney for 3 years. 
			Now he is devoted to introducing quality Chinese leaf teas to the fast evolving tastes of the Australian (and International) tea drinking community.<p>
			<p>Our business is based out of Sydney in NSW and ships tea to all parts of NSW from our secure online website. We like to engage with our customers exhibiting our tea range at 
			three permanent farmers markets and many fairs, festivals and trade shows. There are regular tea tastings at our 
			location that helps customers understand and appreciate the huge depth and complexity of quality 
			Chinese tea varieties. Eric enjoys sharing his passion of tea with like-minded tea enthusiasts and tea novices 
			alike and always welcomes a conversation about this ancient and spectacular drink.</p>
					</div>
				  </div>
			  </div>
			<a href="<?= PROJECT_URL ?>home"><p>Return Home Page</p></a>
</article> 
<script>
  $('#about div img').hover(
    function(){
    $(this).addClass('active');
    },
    function(){
    $(this).removeClass('active');    
    }
  );


</script>