<article class="container" style="margin-bottom:50px;">
<h1>Contact Us</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.1639582130174!2d151.1089663157702!3d-33.91117952869235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ba5bf605df59%3A0xc98347c40d48cde2!2s21+Wonga+St%2C+Canterbury+NSW+2193!5e0!3m2!1sen!2sau!4v1465957496688" 
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <p> Australian address : 
        <address>  21 wonga st.<br />
            city: Canterbury  <br />
            postcode:2193 <br />
            State :NSW </address><br />
        phone :0410 233 099 <br />
        Email : zhchhan@gmail.com

        </p>




        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                
                <div id='contactresponse'></div>

                <form class="form-horizontal" action="/" id="contactForm" novalidate="novalidate" role="form" style="margin-top:50px;" >
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
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
					</ul>
				</div>				
			</div>
			<a href="<?= PROJECT_URL ?>home"><p style="margin-top:50px;">Return Home Page</p></a>
</article>
            <script>
                $("#contactForm").submit(function(event) {

                    console.log("herer");

                    // prevent the default operation
                    event.preventDefault();

                        // serialize the form data
                        var formData = $("#contactForm").serialize();

                        console.log(formData);

                        // post the data to  register-response                        
                        var posting = $.post("<?= PROJECT_URL ?>contact-response", formData);
                        // read the response from PHP code

                        posting.done(function(data) {

                            try {
                                var response = JSON.parse(data);

                                var message = response.message;

                                if (response.success == 'yes')
                                {
                                    $("#contactForm").fadeOut(500);
                                }
                                else
                                {
                                    $("#contactresponse").css('color', "brown");
                                }

                                $("#contactresponse").empty().append(message);
                            } catch (e)
                            {
                                $("#contactresponse").empty().append(data);
                            }
                        });



                });
            </script>                      
