<?php
	include'../../header.php';
?>

<?php
	include_once("../../config/koneksi.php");
 	
 $id_guru = $_GET['id_guru'];
$result = mysqli_query($con, "SELECT * FROM user_guru WHERE id_guru=$id_guru ORDER BY id_guru DESC");
?>

<?php  
		$user_data = mysqli_fetch_array($result)
	?>


    <link href="../guru/profil/assets/css/main.css" rel="stylesheet">

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-12 col-lg-offset-2 centered">
					<img src="../assets/images/estudiante.png" alt="Stanley">
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
								<td>Email</td>
								<td><?php echo $user_data['email']; ?></td>
							 </tr>
							 <tr>
								<td>Pendidikan Terakhir</td>
								<td><?php echo $user_data['pendidikan_terakhir']; ?></td>
							 </tr>
							 <tr>
								<td>Profesi</td>
								<td><?php echo $user_data['profesi']; ?></td>
							 </tr>
							 
							<tr>
								<td>No Handphone</td>
								<td><?php echo $user_data['no_handphone']; ?></td>
							 </tr>
							 
						</table>
					  </div>
                     </div>
                   </div>

				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->
	
<?php
	include'../../footer.php';
?>