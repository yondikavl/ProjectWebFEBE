<?php 
session_start();
include'../403/admin.php'; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT BARANG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

  <style type="text/css">
		.formedit{
			margin-top: 20px;
			margin-right: 20px;
			margin-left: 20px;
		}

		img {
			width: 150px;
		}

		img:hover{
			width: 350px;
			transition: 2s;
		}
	</style>

	<?php 
		include'../../koneksi/koneksi.php';
		$idBarang = $_GET['id'];
		$query = "SELECT * FROM inventaris WHERE id_barang = $idBarang ";
		$exe = $koneksi->query($query);
		$data = $exe->fetch_array();
	?>
	
		<div class="formedit">
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
				      <td scope="col"><?=$data['nama']?></td>
				      <td scope="col"><?=$data['ukuran']?></td>
				      <td scope="col"><?=$data['warna']?></td>
				      <td scope="col"><?=$data['stok']?></td>
				      <td scope="col"><?=$data['harga']?></td>
				      <td scope="col"><img src="../../assets/img/Inventory/<?=$data['foto']?>"></td>
		    		</tr>
					<tr>
						<form method="POST" action="" enctype="multipart/form-data">
							<td><input type="text" name="Nama_Barang"></td>
							<td><input type="text" name="Ukuran" ></td>
							<td><input type="text" name="Warna" ></td>
							<td><input type="text" name="Stok" ></td>
							<td><input type="text" name="Harga" ></td>
							<td><input type="file" name="foto" ></td>
							<td><button  type="submit" class="btn btn-primary" name="edit_barang"> Upload </button></td>
						</form>
						<?php 
						include'../../system/admin/edit_barang.php';
						 ?>
					</tr>
				</tbody>
			</table>
		</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>