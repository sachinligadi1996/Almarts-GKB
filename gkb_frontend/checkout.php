<?php
session_start();
include("db_conn.php");
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:31 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Grameen Kendriya bazar</title>
    <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
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
    <link rel="stylesheet" href="assets/css/demo11.css" />


    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">
</head>

<body class="checkout_page">
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
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="assets/images/product-image/6_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">T-shirt For Women</a>
                            <span class="cart-price"><span>$76.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="assets/images/product-image/12_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Women Leather Shoes</a>
                            <span class="cart-price"><span>$64.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="assets/images/product-image/3_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Girls Nylon Purse</a>
                            <span class="cart-price"><span>$59.00</span> x 1</span>
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
                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                    <a href="checkout.html" class="btn btn-secondary">Checkout</a>
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
                            <h2 class="ec-breadcrumb-title">Checkout</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Checkout</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec checkout page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <form action="place_order.php" method="post">
                <div class="row">
                    <div class="ec-checkout-leftside col-lg-8 col-md-12 ">
                        <!-- checkout content Start -->
                        <div class="ec-cart-leftside col-lg-12 col-md-12 ">
                            <!-- cart content Start -->
                            <div class="ec-cart-content">
                                <div class="ec-cart-inner">
                                    <div class="row">
                                        <div class="table-content cart-table-content">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Price</th>
                                                        <th style="text-align: center;">Quantity</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    // $id_cust = $_SESSION['auth_user']['user_id'];
                                                    $id_cust = 1;

                                                    $i = 1;
                                                    $stmt = $conn->prepare('SELECT * FROM cart');
                                                    $stmt->execute();
                                                    $result = $stmt->get_result();
                                                    $gt = 0;
                                                    while ($row = $result->fetch_assoc()) {
                                                        $id_prod = $row['product_id'];
                                                        $sql = "SELECT * FROM products WHERE id= '$id_prod'";
                                                        $execute = mysqli_query($conn, $sql);
                                                        $show = mysqli_fetch_assoc($execute);
                                                    ?>
                                                        <tr>
                                                            <td data-label="Product" class="ec-cart-pro-name"><a href="product-left-sidebar.html"><img class="ec-cart-pro-img mr-4" src="assets/images/product-image/18_1.jpg" alt="" /><?php echo $show['prod_name']; ?></a></td>
                                                            <td data-label="Price" class="ec-cart-pro-price"><span class="amount"><?php echo $show['new_price']; ?></span></td>
                                                            <td data-label="Quantity" class="ec-cart-pro-qty text-center"><span class="text-center"><?php echo $row['quantity']; ?></span></td>
                                                            <?php
                                                            $quant = $row['quantity'];
                                                            $price = $show['new_price'];
                                                            $total = $quant * $price;
                                                            $gt = $gt + $total;
                                                            ?>
                                                            <td data-label="Total" class="ec-cart-pro-subtotal"><?php echo $total; ?></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    $subTotal = $gt;
                                                    // $chrg = $subTotal * (2 / 100);
                                                    // $grantTotal = $subTotal + $chrg;
                                                    $grantTotal = $subTotal;
                                                    ?>
                                                    <input type="hidden" name="subTotal" value="<?= $subTotal; ?>">
                                                    <!-- <input type="hidden" name="delCharges" value="<?= $chrg; ?>"> -->
                                                    <input type="hidden" name="grantTotal" value="<?= $grantTotal; ?>">
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--cart content End -->
                        </div>
                        <div class="ec-checkout-content">
                            <div class="ec-checkout-inner">
                                <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                                    <div class="ec-checkout-block ec-check-bill">
                                        <h3 class="ec-checkout-title">Billing Details</h3>
                                        <div class="ec-bl-block-content">
                                            <div class="ec-check-bill-form">
                                                <?php
                                                $stmt = $conn->prepare("SELECT * FROM user WHERE user_id = '$id_cust'");
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                $show = $result->fetch_assoc()
                                                ?>
                                                <form action="" method="">
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>Full Name*</label>
                                                        <input type="text" name="fullname" placeholder="Enter your first name" value="<?php echo $show['name']; ?>" required />
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>Mobile Number*</label>
                                                        <input type="text" name="mobile" placeholder="Enter your last name" value="<?php echo $show['mobile']; ?>" required />
                                                    </span>
                                                    <span class="ec-bill-wrap">
                                                        <label>Address</label>
                                                        <textarea name="address" id="" cols="30" rows="2" value="<?php echo $show['shipping_address']; ?>"><?php echo $show['shipping_address']; ?></textarea>
                                                        <!-- <input type="text" name="address" placeholder="Address Line 1" value="<?php echo $show['shipping_address']; ?>" /> -->
                                                    </span>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--cart content End -->
                    </div>
                    <!-- Sidebar Area Start -->
                    <div class="ec-checkout-rightside col-lg-4 col-md-12">
                        <div class="ec-sidebar-wrap">
                            <!-- Sidebar Summary Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Summary</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <div class="ec-cart-summary-bottom">
                                        <div class="ec-cart-summary">
                                            <?php
                                            // $id_cust = $_SESSION['auth_user']['user_id'];
                                            $id_cust = 1;
                                            $stmt = $conn->prepare("SELECT * FROM prime_members WHERE user_id = '$id_cust'");
                                            $stmt->execute();
                                            $result = $stmt->get_result();
                                            $row = $result->fetch_assoc();
                                            $card_bal = $row['first_purchase'];
                                            $subTotal = $_SESSION['cartdata']['subTotal'];
                                            $grantTotal = $_SESSION['cartdata']['grantTotal'];

                                            ?>
                                            <div>
                                                <span class="text-left">Sub-Total</span>
                                                <span class="text-right"><?php echo $subTotal; ?></span>
                                            </div>
                                            <div>
                                                <span class="text-left">Delivery Charges</span>
                                                <span class="text-right"><?php echo '0' ?></span>
                                            </div>
                                            <div>
                                                <span class="text-left">Card Points: <b><?php echo $card_bal; ?></b></span>
                                                <span class="text-right"><a class="ec-cart-coupan">Use Points</a></span>
                                            </div>
                                            <div class="ec-cart-coupan-content">
                                                <form class="ec-cart-coupan-form" name="ec-cart-coupan-form" method="post" action="">
                                                    <input class="ec-coupan" type="text" required="" placeholder="Enter Your Points" name="use_points">
                                                    <input type="hidden" name="grantTotal" value="<?php echo $grantTotal; ?>">
                                                    <input type="hidden" name="card_bal" value="<?php echo $card_bal; ?>">
                                                    <button class="ec-coupan-btn button btn-primary" type="submit" name="apply_points" value="">Apply</button>
                                                </form>
                                            </div>
                                            <?php
                                            if (isset($_POST['apply_points'])) {
                                                $use_points = $_POST["use_points"];
                                                if ($use_points < $card_bal) {
                                                    $avl_bal = $card_bal - $use_points;
                                                    $new_grantTotal = $grantTotal - $use_points;
                                                    echo '<p class="text-success">Card points applied</p>';
                                                } else {
                                                    echo '<p class="text-danger">You have low card points</p>';
                                                }
                                            ?>
                                                <div class="ec-cart-summary-total">
                                                    <span class="text-left">Total Amount</span>
                                                    <span class="text-right"><?php
                                                                                if ($use_points < $card_bal) {
                                                                                    echo $new_grantTotal;
                                                                                ?>
                                                            <input type="hidden" name="grant_total" value="<?php echo $new_grantTotal; ?>">
                                                        <?php
                                                                                } else {
                                                                                    echo $grantTotal;
                                                        ?>
                                                            <input type="hidden" name="grant_total" value="<?php echo $grantTotal; ?>">
                                                        <?php
                                                                                }
                                                        ?></span>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="ec-cart-summary-total">
                                                    <span class="text-left">Total Amount</span>
                                                    <span class="text-right"><?php echo $grantTotal; ?></span>
                                                    <input type="hidden" name="grant_total" value="<?php echo $grantTotal; ?>">
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Summary Block -->
                        </div>
                        <div class="ec-sidebar-wrap ec-checkout-pay-wrap">
                            <!-- Sidebar Payment Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Payment Method</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <div class="ec-checkout-pay">
                                        <div class="ec-pay-desc">Please select the preferred payment method to use on this
                                            order.</div>
                                        <span class="ec-register-wrap ec-register-half">
                                            <select class="form-control" id="membership" name="pmode" style="border:2px solid black;" required>
                                                <option value="" selected disabled>--Select Payment Mode--</option>
                                                <option value="Cash On Delivery">Cash On Delivery</option>
                                                <option value="Internet Banking">Internet Banking</option>
                                                <option value="Credit/Debit Card">Credit/Debit Card</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Payment Block -->
                        </div>
                        <span class="ec-check-order-btn">
                            <!-- <a class="btn btn-primary" href="#">Place Order</a> -->
                            <input type="submit" name="place_order" class="btn btn-primary" value="Place Order">
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- footer start -->
    <?php
    include "includes/footer.php";
    ?>
    <!-- footer end -->


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
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Handbag leather purse for
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
                                                <li class="active"><a href="#" class="ec-opt-sz" data-tooltip="Small">S</a></li>
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
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
    <!-- Main Js -->
    <script src="assets/js/vendor/index.js"></script>
    <script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:32 GMT -->

</html>