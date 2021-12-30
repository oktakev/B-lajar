
 <link href="../../../assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">

   
   
<?php
	include'../../../header.php';
?>

<?php

	include_once("../../../config/koneksi.php");
if(isset($_POST['update']))
{	
	$id_guru = $_POST['id_guru'];
	$full_name=$_POST['full_name'];
	$no_handphone=$_POST['no_handphone'];
	$usia=$_POST['usia'];
	$profesi=$_POST['profesi'];
	$pendidikan_terakhir=$_POST['pendidikan_terakhir'];

	// update user data
	$result = mysqli_query($con, "UPDATE user_guru SET full_name='$full_name',no_handphone='$no_handphone',usia='$usia',profesi='$profesi',pendidikan_terakhir='$pendidikan_terakhir' WHERE id_guru=$id_guru");
	
}
?>

<?php
	
	include_once("../../../config/koneksi.php");
 	
 	$result = mysqli_query($con, "SELECT * FROM user_guru WHERE email = '".$_SESSION['email']."' ");
?>
	<?php  
		$user_data = mysqli_fetch_array($result)
	?>


	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-12 col-lg-offset-3 centered">
				<h3>EDIT PROFILE</h3>
				<hr>
				<p>You can edit your profile here</p>  
			</div>
		</div>
		<div class="row">	
			<div class="col-lg-12 col-lg-offset-3 centered">
					 
				<center>
				<form action="edit_profile.php" method="post" role="form">
				  <div class="form-group">
				    <input type="hidden" name="id_guru" class="form-control" value="<?php echo $user_data['id_guru'];?>">
				    <div class="form-group">
				    <div class="form-control">
				    <label>Full Name</label>
				    <input type="text" name="full_name" class="form-control" value="<?php echo $user_data['full_name'];?>">
					</div>
						</div>
				    
				  </div>
				  <div class="form-group">
				  	<div class="form-control">
				  		<label>No Handphone</label>
				    <input type="text" name="no_handphone" class="form-control" value="<?php echo $user_data['no_handphone'];?>">
				    </div>
				  </div>
				  <div class="form-group">
				  	<div class="form-control">
				  		<label>Usia</label>
				    <input type="text" name="usia" class="form-control" value="<?php echo $user_data['usia'];?>">
				    </div>
				  </div>
				  <div class="form-group">
				  	<div class="form-control">
				  		<label>Profesi</label>
				    <input type="text" name="profesi" class="form-control" value="<?php echo $user_data['profesi'];?>">
				    </div>
				  </div>
				  <div class="form-group">
				  	<div class="form-control">
				  		<label>Pendidikan Terakhir</label>
				    <input type="text" name="pendidikan_terakhir" class="form-control" value="<?php echo $user_data['pendidikan_terakhir'];?>">
				    </div>
				  </div>
                                        <br>
				  <button type="submit" name="update" class="btn btn-success">SUBMIT</button>
				  
				</form>    			
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	
	
<?php
	include'../../../footer.php';
?>