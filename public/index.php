<?php 
session_start();
 if (!$_SESSION['id_pelanggan']) {
 	echo "<script>
 				alert('Anda Belum Login');
 				document.location.href='../'
			  </script>";
 } ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HALAMAN UTAMA</title>
</head>
<body>
<center><h1>DISINI ADA BANYAK BARANG</h1></center><?php 
$nama = $_SESSION['nama_pelanggan'] ;
$id = $_SESSION['id_pelanggan'] ;
$alamatp = $_SESSION['alamatp'] ;
$usernamep = $_SESSION['usernamep'] ;
 ?>
<h3>id : <?=$id?></h3> 
<h3>Nama : <?=$nama?> </h3>
<h3>Username : <?=$usernamep?></h3>
<h3>alamat : <?=$alamatp?></h3>

<a href="../system/system-logout.php">LOGOUT</a>
</body>
</html>