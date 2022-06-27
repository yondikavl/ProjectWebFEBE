<?php 
session_start();
	if (isset($_GET['total'])) {
		include'../../koneksi/koneksi.php';
		
		$total = $_GET['total'] - 1;
		$nama_petugas = $_SESSION['Nama_petugas'];
		$sql = "INSERT INTO kas VALUES ('','$total','$nama_petugas')";
		$exe = $koneksi->query($sql);
		$delete = "DELETE  FROM keranjang";
		$exe = $koneksi->query($delete);

		header('location:../../view/petugas/index.php?hal=kasir');
	}
 ?>