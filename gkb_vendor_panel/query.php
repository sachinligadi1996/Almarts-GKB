<?php
session_start();
include("db.php");
$distributor = $_SESSION['$distributor'];
// if ($distributor == true) {

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

	<!-- ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

	<!-- FAVICON -->
	<!-- <link href="assets/img/favicon.png" rel="shortcut icon" /> -->
	
<style>
	.btn button{
		text-align: center;
		width: 150px;
		height: 35px;
		background-color: green;
		color: white;
	}
</style>
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
							<h1>Add Query</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<div>
							<a href="query_list.php" class="btn btn-primary"> View All
							</a>
						</div>
					</div>
					<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Add Your Query Here</h2>
								</div>

								<div class="card-body">
									<div class="row ec-vendor-uploads">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="ec-vendor-upload-detail">
												<form class="row g-3" method="post" enctype="multipart/form-data">
													<div class="col-md-6">
														<label for="inputEmail4" class="form-label">Full Name</label>
														<input type="text" name="name" placeholder="Enter your name"/>
														
													</div>
													<div class="col-md-6">
														<label for="inputEmail4" class="form-label">Date</label>
														<input type="date" name="date" />
														
													</div>

													<div class="col-md-6">
														<label class="form-label">Phone No</label>
														<input type="tel" name="mobile" id="phone" placeholder="Enter your phone number"
                                        required />
													</div>
													
													<div class="col-md-6">
														<label class="form-label">Branch Code</label>
														<input type="text" id="branch_code" name="branch_code" placeholder="Enter your Branch Code..." />
													</div>
                                                    <div class="col-md-6">
														<label class="form-label">Query</label>
														<textarea name="query" placeholder="Write Your Query"
                                        id="query"></textarea>
													</div>
													
													
												<div class="col-md-12 btn">
											<button name="submit">Submit</button> 
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
			</div>
			</div>

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
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];

    $mob = $_POST['mobile'];
    $branch = $_POST['branch_code'];
    $query = $_POST['query'];


   

    // Corrected SQL Query
    $sql = "INSERT INTO `query_vendor` (`name`,`date`, `mobile`, `branch_code`,`query`) 
            VALUES ('$name', '$date','$mob', '$branch','$query')";

    // Use prepared statements or sanitize input to prevent SQL injection
    $q_run = mysqli_query($conn, $sql);

    if ($q_run) {
        echo "<script type='text/javascript'>    
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'User Registred Successfully',
          showConfirmButton: false,
          timer: 1500
        })
    
    </script>";

    
        ?>
        <!-- <meta http-equiv = "refresh" content = "1; url = http://localhost:/Grameen K bazar\gkb_frontend\login.php" /> -->
        <?php
    } else {
        echo "error: " . mysqli_error($conn);
    }
}
?>