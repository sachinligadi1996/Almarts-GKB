<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
// if ($userprofile == true) {

// } else {
//  header('location:adminlogin.php');
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Ekka - Admin Dashboard HTML Template.">
  <title>Grameen Kendriya Bazar</title>

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
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
              <h1>Other Fees List</h1>
            </div>
            <div>
              <a href="otherfeeslist.php" class="btn btn-primary"> View All </a>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                  <h2></h2>
                </div>

                <div class="card-body">
                  <div class="row ec-vendor-uploads">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <?php
                      $id = $_GET['id'];
                      $sql = "SELECT * FROM `otherfees` WHERE  id= '$id'";
                      $execute = mysqli_query($conn, $sql);
                      $total = mysqli_num_rows($execute);
                      $show1 = mysqli_fetch_assoc($execute);
                      ?>
                      <div class="ec-vendor-upload-detail">
                         <form class="row g-3" method="post" action="#">
                        <h3> A] Pick & Pack Per Unit </h3>
                          <div class="col-md-6">
                          
                            <label for="inputEmail4" class="form-label">Standerd</label>
                            <input type="text" class="form-control slug-title"
                              name="standerd" id="inputEmail4"  value="<?php echo $show1['standerd']; ?>" required>
                              </div>
                          
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Bulk Itom</label>
                            <input type="text" class="form-control slug-title"
                              name="bulk_item"  value="<?php echo $show1['bulk_item']; ?>" required>
                              
                             
                          </div>
                          <h3> B] Storage Fees </h3>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Cubic Material per Month</label>
                            <input type="text" class="form-control slug-title"
                              name="cubic_material" id="gkb_ta"  value="<?php echo $show1['cubic_material']; ?>" required>
                          </div>
                         
                          <h3> B] FBA Removel Fees </h3>
                          <h4> a] Standerd Size </h4>

                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Standerd Shipping Per Unit</label>
                            <input type="text" class="form-control slug-title"
                              name="standerd_ship" id="month_target"  value="<?php echo $show1['standerd_ship']; ?>" required>
                          </div>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Expidental Shipping</label>
                            <input type="text" class="form-control slug-title"
                              name="expidental_ship"  value="<?php echo $show1['expidental_ship']; ?>" id="month_target" required>
                          </div>
                          <h4> b] Heavy Size </h4>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Standerd Shipping Per Unit</label>
                            <input type="text" class="form-control slug-title"
                              name="standerd_ship_unit" id="month_target"  value="<?php echo $show1['standerd_ship_unit']; ?>" required>
                          </div>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Expidental Shipping</label>
                            <input type="text" class="form-control slug-title"
                              name="expidental_ship_unit" id="month_target"  value="<?php echo $show1['expidental_ship_unit']; ?>" required>
                          </div>
                          
                          
                          
                        
                        
                          <div class="col-md-12 text-center ">
                            <button type="submit" name="submit"
                              class="btn btn-primary">Save</button>
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

  <?php

  if (isset($_POST['submit'])) {
  $standerd = $_POST['standerd'];
   $bulk_item = $_POST['bulk_item'];
   $cubic_material = $_POST['cubic_material'];
   $standerd_ship= $_POST['standerd_ship'];
   $expidental_ship = $_POST['expidental_ship'];
   $standerd_ship_unit = $_POST['standerd_ship_unit'];
   $expidental_ship_unit = $_POST['expidental_ship_unit'];





    $query = "UPDATE `otherfees` SET `standerd`='$standerd', `bulk_item`='$bulk_item', `cubic_material`='$cubic_material', `standerd_ship`='$standerd_ship',`expidental_ship`='$expidental_ship',`standerd_ship_unit`='$standerd_ship_unit',`expidental_ship_unit`='$expidental_ship_unit' WHERE id=$id ";

    $data = mysqli_query($conn, $query);

    if ($data) {
      echo "<script type='text/javascript'>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Added Successfully',
                    showConfirmButton: false,
                    timer: 1500
                  })
              </script>";
    } else {
      echo "Failed !!!";
    }
  }

