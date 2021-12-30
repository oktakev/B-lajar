<?php
	include'../../../header.php';
?>

<?php
	
	include_once("../../../config/koneksi.php");
 	
 	$result = mysqli_query($con, "SELECT * FROM user_siswa WHERE email = '".$_SESSION['email']."' ");
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
					<img src="assets/img/user.png" alt="Stanley">
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
								<td>Kelas</td>
								<td><?php echo $user_data['kelas']; ?></td>
							 </tr>
						</table>
					  </div>
                <div class="text-center">
                  <br>  
                    <p><li><a class="button button-style button-style-dark button-style-color-2 smoth-scroll" href="edit_profile.php">Edit Profile</a></li></p>
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