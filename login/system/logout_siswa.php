<?php 
// mengaktifkan session
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman sambil mengirim pesan logout
header("location:../login_siswa.php?pesan=logout");
?>