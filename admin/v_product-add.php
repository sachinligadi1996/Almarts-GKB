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
        /*          margin-top: -22px;*/

        margin-top: -33px;
        margin-left: -60px;
        height: 25px;
        width: 25px;
    }
    </style>

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
 <?php

                                $id = $_GET['id'];

                                $sql = "SELECT * FROM `ven_product` WHERE  id= '$id'";
                                $execute = mysqli_query($conn, $sql);

                                $total = mysqli_num_rows($execute);
                                $product = mysqli_fetch_assoc($execute);

                                ?>
                                <div class="card-body">
                                    <div class="row ec-vendor-uploads">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="ec-vendor-upload-detail">
                                                <form class="row g-3" method="POST" enctype="multipart/form-data">
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
                                                        <label for="inputEmail4" class="form-label">Product name</label>
                                                        <input type="text" class="form-control slug-title"
                                                            name="pro_name" id="inputEmail4" value="<?php echo $product['prod_name']; ?>" required>
                                                    </div>

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

                                                    <div class="col-md-6">
                                                        <label class="form-label">Batch Code</label>
                                                        <input type="text" class="form-control" id="batchcode"
                                                            name="batch_code"
                                                             value="<?php echo $product['batch_code']; ?>"> required  >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">BarCode/EAN/UPC</label>
                                                        <input type="text" class="form-control" id="batchcode"
                                                            name="bar_code"
                                                            value="<?php echo $product['bar_code']; ?>" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">HSN CODE</label>
                                                        <input type="text" class="form-control" id="batchcode"
                                                            name="hsn_code"
                                                            value="<?php echo $product['hsn_code']; ?>"> required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Brand Name</label>
                                                        <input type="text" class="form-control" id="batchcode"
                                                            name="brand_name" 
                                                             value="<?php echo $product['brand_name']; ?>"> required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Product Quantity</label>
                                                        <input type="text" class="form-control" id="batchcode"
                                                            name="product_quantity"  value="<?php echo $product['product_quantity']; ?>" required>
                                                    </div>
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
                                            </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Package Quantity</label>
                                                        <input type="text" class="form-control" id="batchcode"
                                                            name="package_quantity" 
                                                            value="<?php echo $product['package_quantity']; ?>"required>
                                                    </div>

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
                                            </select>
                                                    </div>
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


                                                    <div class="col-md-6">
                                                        <label class="form-label">Material Type</label>
                                                        <input type="text" class="form-control" id="mrp"
                                                            name="material_type" value="<?php echo $product['material_type']; ?>" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Manufacturer Name</label>
                                                        <input type="text" class="form-control" id="mrp"
                                                            name="manufacturer_name"  value="<?php echo $product['manufacturer_name']; ?>"required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Manufacturer Date</label>
                                                        <input type="date" class="form-control" id="manufacturer_date"
                                                            name="manufacturer_date" value="<?php echo $product['manufacturer_date']; ?>"required >
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
                                                            name="expiry_date" value="<?php echo $product['expiry_date']; ?>"required>
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
    <label class="form-label">MRP</label>
    <input type="number" class="form-control" id="old_price" name="mrp" value="<?php echo $product['mrp']; ?>" required>
</div>
<div class="col-md-6">
    <label class="form-label">Company PRICE</label>
    <input type="number" class="form-control" id="c_price" name="c_price" value="<?php echo $product['c_price']; ?>" oninput="calculateTotal()" required>
</div>

<div class="col-md-6">
    <label class="form-label">PVC</label>
    <input type="number" class="form-control" id="pvc" name="pvc" oninput="calculateTotal()" required>
</div>
<div class="col-md-6">
    <label class="form-label">Profit</label>
    <input type="number" class="form-control" id="profit" name="profit" oninput="calculateTotal()" required>
</div>
<hr>
<div class="col-md-6">
    <label class="form-label">Shipping Fees</label>
    <input type="number" class="form-control" id="ship_fees" name="ship_fees" oninput="calculateTotal()" required>
</div>
<div class="col-md-6">
    <label class="form-label">Referral Fees</label>
    <input type="number" class="form-control" id="refer_fees" name="refer_fees" oninput="calculateTotal()" required>
</div>
<div class="col-md-6">
    <label class="form-label">Weight Handling Fees</label>
    <input type="number" class="form-control" id="weight_fees" name="weight_fees" oninput="calculateTotal()" required>
</div>
<div class="col-md-6">
    <label class="form-label">Closing Fees</label>
    <input type="number" class="form-control" id="close_fees" name="close_fees" oninput="calculateTotal()" required>
</div>
<div class="col-md-6">
    <label class="form-label">Other Fees</label>
    <input type="number" class="form-control" id="other_fees" name="other_fees" oninput="calculateTotal()" required>
</div>
<div class="col-md-6">
    <label class="form-label">Discount</label>
    <input type="number" class="form-control" id="discount" name="discount" required>
</div>
<div class="col-md-6">
    <label class="form-label">NEW PRICE</label>
    <input type="number" class="form-control" id="total" name="new_price" required>
</div>
                                                    <div class="col-md-12">
                                                        <label class="form-label">Product Description</label>
                                                        <textarea class="form-control" rows="2"
                                                            name="pro_desc" required><?php echo $product['pro_desc']; ?></textarea>
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
        var purches_p = parseFloat(document.getElementById('c_price').value) || 0;
        var old_price = parseFloat(document.getElementById('old_price').value) || 0;
        var profit = parseFloat(document.getElementById('profit').value) || 0;
        var other_fees = parseFloat(document.getElementById('other_fees').value) || 0;
        var refer_fees = parseFloat(document.getElementById('refer_fees').value) || 0;
        var ship_fees = parseFloat(document.getElementById('ship_fees').value) || 0;
        var weight_fees = parseFloat(document.getElementById('weight_fees').value) || 0;
        var close_fees = parseFloat(document.getElementById('close_fees').value) || 0;
        var pvc = parseFloat(document.getElementById('pvc').value) || 0;

        // Calculate total
        var total = purches_p + profit + other_fees + pvc + close_fees + weight_fees + ship_fees + refer_fees;
        var discount = old_price-total;

        // Update the total field
        document.getElementById('total').value = total.toFixed(2); // Display total with two decimal places

        document.getElementById('discount').value = discount.toFixed(2); // Display discount with two decimal places
    }
</script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->

</html>


<?php
if (isset($_POST['save'])) {
    include("db.php");  // Include your database connection file
    $cinnumber      = $_POST['cinno'];
    $gstnumber      = $_POST['gstno'];
    $pannumber      = $_POST['panno'];
    $tannumber      = $_POST['tanno'];
    $hsncode        = $_POST['hsncode'];
    // $statecode      = $_POST['statecode'];
    $pro_name = mysqli_real_escape_string($conn, $_POST['pro_name']);
    $pro_cat = mysqli_real_escape_string($conn, $_POST['cat_name']);
    
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
    $pvc = mysqli_real_escape_string($conn, $_POST['pvc']);
    $profit = mysqli_real_escape_string($conn, $_POST['profit']);
    $other_fees = mysqli_real_escape_string($conn, $_POST['other_fees']);
    $ship_fees = mysqli_real_escape_string($conn, $_POST['ship_fees']);

    $weight_fees = mysqli_real_escape_string($conn, $_POST['weight_fees']);

    $close_fees = mysqli_real_escape_string($conn, $_POST['close_fees']);
    $refer_fees = mysqli_real_escape_string($conn, $_POST['refer_fees']);


    $discount = mysqli_real_escape_string($conn, $_POST['discount']);
   
    $company_price = mysqli_real_escape_string($conn, $_POST['c_price']);
    $new_price = mysqli_real_escape_string($conn, $_POST['new_price']);

    $thumb1 = $product['thum1'];
    $thumb2 = $product['thum2'];
    $thumb3 = $product['thum3'];

    // $filename = $_FILES['thumb_1']['name'];
    // $tempname = $_FILES['thumb_1']['tmp_name'];
    // $folder1 = "../product-image/" . $filename;
    // move_uploaded_file($tempname, $folder1);

    // $filename = $_FILES['thumb_2']['name'];
    // $tempname = $_FILES['thumb_2']['tmp_name'];
    // $folder2 = "../product-image/" . $filename;
    // move_uploaded_file($tempname, $folder2);

    // $filename = $_FILES['thumb_3']['name'];
    // $tempname = $_FILES['thumb_3']['tmp_name'];
    // $folder3 = "../product-image/" . $filename;
    // move_uploaded_file($tempname, $folder3);
 
    $sql = "INSERT INTO `ven_admin_pro`(`cinno`,`gstno`,`panno`,`tanno`,`hsncode`,`pro_name`, `cat_name`, `pro_desc`, `batch_code`, `bar_code`,`hsn_code`, `brand_name`, `product_quantity`, `unit`, `package_quantity`, `size`, `color`, `material_type`, `manufacturer_name`, `manufacturer_date`, `expiry_date`, `mrp`,`pvc`,`profit`,`other_fees`,`ship_fees`,`weight_fees`,`close_fees`,`refer_fees`, `c_price`, `discount`, `new_price`, `thum1`, `thum2`, `thum3`) VALUES ('$cinnumber','$gstnumber','$pannumber','$tannumber','$hsncode','$pro_name','$pro_cat','$pro_desc','$batch_code','$bar_code','$hsn_code','$brand_name','$product_quantity','$unit','$package_quantity','$size','$color','$material_type','$manufacturer_name','$manufacturer_date','$expiry_date','$mrp','$pvc','$profit','$other_fees','$ship_fees','$weight_fees','$close_fees','$refer_fees','$company_price','$discount','$new_price','$thumb1','$thumb2','$thumb3')";

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
        echo "<script>window.location.href = 'vendor-admin-product_list.php';</script>";
        exit; // Make sure to exit after redirecting to prevent further execution
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

