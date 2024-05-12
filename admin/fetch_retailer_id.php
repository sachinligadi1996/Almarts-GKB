<?php
// Include your database connection code here
include("db.php");

if (isset($_POST['retailer'])) {
    $selectedRetailer = $_POST['retailer'];

    // Replace 'branch_id' and 'branch_manager' with the actual column names in your table
    $query = "SELECT `branch_id`, `branch-manager` FROM gkb_branch_detail WHERE branch_add2 = '$selectedRetailer'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $branchId = $row['branch_id'];
        $branchManager = $row['branch-manager'];

        // Echo the Branch Id and Branch Manager to be displayed on the client side
        echo "Branch Id: $branchId, Branch Manager: $branchManager";
    } else {
        // Handle the query error
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Handle the case where retailer is not set
    echo "Retailer not set";
}
?>
