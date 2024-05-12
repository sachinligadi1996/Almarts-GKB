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


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

	<title>Gangotri Ganga</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- Ekka CSS -->
	<link id="ekka-css" href="assets/css/ekka.css" rel="stylesheet" />

	<!-- FAVICON -->
	<!-- <link href="assets/img/favicon.png" rel="shortcut icon" /> -->
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
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2">
						<h1>Invoice</h1>
						<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Invoice
						</p>
					</div>
					<div class="card invoice-wrapper border-radius border bg-white p-4">
						<div class="d-flex justify-content-between">
							<h3 class="text-dark font-weight-medium">Invoice #125</h3>

							<div class="btn-group">
								<button class="btn btn-sm btn-primary">
									<i class="mdi mdi-content-save"></i> Save
								</button>

								<button class="btn btn-sm btn-primary">
									<i class="mdi mdi-printer"></i> Print
								</button>
							</div>
						</div>

						<div class="row pt-5">
							<div class="col-xl-3 col-lg-4 col-sm-6">
								<p class="text-dark mb-2">From</p>

								<address>
									<span>Ekka</span>
									<br> 47 Elita Squre, VIP Chowk,
									<br> <span>Email:</span> example@gmail.com
									<br> <span>Phone:</span> +91 5264 251 325
								</address>
							</div>
							<div class="col-xl-3 col-lg-4 col-sm-6">
								<p class="text-dark mb-2">To</p>

								<address>
									<span>John Marle</span>
									<br> 58 Jamie Ways, North Faye, Q5 5ZP
									<br> <span>Email</span>: example@gmail.com
									<br> <span>Phone:</span> +91 5264 521 943
								</address>
							</div>
							<div class="col-xl-4 disp-none"></div>
							<div class="col-xl-2 col-lg-4 col-sm-6">
								<p class="text-dark mb-2">Details</p>

								<address>
									<span>Invoice ID:</span>
									<span class="text-dark">#2365546</span>
									<br><span>Date :</span> March 25, 2018
									<br> <span>VAT:</span> PL6541215450
								</address>
							</div>
						</div>

						<div class="table-responsive">
							<table class="table mt-3 table-striped table-responsive table-responsive-large inv-tbl"
								style="width:100%">
								<thead>
									<tr>
										<th>#</th>
										<th>Image</th>
										<th>Item</th>
										<th>Description</th>
										<th>Quantity</th>
										<th>Unit_Cost</th>
										<th>Total</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>1</td>
										<td><img class="invoice-item-img" src="assets/img/products/p1.jpg" alt="product-image" /></td>
										<td>Baby Pink Shoese</td>
										<td>Amazing shoes with 10 day's replacement warrenty</td>
										<td>4</td>
										<td>$50.00</td>
										<td>$200.00</td>
									</tr>

									<tr>
										<td>2</td>
										<td><img class="invoice-item-img" src="assets/img/products/p2.jpg" alt="product-image"></td>
										<td>Man T-Shirt with Cap Style</td>
										<td>Long Sleeve men T-shirt with cap in Dark Blue Color</td>
										<td>10</td>
										<td>$50.00</td>
										<td>$500.00</td>
									</tr>

									<tr>
										<td>3</td>
										<td><img class="invoice-item-img" src="assets/img/products/p3.jpg" alt="product-image"></td>
										<td>Full Sleeve T-Shirt for men</td>
										<td>Amazing T-shirt in pure Cotton for both</td>
										<td>10</td>
										<td>$20.00</td>
										<td>$200.00</td>
									</tr>

									<tr>
										<td>4</td>
										<td><img class="invoice-item-img" src="assets/img/products/p4.jpg" alt="product-image"></td>
										<td>Round Hat for Men</td>
										<td>Pure Leather Hat for men with black round tap</td>
										<td>6</td>
										<td>$50.00</td>
										<td>$300.00</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="row justify-content-end inc-total">
							<div class="col-lg-3 col-xl-3 col-xl-3 ml-sm-auto">
								<ul class="list-unstyled mt-3">
									<li class="mid pb-3 text-dark"> Subtotal
										<span class="d-inline-block float-right text-default">$1200.00</span>
									</li>

									<li class="mid pb-3 text-dark">Vat(10%)
										<span class="d-inline-block float-right text-default">$100.00</span>
									</li>

									<li class="pb-3 text-dark">Total
										<span class="d-inline-block float-right">$1300.00</span>
									</li>
								</ul>

								<a href="javascript:void(0)" class="btn btn-block mt-2 btn-primary btn-pill"> Procced to
									Payment</a>
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


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->
</html>