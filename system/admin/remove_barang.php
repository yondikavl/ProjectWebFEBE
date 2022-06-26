<?php 
if (isset($_GET['id'])) {
	$idBarang = $_GET['id'];
	$remove_barang = "DELETE FROM inventaris WHERE id_barang = '$idBarang' ";
	include'../../koneksi/koneksi.php';
	$exe=$koneksi->query($remove_barang);

	echo "<script>
			alert('Berhasil Hapus Data');
			document.location.href='../../view/admin/index.php?hal=inventori'
	  	  </script>";
}
 ?>