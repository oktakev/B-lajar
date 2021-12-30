
	<?php
 
	// Check If form submitted, insert form data into users table.
	include_once("../../config/koneksi.php");
	if(isset($_POST['Submit'])) {
		$full_name = $_POST['full_name'];
		$email = $_POST['email'];
		$no_handphone = $_POST['no_handphone'];
		$kelas = $_POST['kelas'];
		$password = $_POST['password'];
		$retype_password = $_POST['retype_password'];
		$sqlcek = mysqli_query($con,"select count(email) ttl from user_siswa where email = '".$email."' ");
		$cek = mysqli_fetch_assoc($sqlcek);
		if($cek['ttl']>0){
			//error
			echo "<script type='text/javascript'>alert('Email Telah Tersedia');window.location='../register_siswa.php'</script>";
//			header("location:../register_siswa.php");

		}
		else{

			if ($_POST["password"] == $_POST["retype_password"]) {
				// Insert user data into table
				$result = mysqli_query($con, "INSERT INTO user_siswa(full_name,email,no_handphone,kelas,password,retype_password) 
											VALUES('$full_name','$email','$no_handphone','$kelas','$password','$retype_password')");
				// Show message when user added
				
				echo "<script type='text/javascript'>alert('Register Success');window.location='../login_siswa.php'</script>";
				//header("location:../login_siswa.php");
		   // success!
			}
			else {
		   // failed :(
				echo "<script type='text/javascript'>alert('Password Harus Sama');window.location='../register_siswa.php'</script>";
				}
				//header("location:../register_siswa.php");

		}

	}
	?>