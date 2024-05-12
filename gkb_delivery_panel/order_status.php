<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
if($userprofile == true)
{

}
else
{
    header('location:adminlogin.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
</head>

<body>

    <?php
    include 'db.php';

    $id = $_GET['id'];
    $status = $_GET['delivery_status'];

    // Function to redirect on cancel or when status is changed
    function redirect($url) {
        echo "<script type='text/javascript'>window.location.href='$url';</script>";
        exit;
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // User confirmed the status change
        $query = "UPDATE `orders` SET `delivery_status`='$status', `status`='$status' WHERE id='$id'";
        mysqli_query($conn, $query);
        echo "
        <script type='text/javascript'>
            Swal.fire({
                title: '',
                text: 'Status changed successfully.',
                icon: 'success',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location.replace('new_order.php');
            });
        </script>";
    } else {
        // Display the confirmation alert
        echo "
        <script type='text/javascript'>
            Swal.fire({
                title: 'Are you sure?',
                text: 'You are about to change the status.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, change it!',
                cancelButtonText: 'Cancel',
                reverseButtons: true
            }).then(function(result) {
                if (result.isConfirmed) {
                    // User confirmed, submit the form
                    document.getElementById('statusForm').submit();
                } else {
                    // User canceled, redirect back
                    window.location.replace('new_order.php');
                }
            });
        </script>";
    }
    ?>

    <!-- Form to submit when the user confirms the status change -->
    <form id="statusForm" method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="delivery_status" value="<?php echo $status; ?>">
    </form>

</body>

</html>