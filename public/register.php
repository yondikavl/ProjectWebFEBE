<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../assets/css/register.css">
         
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Registration</span>

                <form method="POST" action="system/sys-register.php">
                    <div class="input-field">
                        <input name="nama" type="text" placeholder="Enter your Name" required>
                        <i class="fa-solid fa-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="alamat" type="text" placeholder="Enter your Address" required>
                        <i class="fa-solid fa-location-dot icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="no_hp" type="text" placeholder="Enter your Phone Number" required>
                        <i class="fa-solid fa-phone icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="username"  type="text" placeholder="Enter your Username" required>
                        <i class="fa-solid fa-at icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="password" type="password" class="password" placeholder="Enter your password" required>
                        <i class="fa-solid fa-lock"></i>
                        <i class="fa-solid fa-eye showHidePw"></i>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login" name="register">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="../" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/register.js"></script>
    <script src="https://kit.fontawesome.com/861b96d111.js" crossorigin="anonymous"></script>

</body>
</html>
