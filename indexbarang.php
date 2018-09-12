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

    <div class="tambah">
      <a href="tambahbarang.php">Tambah Data</a>
    </div>

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
                  <th scope="col">ID Barang</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Stok</th>
                  <th scope="col">Supplier</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                            $sql = $db->query("SELECT * FROM tb_barang");
                            while ($data = $sql->fetch_array()) {
                            echo "
                          <tr>
                          <td>".$data['id_barang']."</td>
                          <td>".$data['kategori']."</td>
                          <td>".$data['nama_barang']."</td>
                          <td>".$data['harga']."</td>
                          <td>".$data['stok']."</td>
                          <td>".$data['nama_supplier']."</td>"
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
