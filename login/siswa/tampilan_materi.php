<?php
	include'../../header.php';
		function convert($date){
			$converteddate=date("F j, Y g:ia", strtotime($date));
			return $converteddate;
		}

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
						<h2>Content Material</h2>
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
                           <li><a href="tampilan_guru.php" class="opc-main-bg" data-filter=".photoshop">Find Teacher</a></li>
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
							<p>Lets take B-lajar for a better future</p>
						</div>
						<br>
							<br>
						<div class="col-md-5">
							<div class="form-group">
									<form method="post" id="report_filter" action="<?= $_SERVER['PHP_SELF'];?>" >
									<select name="name" class="form-control" onchange="document.getElementById('report_filter').submit(); " style="width: 250px;">
									<option value="">Filter Berdasarkan</option>
									<option value="1">Kelas 1 SD</option>
									<option value="2">Kelas 2 SD</option>
									<option value="3">Kelas 3 SD</option>
									<option value="4">Kelas 4 SD</option>
									<option value="5">Kelas 5 SD</option>
									<option value="6">Kelas 6 SD</option>
								</select>
							</form>
								<br>
								<form action="" method="POST">
								<div class="form-group">
									<input class="form-control" name="cari" placeholder="Masukkan Judul Materi...">
									<button type="submit" name="submit" class="btn btn-md btn-primary" style="margin-left:84%;margin-bottom: 10px;margin-top: 10px;"><span class="glyphicon glyphicon-search"></span>Search</button>
								
									<br>
								</div>
							</form>	
							</div>
						</div>	
					</div>
<?php 
include_once("../../config/koneksi.php");
$halaman = 6;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;                   
$result = mysqli_query($con, "SELECT * FROM kelas INNER JOIN materi ON kelas.id_kelas = materi.id_kelas ORDER BY id_materi DESC");
$total = mysqli_num_rows($result);
$pages = ceil($total/$halaman);
if(isset($_POST['name'])){
    $filter = "where materi.id_kelas = '$_POST[name]' ";
}
else{
    $filter = "";    
}
$query = mysqli_query($con,"SELECT * FROM kelas INNER JOIN materi ON kelas.id_kelas = materi.id_kelas $filter ORDER BY id_materi DESC LIMIT $mulai, $halaman");
$no =$mulai+1;
?>
					<?php
							// Create database connection using config file
							include_once("../../config/koneksi.php");
 							// Fetch all users data from database
							$result = mysqli_query($con, "SELECT * FROM kelas INNER JOIN materi ON kelas.id_kelas = materi.id_kelas ORDER BY id_materi DESC");
						?>
						<?php
						if (isset($_POST['submit'])) {
                			$cari=$_POST['cari'];
                			$result = mysqli_query($con, "SELECT * FROM kelas INNER JOIN materi ON kelas.id_kelas = materi.id_kelas WHERE judul_materi LIKE '%$cari%' ORDER BY id_materi DESC");
            			}else {
                			$result = mysqli_query($con, "SELECT * FROM kelas INNER JOIN materi ON kelas.id_kelas = materi.id_kelas ORDER BY id_materi DESC");
                		}  
    					while($user_data = mysqli_fetch_array($query)){
    						$sqlCount = mysqli_query($con, "select count(id_komentar) ttl from komentar where id_materi = '".$user_data['id_materi']."'");
    						$count = mysqli_fetch_assoc($sqlCount);
    						?>

    						

     				<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="content.php?id_materi=<?php echo $user_data['id_materi'] ?>"><img src="../guru/Images/<?php echo $user_data['gambar']; ?>" class="img-thumbnail"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1" href="content.php?id_materi=<?php echo $user_data['id_materi'] ?>"><?php echo $user_data['nama_kelas']; ?></a>
									<span class="post-date"><em class="fa fa-calendar">
										<?php echo convert($user_data['tanggal_upload']); ?></em> &nbsp; 
										<em class="fa fa-comments"> <?php echo $count['ttl'] ?> </em>
									</span>
								</div>
								<h3 class="post-title"><a href="content.php?id_materi=<?php echo $user_data['id_materi'] ?>"><?php echo $user_data['judul_materi']; ?></a></h3>
							</div>
						</div>
					</div>
				
	

<?php
}
 ?>
                       </div>

</div>

</section>
<ul class="pagination pagination-lg">
    <?php for ($i=1; $i<=$pages ; $i++){ ?>
    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php } ?>
</ul>


<?php 
	include'../../footer.php';
 ?>
