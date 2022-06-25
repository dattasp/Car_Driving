<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="../img/favicon.html" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="../ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../bootstrap/bootstrap-icons%401.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-md-12">
                <h1 class="text-uppercase text-white text-center">Login Form</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light p-0">
        <div class="row gx-0 d-none d-lg-flex justify-content-center">
            <div class="col-md-5">
                <h1 class="text-uppercase text-dark text-center">Login</h1>
                <div class="row bg-primary">
                    <div class="col-md-12 p-5">
                        <form action="login_check.php" method="post">
                            <label>Username:</label>
                            <input type="text" name="username" class="form-control" required> <br>

                            <label>Password:</label>
                            <input type="Password" name="password" class="form-control" required> <br>

                            <button class="btn btn-dark">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script src="../jquery/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>