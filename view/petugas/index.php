<?php 
session_start();
$NamaAdmin = $_SESSION['Nama_Admin'];
include'../403/admin.php';
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard-Pengguna</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="?hal=profile_admin"><?=$NamaAdmin?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?hal=homeadmin">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?hal=inventori">Kasir</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?hal=pengguna">Stok</a>
            </li>
            <li class="nav-item">
              <a class="btn-logout" href="../../system/system-logout.php">
                <button type="button" class="btn btn-success">Logout</button>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php 
    include'../../koneksi/controller.php'; ?>

    <!-- Style CSS -->
    <style>
      .navbar {
        background-color: #19123B;
      }
      .btn-logout {
        margin-right: 20px;
        margin-left: 1000px;
      }
    </style>

  </body>

  <!-- Script JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>