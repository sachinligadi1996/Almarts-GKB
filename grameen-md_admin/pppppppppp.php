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

	<title>Ekka - Admin Dashboard HTML Template.</title>

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
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Add Product</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<div>
							<a href="product-list.php" class="btn btn-primary"> View All
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Add Product</h2>
								</div>

								<div class="card-body">
									<div class="row ec-vendor-uploads">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="ec-vendor-upload-detail">
												<form class="row g-3" method="post" enctype="multipart/form-data">
													<div class="col-md-6">
														<label for="inputEmail4" class="form-label">Product name</label>
														<input type="text" class="form-control slug-title"
															name="pro_name" id="inputEmail4">
													</div>

													<div class="col-md-6">
														<label class="form-label">Select Categories</label>
														<select id="Categories" class="form-select" name="cat">
															<option value="Choose">Choose Category</option>
															<?php
															$quey = "SELECT * FROM `category` ORDER BY id DESC";
															$qu_run = mysqli_query($conn, $quey);
															while ($row = mysqli_fetch_assoc($qu_run)) {
																?>
																<option value="<?php echo $row['cat_name'] ?>">
																	<?php echo $row['cat_name'] ?>
																</option>
															<?php } ?>
														</select>
													</div>
													<div class="col-md-12">
														<label class="form-label">Product Description</label>
														<textarea class="form-control" rows="2"
															name="pro_desc"></textarea>
													</div>
													<div class="col-md-6">
														<label class="form-label">Old Price</label>
														<input type="number" class="form-control" id="price1"
															name="pro_old_price">
													</div>
													<div class="col-md-6">
														<label class="form-label">New Price</label>
														<input type="number" class="form-control" id="price2"
															name="pro_new_price">
													</div>
													<div class="col-md-6">
														<label class="form-label">Quantity</label>
														<input type="number" class="form-control" id="quantity1"
															name="pro_qty">
													</div>
													<div class="col-md-6">
														<label class="form-label">Thumb-1</label>
														<input type="file" class="form-control" name="thumb_1">
													</div>
													<div class="col-md-6">
														<label class="form-label">Thumb-2</label>
														<input type="file" class="form-control" name="thumb_2">
													</div>
													<div class="col-md-6">
														<label class="form-label">Thumb-3</label>
														<input type="file" class="form-control" name="thumb_3">
													</div>
													<div class="col-md-12">
														<button type="submit" name="save"
															class="btn btn-primary">Submit</button>
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

	$pro_name = $_POST['pro_name'];
	$pro_cat = $_POST['cat'];
	$pro_desc = $_POST['pro_desc'];
	$pro_old_price = $_POST['pro_old_price'];
	$pro_new_price = $_POST['pro_new_price'];
	$pro_qty = $_POST['pro_qty'];

	$filename = $_FILES['thumb_1']['name'];
	$tempname = $_FILES['thumb_1']['tmp_name'];
	$folder1 = "assets/products/" . $filename;
	move_uploaded_file($tempname, $folder1);

	$filename = $_FILES['thumb_2']['name'];
	$tempname = $_FILES['thumb_2']['tmp_name'];
	$folder2 = "assets/products/" . $filename;
	move_uploaded_file($tempname, $folder2);

	$filename = $_FILES['thumb_3']['name'];
	$tempname = $_FILES['thumb_3']['tmp_name'];
	$folder3 = "assets/products/" . $filename;
	move_uploaded_file($tempname, $folder3);


	$sql = "INSERT INTO `products`(`prod_name`, `cat_name`, `product_descr`, `old_price`, `new_price`, `quantity`,`thum1`, `thum2`, `thum3`) VALUES ('$pro_name','$pro_cat','$pro_desc','$pro_old_price','$pro_new_price','$pro_qty','$folder1','$folder2', '$folder3')";
	$qurey_run = mysqli_query($conn, $sql);
	if ($qurey_run) {
		echo "success";
	} else {
		echo "error";
	}
}
?>