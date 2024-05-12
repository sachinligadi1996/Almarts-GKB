<?php
session_start();
include("db.php");
$distributor = $_SESSION['$distributor'];
if ($distributor == true) {

} else {
	header('location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/vendor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:35 GMT -->

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

	<!-- Data Tables -->
	<link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

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
					<div class="breadcrumb-wrapper breadcrumb-contacts">
						<div>
							<h1>Vendor List</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Vendor
							</p>
						</div>
						<div>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal"
								data-bs-target="#addVendor"> Add Vendor
							</button>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="ec-vendor-list card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table">
											<thead>
												<tr>
													<th>Profile</th>
													<th>Name</th>
													<th>Email</th>
													<th>Product</th>
													<th>Total Sell</th>
													<th>Status</th>
													<th>Join On</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u1.jpg"
															alt="vendor image" /></td>
													<td>Marlee Rena</td>
													<td>marleerena@gmail.com</td>
													<td>28</td>
													<td>2161</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u2.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u3.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u4.jpg"
															alt="vendor image" /></td>
													<td>Mohini Marlo</td>
													<td>mohinimarlo@gmail.com</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td>2021-10-21</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u5.jpg"
															alt="vendor image" /></td>
													<td>Nitilo Kathilo</td>
													<td>nitilokathilo@gmail.com</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td>2021-10-18</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u6.jpg"
															alt="vendor image" /></td>
													<td>Hardi Sandhu</td>
													<td>hardisandhu@gmail.com</td>
													<td>82</td>
													<td>10061</td>
													<td>ACTIVE</td>
													<td>2021-10-14</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u7.jpg"
															alt="vendor image" /></td>
													<td>Bhavlo Malvia</td>
													<td>bhavlomalvia@gmail.com</td>
													<td>18</td>
													<td>3061</td>
													<td>ACTIVE</td>
													<td>2021-10-05</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u8.jpg"
															alt="vendor image" /></td>
													<td>Jeni Dusuja</td>
													<td>jenidusuja@gmail.com</td>
													<td>60</td>
													<td>6061</td>
													<td>ACTIVE</td>
													<td>2021-10-01</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u1.jpg"
															alt="vendor image" /></td>
													<td>Marlee Rena</td>
													<td>marleerena@gmail.com</td>
													<td>28</td>
													<td>2161</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u2.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u3.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u4.jpg"
															alt="vendor image" /></td>
													<td>Mohini Marlo</td>
													<td>mohinimarlo@gmail.com</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td>2021-10-21</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u5.jpg"
															alt="vendor image" /></td>
													<td>Nitilo Kathilo</td>
													<td>nitilokathilo@gmail.com</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td>2021-10-18</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u6.jpg"
															alt="vendor image" /></td>
													<td>Hardi Sandhu</td>
													<td>hardisandhu@gmail.com</td>
													<td>82</td>
													<td>10061</td>
													<td>ACTIVE</td>
													<td>2021-10-14</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u7.jpg"
															alt="vendor image" /></td>
													<td>Bhavlo Malvia</td>
													<td>bhavlomalvia@gmail.com</td>
													<td>18</td>
													<td>3061</td>
													<td>ACTIVE</td>
													<td>2021-10-05</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u8.jpg"
															alt="vendor image" /></td>
													<td>Jeni Dusuja</td>
													<td>jenidusuja@gmail.com</td>
													<td>60</td>
													<td>6061</td>
													<td>ACTIVE</td>
													<td>2021-10-01</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u1.jpg"
															alt="vendor image" /></td>
													<td>Marlee Rena</td>
													<td>marleerena@gmail.com</td>
													<td>28</td>
													<td>2161</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u2.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u3.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u4.jpg"
															alt="vendor image" /></td>
													<td>Mohini Marlo</td>
													<td>mohinimarlo@gmail.com</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td>2021-10-21</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u5.jpg"
															alt="vendor image" /></td>
													<td>Nitilo Kathilo</td>
													<td>nitilokathilo@gmail.com</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td>2021-10-18</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u6.jpg"
															alt="vendor image" /></td>
													<td>Hardi Sandhu</td>
													<td>hardisandhu@gmail.com</td>
													<td>82</td>
													<td>10061</td>
													<td>ACTIVE</td>
													<td>2021-10-14</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u7.jpg"
															alt="vendor image" /></td>
													<td>Bhavlo Malvia</td>
													<td>bhavlomalvia@gmail.com</td>
													<td>18</td>
													<td>3061</td>
													<td>ACTIVE</td>
													<td>2021-10-05</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u8.jpg"
															alt="vendor image" /></td>
													<td>Jeni Dusuja</td>
													<td>jenidusuja@gmail.com</td>
													<td>60</td>
													<td>6061</td>
													<td>ACTIVE</td>
													<td>2021-10-01</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u1.jpg"
															alt="vendor image" /></td>
													<td>Marlee Rena</td>
													<td>marleerena@gmail.com</td>
													<td>28</td>
													<td>2161</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u2.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u3.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u4.jpg"
															alt="vendor image" /></td>
													<td>Mohini Marlo</td>
													<td>mohinimarlo@gmail.com</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td>2021-10-21</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u5.jpg"
															alt="vendor image" /></td>
													<td>Nitilo Kathilo</td>
													<td>nitilokathilo@gmail.com</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td>2021-10-18</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u6.jpg"
															alt="vendor image" /></td>
													<td>Hardi Sandhu</td>
													<td>hardisandhu@gmail.com</td>
													<td>82</td>
													<td>10061</td>
													<td>ACTIVE</td>
													<td>2021-10-14</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u7.jpg"
															alt="vendor image" /></td>
													<td>Bhavlo Malvia</td>
													<td>bhavlomalvia@gmail.com</td>
													<td>18</td>
													<td>3061</td>
													<td>ACTIVE</td>
													<td>2021-10-05</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u8.jpg"
															alt="vendor image" /></td>
													<td>Jeni Dusuja</td>
													<td>jenidusuja@gmail.com</td>
													<td>60</td>
													<td>6061</td>
													<td>ACTIVE</td>
													<td>2021-10-01</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u1.jpg"
															alt="vendor image" /></td>
													<td>Marlee Rena</td>
													<td>marleerena@gmail.com</td>
													<td>28</td>
													<td>2161</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u2.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u3.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u4.jpg"
															alt="vendor image" /></td>
													<td>Mohini Marlo</td>
													<td>mohinimarlo@gmail.com</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td>2021-10-21</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u5.jpg"
															alt="vendor image" /></td>
													<td>Nitilo Kathilo</td>
													<td>nitilokathilo@gmail.com</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td>2021-10-18</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u6.jpg"
															alt="vendor image" /></td>
													<td>Hardi Sandhu</td>
													<td>hardisandhu@gmail.com</td>
													<td>82</td>
													<td>10061</td>
													<td>ACTIVE</td>
													<td>2021-10-14</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u7.jpg"
															alt="vendor image" /></td>
													<td>Bhavlo Malvia</td>
													<td>bhavlomalvia@gmail.com</td>
													<td>18</td>
													<td>3061</td>
													<td>ACTIVE</td>
													<td>2021-10-05</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u8.jpg"
															alt="vendor image" /></td>
													<td>Jeni Dusuja</td>
													<td>jenidusuja@gmail.com</td>
													<td>60</td>
													<td>6061</td>
													<td>ACTIVE</td>
													<td>2021-10-01</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u1.jpg"
															alt="vendor image" /></td>
													<td>Marlee Rena</td>
													<td>marleerena@gmail.com</td>
													<td>28</td>
													<td>2161</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u2.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u3.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u4.jpg"
															alt="vendor image" /></td>
													<td>Mohini Marlo</td>
													<td>mohinimarlo@gmail.com</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td>2021-10-21</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u5.jpg"
															alt="vendor image" /></td>
													<td>Nitilo Kathilo</td>
													<td>nitilokathilo@gmail.com</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td>2021-10-18</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u6.jpg"
															alt="vendor image" /></td>
													<td>Hardi Sandhu</td>
													<td>hardisandhu@gmail.com</td>
													<td>82</td>
													<td>10061</td>
													<td>ACTIVE</td>
													<td>2021-10-14</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u7.jpg"
															alt="vendor image" /></td>
													<td>Bhavlo Malvia</td>
													<td>bhavlomalvia@gmail.com</td>
													<td>18</td>
													<td>3061</td>
													<td>ACTIVE</td>
													<td>2021-10-05</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u8.jpg"
															alt="vendor image" /></td>
													<td>Jeni Dusuja</td>
													<td>jenidusuja@gmail.com</td>
													<td>60</td>
													<td>6061</td>
													<td>ACTIVE</td>
													<td>2021-10-01</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u1.jpg"
															alt="vendor image" /></td>
													<td>Marlee Rena</td>
													<td>marleerena@gmail.com</td>
													<td>28</td>
													<td>2161</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u2.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u3.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u4.jpg"
															alt="vendor image" /></td>
													<td>Mohini Marlo</td>
													<td>mohinimarlo@gmail.com</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td>2021-10-21</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u5.jpg"
															alt="vendor image" /></td>
													<td>Nitilo Kathilo</td>
													<td>nitilokathilo@gmail.com</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td>2021-10-18</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u6.jpg"
															alt="vendor image" /></td>
													<td>Hardi Sandhu</td>
													<td>hardisandhu@gmail.com</td>
													<td>82</td>
													<td>10061</td>
													<td>ACTIVE</td>
													<td>2021-10-14</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u7.jpg"
															alt="vendor image" /></td>
													<td>Bhavlo Malvia</td>
													<td>bhavlomalvia@gmail.com</td>
													<td>18</td>
													<td>3061</td>
													<td>ACTIVE</td>
													<td>2021-10-05</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u8.jpg"
															alt="vendor image" /></td>
													<td>Jeni Dusuja</td>
													<td>jenidusuja@gmail.com</td>
													<td>60</td>
													<td>6061</td>
													<td>ACTIVE</td>
													<td>2021-10-01</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u1.jpg"
															alt="vendor image" /></td>
													<td>Marlee Rena</td>
													<td>marleerena@gmail.com</td>
													<td>28</td>
													<td>2161</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u2.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u3.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u4.jpg"
															alt="vendor image" /></td>
													<td>Mohini Marlo</td>
													<td>mohinimarlo@gmail.com</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td>2021-10-21</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u5.jpg"
															alt="vendor image" /></td>
													<td>Nitilo Kathilo</td>
													<td>nitilokathilo@gmail.com</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td>2021-10-18</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u6.jpg"
															alt="vendor image" /></td>
													<td>Hardi Sandhu</td>
													<td>hardisandhu@gmail.com</td>
													<td>82</td>
													<td>10061</td>
													<td>ACTIVE</td>
													<td>2021-10-14</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u7.jpg"
															alt="vendor image" /></td>
													<td>Bhavlo Malvia</td>
													<td>bhavlomalvia@gmail.com</td>
													<td>18</td>
													<td>3061</td>
													<td>ACTIVE</td>
													<td>2021-10-05</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u8.jpg"
															alt="vendor image" /></td>
													<td>Jeni Dusuja</td>
													<td>jenidusuja@gmail.com</td>
													<td>60</td>
													<td>6061</td>
													<td>ACTIVE</td>
													<td>2021-10-01</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u1.jpg"
															alt="vendor image" /></td>
													<td>Marlee Rena</td>
													<td>marleerena@gmail.com</td>
													<td>28</td>
													<td>2161</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u2.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u3.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u4.jpg"
															alt="vendor image" /></td>
													<td>Mohini Marlo</td>
													<td>mohinimarlo@gmail.com</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td>2021-10-21</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u5.jpg"
															alt="vendor image" /></td>
													<td>Nitilo Kathilo</td>
													<td>nitilokathilo@gmail.com</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td>2021-10-18</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u6.jpg"
															alt="vendor image" /></td>
													<td>Hardi Sandhu</td>
													<td>hardisandhu@gmail.com</td>
													<td>82</td>
													<td>10061</td>
													<td>ACTIVE</td>
													<td>2021-10-14</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u7.jpg"
															alt="vendor image" /></td>
													<td>Bhavlo Malvia</td>
													<td>bhavlomalvia@gmail.com</td>
													<td>18</td>
													<td>3061</td>
													<td>ACTIVE</td>
													<td>2021-10-05</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u8.jpg"
															alt="vendor image" /></td>
													<td>Jeni Dusuja</td>
													<td>jenidusuja@gmail.com</td>
													<td>60</td>
													<td>6061</td>
													<td>ACTIVE</td>
													<td>2021-10-01</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u1.jpg"
															alt="vendor image" /></td>
													<td>Marlee Rena</td>
													<td>marleerena@gmail.com</td>
													<td>28</td>
													<td>2161</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u2.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u3.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u4.jpg"
															alt="vendor image" /></td>
													<td>Mohini Marlo</td>
													<td>mohinimarlo@gmail.com</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td>2021-10-21</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u5.jpg"
															alt="vendor image" /></td>
													<td>Nitilo Kathilo</td>
													<td>nitilokathilo@gmail.com</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td>2021-10-18</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u6.jpg"
															alt="vendor image" /></td>
													<td>Hardi Sandhu</td>
													<td>hardisandhu@gmail.com</td>
													<td>82</td>
													<td>10061</td>
													<td>ACTIVE</td>
													<td>2021-10-14</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u7.jpg"
															alt="vendor image" /></td>
													<td>Bhavlo Malvia</td>
													<td>bhavlomalvia@gmail.com</td>
													<td>18</td>
													<td>3061</td>
													<td>ACTIVE</td>
													<td>2021-10-05</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u8.jpg"
															alt="vendor image" /></td>
													<td>Jeni Dusuja</td>
													<td>jenidusuja@gmail.com</td>
													<td>60</td>
													<td>6061</td>
													<td>ACTIVE</td>
													<td>2021-10-01</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u1.jpg"
															alt="vendor image" /></td>
													<td>Marlee Rena</td>
													<td>marleerena@gmail.com</td>
													<td>28</td>
													<td>2161</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u2.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u3.jpg"
															alt="vendor image" /></td>
													<td>Johnee Bolbi</td>
													<td>johneebolbi@gmail.com</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td>2021-10-25</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u4.jpg"
															alt="vendor image" /></td>
													<td>Mohini Marlo</td>
													<td>mohinimarlo@gmail.com</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td>2021-10-21</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u5.jpg"
															alt="vendor image" /></td>
													<td>Nitilo Kathilo</td>
													<td>nitilokathilo@gmail.com</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td>2021-10-18</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u6.jpg"
															alt="vendor image" /></td>
													<td>Hardi Sandhu</td>
													<td>hardisandhu@gmail.com</td>
													<td>82</td>
													<td>10061</td>
													<td>ACTIVE</td>
													<td>2021-10-14</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u7.jpg"
															alt="vendor image" /></td>
													<td>Bhavlo Malvia</td>
													<td>bhavlomalvia@gmail.com</td>
													<td>18</td>
													<td>3061</td>
													<td>ACTIVE</td>
													<td>2021-10-05</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="vendor-thumb" src="assets/img/vendor/u8.jpg"
															alt="vendor image" /></td>
													<td>Jeni Dusuja</td>
													<td>jenidusuja@gmail.com</td>
													<td>60</td>
													<td>6061</td>
													<td>ACTIVE</td>
													<td>2021-10-01</td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Add Vendor Modal  -->
					<div class="modal fade modal-add-contact" id="addVendor" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">
								<form>
									<div class="modal-header px-4">
										<h5 class="modal-title" id="exampleModalCenterTitle">Add New Vendor</h5>
									</div>

									<div class="modal-body px-4">
										<div class="form-group row mb-6">
											<label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Vendor
												Image</label>

											<div class="col-sm-8 col-lg-10">
												<div class="custom-file mb-1">
													<input type="file" class="custom-file-input" id="coverImage"
														required>
													<label class="custom-file-label" for="coverImage">Choose
														file...</label>
													<div class="invalid-feedback">Example invalid custom file feedback
													</div>
												</div>
											</div>
										</div>

										<div class="row mb-2">
											<div class="col-lg-6">
												<div class="form-group">
													<label for="firstName">First name</label>
													<input type="text" class="form-control" id="firstName" value="John">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group">
													<label for="lastName">Last name</label>
													<input type="text" class="form-control" id="lastName" value="Deo">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="userName">User name</label>
													<input type="text" class="form-control" id="userName"
														value="johndoe">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="email">Email</label>
													<input type="email" class="form-control" id="email"
														value="johnexample@gmail.com">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="Birthday">Birthday</label>
													<input type="text" class="form-control" id="Birthday"
														value="10-12-1991">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="event">Address</label>
													<input type="text" class="form-control" id="event"
														value="Address here">
												</div>
											</div>
										</div>
									</div>

									<div class="modal-footer px-4">
										<button type="button" class="btn btn-secondary btn-pill"
											data-bs-dismiss="modal">Cancel</button>
										<button type="button" class="btn btn-primary btn-pill">Save Contact</button>
									</div>
								</form>
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

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/vendor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:35 GMT -->

</html>