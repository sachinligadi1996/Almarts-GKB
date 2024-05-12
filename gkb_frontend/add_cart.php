<?php 
// session_start();
include("db_conn.php");
?>
<!DOCTYPE html>
<html>

<head>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
</head>

<body>

	<?php
	error_reporting(0);
	// $id_cust = $_SESSION['auth_user']['user_id'];
	$id_prod = $_GET['id'];

	$id_cust = 1;
	// $id_prod = 1;

	if (isset($_POST['add_cart'])) {

		// Check if the product already exists in the cart
		$duplicateQuery = "SELECT * FROM cart WHERE user_id = '$id_cust' AND product_id = '$id_prod'";
		$duplicateResult = mysqli_query($conn, $duplicateQuery);

		if (mysqli_num_rows($duplicateResult) > 0) {
			echo "
        <script type='text/javascript'>
            Swal.fire({
                title: '',
                text: 'Product already exists in cart.',
                icon: 'warning',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location.assign('products.php');
            });
        </script>";
		} else {
			$query = "INSERT INTO `cart` (`user_id`,`product_id`) VALUES ('$id_cust', '$id_prod')";
			$data = mysqli_query($conn, $query);

			if ($data) {
				echo "
            <script type='text/javascript'>
                Swal.fire({
                    title: '',
                    text: 'Product added to cart.',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2000
                }).then(function() {
                    window.history.back();
                });
            </script>";
			} else {
				echo "
            <script type='text/javascript'>
                Swal.fire({
                    title: '',
                    text: 'Unable to add product.',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2000
                }).then(function() {
                    window.history.back();
                });
            </script>";
			}
		}
	}
	?>
</body>

</html>