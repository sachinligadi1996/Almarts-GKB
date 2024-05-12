<?php
session_start();

include("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GKB</title>
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
</head>
<body>
    

<?php
include "db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve the file path before deleting the record
    $query = "SELECT thum1, thum2, thum3  FROM  ven_product WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $filePath = [
        $row['thum1'],
        $row['thum2'],
        $row['thum3'],

    ];
    // Delete the record from the database
    if (isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
        $deleteQuery = "DELETE FROM  ven_product WHERE id = $id";
        $deleteResult = mysqli_query($conn, $deleteQuery);
    
        if ($deleteResult) {
            // Use unlink() to delete the associated files from the server
            foreach ($filePath as $file) {
                if (file_exists($file)) {
                    unlink($file);
                }
            }
    
            // Show a success SweetAlert and redirect
            echo 
            "<script type='text/javascript'>
            Swal.fire({
                title:'Product Deleted Successfully',
                icon:'success',
                showConfirmButton: false,
                timer:2000
            }).then(function() {
                window.location.replace('product-vlist.php');
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
        title: 'Please Confirm',
        text: 'Are you sure you want to delete this record?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            // If the user confirms, redirect with a confirmation flag
            window.location.href = 'prod_del.php?id=$id&confirm=true';
        } else {
            // If the user cancels, simply return to the previous page
            window.location.replace('product-list.php');
        }
    });
    </script>";
}
}
?>