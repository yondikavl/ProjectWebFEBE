
<style type="text/css">

	.container-photocard{
		display: inline-flex;
		padding-left: 30px;
		padding: 10px;
		border-style: solid;
	  	border-color: black;
	  	margin-left: 20px;
	  	margin-bottom: 10px;
	}
	.photocard img{
		width:200px;
		height:250px; 
		border-style: solid;
	  	border-color: black;
	}
	.photocard h5{
		color: blue;
	}
	.judul{
		padding: 10px;
		margin-bottom: 10px;
	}
</style>

  <div class="hero-img">
    <div class="text-hero">
      <center><h1>Kami Menyediakan Banyak Barang<br>Yang mungkin Anda Butuhkan</h1></center>
    </div>
    <div class="btn-hero">
		<a href="../public">
		<center><button type="button" class="btn btn-success">View</button></center>
		</a>
    </div>
  </div>
  <br>

<?php 
	include'../koneksi/koneksi.php';
	$sql = "SELECT * FROM inventaris ORDER BY id_barang DESC ";
	$exe = $koneksi->query($sql);

	while($data = $exe->fetch_array()) {
?>

<div class="container-photocard">
	<div class="photocard" >
		<center><h2><?=$data['nama']?></h2>

		<img src="../assets/img/Inventory/<?=$data['foto']?>">
		
		<h5>Rp.<?=$data['harga']?></h5></center>
	</div>
</div>

<?php } ?>
