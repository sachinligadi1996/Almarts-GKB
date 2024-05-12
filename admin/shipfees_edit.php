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
              <h1>Bonuse Incentive</h1>
            </div>
            <div>
              <a href="shipfeeslist.php" class="btn btn-primary"> View All </a>
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
                      $sql = "SELECT * FROM `shipfees` WHERE  id= '$id'";
                      $execute = mysqli_query($conn, $sql);
                      $total = mysqli_num_rows($execute);
                      $show1 = mysqli_fetch_assoc($execute);
                      ?>
                      <div class="ec-vendor-upload-detail">
                        <form class="row g-3" method="post" action="#">
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Item Prize Range.</label>
                            <input type="text" class="form-control slug-title"
                              name="item_range" value="<?php echo $show1['item_range']; ?>" id="gkb_ta" required>
                          </div>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Local Area </label>
                            <input type="text" class="form-control slug-title"
                              name="local_area" id="inputEmail4" value="<?php echo $show1['local_area']; ?>" required>
                          </div>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Distance.</label>
                            <input type="text" class="form-control slug-title"
                              name="distance" value="<?php echo $show1['distance']; ?>" required>
                          </div>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">By Vendor Self Shipping</label>
                            <input type="text" class="form-control slug-title"
                              name="byvendor_sf" value="<?php echo $show1['byvendor_sf']; ?>" id="month_target" required>
                          </div>
                          <div class="col-md-12 text-center ">
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
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
    $range = $_POST['item_range'];
    $local_area = $_POST['local_area'];
    $distance = $_POST['distance'];
    $byvendor_sf = $_POST['byvendor_sf'];

    $query = "UPDATE `shipfees` SET `item_range`='$range', `local_area`='$local_area', `distance`='$distance', `byvendor_sf`='$byvendor_sf' WHERE id=$id ";

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

