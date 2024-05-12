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

                        <div class="container">
                               <?php

                                $id = $_GET['id'];

                                $sql = "SELECT * FROM `membershipmto_plan` WHERE  id= '$id'";
                                $execute = mysqli_query($conn, $sql);

                                $total = mysqli_num_rows($execute);
                                $show1 = mysqli_fetch_assoc($execute);

                                ?>
                            <h2 class="mt-5">Membership Turn Over (M.T.O) Form</h2>
                            <div class="card mt-3">
                                <div class="card-body">
                                  <form action="#
                                  " method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="membership_type">Membership Type:</label>
            <select id="membership_type" name="membership_type" class="form-control">
                <option value="general" <?php if($show1['membership_type'] == 'general') echo 'selected'; ?>>General</option>
                <option value="women" <?php if($show1['membership_type'] == 'women') echo 'selected'; ?>>Women</option>
                <option value="student" <?php if($show1['membership_type'] == 'student') echo 'selected'; ?>
                >Student</option>
                <option value="disabled" <?php if($show1['membership_type'] == 'disabled person') echo 'selected'; ?>>Disabled Person</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="fees">Membership Fees:</label>
            <input type="text" id="fees" name="fees" class="form-control" required  oninput="calculateTotal()" value="<?php echo $show1['fees']; ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="gst">GST [Percent]:</label>
            <input type="text" id="gstPercentage" name="gstPercentage" class="form-control" oninput="calculateTotal()" value="<?php echo $show1['gstPercentage']; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="gst">GST [Rs]:</label>
            <input type="text" id="gst" name="gst" class="form-control" value="<?php echo $show1['gst']; ?>"  >
        </div>
        <div class="form-group col-md-6">
            <label for="OverFees">Overall Fees:</label>
            <input type="text" id="overFees" name="overall_fees" class="form-control" value="<?php echo $show1['overall_fees']; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="agpPercentage">AGP Funds In %:</label>
            <input type="text" id="agpPercentage" name="agp_funds_percent" class="form-control" oninput="calculateTotal()" value="<?php echo $show1['agp_funds_percent']; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="agpAmount">AGP Funds In Rs:</label>
            <input type="text" id="agpAmount" name="agp_funds_rs" class="form-control"  value="<?php echo $show1['agp_funds_rs']; ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="servicePercentage">Services Charges In %:</label>
            <input type="text" id="servicePercentage" name="services_charges_percent" class="form-control" oninput="calculateTotal()" value="<?php echo $show1['services_charges_percent']; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="serviceAmount">Services Charges In Rs:</label>
            <input type="text" id="serviceAmount" name="services_charges_rs" class="form-control" value="<?php echo $show1['services_charges_rs']; ?>" >
        </div>
        <div class="form-group col-md-6">
            <label for="mtoTotal">MTO Value:</label>
            <input type="text" id="mtoTotal" name="mto_value" class="form-control" value="<?php echo $show1['mto_value']; ?>">
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="save">Submit</button>
</form>
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
        </div>
<!-- End Content -->
</div>

<!-- Move the script outside of the form -->
<script type="text/javascript">
    function calculateTotal() {
        // Get values from the input fields
        var fees = parseFloat(document.getElementById('fees').value) || 0;
        var gstPercentage = parseFloat(document.getElementById('gstPercentage').value) || 0;
        var agpPercentage = parseFloat(document.getElementById('agpPercentage').value) || 0;
        var servicePercentage = parseFloat(document.getElementById('servicePercentage').value) || 0;
        
        // Calculate amounts

        var gstAmount = (gstPercentage / 100) * fees;
        var overFees=fees+gstAmount;
        var agpAmount = (agpPercentage / 100) * fees;
        var serviceAmount = (servicePercentage / 100) * fees;
        var mtoTotal = fees - agpAmount - serviceAmount;

        // Update the total field
        document.getElementById('gst').value = gstAmount.toFixed(2); 
         document.getElementById('overFees').value = overFees.toFixed(2); 
        document.getElementById('agpAmount').value = agpAmount.toFixed(2); 
        document.getElementById('serviceAmount').value = serviceAmount.toFixed(2); 
        document.getElementById('mtoTotal').value = mtoTotal.toFixed(2); 
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

    $membership_type = $_POST["membership_type"];
    $fees = $_POST["fees"];
    $gst = $_POST["gst"];
    $gstper = $_POST["gstPercentage"];

    $overall_fees = $_POST["overall_fees"];
    $agp_funds_percent = $_POST["agp_funds_percent"];
    $agp_funds_rs = $_POST["agp_funds_rs"];
    $services_charges_percent = $_POST["services_charges_percent"];
    $services_charges_rs = $_POST["services_charges_rs"];
    $mto_value = $_POST["mto_value"];

        // Use prepared statement to avoid SQL injection
        $sql = "UPDATE `membershipmto_plan` SET `membership_type`='$membership_type', `fees`='$fees',`gstPercentage`='$gst_per', `gst`='$gst', `overall_fees`='$overall_fees', `agp_funds_percent`='$agp_funds_percent', `agp_funds_rs`='$agp_funds_rs', `services_charges_percent`='$services_charges_percent', `services_charges_rs`='$services_charges_rs', `mto_value`='$mto_value' WHERE `id`='$id'";

        $qurey_run = mysqli_query($conn, $sql);

        if ($qurey_run) {
            echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'membership Updated Successfully',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = 'membership_list.php';
            });
        </script>";
        } else {
            echo "<script type='text/javascript'>
                    alert('Failed to update membership!');
                </script>";
        }
    }

?>