<?php
include "db.php";
$id = $_GET['id'];

$sql = "DELETE FROM `shipfees` WHERE `id`= '$id' ";
$execute = mysqli_query($conn, $sql);

if ($execute) {
    echo "
<script type='text/javascript'>
    alert('sucess');
</script>";
header("location:shipfeeslist.php");
} else {
    echo "Unable to Delete";
}
?>