      <!-- sweet alert -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
   <link rel="stylesheet" href="sweetalert2.min.css">
   
<?php
include "db.php";
$id = $_GET['id'];

$sql = "DELETE FROM `gkb_to_tbalancesheet` WHERE `id`= '$id' ";
$execute = mysqli_query($conn, $sql);

if ($execute) {
    echo "<script type='text/javascript'>

           
    Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'Deleted Successfully',
      showConfirmButton: false,
      timer: 1500
    })

</script>";
header("location:turn-over-tsheet-list.php");
} else {
    echo "Unable to Delete";
}
?>
