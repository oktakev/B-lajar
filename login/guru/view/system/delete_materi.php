<?php
  include_once("../../../../config/koneksi.php");
  $id = $_GET['id'];
  $result = "DELETE FROM materi WHERE id_materi=$id";
  if (mysqli_query($con, $result)) {
    header('Location: ../tampilan_materi.php');
  }
?>