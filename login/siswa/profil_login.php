<?php
	include'../../header.php';
?>

<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<body>
	<!-- cek apakah sudah login -->
	<?php 
//	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login_siswa.php?pesan=belum_login");
	}
	?>
			<section class="generic-banner relative">	
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<h2 class="text-white">Students Dashboard</h2>
								<p class="text-white">Lets take B-lajar for a better future</p>
							</div>							
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
                           <li><a href="#" data-filter="*" class="selected opc-main-bg">Home</a></li>
                           <li><a href="tampilan_materi.php" class="opc-main-bg" data-filter=".graphic">Materials</a></li>
                           <li><a href="tampilan_video.php" class="opc-main-bg" data-filter=".template">Videos</a></li>
                           <li><a href="tampilan_guru.php" class="opc-main-bg" data-filter=".photoshop">Find Teacher</a></li>
                        </ul>
                    </div>
                    <div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<p class="text-grey"><b>Please select the menu to learning our material.</b></p>
							</div>
						</div>
					</div>
					</div>
                </div>
            </div>

        </div>

    </section>
     
   
</body>

<?php 
	include'../../footer.php';
 ?>
