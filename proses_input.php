<?php
include 'koneksi.php';

if (isset($_POST['add_form'])) {
	$nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $no_hp = $_POST['no_hp'];
  $query = "INSERT INTO crud VALUES (NULL, '$nim', '$nama', '$no_hp')";
  $result = mysqli_query($link, $query);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
}
header("location:tampilan.php");
?>
