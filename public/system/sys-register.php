<?php 
include '../../koneksi/koneksi.php';
if (isset($_POST['register'])) {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql1 = "SELECT username FROM pelanggan WHERE username = '$username'";
	$exe1 = $koneksi->query($sql1);
	$cek = $exe1->num_rows;

	if ($cek == 1) {
			echo "<script>
 				alert('Maaf username sudah digunakan!');
 				window.location.href='../register.php'
	  		  </script>";
	}else {
		$sql2 = "INSERT INTO pelanggan VALUES ('','$nama','$no_hp','$alamat','$username','$password')";
		$exe2 = $koneksi->query($sql2);

		if (!$exe2) {
			echo "<script>
 				alert('Internal error : Try again later');
 				window.location.href='../register.php'
	  		  </script>";
		}else {
			echo "<script>
 				alert('Anda sekarang sudah terdaftar');
 				window.location.href='../../'
	  		  </script>";
		}
	}
}
 ?>