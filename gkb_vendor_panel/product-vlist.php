<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

include("db.php");
$vendor = $_SESSION['$vendor'];
if($vendor == true)
{

}
else
{
    header('location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->

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

    <!-- No Extra plugin used -->

    <link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
    <link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

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
                            <h1>Product</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Product
                            </p>
                        </div>
                        <div>
                            <a href="product-add.php" class="btn btn-primary"> Add Porduct</a>
                        </div>
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
                                                    <th>Name</th>
                                                    <th>Category</th>
                                                    <th>Batch Code</th>
                                                    <th>Bar Code</th>
                                                    <th>Brand Name</th>
                                                    <th>Product Quantity</th>
                                                    <th>Unit</th>
                                                    <th>Package Quantity</th>
                                                    <th>Size</th>
                                                    <th>Color</th>
                                                    <th>Material Type</th>
                                                    <th>Manufacturer Name</th>
                                                    <th>Manufacturer Date</th>
                                                    <th>Expiry Date</th>
                                                    <th>MRP</th>
                                                    <th>Company Price</th>
                                                    <!-- <th>Discount</th>
                                                    <th>Special Discount</th> -->
                                                    <th>Description</th>
                                                    <th>Thumb_1</th>
                                                    <th>Thumb_2</th>
                                                    <th>Thumb_3</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                $i = 1;
                                $query = "SELECT * FROM `ven_product` ORDER BY id DESC";
                                $qury_run = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_assoc($qury_run)) {
                                    ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $i; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['prod_name']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['cat_name']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['batch_code']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['bar_code']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['brand_name']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['product_quantity']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['unit']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['package_quantity']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['size']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['color']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['material_type']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['manufacturer_name']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['manufacturer_date']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['expiry_date']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['mrp']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['c_price']; ?>
                                                    </td>
                                                   



                                                    <td>
                                                        <?php echo $row['pro_desc']; ?>
                                                    </td>

                                                    <td class="py-1">
															<img src="<?php echo $row['thum1'] ?>" width='100'
																height="100" style="border-radius:50%">
														</td>
														<td class="py-1">
															<img src="<?php echo $row['thum2'] ?>" width='100'
																height="100" style="border-radius:50%">
														</td>
														<td class="py-1">
															<img src="<?php echo $row['thum3'] ?>" width='100'
																height="100" style="border-radius:50%">
														</td>
                                                    <td>
                                                        <div class="btn-group mb-1">
                                                            <button type="button"
                                                                class="btn btn-outline-success">Action</button>
                                                            <button type="button"
                                                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false" data-display="static">
                                                                <span class="sr-only">Action</span>
                                                            </button>

															<div class="dropdown-menu">
																	<a class="dropdown-item" href="product_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
																	<a class="dropdown-item" href="prod_del.php?id=<?php echo $row['id']; ?>">Delete</a>
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
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
    <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>

    <!-- Datatables -->
    <script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
    <script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
    <script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

    <!-- Option Switcher -->
    <script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

    <!-- Ekka Custom -->
    <script src="assets/js/ekka.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->

</html>