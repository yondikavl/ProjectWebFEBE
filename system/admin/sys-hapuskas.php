<?php 
include'../../koneksi/koneksi.php' ;
if (isset($_GET['idkas'])) {
	$idkas = $_GET['idkas'];
	$delete = "DELETE FROM kas WHERE idkas = '$idkas'";
	$exe =$koneksi->query($delete);
	header('location:../../view/admin/index.php?hal=homeadmin');
}
?>