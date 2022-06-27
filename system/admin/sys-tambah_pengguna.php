<?php 
	include'../../koneksi/koneksi.php';

	if (isset($_POST['tambah_pengguna'])) {

		$nama_petugas = $_POST['nama_petugas'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$passwordhashed = password_hash($password, PASSWORD_DEFAULT);
		$level = $_POST['level'];
		$foto = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];

		$sql1 = "SELECT * FROM admin WHERE username = '$username'";
		$exe1 = $koneksi->query($sql1);
		$cek  = $exe1->num_rows;
if ($cek) {
	echo "<script>
 				alert('Maaf username sudah digunakan! upload gagal');
 				document.location.href='../../view/admin/index.php?hal=pengguna'
	  		  </script>";
}else{

		$sql = "INSERT INTO admin VALUES('','$nama_petugas','$username','$passwordhashed','$level','$foto')";
		$exe = $koneksi->query($sql);
		move_uploaded_file($tmp, "../../assets/img/admin/$foto");

		echo "<script>
 				alert('upload berhasil data pengguna ditambahkan!');
 				document.location.href='../../view/admin/index.php?hal=pengguna'
	  		  </script>";
	}
	}
 ?>