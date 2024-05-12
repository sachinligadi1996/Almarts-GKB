
<?php
include "db_conn.php";
$id = $_GET['id'];

$sql = "DELETE FROM `review_table` WHERE `id`= '$id' ";
$execute = mysqli_query($conn, $sql);

if ($execute) {
    echo "
<script type='text/javascript'>
    alert('sucess');
</script>";
header("location:review-list.php");
} else {
    echo "Unable to Delete";
}
?>