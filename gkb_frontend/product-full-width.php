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
$userprofile = $_SESSION['$user_name'];
if($userprofile == true)
{

}
else
{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-php/product-full-width.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:03 GMT -->

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
</head>

<body class="product_page">
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
                            <h2 class="ec-breadcrumb-title">Single Products</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="ec-breadcrumb-item active">Products</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Sart Single product -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-pro-rightside ec-common-rightside col-lg-12 col-md-12">

                    <!-- Single product content Start -->
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="row">
                                <div class="single-pro-img single-pro-img-no-sidebar">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover">
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="assets/images/product-360/1_1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="assets/images/product-360/1_2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="assets/images/product-360/1_3.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="assets/images/product-360/1_4.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="assets/images/product-360/1_5.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="single-nav-thumb">
                                            <div class="single-slide">
                                                <img class="img-responsive" src="assets/images/product-360/1_1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="assets/images/product-360/1_2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="assets/images/product-360/1_3.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-pro-desc single-pro-desc-no-sidebar">
                                    <div class="single-pro-content">
                                        <h5 class="ec-single-title">Women Leather Heels Sandal</h5>
                                        <div class="ec-single-price-stoke">
                                            <div class="ec-single-price">
                                                <span class="ec-single-ps-title">As low as</span>
                                                <span class="new-price">₹68.00</span>
                                            </div>
                                        </div>
                                        <div class="ec-single-qty">
                                            <div class="qty-plus-minus">
                                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                            </div>
                                            <div class="ec-single-cart ">
                                                <button class="btn btn-primary">Add To Cart</button>
                                            </div>
                                            <div class="ec-single-quickview">
                                                <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single product content End -->
                    <!-- Single product tab start -->
                    <div class="ec-single-pro-tab">
                        <div class="ec-single-pro-tab-wrapper">
                            <div class="ec-single-pro-tab-nav">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#ec-spt-nav-details" role="tablist">Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-info"
                                            role="tablist">More Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-review"
                                            role="tablist">Reviews</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content  ec-single-pro-tab-content">
                                <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                    <div class="ec-single-pro-tab-desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s.
                                        </p>
                                    </div>
                                </div>
                                <div id="ec-spt-nav-info" class="tab-pane fade">
                                    <div class="ec-single-pro-tab-moreinfo">
                                        <ul>
                                            <li><span>Weight</span> 1000 g</li>
                                            <!-- <li><span>Dimensions</span> 35 × 30 × 7 cm</li>
                                            <li><span>Color</span> Black, Pink, Red, White</li> -->
                                        </ul>
                                    </div>
                                </div>

                                <div id="ec-spt-nav-review" class="tab-pane fade">
                                    <div class="row">
                                        <div class="ec-t-review-wrapper">
                                            <div class="ec-t-review-item">
                                                <div class="ec-t-review-content">
                                                    <div class="ec-t-review-top">
                                                        <div class="ec-t-review-name">Linda Morgus</div>
                                                    </div>
                                                    <div class="ec-t-review-bottom">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s, when an unknown
                                                            printer took a galley of type and scrambled it to make a
                                                            type specimen.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="ec-ratting-content">
                                            <h3>Add a Review</h3>
                                            <div class="ec-ratting-form">
                                                <form action="#" method="post">
                                                    <div class="ec-ratting-input">
                                                        <input name="name" placeholder="Name" type="text" />
                                                    </div>
                                                    <div class="ec-ratting-input">
                                                        <input name="email" placeholder="Email*" type="email"
                                                            required />
                                                    </div>
                                                    <div class="ec-ratting-input form-submit">
                                                        <textarea name="comment" placeholder="Rata Us"></textarea>
                                                        <button class="btn btn-primary" type="submit" value="Submit"
                                                            name="save">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                </div>

            </div>
        </div>
    </section>
    <!-- End Single product -->

    <!-- footer sec start -->
    <?php
    include "includes/footer.php";
    ?>
    <!-- footer sec End -->

    <!-- 360 Modal -->
    <div class="modal fade" id="ec_360_view_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row ec-product-360">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="ec-360-panel ec-360-panel-default">
                                <a class="btn btn-default ec-360-btn qty_close" data-bs-dismiss="modal"
                                    aria-label="Close">×</a>
                                <div class="ec-360-panel-body">
                                    <div id="circlr" class="ec-circlr">
                                        <img data-src="assets/images/product-360/00.jpg"
                                            src="assets/images/product-360/00.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/01.jpg"
                                            src="assets/images/product-360/01.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/02.jpg"
                                            src="assets/images/product-360/02.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/03.jpg"
                                            src="assets/images/product-360/03.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/04.jpg"
                                            src="assets/images/product-360/04.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/05.jpg"
                                            src="assets/images/product-360/05.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/06.jpg"
                                            src="assets/images/product-360/06.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/07.jpg"
                                            src="assets/images/product-360/07.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/08.jpg"
                                            src="assets/images/product-360/08.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/09.jpg"
                                            src="assets/images/product-360/09.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/10.jpg"
                                            src="assets/images/product-360/10.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/11.jpg"
                                            src="assets/images/product-360/11.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/12.jpg"
                                            src="assets/images/product-360/12.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/13.jpg"
                                            src="assets/images/product-360/13.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/14.jpg"
                                            src="assets/images/product-360/14.jpg" alt="product image">
                                        <img data-src="assets/images/product-360/15.jpg"
                                            src="assets/images/product-360/15.jpg" alt="product image">
                                        <div id="loader" class="ec-img-loader"></div>
                                    </div>
                                </div>
                                <p class="ec-tool-play">
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.play(); return false;"><i class="fi-rr-play"></i></a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.stop(); return false;"><i class="fi-rr-stop"></i></a>
                                </p>
                            </div>
                        </div>

                        <div class="ec-tool-box-sec">
                            <div class="ec-tool-box space-b-15">
                                <h4>Cycle</h4>
                                <label class="ec-switch">
                                    <input class="ec-cycle" type="checkbox">
                                    <span class="ec-slider"></span>
                                </label>
                            </div>

                            <div class="ec-tool-box space-b-15">
                                <h4>Reverse</h4>
                                <label class="ec-switch">
                                    <input class="ec-reverse" type="checkbox">
                                    <span class="ec-slider"></span>
                                </label>
                            </div>

                            <div class="ec-tool-box space-b-15">
                                <h4>Vertical</h4>
                                <label class="ec-switch">
                                    <input class="ec-vertical" type="checkbox">
                                    <span class="ec-slider"></span>
                                </label>
                            </div>

                            <div class="ec-tool-box-2 space-b-15">
                                <h4>Rotation</h4>
                                <p>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(9); return false;">9</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(8); return false;">8</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(7); return false;">7</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(6); return false;">6</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(5); return false;">5</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(4); return false;">4</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(3); return false;">3</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(2); return false;">2</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(1); return false;">1</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.turn(0); return false;">0</a>
                                </p>
                            </div>

                            <div class="ec-tool-box-2">
                                <h4>Goto n frame</h4>
                                <p>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(9); return false;">9</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(8); return false;">8</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(7); return false;">7</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(6); return false;">6</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(5); return false;">5</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(4); return false;">4</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(3); return false;">3</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(2); return false;">2</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(1); return false;">1</a>
                                    <a href="#" class="btn btn-default ec-360-btn"
                                        onclick="crl.go(0); return false;">0</a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

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
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.php">Handbag leather purse for women</a>
                                </h5>
                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.</div>
                                <div class="ec-quickview-price">
                                    <span class="old-price">₹100.00</span>
                                    <span class="new-price">₹80.00</span>
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

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-php/product-full-width.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:03 GMT -->

</html>

<?php
    if (isset($_POST['save'])) {

        $name = $_POST['name'];
        $mail = $_POST['email'];
        $coment = $_POST['comment'];

        $sql = "INSERT INTO `review_table`(`user_name`, `user_email`, `user_review`) VALUES ('$name','$mail','$coment')";
        $qurey_run = mysqli_query($conn, $sql);
        if ($qurey_run) {
            echo "success";
        } else {
            echo "error";
        }
    }
    ?>