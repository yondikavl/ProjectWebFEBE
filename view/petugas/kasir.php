<?php 
include'../403/petugas.php';
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kasir</title>
</head>

<style type="text/css">
  img {
    width: 50px;
  }

  img:hover {
    width: 350px;
    transition: 6s;
  }
</style>

<body>

<center  style = "margin: 50px;">

<h2 style="float: left; margin: 0;">Kasir</h2>
<br>

<form method="POST" action="">
<div class="input-group">
  <input type="text" class="form-control rounded" aria-label="Search" aria-describedby="search-addon" name="keyword" placeholder="Ketikan (Id/Nama) Barang" />
  <input type="submit" class="btn btn-outline-primary" name="cari"/>
</div>
</form>
<br>

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
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
    <?php 
    include '../../koneksi/koneksi.php';
    if (isset($_POST['cari'])) {
    	$keyword = $_POST['keyword'];
    	$sql = "SELECT * FROM  inventaris WHERE id_barang LIKE '%$keyword%' OR warna LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR stok LIKE '%$keyword%' OR harga LIKE '%$keyword%' OR ukuran LIKE '%$keyword%' ";
    
    $exe = $koneksi->query($sql);

    $no = 1;
    while ($data1 = $exe->fetch_array()) {
      ?>
      <tr>
        <td><?=$no++?></td>
        <td><?=$data1['id_barang']?></td>
        <td><?=$data1['nama']?></td>
        <td><?=$data1['ukuran']?></td>
        <td><?=$data1['warna']?></td>
        <td><?=$data1['stok']?></td>
        <td><?=$data1['harga']?></td>
        <td><img class="img-fluid" src="../../assets/img/Inventory/<?=$data1['foto']?>"></td>
        <td><a href="../../system/petugas/sys-tambah_keranjang.php?idbarang=<?=$data1['id_barang']?>&namabarang=<?=$data1['nama']?>&hargabarang=<?=$data1['harga']?>&stok=<?=$data1['stok']?>" class="btn btn-primary btn-md">Tambah</a></td>
      </tr>
      <?php
    }
}
     ?>
  </tbody>
</table>
<br>
<h5>Keranjang</h5>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Barang</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT * FROM  keranjang ";
    $exe = $koneksi->query($sql);
    $no = 1;
    while ($data = $exe->fetch_array()) {
      ?>
      <tr>
        <td><?=$no++?></td>
        <td><?=$data['id_barang']?></td>
        <td><?=$data['nama']?></td>
        <td><?=$data['harga']?></td>
        <td><a href="../../system/petugas/sys-delete_keranjang.php?idkeranjang=<?=$data['idkeranjang']?>&idbarang=<?=$data['id_barang']?>&stok=<?=$data['stok']?>" class="btn btn-danger">Delete</a></td>
      </tr>
      <?php
    }
     ?>
  </tbody>
</table>

<?php 

$sql="SELECT harga FROM keranjang ";
$exe = $koneksi->query($sql);
$total = 1;


while($data = $exe->fetch_array()){
	$total = $total + $data['harga'] ;
}

 ?>
<table class="table table-striped" >
	<thead>
		<tr>
      <div class="d-flex justify-content-between">
			  <th><h6>Total Bayar</h6></th>
      </div>
		</tr>
		<tr>
      <div class="d-flex justify-content-between">
			  <td><h5>Total</h5></td>
			  <td><?=$total - 1 ?>Rp.</td>
			  <td><a href="../../system/petugas/sys-checkout.php?total=<?=$total?>" class="btn btn-success">Checkout</a></td>
		  </div>
    </tr>

	</thead>
</table>
<style>
    .table th{
        background-color: #ff7f50;
        font-weight: 700;
    }
    
    .table h6{
        background-color: #ff7f50;
        font-weight: 700;
    }
    .btn{
      color: #85e3ff; 
      font-weight: 500;
    }
</style>
</center>
</body>
</html>
