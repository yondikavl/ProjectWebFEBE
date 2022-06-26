<?php include'../403/admin.php'; ?>

<style type="text/css">
	.formtambah{
		margin-top: 20px;
	}
</style>

<div class="formtambah">
	<table class="table table-striped">
		<thead>
			<tr>
		      <th scope="col">Nama Barang</th>
		      <th scope="col">Ukuran</th>
		      <th scope="col">Warna</th>
		      <th scope="col">Stok</th>
		      <th scope="col">Harga</th>
		      <th scope="col">Foto</th>
		      <th scope="col">Aksi</th>
    		</tr>
		</thead>
		<tbody>
			<tr>
				<form class="form-control" method="POST" action="../../system/admin/sys-tambah_barang.php" enctype="multipart/form-data">
					<td><input type="text" name="Nama_Barang" required=""></td>
					<td><input type="text" name="Ukuran" required="" ></td>
					<td><input type="text" name="Warna" required="" ></td>
					<td><input type="text" name="Stok" required="" ></td>
					<td><input type="text" name="Harga" required=""></td>
					<td><input type="file" name="foto" required></td>
					<td><button  type="submit" class="btn btn-primary" name="tambah_barang"> Upload </button></td>
				</form>
			</tr>
		</tbody>
	</table>
</div>