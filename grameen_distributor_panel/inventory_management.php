<?php
session_start();
include("db.php");
$distributor = $_SESSION['$distributor'];
if ($distributor == true) {

} else {
	header('location:adminlogin.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:35 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ekka - Admin Dashboard eCommerce HTML Template.">

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
    <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Ekka CSS -->
    <link id="ekka-css" href="assets/css/ekka.css" rel="stylesheet" />

    <!-- FAVICON -->
    <!-- <link href="assets/img/favicon.png" rel="shortcut icon" /> -->
    <style>
   body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 10px;
        }
        .container {
            margin-top: 10px;
        }
    </style>

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">
    <!--  WRAPPER  -->
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
            </div>


            <div class="ec-content-wrapper">

                <div class="container">
                    <h2>Add Item to Inventory</h2>
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="item_name" class="form-label">Item Name:</label>
                            <input type="text" class="form-control" id="item_name" name="item_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity:</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Add Item</button>
                    </form>
                </div>

                <!-- Bootstrap JS -->
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
    <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>

    <!-- Chart -->
    <script src="assets/plugins/charts/Chart.min.js"></script>
    <script src="assets/js/chart.js"></script>

    <!-- Google map chart -->
    <script src="assets/plugins/charts/google-map-loader.js"></script>
    <script src="assets/plugins/charts/google-map.js"></script>

    <!-- Date Range Picker -->
    <script src="assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/date-range.js"></script>

    <!-- Option Switcher -->
    <script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

    <!-- Ekka Custom -->
    <script src="assets/js/ekka.js"></script>
</body>

</html>
<?php

include("db.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    // Example query to insert data into the database
    $query = "INSERT INTO inventory (item_name, quantity, price) 
              VALUES ('$item_name', '$quantity', '$price')";

    if (mysqli_query($conn, $query)) {
        // Insertion successful
        echo "<script>alert('Item added to inventory successfully.');</script>";
    } else {
        // Insertion failed
        echo "<script>alert('Error adding item to inventory.');</script>";
    }
}

// Close the database connection if needed
// mysqli_close($conn);
?>