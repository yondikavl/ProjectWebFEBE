<?php include '../403/admin.php'; ?>

<div class="container mt-3">
 <?php 
$id = $_SESSION['id_getId'];
$sql = "SELECT * FROM admin WHERE id_petugas = '$id'";
include'../../koneksi/koneksi.php';
$exe = $koneksi->query($sql);
$data = $exe->fetch_array();
 ?>
	<center>
	<img  width="100" src="../../assets/img/admin/<?=$data['foto']?>">
	</center>
	<table class="table center mt-4">
		<tr>
			<td>Nama</td>
			<td><input class="form-control" type="text" name="" readonly="" value="<?= $data['nama'] ?>"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input class="form-control" type="text" name="" readonly="" value="<?= $data['username'] ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input class="form-control" type="text" name="" readonly="" value="<?= $data['password'] ?>"></td>
		</tr>
	
		<tr>
			<td>Level</td>
			<td><input class="form-control" type="text" name="" readonly="" value="<?= $data['level'] ?>"></td>
		</tr>
	</table>
