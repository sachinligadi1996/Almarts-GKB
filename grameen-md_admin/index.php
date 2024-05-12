<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
// if($userprofile == true)
// {

// }
// else
// {
//     header('location:adminlogin.php');
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:35 GMT -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard eCommerce HTML Template.">

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

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">z
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
				<div class="content">
					<h3>Welcome to MD's Admin Panel</h3>
					<!-- Top Statistics -->

					<!-- total id's -->
					<?php
					$sql = "SELECT COUNT(*) AS count_items FROM user";
					$query = mysqli_query($conn, $sql);
					$row = mysqli_fetch_array($query);
					$count = $row["count_items"];
					?>

					<div class="row">
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-1">
								<div class="card-body">
									<h2 class="mb-1">
										<?php echo $count; ?>
									</h2>
									<p>Total Id's</p>
									<span class="mdi mdi-dice-multiple"></span>
								</div>
							</div>
						</div>

						<!-- Total Vendors -->
						<?php
						$sql1 = "SELECT COUNT(*) AS count_items FROM gkb_vendor_details";
						$query1 = mysqli_query($conn, $sql1);
						$row1 = mysqli_fetch_array($query1);
						$count1 = $row1["count_items"];
						?>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-1">
								<div class="card-body">
									<h2 class="mb-1">
										<?php echo $count1; ?>
									</h2>
									<p>Total Vendors</p>
									<span class="mdi mdi-account-group-outline"></span>
								</div>
							</div>
						</div>

						<!-- Total branches -->
						<?php
						$sql2 = "SELECT COUNT(*) AS count_items FROM gkb_branch_detail";
						$query2 = mysqli_query($conn, $sql2);
						$row2 = mysqli_fetch_array($query2);
						$count2 = $row2["count_items"];
						?>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-2">
								<div class="card-body">
									<h2 class="mb-1">
										<?php echo $count2; ?>
									</h2>
									<p>Total Branches</p>
									<span class="mdi mdi-dns-outline"></span>
								</div>
							</div>
						</div>

						<!-- Total products -->
						<?php
						$sql3 = "SELECT COUNT(*) AS count_items FROM products";
						$query3 = mysqli_query($conn, $sql3);
						$row3 = mysqli_fetch_array($query3);
						$count3 = $row3["count_items"];
						?>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-2">
								<div class="card-body">
									<h2 class="mb-1">
										<?php echo $count3; ?>
									</h2>
									<p>Total Products</p>
									<span class="mdi mdi-palette-advanced"></span>
								</div>
							</div>
						</div>

						<!-- Total sale manager -->
						<?php
						$sql4 = "SELECT COUNT(*) AS count_items FROM gkb_sales_manager_details";
						$query4 = mysqli_query($conn, $sql4);
						$row4 = mysqli_fetch_array($query4);
						$count4 = $row4["count_items"];

						?>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-3">
								<div class="card-body">
									<h2 class="mb-1">
										<?php echo $count4; ?>
									</h2>
									<p>Total Sales Manager</p>
									<span class="mdi mdi-cart"></span>
								</div>
							</div>
						</div>

						<!-- revenue -->
						<?php
						$sql5 = "SELECT sum(amount_paid),COUNT(*) AS count_items FROM orders";
						$query5 = mysqli_query($conn, $sql5);
						$row5 = mysqli_fetch_array($query5);
						// $count = $row["count_items"];
						?>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-4">
								<div class="card-body">
									<h2 class="mb-1">
										<?php echo $row5['sum(amount_paid)']; ?>
									</h2>
									<p>Total Revenue</p>
									<span class="mdi mdi-currency-inr"></i></span>
								</div>
							</div>
						</div>

						<!-- Total Admin -->
						<?php
						$sql6 = "SELECT COUNT(*) AS count_items FROM gkb_admin_details";
						$query6 = mysqli_query($conn, $sql6);
						$row6 = mysqli_fetch_array($query6);
						$count6 = $row6["count_items"];
						?>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-1">
								<div class="card-body">
									<h2 class="mb-1">
										<?php echo $count6; ?>
									</h2>
									<p>Total Admin</p>
									<span class="mdi mdi-account-group"></span>
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