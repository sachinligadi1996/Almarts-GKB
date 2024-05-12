<?php
session_start();

include("db.php");
$vendor = $_SESSION['$vendor'];
// if($vendor == true)
// {

// }
// else
// {
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

    <title>ALLY MART</title>

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
                                                <form class="row g-3" method="POST" enctype="multipart/form-data">
                                                    <div class="col-md-6">
                                                        <label for="inputEmail4" class="form-label">Product name</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="pro_name" id="inputEmail4" required>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Product Categories</label>
                                                        <select id="Categories" class="form-select" name="cat" required>
                                                            <option value="Choose">Choose Category</option>
                                                            <?php
															$quey = "SELECT * FROM `category` ORDER BY id DESC";
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
                                                        <label class="form-label">Batch Code</label>
                                                        <input type="text" class="form-control" id="batchcode"
                                                            name="batch_code" required  >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">BarCode/EAN/UPC</label>
                                                        <input type="text" class="form-control" id="batchcode"
                                                            name="bar_code" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">HSN CODE</label>
                                                        <input type="text" class="form-control" id="batchcode"
                                                            name="hsn_code" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Brand Name</label>
                                                        <input type="text" class="form-control" id="batchcode"
                                                            name="brand_name" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Product Quantity</label>
                                                        <input type="text" class="form-control" id="batchcode"
                                                            name="product_quantity" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Unit</label>
                                                        <select id="Units" class="form-select" name="unit" required>
                                                            <option value="">Choose unit</option>
                                                            <option value="Kg">Kg</option>
                                                            <option value="packet">packet</option>
                                                            <option value="gram">gram</option>
                                                            <option value="Ltr">Ltr</option>
                                                            <option value="Ltr">pices</option>
                                                            <!-- Add more options as needed -->
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Package Quantity</label>
                                                        <input type="text" class="form-control" id="batchcode"
                                                            name="package_quantity" required>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Size</label>
                                                        <select id="Units" class="form-select" name="size">
                                                            <option value="">Choose size</option>
                                                            <option value="none">None</option>
                                                            <option value="XS">XS</option>
                                                            <option value="S">S</option>
                                                            <option value="M">M</option>
                                                            <option value="L">L</option>
                                                            <option value="XL">XL</option>
                                                            <option value="XXL">XXL</option>
                                                            <option value="XXL">XXXL</option>
                                                            <!-- Add more options as needed -->
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Color</label>
                                                        <select id="colorChart" class="form-select" name="color">
                                                            <option value="">Choose color</option>
                                                            <option value="red">Red</option>
                                                            <option value="green">Green</option>
                                                            <option value="blue">Blue</option>
                                                            <option value="yellow">Yellow</option>
                                                            <option value="orange">Orange</option>
                                                            <option value="purple">Purple</option>
                                                            <option value="pink">Pink</option>
                                                            <option value="black">Black</option>
                                                            <option value="white">White</option>
                                                            <option value="#808080">Gray</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <label class="form-label">Material Type</label>
                                                        <input type="text" class="form-control" id="mrp"
                                                            name="material_type" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Manufacturer Name</label>
                                                        <input type="text" class="form-control" id="mrp"
                                                            name="manufacturer_name" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Manufacturer Date</label>
                                                        <input type="date" class="form-control" id="manufacturer_date"
                                                            name="manufacturer_date" required >
                                                    </div>
                                                    <script>
                                                    // Get today's date
                                                    var today = new Date();
                                                    var dd = String(today.getDate()).padStart(2, '0');
                                                    var mm = String(today.getMonth() + 1).padStart(2,
                                                    '0'); // January is 0!
                                                    var yyyy = today.getFullYear();

                                                    today = yyyy + '-' + mm + '-' + dd;
                                                    // Set the maximum date of the input field to today
                                                    document.getElementById("manufacturer_date").setAttribute("max", today);
                                                    </script>
                                                    

                                                    <div class="col-md-6">
                                                        <label class="form-label">Expiry Date</label>
                                                        <input type="date" class="form-control" id="expiry_date"
                                                            name="expiry_date"required>
                                                    </div>

                                                    <script>
                                                    // Get today's date
                                                    var today = new Date();
                                                    var dd = String(today.getDate()).padStart(2, '0');
                                                    var mm = String(today.getMonth() + 1).padStart(2,
                                                        '0'); // January is 0!
                                                    var yyyy = today.getFullYear();

                                                    today = yyyy + '-' + mm + '-' + dd;
                                                    // Set the minimum date of the input field to today
                                                    document.getElementById("expiry_date").setAttribute("min",
                                                        today);
                                                    </script>

                                                    <div class="col-md-6">
                                                        <label class="form-label">OLD PRICE (MRP)</label>
                                                        <input type="number" class="form-control" id="mrp" name="mrp" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">NEW PRICE</label>
                                                        <input type="number" class="form-control" id="c_price"
                                                            name="c_price" oninput="calculateTotal()" required>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="form-label">Product Description</label>
                                                        <textarea class="form-control" rows="2"
                                                            name="pro_desc" required></textarea>
                                                    </div>

                                                    <!-- <div class="col-md-6">
                                                        <span>
                                                            <label> Vendor Customer Prize</label>
                                                            <input class="radio" type="radio" name="prizeType"
                                                                value="vendor" onclick="showDiscountInputs()">
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <label> Company Customer Prize</label>
                                                        <input type="radio" name="prizeType" class="radio"
                                                            value="company" onclick="hideDiscountInputs()">

                                                        <div class="col-md-6 hidden" id="discountInputs">
                                                            <label class="form-label">Discount</label>
                                                            <input type="text" name="discount" required>

                                                            <label>Special Discount</label>
                                                            <input type="text" name="specialDiscount">
                                                        </div> 


                                                    </div>-->

                                                    <div class="col-md-6">
                                                        <label class="form-label">Thumb-1</label>
                                                        <input type="file" class="form-control" name="thumb_1" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Thumb-2</label>
                                                        <input type="file" class="form-control" name="thumb_2" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Thumb-3</label>
                                                        <input type="file" class="form-control" name="thumb_3" required>
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


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->

</html>


<?php
if (isset($_POST['save'])) {
    include("db.php");  // Include your database connection file

    $pro_name = mysqli_real_escape_string($conn, $_POST['pro_name']);
    $pro_cat = mysqli_real_escape_string($conn, $_POST['cat']);
	
    $pro_desc = mysqli_real_escape_string($conn, $_POST['pro_desc']);
    $batch_code = mysqli_real_escape_string($conn, $_POST['batch_code']);
	$bar_code = mysqli_real_escape_string($conn, $_POST['bar_code']);
	$hsn_code = mysqli_real_escape_string($conn, $_POST['hsn_code']);
	$brand_name = mysqli_real_escape_string($conn, $_POST['brand_name']);
	$product_quantity = mysqli_real_escape_string($conn, $_POST['product_quantity']);
	$unit = mysqli_real_escape_string($conn, $_POST['unit']);
	$package_quantity = mysqli_real_escape_string($conn, $_POST['package_quantity']);
	$size = mysqli_real_escape_string($conn, $_POST['size']);
	$color = mysqli_real_escape_string($conn, $_POST['color']);
	$material_type = mysqli_real_escape_string($conn, $_POST['material_type']);
	$manufacturer_name = mysqli_real_escape_string($conn, $_POST['manufacturer_name']);
	$manufacturer_date = mysqli_real_escape_string($conn, $_POST['manufacturer_date']);
	$expiry_date = mysqli_real_escape_string($conn, $_POST['expiry_date']);
	

    $mrp = mysqli_real_escape_string($conn, $_POST['mrp']);
    $discount = mysqli_real_escape_string($conn, $_POST['discount']);
    $specialDiscount = mysqli_real_escape_string($conn, $_POST['specialDiscount']);
    $company_price = mysqli_real_escape_string($conn, $_POST['c_price']);

    $filename = $_FILES['thumb_1']['name'];
    $tempname = $_FILES['thumb_1']['tmp_name'];
    $folder1 = "../products/" . $filename;
    move_uploaded_file($tempname, $folder1);

    $filename = $_FILES['thumb_2']['name'];
    $tempname = $_FILES['thumb_2']['tmp_name'];
    $folder2 = "../products/" . $filename;
    move_uploaded_file($tempname, $folder2);

    $filename = $_FILES['thumb_3']['name'];
    $tempname = $_FILES['thumb_3']['tmp_name'];
    $folder3 =  "../products/" . $filename;
    move_uploaded_file($tempname, $folder3);
 
	$sql = "INSERT INTO `ven_product`(`prod_name`, `cat_name`, `pro_desc`, `batch_code`, `bar_code`,`hsn_code`, `brand_name`, `product_quantity`, `unit`, `package_quantity`, `size`, `color`, `material_type`, `manufacturer_name`, `manufacturer_date`, `expiry_date`, `mrp`, `c_price`, `discount`, `specialDiscount`, `thum1`, `thum2`, `thum3`) VALUES ('$pro_name','$pro_cat','$pro_desc','$batch_code','$bar_code','$hsn_code','$brand_name','$product_quantity','$unit','$package_quantity','$size','$color','$material_type','$manufacturer_name','$manufacturer_date','$expiry_date','$mrp','$company_price','$discount','$specialDiscount','$folder1','$folder2','$folder3')";

    $query_run = mysqli_query($conn, $sql);

    
	if ($query_run) {
        echo "<script type='text/javascript'>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Product Added Successfully!',
                showConfirmButton: false,
                timer: 1500
            });
        </script>";
        // Redirect to product-list.php after successful insertion
        echo "<script>window.location.href = 'product-vlist.php';</script>";
        exit; // Make sure to exit after redirecting to prevent further execution
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>