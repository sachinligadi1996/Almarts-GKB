<?php
session_start();

include("db.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sourcecode-Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
</head>
<body>




<?php


$id = $_GET['id'];

// Check if a confirmation flag is set in the URL
if (isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
    $query = "DELETE FROM  uidcoupon WHERE id = '$id' ";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo 
        "<script type='text/javascript'>
        Swal.fire({
            title:'Data deleted successfully',
            icon:'success',
            showConfirmButton: false,
            timer:2000
        }).then(function() {
            window.location.replace('uid_coupon_list.php');
        });
        </script>";
    } else {
        echo "Failed To Delete";
    }
} else {
    // Show the confirmation dialog
    echo 
    "<script type='text/javascript'>
    Swal.fire({
        title: 'Confirm Deletion',
        text: 'Are you sure you want to delete this record?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            // If the user confirms, redirect with a confirmation flag
            window.location.href = 'uid_coupon_delete.php?id=$id&confirm=true';
        } else {
            // If the user cancels, simply return to the previous page
            window.location.replace('uid_coupon_list.php');
        }
    });
    </script>";
}
?>