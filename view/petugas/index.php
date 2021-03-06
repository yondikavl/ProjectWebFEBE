<?php 
session_start();
$Namapetugas = $_SESSION['Nama_petugas'];
include'../403/petugas.php';
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard-Petugas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="?hal=profile_admin"><?=$Namapetugas?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?hal=homepetugas">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?hal=kasir">Kasir</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?hal=stok">Stok</a>
            </li>
          
          </ul>
        </div> 
            <a class="btn-logout" href="../../system/system-logout.php">
              <button type="button" class="btn btn-danger">LOGOUT</button>
            </a>
      </div>
    </nav>

    <?php 
    include'../../koneksi/controller.php'; ?>

    <!-- Style CSS -->
    <style>
      /* ===== Google Font Import - Poformsins ===== */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
      .navbar {
        background-color: #4070f4;
      }
    </style>

  </body>

  <!-- Script JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>