
<?php
include "db_conn.php";
$id = $_GET['id'];

$sql = "DELETE FROM `contact` WHERE `id`= '$id' ";
$execute = mysqli_query($conn, $sql);

if ($execute) {
    echo "
<script type='text/javascript'>
    alert('sucess');
</script>";
header("location:get_in_touch.php");
} else {
    echo "Unable to Delete";
}
?>