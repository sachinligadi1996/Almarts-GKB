<?php

$servername = "localhost";
$username   = "root";
$password   =  "";
$dbname     =  "gkb_db";

$conn = mysqli_connect($servername,$username,$password,$dbname);

   if($conn)
   {
   //  echo"connection successful";
   }
   else
   {
    // echo"connection failed";
   }

?>