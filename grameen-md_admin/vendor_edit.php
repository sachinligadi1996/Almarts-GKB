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

	<title>Grammeen Kendriya Bazar</title>

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
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="sweetalert2.all.min.js"></script>
	<script src="sweetalert2.min.js"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">

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
							<h1>Add Vendor</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Admin
							</p>
						</div>
						<div>
							<a href="vendor_list.php" class="btn btn-primary"> View All
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Update Vendor</h2>
								</div>
								<?php

								$id = $_GET['id'];

								$sql = "SELECT * FROM `gkb_vendor_details` WHERE  id= '$id'";
								$execute = mysqli_query($conn, $sql);

								$total = mysqli_num_rows($execute);
								$show1 = mysqli_fetch_assoc($execute);

								?>
								<div class="card-body">
									<div class="row ec-vendor-uploads">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="ec-vendor-upload-detail">
												<form class="row g-3" method="post" enctype="multipart/form-data">
													<div class="col-md-6">
														<label for="inputEmail4" class="form-label">Vendor's
															name*</label>
														<input type="text" class="form-control slug-title"
															name="vendor_name" id="inputEmail4"
															value="<?php echo $show1['vendor_name']; ?>">

													</div>
													<div class="col-md-6">
														<label for="inputEmail4" class="form-label">Vendor's
															Mobile*</label>
														<input type="text" class="form-control slug-title"
															name="vendor_mob" id="inputEmail4"
															value="<?php echo $show1['vendor_mob']; ?>">
													</div>

													<div class="col-md-6">
														<label class="form-label">Select Categories</label>
														<select id="Categories" class="form-select" name="vendor_cat">
															<option value="Choose">Choose Category</option>
															<option value="Agricultural">Agricultural</option>
															<option value="Grocery">Grocery</option>
															<option value="Electronics">Electronics</option>
															<option value="Fruits & vegetables">Fruits & vegetables
															</option>

														</select>
													</div>
													<!-- <div class="col-md-12">
														<label class="form-label">Product Description</label>
														<textarea class="form-control" rows="2"
															name="pro_desc"></textarea>
													</div> -->
													<div class="col-md-6">
														<label class="form-label">Vendors's Email*</label>
														<input type="text" class="form-control" id="price1"
															name="vendor_mail"
															value="<?php echo $show1['vendor_mail']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label">Vendor's Aadhar no.*</label>
														<input type="number" class="form-control" id="price2"
															name="vendor_adhar"
															value="<?php echo $show1['vendor_adhar']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label">Venodr's Username*</label>
														<input type="text" class="form-control" id="quantity1"
															name="vendor_username"
															value="<?php echo $show1['vendor_username']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label">vendor's Password*</label>
														<input type="text" class="form-control" id="quantity1"
															name="vendor_pass"
															value="<?php echo $show1['vendor_pass']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label">Road name, Area, Colony*</label>
														<input type="text" class="form-control" id="quantity1"
															name="vendor_add"
															value="<?php echo $show1['vendor_add']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label">House no., Building Name*</label>
														<input type="text" class="form-control" id="quantity1"
															name="vendor_add1"
															value="<?php echo $show1['vendor_add1']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label">City*</label>
														<input type="text" class="form-control" id="quantity1"
															name="vendor_add2"
															value="<?php echo $show1['vendor_add2']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label">State*</label>
														<input type="text" class="form-control" id="quantity1"
															name="vendor_add3"
															value="<?php echo $show1['vendor_add3']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label">Pincode*</label>
														<input type="text" class="form-control" id="quantity1"
															name="vendor_add4"
															value="<?php echo $show1['vendor_add4']; ?>">
													</div>

													<div class="col-md-12">
														<button type="submit" name="save"
															class="btn btn-primary">Update</button>
													</div>
												</form>
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
	<script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->

</html>


<?php
if (isset($_POST['save'])) {
	// $rand = $_POST['rand'];
	$name = $_POST['vendor_name'];
	$mob = $_POST['vendor_mob'];
	$cat = $_POST['vendor_cat'];
	$mail = $_POST['vendor_mail'];
	$adhar = $_POST['vendor_adhar'];
	$uname = $_POST['vendor_username'];
	$pass = $_POST['vendor_pass'];
	$add = $_POST['vendor_add'];
	$add1 = $_POST['vendor_add1'];
	$add2 = $_POST['vendor_add2'];
	$add3 = $_POST['vendor_add3'];
	$add4 = $_POST['vendor_add4'];

	// Corrected SQL Query
	$sql = "UPDATE `gkb_vendor_details` SET `vendor_name`='$name',`vendor_mob`='$mob',`vendor_cat`='$cat',`vendor_mail`='$mail',`vendor_adhar`='$adhar',`vendor_username`='$uname',`vendor_pass`='$pass',`vendor_add`='$add',`vendor_add1`='$add1',`vendor_add2`='$add2',`vendor_add3`='$add3',`vendor_add4`='$add4' WHERE `id` = '$id'";

	// Use prepared statements or sanitize input to prevent SQL injection
	$q_run = mysqli_query($conn, $sql);

	if ($q_run) {
		echo "<script type='text/javascript'>
			Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'Vendor Updated Successfully!',
			showConfirmButton: false,
			timer: 1500
			})
	
			</script>";

		// header("location:vendor_list.php");

	} else {
		echo "Failed !!!";
	}
}
?>