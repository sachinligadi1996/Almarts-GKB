<?php
session_start();

include("db_conn.php");
$userprofile = $_SESSION['$user_name'];
if ($userprofile == true) {

} else {
    header('location:login.php');
}
?>
<!--========================================================= 
    Item Name: Ekka - Ecommerce php Template + Admin Dashboard.
    Author: ashishmaraviya
    Version: 3.5
    Copyright 2023
    Author URI: https://themeforest.net/user/ashishmaraviya
 ============================================================-->
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-php/user-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:08 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Grameen Kendriya bazar</title>

    <meta name="keywords"
        content="apparel, catalog, clean, ecommerce, ecommerce php, electronics, fashion, php eCommerce, php store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce php template for single and multi vendor store.">
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
    <link rel="stylesheet" href="assets/css/demo11.css" />


    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body class="shop_page">
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

    <!-- ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    <li>
                        <a href="product-left-sidebar.php" class="sidekka_pro_img"><img
                                src="assets/images/product-image/6_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.php" class="cart_pro_title">T-shirt For Women</a>
                            <span class="cart-price"><span>$76.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.php" class="btn btn-primary">View Cart</a>
                    <a href="checkout.php" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ekka Cart End -->

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">User Profile</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="ec-breadcrumb-item active">Profile</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- User profile section -->
    <section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
        <div class="container">
            <div class="row">
                <!-- Sidebar Area Start -->
                <div class="ec-shop-leftside ec-vendor-sidebar col-lg-3 col-md-12">
                    <div class="ec-sidebar-wrap ec-border-box">
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-vendor-block">
                                <!-- <div class="ec-vendor-block-bg"></div>
                                <div class="ec-vendor-block-detail">
                                    <img class="v-img" src="assets/images/user/1.jpg" alt="vendor image">
                                    <h5>Mariana Johns</h5>
                                </div> -->
                                <div class="ec-vendor-block-items">
                                    <ul>
                                        <li><a href="user-profile.php">User Profile</a></li>
                                        <li><a href="user-history.php">Order History</a></li>
                                        <li><a href="track-order.php">Track Order</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $id = $_GET['id'];

                $query1 = "SELECT * FROM user where id='$id'";
                $data = mysqli_query($conn, $query1);

                $result = mysqli_fetch_assoc($data);


                ?>

                <div class="ec-shop-rightside col-lg-9 col-md-12">
                    <div class="ec-vendor-dashboard-card ec-vendor-setting-card">
                        <div class="ec-vendor-card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ec-vendor-block-profile">
                                        <div class="ec-vendor-block-img space-bottom-30">

                                            <div class="ec-vendor-block-detail">
                                                <!-- <img class="v-img" src="assets/images/user/1.jpg" alt="vendor image"> -->
                                                <h5 class="name">
                                                    <?php echo $result['name']; ?>
                                                </h5>
                                                <p>(Referral Id:-
                                                    <?php echo $result['referal_id']; ?>)
                                                </p>
                                            </div>
                                        </div>
                                        <h5>Edit Account Information</h5>

                                        <div class="row">
                                            <div class="ec-vendor-upload-detail">
                                                <form class="row g-3" action="#" method="POST">
                                                    <div class="col-md-6 space-t-15">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" name="name"
                                                            value="<?php echo $result['name']; ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-6 space-t-15">
                                                        <label class="form-label">Username</label>
                                                        <input type="text" class="form-control" name="username"
                                                            value="<?php echo $result['username']; ?>">
                                                    </div>
                                                    <div class="col-md-12 space-t-15">
                                                        <label class="form-label">Shipping Address</label>
                                                        <input type="text" class="form-control" name="shipping_address"
                                                            value="<?php echo $result['shipping_address']; ?>">
                                                    </div>
                                                    <div class="col-md-12 space-t-15">
                                                        <label class="form-label">Billing Address</label>
                                                        <input type="text" class="form-control" name="billing_address"
                                                            value="<?php echo $result['billing_address']; ?>">
                                                    </div>
                                                    <!-- <div class="col-md-12 space-t-15">
                                        <label class="form-label">Address 3</label>
                                        <input type="text" class="form-control">
                                    </div> -->
                                                    <div class="col-md-6 space-t-15">
                                                        <label class="form-label">Email id</label>
                                                        <input type="text" class="form-control" name="email"
                                                            value="<?php echo $result['email']; ?>">
                                                    </div>
                                                    <!-- <div class="col-md-6 space-t-15">
                                        <label class="form-label">Email id 2</label>
                                        <input type="text" class="form-control">
                                    </div> -->
                                                    <div class="col-md-6 space-t-15">
                                                        <label class="form-label">Phone number </label>
                                                        <input type="text" class="form-control" name="mobile"
                                                            value="<?php echo $result['mobile']; ?>">
                                                    </div>
                                                    <!-- <div class="col-md-6 space-t-15">
                                        <label class="form-label">Phone number 2</label>
                                        <input type="text" class="form-control">
                                    </div> -->
                                                    <div class="col-md-12 space-t-15">
                                                        <button type="submit" name="update"
                                                            class="btn btn-primary">Update</button>
                                                        
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End User profile section -->

    <!-- footer sec start -->
    <?php
    include "includes/footer.php";
    ?>
    <!-- footer sec End -->



  

    <?php

    if (isset($_POST['update'])) {
        $na = $_POST['name'];
        $una = $_POST['username'];
        $sa = $_POST['shipping_address'];
        $ba = $_POST['billing_address'];
        $mb = $_POST['mobile'];
        $em = $_POST['email'];


        $query = "UPDATE `user` set name='$na',username='$una',shipping_address='$sa',billing_address='$ba',mobile='$mb',email='$em' WHERE id='$id'";

        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "<script type='text/javascript'>

           
    Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'Details Updated Successfully',
      showConfirmButton: false,
      timer: 1500
    })

</script>";
            ?>
            <meta http-equiv="refresh" content="1; url = http://localhost:8080/Grameen K bazar\gkb_frontend\user-profile.php" />
            <?php
        } else {
            echo "Failed !!!";
        }
    }

    ?>

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
    <script src="assets/js/plugins/nouislider.js"></script>
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

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-php/user-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:09 GMT -->

</html>