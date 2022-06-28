<?php 
include'../403/petugas.php';
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventory</title>
</head>

<style type="text/css">
  img {
    width: 150px;
  }

  img:hover {
    width: 350px;
    transition: 3s;
  }
</style>

<body>

<center  style = "margin: 50px;">

<h2 style="float: left; margin: 0;">Inventori Toko</h2>
<br>

<form method="POST" action="">
<div class="input-group">
  <input type="text" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" name="keyword" placeholder="Ketikan id barang" />
  <input type="submit" class="btn btn-outline-primary" name="cari"/>
</div>
</form>
<br>
<section class="toko">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Barang</th>
      <th scope="col">Nama</th>
      <th scope="col">Ukuran</th>
      <th scope="col">Warna</th>
      <th scope="col">Stok</th>
      <th scope="col">Harga</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
</section>

  <tbody>
    <?php 
    include '../../koneksi/koneksi.php';
    $sql = "SELECT * FROM inventaris ORDER BY id_barang DESC ";
    if (isset($_POST['cari'])) {
    	$keyword = $_POST['keyword'];
    	$sql = "SELECT * FROM  inventaris WHERE id_barang LIKE '%$keyword%' OR warna LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR stok LIKE '%$keyword%' OR harga LIKE '%$keyword%' OR ukuran LIKE '%$keyword%'";
    }
    $exe = $koneksi->query($sql);

    $no = 1;
    while ($data = $exe->fetch_array()) {
      ?>
      <tr>
        <td><?=$no++?></td>
        <td><?=$data['id_barang']?></td>
        <td><?=$data['nama']?></td>
        <td><?=$data['ukuran']?></td>
        <td><?=$data['warna']?></td>
        <td><?=$data['stok']?></td>
        <td><?=$data['harga']?></td>
        <td><img class="img-fluid" src="../../assets/img/Inventory/<?=$data['foto']?>"></td>
      </tr>

      <?php
    }

     ?>
  </tbody>
</table>
<style>
  .toko table th{
    background-color: #ff7f50;
    font-weight: 700;
  }
</style>
</center>
</body>
</html>
