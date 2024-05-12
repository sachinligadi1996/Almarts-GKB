<?php
include "db.php";
$id = $_GET['id'];

$sql = "DELETE FROM `term_cond` WHERE `id`= '$id' ";
$execute = mysqli_query($conn, $sql);

if ($execute) {
    echo "
<script type='text/javascript'>
    alert('sucess');
</script>";
header("location:term_list.php");
} else {
    echo "Unable to Delete";
}
?>