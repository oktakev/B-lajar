<?php
	include'../../header.php';
?>

<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/content.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<!-- cek apakah sudah login -->
	<?php 
//	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login_siswa.php?pesan=belum_login");
	}
	?>  <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Content Video</h2>
					</div>
				</div>
            </div>
        </section>		
			<!-- End Header area -->	
	<br/>
	<br/>
	<section id="portfolio">
   <div class="container">
      <div class="row">

         <div class="col-md-12 col-sm-12">
            
               <!-- iso section -->
               <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">

                  <ul class="filter-wrapper clearfix">
                           <li><a href="profil_login.php" data-filter="*">All</a></li>
                           <li><a href="tampilan_materi.php" class="opc-main-bg" data-filter=".graphic">Materials</a></li>
                           <li><a href="#" class="opc-main-bg" data-filter=".template">Videos</a></li>
                           <li><a href="#" class="opc-main-bg" data-filter=".photoshop">Quis</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<section id="portfolio">
<div class="container">     
     <!-- article -->
     <div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Postingan Materi</h2>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<input class="form-control" name="judul_materi" placeholder="Masukkan Judul">
									<br>
								<select class="form-control" style="width: 250px;">
									<option>Kelas 1 SD</option>
									<option>Kelas 2 SD</option>
									<option>Kelas 3 SD</option>
									<option>Kelas 4 SD</option>
									<option>Kelas 5 SD</option>
									<option>Kelas 6 SD</option>
								</select>
							</div>
						</div>	
					</div>

					<?php
							// Create database connection using config file
							include_once("../../config/koneksi.php");
 							// Fetch all users data from database
							$result = mysqli_query($con, "SELECT * FROM kelas INNER JOIN video ON kelas.id_kelas = video.id_kelas ORDER BY id_video DESC");
						?>
						<?php  
    					while($user_data = mysqli_fetch_array($result)){
    						?>

    						

     				<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="content-video.php"><img src="../admin/images/<?php echo $user_data['gambar']; ?>" class="img-thumbnail">
							</a>
							<!--<img class="play-button" src="assets/img/play-button.png" alt="">-->
													

							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1" href="category.html"><?php echo $user_data['nama_kelas']; ?></a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html"><?php echo $user_data['judul_video']; ?></a></h3>
							</div>
						</div>	
					</div>
				
	

<?php
}
 ?>
                       </div>

</div>

</section>


<?php 
	include'../../footer.php';
 ?>
