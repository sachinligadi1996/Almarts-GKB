<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
// if ($userprofile == true) {

// } else {
//     header('location:adminlogin.php');
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:35 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ekka - Admin Dashboard HTML Template.">

    <title>Grammeen Kendriya Bazar</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css"
        rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

    <!-- ekka CSS -->
    <link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

    <!-- FAVICON -->
    <!-- <link href="assets/img/favicon.png" rel="shortcut icon" /> -->

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
            <div class="ec-content-wrapper">
                <div class="content">
                    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                        <div>
                            <h1>Update Bank Details</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Update Bank Details
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header card-header-border-bottom">
                                    <h2>Update Bank</h2>
                                </div>
                                
                                <?php

                                $id = $_GET['id'];

                                $sql = "SELECT * FROM `gkb_md_bank` WHERE  id= '$id'";
                                $execute = mysqli_query($conn, $sql);

                                $total = mysqli_num_rows($execute);
                                $show1 = mysqli_fetch_assoc($execute);

                                ?>

                                <div class="card-body">
                                    <div class="row ec-vendor-uploads">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="ec-vendor-upload-detail">
                                                <form class="row g-3" method="post" enctype="multipart/form-data">
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Bank Name*</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="bank_name" value="<?php echo $show1['bank_name']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Account Holder's Name*</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="ac_name" value="<?php echo $show1['ac_name']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Account Holder's Mobile*</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="ac_mob" value="<?php echo $show1['ac_mob']; ?>">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Account Number*</label>
                                                        <input type="text" class="form-control" value="<?php echo $show1['ac_no']; ?>"
                                                            name="ac_no">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">IFSC Code*</label>
                                                        <input type="text" class="form-control" id="quantity1"
                                                            name="ac_ifsc" value="<?php echo $show1['ac_ifsc']; ?>">
                                                    </div>
                                                   
                                                    <div class="col-md-12">
                                                        <button type="submit" name="save"
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
    <script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
    <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>

    <!-- Option Switcher -->
    <script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

    <!-- Ekka Custom -->
    <script src="assets/js/ekka.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->

</html>


<?php
if (isset($_POST['save'])) {
    $bank_name = $_POST['bank_name'];
    $ac_name = $_POST['ac_name'];
    $ac_mob= $_POST['ac_mob'];
    $ac_no = $_POST['ac_no'];
    $ac_ifsc= $_POST['ac_ifsc'];

    // Corrected SQL Query
    $sql = "UPDATE `gkb_md_bank` SET `bank_name`='$bank_name',`ac_name`='$ac_name',`ac_mob`='$ac_mob',`ac_no`='$ac_no',`ac_ifsc`='$ac_ifsc' WHERE `id` ='$id'";

    // Use prepared statements or sanitize input to prevent SQL injection
    $q_run = mysqli_query($conn, $sql);

    if ($q_run) {
        echo "success";
    } else {
        echo "error: " . mysqli_error($conn);
    }
}
?>