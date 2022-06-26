<?php 
if (isset($_GET['hal'])) {
	$halaman = $_GET['hal'];

	if ($halaman == 'homeadmin'){
		include'home-admin.php';
	}else if($halaman == 'inventori'){
		include'inventori.php';
	}else if($halaman == 'pengguna'){
		include'pengguna.php';
	}else if($halaman == 'homepetugas'){
		include 'homepetugas.php';
	}else if($halaman == 'kasir'){
		include 'kasir.php';
	}else if ($halaman == 'profile_admin'){
		include 'profile_admin.php';
	}else if ($halaman == 'stok'){
		include 'stok-petugas.php';
	}else {
	}
  }
?>