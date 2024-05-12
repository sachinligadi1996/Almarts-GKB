<?php
include "db.php";
$id = $_GET['id'];

$sql = "DELETE FROM `gkb_md_bank` WHERE `id`= '$id' ";
$execute = mysqli_query($conn, $sql);

if ($execute) {
    echo "
<script type='text/javascript'>
    alert('sucess');
</script>";
header("location:add_bank.php");
} else {
    echo "Unable to Delete";
}
?>