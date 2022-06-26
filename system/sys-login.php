<?php 
session_start();
if (isset($_POST['submit'])) {

	include '../koneksi/koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	$exe  = $koneksi->query($sql);
	$cek  = $exe->num_rows;
	$data = $exe->fetch_array();

	$sql2 = "SELECT * FROM pelanggan WHERE username = '$username' AND password = '$password'";
	$exe2  = $koneksi->query($sql2);
	$cek2  = $exe2->num_rows;
	$data2 = $exe2->fetch_array();

	if ($cek) {
	$getNama    = $data['nama'];
	$getId  = $data['id_petugas'];
	$getLevel = $data['level'];

	if ($getLevel == 'admin') {

		$_SESSION['level_admin'] = $getLevel;
		$_SESSION['id_getId'] = $getId;
		$_SESSION['Nama_Admin'] = $getNama;

		echo "<script>
 				alert('Selamat datang admin-$getNama');
 				document.location.href='../view/admin/'
	  		  </script>";

	}else if($getLevel == 'petugas') {

		$_SESSION['level_petugas'] = $getLevel;
		$_SESSION['id_petugas'] = $getId;
		$_SESSION['Nama_petugas'] = $getNama;

		echo "<script>
 				alert('Selamat datang petugas-$getNama');
 				document.location.href='../view/petugas/'
	  		  </script>";
	}
}else if($cek2){
		$id_pelanggan = $data2['id_pelanggan'];
		
	$nama = $data2['nama'];
	$alamat = $data2['alamat'];
	$usernamep = $data2['username'];
	$passwordp = $data2['password'];

		$_SESSION['id_pelanggan'] = $id_pelanggan;
		$_SESSION['nama_pelanggan'] = $nama;
		$_SESSION['alamatp'] = $alamat;
		$_SESSION['usernamep'] = $usernamep;
		$_SESSION['passwordp'] = $passwordp;
		
	echo "<script>
 				document.location.href='../public/';
	  		  </script>";
}else{

		echo "<script>
				alert('Username Atau password salah');
				document.location.href='../index.php'
			  </script>";	  	
	}
}
 ?>