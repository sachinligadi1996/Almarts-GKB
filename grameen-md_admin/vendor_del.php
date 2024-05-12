
<?php
include "db.php";
$id = $_GET['id'];

$sql = "DELETE FROM `gkb_vendor_details` WHERE `id`= '$id' ";
$execute = mysqli_query($conn, $sql);

if ($execute) {
    echo "
<script type='text/javascript'>
    alert('sucess');
</script>";
header("location:vendor_list.php");
} else {
    echo "Unable to Delete";
}
?>