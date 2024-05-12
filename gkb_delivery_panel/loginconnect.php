<?php
session_start();

include 'db.php';

if (isset($_POST['submit']))
{
    $email = $_POST['del_username'];
    $password = $_POST['del_pass'];

    $query = "SELECT * FROM retailer_del_boy WHERE del_username = '$email' && del_pass = '$password' ";
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