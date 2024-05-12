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
            margin: 0;
            padding: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 10px solid #ccc;
			border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
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

                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h2 class="mb-4">Sales Report Form</h2>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="product_name">Product Name:</label>
                                    <input type="text" class="form-control" id="product_name" name="product_name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="quantity_sold">Quantity Sold:</label>
                                    <input type="number" class="form-control" id="quantity_sold" name="quantity_sold"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="sales_amount">Sales Amount:</label>
                                    <input type="number" class="form-control" id="sales_amount" name="sales_amount"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="sales_date">Sales Date:</label>
                                    <input type="date" class="form-control" id="sales_date" name="sales_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="sales_description">Description:</label>
                                    <textarea class="form-control" id="sales_description"
                                        name="sales_description"></textarea>
                                </div>
                                <!-- Other fields can be added here -->
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
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
// Include your database connection file (e.g., db.php)
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $product_name = $_POST['product_name'];
    $quantity_sold = $_POST['quantity_sold'];
    $sales_amount = $_POST['sales_amount'];
	$sales_date=$_POST['sales_date'];
	$sales_description=$_POST['sales_description'];

    // Example query to insert data into the database
    $query = "INSERT INTO sales_reports (product_name, quantity_sold, sales_amount,sales_date,sales_description) 
              VALUES ('$product_name', '$quantity_sold', '$sales_amount','$sales_date','$sales_description')";

    if (mysqli_query($conn, $query)) {
        // Insertion successful
        echo "<script>alert('Sales report recorded successfully.');</script>";
        // Redirect to the same page or any desired location after insertion
        // header("Location: sales_report.php");
        exit();
    } else {
        // Insertion failed
        echo "<script>alert('Error recording sales report.');</script>";
        // Redirect or handle error as needed
        header("Location: sales_report.php");
        exit();
    }
}

// Close the database connection
mysqli_close($conn);
?>