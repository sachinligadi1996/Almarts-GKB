<?php
session_start();

include("db.php");
// $userprofile = $_SESSION['$user_name'];
//  if ($userprofile == true) {

//  } else {
//  	header('location:adminlogin.php');
//  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ekka - Admin Dashboard HTML Template." />
    <title>Gangotri Ganga</title>
    
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet" />

    <link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- Ekka CSS -->
    <link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="sign-inup" id="body">
    <div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="ec-brand">
                            <a href="index.html" title="GKB">
                                <!-- <img class="ec-brand-icon" src="assets/img/logo/logo-login.png" alt="" /> -->
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        <h4 class="text-dark mb-5">Sign In Stockist</h4>
                        <form action="loginconnect.php" method="post">
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <label for="email">Username</label>
                                    <input type="text" class="form-control" id="email" placeholder="Enter your username" name="vendor_username" required />
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter your password" name="vendor_pass" required />
                                </div>

                                <div class="col-md-12">
                                    <div class="d-flex my-2 justify-content-between">
                                        <div class="d-inline-block mr-3">
                                            
                                        </div>

                                        <p><a class="text-blue" href="forgetpass.php">Forgot Password?</a></p>
                                    </div>

                                    <input type="submit" class="btn btn-primary btn-block mb-4" name="submit" value="Sign In" />

                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>

    <!-- Ekka Custom -->
    <script src="assets/js/ekka.js"></script>
</body>
</html>



