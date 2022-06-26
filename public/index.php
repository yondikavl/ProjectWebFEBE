<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LANDING PAGE</title>

 	<!-- CSS Only -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!-- Style -->
   	<link rel="stylesheet" type="text/css" href="style.css">
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
            <a class="nav-link active" aria-current="page" href="?hal=homeadmin">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?hal=inventori">Inventori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?hal=pengguna">Pengguna</a>
          </li>
          <li class="nav-item">
            <a class="btn-login" href="../../system/sys-login.php">
              <button type="button" class="btn btn-success">Login</button>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="hero-img">
    <div class="text-hero">
      <center><h1>Kami Menyediakan Banyak Barang<br>Yang mungkin Anda Butuhkan</h1></center>
    </div>
    <div class="btn-hero">
		<a href="../../system/sys-login.php">
		<center><button type="button" class="btn btn-success">Login</button></center>
		</a>
    </div>
  </div>
  <div class="wave-img">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,96L80,112C160,128,320,160,480,186.7C640,213,800,235,960,213.3C1120,192,1280,128,1360,96L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
  </div>

</body>
</html>