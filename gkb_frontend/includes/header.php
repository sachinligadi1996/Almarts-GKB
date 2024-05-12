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
                            <span class="text-success">ALLY MART.... <span class="text-warning">किसान से
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
                        <button class="dropdown-toggle" data-bs-toggle="dropdown"><i class="fi-rr-user"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="register.php">Register</a></li>
                            <li><a class="dropdown-item" href="Logout.php">LogOut</a></li>
                        </ul>
                    </div>
                    <!-- Header User End -->
                    <!-- Header Cart Start -->
                    <a href="cart.php" class="ec-header-btn">
                        <div class="header-icon"><i class="fi-rr-shopping-bag"></i></div>
                        <!-- <span class="ec-header-count cart-count-lable">0</span> -->
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
    <!-- Ec Header Bottom  Start -->
    <div class="ec-header-bottom d-none d-lg-block">
        <div class="container position-relative">
            <div class="row">
                <div class="ec-flex">
                    <!-- Ec Header Logo Start -->
                    <div class="align-self-center">
                        <div class="header-logo">
                            <a href="index.php"><img src="assets/images/logo/logo.jpg" alt="Site Logo" /><img
                                    class="dark-logo" src="assets/images/logo/dark-logo-11.png" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->

                    <!-- EC Main Menu Start -->
                    <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
                        <div class="container position-relative">
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <div class="ec-main-menu">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li class="dropdown"><a href="products.php">Products</a>
                                            </li>
                                            <li class="dropdown"><a href="about-us.php">About Us</a>
                                            </li>
                                            <li class="dropdown"><a href="contact-us.php">Contact Us</a>

                                            </li>
                                             <li class="dropdown"><a href="membership.php">Membership Plan</a>

                                
                                             </li>
                                            
                                            <li class="dropdown"><a href="bonuspromo.php">Bonus Plan</a>

                                            </li>
                                            
                                            
                            
                        </ul>
                        
    

                    </li>
                </ul>
                                            
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ec Main Menu End -->

                    <!-- Ec Header Button Start -->
                    <div class="align-self-center">
                        <div class="ec-header-bottons">
                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle button btn btn-sm"
                                    data-bs-toggle="dropdown"><span>Login</span><i
                                        class="fi fi-rr-angle-small-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="login.php">Login</a></li>
                                    <li><a class="dropdown-item" href="register.php">Register</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle button btn btn-lg"
                                    data-bs-toggle="dropdown"><span>User</span></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="user-profile.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="user-history.php">Order History</a></li>
                                    <li><a class="dropdown-item" href="track-order.php">Track Order</a></li>
                                </ul>
                            </div>
                            <!-- Header User End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec Header Button End -->
    <!-- Ec Header Bottom  Start -->
    <div class="ec-header-bottom d-none d-lg-block">
        <div class="container position-relative">
            <div class="row">
                <div class="ec-flex">
                    <!-- Header cat Start -->
                    <div class="header-cat-btn ec-dropdown">
                        <button class="dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fi fi-rr-menu-burger"></i><span>Shop By Catagories</span><i
                                class="fi fi-rr-angle-small-down"></i></button>
                        <?php
                        $quey = "SELECT * FROM `category` ORDER BY id DESC";
                        $qu_run = mysqli_query($conn, $quey);
                        while ($row = mysqli_fetch_assoc($qu_run)) {
                            ?>
                            <ul class="sub-menu">
                                <li class="active"><a class="dropdown-item" href="#">
                                        <?php echo $row['cat_name'] ?>
                                    </a></li>

                            <?php } ?>
                        </ul>
                    </div>
                    <!-- Header cat End -->

                    <!-- Ec Header Search Start -->
                    <div class="align-self-center">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control" placeholder="Search Product Here..." type="text">
                                <button class="submit" type="submit"><i class="fi-rr-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->

                    <!-- Ec Header Button Start -->
                    <div class="align-self-center">
                        <div class="ec-header-bottons">
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"></button>
                                <span class="dropdown-toggle" data-bs-toggle="dropdown"><i
                                        class="fi-rr-user"></i></span>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <!-- <li><a class="dropdown-item" href="#">Setting</a></li> -->
                                    <li><a class="dropdown-item" href="register.php">Register</a></li>
                                    <li><a class="dropdown-item" href="login.php">Login</a></li>

                                </ul>
                            </div>
                            <!-- Header Cart Start -->
                            <a href="cart.php" class="ec-header-btn"><i class="fi-rr-shopping-basket"></i>
                                <!-- <span class="ec-header-count ec-cart-count cart-count-lable">3</span> -->
                            </a>
                            <!-- Header Cart End -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Ec Header Button End -->


    <!-- Header responsive Bottom  Start -->
    <div class="ec-header-bottom d-lg-none">
        <div class="container position-relative">
            <div class="row ">

                <!-- Ec Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.php"><img src="assets/images/logo/logo.jpg" alt="Site Logo" /><img
                                class="dark-logo" src="assets/images/logo/dark-logo-11.png" alt="Site Logo"
                                style="display: none;" /></a>
                    </div>
                </div>
                <!-- Ec Header Logo End -->
                <!-- Ec Header Search Start -->
                <div class="col">
                    <div class="header-search">
                        <form class="ec-btn-group-form" action="#">
                            <input class="form-control" placeholder="Enter Your Product Name..." type="text">
                            <button class="submit" type="submit"><i class="fi-rr-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Ec Header Search End -->
            </div>
        </div>
    </div>
    <!-- Header responsive Bottom  End -->

    <!-- ekka Mobile Menu Start -->
    <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
        <div class="ec-menu-title">
            <span class="menu_title">My Menu</span>
            <button class="ec-close">×</button>
        </div>
        <div class="ec-menu-inner">
            <div class="ec-menu-content">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown"><a href="products.php">Products</a>
                    </li>
                    <li class="dropdown"><a href="about-us.php">About Us</a>
                    </li>
                    <li class="dropdown"><a href="contact-us.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ekka mobile Menu End -->
</header>
<!-- Header End  -->