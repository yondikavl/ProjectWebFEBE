
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

	*{
		font-family: 'Poppins', sans-serif;
	}
	body {
		background-color: #4070f4;
	}
	.container-photocard{
		display: inline-flex;
		padding-left: 40px;
		padding: 10px;
	  	margin-left: 20px;
	  	margin-bottom: 10px;
		margin-top: 20px;
		background-color: #fff;
		border-radius:10px;
	}
	.photocard img{
		width:200px;
		height:250px; 
		border-style: solid;
	  	border-color: #4070f4;
		border-radius: 10px;
	}
	.photocard h5{
		color: #4070f4;
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
