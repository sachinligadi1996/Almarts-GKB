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
                            <h1>Add Delivery Person</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a>
                            </p>
                        </div>
                        <div>
                            <a href="new_order.php" class="btn btn-primary"> View All
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header card-header-border-bottom">
                                    <h2>Add Delivery Person</h2>
                                </div>
                                <?php
                                    // $i = 1;
                                    $id = $_GET['id'];
                                    $query = "SELECT * FROM `orders` WHERE `id`='$id'";
                                    $qury_run = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($qury_run)) {
                                ?>
                                <div class="card-body">
                                    <div class="row ec-vendor-uploads">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="ec-vendor-upload-detail">
                                                <form class="row g-3" method="post" enctype="multipart/form-data">
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Order Id*</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="order_id" value="<?php echo $row['order_id']; ?>">                                                 
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Customer's Name*</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="name" value="<?php echo $row['name']; ?>" >
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Mobile*</label>
                                                        <input type="text" class="form-control" id="price1"
                                                            name="phone" value="<?php echo $row['phone']; ?>" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Payment mode*</label>
                                                        <input type="text" class="form-control" id="price1"
                                                            name="pmode" value="<?php echo $row['pmode']; ?>" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Products*</label>
                                                        <input type="text" class="form-control" id="price1"
                                                            name="products" value="<?php echo $row['products']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Amount*</label>
                                                        <input type="text" class="form-control" id="price1"
                                                            name="amount_paid" value="<?php echo $row['amount_paid']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Address*</label>
                                                        <input type="text" class="form-control" id="price1"
                                                            name="address" value="<?php echo $row['address']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Date*</label>
                                                        <input type="text" class="form-control" id="price1"
                                                            name="date" value="<?php echo $row['date']; ?>">
                                                    </div>
                                                   
                                                    <div class="col-md-6">
                                                        <label class="form-label">Assign Delivery Person*</label>
                                                        
                                                        <select id="Categories" class="form-select" name="delivery_person">
                                                            <option value="">Choose Delivery Person</option>
                                                        <?php
                                                        $query = "SELECT * FROM `retailer_del_boy`";
                                                        $qury_run = mysqli_query($conn, $query);
                                                        while ($roow = mysqli_fetch_assoc($qury_run)) {
													    ?>
                                                            <option value="<?php echo $roow['del_name']; ?>"><?php echo $roow['del_name']; ?></option>
                                                        <?php 
                                                        }
                                                        ?>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-md-12">
                                                        <button type="submit" name="save"
                                                            class="btn btn-primary">Update Order</button>
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
    $order_id = $_POST['order_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $pmode = $_POST['pmode'];
    $products = $_POST['products'];
    $amount_paid = $_POST['amount_paid'];
    $address = $_POST['address'];
    $date= $_POST['date'];
    $delivery_person = $_POST['delivery_person'];


    // Corrected SQL Query
    $sql = "UPDATE `orders` SET `name`='$name',`phone`='$phone',`address`='$address',`pmode`='$pmode',`products`='$products',`order_id`='$order_id',`amount_paid`='$amount_paid',`delivery_person`='$delivery_person', `date`='$date' WHERE `id` = '$id'";

    // Use prepared statements or sanitize input to prevent SQL injection
    $q_run = mysqli_query($conn, $sql);

    if ($q_run) {
        echo "success";
    } else {
        echo "error: " . mysqli_error($conn);
    }
}
?>