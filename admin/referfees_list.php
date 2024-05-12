<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
// if ($userprofile == true) {

// } else {
// 	header('location:adminlogin.php');
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

	<title>Grameen Kendriya Bazar</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
		rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css"
		rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- No Extra plugin used -->

	<link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
	<style type="text/css">
		section{
  width: 70%;
  margin: 30px auto;
}
#userTable th, #userTable td{
  border: 1px solid #ccc;
  text-align: left;
}
#userTable thead {
  background: #f2f2f2;
}
	</style>
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<!-- WRAPPER -->
	<div class="wrapper">


		<?php
		include "assets/include/sidebar.php";
		?>



		<!--  PAGE WRAPPER -->
		<div class="ec-page-wrapper">

			<?php
			include "assets/include/header.php";
			?>

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Refer Fees List</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Refer Fees
							</p>
						</div>
						<div>
							<a href="referfeesadd.php" class="btn btn-primary"> Add Porduct</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										 <table id="userTable" width="100%">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th><100</th>
                    <th>>100 And <=300</th>
                    <th>>300 And <=500</th>
                    <th>>500 And <=700</th>
                    <th>>700 And <1000</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM `refer_fees` ORDER BY id DESC";
                $qury_run = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($qury_run)) {
                    ?>
                    <tr>
                        <td><?php echo $row['cat_name']; ?></td>
                        <td><?php echo $row['products']; ?></td>
                        <td><?php echo $row['range_100']; ?></td>
                        <td><?php echo $row['range_100-300']; ?></td>
                        <td><?php echo $row['range_300-500']; ?></td>
                        <td><?php echo $row['range_500-700']; ?></td>
                        <td><?php echo $row['range_700-1000']; ?></td>
                         <td>
                              <div class="btn-group mb-1">
                                <button type="button"
                                  class="btn btn-outline-success">Info</button>
                                <button type="button"
                                  class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                  data-bs-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false" data-display="static">
                                  <span class="sr-only">Info</span>
                                </button>

                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="referfees_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                  <a class="dropdown-item" href="referfees_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                </div>
                              </div>
                            </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->


			<!-- Footer -->
			<?php
			include "assets/include/footer.php";
			?>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->
<!-- Your table HTML -->

<!-- DataTables scripts -->
 <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#userTable').DataTable({
                "paging": true,      // Enable pagination
                "searching": true    // Enable search box
            });
        });
    </script>
<!-- <script type="text/javascript">
	$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script> -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Datatables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>

	<!--  -->
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>


</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->

</html>