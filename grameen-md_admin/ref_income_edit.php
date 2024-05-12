<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
// if ($userprofile == true) {

// } else {
// 	header('location:adminlogin.php');
// }
// ?>
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
							<h1>Update Income List</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Admin
							</p>
						</div>
						<div>
							<a href="ref_income_list.php" class="btn btn-primary"> View All
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Update List</h2>
								</div>
								<?php

								$id = $_GET['id'];

								$sql = "SELECT * FROM `refincome` WHERE  id= '$id'";
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
														<label class="form-label">Membership Plan</label>
														<select id="membership" class="form-select" name="membership">
															<option value="Choose">Choose Category</option>
															<option value="General">General</option>
															<option value="Students">Students</option>
															<option value="Women">Women</option>
															<option value="Disable Person">Disable Person</option>

														</select>
													</div>

													<div class="col-md-6">
														<label for="for month" class="form-label">Maximum No. Of Payouts On Each Refferal In Months :</label>
														<input type="text" class="form-control slug-title"
															name="maxref" id="for month"
															value="<?php echo $show1['maxref']; ?>">
													</div>

												
													<div class="col-md-6">
														<label class="form-label">1st Batch Share In RS</label>
														<input type="text" class="form-control" id="mto"
															name="batch2"
															value="<?php echo $show1['batch2']; ?>">
													</div>

                                                    <div class="col-md-6">
														<label class="form-label">Share On Next Batch (Remaining) ID'S In RS</label>
														<input type="text" class="form-control" id="mto"
															name="share2"
															value="<?php echo $show1['share2']; ?>">
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
	
	$membership = $_POST['membership'];
    $maxref = $_POST['maxref'];
    $batch2 = $_POST['batch2'];
    $share2 = $_POST['share2'];
    
   
    

	// Corrected SQL Query
	$sql = "UPDATE `refincome` SET `membership`='$membership',`maxref`='$maxref',`batch2`='$batch2',`share2`='$share2' WHERE `id` = '$id'";

	// Use prepared statements or sanitize input to prevent SQL injection
	$qurey_run = mysqli_query($conn, $sql);
	if ($qurey_run) {
		echo "<script>
		Swal.fire({
			icon: 'success',
			title: 'Income Updated Successfully',
			showConfirmButton: false,
			timer: 1500
		}).then(() => {
			window.location.href = 'ref_income_list.php';
		});
	</script>";

		// header("location:vendor_list.php");

	} else {
		echo "Failed !!!";
	}
}
?>