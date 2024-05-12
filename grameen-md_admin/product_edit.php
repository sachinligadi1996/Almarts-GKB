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
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="sweetalert2.all.min.js"></script>
	<script src="sweetalert2.min.js"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">

</head>
<?php
$query = "SELECT * FROM formData";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$cinNumber = $row['cinnumber'];
$gstNumber = $row['gstnumber'];
$panNumber = $row['pannumber'];
$tanNumber = $row['tannumber'];
$hsnCode = $row['hsncode'];
$stateCode = $row['statecode'];
$batchCode = $row['batchcode'];
?>
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
							<h1>Update Product</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Update Product
							</p>
						</div>
						<div>
							<a href="product-list.php" class="btn btn-primary"> View All Product
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Update Product</h2>
								</div>
                             <?php

                $id = $_GET['id'];

                $sql = "SELECT * FROM `products` WHERE  id= '$id'";
                $execute = mysqli_query($conn, $sql);

                $total = mysqli_num_rows($execute);
                $show1 = mysqli_fetch_assoc($execute);

                ?>
								<div class="card-body">
									<div class="row ec-vendor-uploads">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="ec-vendor-upload-detail">
												<form class="row g-3" method="post" enctype="multipart/form-data">

													 <div class="col-md-6 mb-3">
                                                    <label for="cinNumber">CIN Number</label>
                                                    <input type="text" class="form-control" id="cinNumber" name="cinno" value="<?php echo $cinNumber; ?>">
                                                </div>

												<!-- GST Number -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="gstNumber">GST Registration Number</label>
                                                    <input type="text" class="form-control" id="gstNumber" name="gstno" value="<?php echo $gstNumber; ?>">
                                                </div>

												<!-- PAN Number -->
                                                <div class="col-md-4 mb-3">
                                                    <label for="panNumber">PAN Number</label>
                                                    <input type="text" class="form-control" id="panNumber" name="panno" value="<?php echo $panNumber; ?>">
                                                </div>

												<!-- TAN Number -->
                                                <div class="col-md-4 mb-3">
                                                    <label for="tanNumber">TAN Number</label>
                                                    <input type="text" class="form-control" id="tanNumber" name="tanno" value="<?php echo $tanNumber; ?>">
                                                </div>

												<div class="col-md-4 mb-3">
                                                    <label for="tanNumber">HSN Code</label>
                                                    <input type="text" class="form-control" id="tanNumber" name="hsncode" value="<?php echo $hsnCode; ?>">
                                                </div>

													<div class="col-md-6">
														<label class="form-label">Select Categories</label>
														<select id="Categories" class="form-select" name="cat">
															<option value="Choose">Choose Category</option>
															<?php
															$quey = "SELECT * FROM category ORDER BY id DESC";
															$qu_run = mysqli_query($conn, $quey);
															while ($row = mysqli_fetch_assoc($qu_run)) {
																?>
																<option value="<?php echo $row['cat_name'] ?>">
																	<?php echo $row['cat_name'] ?>
																</option>
																
															<?php } ?>
														</select>
													</div>
													<div class="col-md-6">
														<label for="inputEmail4" class="form-label">Product name</label>
														<input type="text" class="form-control slug-title"
															name="pro_name" id="inputEmail4" value="<?php echo $show1['prod_name']; ?>">
													</div>

													
													<div class="col-md-12">
														<label class="form-label">Product Description</label>
														<textarea class="form-control" rows="2"
															name="pro_desc" value="<?php echo $show1['product_descr']; ?>"><?php echo $show1['product_descr']; ?></textarea>
													</div>
													<div class="col-md-6">
														<label class="form-label">State/UT Code</label>
														<input type="text" class="form-control" id="statecode" name="statecode" value="<?php echo $show1['statecode']; ?>">
													</div>

													<div class="col-md-6">
														<label class="form-label">Batch Code</label>
														<input type="text" class="form-control" id="batchcode" name="batchcode" value="<?php echo $show1['batchcode']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label">Old Price</label>
														<input type="number" class="form-control" id="old_price"
															name="pro_old_price" value="<?php echo $show1['old_price']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label">Purches Price</label>
														<input type="float" class="form-control" id="p_price"
															name="p_price" oninput="calculateTotal()" value="<?php echo $show1['p_price']; ?>">
													</div>
													<div class="col-md-4">
														<label class="form-label">Expiry Date</label>
														<input type="date" class="form-control" id="p_price"
															name="expdate" value="<?php echo $show1['expdate']; ?>">
													</div>

													<div class="col-md-6">
														<label class="form-label">Profit %</label>
														<input type="float" class="form-control" id="profit"
															name="profit" oninput="calculateTotal()" value="<?php echo $show1['profit']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label">M.T.O %</label>
														<input type="float" class="form-control" id="mto"
															name="mto" oninput="calculateTotal()" value="<?php echo $show1['mto']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label"> Stockist Cummission %</label>
                                                        <input type="float" class="form-control" id="stockist" name="cummission" oninput="calculateTotal()" value="<?php echo $show1['cummission']; ?>">

													</div>
													<div class="col-md-6">
														<label class="form-label">Distrubutor Cummission %</label>
														<input type="float" class="form-control" id="distrubutor"
															name="distrubutor" oninput="calculateTotal()" value="<?php echo $show1['distrubutor']; ?>">
													</div><div class="col-md-6">
														<label class="form-label"> Retailer Cummission %</label>
														<input type="float" class="form-control" id="Retailer"
															name="Retailer" oninput="calculateTotal()" value="<?php echo $show1['Retailer']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label">PVC</label>
														<input type="number" class="form-control" id="pvc" name="pvc"
															oninput="calculateTotal()" value="<?php echo $show1['pvc']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label">Discount</label>
														<input type="float" class="form-control" id="discount"
															name="discount" value="<?php echo $show1['discount']; ?>" readonly>
													</div>

													<div class="col-md-6">
														<label class="form-label">New Price</label>
														<input type="float" class="form-control" name="pro_new_price"
															id="total" value="<?php echo $show1['new_price']; ?>">
													</div>
													<div class="col-md-6">
														<label class="form-label">Quantity</label>
														<input type="number" class="form-control" id="quantity1"
															name="pro_qty" value="<?php echo $show1['quantity']; ?>">
															
															<!-- <div class="col-md-6" >
														<label class="form-label">Units (Kg/Ltr)</label>
														<input type="text" class="form-control" id="quantity1"
															name="units" value="<?php echo $show1['units']; ?>">
													
													</div> -->
													<div class="col-md-6">
    <label class="form-label">Units (Kg/Ltr)</label>
    <select class="form-control" id="quantity1" name="units"  value="<?php echo $show1['units']; ?>>
        <option value="kg">KG</option>
        <option value="ltr">Ltr</option>
		<option value="ltr">Pcs</option>
		<option value="ltr">Pkt</option>
		<option value="ltr">Gm</option>
		<option value="ltr">Ml</option>
    </select>
</div>

													
													<div class="col-md-6">
														<label for="event-description">Thumb-1</label>
        <input type="file" class="form-control-file" name="thumb_1" >
                <div class="error" id="adhar_error"></div>
                <input name="oldImg1" id="middle-name" class="form-control" type="hidden" value="<?php echo $show1['thum1']; ?>">
                <img src="<?php echo $show1['thum1']; ?>" width="100px" >
                 <h6 class="text-end"><?php echo $show1['thum1']; ?></h6>
													</div>
													<div class="col-md-6">
														<label for="event-description">Thumb-2</label>
        <input type="file" class="form-control-file" name="thumb_2" >
                <div class="error" id="adhar_error"></div>
                <input name="oldImg2" id="middle-name" class="form-control" type="hidden" value="<?php echo $show1['thum2']; ?>">
                <img src="<?php echo $show1['thum2']; ?>" width="100px" >
                 <h6 class="text-end"><?php echo $show1['thum2']; ?></h6>
													</div>
													<div class="col-md-6">
														<label for="event-description">Thumb-3</label>
        <input type="file" class="form-control-file" name="thumb_3" >
                <div class="error" id="adhar_error"></div>
                <input name="oldImg3" id="middle-name" class="form-control" type="hidden" value="<?php echo $show1['thum3']; ?>">
                <img src="<?php echo $show1['thum3']; ?>" width="100px" >
                 <h6 class="text-end"><?php echo $show1['thum3']; ?></h6>
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

	
	<script type="text/javascript">
    function calculateTotal() {
        // Get values from the input fields
        var purches_p = parseFloat(document.getElementById('p_price').value) || 0;
        var profit = parseFloat(document.getElementById('profit').value) || 0;
        var mto = parseFloat(document.getElementById('mto').value) || 0;
        var old_price = parseFloat(document.getElementById('old_price').value) || 0;

        var stockist = parseFloat(document.getElementById('stockist').value) || 0;
        var distrubutor = parseFloat(document.getElementById('distrubutor').value) || 0;
        var Retailer = parseFloat(document.getElementById('Retailer').value) || 0;
        var pvc = parseFloat(document.getElementById('pvc').value) || 0;

        // Calculate cummission based on percentages
        var stock = (purches_p * stockist) / 100;
        var dist = (purches_p * distrubutor) / 100;
        var retail = (purches_p * Retailer) / 100;
        var prof=(purches_p * profit) / 100;
        var mto_calc=(purches_p * mto) / 100;



        // Calculate total without cummission and old_price
        var totalWithoutCummissionAndOldPrice = purches_p + prof + pvc+mto_calc;

        // Calculate total with cummission
        var total = totalWithoutCummissionAndOldPrice + stock + dist + retail;
        var discount=old_price-total;

        // Update the total field
        document.getElementById('total').value = total.toFixed(2); // Display total with two decimal places
        document.getElementById('discount').value = discount.toFixed(2);
    }
</script>


</body>
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

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->

</html>


<?php


// Function to delete old images
function deleteOldImage($oldImage) {
    if (!empty($oldImage) && file_exists($oldImage)) {
        unlink($oldImage);
    }
}

// Check if the form is submitted
if (isset($_POST['save'])) {
    // Your existing database connection code
    $servername = "localhost";
    $username   = "root";
    $password   =  "";
    $dbname     =  "gkb_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Extract form data
    $cinnumber = $_POST['cinno'];
    $gstnumber = $_POST['gstno'];
    $pannumber = $_POST['panno'];
    $tannumber = $_POST['tanno'];
    $hsncode = $_POST['hsncode'];
    $statecode = $_POST['statecode'];
    $batchcode = $_POST['batchcode'];
    $pro_name = $_POST['pro_name'];
    $pro_cat = $_POST['cat'];
    $pro_desc = $_POST['pro_desc'];
    $pro_old_price = $_POST['pro_old_price'];
    $pro_new_price = $_POST['pro_new_price'];
    $expdate = $_POST['expdate'];
    $pro_qty = $_POST['pro_qty'];
    $units = $_POST['units'];
    $profit = $_POST['profit'];
    $mto = $_POST['mto'];
    $discount = $_POST['discount'];
    $pvc = $_POST['pvc'];
    $cummission = $_POST['cummission'];
    $distrubutor = $_POST['distrubutor'];
    $Retailer = $_POST['Retailer'];
    $purches_price = $_POST['p_price'];

    // File upload for thumb_1
    $thumb1_filename = $_FILES['thumb_1']['name'];
    $old_thumb1_image = $_POST['oldImg1'];

    if ($thumb1_filename != '') {
        deleteOldImage($old_thumb1_image);
        $thumb1_tempname = $_FILES["thumb_1"]["tmp_name"];
        $folder1 = "assets/products/" . $thumb1_filename;

        if (move_uploaded_file($thumb1_tempname, $folder1)) {
            // File uploaded successfully
        } else {
            echo "Failed to upload thumb_1 file.";
            exit;
        }
    } else {
        $folder1 = $old_thumb1_image;
    }

    // Similar changes for thumb_2
    $thumb2_filename = $_FILES['thumb_2']['name'];
    $old_thumb2_image = $_POST['oldImg2'];

    if ($thumb2_filename != '') {
        deleteOldImage($old_thumb2_image);
        $thumb2_tempname = $_FILES["thumb_2"]["tmp_name"];
        $folder2 = "assets/products/" . $thumb2_filename;

        if (move_uploaded_file($thumb2_tempname, $folder2)) {
            // File uploaded successfully
        } else {
            echo "Failed to upload thumb_2 file.";
            exit;
        }
    } else {
        $folder2 = $old_thumb2_image;
    }

    // Similar changes for thumb_3
    $thumb3_filename = $_FILES['thumb_3']['name'];
    $old_thumb3_image = $_POST['oldImg3'];

    if ($thumb3_filename != '') {
        deleteOldImage($old_thumb3_image);
        $thumb3_tempname = $_FILES["thumb_3"]["tmp_name"];
        $folder3 = "assets/products/" . $thumb3_filename;

        if (move_uploaded_file($thumb3_tempname, $folder3)) {
            // File uploaded successfully
        } else {
            echo "Failed to upload thumb_3 file.";
            exit;
        }
    } else {
        $folder3 = $old_thumb3_image;
    }

   
   
// Update the database with form data
$sql = "UPDATE `products` SET `cinno`='$cinnumber', `gstno`='$gstnumber', `panno`='$pannumber', `tanno`='$tannumber', `hsncode`='$hsncode', `statecode`='$statecode', `batchcode`='$batchcode', `prod_name`='$pro_name', `cat_name`='$pro_cat', `product_descr`='$pro_desc', `old_price`='$pro_old_price', `mto`='$mto', `new_price`='$pro_new_price', `expdate`='$expdate', `quantity`='$pro_qty', `units`='$units', `profit`='$profit', `discount`='$discount', `pvc`='$pvc', `cummission`='$cummission', `distrubutor`='$distrubutor', `Retailer`='$Retailer', `p_price`='$purches_price', `thum1`='$folder1', `thum2`='$folder2', `thum3`='$folder3' WHERE `id`='$id';";

$qurey_run = mysqli_query($conn, $sql);
if ($qurey_run) {
    echo "<script type='text/javascript'>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Product Added Successfully!',
        showConfirmButton: false,
        timer: 1500
    });
</script>";

    // header("location:vendor_list.php");

} else {
    echo "Failed !!!";
}
}

 




