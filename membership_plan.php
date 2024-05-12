<?php
session_start();

include("db.php");
$mdadmin = $_SESSION['$mdadmin'];
// if ($mdadmin == true) {

// } else {
//     header('location:membership_plan.php');
// }

$servername = "localhost";
$username   = "root";
$password   =  "";
$dbname     =  "gkb_db";

   $conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


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

                        <div class="container">

                            <h2 class="mt-5">Membership Turn Over (M.T.O) Form</h2>
                            <div class="card mt-3">
                                <div class="card-body">
                                    <form action="#" method="POST">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="membership_type">Membership Type:</label>
                                                <select id="membership_type" name="membership_type"
                                                    class="form-control">
                                                    <option value="general">General</option>
                                                    <option value="women">Women</option>
                                                    <option value="student">Student</option>
                                                    <option value="disabled">Disabled Person</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="fees">Membership Fees:</label>
                                                <input type="text" id="fees" name="fees" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="gst">GST:</label>
                                                <input type="text" id="gst" name="gst" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="gst">Overall Fees:</label>
                                                <input type="text" id="overall_fees" name="overall_fees"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="agp_funds">AGP Funds In %:</label>
                                                <input type="text" id="agp_funds_percent" name="agp_funds_percent"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="agp_funds">AGP Funds In Rs:</label>
                                                <input type="text" id="agp_funds_rs" name="agp_funds_rs"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="services_charges">Services Charges In %:</label>
                                                <input type="text" id="services_charges" name="services_charges_percent"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="services_charges">Services Charges In Rs:</label>
                                                <input type="text" id="services_charges" name="services_charges_rs"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="mto_value">MTO Value:</label>
                                                <input type="text" id="mto_value" name="mto_value" class="form-control">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="save">Submit</button>
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

        <!-- Datatables -->
        <script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
        <script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
        <script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

        <!-- Option Switcher -->
        <script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

        <!-- Ekka Custom -->
        <script src="assets/js/ekka.js"></script>
</body>

</html>

<?php
// Check if the form is submitted
if (isset($_POST['save'])){
    // Retrieve form data
    $membership_type = $_POST["membership_type"];
    $fees = $_POST["fees"];
    $gst = $_POST["gst"];
    $overall_fees = $_POST["overall_fees"];
    $agp_funds_percent = $_POST["agp_funds_percent"];
    $agp_funds_rs = $_POST["agp_funds_rs"];
    $services_charges_percent = $_POST["services_charges_percent"];
    $services_charges_rs = $_POST["services_charges_rs"];
    $mto_value = $_POST["mto_value"];

   

    // SQL query to insert form data into the database
    $sql = "INSERT INTO membershipmto_plan (membership_type, fees, gst, overall_fees, agp_funds_percent, agp_funds_rs, services_charges_percent, services_charges_rs, mto_value)
    VALUES ('$membership_type', '$fees', '$gst', '$overall_fees', '$agp_funds_percent', '$agp_funds_rs', '$services_charges_percent', '$services_charges_rs', '$mto_value')";
 $qurey_run = mysqli_query($conn, $sql);

if ($qurey_run) {
    echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'membership Added Successfully',
        showConfirmButton: false,
        timer: 1500
   
    });
</script>";
} else {
    echo "<script type='text/javascript'>
            alert('Failed to Added membership!');
        </script>";
}
    // Close connection
    $conn->close();
}
?>