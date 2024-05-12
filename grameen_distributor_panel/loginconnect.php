<?php
session_start();

include 'db.php';

if (isset($_POST['submit']))
{
    $email = $_POST['vendor_username'];
    $password = $_POST['vendor_pass'];

    $query = "SELECT * FROM distributor_details WHERE vendor_username = '$email' && vendor_pass = '$password' ";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    // $counts = mysqli_fetch_object($data);

    if($total == 1)
    {
      
      
        $_SESSION['$distributor'] = $email;
        header('location:index.php');
    }
    else
    {
        echo "login not ok";
        
    }
}




?>