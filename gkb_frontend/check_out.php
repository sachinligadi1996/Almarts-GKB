<?php
session_start();
include("db_conn.php");
if (isset($_POST['submit'])) {
    $_SESSION['cartdata'] = $_POST;
    header('location:checkout.php');
}
?>