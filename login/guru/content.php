<?php  
	include'../../header.php';
?>

<link rel="stylesheet" href="assets/css/content.css">


     <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Content Material</h2>
					</div>
				</div>
            </div>
        </section>
   <?php

							// Create database connection using config file
							include_once("../../config/koneksi.php");
 							// Fetch all users data from database
							$result = mysqli_query($con, "SELECT * FROM kelas INNER JOIN materi ON kelas.id_kelas = materi.id_kelas join user_guru on materi.id_guru = user_guru.id_guru where materi.id_materi = '$_GET[id_materi]' ORDER BY id_materi DESC");
						?>
						<?php  
						$user_data = mysqli_fetch_array($result);
    						?>

<section class="about_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2><?php echo $user_data['judul_materi']; ?></h2>
        			<p>Lets take B-Lajar for a better future</p>
        		</div>
        		<div class="row about_inner">
        			<div class="col-lg-6">
						<div class="accordion" id="accordionExample">
							<div class="card">
								<div class="card-header" id="headingOne">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Description
									<i class="lnr lnr-chevron-down"></i>
									<i class="lnr lnr-chevron-up"></i>
									</button>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
									<div class="card-body">
										<?php echo $user_data['isi_materi']; ?>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingTwo">
									<button class="btn btn-link collapsed" type="button" aria-expanded="false" aria-controls="collapseTwo">
									<em class="fa fa-user">&nbsp;<?php echo $user_data['full_name']; ?></em> 
									</button>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingThree">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Get PDF file here
									<i class="lnr lnr-chevron-down"></i>
									<i class="lnr lnr-chevron-up"></i>
									</button>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
									<div class="card-body">
									
									Kami disini juga telah menyediakan file berupa pdf sebagai pembelajaran secara lengkap dan detail mengenai setiap materi yang kita bagikan.kalian bisa mendownload file tersebut dan membacanya dimanapun dan kapanpun.<br>
										<a href="pdf/<?php echo $user_data['pdf'] ?>"><?php echo $user_data['pdf'] ?></a>
									</div>
								</div>
							</div>
							<div class="card">
								
								<div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">

									<br>
									
								</div>
							</div>
						</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="video_area">
							<img class="img-fluid" src="images/<?php echo $user_data['gambar']; ?>" alt="">
							
							</a>
						</div>
        			</div>
        		</div>
        		<div class="comment-form">
									<h4>Leave a Reply</h4>
									<form action="system/terusan_comments.php" method="post">
										<div class="form-group form-inline">
										   										
										</div>
										<div class="form-group">
											<input type="hidden" name="id_materi" value="<?php echo $_GET['id_materi'] ?>">
											<textarea class="form-control mb-10" rows="5" name="pesan" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
										</div>
										<button class="primary-btn submit_btn" name="submit">Post Comment</a>	
									</form>
								</div>
								
								<?php

							// Create database connection using config file
							include_once("../../config/koneksi.php");
 							// Fetch all users data from database
							$sql = mysqli_query($con, "SELECT * FROM komentar where id_materi = '$_GET[id_materi]' order by id_komentar asc");
						?>
        		<div class="tab-pane fade show active" id="comments" role="tabpanel" aria-labelledby="comments-tab">
						
								<div class="comments-area">
									<h4> Comments</h4>
									<?php  
										while($data = mysqli_fetch_array($sql))
										{
											if($data['id_siswa']==0){
												$get = mysqli_query($con, "select full_name from user_guru where id_guru = '$data[id_guru]' ");
												$class = "left-padding";
											}
											else{
												$get = mysqli_query($con, "select full_name from user_siswa where id_siswa = '$data[id_siswa]' ");
												$class = "";
											}
										$comment=mysqli_fetch_assoc($get);
			    					?>
									<div class="comment-list <?php echo $class ?>">
										<div class="single-comment justify-content-between d-flex">
											<div class="user justify-content-between d-flex">
												<div class="thumb">
													<img src="../user.png" alt="">
												</div>
												<div class="desc">
													<h5><a href="#"><?php echo $comment['full_name']; ?></a></h5>
													<p class="date"><?php echo $data['tanggal']; ?></p>
													<p class="comment">
														<?php echo $data['pesan']; ?>
													</p>
												</div>
											</div>
											
										</div>
									</div>	
								<?php  } ?>
								</div>
							</div>
        </section>
     	<?php

 ?>
         <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/stellar.js"></script>
        <script src="assets/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="assets/vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/vendors/counter-up/jquery.counterup.js"></script>
        <script src="assets/js/mail-script.js"></script>
        <script src="assets/js/theme.js"></script>

<?php
	include'../../footer.php';
?>
