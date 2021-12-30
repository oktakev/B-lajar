<?php
  include_once("../../../config/koneksi.php");
  $id = $_GET['id'];
  $result = "DELETE FROM user_guru WHERE id_guru=$id";
  if (mysqli_query($con, $result)) {
    header('Location: ../list_guru.php');
  }
?>