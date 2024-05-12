<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
// if ($userprofile == true) {

// } else {
//     header('location:adminlogin.php');
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
                            <h1>Add Bank Details</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Bank Details
                            </p>
                        </div>
                        <div>
                            <a href="view_bank.php" class="btn btn-primary"> View Bank Details
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header card-header-border-bottom">
                                    <h2>Add Bank</h2>
                                </div>

                                <div class="card-body">
                                    <div class="row ec-vendor-uploads">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="ec-vendor-upload-detail">
                                                <form class="row g-3" method="post" enctype="multipart/form-data">
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Bank Name*</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="bank_name" id="inputEmail4">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Account Holder's Name*</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="ac_name" id="inputEmail4">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Account Holder's Mobile*</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="ac_mob" id="inputEmail4">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Account Number*</label>
                                                        <input type="text" class="form-control" id="price1"
                                                            name="ac_no">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">IFSC Code*</label>
                                                        <input type="text" class="form-control" id="quantity1"
                                                            name="ac_ifsc">
                                                    </div>
                                                    <div class="col-md-6">
														<label class="form-label">Account holde's relation with GKB*</label>
														<select id="Categories" class="form-select" name="holder_status">
															<option value="Choose">Choose Category</option>
															<option value="Admin">Admin</option>
															<option value="Vendor">Vendor</option>
															<option value="Branch Manager">Branch Manager</option>
															<option value="Sales Manager">Sales Manager</option>
															
														</select>
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
                    <br><br>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table" style="width:100%">
											<thead>
												<tr>
													<th>#</th>
													<th>Bank Name</th>
													<th>Account Holder's Name</th>
													<th>Account Holder's Mobile </th>
													<th>Account Number</th>
													<th>IFSC Code</th>
													<th>Ac. holder status</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												<?php
												$i = 1;
												$query = "SELECT * FROM `gkb_md_bank` ORDER BY id DESC";
												$qury_run = mysqli_query($conn, $query);
												while ($row = mysqli_fetch_assoc($qury_run)) {
													?>
													<tr>
														<td>
															<?php echo $i; ?>
														</td>
														<td>
															<?php echo $row['bank_name']; ?>
														</td>
														<td>
															<?php echo $row['ac_name']; ?>
														</td>
														<td>
															<?php echo $row['ac_mob']; ?>
														</td>
														<td>
															<?php echo $row['ac_no']; ?>
														</td>
														<td>
															<?php echo $row['ac_ifsc']; ?>
														</td>
														<td>
															<?php echo $row['holder_status']; ?>
														</td>
														<td>
															<div class="btn-group mb-1">
																<button type="button"
																	class="btn btn-outline-success">Info</button>
																<button type="button"
																	class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																	data-bs-toggle="dropdown" aria-haspopup="true"
																	aria-expanded="false" data-display="static">
																	<span class="sr-only">Info</span>
																</button>

																<div class="dropdown-menu">
																	<a class="dropdown-item" href="bank_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
																	<a class="dropdown-item" href="bank_del.php?id=<?php echo $row['id']; ?>">Delete</a>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
												<?php
												$i++;
												}
												?>
										</table>
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
    $bank_name = $_POST['bank_name'];
    $ac_name = $_POST['ac_name'];
    $ac_mob= $_POST['ac_mob'];
    $ac_no = $_POST['ac_no'];
    $ac_ifsc= $_POST['ac_ifsc'];
    $holder_status = $_POST['holder_status'];

    // Corrected SQL Query
    $sql = "INSERT INTO `gkb_md_bank`(`bank_name`, `ac_name`, `ac_mob`, `ac_no`, `ac_ifsc`,`holder_status`) VALUES ('$bank_name','$ac_name','$ac_mob','$ac_no','$ac_ifsc', '$holder_status')";

    // Use prepared statements or sanitize input to prevent SQL injection
    $q_run = mysqli_query($conn, $sql);

    if ($q_run) {
        echo "success";
    } else {
        echo "error: " . mysqli_error($conn);
    }
}
?>