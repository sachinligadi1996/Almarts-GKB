<?php
session_start();

include 'db.php';

if (isset($_POST['submit']))
{
    $email = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM gkb_admin_details WHERE admin_username = '$email' && admin_pass = '$password' ";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    // $counts = mysqli_fetch_object($data);

    if($total == 1)
    {
      
      
        $_SESSION['$user_name'] = $email;
        header('location:index.php');
    }
    else
    {
        echo "login not ok";
        
    }
}




?>