<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
if ($userprofile == true) {

} else {
	header('location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/main-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:01 GMT -->

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

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css"
		rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- Data Tables -->
	<link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
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
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
						<h1>Main Category</h1>
						<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Main Category
						</p>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12">
							<div class="ec-cat-list card card-default mb-24px">
								<div class="card-body">
									<div class="ec-cat-form">
										<h4>Add New Category</h4>
										<form method="post" enctype="multipart/form-data">
											<div class="form-group row">
												<label for="text" class="col-12 col-form-label">Category Name</label>
												<div class="col-12">
													<input type="text" name="cat_name"
														class="form-control here slug-title"
														placeholder="Category name">
												</div>
											</div>
											<div class="form-group row">
												<label for="slug" class="col-12 col-form-label">Category Image</label>
												<div class="col-12">
													<input type="file" name="cat_img"
														class="form-control here set-slug">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-12 col-form-label">Category Description</label>
												<div class="col-12">
													<textarea id="sortdescription" name="cat_descr" cols="40" rows="2"
														class="form-control"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="col-12">
													<button name="save" type="submit"
														class="btn btn-primary">Submit</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12">
							<div class="ec-cat-list card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table">
											<thead>
												<tr>
													<th>Id</th>
													<th>Category Name</th>
													<th>Categories Image</th>
													<th>Category Description</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												<?php
												$i = 1;
												$query = "SELECT * FROM `category` ORDER BY 'id' DESC";
												$qury_run = mysqli_query($conn, $query);
												while ($row = mysqli_fetch_assoc($qury_run)) {
													?>
													<tr>
														<td>
															<?php echo $i; ?>
														</td>
														<td>
															<?php echo $row['cat_name']; ?>
														</td>
														<td><img src="<?php echo $row['cat_img']; ?>" width='70' height="70"
																style="border-radius:50%">
														</td>

														<td>
															<?php echo $row['cat_descr']; ?>
														</td>
														<td>
															<?php
															if ($row['status'] == 1) {
																echo '<p><a href="cat_status.php?id=' . $row['id'] . '&status=0"><button class="btn btn-sm btn-success">Show</button></a></p>';
															} else {

																echo '<p><a href="cat_status.php?id=' . $row['id'] . '&status=1"> <button class="btn btn-sm btn-danger">hide</button></a></p>';
															}
															?>
														</td>

														<td>
															<div class="btn-group">
																<button type="button"
																	class="btn btn-outline-success">Action</button>
																<button type="button"
																	class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																	data-bs-toggle="dropdown" aria-haspopup="true"
																	aria-expanded="false" data-display="static">
																	<span class="sr-only">Info</span>
																</button>

																<div class="dropdown-menu">
																	<a class="dropdown-item"
																		href="edit_category.php?id=<?php echo $row['id']; ?>">Edit</a>
																	<a class="dropdown-item"
																		href="cat_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
												<?php
												$i++;
												}
												?>
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

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/main-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:03 GMT -->

</html>

<?php
if (isset($_POST['save'])) {

	$cname = $_POST['cat_name'];

	$filename = $_FILES['cat_img']['name'];
	$tempname = $_FILES['cat_img']['tmp_name'];
	$folder = "assets/images/" . $filename;
	move_uploaded_file($tempname, $folder);


	$desc = $_POST['cat_descr'];

	$sql = "INSERT INTO `category`(`cat_name`, `cat_img`, `cat_descr`) VALUES ('$cname','$folder','$desc')";
	$qurey_run = mysqli_query($conn, $sql);
	if ($qurey_run) {
		echo "success";
	} else {
		echo "error";
	}
}
?>