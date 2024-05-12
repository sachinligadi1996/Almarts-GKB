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
            <?php

                $id = $_GET['id'];

                $sql = "SELECT * FROM `Bonuse_to` WHERE  id= '$id'";
                $execute = mysqli_query($conn, $sql);

                $total = mysqli_num_rows($execute);
                $show1 = mysqli_fetch_assoc($execute);

                ?>
                        <div>
              <a href="bonus_list.php" class="btn btn-primary"> View All
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
                      <div class="ec-vendor-upload-detail">
                        <form class="row g-3" method="post" action="#">
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Code Position/Ranking No</label>
                            <input type="text" class="form-control slug-title"
                              name="rank" id="inputEmail4"  value="<?php echo $show1['rank']; ?>" required>
                          </div>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Achievement Bonus</label>
                            <input type="text" class="form-control slug-title"
                              name="achivment_bo"  value="<?php echo $show1['achivment_bo']; ?>" required>
                          </div>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Travel Allowance</label>
                            <input type="text" class="form-control slug-title"
                              name="gkb_ta" id="gkb_ta" value="<?php echo $show1['gkb_ta']; ?>" required>
                          </div>
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Monthly Target</label>
                            <input type="text" class="form-control slug-title"
                              name="month_target" id="month_target"  value="<?php echo $show1['month_target']; ?>" required>
                          </div>
                          
                           <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Monthly Bonus</label>
                            <input type="text" class="form-control slug-title"
                              name="month_bo" id="month_target"  value="<?php echo $show1['month_bo']; ?>" required>
                          </div>
                           <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Quatarly Target</label>
                            <input type="text" class="form-control slug-title"
                              name="qtly_target" id="month_target"  value="<?php echo $show1['qtly_target']; ?>" required>
                          </div>
                           <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Quatarly Incentive</label>
                            <input type="text" class="form-control slug-title"
                              name="qtly_incentive" id="month_target"  value="<?php echo $show1['qtly_incentive']; ?>" required>
                          </div>
                           <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Half Year Target</label>
                            <input type="text" class="form-control slug-title"
                              name="half_year_target" id="half_year_target" value="<?php echo $show1['half_year_target']; ?>" required>
                          </div>
                           <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Half Year Bonuse</label>
                            <input type="text" class="form-control slug-title"
                              name="half_year_bo" id="month_target"  value="<?php echo $show1['half_year_bo']; ?>" required>
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
   $rank = $_POST['rank'];
   $achivment_bo = $_POST['achivment_bo'];
   $gkb_ta = $_POST['gkb_ta'];
   $month_target = $_POST['month_target'];
   $month_bo= $_POST['month_bo'];
   $qtly_target = $_POST['qtly_target'];
   $qtly_incentive = $_POST['qtly_incentive'];
   $half_year_target = $_POST['half_year_target'];
   $half_year_bo = $_POST['half_year_bo'];

   $query= "UPDATE `bonuse_to` SET `rank`='$rank', `achivment_bo`='$achivment_bo', `gkb_ta`='$gkb_ta', `month_target`='$month_target', `month_bo`='$month_bo', `qtly_target`='$qtly_target', `qtly_incentive`='$qtly_incentive', `half_year_target`='$half_year_target', `half_year_bo`='$half_year_bo' WHERE id=$id ";
   $data = mysqli_query($conn, $query);

    
      ?>
      <meta http-equiv = "refresh" content = "2; url=bonus_list.php">
  
      <?php
  
   if($data)
   {
      echo "<script type='text/javascript'>
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


