<?php
if (isset($_POST['form_edit'])) {
  include("koneksi.php");

  $id = $_POST['id'];
  $nim = $_POST['nim'];
	$nama	= $_POST['nama'];
	$no_hp	= $_POST['no_hp'];

  $query  = "UPDATE `crud` SET `nama` = '$nama', `nim` = '$nim', `no_hp` = '$no_hp' WHERE `crud`.`id` = $id";


  $result = mysqli_query($link, $query);

  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

header("location:tampilan.php");


?>
