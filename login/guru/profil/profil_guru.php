<?php
	include'../../../header.php';
?>

<?php
	include_once("../../../config/koneksi.php");
 	
 	$result = mysqli_query($con, "SELECT * FROM user_guru WHERE email = '".$_SESSION['email']."' ");
?>
	<?php  
		$user_data = mysqli_fetch_array($result)
	?>



    <link href="assets/css/main.css" rel="stylesheet">

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-12 col-lg-offset-2 centered">
					<img src="../../assets/images/estudiante.png">
					<br>
					<br>
					<h2>Have a nice day with us</h2>
					<br>
					 <div class="table-responsive">
					    <table class="table">
							<tr>
							    <td>Full Name</td>
								<td><?php echo $user_data['full_name']; ?></td>
							 </tr>
							<tr>
								<td>No Handphone</td>
								<td><?php echo $user_data['no_handphone']; ?></td>
							 </tr>
							 <tr>
								<td>Usia</td>
								<td><?php echo $user_data['usia']; ?></td>
							 </tr>
							 <tr>
								<td>Profesi</td>
								<td><?php echo $user_data['profesi']; ?></td>
							 </tr>
							 <tr>
								<td>Pendidikan Terakhir</td>
								<td><?php echo $user_data['pendidikan_terakhir']; ?></td>
							 </tr>
							 
						</table>
					  </div>
                <div class="text-center">
                  <br>  
                    <p>
                    		<a class="button button-style button-style-dark button-style-color-2 smoth-scroll" href="edit_profile.php">Edit Profile</a>
                    		I
                    		<a class="button button-style button-style-dark button-style-color-2 smoth-scroll" href="input_materi.php">Add Materi</a>
                    		I
                    		<a class="button button-style button-style-dark button-style-color-2 smoth-scroll" href="input_video.php">Add Video</a>
                    		
                </p>
                </div>
                     </div>
                   </div>

				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->
	
<?php
	include'../../../footer.php';
?>