<!--========================================================= 
    Item Name: Ekka - Ecommerce php Template + Admin Dashboard.
    Author: ashishmaraviya
    Version: 3.5
    Copyright 2023
    Author URI: https://themeforest.net/user/ashishmaraviya
 ============================================================-->
 <?php
session_start();

include("db_conn.php");

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-php/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:33 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Grameen Kendriya Bazar</title>
    <meta name="keywords"
        content="apparel, catalog, clean, ecommerce, ecommerce php, electronics, fashion, php eCommerce, php store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce php template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">
    <style>
        #membership {
            border: 1px solid gray !important;
        }

        .error {
            color: red;
        }
    </style>

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
    <link rel="stylesheet" href="assets/css/demo11.css" />


    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">
</head>

<body class="register_page">
    <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header start  -->
    <?php
    include "includes/header.php";
    ?>
    <!-- Header End  -->

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Register</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="ec-breadcrumb-item active">Register</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Start Register -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Register</h2>
                        <h2 class="ec-title">Register</h2>
                        <p class="sub-title mb-3">Best place to buy and sell digital products</p>
                    </div>
                </div>
                <div class="ec-register-wrapper">
                    <div class="ec-register-container">
                        <div class="ec-register-form">
                            <form action="" method="post" id="validForm" enctype="multipart/form-data">
                                <span class="ec-register-wrap ec-register-half">
                                    <label for="name">Full Name*</label>
                                    <input type="text" name="name" placeholder="Enter your name"/>

                                    <input type="hidden" name="rand" value="<?php echo "GKB_" . rand(1000, 99999) ?>">
                                    <!-- <div class="error" id="nameError"></div> -->
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label for="mobile">Phone Number*</label>
                                    <input type="tel" name="mobile" id="phone" placeholder="Enter your phone number"
                                        required />
                                    <div class="error" id="phoneError"></div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label for="email">Email*</label>
                                    <input type="email" id="email" name="email" placeholder="Enter your email add..." />
                                    <div class="error" id="emailError"></div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label for="email">Aadhar Card Number*</label>
                                    <input type="number" name="adhar_id" id="adhar"
                                        placeholder="Enter your Aadhar Number..." required />
                                    <div class="error" id="adharError"></div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label for="email">Kisan Card Number*</label>
                                    <input type="text" name="kisan_id" id="kisan"
                                        placeholder="Enter your Kisan card number..." />
                                    <div class="error" id="kisanError"></div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label for="email">Pan Card Number*</label>
                                    <input type="text" name="pan_id" id="pan" placeholder="Enter your Pan number..."
                                        required />
                                    <div class="error" id="panError"></div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label for="address">Current Address*</label>
                                    <textarea id="caddress" name="baddress"
                                        placeholder="Enter Current Address"></textarea>
                                    <div class="error" id="caddressError"></div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label for="city"> permanent Address*</label>
                                    <textarea name="saddress" placeholder="Enter Permanent Address"
                                        id="paddress"></textarea>
                                    <div class="error" id="paddressError"></div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label for="password">Username*</label>
                                    <input type="text" name="username" id="uname" placeholder="Enter Username"
                                        required />
                                    <div class="error" id="unamenameError"></div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label for="password">Password*</label>
                                    <input type="Password" name="password" id="password" placeholder="Enter Password"
                                        required />
                                    <div class="error" id="passwordError"></div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label for="cpassword">Confirm Password*</label>
                                    <input type="Password" name="cpassword" id="cpass" placeholder="Confirm Password"
                                        required />
                                    <div class="error" id="cpasswordError"></div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label for="cpassword">Membership</label>
                                    <select class="form-control" id="membership" name="membership"
                                        style="border:2px solid black;">
                                        <option value="select Membership">Select Membership</option>
                                        <option value="Prime Membership">Prime Membership</option>
                                        <option value=" Non Prime Membership">Non Prime Membership</option>
                                    </select>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label for="cpassword">Referral Code*</label>
                                    <input type="text" name="refcode" id="cpass" placeholder="Enter Your Referral Code" />
                                    <div class="error" id="cpasswordError"></div>
                                </span>
                                <span class="ec-register-wrap ec-register-btn">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Register">
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Register -->

    <!-- footer sec start -->
    <?php
    include "includes/footer.php";
    ?>
    <!-- footer sec End -->


    <!-- Cart Floating Button -->
    <div class="ec-cart-float">
        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
            <div class="header-icon"><i class="fi-rr-shopping-basket"></i>
            </div>
            <span class="ec-cart-count cart-count-lable">3</span>
        </a>
    </div>
    <!-- Cart Floating Button end -->

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
    <script>
        document.getElementById("validForm").addEventListener("submit", function (event) {
            const name = document.getElementById('name');
            const phone = document.getElementById('phone');
            const email = document.getElementById('email');
            const adhar = document.getElementById('adhar');
            const kisan = document.getElementById('kisan');
            const pan = document.getElementById('pan');
            const caddress = document.getElementById('caddress');
            const paddress = document.getElementById('paddress');
            const uname = document.getElementById('uname');
            const password = document.getElementById('password');
            const cpassword = document.getElementById('cpass');

            validateField(name, "nameError", "Please Enter Name.", event);
            validateField(phone, "phoneError", "Please Enter Phone Number.", event);
            validateField(email, "emailError", "Please Enter Email.", event);
            validateField(adhar, "adharError", "Please Enter Adhar ID.", event);
            validateField(kisan, "kisanError", "Please Enter Kisan ID.", event);
            validateField(pan, "panError", "Please Enter Pan ID.", event);
            validateField(caddress, "caddressError", "Please Enter Current Address.", event);
            validateField(paddress, "paddressError", "Please Enter Permanent Address.", event);
            validateField(uname, "unamenameError", "Please Enter Username.", event);
            validateField(password, "passwordError", "Please Enter Password.", event);
            validateField(cpassword, "cpasswordError", "Please Confirm Password.", event);
        });

        function validateField(field, errorId, errorMessage, event) {
            if (!field.value) {
                displayError(errorId, errorMessage);
                event.preventDefault();
            } else {
                clearError(errorId);
            }
        }

        function displayError(id, message) {
            const errorElement = document.getElementById(id);
            errorElement.textContent = message;
            errorElement.style.color = "red";
        }

        function clearError(id) {
            const errorElement = document.getElementById(id);
            errorElement.textContent = "";
        }
    </script>

    <!-- ... (Your script and other parts remain unchanged) ... -->

</body>

</html>
</body>

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-php/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:33 GMT -->

</html>

<?php
if (isset($_POST['submit'])) {
    $rand = $_POST['rand'];
    $name = $_POST['name'];
    $mob = $_POST['mobile'];
    $adhar = $_POST['adhar_id'];
    $pan = $_POST['pan_id'];
    $kisan = $_POST['kisan_id'];

    $mail = $_POST['email'];
    $badd = $_POST['baddress'];
    $sadd = $_POST['saddress'];
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $membership = $_POST['membership'];
    $refcode = $_POST['refcode'];

    // Corrected SQL Query
    $sql = "INSERT INTO `user` (`user_id`,`name`, `mobile`, `email`,`adhar_id`,`pan_id`,`kisan_id`, `billing_address`, `shipping_address`, `username`, `password`, `membership`, `refcode`) 
            VALUES ('$rand','$name', '$mob', '$mail','$adhar' ,'$pan','$kisan','$badd', '$sadd', '$uname', '$pass', '$membership', '$refcode')";

    // Use prepared statements or sanitize input to prevent SQL injection
    $q_run = mysqli_query($conn, $sql);

    if ($q_run) {
        echo "success";
    } else {
        echo "error: " . mysqli_error($conn);
    }
}
?>