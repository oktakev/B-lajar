<?php
	include'../../header.php';
?>

<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/content.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 

	<!-- cek apakah sudah login -->
	<?php 
//	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login_siswa.php?pesan=belum_login");
	}
	?>

     <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Find Teacher</h2>
					</div>
				</div>
            </div>
        </section>			
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
                           <li><a href="tampilan_video.php" class="opc-main-bg" data-filter=".template">Videos</a></li>
                           <li><a href="tampilan_guru.php" class="opc-main-bg" data-filter=".template">Find Teacher</a></li>
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
							<h2>Temukan Guru Private</h2>
						</div>
						
					</div>


					 <?php
            // Create database connection using config file
              include_once("../../config/koneksi.php");               
              // Fetch all users data from database
              $result = mysqli_query($con, "SELECT * FROM user_guru ORDER BY id_guru DESC");
              ?>
						<?php
    					while($user_data = mysqli_fetch_array($result)){
    						?>


        <div class="col-md-3">
          <div class="container">
              <div class="card" style=" width:250px; border: 1px solid #CCC; border-radius: 12px; position: relative; background-color: #284c79; margin-bottom: 20px;">
                  <div class="header-bg" style=" width: 100%; height: 80px; top:0; position: absolute; border-bottom: 3px solid #FFF"></div>
                      <div class="avatar" style="position: relative;">  
                         <img class="card-img-top" src="assets/img/Lafic A.jpg" alt="Card image" style="width:120px; height: 120px; margin-top: 20px; margin-left: 0px; border-radius: 50%; border: 3px solid white;">
                      </div>
                      <div class="content" style=" margin-top: 10px; border: 1px; border-radius: 12px">
                          <h5 style="text-align: center; color: white">Lafic Imarega D</h5>
                          <p style="color: white; text-align: center;">20thn, Mahasiswa</p>
                          <a href="#" class="btn btn-primary" style="margin-left: 5px; margin-bottom: 15px; margin-top: -7px; font-size: 14px">Lihat Profil lengkap... </a>
                       </div>
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
