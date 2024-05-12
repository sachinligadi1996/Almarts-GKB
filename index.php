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
<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-php/demo-11.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:57:14 GMT -->

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
    <!-- <link rel="icon" href="assets/images/favicon/grameen-removebg-preview.png" sizes="40x40" /> -->
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon-11.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon-11.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="assets/css/vendor/ecicons.min.css" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/countdownTimer.css" />
    <link rel="stylesheet" href="assets/css/plugins/nouislider.css" />
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/demo11.css" />
    <style type="text/css">
     	.box{
     		border: 2px solid black;
     	}
     .box{
     	background-image: linear-gradient(#25ed1a,#6de3cf,#0c8c06);

     }
    .box h1{
    	font-size: 35px;
    	font-weight: bold;
    	text-align: center;
    	color: white;
    }
    .box h3{
    	font-size: 25px;
    	text-align: center;
    	color: white;
    	font-weight: bold;
    }
    .box1 span{
    	color:white;
/*    	background-color: black;*/
    	font-size: 30px;
    }
    .box ul li{
font-size: 22px;
font-weight: bold;
color:black;
    }
    .box button{
    	width: 200px;
    	background-color: orange;
    	margin-bottom: 50px;
    	height: 40px;
    	border-radius: 10px;
    }
     .box button a{
     	text-decoration: none;
     	font-size: 20px;
     	color: black;
     	font-weight: bold;
     	margin-top: 30px;
     }
     .box button:hover{
     	background-color:blue;
     	color: white;
     }
      .box a:hover{
/*     	background-color:blue;*/
     	color: white;
     }

     </style>

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
    <?php 
    include "includes/header.php";
    ?>
    <!-- Header End  -->

    <!-- Main Slider Start -->
    <div class="ec-main-slider section section-space-pb">
        <div class="ec-slider">
            <div class="ec-slide-item d-flex slide-1">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-sm-12 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">किसान से लेकर किसान तक...</h2>
                                <h1 class="ec-slide-title">Perfect<span class="outline-txt">Store</span></h1>
                                <div class="ec-slide-disc">
                                    <p>ALLY MART</p>
                                    <a href="elemets-products.php" class="btn btn-lg btn-primary"><span>Shop Now</span><i
                                            class="fi-rr-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-slide-item d-flex slide-2">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-sm-12 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">किसान से लेकर किसान तक...</h2>
                                <h1 class="ec-slide-title">Healthy<span class="outline-txt">Organic</span></h1>
                                <div class="ec-slide-disc">
                                    <p>ALLY MART</p>
                                    <a href="elemets-products.php" class="btn btn-lg btn-primary"><span>Shop Now</span><i
                                            class="fi-rr-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-slide-item d-flex slide-2">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-sm-12 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">किसान से लेकर किसान तक...</h2>
                                <h1 class="ec-slide-title">Kitechn Applians<span class="outline-txt">Best One</span></h1>
                                <div class="ec-slide-disc">
                                    <p>ALLY MART</p>
                                    <a href="elemets-products.php" class="btn btn-lg btn-primary"><span>Shop Now</span><i
                                            class="fi-rr-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-slide-item d-flex slide-3">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-sm-12 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">किसान से लेकर किसान तक...</h2>
                                <h1 class="ec-slide-title">Fresh<span class="outline-txt">Grocery</span></h1>
                                <div class="ec-slide-disc">
                                    <p>ALLY MART</p>
                                    <a href="elemets-products.php" class="btn btn-lg btn-primary"><span>Shop Now</span><i
                                            class="fi-rr-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  category Section Start -->
    <section class="section ec-category-section section-space-p">
        <div class="container">
            <div class="row margin-minus-b-15 margin-minus-t-15">
                <div id="ec-cat-slider" class="ec-cat-slider owl-carousel">
                    <div class="ec_cat_content ec_cat_content_2">
                        <div class="ec_cat_inner ec_cat_inner-2">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/vegetable.png" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <span>Vegetables & Fruits</span>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_2">
                        <div class="ec_cat_inner ec_cat_inner-2">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/groceries.png" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <span>Grocery & Staples</span>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_3">
                        <div class="ec_cat_inner ec_cat_inner-3">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/dairy-products.png" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <p>Dairy & Eggs</p>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_4">
                        <div class="ec_cat_inner ec_cat_inner-4">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/beverage.png" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <p>Beverage</p>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_5">
                        <div class="ec_cat_inner ec_cat_inner-5">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/salad.png" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <p>Salad</p>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_6">
                        <div class="ec_cat_inner ec_cat_inner-6">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/cake.png" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <p>Bakery</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category Section End -->

    <!-- About Start -->
    <section class="section ec-about-sec section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="ec-about-img">
                        <img src="assets/images/about/about2.png" alt="about-image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ec-about-detail">
                        <h4>We Are Healthy Food</h4>
                        <p class="detail-txt m-b-20">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                            Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <div class="ec-detail-list m-b-15">
                            <div class="detail-list-img"><img src="assets/images/about/vegan.png" alt="plant-img"></div>
                            <div>
                                <h3 class="about-detail-text">Biological Benefits</h3>
                                <p class="detail-txt">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem
                                    Ipsum
                                    has been the industry's .</p>
                            </div>
                        </div>
                        <div class="ec-detail-list">
                            <div class="detail-list-img"><img src="assets/images/about/plant.png" alt="plant-img"></div>
                            <div>
                                <h3 class="about-detail-text">Speciality Product</h3>
                                <p class="detail-txt">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem
                                    Ipsum
                                    has been the industry's .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->


    <!-- Service section start -->
    <section class="section ec-service-sec section-space-p">
        <div class="container align-self-center">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="main-content-detail">
                        <div class="main-content left">
                            <div class="detail-content ">
                                <h6 class="ec-service-title">Fast Shipping</h6>
                                <p class="ec-service-detail">We are available for fast shipping in every season 24X7
                                    deliver in the world. The printing and
                                    typesetting industry.</p>
                            </div>
                            <img class="service-img" src="assets/images/service/shipping.png" alt="shipping-img">
                        </div>
                        <div class="main-content left">
                            <div class="detail-content">
                                <h6 class="ec-service-title">Trust Gurantee</h6>
                                <p class="ec-service-detail">The printing and
                                    typesetting industry. We are available for fast shipping in every season 24X7
                                    deliver in the world.</p>
                            </div>
                            <img class="service-img" src="assets/images/service/trust.png" alt="shipping-img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="ec-ser-mid-image">
                        <img class="ser-background" src="assets/images/service/Healthily-removebg-preview.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="main-content-detail">
                        <div class="main-content right">
                            <img class="service-img" src="assets/images/service/support.png" alt="shipping-img">
                            <div class="detail-content">
                                <h6 class="ec-service-title">24x7 Free Support</h6>
                                <p class="ec-service-detail">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="main-content right">
                            <img class="service-img" src="assets/images/service/discount.png" alt="shipping-img">
                            <div class="detail-content">
                                <h6 class="ec-service-title">Daily Discounts</h6>
                                <p class="ec-service-detail">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service section End -->

    <!-- Special Offer Start -->
    <section class="ec-offer-sec section-space-p">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="offer-section-title">
                        <h2><span class="black-text">Special Offers</span><span class="green-text"> Of The Week!</span>
                        </h2>
                        <p>Lorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum when
                            for scrembled it to make a type spicemen book.</p>
                    </div>
                </div>
            </div>
            <div class="row margin-top">
            <div class="ec-product-slider owl-carousel">
                <?php
                $query = "SELECT * FROM `ven_admin_pro` ORDER BY id DESC";
                $qury_run = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($qury_run)) {
                ?>
                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <img class="main-image" src="../product-image/<?php echo $row['thum1']; ?>" alt="Product" style="height: 300px;" />
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h6 class="ec-pro-stitle">Grain, Breakfast, Fresh</h6>
                                <h5 class="ec-pro-title"><?php echo $row['pro_name']; ?></a></h5>
                                <div class="ec-pro-rat-price">
                                    <span class="ec-price">
                                        <span class="old-price"><?php echo $row['mrp']; ?></span>
                                        <span class="new-price"><?php echo $row['new_price']; ?></span>
                                    </span>
                                        <!-- <span class="old-price">₹30.00</span> -->
                                        <span class="new-price">Or Pay ₹15.00 + 5 PVC coins</span>
                                    </span>
                                </div>
                            </div>
                            <div class="ec-spe-pro-btn">
                                <a href="#" class="btn btn-lg btn-primary">Add To Cart<span class="cart-icon"><i
                                            class="fi-rr-shopping-basket"></i></a>
                                <span class="social-btn">
                                    <a class="quick-view" href="product-full-width.php" ><i class="fi-rr-eye"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <img class="main-image" src="assets/images/product-image/142.jpg" alt="Product" />
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h6 class="ec-pro-stitle">Grain, Breakfast, Fresh</h6>
                                <h5 class="ec-pro-title">Dry Fruits</a></h5>
                                <div class="ec-pro-rat-price">
                                    <span class="ec-price">
                                        <span class="old-price">₹65.00</span>
                                        <span class="new-price">₹58.00</span>
                                    </span>
                                </div>
                            </div>
                            <div class="ec-spe-pro-btn">
                                <a href="#" class="btn btn-lg btn-primary">Add To Cart<span class="cart-icon"><i
                                            class="fi-rr-shopping-basket"></i></a>
                                <span class="social-btn">
                                    <a class="quick-view"><i class="fi-rr-eye"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <img class="main-image" src="assets/images/product-image/143.jpg" alt="Product" />
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h6 class="ec-pro-stitle">Grain, Breakfast, Fresh</h6>

                                <h5 class="ec-pro-title"> Organic Pickle </a></h5>
                                <div class="ec-pro-rat-price">
                                    <span class="ec-price">
                                        <span class="old-price">₹65.00</span>
                                        <span class="new-price">₹58.00</span>
                                    </span>
                                </div>
                            </div>
                            <div class="ec-spe-pro-btn">
                                <a href="#" class="btn btn-lg btn-primary">Add To Cart<span class="cart-icon"><i
                                            class="fi-rr-shopping-basket"></i></a>
                                <span class="social-btn">
                                    <a class="quick-view"><i class="fi-rr-eye"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <img class="main-image" src="assets/images/product-image/140.jpg" alt="Product" />
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h6 class="ec-pro-stitle">Grain, Breakfast, Fresh</h6>

                                <h5 class="ec-pro-title">Soft Drinks</a></h5>
                                <div class="ec-pro-rat-price">
                                    <span class="ec-price">
                                        <span class="old-price">₹65.00</span>
                                        <span class="new-price">₹58.00</span>
                                </div>
                            </div>
                            <div class="ec-spe-pro-btn">
                                <a href="#" class="btn btn-lg btn-primary">Add To Cart<span class="cart-icon"><i
                                            class="fi-rr-shopping-basket"></i></a>
                                <span class="social-btn">
                                    <a class="quick-view"><i class="fi-rr-eye"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>

        </div>
    </section>
    <!-- Special Offer Start -->

    <!-- bottom banner sec Start -->
    <!-- <div class="ec-bottom-banner-sec section section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
                    <div class="bottom-banner-img">
                        <div class="bottom-banner-txt">
                            <h2 class="inner-txt">Tasty, yeah? <br>Buy now!</h2>
                            <div class="ec-purchase-btn">
                                <a href="#" class="shop-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container">
	<div class="row">
	<div class="col-md-6 box col-sm-12 box1">
		<h1>Non Prime Membership</h1>
		<h3>Membership Cost...<span>Free</span></h3>
		<hr>
		<ul>
			<li>Maximum Discount On Maximum Purchase</li>
            <li>No Delivery Charges Under 5 KM</li>
            <li>Discount Coupon Available</li>
            <li>Limited Sale Stock With Super Offer</li>
            <li>Flat 15% Off On Shopping Above 5000 RS</li>
		</ul>
		<center><button><a href="products.php">Shop Here</a></button></center>

	</div>
	<div class="col-md-6 box col-sm-12 box2">
		<h1>Prime Membership <span></span></h1>
		<h3>Membership Cost...<span>1000 <span>Rs + 18% GST</span></span></h3>
		<hr>
		<ul>
			<li>Member can get PVC card worth of first Shopping</li>
                    <li>Lifetime Membership</li>
                    <li>Instant membership gift (That member can get at doorstep)</li>
                    <li>Prime member can get discount upto 20% on their purches.</li>
                    <li>Refer &amp; earn 5% commission royality from first month to six month.</li>
		</ul>
		<center><button><a href="register.php">Get Plan</a></button></center>

	</div>

</div>
</div>
    <!-- bottom banner sec end -->

    <!-- get in touch sec Start -->
    <section class="ec-get-in-touch section section-space-p">
        <div class="container">
            <div class="contact-map">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="ec-contact-map">
                            <div class="ec-content-left">
                                <!-- <div class="ec_contact_map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119066.41709476661!2d72.73989540440776!3d21.159340298484807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1686215917436!5m2!1sen!2sin"></iframe>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 ec-content-right">
                        <div class="ec-content-right">
                            <div class="ec-contact-form">
                                <form id="main-form" method="post">
                                    <div class="table-heading">
                                        <h3>Get In Touch</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" placeholder="Enter your name"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email"
                                                    placeholder="Enter your email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="tel" name="number" id="number" placeholder="Phone Number"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <input type="text" name="subject" id="subject" placeholder="Subject"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea id="comments" name="comment"
                                                    placeholder="Enter your comment here..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <button class="submit-btn" name="save">Submit Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- get in touch sec end -->

    <!-- footer sec start -->
    <?php 
    include "includes/footer.php";
    ?>
    <!-- footer sec End -->

    <!-- Click To Call -->
    <div class="cc-style cc-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="cc-panel">
            <!-- Panel Content -->
        </div>

    </div>
    <!-- Click To Call end -->
    <!-- Newsletter Modal Start -->
    <div id="ec-popnews-bg"></div>
    <div id="ec-popnews-box">
        <div id="ec-popnews-close"><i class="ecicon eci-close"></i></div>
        <div class="row">
            <div class="col-md-7 disp-no-767">
                <img src="assets/images/banner/about.jpg" height="287px">
            </div>
            <div class="col-md-5">
                <div id="ec-popnews-box-content">
                    <h2>Subscribe For Prime Membership.</h2>
                    <p>Get prime membership of Grameen kendriya bazar to get attractive benifits for shopping and to earn money.</p>
                        <a href="register.php"><button type="button" class="btn btn-primary" name="subscribe">Prime Membership</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Modal end -->

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><i
                            class="fi fi-rr-menu-burger"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><i
                            class="fi-rr-shopping-basket"></i><span
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

    <!-- Add to Cart successfully toast Start -->
    <div id="addtocart_toast" class="addtocart_toast">
        <div class="desc">You Have Add To Cart Successfully</div>
    </div>
    <div id="wishlist_toast" class="wishlist_toast">
        <div class="desc">You Have Add To Wishlist Successfully</div>
    </div>
    <!-- Add to Cart successfully toast end -->

    <!-- Vendor JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->

    <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/countdownTimer.min.js"></script>
    <script src="assets/js/plugins/nouislider.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <script src="assets/js/plugins/infiniteslidev2.js"></script>
    <script src="assets/js/plugins/click-to-call.js"></script>

    <!-- Main Js -->
    <script src="assets/js/vendor/index.js"></script>
    <script src="assets/js/demo-11.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-php/demo-11.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:57:23 GMT -->

</html>

<?php
if(isset($_POST['save'])){

$name = $_POST['name'];
$mail = $_POST['email'];
$mob = $_POST['number'];
$sub = $_POST['subject'];
$com = $_POST['comment'];

$sql = "INSERT INTO `contact`(`fullname`, `email`, `phone`, `subject`, `message`) VALUES ('$name','$mail','$mob','$sub','$com')";
$qurey_run = mysqli_query($conn, $sql);
if ($qurey_run) {
    echo "success";
} else {
    echo "error";
}
}
?>