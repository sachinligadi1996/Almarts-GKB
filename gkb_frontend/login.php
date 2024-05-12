<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:33 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Grameen Kendriya bazar</title>

    <meta name="keywords"
        content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <!-- <link rel="icon" href="assets/images/favicon/favicon.png" sizes="32x32" /> -->
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="assets/css/vendor/ecicons.min.css" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/countdownTimer.css" />
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- <link rel="stylesheet" href="assets/css/demo11.css" /> -->


    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
   <link rel="stylesheet" href="sweetalert2.min.css">

</head>

<body>
    <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header start  -->
    <header class="ec-header">
        <!--Ec Header Top Start -->
        <div class="header-top">
            <div class="container">
                <marquee behavior="" direction="left">
                    <div class="row align-items-center">
                        <!-- Header Top Message Start -->
                        <div class="col text-center header-top-center">
                            <div class="header-top-message text-upper">
                                <span class="text-success">ग्रामीण केंद्रीय बाजार... <span class="text-warning">किसान से
                                        लेकर किसान तक...</span></span>
                            </div>
                        </div>
                </marquee>
                <!-- Header Top Message End -->
                <!-- Header Top responsive Action -->
                <div class="col d-lg-none ">
                    <div class="ec-header-bottons">
                        <!-- Header User Start -->
                        <div class="ec-header-user dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown"><i
                                    class="fi-rr-user"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="register.html">Register</a></li>
                                <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                <li><a class="dropdown-item" href="login.html">Login</a></li>
                            </ul>
                        </div>
                        <!-- Header User End -->
                        <!-- Header Cart Start -->
                        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                            <div class="header-icon"><i class="fi-rr-shopping-bag"></i></div>
                            <span class="ec-header-count cart-count-lable">0</span>
                        </a>
                        <!-- Header Cart End -->
                        <!-- Header menu Start -->
                        <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                            <i class="fi fi-rr-menu-burger"></i>
                        </a>
                        <!-- Header menu End -->
                    </div>
                </div>
                <!-- Header Top responsive Action -->
            </div>
        </div>
        </div>
        <!-- Ec Header Top  End -->


        <!-- Ec login page -->
        <section class="ec-page-content section-space-p">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2 class="ec-bg-title">Log In</h2>
                            <h2 class="ec-title">Log In</h2>
                            <p class="sub-title mb-3">Best place to buy and sell digital products</p>
                        </div>
                    </div>
                    <div class="ec-login-wrapper">
                        <div class="ec-login-container">
                            <div class="ec-login-form">
                                <form action="" method="POST">
                                    <span class="ec-login-wrap">
                                        <label>Login with Username*</label>
                                        <input type="text"  name="username"
                                            placeholder="Enter your Username" required/>
                                    </span>
                                    <span class="ec-login-wrap">
                                        <label>Password*</label>
                                        <input type="password" name="password"
                                            placeholder="Enter your password" required />
                                    </span>
                                    <span class="ec-login-wrap ec-login-fp">
                                        <label><a href="#">Forgot Password?</a></label>
                                    </span>
                                    <span class="ec-login-wrap ec-login-btn">
                                        <input class="btn btn-primary" type="submit" name="submit" value="Login" />
                                        <a href="register.php" class="btn btn-secondary">Register</a>
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
        <div class="col-md-6">
            <div class="footer">
                <div class="float-right">
                    <div class="privacy">
                        <span class="green-text"><a href="terms-condition.html"><B>Terms & Condition</B></a></span>
                        <span><a href="privacy-policy.html">| <b>Our Policy</b></a></span>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Footer Copyright End -->
        </div>
        </footer>



        <!-- Cart Floating Button -->
        <div class="ec-cart-float">
            <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                <div class="header-icon"><i class="fi-rr-shopping-basket"></i>
                </div>
                <span class="ec-cart-count cart-count-lable">3</span>
            </a>
        </div>
        <!-- Cart Floating Button end -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.all.min.js"></script>

        <!-- Vendor JS -->
        <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
        <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

        <!--Plugins JS-->
        <script src="assets/js/plugins/swiper-bundle.min.js"></script>
        <script src="assets/js/plugins/countdownTimer.min.js"></script>
        <script src="assets/js/plugins/scrollup.js"></script>
        <script src="assets/js/plugins/jquery.zoom.min.js"></script>
        <script src="assets/js/plugins/slick.min.js"></script>
        <script src="assets/js/plugins/infiniteslidev2.js"></script>
        <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>
        <!-- Google translate Js -->
        <script src="assets/js/vendor/google-translate.js"></script>
        <script>
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
            }
        </script>
        <!-- Main Js -->
        <script src="assets/js/vendor/index.js"></script>
        <script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:33 GMT -->



<?php


include 'db_conn.php';

if (isset($_POST['submit']))
{
    $email = $_POST['username'];
    
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$email' && password = '$password' ";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    // $counts = mysqli_fetch_object($data);

    if($total == 1)
    {
      
      
        $_SESSION['$user_name'] = $email;
        echo "<script type='text/javascript'>    
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Welcome $email',
          showConfirmButton: false,
          timer: 1500
        })
    
    </script>";
        ?>
        <meta http-equiv = "refresh" content = "1; url = index.php" />
        <?php
    }
    else
    {
        echo "login not ok";
        
    }
}




?>
</html>