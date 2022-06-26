<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>

  <!-- CSS Only -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
          <div class="container">
            <div class="row d-flex justify-content-center mt-5">
              <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card py-3 px-2">
                  <p class="text-center mb-3 mt-2">LOGIN</p>
                  <form method="POST" action="system/sys-login.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                      </div>
                     <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                      </div>
                     <!--  <div class="row">
                        <div class="col-md-6 col-12">
                          <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Stay logged in</label>
                          </div>
                        </div>
                      </div> -->
                      <div class="form-group mt-3">
                        <button type="submit" name= "submit" class="btn btn-block btn-primary btn-lg"><small><i class="far fa-user pr-2"></i>Submit</small></button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

</body>

<!-- Script JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>

