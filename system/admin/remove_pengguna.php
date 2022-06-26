<?php 
if (isset($_GET['id'])) {
	$idpengguna = $_GET['id'];
	$remove_pengguna = "DELETE FROM admin WHERE id_petugas = '$idpengguna' ";
	include'../../koneksi/koneksi.php';
	$exe=$koneksi->query($remove_pengguna);

	echo "<script>
			alert('Berhasil Hapus Data');
			document.location.href='../../view/admin/index.php?hal=pengguna'
	  	  </script>";
}
 ?>