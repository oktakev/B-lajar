	<?php
 session_start();
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		include_once("../../../config/koneksi.php");
		date_default_timezone_set("Asia/Jakarta");
		$email = 	$_SESSION['email'];
		$sql = mysqli_query($con, "select id_guru,full_name from user_guru where email = '$email' ");
		$data = mysqli_fetch_assoc($sql);
		$nama = $data['full_name'];
		$tanggal = date("Y-m-d H:i:s");
		$pesan = 	$_POST['pesan'];
		$id_video = 	$_POST['id_video'];
		$id_siswa = 	0;	
		$id_guru = 	$data['id_guru'];
		// Insert user data into table
		$result = mysqli_query($con, "INSERT INTO komentar_video VALUES('','$nama','$tanggal','$email','$pesan','$id_video','$id_siswa','$id_guru')");
		header("location:../content-video.php?id_video=$id_video&comment=success");
		}
	?>
