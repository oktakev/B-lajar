
	<?php
 
	// Check If form submitted, insert form data into users table.
	include_once("../../../config/koneksi.php");
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$retype_password = $_POST['retype_password'];
		$sqlcek = mysqli_query($con,"select count(username) ttl from user_admin where username = '".$username."' ");
		$cek = mysqli_fetch_assoc($sqlcek);
		if($cek['ttl']>0){
			//error
			echo "<script type='text/javascript'>alert('Username Telah Tersedia')</script>";
			//header("location:../register_siswa.php");

		}
		else{

			if ($_POST["password"] == $_POST["retype_password"]) {
				// Insert user data into table
				$result = mysqli_query($con, "INSERT INTO user_admin(nama,username,password,retype_password) 
											VALUES('$nama','$username','$password','$retype_password')");
				// Show message when user added
				
				echo "<script type='text/javascript'>alert('Register Success')</script>";
				//header("location:../register_admin.php");
		   // success!
			}
			else {
		   // failed :(
				echo "<script type='text/javascript'>alert('Password Harus Sama')</script>";
				}
				header("location:../register_admin.php");

		}

	}
	?>