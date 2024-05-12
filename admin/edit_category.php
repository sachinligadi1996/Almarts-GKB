<?php
session_start();

include("db.php");
$userprofile = $_SESSION['$user_name'];
if($userprofile == true)
{

}
else
{
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
						<!-- <h1>Main Category</h1> -->
						<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
						</p>
					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12">
							<div class="ec-cat-list card card-default mb-24px">
								<div class="card-body">
									<div class="ec-cat-form">
										<h4>Update Category</h4>
										<?php

										$id = $_GET['id'];

										$sql = "SELECT * FROM `category` WHERE id= '$id'";
										$execute = mysqli_query($conn, $sql);

										$total = mysqli_num_rows($execute);
										$show = mysqli_fetch_assoc($execute);

										?>
										<form method="post" enctype="multipart/form-data">
											<div class="form-group row">
												<label for="text" class="col-12 col-form-label">Category Name</label>
												<div class="col-12">
													<input type="text" name="cat_name"
														class="form-control here slug-title"
														value="<?php echo $show['cat_name'] ?>">
												</div>
											</div>
											<div class="form-group row">
												<label for="slug" class="col-12 col-form-label">Category Image</label>
												<div class="col-12">
													<input type="file" name="cat_img"
														class="form-control here set-slug">

													<input name="oldImg" class="form-control" type="hidden"
														value="<?php echo $show['cat_img']; ?>">
													<img src="<?php echo $show['cat_img']; ?>" width=150
														height="150">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-12 col-form-label">Category Description</label>
												<div class="col-12">
													<textarea id="sortdescription" name="cat_descr" cols="40" rows="2"
														class="form-control" ><?php echo $show['cat_descr']; ?></textarea>
												</div>
											</div>
											<div class="row">
												<div class="col-12">
													<button name="save" type="submit"
														class="btn btn-primary">Update</button>
												</div>
											</div>
										</form>
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

<?php
if (isset($_POST['save'])) {
    $sname = $_POST['cat_name'];

    $filename = $_FILES["cat_img"]["name"];
    $old_image = $_POST['oldImg'];
    if ($filename != '') {
        $update_filename = $_FILES['cat_img']['name'];
        $tempname = $_FILES["cat_img"]["tmp_name"];
        $folder = "assets/images/" . $update_filename;
        move_uploaded_file($tempname, $folder);
    } else {
        $update_filename = $old_image;
        $folder = "" . $update_filename;
    }

    $cdesc = $_POST['cat_descr'];
  
    $qurey = "UPDATE `category` SET `cat_name`='$sname',`cat_img`='$folder', `cat_descr`='$cdesc' WHERE `id` = '$id'";

    $run = mysqli_query($conn, $qurey);

    if ($run) {
        echo "success";
    } else {
        echo "error";
    }
}
?>