			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">About Us</h4>
								<p>
									A Simple Dev Who Enjoying Create Application
								</p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Contact Us</h4>
								<p>
									Question about us?
								</p>
								<p>
									Jln.Mana Ada Perumahan situ Block 119
								</p>
								<p class="number">
									082123456789 <br>
									081423456789
								</p>
							</div>
						</div>						
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">News</h4>
								<p>You can trust us. we only send  offers, not a single spam.</p>
								<div class="d-flex flex-row" id="mc_embed_signup">
								</div>
							</div>
						</div>						
					</div>
					<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
					
            <span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>			
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->

			<script src="<?php echo $url; ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="<?php echo $url; ?>assets/js/easing.min.js"></script>			
			<script src="<?php echo $url; ?>assets/js/hoverIntent.js"></script>
			<script src="<?php echo $url; ?>assets/js/superfish.min.js"></script>	
			<script src="<?php echo $url; ?>assets/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?php echo $url; ?>assets/js/jquery.magnific-popup.min.js"></script>	
			<script src="<?php echo $url; ?>assets/js/owl.carousel.min.js"></script>			
			<script src="<?php echo $url; ?>assets/js/jquery.sticky.js"></script>
			<script src="<?php echo $url; ?>assets/js/jquery.nice-select.min.js"></script>	
			<script src="<?php echo $url; ?>assets/js/waypoints.min.js"></script>
			<script src="<?php echo $url; ?>assets/js/jquery.counterup.min.js"></script>					
			<script src="<?php echo $url; ?>assets/js/parallax.min.js"></script>	
			<script src="<?php echo $url; ?>assets/js/mail-script.js"></script>	
			<script src="<?php echo $url; ?>assets/js/vendor/bootstrap.min.js"></script>	
			<script src="<?php echo $url; ?>assets/js/main.js"></script>	
<?php 
	if(isset($_GET['comment'])){
?>			
	 <script type="text/javascript">
	 	$(document).ready(function(){
	 		var off = $(".comments-area").offset()
	 		$("html, body").animate({scrollTop:off.top},1200)
	 	})
	 </script>
<?php } ?>
		</body>
	</html>