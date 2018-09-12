<?php
    include "koneksi.php";

							if(isset($_POST['tambah'])){
									if( empty($_POST['kategori']) || empty($_POST['nama_barang']) ||empty($_POST['harga']) || empty($_POST['stok'])|| empty($_POST['nama_supplier'])){
										echo "<script>alert('Tidak boleh kosong')</script>";
									}else{
                    $kategori=$_POST['kategori'];
                    $nama_baramg=$_POST['nama_barang'];
										$harga=$_POST['harga'];
										$stok=$_POST['stok'];
										$nama_supplier = $_POST['nama_supplier'];

										$dup =mysqli_query($db, "SELECT * FROM tb_barang WHERE nama_barang='".$_POST['nama_barang']."'");
										$rows = mysqli_num_rows($dup);
										$fetch = mysqli_fetch_assoc($dup);
										if ($rows > 0){
											echo "<script>alert ('nama barang sudah ada.')</script>";
										}else{
											$sql = $db->query("INSERT INTO tb_barang (kategori, nama_barang, harga, stok, nama_supplier) VALUES ('$kategori', '$nama_baramg', '$harga', '$stok', '$nama_supplier') ");
											header('location:indexbarang.php');
										}

									}
							}
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Direktorat Kesatuan Bangsa dan Politik Palembang</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/font-icon.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
  <body >



    <form method='POST' action='' class=' form-horizontal'>
    <h2>Tambah Data Barang</h2>

    <div class="card-body" >
    <div class="form-group" >
      <label class="col-sm-1 control-label">Kategori</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name='kategori'  placeholder="Kategori Barang">
        </div>
    </div>

    <div class="form-group">
      <label class="col-sm-1 control-label">Nama Barang</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name='nama_barang'  placeholder="Nama Barang">
        </div>
    </div>

      <div class="form-group">
        <label class="col-sm-1 control-label">Harga Barang</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name='harga'  placeholder="Harga Barang">
          </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Stok Barang</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name='stok'  placeholder="Stok Barang">
          </div>
      </div>

      <div class="form-group">
        <label class="col-sm-1 control-label">Nama Supplier</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name='nama_supplier'  placeholder="Nama Supplier">
          </div>
      </div>


      <div class="form-group">
        <div class="col-sm-offset-1 col-sm-4">
          <button type='submit' name='tambah' class='btn btn-primary' onClick="return confirm('Apakah Data Sudah Benar?')">Tambah</button>
        </div>
      </div>
     </div>
  </form>

  </body>
</html>
