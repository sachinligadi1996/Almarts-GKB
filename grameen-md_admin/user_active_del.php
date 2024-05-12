
<?php
include "db.php";
$id = $_GET['id'];

$sql = "DELETE FROM `user` WHERE `id`= '$id' ";
$execute = mysqli_query($conn, $sql);

if ($execute) {
    echo "
<script type='text/javascript'>
    alert('sucess');
</script>";
header("location:user_active.php");
} else {
    echo "Unable to Delete";
}
?>