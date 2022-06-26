<?php 
	if (isset($_POST['tambah_pengguna'])) {

		$nama_petugas = $_POST['nama_petugas'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = $_POST['level'];
		$foto = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];

		$sql = "INSERT INTO admin VALUES('','$nama_petugas','$username','$password','$level','$foto')";
		include'../../koneksi/koneksi.php';
		$exe = $koneksi->query($sql);
		move_uploaded_file($tmp, "../../assets/img/admin/$foto");

		header('location:../../view/admin/index.php?hal=pengguna');	
	}
 ?>