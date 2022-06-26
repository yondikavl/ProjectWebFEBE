<?php 
	if (isset($_GET['total'])) {
		include'../../koneksi/koneksi.php';
		
		$total = $_GET['total'] - 1;
		$sql = "INSERT INTO kas VALUES ('','$total')";
		$exe = $koneksi->query($sql);
		$delete = "DELETE  FROM keranjang";
		$exe = $koneksi->query($delete);

		header('location:../../view/petugas/index.php?hal=kasir');
	}
 ?>