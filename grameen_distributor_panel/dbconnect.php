<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_ecartbonanza";

// Create a connection
$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn === false){
    die("ERROR: Could not connect."
        .mysqli_connect_error());
}
else{
    // echo "connection successful";
}

?>