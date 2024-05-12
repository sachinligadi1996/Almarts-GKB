<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
if ($userprofile == true) {
} else {
    header('location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/user-card.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:51 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ekka - Admin Dashboard HTML Template.">

    <title>Grameen Kendriya Bazar</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

    <link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

    <!-- No Extra plugin used -->

    <!-- ekka CSS -->
    <link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

    <!-- WRAPPER -->
    <div class="wrapper">


        <?php
        include "assets/include/sidebar.php";
        ?>



        <!--  PAGE WRAPPER -->
        <div class="ec-page-wrapper">

            <?php
            include "assets/include/header.php";
            ?>

            <!-- CONTENT WRAPPER -->
            <div class="ec-content-wrapper ec-ec-content-wrapper mb-m-24px">
                <div class="content">
                    <div class="breadcrumb-wrapper breadcrumb-contacts">
                        <div>
                            <h1>All Users</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>User
                            </p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-contact"> View All
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <?php
                        // $i = 1;
                        $query = "SELECT * FROM `user`";
                        $qur_run = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($qur_run)) {
                        ?>
                            <div class="col-lg-6 col-xl-4 mb-24px">
                                <div class="ec-user-card card card-default p-4">
                                    <a href="javascript:0" data-bs-toggle="modal" data-bs-target="#modalContact" class="view-detail"><i class="mdi mdi-eye-plus-outline"></i>
                                    </a>
                                    <a href="javascript:0" class="media text-secondary">
                                        <img src="assets/img/user/u-xl-1.jpg" class="mr-3 img-fluid" alt="Avatar Image">

                                        <div class="media-body">
                                            <h5 class="mt-0 mb-2 text-dark"> <?php echo $row['name']; ?></h5>

                                            <ul class="list-unstyled">
                                                <li class="d-flex mb-1">
                                                    <i class="mdi mdi-email mr-1"></i>
                                                    <span><?php echo $row['email']; ?></span>
                                                </li>
                                                <li class="d-flex mb-1">
                                                    <i class="mdi mdi-phone mr-1"></i>
                                                    <span><?php echo $row['mobile']; ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    </div>

                    

                    <!-- Contact Modal -->
                    <div class="modal fade modal-contact-detail" id="modalContact" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header justify-content-end border-bottom-0">
                                    <button type="button" class="btn-close-icon" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                </div>

                                <div class="modal-body pt-0">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <div class="profile-content-left px-4">
                                                <div class="text-center widget-profile px-0 border-0">
                                                    <div class="card-img mx-auto rounded-circle">
                                                        <img src="assets/img/user/u6.jpg" alt="user image">
                                                    </div>

                                                    <div class="card-body">
                                                        <h4 class="py-2 text-dark"><?php echo $row['name']; ?></h4>
                                                        <p><?php echo $row['email']; ?></p>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-between ">
                                                    <div class="text-center pb-4">
                                                        <p>Referral Id</p>
                                                        <h6 class="text-dark pb-2"><?php echo $row['referal_id']; ?></h6>
                                                    </div>

                                                    <div class="text-center pb-4">
                                                        <p>Mobile</p>
                                                        <h6 class="text-dark pb-2"><?php echo $row['mobile']; ?></h6>
                                                    </div>
                                                    <div class="text-center pb-4">
                                                        <p>Kisan Number</p>
                                                        <h6 class="text-dark pb-2"><?php echo $row['kisan_id']; ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="contact-info px-4">
                                                <h4 class="text-dark mb-1">Contact Details</h4>
                                                <p class="text-dark font-weight-medium pt-4 mb-2">Membership</p>
                                                <p><?php echo $row['membership']; ?></p>
                                                <p class="text-dark font-weight-medium pt-4 mb-2">Aadhar Number</p>
                                                <p><?php echo $row['adhar_id']; ?></p>
                                                <p class="text-dark font-weight-medium pt-4 mb-2">Billing Address</p>
                                                <p><?php echo $row['billing_address']; ?></p>
                                                <p class="text-dark font-weight-medium pt-4 mb-2">Shipping Address</p>
                                                <p><?php echo $row['shipping_address']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                        }
                ?>
                <!-- Add Contact Button  -->
                <div class="modal fade modal-add-contact" id="modal-add-contact" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header px-4">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Add New User</h5>
                                </div>

                                <div class="modal-body px-4">
                                    <div class="form-group row mb-6">
                                        <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User
                                            Image</label>

                                        <div class="col-sm-8 col-lg-10">
                                            <div class="custom-file mb-1">
                                                <input type="file" class="custom-file-input" id="coverImage" required>
                                                <label class="custom-file-label" for="coverImage">Choose
                                                    file...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="firstName">First name</label>
                                                <input type="text" class="form-control" id="firstName" value="John">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="lastName">Last name</label>
                                                <input type="text" class="form-control" id="lastName" value="Deo">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label for="userName">User name</label>
                                                <input type="text" class="form-control" id="userName" value="johndoe">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" value="johnexample@gmail.com">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label for="Birthday">Birthday</label>
                                                <input type="text" class="form-control" id="Birthday" value="10-12-1991">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label for="event">Address</label>
                                                <input type="text" class="form-control" id="event" value="Address here">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer px-4">
                                    <button type="button" class="btn btn-secondary btn-pill" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary btn-pill">Save Contact</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div> <!-- End Content -->
            </div> <!-- End Content Wrapper -->

            <!-- Footer -->
            <?php
            include "assets/include/footer.php";
            ?>

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->

    <!-- Common Javascript -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
    <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>

    <!-- Option Switcher -->
    <script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

    <!-- Ekka Custom -->
    <script src="assets/js/ekka.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/user-card.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:54 GMT -->

</html>