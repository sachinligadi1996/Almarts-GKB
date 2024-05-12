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

    $id = $_GET['id'];
    $status = $_GET['status'];

    $query = "UPDATE `category` SET `status` = $status WHERE `id`= '$id'";

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
                    window.location.replace('main-category.php');
                });
            </script>";
    ?>
</body>

</html>