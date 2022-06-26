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
		      <th scope="col">nama</th>
		      <th scope="col">Username</th>
		      <th scope="col">Password</th>
		      <th scope="col">Level</th>
    		</tr>
		</thead>
		<tbody>
			<tr>
				<form enctype="multipart/form-data" method="POST" action="../../system/admin/sys-tambah_pengguna.php">
					<td><input type="text" name="nama_petugas" required=""></td>
					<td><input type="text" name="username" required="" ></td>
					<td><input type="text" name="password" required="" ></td>
					<td><input type="text" name="level" list="level" placeholder="admin / pengguna">
					   	<datalist id="level">
					      <option value="admin">
					      <option value="petugas">
					    </datalist>
					</td>
					<td><input type="file" name="foto"></td>
					<td><button  type="submit" class="btn btn-primary" name="tambah_pengguna"> Upload </button></td>
				</form>
			</tr>
		</tbody>
	</table>
</div>