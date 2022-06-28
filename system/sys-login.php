
<?php 
session_start();
include'../koneksi/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['submit'])) {
	
	$sql = "SELECT * FROM admin WHERE username = '$username'";
	$exe = $koneksi->query($sql);
	$cek = $exe->num_rows;

	$data = $exe->fetch_array();
	if ($cek > 0) {

		$getNama    = $data['nama'];
		$getId  = $data['id_petugas'];
		$getLevel = $data['level'];
		$getpassword = $data['password'];

		if (password_verify($password, $getpassword)) {
			
			if ($getLevel == 'admin') {
				$_SESSION['level_admin'] = $getLevel;
				$_SESSION['id_getId'] = $getId;
				$_SESSION['Nama_Admin'] = $getNama;

				echo "<script>
		 				alert('Selamat datang admin-$getNama');
		 				document.location.href='../view/admin/'
			  		  </script>";

			}else if ($getLevel == 'petugas') {

				$_SESSION['level_petugas'] = $getLevel;
				$_SESSION['id_petugas'] = $getId;
				$_SESSION['Nama_petugas'] = $getNama;

				echo "<script>
		 				alert('Selamat datang petugas-$getNama');
		 				document.location.href='../view/petugas/'
			  		  </script>";
			  		  
			}else {
				echo "<script>
		 				alert('Level not found');
		 				document.location.href='../'
			  		  </script>";
			}

		}else {
			echo "<script>
		 				alert('password incorect');
		 				document.location.href='../'
			  		  </script>";
		}
	}else {
		$sql2 = "SELECT * FROM pelanggan WHERE username = '$username'";
		$exe2 = $koneksi->query($sql2);
		$cek2 = $exe2->num_rows;
		$data2 = $exe2->fetch_array();
		$getpasswordp= $data2['password'];

		if ($cek2 > 0) {

			if (password_verify($password, $getpasswordp)) {
				
				$nama = $data2['nama'];
				$alamat = $data2['alamat'];
				$usernamep = $data2['username'];
				$passwordp = $data2['password'];
				$id_pelanggan = $data2['id_pelanggan'];

				$_SESSION['id_pelanggan'] = $id_pelanggan;
				$_SESSION['nama_pelanggan'] = $nama;
				$_SESSION['alamatp'] = $alamat;
				$_SESSION['usernamep'] = $usernamep;
				$_SESSION['passwordp'] = $passwordp;
		
					echo "<script>
				 				document.location.href='../public/';
					  		  </script>";
			}else {
				echo "<script>
		 				alert('password incorect');
		 				document.location.href='../'
			  		  </script>";

		}
		}echo "<script>
		 				alert('username incorect');
		 				document.location.href='../'
			  		  </script>";

	}
}


 ?>