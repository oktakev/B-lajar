<!--<div class="probootstrap-loader"></div>-->
			<?php
				include'header.php';
			?>
			
			<!-- start banner Area -->

			<section class="banner-area relative" id="home">

				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-end">
						<div class="banner-content col-lg-7 col-md-12">
							<h4>B-lajar for a better future</h4>
							<h1>
								Be smart people with B-Lajar					
							</h1>
							<p>
								B-Lajar corporation
							</p>
							<a href="login/login_siswa.php" class="primary-btn header-btn text-uppercase">Study Now</a>
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start info Area -->
				<section class="brand-area">
					<div class="container">
						<div class="row logo-wrap">
							<div class="col-lg-8">
							<img class="img-fluid" src="assets/img/david-iskander-599118-unsplash.jpg" alt="">
						</div>
						<div class="col-lg-4 col-md-12">
							<br>
								<br>
									<br>
							<h1>What is B-Lajar?</h1>
							<br>
							<p>

								B-Lajar is an English-Language online learning website for elementary school. this website will provide
								material and accompanied by learning videos that will make it easier for student to understand the lesson
								from the materials available, also equipped with learning videos which are very helpful for students who can
								better through understanding video.
							
							
							</p>
							<button class="primary-btn mt-20 text-uppercase">Learn More<span class="lnr lnr-arrow-right"></button>
							
						</div>
						</div>
					</div>
				</section>	
						<!-- End offered Area -->

</div>
</div>
</div>
</section>



			<!-- Start testimonial Area -->
			<section class="testimonial-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10 text-white">What People Said</h1>
							<p class="text-white">
									What are the opinions of those who have used this web
							</p>
							</div>
						</div>
					</div>						
					<div class="row">
					   	<div class="active-testimonial">
					   	<?php
							// Create database connection using config file
							include_once("config/koneksi.php");
 							// Fetch all users data from database
							$result = mysqli_query($con, "SELECT * FROM feedback WHERE status='1' order BY id DESC");
						?>	
						
											
						<?php  
    					while($user_data = mysqli_fetch_array($result)){
    						?>
							<div class="single-testimonial item d-flex flex-row">
								<div class="thumb">
									<img class="img-fluid" src="login/user.png" alt="">
								</div>
								<div class="desc">
						<?php
						
        				echo "<h4 mt-30>".$user_data['name']."</h4>";
        				echo "<p>".$user_data['email']."</p>";
        				echo "<p>".$user_data['profession']."</p>";
        				echo "<p>".$user_data['message']."</p>";		
        				?>

								</div>
							</div>
															
						<?php 
    					}
    					
        				?>
						</div>
					</div>
				</div>
			</section>
			<!-- End testimonial Area -->

			
						<!-- Start feature Area --> 
			<section class="feature-area section-gap">
				<div class="container">
					<div class="row">
						<div class="single-feature col-lg-4">
							<img class="img-fluid" src="assets/img/f1.png" alt="">
							<h4>Trying</h4>
							<p>Try to keep trying to catch up with learning in order to be equal to others, in order to get more knowledge
							than others.</p>
						</div>
						<div class="single-feature col-lg-4">
							<img class="img-fluid" src="assets/img/f2.png" alt="">
							<h4>Keep Spirit</h4>
							<p>Still pasionate even though there are many obstacles that hold up self-development and is not easy influenced
							with judging from others.</p>
						</div>
						<div class="single-feature col-lg-4">
							<img class="img-fluid" src="assets/img/f3.png" alt="">
							<h4>Pray to the god</h4>
							<p>Keep praying to God an believe that the efforts we sill do will not useless.</p>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
			

			
			

			<!-- Start service Area -->
			<section class="service-area section-gap relative"  id="goal">
				<div class="overlay overlay-bg"></div>
				<div class="container" id="mda">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Our&nbsp; Goals</h1>
							<p>
								Lets take B-lajar for a better future
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-apartment"></span>Become Smart People</h4>
								<p>
									Becoming smart people its not become a smart person without dropping person below us.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-license"></span>Rewarding For Society</h4>
								<p>
									Get the easy interacting with society with the extent of knowledge.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-phone"></span>Great Support</h4>
								<p>
									Get good support from people around you and ypur own knowledge.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-rocket"></span>Grab Your Future</h4>
								<p>
									Get a better future with a lot of knowledge an insight.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-diamond"></span>Shine On the Stage</h4>
								<p>
									Be a brilliant person by mastering many languages.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-bubble"></span>Easy Communication</h4>
								<p>
									Get a ease of communicating knowledge by mastering english.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End service Area -->

			<br>

			<!-- Start info Area -->
			<section class="info-area" id="about">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 col-md-12 info-left">
							<img class="img-fluid" src="assets/img/img.jpg" alt="">
						</div>
						<div class="col-lg-6 col-md-12 info-right no-padding">
							<h1>Why <br>
							You Choose B-lajar?</h1>
							<p>
								Because B-Lajar provides materials that are easily to understood by elementary school student will create
								a learning atmosphere that is fun and not boring so student are more at home learning to use the web <br> B-Lajar by reading materials or watching learning videos with fun.
							</p>
							<button class="primary-btn mt-20 text-uppercase">Learn More<span class="lnr lnr-arrow-right"></button>
							
						</div>						
					</div>
				</div>	
			</section>
			<!-- End info Area -->			

			<section class="about-area">
				<div class="container-fluid">
					<div class="row no-padding justify-content-center d-flex align-items-center">
						<div class="col-lg-6 about-left">
							<h1>
								"Berubah" <br>
							<h2>
								 Kemendikbud Short Movie <br>
							</h2>
							<p class="mt-30">
								<i>Film Pendek (Short Movie) ini menceritakan kisah 2 orang anak <br> yaitu Akmal,seorang anak manja yang berasal dari keluarga <br>berada dan Ridzky, seorang anak yatim piatu yang selalu <br>bersikap positif terhadap segala hal.Mereka berdua pun <br>bertemu.Akmal yang awalnya berperilaku buruk, <br>mulai menyadari perbuatannya setelah mengetahui <br> kehidupan Ridzky yang sebenarnya.</i>
							</p>
							<button class="primary-btn mt-20 text-uppercase">See Details<span class="lnr lnr-arrow-right"></button>
						</div>
						<div class="col-lg-6 about-right no-padding relative">
							<div class="overlay overlay-bg"></div>
							<a href="https://www.youtube.com/watch?v=0Nh61ktP90c" class="play-btn">	<img class="play" src="assets/img/play-btn.png" alt="">
							</a>							
							<img class="main img-fluid" src="assets/img/2.png" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End about Area -->		


			<!-- start contact Area -->		
			<section class="contact-area section-gap" id="contact">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-30 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Rate Us Here</h1>
								<p>Lets take B-lajar for a better future</p>
							</div>
						</div>
					</div>										
					<form action="system/terusanfeedback.php" method="post" class="form-area mt-60" id="myForm class="contact-form text-right">
						<div class="row">	
						<div class="col-lg-6 form-group">
							<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
						
							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

							<input name="profession" placeholder="Enter your profession" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
						</div>
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea mt-10 form-control" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
							<button name="Submit" class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
							<div class="mt-10 alert-msg">								
						</div>
						</div></div>
					</form>						
					
				</div>	
			</section>
			<!-- end contact Area -->	



		<?php
			include'footer.php';
		?>

