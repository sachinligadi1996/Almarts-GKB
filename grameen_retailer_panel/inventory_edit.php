<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
if ($userprofile == true) {

} else {
	header('location:adminlogin.php');
}
// Fetch data from formData table
$query = "SELECT * FROM formData";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$batchCode = $row['batchcode'];
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

    <style>
    .btn button {
        text-align: center;
        width: 150px;
        height: 35px;
        background-color: green;
        color: white;
    }
    </style>
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
                            <h1>Add inventory</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Product
                            </p>
                        </div>
                        <div>
                            <a href="query_list.php" class="btn btn-primary"> View All
                            </a>
                        </div>
                    </div>
                    <?php

                                    $id = $_GET['id'];

                                    $sql = "SELECT * FROM `inventory` WHERE  id= '$id'";
                                    $execute = mysqli_query($conn, $sql);

                                    $total = mysqli_num_rows($execute);
                                    $show1 = mysqli_fetch_assoc($execute);

                                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-default">
                                   <div class="card-body">
                                        <div class="row ec-vendor-uploads">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="ec-vendor-upload-detail">
                                                   
                                                    <form method="post">
                                                        <div class="row g-3">
                                                            <div class="col-md-6">
                                                                <label for="productName" class="form-label">Product
                                                                    Name:</label>
                                                                <input type="text" class="form-control" id="productName"
                                                                    name="productName" required value="<?php echo $show1['productName']; ?>">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Select Categories</label>
                                                                <select id="Categories" class="form-select" name="cat" value="<?php echo $show1['cat']; ?>">
                                                                    <option value="Choose">Choose Category</option>
                                                                    <?php
															$quey = "SELECT * FROM category ORDER BY id DESC";
															$qu_run = mysqli_query($conn, $quey);
															while ($row = mysqli_fetch_assoc($qu_run)) {
																?>
                                                                    <option value="<?php echo $row['cat_name'] ?>">
                                                                        <?php echo $row['cat_name'] ?>
                                                                    </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="batchCode" class="form-label">Batch
                                                                    Code:</label>
                                                                <input type="text" class="form-control" id="batchCode"
                                                                    name="batchCode" required
                                                                    value="<?php echo $batchCode; ?>">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="expiryDate" class="form-label">Expiry
                                                                    Date:</label>
                                                                <input type="date" class="form-control" id="expiryDate"
                                                                    name="expiryDate" required value="<?php echo $show1['expiryDate']; ?>">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="quantity" class="form-label">Quantity (in
                                                                    kg/ltr):</label>
                                                                <input type="number" class="form-control" id="quantity"
                                                                    name="quantity" required value="<?php echo $show1['quantity']; ?>">
                                                            </div>

                                                            <div class="col-md-12">
                                                                <button type="submit" name="submit"
                                                                    class="btn btn-primary mt-3">Add to
                                                                    Inventory</button>
                                                            </div>
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
                </div>
            </div>

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
if (isset($_POST['submit'])) {
    // Fetch the form data
    $productName = $_POST['productName'];
    $batchCode = $_POST['batchCode'];
    $expiryDate = $_POST['expiryDate'];
    $quantity = $_POST['quantity'];
    $cat=$_POST['cat'];
   

    // Insert the form data into the database table
    $sql = "UPDATE `inventory` SET `productName`='$productName',`batchCode`='$batchCode',`expiryDate`='$expiryDate',`quantity`='$quantity',`cat`='$cat' WHERE `id` = '$id'";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>
            alert('Record added successfully');
            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>