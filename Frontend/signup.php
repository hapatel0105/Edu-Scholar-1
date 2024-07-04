<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Yummy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/logo.jpg" rel="icon">
    <link href="assets/img/logo1.jpg" rel="logo1.jpg">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        
        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <form method="post">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Yummy</h3>
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="U_name" class="form-control" id="floatingText" placeholder="User Name">
                            <label for="floatingText" >Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="U_email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput" >Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="U_pass" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword" >Password</label>
                        </div>
                        <button type="submit" href="sign.php" name="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        <?php
                                if(isset($_POST['submit']))
                                {
                                    $conn=mysqli_connect("localhost","root","","Yummy");
                                    $qry="insert into User_signup values('','".$_POST['U_name']."','".$_POST['U_email']."','".$_POST['U_pass']."')";
                                    mysqli_query($conn,$qry) or die(mysqli_error());
                                    echo "Insert Successfully";
                                }
                                ?>
                        <p class="text-center mb-0">Already have an Account? <a href="signin.php">Sign In</a></p>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/chart/chart.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="main.js"></script>
</body>

</html>