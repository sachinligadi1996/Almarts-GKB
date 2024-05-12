<?php
include "db.php";
$id = $_GET['id'];

$sql = "DELETE FROM `membershipmto_plan` WHERE `id`= '$id' ";
$execute = mysqli_query($conn, $sql);

if ($execute) {
    echo "
<script type='text/javascript'>
    alert('sucess');
</script>";
header("location:membership_list.php");
} else {
    echo "Unable to Delete";
}
?>