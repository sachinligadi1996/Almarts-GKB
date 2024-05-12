
<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
//  if ($userprofile == true) {

//  } else {
//      header('location:adminlogin.php');
//  }
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

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">


    <!-- FAVICON -->
    <!-- <link href="assets/img/favicon.png" rel="shortcut icon" /> -->

</head>
<body>

<div class="wrapper">
    <?php include "assets/include/sidebar.php"; ?>

    <div class="ec-page-wrapper">
        <?php include "assets/include/header.php"; ?>
        <main class="mt-5 pt-3">
            
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                        <div>
                            <h1>Refferal Income Structure</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Add Refferal Income 
                            </p>
                        </div>
                        <div>
                            <a href="ref_income_list.php" class="btn btn-primary"> View All
                            </a>
                        </div>
                    </div>

                    <form  method="post" enctype="multipart/form-data">
                    <div class="row">
                        <!-- State Code in the first column -->
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="Membership">Membership Plan:</label>
                            <select class="form-control" id="Membership" name="membership">
                            <option value="" selected disabled>Select</option>
                                <option value="General">General</option>
                                <option value="Students">Students</option>
                                <option value="Women">Women</option>
                                <option value="Disable Person">Disable Person</option>
                                
                               
                            </select>
                        </div>
                        </div>

                        <!-- GST Number -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="MTO Value">MTO Value In RS:</label>
                                <input type="text" class="form-control" id="mto" name="mto"  placeholder="Enter mto value in rs">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- PAN Number in the first column -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ref">Maximum No. Of Payouts On Each Refferal In Months  :</label>
                                <input type="text" class="form-control" id="ref"  name="maxref" placeholder="Enter no. of months">
                            </div>
                        </div>

                        <!-- TAN Number in the second column -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Batch">Minimum ID'S On 1st Batch:</label>
                                <input type="text" class="form-control" id="Batch" name="minid"  placeholder="Enter number of id's">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="PVC"> 1st Batch Share In %:</label>
                                <input type="text" class="form-control" id="pvc" name="batch1"  placeholder="Enter share b1 in  %">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="PVC">1st Batch Share In RS:</label>
                                <input type="text" class="form-control" id="pvc" name="batch2"  placeholder="Enter share in rs">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="PVC">% Share On Next Batch (Remaining) ID'S:</label>
                                <input type="text" class="form-control" id="pvc" name="share1"  placeholder="Enter share b2 in %">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="PVC">Share On Next Batch (Remaining) ID'S In RS:</label>
                                <input type="text" class="form-control" id="pvc" name="share2"  placeholder="Enter share in rs">
                            </div>
                        </div>

                       
                        
                        <div class="col-md-6">
                            <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Apply</button>
                            <!-- <button type="submit" class="btn btn-primary">Apply</button> -->
                            </div>
                        
                    </div>

                

                </form>
            </div>
        </div>
    </div>
</main>

    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>

</body>
</html>

<?php
if (isset($_POST['submit'])) {

	$membership = $_POST['membership'];
    $mto = $_POST['mto'];
    $maxref = $_POST['maxref'];
    $minid = $_POST['minid'];
    $batch1 = $_POST['batch1'];
    $batch2 = $_POST['batch2'];
    $share1 = $_POST['share1'];
    $share2 = $_POST['share2'];




	

	$sql = "INSERT INTO `refincome`(`membership`, `mto`, `maxref`, `minid`, `batch1`, `batch2`, `share1`, `share2`) 
                    VALUES ('$membership','$mto','$maxref','$minid','$batch1','$batch2','$share1','$share2')";

	$qurey_run = mysqli_query($conn, $sql);
	if ($qurey_run) {
		echo "<script>
		Swal.fire({
			icon: 'success',
			title: 'Income Added Successfully',
			showConfirmButton: false,
			timer: 1500
		}).then(() => {
			window.location.href = 'ref_income_list.php';
		});
	</script>";
}
}
?>