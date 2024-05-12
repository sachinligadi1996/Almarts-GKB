<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body>

<?php
    include "db.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM `gkb_admin_details` WHERE `id`= '$id' ";
    $execute = mysqli_query($conn, $sql);

    if ($execute) {
        echo "<script type='text/javascript'>
        Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Admin Deleted!',
        showConfirmButton: false,
        timer: 1500
        })

        </script>";

        header("location:sales_manag_list.php");

    } else {
        echo "Failed !!!";
    }
    ?>
</body>

</html>