<!-- footer sec start -->
<footer class="section ec-footer-sec">
        <div class="footer-container ec-footer">
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ec-footer-cat">
                            <div class="ec-footer-widget">
                                <div class="footer-logo">
                                    <a href="index.php"><img src="assets/images/logo/logo.jpg"
                                            alt="Site Logo" /><img class="dark-logo"
                                            src="assets/images/logo/dark-logo-11.png" alt="Site Logo"
                                            style="display: none;" /></a>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-cat">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Quick Links</h4>
                                <div class="ec-footer-links ec-footer-dropdown">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="index.php">Home</a></li>
                                        <li class="ec-footer-link"><a href="elemets-products.php">Products</a></li>
                                        <li class="ec-footer-link"><a href="about-us.php">About Us</a></li>
                                        <li class="ec-footer-link"><a href="contact-us.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 col-lg-3 ec-footer-cat">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Categories</h4>
                                <div class="ec-footer-links ec-footer-dropdown">
                                    <ul class="align-items-center">
                                    <?php
                            $quey = "SELECT * FROM `category` ORDER BY id DESC";
                            $qu_run = mysqli_query($conn, $quey);
                            while ($row = mysqli_fetch_assoc($qu_run)) {
                            ?>
                                        <li class="ec-footer-link"><a href="#"><?php echo $row['cat_name'] ?></a></li>
                                    </ul>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-cat">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Policy</h4>
                                <div class="ec-footer-links ec-footer-dropdown">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="privacy-policy.php">Privacy Policy</a></li>
                                        <li class="ec-footer-link"><a href="terms-condition.php">Terms and Conditions</a></li>
                                        <li class="ec-footer-link"><a href="#">Prime Membership</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <!-- Footer payment -->
                        <div class="footer-bottom-right">
                            <div class="footer-bottom-payment d-flex justify-content-center">
                                <div class="payment-link">
                                    <img src="assets/images/icons/payment.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Footer payment -->
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Start -->
            <div class="container">
                <div class="footer-copy">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-bottom-copy">
                                <div class="ec-copy">Copyright © 2023 <a class="site-name" href="index.php">#</a>
                                    all
                                    rights reserved
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer">
                                <div class="float-right">
                                    <div class="privacy">
                                        <span class="green-text"><a href="terms-condition.php">Terms of Use</a></span>
                                        <span><a href="privacy-policy.php">| Privacy Policy</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Copyright End -->
            </div>
    </footer>
    <!-- footer sec End -->