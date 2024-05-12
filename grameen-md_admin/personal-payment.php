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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <style>
        hr{
            color: black;
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
                            <h1>Revenue Sharing Plan Turn over (RSP) </h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Revenue Sharing Plan T.O.
                            </p>
                        </div>
                        <div>
                            <a href="commision-list.php" class="btn btn-primary"> View All
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header card-header-border-bottom">
                                    <!-- <h2>Add Product</h2> -->
                                </div>


                                <div class="card-body">
                                    <div class="row ec-vendor-uploads">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="ec-vendor-upload-detail">
                                          <form class="row g-3" method="post" enctype="multipart/form-data"
                                                    onsubmit="return validateForm()">
                                                     <div class="row" style="margin-bottom: 50px;">
                                                    <div class="col-md-4">
                                                        <label>Active Id:</label>
                                                        <input type="text" name="prime_id">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Member Name:</label>
                                                        <input type="text" name="prime_name">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Month:</label>
                                                        <input type="Month" name="month">
                                                    </div>
                                                </div>

                                                    <h3>Direct Leg Income</h3>
                                                    <div class="col-md-3">
                                                        <label for="" class="form-label"><b>PVC % :</b></label>
                                                        <input type="text" class="form-control slug-title" name="pvc_per"
                                                            id="tdc" >
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" class="form-label">PVC in Rs.:</label>
                                                        <input type="text" class="form-control slug-title" name="pvc_rs"
                                                            id="direct" >
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="inputEmail4" class="form-label">No.Of Payouts to give : 
                                                             </label>
                                                        <input type="text" class="form-control slug-title" name="payout"
                                                            id="ids">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="inputEmail4" class="form-label">Min. Direct ID's
                                                            </label>
                                                        <input type="text" class="form-control slug-title" name="min_id"
                                                            id="active" required> 
                                                            <!-- <label for="inputEmail4" class="form-label">Share Rs. to each ID
                                                            </label>
                                                            <input type="text" class="form-control slug-title" name="active"
                                                            id="active" required> -->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="inputEmail4" class="form-label">Total ID</label>
                                                        <input type="text" class="form-control slug-title" name="total_id"
                                                            id="total_id" required>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="inputEmail4" class="form-label">Promotor</label>
                                                        <input type="text" class="form-control slug-title" name="promotor"
                                                            id="pramoter" readonly>
                                                    </div>
                                                     <div class="col-md-4">
                                                        <label for="inputEmail4" class="form-label">Remaing ID</label>
                                                        <input type="text" class="form-control slug-title" name="rem_id"
                                                            id="remaing_id" readonly>
                                                    </div>
                                                     <div class="col-md-4">
                                                        <label for="inputEmail4" class="form-label">Promotor Id * 10</label>
                                                        <input type="text" class="form-control slug-title" name="promotor_rs"
                                                            id="calculation3"readonly>
                                                    </div>
                                                     <div class="col-md-4">
                                                        <label for="inputEmail4" class="form-label">Remaing ID * 30</label>
                                                        <input type="text" class="form-control slug-title" name="rem_rs"
                                                            id="calculation4" readonly>
                                                    </div>
                                                     <div class="col-md-4">
                                                        <label for="inputEmail4" class="form-label">Total</label>
                                                        <input type="text" class="form-control slug-title" name="dir_total"
                                                            id="totalResult" readonly>
                                                    </div>

                                                    <hr>
                                                    <h3>Level Income</h3>
                                                     <div class="col-md-4">
                                                        <label for="" class="form-label">Level income</label>
                                                        <input type="text" class="form-control slug-title" name="level_inc"
                                                          id="levelIncome" required>
                                                    </div>
                                                   <div class="col-md-4">
                                                        <label for="inputEmail4" class="form-label">Total</label>
                                                        <input type="text" class="form-control slug-title" name="dir_total1"
                                                            id="totalleg" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="" class="form-label">Total Income</label>
                                                        <input type="text" class="form-control slug-title" name="dir_level_total"
                                                            id="totalIncome" required>
                                                    </div>
                                                    <hr>
                                                    <div class="col-md-12">
                                                        <label for="" class="form-label">Deduction on gross
                                                            amount</label>

                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" class="form-label">T.D.S :</label>
                                                        <input type="text" class="form-control slug-title" name="tds"
                                                            id="tds" required>
                                                    </div>
                                                   <!--  <div class="col-md-3">
                                                        <label for="" class="form-label">Direct income</label>
                                                        <input type="text" class="form-control slug-title" name="direct"
                                                            id="direct" required>
                                                    </div> -->
                                                    <div class="col-md-6">
                                                        <label for="" class="form-label">S.C :</label>
                                                        <input type="text" class="form-control slug-title" name="sc"
                                                            id="sc" required>
                                                    </div>
                                                     <div class="col-md-6">
                                                        <label for="" class="form-label">A.G.P :</label>
                                                        <input type="text" class="form-control slug-title" name="agp"
                                                            id="agp" required>
                                                    </div>
                                                   
                                                    <div class="col-md-6">
                                                        <label class="form-label">G.S.T :</label>
                                                        <input type="number" class="form-control" id="gst" name="gst"
                                                            required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">PVC :</label>
                                                        <input type="number" class="form-control" id="pvc" name="pvc"
                                                            required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Other:</label>
                                                        <input type="number" class="form-control" id="other" name="other"
                                                            required>
                                                    </div>

                                                      <div class="col-md-6">
                                                <label class="form-label">Total Deduction :</label>
                                                  <input type="number" class="form-control" id="deduction" name="deduction" readonly>
                                                   </div>
                                              <div class="col-md-6">
                                                 <label class="form-label">RSP Total :</label>
                                                   <input type="number" class="form-control" id="gross" name="gross" readonly>
                                                </div>



                                                    <div class="col-md-12 text-center">
                                                        <!-- Use col-md-12 to take up the entire row -->
                                                       
                                                           
                                                        <button type="submit" name="save"
                                                            class="btn btn-primary">Save</button>
                                                        <!-- <a href="edit_commision.php" class="btn btn-primary">Edit</a> -->
                                                        <!-- <a href="edit_commision.php" class="btn btn-primary">
                                                            <button type="submit" name="edit">
                                                                Edit
                                                            </button>
                                                        </a> -->
                                                        <!-- <button class="btn btn-primary"><a href="edit_commision.php" style="color: white; text-decoration: none;">Edit</a></button> -->


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
<!-- calculation Script -->
<script>
    function performCalculations() {
        // Get inputs
        var input1 = parseFloat(document.getElementById('active').value);
        var input2 = parseFloat(document.getElementById('total_id').value);
        var levelIncome = parseFloat(document.getElementById('levelIncome').value);
        var tds = parseFloat(document.getElementById('tds').value);
        var sc = parseFloat(document.getElementById('sc').value);
        var gst = parseFloat(document.getElementById('gst').value);
        var agp = parseFloat(document.getElementById('agp').value);
        var pvc = parseFloat(document.getElementById('pvc').value);
        var other = parseFloat(document.getElementById('other').value);

        // Calculate minimum ID and remaining ID
        var minId = input1;
        var remainId = input2 - input1;

        // Set values to the readonly input fields
        document.getElementById('pramoter').value = minId;
        document.getElementById('remaing_id').value = remainId;

        // Perform calculations
        var calculation3 = minId * 10;
        var calculation4 = remainId * 30;
        var totalResult = calculation3 + calculation4;
        var totalIncome = levelIncome + totalResult;
        var deduction = tds + sc + gst + agp + pvc + other;
        var grosstotal = totalIncome - deduction;

        // Display results
        document.getElementById('calculation3').value = calculation3;
        document.getElementById('calculation4').value = calculation4;
        document.getElementById('totalResult').value = totalResult;
        document.getElementById('totalleg').value = totalResult;
        document.getElementById('totalIncome').value = totalIncome;
       document.getElementById('deduction').value = deduction;
        document.getElementById('gross').value = grosstotal;
    }

    // Event listeners for input fields
    document.getElementById('active').addEventListener('input', performCalculations);
    document.getElementById('total_id').addEventListener('input', performCalculations);
    document.getElementById('levelIncome').addEventListener('input', performCalculations);
    document.getElementById('tds').addEventListener('input', performCalculations); // Add missing event listener
    document.getElementById('sc').addEventListener('input', performCalculations);
    document.getElementById('gst').addEventListener('input', performCalculations);
    document.getElementById('agp').addEventListener('input', performCalculations);
    document.getElementById('pvc').addEventListener('input', performCalculations);
    document.getElementById('other').addEventListener('input', performCalculations);

    // Initial calculation
    performCalculations();
</script>

<!--  -->

            <script>
            function validateForm() {
                const ids = document.querySelector('input[name="ids"]').value;
                const active = document.querySelector('input[name="active"]').value;
                const prime = document.querySelector('input[name="prime"]').value;
                const tdc = document.querySelector('input[name="tdc"]').value; // Corrected variable name
                const direct = document.querySelector('input[name="direct"]').value;
                const sc = document.querySelector('input[name="sc"]').value;
                const level = document.querySelector('input[name="level"]').value;
                const gst = document.querySelector('input[name="gst"]').value;
                const pvc = document.querySelector('input[name="pvc"]').value;

                if (!ids || !active || !prime || !tds || !direct || !sc || !level || !gst || !pvc) {
                    showError('Please fill in all required fields.');
                    return false;
                }

                return true; // Allow form submission if validation passes
            }

            function showError(message) {
                // You can customize this function to display the error message in your preferred way
                alert(message);
            }
            </script>

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
</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->

</html>


<?php
if (isset($_POST['save'])) {

    $ids = $_POST['prime_id'];
    $name = $_POST['prime_name'];
    $month = $_POST['month'];
    $pvc_per = $_POST['pvc_per'];
  
    $pvc_rs= $_POST['pvc_rs'];
    $payout= $_POST['payout'];
    $min_id= $_POST['min_id'];
    $total_id= $_POST['total_id'];
    $promotor= $_POST['promotor'];
    $rem_id= $_POST['rem_id'];
    $promotor_rs= $_POST['promotor_rs'];
    $rem_rs= $_POST['rem_rs'];
    $dir_total= $_POST['dir_total'];
    $level_inc= $_POST['level_inc'];
    $dir_total1= $_POST['dir_total1'];
    $dir_level_total= $_POST['dir_level_total'];
    $tds= $_POST['tds'];
    $sc= $_POST['sc'];
    $agp= $_POST['agp'];
    $gst= $_POST['gst'];
    $pvc= $_POST['pvc'];
    $other= $_POST['other'];
    $deduction= $_POST['deduction'];
    $gross= $_POST['gross'];

















 
    $sql = "INSERT INTO rsp_calc(prime_id,prime_name,month, pvc_per,pvc_rs,payout,min_id,total_id,promotor,rem_id,promotor_rs,rem_rs,dir_total,level_inc,dir_total1,dir_level_total,tds,sc,agp,gst,pvc,other,deduction,gross) 
        VALUES ('$ids', '$name','$month','$pvc_per','$pvc_rs','$payout','$min_id','$total_id','$promotor','$rem_id','$promotor_rs','$rem_rs','$dir_total','$level_inc','$dir_total1','$dir_level_total','$tds','$sc','$agp','$gst','$pvc','$other','$deduction','$gross')";

    $qurey_run = mysqli_query($conn, $sql);
    if ($qurey_run) {
        // echo "success";
    
    echo "<script type='text/javascript'>
                    Swal.fire({
                        title: 'Details added successfully',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function() {
                        // window.location.replace('commision.php');
                    });
                </script>";
    } else {
        // echo "error";
    
    echo "<script type='text/javascript'>
    Swal.fire({
        title: 'Error',
        text: 'Error: " . mysqli_error($conn) . "',
        icon: 'error',
        confirmButtonText: 'Ok'
    });
  </script>";
    }
}
?>