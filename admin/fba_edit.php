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
              <a href="FBA_feeslist.php" class="btn btn-primary"> View All
              </a>
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

                $sql = "SELECT * FROM `fba_fees` WHERE  id= '$id'";
                $execute = mysqli_query($conn, $sql);

                $total = mysqli_num_rows($execute);
                $show1 = mysqli_fetch_assoc($execute);

                ?>
                      <div class="ec-vendor-upload-detail">
                        <form class="row g-3" method="post" action="#">
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Itom Prize Rnage</label>
                            <input type="text" class="form-control slug-title"
                              name="item_range" id="item_range"  value="<?php echo $show1['item_range']; ?>" required>
                          </div>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Minimum Rs.</label>
                            <input type="text" class="form-control slug-title"
                              name="min_rs"  value="<?php echo $show1['min_rs']; ?>" required>
                          </div>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Maximum Rs.</label>
                            <input type="text" class="form-control slug-title"
                              name="max_rs" id="gkb_ta"  value="<?php echo $show1['max_rs']; ?>" required>
                          </div>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Final Entry [F.B.A]</label>
                            <input type="text" class="form-control slug-title"
                              name="final_entry" id="month_target"  value="<?php echo $show1['final_entry']; ?>" required>
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

if (isset($_POST['submit']))
{
   $range = $_POST['item_range'];
   $min_rs = $_POST['min_rs'];
   $max_rs = $_POST['max_rs'];
   $final_entry = $_POST['final_entry'];




   

   $query= "UPDATE `fba_fees` SET `item_range`='$range', `min_rs`='$min_rs', `max_rs`='$max_rs', `final_entry`='$final_entry' WHERE id=$id ";

   $data = mysqli_query($conn,$query);

   if($data)
   {
    echo"<script type='text/javascript'>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Added Successfully',
                    showConfirmButton: false,
                    timer: 1500
                  })
              </script>";
   }
   else
   {
     echo "Failed !!!";
   }
 } 


?>


</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->



</html>


