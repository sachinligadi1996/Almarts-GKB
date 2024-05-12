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

     <!-- sweet alert -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

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
                            <h1>Add Sales manager</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Sales Manager
                            </p>
                        </div>
                        <div>
                            <a href="sales_manag_list.php" class="btn btn-primary"> View All
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header card-header-border-bottom">
                                    <h2>Add Sales Manager</h2>
                                </div>
                                <?php

                                $id = $_GET['id'];

                                $sql = "SELECT * FROM `gkb_sales_manager_details` WHERE  id= '$id'";
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
                                                        <label for="inputEmail4" class="form-label">Sales Manager
                                                            name*</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="sales_manager" value="<?php echo $show1['sales_manager']; ?>">
                                                      
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Sales Manager's
                                                            Mobile*</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="sales_mob" value="<?php echo $show1['sales_mob']; ?>">
                                                    </div>
                                                    <!-- 
                                                    <div class="col-md-6">
                                                        <label class="form-label">Select Categories</label>
                                                        <select id="Categories" class="form-select" name="vendor_cat">
                                                            <option value="Choose">Choose Category</option>
                                                            <option value="Agricultural">Agricultural</option>
                                                            <option value="Grocery">Grocery</option>
                                                            <option value="Electronics">Electronics</option>
                                                            <option value="Fruits & vegetables">Fruits & vegetables</option>

                                                        </select>
                                                    </div> -->
                                                    <!-- <div class="col-md-12">
                                                        <label class="form-label">Product Description</label>
                                                        <textarea class="form-control" rows="2"
                                                            name="pro_desc"></textarea>
                                                    </div> -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Sales Manager's Email*</label>
                                                        <input type="text" class="form-control" id="price1"
                                                            name="sales_mail" value="<?php echo $show1['sales_mail']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Sales Manager's Aadhar no.*</label>
                                                        <input type="number" class="form-control" id="price2"
                                                            name="sales_adhar" value="<?php echo $show1['sales_adhar']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Sales Manager's Username*</label>
                                                        <input type="text" class="form-control" id="quantity1"
                                                            name="sales_username" value="<?php echo $show1['sales_username']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Sales Manager's Password*</label>
                                                        <input type="text" class="form-control" id="quantity1"
                                                            name="sales_pass" value="<?php echo $show1['sales_pass']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Road name, Area, Colony*</label>
                                                        <input type="text" class="form-control" id="quantity1" name="sales_add" value="<?php echo $show1['sales_add']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">House no., Building Name*</label>
                                                        <input type="text" class="form-control" id="quantity1"
                                                            name="sales_add1" value="<?php echo $show1['sales_add1']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">City*</label>
                                                        <input type="text" class="form-control" id="quantity1"
                                                            name="sales_add2" value="<?php echo $show1['sales_add2']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">State*</label>
                                                        <input type="text" class="form-control" id="quantity1"
                                                            name="sales_add3" value="<?php echo $show1['sales_add3']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Pincode*</label>
                                                        <input type="text" class="form-control" id="quantity1"
                                                            name="sales_add4" value="<?php echo $show1['sales_add4']; ?>">
                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="submit" name="save"
                                                            class="btn btn-primary">Submit</button>
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
    // $rand = $_POST['rand'];
    $sname = $_POST['sales_manager'];
    $mob = $_POST['sales_mob'];
    $mail = $_POST['sales_mail'];
    $adhar = $_POST['sales_adhar'];
    $uname = $_POST['sales_username'];
    $pass = $_POST['sales_pass'];
    $add = $_POST['sales_add'];
    $add1 = $_POST['sales_add1'];
    $add2 = $_POST['sales_add2'];
    $add3 = $_POST['sales_add3'];
    $add4 = $_POST['sales_add4'];

    // Corrected SQL Query
    $sql = "UPDATE `gkb_sales_manager_details` SET `sales_manager`='$sname',`sales_mob`='$mob',`sales_mail`='$mail',`sales_adhar`='$adhar',`sales_username`='$uname',`sales_pass`='$pass',`sales_add`='$add',`sales_add1`='$add1',`sales_add2`='$add2',`sales_add3`='$add3',`sales_add4`='$add4' WHERE `id` = '$id'";

    // Use prepared statements or sanitize input to prevent SQL injection
    $q_run = mysqli_query($conn, $sql);

    
if ($q_run) {
    echo "<script type='text/javascript'>
        Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Sales Manager Updated!',
        showConfirmButton: false,
        timer: 1500
        })

        </script>";

        // header("location:to-sharing-plan-list.php");

        } else {
        echo "Failed !!!";
        }
}
?>