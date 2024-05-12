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


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:54 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

	<title>Ekka - Admin Dashboard HTML Template.</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

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
							<h1>Product</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<div>
							<a href="product-list.php" class="btn btn-primary"> Add Porduct</a>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom d-flex justify-content-between">
									<div class="card-bar">
										<div class="col-lg-6 col-md-12">
											<input type="text" class="form-control" id="searchProduct"
												placeholder="search with product name..">
										</div>
										<div class="col-lg-6 col-md-12 sort">
											<div class="col-lg-4 col-md-6 p-space">
												<select class="form-control" id="dropdownCategory">
													<option value="ALL">ALL Category</option>
													<option value="MEN">Men's</option>
													<option value="WOMAN">Woman's</option>
													<option value="KID">Kids</option>
													<option value="OTHER">OTHER</option>
												</select>
											</div>
											<div class="col-lg-4 col-md-6 p-space">
												<select class="form-control" id="dropdownOrderBy">
													<option value="ALL">ORDER BY</option>
													<option value="MEN">Letest</option>
													<option value="WOMAN">Price Low - High</option>
													<option value="KID">Price High - Low</option>
													<option value="OTHER">OTHER</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p1.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Glomy shoes</h3>
														<p>$50</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p2.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Full Cap t-Shirt</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p3.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Full Sleeve t-Shirt</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p4.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Round Cap with Black Frame</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p5.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Mini Blue Bag</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p6.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Doctor's kit for baby</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p1.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Baby Smart shoes</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p2.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Full Sleeve T-Shirt</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p9.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Full Sleeve For Men's</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p10.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>shoes for Men</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p11.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Classic Purse for Woman</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p12.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>High Heal Scandle for Woman</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p13.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Big basket Lather Bag</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p14.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Lather shoes for Kids</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p15.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Baby Pink shoes</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p16.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Big Basket For Grossary</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p17.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Boat Ear buds</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p7.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Smart Shirt For Men</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p8.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>Smart Digital Watches</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="card-wrapper">
												<div class="card-container">
													<div class="card-top">
														<img class="card-image" src="assets/img/products/p10.jpg"
															alt="" />
													</div>
													<div class="card-bottom">
														<h3>shoes for Men</h3>
														<p>$120</p>
													</div>
													<div class="card-action">
														<div class="card-edit"><i
																class="mdi mdi-circle-edit-outline"></i></div>
														<div class="card-preview"><i class="mdi mdi-eye-outline"></i>
														</div>
														<div class="card-remove"><i
																class="mdi mdi mdi-delete-outline"></i></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<nav aria-label="Page navigation example p-0">
											<ul class="pagination pagination-seperated pagination-seperated-rounded">
												<li class="page-item">
													<a class="page-link" href="#" aria-label="Previous">
														<span aria-hidden="true"
															class="mdi mdi-chevron-left mr-1"></span> Prev
														<span class="sr-only">Previous</span>
													</a>
												</li>

												<li class="page-item active">
													<a class="page-link" href="#">1</a>
												</li>

												<li class="page-item">
													<a class="page-link" href="#">2</a>
												</li>

												<li class="page-item">
													<a class="page-link" href="#">3</a>
												</li>

												<li class="page-item">
													<a class="page-link" href="#" aria-label="Next">
														Next
														<span aria-hidden="true"
															class="mdi mdi-chevron-right ml-1"></span>
														<span class="sr-only">Next</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->
		<?php
			include "assets/include/footer.php";
			?>
			
		</div> <!-- End Content -->
	</div> <!-- End Content Wrapper -->

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


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:57 GMT -->
</html>