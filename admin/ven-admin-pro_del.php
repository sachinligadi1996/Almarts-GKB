<?php
include "db.php";
$id = $_GET['id'];

$sql = "DELETE FROM `ven_admin_pro` WHERE `id`= '$id' ";
$execute = mysqli_query($conn, $sql);

if ($execute) {
    echo "
<script type='text/javascript'>
    alert('sucess');
</script>";
header("location:vendor-admin-product_list.php");
} else {
    echo "Unable to Delete";
}
?>