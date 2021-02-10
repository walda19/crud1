<?php
  include 'koneksi.php';

  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);

    $query = "SELECT * FROM crud WHERE id='$id'";
    $result = mysqli_query($link, $query);
    if(!$result){
      die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
    }
    $crud = mysqli_fetch_assoc($result);
    $nim = $crud["nim"];
    $nama = $crud["nama"];
    $no_hp = $crud["no_hp"];

  } else {
    header("location:tampilan.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 300px;
        margin: auto;
      }
      body{
       background: #AC92EC;
      }
    </style>
  </head>
  <body>
    <h1>Edit Data</h1>
    <div class="container">
      <form id="form_mahasiswa" action="proses_update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <fieldset>
        <legend>Edit Data Mahasiswa</legend>
          <p>
            <label for="nim">NIM : </label>
            <input type="text" name="nim" id="nim" value="<?php echo $nim ?>">
          </p>
          <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" value="<?php echo $nama ?>">
          </p>
          <p>
            <label for="no_hp">No_Hp : </label>
            <input type="text" name="no_hp" id="no_hp" value="<?php echo $no_hp ?>">
          </p>
        </fieldset>
        <p>
          <input type="submit" name="form_edit" >
        </p>
      </form>
  </div>
  </body>
</html>
