 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		include_once("../../../config/koneksi.php");
		date_default_timezone_set("Asia/Jakarta");
		$type = array("jpg","png", "gif", "JPG", "PNG", "gif");
		$judul_materi = $_POST['judul_materi'];
		$isi_materi = 	$_POST['isi_materi'];
		$id_kelas = 	$_POST['id_kelas'];
		$gambar = $_FILES['gambar']['name'];
		$pdf = $_FILES['pdf']['name'];
		$tanggal = date("Y-m-d H:i:s");
		// Insert user data into table
		move_uploaded_file($_FILES['gambar']['tmp_name'], "../images/".$gambar);
		move_uploaded_file($_FILES['pdf']['tmp_name'], "../pdf/".$pdf);
		$result = mysqli_query($con, "INSERT INTO materi VALUES('','$judul_materi','$gambar','$tanggal','$isi_materi','$pdf','$id_kelas')");
		}
	?>

<script src="http://localhost/blajar/assets/js/vendor/jquery-2.2.4.min.js"></script>

<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
<script> 
$(document).ready(function(){
	swal({
	    title: "success!",
	    text: "File Uploaded",
	    type: "success"
	},function() {
	    window.location = "../input_materi.php";
	})
})
</script>