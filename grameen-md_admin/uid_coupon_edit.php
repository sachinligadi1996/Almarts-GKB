
<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
 // if ($userprofile == true) {

 // } else {
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

    <title>Grammeen Kendriya Bazar</title>

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

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">


    <!-- FAVICON -->
    <!-- <link href="assets/img/favicon.png" rel="shortcut icon" /> -->

</head>
<body>

<div class="wrapper">
    <?php include "assets/include/sidebar.php"; ?>

    <div class="ec-page-wrapper">
        <?php include "assets/include/header.php"; ?>
        <main class="mt-5 pt-3">
            
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                        <div>
                            <h1>Reffers UID'S Coupon Types & Benefits</h1>
                            <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Coupon Types & Benefits
                            </p>
                        </div>
                            <?php

                                $id = $_GET['id'];

                                $sql = "SELECT * FROM `uidcoupon` WHERE  id= '$id'";
                                $execute = mysqli_query($conn, $sql);

                                $total = mysqli_num_rows($execute);
                                $show1 = mysqli_fetch_assoc($execute);

                                ?>
                        <div>
                            <a href="uid_coupon_list.php" class="btn btn-primary"> View All
                            </a>
                        </div>
                    </div>

                    <form  method="post" enctype="multipart/form-data">
                    <div class="row">
                        <!-- State Code in the first column -->
                        <div class="col-md-6">
                         <div class="form-group">
            <label for="membership_type">Membership Type:</label>
            <select id="membership_type" name="membership" class="form-control">
                <option value="general" <?php if($show1['membership'] == 'general') echo 'selected'; ?>>General</option>
                <option value="women" <?php if($show1['membership'] == 'women') echo 'selected'; ?>>Women</option>
                <option value="student" <?php if($show1['membership'] == 'student') echo 'selected'; ?>
                >Student</option>
                <option value="disabled" <?php if($show1['membership'] == 'disabled person') echo 'selected'; ?>>Disabled Person</option>
            </select>
        </div>
                        </div>

                        <!-- GST Number -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="For PVC & PRC">Issue Of Month For PVC & PRC:</label>
                                <input type="month" class="form-control" id="for month" name="month" value="<?php echo $show1['month']; ?>" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- PAN Number in the first column -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="MTO Value">Display Single ID Plan MTO Value :</label>
                                <input type="text" class="form-control" id="mto_value"  name="mto" placeholder="Enter mto Value" oninput="calculateTotal()" value="<?php echo $show1['mto']; ?>">
                            </div>
                        </div>

                        <!-- TAN Number in the second column -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="PVC">PVC In %:</label>
                                <input type="text" class="form-control" id="pvc_percent" name="pvc1"  placeholder="Enter pvc In %" oninput="calculateTotal()" value="<?php echo $show1['pvc1']; ?>">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="PVC">PVC In RS:</label>
                                <input type="text" class="form-control" id="pvc_rs" name="pvc2"  placeholder="Enter pvc in rs" value="<?php echo $show1['pvc2']; ?>">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="PRC">PRC In %:</label>
                                <input type="text" class="form-control" id="pcr_percent" name="prc1"  placeholder="Enter prc In %" oninput="calculateTotal()"  value="<?php echo $show1['prc1']; ?>">
                            </div>
                        </div>

                        <div class="col-md-4">
                             <div class="form-group">
        <label for="PRC">PRC In RS:</label>
        <input type="text" class="form-control" id="prc_rs" name="prc2" placeholder="Enter prc in rs" value="<?php echo $show1['prc2']; ?>">
    </div>
                        </div>

                        
                        <div class="col-md-6">
                            <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            <!-- <button type="submit" class="btn btn-primary">Apply</button> -->
                            </div>
                        
                    </div>

                

                </form>
            </div>
        </div>
    </div>
</main>

    </div>
</div>
<script type="text/javascript">
    function calculateTotal() {
    // Get values from the input fields
    var mto_value = parseFloat(document.getElementById('mto_value').value) || 0;
    var pvc_percent = parseFloat(document.getElementById('pvc_percent').value) || 0;
    var pcr_percent = parseFloat(document.getElementById('pcr_percent').value) || 0;
    
    // Calculate amounts
    var pvc_rs = (pvc_percent / 100) * mto_value;
    var pcr_rs = (pcr_percent / 100) * mto_value;

    // Update the total field
    document.getElementById('pvc_rs').value = pvc_rs.toFixed(2); 
    document.getElementById('prc_rs').value = pcr_rs.toFixed(2); 
}

</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>

</body>
</html>

<?php
if (isset($_POST['submit'])) {
    
    $membership = $_POST['membership'];
    $month = $_POST['month'];
    $mto = $_POST['mto'];
    $pvc1 = $_POST['pvc1'];
    $pvc2 = $_POST['pvc2'];
    $prc1 = $_POST['prc1'];
    $prc2 = $_POST['prc2'];

    // Corrected SQL Query
    $sql = "UPDATE `uidcoupon` SET `membership`='$membership',`month`='$month',`mto`='$mto',`pvc1`='$pvc1',`pvc2`='$pvc2',`prc1`='$prc1',`prc2`='$prc2' WHERE `id` = '$id'";

    // Use prepared statements or sanitize input to prevent SQL injection
    $qurey_run = mysqli_query($conn, $sql);
    if ($qurey_run) {
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Coupon Updated Successfully',
            showConfirmButton: false,
            timer: 1500
        }).then(() => {
            window.location.href = 'uid_coupon_list.php';
        });
    </script>";

        // header("location:vendor_list.php");

    } else {
        echo "Failed !!!";
    }
}
?>