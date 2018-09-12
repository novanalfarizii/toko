<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <!-- CSS bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link active" href="indexbarang.php">Data Barang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indexsupllier.php">Data Supplier</a>
      </li>
    </ul>

      <div class="container">
        <?php
    				include "koneksi.php";
         ?>
         <div class="verif"></div>
        <div class="row">
          <div class="col-md-15">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID Supplier</th>
                  <th scope="col">Nama</th>
                  <th scope="col">alamat</th>
                  <th scope="col">kota</th>
                  <th scope="col">telepon</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                            $sql = $db->query("SELECT * FROM tb_supplier");
                            while ($data = $sql->fetch_array()) {
                            echo "
                          <tr>
                          <td>".$data['id_supplier']."</td>
                          <td>".$data['nama_supplier']."</td>
                          <td>".$data['alamat']."</td>
                          <td>".$data['kota']."</td>
                          <td>".$data['telpon']."</td>"
                          ?>

                          <td>
                              <button type='button' class='btn btn-success'>
                              <span class='glyphicon glyphicon-ok'></span> Edit</button>
                              <button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-remove-sign'>Hapus</button>
                              </span>
                          </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>






  </body>

  <!-- js bootstrap -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</html>
