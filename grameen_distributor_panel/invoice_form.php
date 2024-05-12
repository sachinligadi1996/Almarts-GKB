<?php
session_start();
include("db.php");
$distributor = $_SESSION['$distributor'];
if ($distributor == true) {

} else {
	header('location:adminlogin.php');
}

$query = "SELECT * FROM formData";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$batchCode = $row['batchcode'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 10:59:35 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ekka - Admin Dashboard eCommerce HTML Template.">

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
    <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Ekka CSS -->
    <link id="ekka-css" href="assets/css/ekka.css" rel="stylesheet" />

    <!-- FAVICON -->
    <!-- <link href="assets/img/favicon.png" rel="shortcut icon" /> -->
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }

    .form-container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    textarea {
        width: 100%;
        min-height: 100px;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding: 10px;
        resize: vertical;
    }

    input[type="submit"] {
        padding: 10px 20px;
        border: none;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    </style>

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">
    <!--  WRAPPER  -->
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
            </div>


            <div class="ec-content-wrapper">
                <div class="container mt-5">
                    <h1 class="mb-4">Purchase Invoice</h1>
                    <form method="post" action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Stockist Name</label>
                                <input type="text" class="form-control" name="stockist_name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Purchase Date</label>
                                <input type="date" class="form-control" name="purchase_date">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Material Type</label>
                                <select class="form-select" name="material_type">
                                    <option value="Sugar">Sugar</option>
                                    <option value="Pulse">Pulse</option>
                                    <!-- Add other material types as needed -->
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Batch Code</label>
                                <input type="text" class="form-control" name="batch_code"
                                    value="<?php echo $batchCode; ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Quantity (in kg/ltr)</label>
                                <input type="number" class="form-control" name="quantity">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Unit</label>
                                <input type="text" class="form-control" name="unit">
                                <!-- kg/ltr/etc. -->
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Purchase Price (per kg/ltr)</label>
                                <input type="number" step="0.01" class="form-control" name="purchase_price">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Transport Charges (%)</label>
                                <input type="number" step="0.01" class="form-control" name="transport_charges">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">GST (%)</label>
                                <input type="number" step="0.01" class="form-control" name="gst">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">CGST (%)</label>
                                <input type="number" step="0.01" class="form-control" name="cgst">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">SGST + CGST (%)</label>
                                <input type="number" step="0.01" class="form-control" name="sgst_cgst">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Other Taxes (%)</label>
                                <input type="number" step="0.01" class="form-control" name="other_taxes">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">PVC (%)</label>
                                <input type="number" step="0.01" class="form-control" name="pvc">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">New Price </label>
                                <input type="number" step="0.01" class="form-control" name="new_price">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">HSN Code</label>
                                <input type="text" class="form-control" name="hsn_code">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Discount (%)</label>
                                <input type="number" step="0.01" class="form-control" name="discount">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Taxable Value (%)</label>
                                <input type="number" step="0.01" class="form-control" name="taxable_value">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Product Description</label>
                                <textarea class="form-control" name="product_description" rows="3"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Total</label>
                                <input type="number" step="0.01" class="form-control" name="total" id="total" readonly>
                            </div>


                        </div>
                        <div class="mt-3">
                            <button type="submit" name="submit" class="btn btn-primary">Generate Invoice</button>
                        </div>
                    </form>
                </div>

                <div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Product</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product
							</p>
						</div>
						<!-- <div>
							<a href="product-list.php" class="btn btn-primary">Query List</a>
						</div> -->
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table" style="width:100%">
											<thead>
												<tr>
													<th>#</th>
                                                    <th>Stockist Name</th>
													<th>Purchase Date</th>
													<th>Material Type</th>
													<th>Batch Code</th>
                                                    <th>Quantity (in kg/ltr)</th>
                                                    <th>Unit</th>
                                                    <th>Purchase Price (per kg/ltr)</th>
                                                    <th>Transport Charges (%)</th>
                                                    <th>GST (%)</th>
                                                    <th>CGST (%)</th>
                                                    <th>SGST + CGST (%)</th>
                                                    <th>Other Taxes (%)</th>
                                                    <th>PVC (%)</th>
                                                    <th>New Price </th>
                                                    <th>HSN Code</th>
                                                    <th>Discount (%)</th>
                                                    <th>Taxable Value (%)</th>
                                                    <th>Product Description</th>
                                                    <th>Total</th>                 
													<th>Action</th>

												</tr>
											</thead>

											<tbody>
												<?php
												$i = 1;
												$query = "SELECT * FROM `invoices` ORDER BY id DESC";
												$qury_run = mysqli_query($conn, $query);
												while ($row = mysqli_fetch_assoc($qury_run)) {
													?>
													<tr>
														<td>
															<?php echo $i; ?>
														</td>
														<td>
															<?php echo $row['stockist_name']; ?>
														</td>
														<td>
															<?php echo $row['purchase_date']; ?>
														</td>
														<td>
															<?php echo $row['material_type']; ?>
														</td>
                                                        <td>
															<?php echo $row['batch_code']; ?>
														</td>
                                                        <td>
															<?php echo $row['quantity']; ?>
														</td>
                                                        <td>
															<?php echo $row['unit']; ?>
														</td>
                                                       
                                                        <td>
															<?php echo $row['purchase_price']; ?>
														</td>
                                                        <td>
															<?php echo $row['transport_charges']; ?>
														</td>
                                                        <td>
															<?php echo $row['gst']; ?>
														</td>
                                                        <td>
															<?php echo $row['cgst']; ?>
														</td>
                                                       
                                                        <td>
															<?php echo $row['sgst_cgst']; ?>
														</td>
                                                        <td>
															<?php echo $row['other_taxes']; ?>
														</td>
                                                        <td>
															<?php echo $row['pvc']; ?>
														</td>
                                                        <td>
															<?php echo $row['new_price']; ?>
														</td>
                                                        <td>
															<?php echo $row['hsn_code']; ?>
														</td>
                                                        <td>
															<?php echo $row['discount']; ?>
														</td>
                                                        <td>
															<?php echo $row['taxable_value']; ?>
														</td>
                                                        <td>
															<?php echo $row['product_description']; ?>
														</td>
                                                        <td>
															<?php echo $row['total']; ?>
														</td>
														<!-- <td>
															<!?php echo $row['status']; ?>
														</td> -->

														<td>
															<div class="btn-group mb-1">
																<button type="button"
																	class="btn btn-outline-success">View</button>
																<button type="button"
																	class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																	data-bs-toggle="dropdown" aria-haspopup="true"
																	aria-expanded="false" data-display="static">
																	<span class="sr-only">Info</span>
																</button>

																<div class="dropdown-menu">
																	<a class="dropdown-item"
																		href="query_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
																	<a class="dropdown-item"
																		href="query_del.php?id=<?php echo $row['id']; ?>">Delete</a>
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
			</div> 
            </div>

                <!-- Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
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
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
    <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>

    <!-- Chart -->
    <script src="assets/plugins/charts/Chart.min.js"></script>
    <script src="assets/js/chart.js"></script>

    <!-- Google map chart -->
    <script src="assets/plugins/charts/google-map-loader.js"></script>
    <script src="assets/plugins/charts/google-map.js"></script>

    <!-- Date Range Picker -->
    <script src="assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/date-range.js"></script>

    <!-- Option Switcher -->
    <script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

    <!-- Ekka Custom -->
    <script src="assets/js/ekka.js"></script>

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Your existing HTML code -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
        $('input[name="quantity"], input[name="purchase_price"], input[name="transport_charges"], input[name="gst"], input[name="cgst"], input[name="other_taxes"], input[name="pvc"], input[name="new_price"], input[name="discount"], input[name="taxable_value"]')
            .on('input', function() {
                calculateTotal();
            });
    });

    function calculateTotal() {
        // Retrieve values from input fields
        var quantity = parseFloat($('input[name="quantity"]').val()) || 0;
        var purchasePrice = parseFloat($('input[name="purchase_price"]').val()) || 0;
        var transportCharges = parseFloat($('input[name="transport_charges"]').val()) || 0;
        var gst = parseFloat($('input[name="gst"]').val()) || 0;
        var cgst = parseFloat($('input[name="cgst"]').val()) || 0;
        var otherTaxes = parseFloat($('input[name="other_taxes"]').val()) || 0;
        var pvc = parseFloat($('input[name="pvc"]').val()) || 0;
        var newPrice = parseFloat($('input[name="new_price"]').val()) || 0;
        var discount = parseFloat($('input[name="discount"]').val()) || 0;
        var taxableValue = parseFloat($('input[name="taxable_value"]').val()) || 0;

        // Perform calculation for the total amount
        var total = quantity * purchasePrice + transportCharges + gst + cgst + otherTaxes + pvc + newPrice -
            discount + taxableValue;

        // Update the 'Total' field with the calculated value
        $('#total').val(total.toFixed(2)); // Display total with two decimal places
    }
    </script>

</body>

</html>
<?php

include 'db.php';

if (isset($_POST['submit'])){
    // Retrieve form data
    
    // Retrieve form data
    $stockist_name = $_POST['stockist_name'];
    $purchase_date = $_POST['purchase_date'];
    $material_type = $_POST['material_type'];
    $batch_code = $_POST['batch_code'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $purchase_price = $_POST['purchase_price'];
    $transport_charges = $_POST['transport_charges'];
    $gst_percentage = $_POST['gst'];
    $cgst_percentage = $_POST['cgst'];
    $sgst_cgst_percentage = $_POST['sgst_cgst'];
    $other_taxes_percentage = $_POST['other_taxes'];
    $pvc_percentage = $_POST['pvc'];
    $new_price = $_POST['new_price'];
    $hsn_code = $_POST['hsn_code'];
    $discount = $_POST['discount'];
    $taxable_value = $_POST['taxable_value'];
    $product_description = $_POST['product_description'];

   
   // Calculate amounts based on percentages
   $gst_amount = $purchase_price * ($gst_percentage / 100);
   $cgst_amount = $purchase_price * ($cgst_percentage / 100);
   $other_taxes_amount = $purchase_price * ($other_taxes_percentage / 100);
   $pvc_amount = $purchase_price * ($pvc_percentage / 100);

   // Calculate the total amount
   $total = $quantity * $purchase_price + $transport_charges + $gst_amount + $cgst_amount + $other_taxes_amount + $pvc_amount + $new_price - $discount + $taxable_value;

   // Example query to insert data into the database
   $query = "INSERT INTO invoices (stockist_name, purchase_date, material_type, batch_code, quantity, unit, purchase_price, transport_charges, gst, cgst, sgst_cgst, other_taxes, pvc, new_price, hsn_code, discount, taxable_value, product_description, total) 
             VALUES ('$stockist_name', '$purchase_date', '$material_type', '$batch_code', '$quantity', '$unit', '$purchase_price', '$transport_charges', '$gst_amount', '$cgst_amount', '$sgst_cgst_percentage', '$other_taxes_amount', '$pvc_amount', '$new_price', '$hsn_code', '$discount', '$taxable_value', '$product_description', '$total')";


   if (mysqli_query($conn, $query)) {
       // Insertion successful
       echo "<script>alert('Invoice generated successfully.');</script>";
       // Redirect to the same page or any desired location after insertion
       // header("Location: invoice_form.php");
   } else {
       // Insertion failed
       echo "<script>alert('Error generating invoice.');</script>";
       // Redirect or handle error as needed
       // header("Location: invoice_form.php");
   }

   // Close the database connection
   mysqli_close($conn);
}
?>