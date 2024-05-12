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


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:35 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ekka - Admin Dashboard HTML Template.">

    <title>Gangotri Ganga</title>

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
                            <h1>Update Delivery Person</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a>
                            </p>
                        </div>
                        <div>
                            <a href="new_delivery_person.php" class="btn btn-primary"> View All
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header card-header-border-bottom">
                                    <h2>Update Delivery Person</h2>
                                </div>
                                <?php
                                    // $i = 1;
                                    $id = $_GET['id'];
                                    $query = "SELECT * FROM `retailer_del_boy` WHERE `id`='$id'";
                                    $qury_run = mysqli_query($conn, $query);
                                    while ($sow = mysqli_fetch_assoc($qury_run)) {
                                ?>
                                <div class="card-body">
                                    <div class="row ec-vendor-uploads">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="ec-vendor-upload-detail">
                                                <form class="row g-3" method="post" enctype="multipart/form-data">
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Delivery Person
                                                            name*</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="del_name" value="<?php echo $sow['del_name']?>" >
                                                       
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Delivery Person's
                                                            Mobile*</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="del_mob" value="<?php echo $sow['del_mob']?>">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Delivery Person's Email*</label>
                                                        <input type="text" class="form-control" id="price1"
                                                            name="del_mail" value="<?php echo $sow['del_mail']?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Delivery Person's Aadhar No*</label>
                                                        <input type="text" class="form-control" id="price1"
                                                            name="del_adhar" value="<?php echo $sow['del_adhar']?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Delivery Person's Pan Card No*</label>
                                                        <input type="text" class="form-control" id="price1"
                                                            name="del_pan" value="<?php echo $sow['del_pan']?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Delivery Person's Address Line
                                                            1*</label>
                                                        <input type="text" class="form-control" id="price1"
                                                            name="del_add_1" value="<?php echo $sow['del_add_1']?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Delivery Person's Address Line
                                                            2*</label>
                                                        <input type="text" class="form-control" id="price1"
                                                            name="del_add_2" value="<?php echo $sow['del_add_2']?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Delivery Person's Username*</label>
                                                        <input type="text" class="form-control" id="quantity1"
                                                            name="del_username" value="<?php echo $sow['del_username']?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Delivery Person's Password*</label>
                                                        <input type="text" class="form-control" id="quantity1"
                                                            name="del_pass" value="<?php echo $sow['del_pass']?>">
                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="submit" name="save"
                                                            class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                                <?php
                                    }
                                                ?>
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
    $del_name = $_POST['del_name'];
    $del_mob = $_POST['del_mob'];
    $del_mail = $_POST['del_mail'];
    $del_adhar = $_POST['del_adhar'];
    $del_pan = $_POST['del_pan'];
    $del_add_1 = $_POST['del_add_1'];
    $del_add_2 = $_POST['del_add_2'];
    $del_username = $_POST['del_username'];
    $del_pass = $_POST['del_pass'];

    // Corrected SQL Query
    $sql = "UPDATE `retailer_del_boy` SET `del_name`='$del_name',`del_mob`='$del_mob',`del_mail`='$del_mail',`del_adhar`='$del_adhar',`del_pan`='$del_pan',`del_add_1`='$del_add_1',`del_add_2`='$del_add_2',`del_username`='$del_username',`del_pass`='$del_pass' WHERE `id` ='$id'";

    // Use prepared statements or sanitize input to prevent SQL injection
    $q_run = mysqli_query($conn, $sql);

    if ($q_run) {
        echo "success";
    } else {
        echo "error: " . mysqli_error($conn);
    }
}
?>