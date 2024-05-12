<?php
session_start();
include("db.php");
$distributor = $_SESSION['$distributor'];
if ($distributor == true) {

} else {
	header('location:adminlogin.php');
}

$servername = "localhost";
$username   = "root";
$password   =  "";
$dbname     =  "gkb_db";

   $conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from formData table
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
<!DOCTYPE html>
<html lang="en" dir="ltr">

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

	<!-- sweet alert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="sweetalert2.all.min.js"></script>
	<script src="sweetalert2.min.js"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">

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
							<h1>Add Product</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<div>
							<a href="product-list.php" class="btn btn-primary"> View All
							</a>
						</div>
					</div>
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
															name="pro_name" id="inputEmail4">
													</div>

													<div class="col-md-12">
														<label class="form-label">Product Description</label>
														<textarea class="form-control" rows="2"
															name="pro_desc"></textarea>
													</div>

													<div class="col-md-6">
														<label class="form-label">State/UT Code</label>
														<input type="text" class="form-control" id="statecode" name="statecode" value="<?php echo $stateCode; ?>">
													</div>

													<div class="col-md-6">
														<label class="form-label">Batch Code</label>
														<input type="text" class="form-control" id="batchcode" name="batchcode" value="<?php echo $batchCode; ?>">
													</div>


													<div class="col-md-4">
														<label class="form-label">MRP</label>
														<input type="number" class="form-control" id="price1"
															name="pro_old_price">
													</div>
													<div class="col-md-4">
														<label class="form-label">Purchase Price</label>
														<input type="number" class="form-control" id="p_price"
															name="p_price" oninput="calculateTotal()">
													</div>
													<div class="col-md-4">
														<label class="form-label">Expiry Date</label>
														<input type="date" class="form-control" id="p_price"
															name="expdate" >
													</div>

													<div class="col-md-6">
														<label class="form-label">Profit</label>
														<input type="number" class="form-control" id="profit"
															name="profit" oninput="calculateTotal()">
													</div>
													<div class="col-md-6">
														<label class="form-label">Commission</label>
														<input type="number" class="form-control" id="cummission"
															name="cummission" oninput="calculateTotal()">
													</div>
													<div class="row">
														<div class="col-md-4">
															<label class="form-label">PVC</label>
															<input type="number" class="form-control" id="pvc" name="pvc" oninput="calculateTotal()">
														</div>
														<div class="col-md-4">
															<label class="form-label">Discount</label>
															<input type="number" class="form-control" id="discount" name="discount">
														</div>
														<div class="col-md-4">
															<label class="form-label">New Price</label>
															<input type="number" class="form-control" name="pro_new_price" id="total">
														</div>
													</div>

													<div class="col-md-6">
														<label class="form-label">Quantity</label>
														<input type="number" class="form-control" id="quantity1"
															name="pro_qty">
													</div>

													<div class="col-md-6">
														<label class="form-label">Units (Kg/Ltr)</label>
														<input type="text" class="form-control" id="quantity1"
															name="units">
													</div>

													<div class="col-md-4">
														<label class="form-label">Thumb-1</label>
														<input type="file" class="form-control" name="thumb_1">
													</div>
													<div class="col-md-4">
														<label class="form-label">Thumb-2</label>
														<input type="file" class="form-control" name="thumb_2">
													</div>
													<div class="col-md-4">
														<label class="form-label">Thumb-3</label>
														<input type="file" class="form-control" name="thumb_3">
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
	<script type="text/javascript">
		function calculateTotal() {
			// Get values from the input fields
			var purches_p = parseFloat(document.getElementById('p_price').value) || 0;
			var profit = parseFloat(document.getElementById('profit').value) || 0;
			var cummission = parseFloat(document.getElementById('cummission').value) || 0;
			var pvc = parseFloat(document.getElementById('pvc').value) || 0;

			// Calculate total
			var total = purches_p + profit + cummission + pvc;

			// Update the total field
			document.getElementById('total').value = total.toFixed(2); // Display total with two decimal places
		}
	</script>

</body>

</html>

<?php
if (isset($_POST['save'])) {
    $cinnumber      = isset($_POST['cinno']) ? trim($_POST['cinno']) : '';
    $gstnumber      = isset($_POST['gstno']) ? trim($_POST['gstno']) : '';
    $pannumber      = isset($_POST['panno']) ? trim($_POST['panno']) : '';
    $tannumber      = isset($_POST['tanno']) ? trim($_POST['tanno']) : '';
	$hsncode        = isset($_POST['hsncode']) ? trim($_POST['hsncode']) : '';


    $pro_name       = isset($_POST['pro_name']) ? trim($_POST['pro_name']) : '';
    $pro_cat        = isset($_POST['cat']) ? trim($_POST['cat']) : '';
    $pro_desc       = isset($_POST['pro_desc']) ? trim($_POST['pro_desc']) : '';

    $statecode      = isset($_POST['statecode']) ? trim($_POST['statecode']) : '';
    $batchcode      = isset($_POST['batchcode']) ? trim($_POST['batchcode']) : '';

    $pro_old_price  = isset($_POST['pro_old_price']) ? trim($_POST['pro_old_price']) : '';
    $pro_new_price  = isset($_POST['pro_new_price']) ? trim($_POST['pro_new_price']) : '';
	$expdate		= isset($_POST['expdate']) ? trim($_POST['expdate']) : '';
    $pro_qty        = isset($_POST['pro_qty']) ? trim($_POST['pro_qty']) : '';
    $units          = isset($_POST['units']) ? trim($_POST['units']) : '';
    $profit         = isset($_POST['profit']) ? trim($_POST['profit']) : '';
    $discount       = isset($_POST['discount']) ? trim($_POST['discount']) : '';
    $pvc            = isset($_POST['pvc']) ? trim($_POST['pvc']) : '';
    $cummission     = isset($_POST['cummission']) ? trim($_POST['cummission']) : '';
    $purches_price  = isset($_POST['p_price']) ? trim($_POST['p_price']) : '';
	

    $filename = $_FILES['thumb_1']['name'];
	$tempname = $_FILES['thumb_1']['tmp_name'];
	$folder1 = "assets/products/" . $filename;
	move_uploaded_file($tempname, $folder1);

	$filename = $_FILES['thumb_2']['name'];
	$tempname = $_FILES['thumb_2']['tmp_name'];
	$folder2 = "assets/products/" . $filename;
	move_uploaded_file($tempname, $folder2);

    $filename = $_FILES['thumb_3']['name'];
	$tempname = $_FILES['thumb_3']['tmp_name'];
	$folder3 = "assets/products/" . $filename;
	move_uploaded_file($tempname, $folder3);

    if (
        empty($cinnumber) || empty($gstnumber) || empty($pannumber) || empty($tannumber) || 
		empty($hsncode) || empty($pro_name) || empty($pro_cat) || empty($pro_desc) ||
        empty($statecode) || empty($batchcode) || empty($pro_old_price) || empty($pro_new_price) || 
		empty($pro_qty) || empty($units) || empty($profit) || empty($discount) || 
		empty($pvc) || empty($cummission) || empty($purches_price) ||
        empty($folder1) || empty($folder2) || empty($folder3)
    ) {
		echo "<script type='text/javascript'>
					alert('Please fill in all the required fields.');
				</script>";
    } else {
        // Use prepared statement to avoid SQL injection
        $sql = "INSERT INTO products(cinno, gstno, panno, tanno,hsncode, prod_name, cat_name, product_descr, statecode, batchcode, old_price, new_price,expdate, quantity, units, profit, discount, pvc, cummission, p_price, thum1, thum2, thum3)
                VALUES ('$cinnumber ','$gstnumber','$pannumber ','$tannumber ','$hsncode','$pro_name ','$pro_cat ',' $pro_desc ','$statecode ','$batchcode',' $pro_old_price ','$pro_new_price','$expdate','$pro_qty ','$units','$profit',' $discount ','$pvc',' $cummission',' $purches_price',' $folder1 ','$folder2',' $folder3')";

        $qurey_run = mysqli_query($conn, $sql);

        if ($qurey_run) {
            echo "<script type='text/javascript'>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Product Added Successfully!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>";
        } else {
            echo "Failed !!!";
        }
    }
}
?>