<?php 
	session_start();
?>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		include_once("../../../config/koneksi.php");
		date_default_timezone_set("Asia/Jakarta");
		$type = array("jpg","png", "gif", "JPG", "PNG", "gif");
		$sql = mysqli_query($con, "select id_guru from user_guru where email = '$_SESSION[email]' ");
		$data = mysqli_fetch_assoc($sql);
		$judul_video = 	$_POST['judul_video'];
		$tanggal = date("Y-m-d H:i:s");
		$gambar = $_FILES['gambar']['name'];
		$deskripsi = 	$_POST['deskripsi'];
		$src = 	$_FILES['src']['name'];
		$id_kelas = 	$_POST['id_kelas'];
		$id_guru = 	$data['id_guru'];
		// Insert user data into table
		move_uploaded_file($_FILES['gambar']['tmp_name'], "../images/".$gambar);
		move_uploaded_file($_FILES['src']['tmp_name'], "../videos/".$src);
		$result = mysqli_query($con, "INSERT INTO video VALUES('','$judul_video','$tanggal','$gambar','$deskripsi','$src','$id_kelas','$id_guru')");
		}

	?>


<script src="http://localhost/blajar/assets/js/vendor/jquery-2.2.4.min.js"></script>

<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
<script> 
$(document).ready(function(){
	swal({
	    title: "success!",
	    text: "Video Uploaded",
	    type: "success"
	},function() {
	    window.location = "../view/tampilan_video.php";
	})
})
</script>