
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
	include_once("../../config/koneksi.php");
		$type = array("jpg","png", "gif", "JPG", "PNG", "gif");
		$full_name = $_POST['full_name'];
		$email = $_POST['email'];
		$no_handphone = $_POST['no_handphone'];
		$tanggal_daftar = date("Y-m-d H:i:s");
		$usia = $_POST['usia'];
		$profesi = $_POST['profesi'];
		$bukti = $_FILES['bukti']['name'];
		$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
		$ijazah = $_FILES['ijazah']['name'];
		$sertifikat = $_FILES['sertifikat']['name'];
		$password = $_POST['password'];
		$retype_password = $_POST['retype_password'];
		$sqlcek = mysqli_query($con,"select count(email) ttl from user_guru where email = '".$email."' ");
		$cek = mysqli_fetch_assoc($sqlcek);
		if($cek['ttl']>0){
			//error
			echo "<script type='text/javascript'>alert('Email Telah Tersedia');window.location='../register_guru.php'</script>";
			//header("location:../login_guru.php");
		}
		else{

			if ($_POST["password"] == $_POST["retype_password"]) {
				// Insert user data into table
				move_uploaded_file($_FILES['bukti']['tmp_name'], "../berkas/".$bukti);
				move_uploaded_file($_FILES['ijazah']['tmp_name'], "../berkas/".$ijazah);
				move_uploaded_file($_FILES['sertifikat']['tmp_name'], "../berkas/".$sertifikat);
				$result = mysqli_query($con, "INSERT INTO user_guru(full_name,email,no_handphone,tanggal_daftar,usia,profesi,bukti,pendidikan_terakhir,ijazah,sertifikat,password,retype_password) 
											VALUES('$full_name','$email','$no_handphone','$tanggal_daftar','$usia','$profesi','$bukti','$pendidikan_terakhir','$ijazah','$sertifikat','$password','$retype_password')");
				// Show message when user added
				
				echo "<script type='text/javascript'>alert('Register Success');window.location='../login_guru.php'</script>";
				//header("location:../login_guru.php");
		   // success!
			}
			else {
		   // failed :(
				echo "<script type='text/javascript'>alert('Password Harus Sama');window.location='../register_guru.php'</script>";
			}


		}

	}
	?>