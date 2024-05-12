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
							<h1>Registration Form</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<div>
							<a href="product-list.php" class="btn btn-primary"> View All
							</a>
						</div>
					</div>
					<div class="container">
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
														<label for="inputEmail4" class="form-label">Full Name</label>
														<input type="text" name="name" placeholder="Enter your name"/>
														<input type="hidden" name="rand" value="<?php echo "GKB_" . sprintf('%04d', rand(1, 9999)); ?>">
													</div>

													<div class="col-md-6">
														<label class="form-label">Phone No</label>
														<input type="tel" name="mobile" id="phone" placeholder="Enter your phone number"
                                        required />
													</div>
													
													<div class="col-md-6">
														<label class="form-label">Email</label>
														<input type="email" id="email" name="email" placeholder="Enter your email add..." />
													</div>
													<div class="col-md-6">
														<label class="form-label">Adhar Card Number</label>
														<input type="number" name="adhar_id" id="adhar"
                                        placeholder="Enter your Aadhar Number..." required />
													</div>
													<div class="col-md-6">
														<label class="form-label">Kisan Card Number</label>
														<input type="text" name="kisan_id" id="kisan"
                                        placeholder="Enter your Kisan card number..." />
													</div>
													<div class="col-md-6">
														<label class="form-label">Pan Card Number</label>
														<input type="text" name="pan_id" id="pan" placeholder="Enter your Pan number..."
                                        required />
													</div>
													<div class="col-md-6">
														<label class="form-label">Current Address</label>
														<textarea id="caddress" name="baddress"
                                        placeholder="Enter Current Address"></textarea>
													</div>
													<div class="col-md-6">
														<label class="form-label">Permant Address</label>
														<textarea name="saddress" placeholder="Enter Permanent Address"
                                        id="paddress"></textarea>
													</div>
													<div class="col-md-6">
														<label class="form-label">Username</label>
														<input type="text" name="username" id="uname" placeholder="Enter Username"
                                        required />
													</div>
													<div class="col-md-6">
														<label class="form-label">Password</label>
														<input type="Password" name="password" id="password" placeholder="Enter Password"
                                        required />
													</div>
													<div class="col-md-6">
														<label class="form-label">Confirm Password</label>
														<input type="Password" name="cpassword" id="cpass" placeholder="Confirm Password"
                                        required />
													</div>
													<div class="col-md-6">
														<label class="form-label">Membership</label>
														
                                    <select class="form-control" id="membership" name="membership"
                                        style="border:2px solid black;">
                                        <option value="select Membership">Select Membership</option>
                                        <option value="Prime Membership">Prime Membership</option>
                                        <option value=" Non Prime Membership">Non Prime Membership</option>
                                    </select>
									</div>
									<div class="col-md-6">
														<label class="form-label">Branch Refrral Code</label>
														<input type="text" name="refcode" id="cpass" placeholder="Enter Your Referral Code" />
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
    // $rand = $_POST['rand'];
    $mob = $_POST['mobile'];
    $adhar = $_POST['adhar_id'];
    $pan = $_POST['pan_id'];
    $kisan = $_POST['kisan_id'];

    $mail = $_POST['email'];
    $badd = $_POST['baddress'];
    $sadd = $_POST['saddress'];
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $membership = $_POST['membership'];
    $refcode = $_POST['refcode'];
	$result = mysqli_query($conn, "SELECT MAX(SUBSTRING_INDEX(user_id, '_', -1)) AS max_id FROM user");
    $row = mysqli_fetch_assoc($result);
    $max_id = $row['max_id'];
    $next_id = $max_id + 1;
    $rand = "GKB_" . sprintf('%04d', $next_id);

    // Corrected SQL Query
    $sql = "INSERT INTO `user` (`user_id`,`name`, `mobile`, `email`,`adhar_id`,`pan_id`,`kisan_id`, `billing_address`, `shipping_address`, `username`, `password`, `membership`, `refcode`) 
            VALUES ('$rand','$name', '$mob', '$mail','$adhar' ,'$pan','$kisan','$badd', '$sadd', '$uname', '$pass', '$membership', '$refcode')";

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