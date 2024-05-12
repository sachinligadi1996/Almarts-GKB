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
					<div class="breadcrumb-wrapper breadcrumb-contacts">
						<div>
							<h1>Stockist Profile</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Profile
							</p>
						</div>
						<!-- <div>
							<a href="user-list.php" class="btn btn-primary">Edit</a>
						</div> -->
					</div>
					<?php
					$s = "SELECT * FROM `stockist_details`";
					$qury_run = mysqli_query($conn, $s);
					while ($row = mysqli_fetch_assoc($qury_run)) {
						?>
						<div class="card bg-white profile-content">
							<div class="row">
								<div class="col-lg-4 col-xl-3">
									<div class="profile-content-left profile-left-spacing">
										<div class="text-center widget-profile px-0 border-0">
											<div class="card-img mx-auto rounded-circle">
												<img src="assets/img/user/u1.jpg" alt="user image">
											</div>
											<div class="card-body">
												<!-- <label for="branchManager" class="text-dark">Branch Manager:</label> -->
												<h4 id="branchManager" class="py-2 text-dark">
													<?php echo $row['vendor_name'] ?>
												</h4>
												
												<div class="card-body">
													<label for="branchId" style="margin-bottom: 3px;"><b>Stockist ID:</b></label>
													<p id="branchId">
														<?php echo $row['vendor_id'] ?>
													</p>
												<!-- </div> -->

												
												<!-- <div class="card-body"> -->
													<label for="location" style="margin-bottom: 3px;"><b>Location:</b></label>
													<p id="location">
														<?php echo $row['vendor_add2'] ?>
													</p>
												</div>

											</div>

										</div>
									

										<hr class="w-100">

										<div class="contact-info pt-4">
											<h5 class="text-dark">Contact Information</h5>
											<p class="text-dark font-weight-medium pt-24px mb-2">Email address</p>
											<p>
												<?php echo $row['vendor_mail'] ?>
											</p>
											<p class="text-dark font-weight-medium pt-24px mb-2">Phone Number</p>
											<p>
												<?php echo $row['vendor_mob'] ?>
											</p>
										</div>
									</div>
								</div>
								<?php
					}
					?>
							<div class="col-lg-8 col-xl-9">
								<div class="profile-content-right profile-right-spacing py-5">
									<ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab"
										role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
												data-bs-target="#profile" type="button" role="tab"
												aria-controls="profile" aria-selected="true">Profile</button>
										</li>
									</ul>
									<div class="tab-content px-3 px-xl-5" id="myTabContent">

										<div class="tab-pane fade show active" id="profile" role="tabpanel"
											aria-labelledby="profile-tab">
											<div class="tab-widget mt-5">
												<div class="row">
													<div class="col-xl-4">
														<div class="media widget-media p-3 bg-white border">
															<div class="icon rounded-circle mr-3 bg-primary">
																<i class="mdi mdi-account-outline text-white "></i>
															</div>

															<div class="media-body align-self-center">
																<h4 class="text-primary mb-2">546</h4>
																<p>Bought</p>
															</div>
														</div>
													</div>

													<div class="col-xl-4">
														<div class="media widget-media p-3 bg-white border">
															<div class="icon rounded-circle bg-warning mr-3">
																<i class="mdi mdi-cart-outline text-white "></i>
															</div>

															<div class="media-body align-self-center">
																<h4 class="text-primary mb-2">1953</h4>
																<p>Wish List</p>
															</div>
														</div>
													</div>

													<div class="col-xl-4">
														<div class="media widget-media p-3 bg-white border">
															<div class="icon rounded-circle mr-3 bg-success">
																<i class="mdi mdi-ticket-percent text-white "></i>
															</div>

															<div class="media-body align-self-center">
																<h4 class="text-primary mb-2">02</h4>
																<p>Voucher</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										
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

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:35 GMT -->

</html>