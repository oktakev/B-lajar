
 <link href="../../../assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">

   
   
<?php
	include'../../../header.php';
?>    

<?php

	include_once("../../../config/koneksi.php");
if(isset($_POST['update']))
{	
	$id_siswa = $_POST['id_siswa'];
	$full_name=$_POST['full_name'];
	$no_handphone=$_POST['no_handphone'];
	$kelas=$_POST['kelas'];

	// update user data
	$result = mysqli_query($con, "UPDATE user_siswa SET full_name='$full_name',no_handphone='$no_handphone',kelas='$kelas' WHERE id_siswa=$id_siswa");
	
	// Redirect to homepage to display updated user in list
	//header("Location: profil_siswa.php");
}
?>

<?php
	
 	
 	$result = mysqli_query($con, "SELECT * FROM user_siswa WHERE email = '".$_SESSION['email']."' ");
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
				    <input type="hidden" name="id_siswa" class="form-control" value="<?php echo $user_data['id_siswa'];?>">
				    <input type="text" name="full_name" class="form-control" value="<?php echo $user_data['full_name'];?>">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="text" name="no_handphone" class="form-control" value="<?php echo $user_data['no_handphone'];?>">
				    <br>
				  </div>
				  <div class="form-group">
                                            <select name="kelas" class="form-control">
                                                                                        <?php
                                                    for($i=1;$i<=6;$i++){
                                                        $kelas = "Kelas ".$i." SD";
                                                        $selected = $user_data['kelas']==$kelas ? "selected" : ""; 
                                                        echo "<option $selected>$kelas</option>";
                                                    }
                                            ?>

                                            </select>
                                        </div>
                                        <br>
				  <input type="submit" name="update" class="btn btn-success">
				</form>    			
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	
	
<?php
	include'../../../footer.php';
?>