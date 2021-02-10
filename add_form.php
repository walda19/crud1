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
    <h1>Input Data</h1>
    <div class="container">
      <form id="form_mahasiswa" action="proses_input.php" method="post">
        <fieldset>
        <legend>Input Data</legend>
          <p>
            <label for="nim">Nama : </label>
            <input type="text" name="nim" id="nim">
          </p>
          <p>
            <label for="nama">Nim : </label>
            <input type="text" name="nama" id="nama">
          </p>
          <p>
            <label for="no_hp">No_Hp : </label>
            <input type="text" name="no_hp" id="no_hp">
          </p>

        </fieldset>
        <p>
          <input type="submit" name="add_form" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>
