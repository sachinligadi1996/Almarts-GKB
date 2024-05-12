<?php
session_start();
include("db.php");
$distributor = $_SESSION['$distributor'];
if ($distributor == true) {

} else {
	header('location:adminlogin.php');
}

$servername = "localhost";
$username   = "root";
$password   =  "";
$dbname     =  "gkb_db";

   $conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from formData table
$query = "SELECT * FROM formData";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$batchCode = $row['batchcode'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

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
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css"
        rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

    <!-- No Extra plugin used -->

    <link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
    <link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

    <!-- ekka CSS -->
    <link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">



    <style>
    /* Custom styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
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

            <div class="content">
                <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                    <div>
                        <h1>View Inventory</h1>
                        <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                            <span><i class="mdi mdi-chevron-right"></i></span>Product
                        </p>
                    </div>
                    <!-- <div>
							<a href="product-list.php" class="btn btn-primary">Query List</a>
						</div> -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="responsive-data-table" class="table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>SR.No</th>
                                                <th>Product Name</th>
                                                <th>Product Image</th>
                                                <th>Batch code</th>
                                                <th>Expiry Date</th>
                                                <th>Quantity [inKG/LTR]</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
												$i = 1;
												$query = "SELECT * FROM `inventory` ORDER BY id DESC";
												$qury_run = mysqli_query($conn, $query);
												while ($row = mysqli_fetch_assoc($qury_run)) {
													?>
                                            <tr>
                                                <td>
                                                    <?php echo $i; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['productName']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['productImg']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['batchCode']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['expiryDate']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['quantity']; ?>
                                                </td>

                                                <td>
                                                    <div class="btn-group mb-1">
                                                        <button type="button"
                                                            class="btn btn-outline-success">View</button>
                                                        <button type="button"
                                                            class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" data-display="static">
                                                            <span class="sr-only">Info</span>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item"
                                                                href="view_inventoryedit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                                            <a class="dropdown-item"
                                                                href="view_inventorydelete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php
												$i++;
												}
												?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Content -->
        </div>
    </div>
    <!-- End Content Wrapper -->



    <!-- Footer -->
    <?php
			include "assets/include/footer.php";
			?>

    </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->

    <!-- ... Your existing PHP code ... -->

<!-- Include Bootstrap CSS and JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Include DataTables scripts only once -->
<link rel='stylesheet' type='text/css' href='assets/plugins/data-tables/datatables.bootstrap5.min.css' />
<script type='text/javascript' src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
<script type='text/javascript' src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
<script type='text/javascript' src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

<!-- Your existing HTML code -->

<!-- Common Javascript -->
<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
<script src="assets/plugins/simplebar/simplebar.min.js"></script>
<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
<script src="assets/plugins/slick/slick.min.js"></script>

<!-- Datatables Initialization -->
<script>
    $(document).ready(function() {
        $('#responsive-data-table').DataTable();
    });
</script>

<!-- Option Switcher -->
<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

<!-- Ekka Custom -->
<script src="assets/js/ekka.js"></script>

</body>

</html>

<?php
if (isset($_POST['submit'])) {
    // Fetch the form data
    $productName = $_POST['productName'];
    $batchCode = $_POST['batchCode'];
    $expiryDate = $_POST['expiryDate'];
    $quantity = $_POST['quantity'];

    // Insert the form data into the database table
    $sql = "INSERT INTO inventory (productName, batchCode, expiryDate, quantity)
            VALUES ('$productName', '$batchCode', '$expiryDate', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>
            alert('Record added successfully');
            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
