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
		$id_materi = 	$_POST['id_materi'];
		$id_siswa = 	0;
		$id_guru = 	$data['id_guru'];
		// Insert user data into table
		$result = mysqli_query($con, "INSERT INTO komentar VALUES('','$nama','$tanggal','$email','$pesan','$id_materi','$id_siswa','$id_guru')");
		header("location:../content.php?id_materi=$id_materi&comment=success");
		}
	?>
