<?php  
session_start();

   if (!$_SESSION['id_pelanggan']) {
      
    echo "<script>
        alert('Maaf Anda belum login');
        document.location.href='../'
          </script>";

    }

    $id_pelanggan = $_SESSION['id_pelanggan'] ;
    $nama = $_SESSION['nama_pelanggan'] ;
    $alamat = $_SESSION['alamatp'] ;
    $usernamep = $_SESSION['usernamep'] ;
    $passwordp = $_SESSION['passwordp'] ; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DASHBOARD PENGGUNA</title>

 	<!-- CSS Only -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!-- Style -->
   	<link rel="stylesheet" type="text/css" href="../assets/css/public.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?hal=homepengguna"><?=$nama?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../public/">Home</a>
          </li>
        
        </ul>
      </div>
            <a class="btn-login" href="../system/system-logout.php">
              <button type="button" class="btn btn-danger">LOGOUT</button>
            </a>
    </div>
  </nav>

<?php 
if (!$_GET) {
   
?>
  <div class="hero-img">
    <div class="text-hero">
      <center><h1>Kami Menyediakan Banyak Barang<br>Yang mungkin Anda Butuhkan</h1></center>
    </div>
    <div class="btn-hero">
		<a href="?hal=katalog">
		<center><button type="button" class="btn btn-success">View</button></center>
		</a>
    </div>
  </div>

<?php }else {

} ?>

<?php include'../koneksi/controller.php' ?>
  <div class="wave-img">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,96L80,112C160,128,320,160,480,186.7C640,213,800,235,960,213.3C1120,192,1280,128,1360,96L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
  </div>

</body>
</html>