
<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php include "db.php"; ?>
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
    
</head>
<body>

<div class="wrapper">
    <?php
    include "assets/include/sidebar.php";
    ?>
    <div class="ec-page-wrapper">
        <?php
        include "assets/include/header.php";
        ?>
<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "gkb_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function displayUsersByBranch($refcode, $conn) {
    // Use prepared statements to prevent SQL injection
    $query = "SELECT name, mobile, kisan_id, membership FROM user WHERE refcode = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $refcode);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo "No users found for branch with ID '$refcode'.";
    } else {
        echo '<div class="container" style="margin-top: 10%;"">';
        echo '<div class="row">';

        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-md-4">'; // Adjust the column size as needed
            echo '<div class="card" >';
            echo '<div class="card-body">';
            echo '<h5 class="card-title" style="color: blue;">Name: ' . $row['name'] . '</h5>';
            echo '<h6 class="card-subtitle mb-2 text-muted">Mobile: ' . $row['mobile'] . '</h6>';
            echo '<p class="card-text">Kisan ID: ' . $row['kisan_id'] . '</p>';
            echo '<p class="card-text">Membership: ' . $row['membership'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        echo '</div>';
        echo '</div>';
    }

    $stmt->close();
}

// Get branch ID from the user
$refcode = $_POST['refcode'];  // assuming you are using a form with POST method

// Display users for the entered branch
displayUsersByBranch($refcode, $conn);

// Close the database connection
mysqli_close($conn);
?>



    </div>
</div>


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


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:48 GMT -->

</html>