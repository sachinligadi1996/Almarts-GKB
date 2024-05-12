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
                            <h1>Revenue Sharing Plans [RSP]</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Revenue Sharing Plans [RSP]
                            </p>
                        </div>
                        <div>
                            <a href="payment-list.php" class="btn btn-primary"> View All
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

$sql = "SELECT * FROM `gkb_personal` WHERE  id= '$id'";
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
                                                        <label for="inputEmail4" class="form-label">commision</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="commision" id="commision" required value="<?php echo $show1['commision']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Bonus</label>
                                                        <input type="text" class="form-control slug-title" name="bonus"
                                                            id="bonus" required value="<?php echo $show1['bonus']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Incentives</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="incentives" id="incentives" required value="<?php echo $show1['incentives']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Total gross
                                                            Deduction</label>
                                                        <input type="text" class="form-control slug-title" name="gross"
                                                            id="gross" required value="<?php echo $show1['gross']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">DVC</label>
                                                        <input type="text" class="form-control slug-title" name="dvc"
                                                            id="dvc" required value="<?php echo $show1['dvc']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">T.D.S</label>
                                                        <input type="text" class="form-control slug-title" name="tds"
                                                            id="tds" required value="<?php echo $show1['tds']; ?>">
                                                    </div>


                                                    <!-- <div class="col-md-12">
														<label class="form-label">Product Description</label>
														<textarea class="form-control" rows="2"
															name="pro_desc" required></textarea>
													</div> -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">GST</label>
                                                        <input type="number" class="form-control" id="gst" name="gst"
                                                            required value="<?php echo $show1['gst']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">CGST</label>
                                                        <input type="number" class="form-control" id="cgst" name="cgst"
                                                            required value="<?php echo $show1['cgst']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Total deduction</label>
                                                        <input type="number" class="form-control" id="deduction"
                                                            name="deduction" required value="<?php echo $show1['deduction']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Net Amount</label>
                                                        <input type="number" class="form-control" id="amount"
                                                            name="amount" required value="<?php echo $show1['amount']; ?>">
                                                    </div>

                                                    <div class="col-md-12 text-center">
                                                        <!-- Use col-md-12 to take up the entire row -->
                                                        <button type="submit" name="edit"
                                                            class="btn btn-primary">edit</button>
                                                        <!-- <button type="submit" name="edit"
                                                            class="btn btn-primary">Edit</button> -->
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

	$commision = $_POST['commision'];
    $bonus = $_POST['bonus'];
    $incentives = $_POST['incentives'];
    $gross = $_POST['gross'];
    $dvc = $_POST['dvc'];
    $tds = $_POST['tds'];
    $gst = $_POST['gst'];
    $cgst = $_POST['cgst'];
    $deduction = $_POST['deduction'];
	$amount = $_POST['amount'];
   

	$sql = "UPDATE `gkb_commision` SET (`commision`, `bonus`, `incentives`, `gross`, `dvc`, `tds`, `gst`, `cgst`, `deduction`, `amount`) 
        VALUES ('$commision', '$bonus', '$incentives', '$gross', '$dvc', '$tds', '$gst', '$cgst', '$deduction', '$amount')";


	$qurey_run = mysqli_query($conn, $sql);
	if ($qurey_run) {
		// echo "success";
	
	echo "<script type='text/javascript'>
                    Swal.fire({
                        title: 'Details added successfully',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function() {
                        window.location.replace('payment-list.php');
                    });
                </script>";
	} else {
		// echo "error";
	
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