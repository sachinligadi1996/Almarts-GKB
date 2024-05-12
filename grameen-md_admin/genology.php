<?php
session_start();
// include("db_conn.php");
include("db.php");
$userprofile = $_SESSION['$user_name'];

// Check if the user is logged in
if ($userprofile == true) {
    // Fetch user_id and name from the user table
    $query = "SELECT user_id, name, refcode FROM user";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch data and create the dropdown options
        $primeMembers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        // Handle the case where the query failed
        $errorMessage = mysqli_error($conn);
        // You might want to handle the error more gracefully
        echo "Error: $errorMessage";
    }
} else {
    // Redirect to the login page if the user is not logged in
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

	<title>Grameen Kendriya Bazar</title>
<!-- Common Javascript -->
<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
<!-- ... other script tags ... -->

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

	<!-- FAVICON -->
	<!-- <link href="assets/img/favicon.png" rel="shortcut icon" /> -->
    <!-- <style>
    .select-margin {
    margin-bottom: 10px;
    }
    </style> -->

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
							<h1>Geneology Report</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Geneology report
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
                        <script>
                            var selectedActiveMember;

                            function loadActiveMembers() {
                            var primeMemberSelect = document.getElementById('primeMember');
                            var selectedPrimeMember = primeMemberSelect.value;

                            $.ajax({
                                url: 'fetch_members.php',
                                method: 'POST',
                                data: { primeMember: selectedPrimeMember },
                                success: function (data) {
                                    try {
                                        var members = JSON.parse(data);

                                        var activeMemberSelect = document.getElementById('activeMember');
                                        activeMemberSelect.innerHTML = '<option value="" selected disabled>Select Active Member</option>';

                                        for (var i = 0; i < members.length; i++) {
                                            var option = document.createElement('option');
                                            option.value = members[i].user_id;
                                            option.text = members[i].user_id + ' - ' + members[i].name;
                                            activeMemberSelect.add(option);
                                        }
                                    } catch (error) {
                                        console.error('Error parsing JSON: ', error);
                                    }

                                    // Clear nested dropdown when prime member changes
                                    var nestedActiveMemberSelect = document.getElementById('nestedActiveMember');
                                    nestedActiveMemberSelect.innerHTML = '<option value="" selected disabled>Select Nested Active Member</option>';
                                },
                                error: function () {
                                    console.error('Failed to fetch members');
                                }
                            });
                        }

                        function loadNestedActiveMembers() {
                            var activeMemberSelect = document.getElementById('activeMember');
                            selectedActiveMember = activeMemberSelect.value;

                            $.ajax({
                                url: 'fetch_nested_members.php',
                                method: 'POST',
                                data: { activeMember: selectedActiveMember },
                                success: function (data) {
                                    var nestedActiveMembers = JSON.parse(data);

                                    var nestedActiveMemberSelect = document.getElementById('nestedActiveMember');
                                    nestedActiveMemberSelect.innerHTML = '<option value="" selected disabled>Select Nested Active Member</option>';

                                    for (var i = 0; i < nestedActiveMembers.length; i++) {
                                        var option = document.createElement('option');
                                        option.value = nestedActiveMembers[i].user_id;
                                        option.text = nestedActiveMembers[i].user_id + ' - ' + nestedActiveMembers[i].name;
                                        nestedActiveMemberSelect.add(option);
                                    }
                                }
                            });
                        }

                        </script>

<div class="row">
    <div class="col-md-4">
        <label for="primeMember" class="mb-3">Select Prime Member:</label>
        <select class="form-select mb-3" id="primeMember" onchange="loadActiveMembers()">
            <option value="" selected disabled>Select Prime Member</option>
            <?php
            foreach ($primeMembers as $primeMember) {
                echo "<option value='{$primeMember['user_id']}'>{$primeMember['user_id']} - {$primeMember['name']}</option>";
            }
            ?>
        </select>

        <select class="form-select mb-3" id="activeMember" onchange="loadNestedActiveMembers()">
            <!-- Options for active members will be dynamically added here -->
        </select>

        <select class="form-select mb-3" id="nestedActiveMember">
            <!-- Options for nested active members will be dynamically added here -->
        </select>
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


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->

</html>