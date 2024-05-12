<?php
session_start();

include("db.php");
$stockist = $_SESSION['$stockist'];
if ($stockist == true) {

} else {
	header('location:adminlogin.php');
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

	<!-- Ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />


</head>
<body>

<div class="wrapper">
    <?php include "assets/include/sidebar.php"; ?>

    <div class="ec-page-wrapper">
        <?php include "assets/include/header.php"; ?>
        <main class="mt-5 pt-3">
            
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                        <div>
                            <h1>Add Stockist Details</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Stockist Details
                            </p>
                        </div>
                        <div>
                            <a href="business_list.php" class="btn btn-primary"> View All
                            </a>
                        </div>
                    </div>

                    <form  method="post" enctype="multipart/form-data">
                    <div class="row">
                        <!-- CIN Number -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cinNumber">CIN Number:</label>
                                <input type="text" class="form-control" id="cinNumber"  name="cinnumber" placeholder="Enter CIN Number">
                            </div>
                        </div>

                        <!-- GST Number -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gstNumber">GST Number:</label>
                                <input type="text" class="form-control" id="gstNumber" name="gstnumber" placeholder="Enter GST Number">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- PAN Number in the first column -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="panNumber">PAN Number:</label>
                                <input type="text" class="form-control" id="panNumber"  name="pannumber" placeholder="Enter PAN Number">
                            </div>
                        </div>

                        <!-- TAN Number in the second column -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanNumber">TAN Number:</label>
                                <input type="text" class="form-control" id="tanNumber" name="tannumber"  placeholder="Enter TAN Number">
                            </div>
                        </div>

                        <!-- HSN Code in the third column -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hsnCode">HSN Code:</label>
                                <input type="text" class="form-control" id="hsnCode" name="hsncode"  placeholder="Enter HSN Code">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- State Code in the first column -->
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="stateCode">State Code:</label>
                            <select class="form-control" id="stateCode" name="statecode">
                                <option value="" selected disabled>Select State Code</option>
                                <option value="01">01 - Jammu and Kashmir</option>
                                <option value="02">02 - Himachal Pradesh</option>
                                <option value="03">03 - Punjab</option>
                                <option value="04">04 - Chandigarh</option>
                                <option value="05">05 - Uttarakhand</option>
                                <option value="06">06 - Haryana</option>
                                <option value="07">07 - Delhi</option>
                                <option value="08">08 - Rajasthan</option>
                                <option value="09">09 - Uttar Pradesh</option>
                                <option value="10">10 - Bihar</option>
                                <option value="11">11 - Sikkim</option>
                                <option value="12">12 - Arunachal Pradesh</option>
                                <option value="13">13 - Nagaland</option>
                                <option value="14">14 - Manipur</option>
                                <option value="15">15 - Mizoram</option>
                                <option value="16">16 - Tripura</option>
                                <option value="17">17 - Meghalaya</option>
                                <option value="18">18 - Assam</option>
                                <option value="19">19 - West Bengal</option>
                                <option value="20">20 - Jharkhand</option>
                                <option value="21">21 - Odisha</option>
                                <option value="22">22 - Chhattisgarh</option>
                                <option value="23">23 - Madhya Pradesh</option>
                                <option value="24">24 - Gujarat</option>
                                <option value="25">25 - Daman and Diu</option>
                                <option value="26">26 - Dadra and Nagar Haveli</option>
                                <option value="27">27 - Maharashtra</option>
                                <option value="28">28 - Andhra Pradesh</option>
                                <option value="29">29 - Karnataka</option>
                                <option value="30">30 - Goa</option>
                                <option value="31">31 - Lakshadweep</option>
                                <option value="32">32 - Kerala</option>
                                <option value="33">33 - Tamil Nadu</option>
                                <option value="34">34 - Puducherry</option>
                                <option value="35">35 - Andaman and Nicobar Islands</option>
                                <option value="36">36 - Telangana</option>
                                <option value="37">37 - Ladakh</option>
                                <option value="38">38 - Jharkhand</option>
                            </select>
                        </div>
                        </div>


                        <!-- Batch Code in the second column -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="batchCode">Batch Code:</label>
                                <input type="text" class="form-control" id="batchCode" name="batchcode"  placeholder="Enter Batch Code" readonly>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </main>

    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.getElementById('stateCode').addEventListener('change', function() {
        generateBatchCode();
    });

    function generateBatchCode() {
        var stateCode = document.getElementById('stateCode').value;
        var currentDate = new Date();

        // Get the name of the month
        var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var month = monthNames[currentDate.getMonth()];

        var year = currentDate.getFullYear().toString().substr(-2);

        // Format the batchCode as MH/JUN/2023
        var batchCode = stateCode + '/' + month.substr(0, 3).toUpperCase() + '/' + year;
        document.getElementById('batchCode').value = batchCode;
    }
</script>


<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>

</body>
</html>
<?php


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a connection object named $conn
    // Replace the following with your actual database connection code
    $servername = "localhost";
    $username   = "root";
    $password   =  "";
    $dbname     =  "gkb_db";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $cinNumber = $_POST['cinnumber'];
    $gstNumber = $_POST['gstnumber'];
    $panNumber = $_POST['pannumber'];
    $tanNumber = $_POST['tannumber'];
    $hsnCode   = $_POST['hsncode'];
    $stateCode = $_POST['statecode'];
    $batchCode = $_POST['batchcode'];

    // Validate that no field is empty
    if (empty($cinNumber) || empty($gstNumber) || empty($panNumber) || empty($tanNumber) || empty($hsnCode) || empty($stateCode) || empty($batchCode)) {
        echo '<script>
                    alert("Error: Please fill in all fields");
                    // You can redirect or perform any other action here
                </script>';
    } 
    else {
        // Insert data into the database
        $sql = "INSERT INTO businessdata (cinnumber, gstnumber, panNumber, tannumber, hsncode, statecode, batchcode)
                VALUES ('$cinNumber', '$gstNumber', '$panNumber', '$tanNumber', '$hsnCode', '$stateCode', '$batchCode')";

        if ($conn->query($sql) === TRUE) {
            echo '<script>
                    Swal.fire({
                        title: "Success!",
                        text: "Record inserted successfully",
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // You can redirect or perform any other action here
                        }
                    });
                </script>';
        } else {
            echo '<script>
                    Swal.fire({
                        title: "Error!",
                        text: "Error: ' . $conn->error . '",
                        icon: "error",
                        confirmButtonText: "OK"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // You can handle the error or redirect to another page
                        }
                    });
                </script>';
        }
    }
}
?>

