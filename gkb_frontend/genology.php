<?php
session_start();

include("db_conn.php");

// Check if the user is logged in
if (!isset($_SESSION['$user_name'])) {
    // Redirect to the login page if the user is not logged in
    header('location: login.php');
    exit(); // Terminate further execution
}

$userprofile = $_SESSION['$user_name'];

// Fetch user details from the user table based on the logged-in user
$query = "SELECT user_id, name, refcode FROM user WHERE name = '$userprofile'";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
    // Fetch data of the logged-in user
    $showp = mysqli_fetch_assoc($result);
} else {
    // Handle the case where the query failed
    $errorMessage = mysqli_error($conn);
    // You might want to handle the error more gracefully
    echo "Error: $errorMessage";
    exit(); // Terminate further execution
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


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-php/track-order.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:09 GMT -->

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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">
</head>

<body class="track_order_page">
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
                            <h2 class="ec-breadcrumb-title">Track Tree Report</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="ec-breadcrumb-item active">Tree report</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec Track Order section -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <!-- Track Order Content Start -->
            <div class="ec-trackorder-content col-md-12">
                <div class="ec-trackorder-inner">
                    <div class="ec-trackorder-top">
                        <h2 class="ec-order-id">Tree Report</h2>
                    </div>
                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Member Selection</title>
                        <style>
                        /* Add your styling here */
                        </style>
                    </head>

                    <body>



                        <!-- Your existing HTML code -->
                        <?php
                           
                           $queryp = "SELECT * FROM user WHERE username='$userprofile'";
                           $datap = mysqli_query($conn,$queryp);
                            $showp = mysqli_fetch_assoc($datap);
                            $pname = $showp['name'];
                        
                           ?>

                        <!-- Your existing HTML code -->

                        <label for="primeMember"> Prime Member: <?php echo $showp['user_id']; ?>:<?php echo $showp['name']; ?></label>

                        <!-- Display Active Members based on Prime Member selection -->
                        <select  class="form-select" id="activeMember" onchange="loadNestedActiveMembers()">
                            <!-- This is where active members will be populated -->
                            <option value="" selected disabled>Select Active Member</option>
                            <?php
                            $primeMemberUserID = $showp['user_id'];
                            $query_show_active = mysqli_query($conn, "SELECT * FROM user WHERE refcode = '$primeMemberUserID'");

                            while ($showp = mysqli_fetch_array($query_show_active)) {
                            ?>
                                <option value="<?php echo $showp['user_id']; ?>">
                                    <?php echo $showp['name']; ?>:<?php echo $showp['user_id']; ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <!-- Display Nested Active Members based on Active Member selection -->
                        <select class="form-select" id="nestedActiveMember">
                            <!-- This is where nested active members will be populated -->
                            <option value="" selected disabled>Select Nested Active Member</option>
                        </select>

                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


                        <script>
                        $(document).ready(function() {
                            $('#nestedActiveMember').change(function() {
                                var selectedUserId = $(this)
                            .val(); // Get the selected user_id from the dropdown
                                var selectedUserName = $(this).find('option:selected')
                            .text(); // Get the selected username

                                // Display the selected user_id and username (name) for nested active members
                                console.log('Selected User ID:', selectedUserId);
                                console.log('Selected Username:', selectedUserName);
                            });
                        });

                        function loadActiveMembers() {
                            var primeMember = $("#primeMember").val();

                            $.ajax({
                                type: 'POST',
                                url: 'get_active_members.php',
                                data: {
                                    refcode: primeMember
                                },
                                success: function(response) {
                                    // Populate the active members dropdown with the retrieved data
                                    $('#activeMember').html(response);
                                },
                                error: function(xhr, status, error) {
                                    console.error(error);
                                }
                            });
                        }

                        function loadNestedActiveMembers() {
                            var activeMember = $("#activeMember").val();

                            $.ajax({
                                type: 'POST',
                                url: 'get_nested_active_members.php',
                                data: {
                                    activeMemberID: activeMember
                                },
                                success: function(response) {
                                    // Populate the nested active members dropdown with the retrieved data
                                    $('#nestedActiveMember').html(response);
                                },
                                error: function(xhr, status, error) {
                                    console.error(error);
                                }
                            });
                        }
                        </script>



                    </body>

                    </html>


                </div>
            </div>
            <!-- Track Order Content end -->
        </div>
    </section>
    <!-- End Track Order section -->

    <!-- footer sec start -->
    <?php 
    include "includes/footer.php";
    ?>
    <!-- footer sec End -->

    <!-- Modal -->
    <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <!-- Swiper -->
                            <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.php">Handbag leather purse for
                                        women</a>
                                </h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s,</div>
                                <div class="ec-quickview-price">
                                    <span class="old-price">$100.00</span>
                                    <span class="new-price">$80.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-color">
                                        <span>Color</span>
                                        <div class="ec-pro-color">
                                            <ul class="ec-opt-swatch">
                                                <li><span style="background-color:#696d62;"></span></li>
                                                <li><span style="background-color:#d73808;"></span></li>
                                                <li><span style="background-color:#577023;"></span></li>
                                                <li><span style="background-color:#2ea1cd;"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ec-pro-variation-inner ec-pro-variation-size ec-pro-size">
                                        <span>Size</span>
                                        <div class="ec-pro-variation-content">
                                            <ul class="ec-opt-size">
                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                        data-tooltip="Small">S</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Medium">M</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Large">X</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Extra Large">XL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus">
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                    </div>
                                    <div class="ec-quickview-cart ">
                                        <button class="btn btn-primary"><i class="fi-rr-shopping-basket"></i> Add To
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><i
                            class="fi-rr-menu-burger"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><i
                            class="fi-rr-shopping-bag"></i><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="index.php" class="ec-header-btn"><i class="fi-rr-home"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.php" class="ec-header-btn"><i class="fi-rr-heart"></i><span
                            class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="login.php" class="ec-header-btn"><i class="fi-rr-user"></i></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

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
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
    </script>
    <!-- Main Js -->
    <script src="assets/js/vendor/index.js"></script>
    <script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-php/track-order.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:10 GMT -->

</html>