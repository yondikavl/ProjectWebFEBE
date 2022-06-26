<?php 

if (isset($_POST['tambah_barang'])) {
	
	$namaBarang = $_POST['Nama_Barang'];
	$ukuran = $_POST['Ukuran'];
	$warna = $_POST['Warna'];
	$stok = $_POST['Stok'];
	$harga = $_POST['Harga'];
	$foto = $_FILES['foto']['name'];
 	$tmp = $_FILES['foto']['tmp_name'];

	include'../../koneksi/koneksi.php';
	$uploadbarang = "INSERT INTO inventaris VALUES ('','$namaBarang','$ukuran','$warna','$stok','$harga','$foto')";
	$exe =$koneksi->query($uploadbarang);
	move_uploaded_file($tmp, "../../assets/img/inventory/$foto");
	
	echo "<script>
 			alert('Berhasil Menambahkan Barang');
 			document.location.href='../../view/admin/index.php?hal=inventori';
  		  </script>";
}

 ?>
