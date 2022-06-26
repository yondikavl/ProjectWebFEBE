<?php 
include'../../koneksi/koneksi.php';
if (isset($_GET['idkeranjang'])) {
	
	$idkeranjang = $_GET['idkeranjang'];
	$stok = $_GET['stok'] ;
	$idBarang = $_GET['idbarang'];
	$delete = "DELETE FROM keranjang WHERE idkeranjang = '$idkeranjang' ";
	$exe = $koneksi->query($delete);

	$stokbaru = $stok + 1;
	$update = "UPDATE inventaris SET stok = '$stokbaru' WHERE id_barang = '$idBarang'";
	$exe = $koneksi->query($update);

	header('location:../../view/petugas/index.php?hal=kasir');
}
 ?>