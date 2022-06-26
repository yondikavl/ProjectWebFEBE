<?php 
include'../../koneksi/koneksi.php' ;
if (isset($_GET['idbarang'])) {
$idBarang = $_GET['idbarang'];
$namaBarang = $_GET['namabarang'];
$Hargabarang = $_GET['hargabarang'];
$stokbarang  = $_GET['stok'] - 1;

$tambahkeranjang = "INSERT INTO keranjang VALUES ('$idBarang','$namaBarang','$Hargabarang','','$stokbarang')";
$exe = $koneksi->query($tambahkeranjang);
$update = "UPDATE inventaris SET stok = '$stokbarang' WHERE id_barang = '$idBarang'";
$exe = $koneksi->query($update);

header('location:../../view/petugas/index.php?hal=kasir');
}
?>