<?php
namespace teastore\view;

class Home extends View{
    
    public function article() {
    
      ?>
			  
			  <section id="services" class="home-section bg-white">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					
					<p>China is the ancient birthplace of all tea. The culture of its tea production and consumption 
			has been dated back for more than 2000 years.There is vast range of Chinese tea, from the un-fermented 
			green tea to the fully fermented black tea. Call it passion or obsession, the Chinese tea drinkers accept 
			only the best.
			We unashamedly believe, and this is affirmed by many tea experts around the world, that China has only 
			the best to offer.<p>
					</div>
				  </div>
			  </div>

			  <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-thumbs-o-up fa-4x"></i>
                                                <h4>About Us</h4>
						<a class="btn btn-primary" href="<?= PROJECT_URL ?>info/about">Learn more</a>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-sitemap fa-4x"></i>
						<h4>Categories</h4>
			
						<a class="btn btn-primary" href="<?= PROJECT_URL ?>categories">Learn more</a>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-info-circle fa-4x"></i>
						<h4>Health Info</h4>					
						<a class="btn btn-primary" href="<?= PROJECT_URL ?>info/health-info">Learn more</a>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-mobile fa-4x"></i>
						<h4>Contact Us</h4>						
						<a class="btn btn-primary" href="<?= PROJECT_URL ?>info/contact">Learn more</a>
					</div>
                </div>
		 </div>
	</section>	 
	
	<section id="works" class="home-section bg-gray">
			<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Products</h2>
					 <p>Our emotions and state of mind can be flared at times and stress can be a controlling factor. The mind is associated with the heart and the emotion the heart harbours is joy. White tea can cool and regulate the fire of life and help control our emotions in the heat of stressful moments.

</p>
					</div>
				  </div>
			  </div>
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
					
					<ul class="lb-album">
						<li>
							<a href="#image-1">
								<img src="img/greentea/thumbnail/organicDragonWell.jpg" width="150" height="150" alt="Organic Dragon Well">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-1">
								<a href="#page" class="lb-close">X</a>
								<img src="img/greentea/organicDragonWell.jpg" alt="Organic Dragon Well" />
								<div>
									<h3>Organic Dragon Well <span>/Green Tea/</span></h3>
									<p>This variety is the most famous of all the green tea and is renowned for its flattened sword shaped early picked bud from the first flush of spring. It dates back to the late Ming Dynasty in Zhejiang Province being strongly influenced by an older variety from neighboring Anhui Province. Once produced for the Imperial consumption this tea has an emerald green colour, naturally sweet fragrance and nutty smooth taste. Also known as Long Jing.</p>
								</div>
								
							</div>
						</li>
						<li>
							<a href="#image-2">
								<img src="img/oolongtea/thumbnail/bigRedRobe.jpg" width="150" height="150" alt="Big Red Robe">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-2">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/oolongtea/bigRedRobe.jpg" alt="Big Red Robe" />
								<div>
									<h3>Big Red Robe <span>/Oolong Tea/</span></h3>
									<p>This variety has strong links to a Ming Dynasty Emperor who provided his royal robes to protect the four original plants that produced this famous variety. Over the centuries Big Red Robe has become one of the most famous and expensive tea in the world. It is renowned for it distinctive black twisted slender leaf and rich roasted aroma. A smooth wholesome taste closer to a high-grade early-picked black tea. Also known as Da Hong Pao.</p>
								</div>
								
							</div>
						</li>
						<li>
							<a href="#image-3">
								<img src="img/whitetea/thumbnail/silverNeedles.jpg"  width="150" height="150" alt="Silver Needles White Tea">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-3">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/whitetea/silverNeedles.jpg" alt="Silver Needles White Tea" />
								<div>
									<h3>Silver Needles  <span>/White Tea/</span></h3>
									<p>This variety is recognised as the premium variety of White Tea due to being comprised of only the early hand picked single bud adorned with tiny white downy hairs. A marvel to look at close up and when steeped in water it is a true spectacle of nature. The taste is very smooth and silky with a lingering sweet aftertaste. Also known as Bai Hao Yin Zhen.</p>
								</div>
								
							</div>
						</li>
						<li>
							<a href="#image-4">
								<img src="img/greentea/thumbnail/jasmine.jpg" width="150" height="150" alt="Jasmine Green Tea">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-4">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/greentea/jasmine.jpg" alt="Jasmine Green Tea" />
								<div>
									<h3>Jasmine  <span>/Green Tea/</span></h3>
									<p>This variety is a combination of jasmine flowers and green tea. One of the best-known blends that is typically served at Chinese restaurants. The uplifting scent of jasmine harmonises well with the tea providing a smooth and floral taste that has been a favourite since the Song Dynasty. This tea has no artificial essence added. Also known as Mo Li Hua Lu Cha.</p>
								</div>
								
							</div>
						</li>
						
						<li>
							<a href="#image-5">
								<img src="img/floweringtea/thumbnail/goldChrysanthemum.jpg" width="150" height="150" alt="Golden Chrysanthemum Flower">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-5">
								<a href="#page" class="lb-close">X</a>
								<img src="img/floweringtea/goldChrysanthemum.jpg" alt="Golden Chrysanthemum Flower" />
								<div>
									<h3>Golden Chrysan themum Flower <span>/Flowering Tea/</span></h3>
									<p>This brilliant golden flower is one of the most famous in China and was first cultivated as a herb around the fifteenth century BC. It is recognised for its cleansing and cooling nature helping assist the body rid toxic heat from the liver and clear congestion in the upper body. It is particularly beneficial for eye disharmonies. Also known as Jin Ju Hua.</p>
								</div>
								
							</div>
						</li>
						<li>
							<a href="#image-6">
								<img src="img/floweringtea/thumbnail/whiteChrysanthemum.jpg" width="150" height="150" alt="White Chrysanthemum Flower">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-6">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/floweringtea/whiteChrysanthemum.jpg" alt="White Chrysanthemum Flower" />
								<div>
									<h3>White Chrysan themum Flower <span>/Flowering Tea/</span></h3>
									<p>This flower is one of the most famous in China and was first cultivated as a herb around the fifteenth century BC. It is recognised for its cleansing and cooling nature helping assist the body rid toxic heat from the liver and clear congestion in the upper body. It is particularly beneficial for eye disharmonies. Also known as Gong Ju</p>
								</div>
								
							</div>
						</li>
						
						<li>
							<a href="#image-7">
								<img src="img/floweringtea/thumbnail/jasmineFlowerTea.jpg" width="150" height="150" alt="Jasmine Flower Tea">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-7">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/floweringtea/jasmineFlowerTea.jpg" alt="Jasmine Flower Tea" />
								<div>
									<h3>Jasmine Flower Tea <span>/Flowering Tea/</span></h3>
									<p>This variety is a combination of jasmine flowers and green tea. One of the best-known blends that is typically served at Chinese restaurants. The uplifting scent of jasmine harmonises well with the tea providing a smooth and floral taste that has been a favourite since the Song Dynasty. This tea has no artificial essence added. Also known as Mo Li Hua Lu Cha.</p>
								</div>
								
							</div>
						</li>
						
						<li>
							<a href="#image-8">
								<img src="img/floweringtea/thumbnail/roseFlowerTea.jpg" width="150" height="150" alt="Red Rosebud">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-8">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/floweringtea/roseFlowerTea.jpg" alt="Red Rosebud" />
								<div>
									<h3>Red Rosebud <span>/Flowering Tea/</span></h3>
									<p>Apart from being being visually appealing, the fragrance of rose can help enliven the senses and boost your vitamin intake. This particular variety is the highest grade possible. Used on its own or added to a green or black tea, rose certainly adds a nice touch for any occasion. Particularly good for blood nourishment and replenishment. Also known as Mei Gui Hua</p>
								</div>
								
							</div>
						</li>
					</ul>
					
					</div>
				</div>
			</div>
		</section>	
		
		<!-- spacer 2 -->	  
		<section id="spacer2" class="home-section spacer">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="color-light">
						<h2 class="wow bounceInDown" data-wow-delay="1s">Welcome to Tea store</h2>
						<p class="lead wow bounceInUp" data-wow-delay="2s"></p>
						</div>
					</div>				
				</div>
            </div>
		</section>
		
		<!-- About -->
	  <section id="about" class="home-section bg-white">
		<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>About us</h2>
					 <p>Since 2015, Tea Store has devoted their time establishing strong relationships with the finest
			tea producers from the famous tea regions of China.</p>
			<p>We are an Australian business established by Eric, a Chinese, who has been living in Sydney for 3 years. 
			Now he is devoted to introducing quality Chinese leaf teas to the fast evolving tastes of the Australian (and International) tea drinking community.<p>
			
					</div>
				  </div>
			  </div>
			  <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                    <img src="img/about/1.png" alt="" class="img-responsive" />
                   
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
					<div class="box-team wow bounceInDown">
                    <img src="img/about/2.jpg" alt="" width="512" height="512" class="img-responsive" />
                    
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
					<div class="box-team wow bounceInDown">
                    <img src="img/about/3.jpg" alt="" width="512" height="512" class="img-responsive" />
                    
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
					<div class="box-team wow bounceInDown">
                    <img src="img/about/4.jpg" alt="" class="img-responsive" />
                    
					</div>
                </div>
			  </div>
			<p>Our business is based out of Sydney in NSW and ships tea to all parts of NSW from our secure online website. We like to engage with our customers exhibiting our tea range at 
			three permanent farmers markets and many fairs, festivals and trade shows. There are regular tea tastings at our 
			location that helps customers understand and appreciate the huge depth and complexity of quality 
			Chinese tea varieties. Eric enjoys sharing his passion of tea with like-minded tea enthusiasts and tea novices 
			alike and always welcomes a conversation about this ancient and spectacular drink.</p>
		  </div>	  
	  </section>
	 
	 <!-- Contact -->
	  <section id="contact" class="home-section bg-gray">
	  	<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Contact us</h2>
					 <p>Contact via form below and we will be get in touch with you within 24 hours. </p>
					</div>
				  </div>
			  </div>

	  	        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                
                <div id='contactresponse'></div>

                <form class="form-horizontal" action="/" id="contactForm" novalidate="novalidate" role="form" >
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <input type="text" class="form-control" id="inputName" name='name' placeholder="Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <input type="email" class="form-control" id="inputEmail" name='email' placeholder="Email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <input type="text" class="form-control" id="inputSubject" name='subject' placeholder="Subject" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <textarea name="message" class="form-control" rows="3" name='message' placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <input type="submit" class="btn btn-theme btn-lg btn-block" />
                        </div>
                    </div>
                </form>
				</div>
            </div>
			<div class="row mar-top30 ">
				<div class="col-md-offset-2 col-md-8">
					<h5>We're on social networks</h5>
					<ul class="social-network">
						<li><a href="https://www.facebook.com/" target="_blank">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="https://www.youtube.com" target="_blank">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="twitter.com" target="_blank">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="https://au.pinterest.com/" target="_blank">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
					</ul>
				</div>				
			</div>

	  	</div>
	  </section>  


<?php
    }   
}


