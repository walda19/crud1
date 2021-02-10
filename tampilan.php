<?php
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      table{
        width: 840px;
        margin: auto;
      }
      h1{
        text-align: center;
      }
      th {
        background-color: #5D9CEC;
        color: white;
      }
      button{
        background-color: #5D9CEC;
        margin-left: 600px;
        margin-bottom: 10px;
        padding: 5px;
      }

      body{
       background: #AC92EC;
      }
      a{
        color: #CCD1D9;
      }
    </style>
  </head>
  <body>
    <h1>Tabel Biodata Mahasiswa</h1>
    <button><a href="add_form.php">Input Data</a></button>
    
    <br/>
    <table border="1">
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>No_Hp</th>
        <th>#</th>
      </tr>
      <?php
      $query = "SELECT * FROM crud ORDER BY nim ASC";
      $result = mysqli_query($link, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      $no = 1;
      while($crud = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>$crud[nim]</td>";
        echo "<td>$crud[nama]</td>";
        echo "<td>$crud[no_hp]</td>";
        echo '<td>
          <a href="form_edit.php?id='.$crud['id'].'">Edit</a> /

          <a href="delete.php?id='.$crud['id'].'"
      		  onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
        </td>';
        echo "</tr>";
        $no++;
      }
      ?>
    </table>
  </body>
</html>
