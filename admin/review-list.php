<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
if($userprofile == true)
{

}
else
{
    header('location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/review-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:00 GMT -->

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

	<!-- PLUGINS CSS STYLE -->
	<link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- Ekka CSS -->
	<link id="ekka-css" href="assets/css/ekka.css" rel="stylesheet" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
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
					<div
						class="breadcrumb-wrapper breadcrumb-wrapper-2 d-flex align-items-center justify-content-between">
						<h1>Review</h1>
						<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Review
						</p>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table" style="width:100%">
											<thead>
												<tr>
													<th>Id</th>
													<th>Name</th>
													<th>Email</th>
													<th>Rate Us</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												<?php
												$i = 1;
												$query = "SELECT * FROM `review_table` ORDER BY id DESC";
												$qury_run = mysqli_query($conn, $query);
												while ($row = mysqli_fetch_assoc($qury_run)) {
													?>
													<tr>
														<td>
															<?php echo $i; ?>
														</td>
														<td>
															<?php echo $row['user_name']; ?>
														</td>
														<td>
															<?php echo $row['user_email']; ?>
														</td>
														<td>
															<?php echo $row['user_review']; ?>
														</td>
														<td>
															<div class="btn-group mb-1">
																<button type="button"
																	class="btn btn-outline-success">Action</button>
																<button type="button"
																	class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																	data-bs-toggle="dropdown" aria-haspopup="true"
																	aria-expanded="false" data-display="static">
																	<span class="sr-only">Info</span>
																</button>

																<div class="dropdown-menu">
																	<!-- <a class="dropdown-item" href="#">Edit</a> -->
																	<a class="dropdown-item" href="delete_review.php?id=<?php echo $row['id']; ?>">Delete</a>
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

	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>

	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/review-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:01 GMT -->

</html>