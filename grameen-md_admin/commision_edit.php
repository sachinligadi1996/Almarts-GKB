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

	<!-- ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

	<!-- FAVICON -->
	<!-- <link href="assets/img/favicon.png" rel="shortcut icon" /> -->
     <!-- sweet alert -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

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
							<h1>Commision Structure</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>commision Structure
							</p>
						</div>
						<div>
							<a href="commision-list.php" class="btn btn-primary"> View All
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<!-- <h2>Add Product</h2> -->
								</div>

                                <?php

								$id = $_GET['id'];

								$sql = "SELECT * FROM `gkb_commision` WHERE  id= '$id'";
								$execute = mysqli_query($conn, $sql);

								$total = mysqli_num_rows($execute);
								$show1 = mysqli_fetch_assoc($execute);

								?>
								<div class="card-body">
									<div class="row ec-vendor-uploads">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="ec-vendor-upload-detail">
                                            <form class="row g-3" method="post" enctype="multipart/form-data"
                                                    onsubmit="return validateForm()">
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Total Payments /
                                                            ID's =</label>
                                                        <input type="text" class="form-control slug-title" name="ids"
                                                            id="ids" required value="<?php echo $show1['ids']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Active member 0-10 x
                                                            RS to share</label>
                                                        <input type="text" class="form-control slug-title" name="active"
                                                            id="active" required value="<?php echo $show1['active']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Prime member 10 &
                                                            above x RS to share</label>
                                                        <input type="text" class="form-control slug-title" name="prime"
                                                            id="prime" required value="<?php echo $show1['prime']; ?>">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="" class="form-label">Deduction on gross
                                                            amount</label>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="" class="form-label">T.D.S :</label>
                                                        <input type="text" class="form-control slug-title" name="tdc"
                                                            id="tdc" required value="<?php echo $show1['tdc']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="" class="form-label">Direct income</label>
                                                        <input type="text" class="form-control slug-title" name="direct"
                                                            id="direct" required value="<?php echo $show1['direct']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="" class="form-label">S.C :</label>
                                                        <input type="text" class="form-control slug-title" name="sc"
                                                            id="sc" required value="<?php echo $show1['sc']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="" class="form-label">Level income</label>
                                                        <input type="text" class="form-control slug-title" name="level"
                                                            id="level" required value="<?php echo $show1['level']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">G.S.T :</label>
                                                        <input type="number" class="form-control" id="gst" name="gst"
                                                            required value="<?php echo $show1['gst']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">PVC :</label>
                                                        <input type="number" class="form-control" id="pvc" name="pvc"
                                                            required value="<?php echo $show1['pvc']; ?>">
                                                    </div>


                                                    <div class="col-md-12 text-center">
                                                        <!-- Use col-md-12 to take up the entire row -->
                                                        <button type="submit" name="save"
                                                            class="btn btn-primary">Generate</button>
                                                        <button type="submit" name="edit"
                                                            class="btn btn-primary">edit</button>
                                                        <!-- <a href="edit_commision.php" class="btn btn-primary">Edit</a> -->
                                                        <!-- <a href="edit_commision.php" class="btn btn-primary">
                                                            <button type="submit" name="edit">
                                                                Edit
                                                            </button>
                                                        </a> -->
                                                        <!-- <button class="btn btn-primary"><a href="edit_commision.php" style="color: white; text-decoration: none;">Edit</a></button> -->


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
if (isset($_POST['edit'])) {
    $id = $_GET['id']; // Assuming you have the ID in the URL

    $ids = $_POST['ids'];
    $active = $_POST['active'];
    $prime = $_POST['prime'];
    $tdc= $_POST['tdc'];
    $direct = $_POST['direct'];
    $sc = $_POST['sc'];
    $level = $_POST['level'];
    $gst = $_POST['gst'];
    $pvc = $_POST['pvc'];

    // Use UPDATE query to modify existing record
    $sql = "UPDATE `gkb_commision` SET 
            `ids`='$ids', 
            `active`='$active', 
            `prime`='$prime', 
            `tdc`='$tdc', 
            `direct`='$direct', 
            `sc`='$sc', 
            `level`='$level', 
            `gst`='$gst', 
            `pvc`='$pvc' 
            WHERE `id`='$id'";

    $query_run = mysqli_query($conn, $sql);
    if ($query_run) {
        echo "<script type='text/javascript'>
            Swal.fire({
                title: 'Details updated successfully',
                icon: 'success',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location.replace('commision-list.php');
            });
        </script>";
    } else {
        echo "<script type='text/javascript'>
            Swal.fire({
                title: 'Error',
                text: 'Error: " . mysqli_error($conn) . "',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
        </script>";
    }
}
?>