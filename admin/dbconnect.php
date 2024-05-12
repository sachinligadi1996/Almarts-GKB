<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "category";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn) {
    // echo "Yess";
}
else{
    echo "No";
}

?>