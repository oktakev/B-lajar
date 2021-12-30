<?php
  include_once("../../../config/koneksi.php");
  $id = $_GET['id'];
  $result = "DELETE FROM video WHERE id_video=$id";
  if (mysqli_query($con, $result)) {
    header('Location: ../tampilan_video.php');
  }
?>