<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $name = "db_tugas5";
  $link = mysqli_connect($host,$user,$pass,$name);
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysql_connect_errno().
    " - ".mysql_connect_error());
  }
?>
