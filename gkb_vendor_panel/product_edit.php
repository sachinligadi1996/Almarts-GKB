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

<head>
    <!-- Your head content goes here -->

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
        <style type="text/css">
        .hidden {
            display: none;
        }

        .radio {
            /*        	margin-top: -22px;*/

            margin-top: -33px;
            margin-left: -60px;
            height: 25px;
            width: 25px;
        }
        </style>

    </head>

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">
    <div class="wrapper">
        <!-- Sidebar and other includes -->
        <?php include "assets/include/sidebar.php"; ?>

        <div class="ec-page-wrapper">
            <!-- Header -->
            <?php include "assets/include/header.php"; ?>

            <!-- Content Wrapper -->
            <div class="ec-content-wrapper">
                <div class="content">
                    <!-- Breadcrumb -->
                    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                        <!-- Your breadcrumb content goes here -->
                    </div>

                    <!-- Product Form -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header card-header-border-bottom">
                                    <h2>Add Product</h2>
                                </div>
                                <?php

								$id = $_GET['id'];

								$sql = "SELECT * FROM `ven_product` WHERE  id= '$id'";
								$execute = mysqli_query($conn, $sql);

								$total = mysqli_num_rows($execute);
								$product = mysqli_fetch_assoc($execute);

								?>
                                <div class="card-body">
                                    <!-- Product Form -->
                                    <form class="row g-3" method="POST" enctype="multipart/form-data">
                                        <!-- Product Name -->
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Product name</label>
                                            <input type="text" class="form-control slug-title" name="prod_name"
                                                id="inputEmail4" value="<?php echo $product['prod_name']; ?>" required>
                                        </div>

                                        <!-- Categories -->
                                        <div class="col-md-6">
                                            <label class="form-label">Product Categories</label>
                                            <select id="Categories" class="form-select" name="cat_name">
                                                <option value="Choose">Choose Category</option>
                                                <?php
        $query = "SELECT * FROM `category` ORDER BY id DESC";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $selected = ($row['cat_name'] == $product['cat_name']) ? 'selected' : '';
            ?>
                                                <option value="<?php echo $row['cat_name']; ?>"
                                                    <?php echo $selected; ?>>
                                                    <?php echo $row['cat_name']; ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <!-- Batch Code -->
                                        <div class="col-md-6">
                                            <label class="form-label">Batch Code</label>
                                            <input type="text" class="form-control" id="batchcode" name="batch_code"
                                                value="<?php echo $product['batch_code']; ?>">
                                        </div>

                                        <!-- BarCode/EAN/UPC -->
                                        <div class="col-md-6">
                                            <label class="form-label">BarCode/EAN/UPC</label>
                                            <input type="text" class="form-control" id="batchcode" name="bar_code"
                                                value="<?php echo $product['bar_code']; ?>">
                                        </div>
                                        <!-- BarCode/EAN/UPC -->
                                        <div class="col-md-6">
                                            <label class="form-label">HSN CODE</label>
                                            <input type="text" class="form-control" id="batchcode" name="hsn_code"
                                                value="<?php echo $product['hsn_code']; ?>">
                                        </div>

                                        <!-- Brand Name -->
                                        <div class="col-md-6">
                                            <label class="form-label">Brand Name</label>
                                            <input type="text" class="form-control" id="batchcode" name="brand_name"
                                                value="<?php echo $product['brand_name']; ?>">
                                        </div>

                                        <!-- Product Quantity -->
                                        <div class="col-md-6">
                                            <label class="form-label">Product Quantity</label>
                                            <input type="text" class="form-control" id="batchcode"
                                                name="product_quantity"
                                                value="<?php echo $product['product_quantity']; ?>">
                                        </div>

                                        <!-- Unit -->
                                        <div class="col-md-6">
                                            <label class="form-label">Unit</label>
                                            <select id="Units" class="form-select" name="unit">
                                                <option value="">Choose unit</option>
                                                <option value="Kg"
                                                    <?php if($product['unit'] == 'Kg') echo 'selected'; ?>>Kg</option>
                                                <option value="packet"
                                                    <?php if($product['unit'] == 'packet') echo 'selected'; ?>>packet
                                                </option>
                                                <option value="gram"
                                                    <?php if($product['unit'] == 'gram') echo 'selected'; ?>>gram
                                                </option>
                                                <option value="Ltr"
                                                    <?php if($product['unit'] == 'Ltr') echo 'selected'; ?>>Ltr</option>
                                                    <option value="Pices"
                                                    <?php if($product['unit'] == 'Pices') echo 'selected'; ?>>Pices</option>
                                            </select>
                                        </div>

                                        <!-- Package Quantity -->
                                        <div class="col-md-6">
                                            <label class="form-label">Package Quantity</label>
                                            <input type="text" class="form-control" id="batchcode"
                                                name="package_quantity"
                                                value="<?php echo $product['package_quantity']; ?>">
                                        </div>

                                        <!-- Size -->
                                        <div class="col-md-6">
                                            <label class="form-label">Size</label>
                                            <select id="Units" class="form-select" name="size">
                                                <option value="">Choose size</option>
                                                <option value="none"
                                                    <?php if($product['size'] == 'none') echo 'selected'; ?>>None
                                                </option>
                                                <option value="XS"
                                                    <?php if($product['size'] == 'XS') echo 'selected'; ?>>XS</option>
                                                <option value="S" <?php if($product['size'] == 'S') echo 'selected'; ?>>
                                                    S</option>
                                                <option value="M" <?php if($product['size'] == 'M') echo 'selected'; ?>>
                                                    M</option>
                                                <option value="L" <?php if($product['size'] == 'L') echo 'selected'; ?>>
                                                    L</option>
                                                <option value="XL"
                                                    <?php if($product['size'] == 'XL') echo 'selected'; ?>>XL</option>
                                                <option value="XXL"
                                                    <?php if($product['size'] == 'XXL') echo 'selected'; ?>>XXL</option>
                                                    <option value="XXXL"
                                                    <?php if($product['size'] == 'XXXL') echo 'selected'; ?>>XXXL</option>
                                            </select>
                                        </div>

                                        <!-- Color -->
                                        <div class="col-md-6">
                                            <label class="form-label">Color</label>
                                            <select id="colorChart" class="form-select" name="color">
                                                <option value="">Choose color</option>
                                                <option value="red"
                                                    <?php if($product['color'] == 'red') echo 'selected'; ?>>Red
                                                </option>
                                                <option value="green"
                                                    <?php if($product['color'] == 'green') echo 'selected'; ?>>Green
                                                </option>
                                                <option value="blue"
                                                    <?php if($product['color'] == 'blue') echo 'selected'; ?>>Blue
                                                </option>
                                                <option value="yellow"
                                                    <?php if($product['color'] == 'yellow') echo 'selected'; ?>>Yellow
                                                </option>
                                                <option value="orange"
                                                    <?php if($product['color'] == 'orange') echo 'selected'; ?>>Orange
                                                </option>
                                                <option value="purple"
                                                    <?php if($product['color'] == 'purple') echo 'selected'; ?>>Purple
                                                </option>
                                                <option value="pink"
                                                    <?php if($product['color'] == 'pink') echo 'selected'; ?>>Pink
                                                </option>
                                                <option value="black"
                                                    <?php if($product['color'] == 'black') echo 'selected'; ?>>Black
                                                </option>
                                                <option value="white"
                                                    <?php if($product['color'] == 'white') echo 'selected'; ?>>White
                                                </option>
                                                <option value="#808080"
                                                    <?php if($product['color'] == 'gray') echo 'selected'; ?>>Gray
                                                </option>
                                            </select>
                                        </div>

                                        <!-- Material Type -->
                                        <div class="col-md-6">
                                            <label class="form-label">Material Type</label>
                                            <input type="text" class="form-control" id="mrp" name="material_type"
                                                value="<?php echo $product['material_type']; ?>">
                                        </div>

                                        <!-- Manufacturer Name -->
                                        <div class="col-md-6">
                                            <label class="form-label">Manufacturer Name</label>
                                            <input type="text" class="form-control" id="mrp" name="manufacturer_name"
                                                value="<?php echo $product['manufacturer_name']; ?>">
                                        </div>

                                        <!-- Manufacturer Date -->
                                        <!-- Manufacturer Date -->
                                        <div class="col-md-6">
                                            <label class="form-label">Manufacturer Date</label>
                                            <input type="date" class="form-control" id="manufacturer_date"
                                                name="manufacturer_date"
                                                value="<?php echo $product['manufacturer_date']; ?>">
                                        </div>
                                        <script>
                                        // Get today's date
                                        var today = new Date();
                                        var dd = String(today.getDate()).padStart(2, '0');
                                        var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
                                        var yyyy = today.getFullYear();

                                        today = yyyy + '-' + mm + '-' + dd;
                                        // Set the maximum date of the input field to today
                                        document.getElementById("manufacturer_date").setAttribute("max", today);
                                        </script>

                                        <!-- Expiry Date -->
                                        <div class="col-md-6">
                                            <label class="form-label">Expiry Date</label>
                                            <input type="date" class="form-control" id="expiry_date" name="expiry_date"
                                                value="<?php echo $product['expiry_date']; ?>">
                                        </div>
                                        <script>
                                        // Get today's date
                                        var today = new Date();
                                        var dd = String(today.getDate()).padStart(2, '0');
                                        var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
                                        var yyyy = today.getFullYear();

                                        today = yyyy + '-' + mm + '-' + dd;
                                        // Set the minimum date of the input field to today
                                        document.getElementById("expiry_date").setAttribute("min", today);
                                        </script>

                                        <!-- MRP -->
                                        <div class="col-md-6">
                                            <label class="form-label">OLD PRICE (MRP)</label>
                                            <input type="number" class="form-control" id="mrp" name="mrp"
                                                value="<?php echo $product['mrp']; ?>">
                                        </div>

                                        <!-- Company Price -->
                                        <div class="col-md-6">
                                            <label class="form-label">NEW PRICE</label>
                                            <input type="number" class="form-control" id="c_price" name="c_price"
                                                oninput="calculateTotal()" value="<?php echo $product['c_price']; ?>">
                                        </div>

                                        <!-- Product Description -->
                                        <div class="col-md-12">
                                            <label class="form-label">Product Description</label>
                                            <textarea class="form-control" rows="2"
                                                name="pro_desc"><?php echo $product['pro_desc']; ?></textarea>
                                        </div>


                                        <!-- <div class="col-md-6">
                                            <span>
                                                <label> Vendor Customer Prize</label>
                                                <input class="radio" type="radio" name="prizeType" value="vendor"
                                                    onclick="showDiscountInputs()">
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <label> Company Customer Prize</label>
                                            <input type="radio" name="prizeType" class="radio" value="company"
                                                onclick="hideDiscountInputs()">
                                            <div class="col-md-6 hidden" id="discountInputs">
                                                <label class="form-label">Discount</label>
                                                <input type="text" name="discount"
                                                    value="<?php echo $product['discount']; ?>" required>
                                                <label>Special Discount</label>
                                                <input type="text" name="specialDiscount"
                                                    value="<?php echo $product['specialDiscount']; ?>">
                                            </div>
                                        </div> -->

                                        <div class="col-md-6">
                                            <label class="form-label">Thumb-1</label>
                                            <input name="thumb_1" class="form-control" type="file">
                                            <input name="oldImg" class="form-control" type="hidden"
                                                value="<?php echo $product['thum1']; ?>">
                                            <img src="<?php echo $product['thum1']; ?>" width=150 height="120">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Thumb-2</label>
                                            <input name="thumb_2" class="form-control" type="file">
                                            <input name="oldImg1" class="form-control" type="hidden"
                                                value="<?php echo $product['thum2']; ?>">
                                            <img src="<?php echo $product['thum2']; ?>" width=150 height="120">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Thumb-3</label>
                                            <input name="thumb_3" class="form-control" type="file">
                                            <input name="oldImg2" class="form-control" type="hidden"
                                                value="<?php echo $product['thum3']; ?>">
                                            <img src="<?php echo $product['thum3']; ?>" width=150 height="120">
                                        </div>
                                        <!-- Submit Button -->
                                        <div class="col-md-12">
                                            <button type="submit" name="save" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Common JavaScript -->
    <!-- Your script includes go here -->


    <!-- Footer -->

    <script>
    function showDiscountInputs() {
        document.getElementById('discountInputs').style.display = 'block';
    }

    function hideDiscountInputs() {
        document.getElementById('discountInputs').style.display = 'none';
    }
    </script>

    </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->
    <?php
			include "assets/include/footer.php";
			?>

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

// Handle form submission
if (isset($_POST['save'])) {
    // Extract updated product details from the form
    $pro_name = $_POST['prod_name'];
	$pro_cat = $_POST['cat_name'];
    $pro_desc = $_POST['pro_desc'];
    $batch_code = $_POST['batch_code'];
    $bar_code = $_POST['bar_code'];
    $hsn_code = $_POST['hsn_code'];
    $brand_name = $_POST['brand_name'];
    $product_quantity = $_POST['product_quantity'];
    $unit = $_POST['unit'];
    $package_quantity = $_POST['package_quantity'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $material_type = $_POST['material_type'];
    $manufacturer_name = $_POST['manufacturer_name'];
    $manufacturer_date = $_POST['manufacturer_date'];
    $expiry_date = $_POST['expiry_date'];
    $mrp = $_POST['mrp'];
    $company_price = $_POST['c_price'];
    $discount = isset($_POST['discount']) ? $_POST['discount'] : '';
    $specialDiscount = isset($_POST['specialDiscount']) ? $_POST['specialDiscount'] : '';


    // Function to delete old image file
  function deleteOldImage($oldImage) {
    if (!empty($oldImage) && file_exists($oldImage)) {
      unlink($oldImage);
    }
  }

// Update folder1 Image
  $filename1 = $_FILES["thumb_1"]["name"];
  $image1 = $_POST['oldImg'];
  if ($filename1 != '') {
    deleteOldImage($image1);
    $tempname1 = $_FILES["thumb_1"]["tmp_name"];
    $folder1 = "../products/" . $filename1;
    move_uploaded_file($tempname1, $folder1);
  } else {
    $folder1 = $image1;
  }

  // Update folder2 Image
  $filename2 = $_FILES["thumb_2"]["name"];
  $image2 = $_POST['oldImg1'];
  if ($filename2 != '') {
    deleteOldImage($image2);
    $tempname2 = $_FILES["thumb_2"]["tmp_name"];
    $folder2 = "../products/" . $filename2;
    move_uploaded_file($tempname2, $folder2);
  } else {
    $folder2 = $image2;
  }

  // Update folder3 Image
  $filename3 = $_FILES["thumb_3"]["name"];
  $image3 = $_POST['oldImg2'];
  if ($filename3 != '') {
    deleteOldImage($image3);
    $tempname3 = $_FILES["thumb_3"]["tmp_name"];
    $folder3 = "../products/" . $filename3;
    move_uploaded_file($tempname3, $folder3);
  } else {
    $folder3 = $image3;
  }

	
    // if (
        
    //     empty($pro_name) || empty($pro_cat) || empty($pro_desc) ||
    //     empty($pro_old_price) || empty($pro_new_price) || empty($pro_qty) ||
    //     empty($folder1) || empty($folder2) || empty($folder3)
    // ) {
    //     echo "<script type='text/javascript'>
    //             alert('Please fill in all the required fields.');
    //         </script>";
    // } else {
    //     // Use prepared statement to avoid SQL injection
	
    $sql = "UPDATE `ven_product` SET 
    `prod_name`='$pro_name', 
    `cat_name`='$pro_cat', 
    `pro_desc`='$pro_desc', 
    `batch_code`='$batch_code', 
    `bar_code`='$bar_code', 
    `hsn_code`='$hsn_code',
    `brand_name`='$brand_name', 
    `product_quantity`='$product_quantity', 
    `unit`='$unit', 
    `package_quantity`='$package_quantity', 
    `size`='$size', 
    `color`='$color', 
    `material_type`='$material_type', 
    `manufacturer_name`='$manufacturer_name', 
    `manufacturer_date`='$manufacturer_date', 
    `expiry_date`='$expiry_date', 
    `mrp`='$mrp', 
    `c_price`='$company_price', 
    `discount`='$discount', 
    `specialDiscount`='$specialDiscount',
    `thum1`='$folder1',
	`thum2`='$folder2',
	`thum3`='$folder3'

	WHERE id='$id'";

$qurey_run = mysqli_query($conn, $sql);

if ($qurey_run) {
	echo "<script>
	Swal.fire({
		icon: 'success',
		title: 'Product Updated Successfully',
		showConfirmButton: false,
		timer: 1500
	}).then(() => {
		window.location.href = 'product-vlist.php';
	});
</script>";
} else {
	echo "<script type='text/javascript'>
			alert('Failed to update product!');
		</script>";
}
}

?>