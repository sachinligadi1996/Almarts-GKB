
 <?php
session_start();

include("db_conn.php");
// $userprofile = $_SESSION['$user_name'];
// if($userprofile == true)
// {

// }
// else
// {
//     header('location:login.php');
// }
// ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-php/contact-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:31 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Grammeen Kendriya Bazar</title>
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
    <style>
        .table-meb{
            height: 80px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            background-color: white;
        }
        .table-meb th{
            padding-top: 20px;
            background-color:#75baeb;
            color: whitesmoke;
        }
        .table-data td{
            height: 50px;
            font-size: 20px;
            text-align: center;
            font-weight: 600;

        }
    </style>
</head>

<body class="contact_us_page">
    <!-- <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->

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
                            <h2 class="ec-breadcrumb-title">Pramotion/Bonus Details</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="ec-breadcrumb-item active">Pramotion/Bonus Details</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->
    <div class="container">
        <table class="table table-striped table-hover">
<tr class="table-meb">
    <th>Position</th>
    <th>Achievement Bonus</th>
    <th>Travel Allow.</th>
    <th>Monthly Target</th>
    <th>Monthly Bonus</th>
    <th>Qtly Target</th>
    <th>Qtly Incentive</th>
    <th>Half Yearly Target</th>
    <th>Half Yearly Bonus</th>
    

</tr>
<tr >
                                            <?php
                                                $i = 1;
                                                $query = "SELECT * FROM `bonuse_to` ORDER BY `id` asc";
                                                $qury_run = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_assoc($qury_run)) {
                                                    ?>
                                                    <tr class="table-data">
                                                       <!--  <td>
                                                            <?php echo $i; ?>
                                                        </td> -->
                                                        <td>
                                                            <?php echo $row['rank']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['achivment_bo']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['gkb_ta']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['month_target']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['month_bo']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['qtly_target']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['qtly_incentive']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['half_year_target']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['half_year_bo']; ?>
                                                        </td>
</tr>
<?php
                                                $i++;
                                                }
                                                ?>
</table>
</div>
    <!-- Ec Contact Us page -->
    
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

</body>

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-php/contact-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:31 GMT -->

</html>


