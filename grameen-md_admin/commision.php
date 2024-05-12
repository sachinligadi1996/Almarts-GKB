<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
// if ($userprofile == true) {

// } else {
// 	header('location:adminlogin.php');
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

    <title>Grameen Kendriya Bazar</title>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

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
                            <h1> Gross Turn Over (Active members)</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span> Gross Turn Over
                            </p>
                        </div>
                        <div>
                            <a href="commision-list.php" class="btn btn-primary"> View All
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header card-header-border-bottom">
                                    <!-- <h2>Add Product</h2> -->
                                </div>
                                                

                                <div class="card-body">
                                    <div class="row ec-vendor-uploads">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="ec-vendor-upload-detail">
                                                <form class="row g-3" method="post" enctype="multipart/form-data"
                                                    onsubmit="return validateForm()">
                                                    <div class="col-md-3">
                                                        <label for="" class="form-label"><b>Prime ID :</b></label>
                                                        <input type="text" class="form-control slug-title" name="prime_id"
                                                            id="prime_id" oninput="fetchEmployeeDetails(this.value, true)" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" class="form-label">Active Member Name:</label>
                                                        <input type="text" class="form-control slug-title" name="prime_name"
                                                            id="prime_name" oninput="fetchEmployeeDetails(this.value, false)" required>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="inputEmail4" class="form-label">Month : 
                                                             </label>
                                                        <input type="month" class="form-control slug-title" name="month"
                                                            id="month" required>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <label for="inputEmail4" class="form-label"><h5>Toatl RSP (GROSS RSP INCOME) :</h5>
                                                            </label>
                                                        <input type="text" class="form-control slug-title" name="gross"
                                                            id="gross" > 
                                                            <!-- <label for="inputEmail4" class="form-label">Share Rs. to each ID
                                                            </label>
                                                            <input type="text" class="form-control slug-title" name="active"
                                                            id="active" required> -->
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label"><h5>Purchase Turn Over (P.T.O)</h5>
                                                </label>
                                                        <input type="text" class="form-control slug-title" name="pto"
                                                            id="pto" required>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="" class="form-label"><h5>Promotion Achievements,Incentives,Bonus etc : Induvidual T.O
                                                        </h5></label>

                                                    </div><br><br>
                                                    <div class="col-md-3">
                                                        <label for="" class="form-label">Bonus :</label>
                                                        <input type="text" class="form-control slug-title" name="bonus"
                                                            id="bonus" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" class="form-label">Incentives :</label>
                                                        <input type="text" class="form-control slug-title" name="incentive"
                                                            id="incentive" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="" class="form-label">Travels allowance (T.A) :</label>
                                                        <input type="text" class="form-control slug-title" name="ta"
                                                            id="ta" required>
                                                    </div>
                                                   <div class="col-md-9">
    <label for="" class="form-label">Auto Income</label>
    <input type="text" class="form-control slug-title" name="Auto_inc" id="Auto_inc" required>
</div>
<div class="col-md-9">
    <label class="form-label"><h5>Total Gross Net Turn Over :</h5></label>
    <input type="number" class="form-control" id="total_inc" name="total_inc" required>
</div>

<div class="col-md-12 text-center">
    <!-- Use col-md-12 to take up the entire row -->
    <button type="submit" name="save" class="btn btn-primary">Send</button>
    <button type="submit" name="save" class="btn btn-primary">Save</button>
</div>

<!-- End Content -->
</div>

<!-- Move the script outside of the form -->
<script>
    function performCalculations() {
        // Get inputs
        var gross = parseFloat(document.getElementById('gross').value) || 0;
        var pto = parseFloat(document.getElementById('pto').value) || 0;
        var bonus = parseFloat(document.getElementById('bonus').value) || 0;
        var incentive = parseFloat(document.getElementById('incentive').value) || 0;
        var ta = parseFloat(document.getElementById('ta').value) || 0;
        var auto_inc = parseFloat(document.getElementById('Auto_inc').value) || 0;

        // Perform calculations
        var total_inc = gross + pto + bonus + incentive + ta + auto_inc;

        // Display results
        document.getElementById('total_inc').value = total_inc;
    }

    // Event listeners for input fields
    document.getElementById('gross').addEventListener('input', performCalculations);
    document.getElementById('pto').addEventListener('input', performCalculations);
    document.getElementById('bonus').addEventListener('input', performCalculations);
    document.getElementById('incentive').addEventListener('input', performCalculations);
    document.getElementById('ta').addEventListener('input', performCalculations);
    document.getElementById('Auto_inc').addEventListener('input', performCalculations);

    // Initial calculation
    performCalculations();
</script>
            <script>
            function validateForm() {
                const ids = document.querySelector('input[name="ids"]').value;
                const active = document.querySelector('input[name="active"]').value;
                const prime = document.querySelector('input[name="prime"]').value;
                const tdc = document.querySelector('input[name="tdc"]').value; // Corrected variable name
                const direct = document.querySelector('input[name="direct"]').value;
                const sc = document.querySelector('input[name="sc"]').value;
                const level = document.querySelector('input[name="level"]').value;
                const gst = document.querySelector('input[name="gst"]').value;
                const pvc = document.querySelector('input[name="pvc"]').value;

                if (!ids || !active || !prime || !tds || !direct || !sc || !level || !gst || !pvc) {
                    showError('Please fill in all required fields.');
                    return false;
                }

                return true; // Allow form submission if validation passes
            }

            function showError(message) {
                // You can customize this function to display the error message in your preferred way
                alert(message);
            }
            </script>

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
    <script>
function fetchEmployeeDetails(input, isId) {
    const targetInput = isId ? "#prime_name" : "#prime_id";
    const errorElementId = isId ? "employee_nameError" : "emp_idError";

    const requestData = isId ? { prime_id: input } : { prime_name: input };

    $.ajax({
        url: 'fetch_employee_details.php',
        method: 'POST',
        data: requestData,
        success: function (response) {
            if (response === "Employee not found") {
                displayError(errorElementId, 'Employee not found');
            } else {
                $(targetInput).val(response);
                clearError(errorElementId);
            }
        },
        error: function () {
            displayError(errorElementId, 'Failed to fetch employee details.');
        }
    });
}
</script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->

</html>


<?php
if (isset($_POST['save'])) {

	$prime_id = $_POST['prime_id'];
    $prime_name = $_POST['prime_name'];
    $month = $_POST['month'];
    $gross = $_POST['gross'];
    $pto = $_POST['pto'];
    $bonuse = $_POST['bonus'];
    $incentive = $_POST['incentive'];
    $ta = $_POST['ta'];
    $auto_inc = $_POST['Auto_inc'];
    $total = $_POST['total_inc'];


	$sql = "INSERT INTO gross_to(prime_id, prime_name, month, gross, pto, bonus, incentive, ta, auto_inc,total_inc) 
        VALUES ('$prime_id', '$prime_name', '$month', '$gross', '$pto', '$bonuse', '$incentive', '$ta', '$auto_inc','$total')";

	$qurey_run = mysqli_query($conn, $sql);
	if ($qurey_run) {
		// echo "success";
	
	echo "<script type='text/javascript'>
                    Swal.fire({
                        title: 'Details added successfully',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function() {
                        // window.location.replace('commision.php');
                    });
                </script>";
	} else {
		// echo "error";
	
	echo "<script type='text/javascript'>
	Swal.fire({
		title: 'Error',
		text: 'Error: " . mysqli_error($conn) . "',
		icon: 'error',
		confirmButtonText: 'Ok'
	});
  </script>";
	}
}
?>