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


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/sub-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:35 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

	<title>Ekka - Admin Dashboard HTML Template.</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

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
						<h1>Sub Category</h1>
						<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Sub Category</p>
					</div>
					<div class="row">
						<div class="col-xl-4 col-lg-12">
							<div class="ec-cat-list card card-default mb-24px">
								<div class="card-body">
									<div class="ec-cat-form">
										<h4>Add Sub Category</h4>

										<form>

											<div class="form-group row">
												<label for="text" class="col-12 col-form-label">Name</label> 
												<div class="col-12">
													<input id="text" name="text" class="form-control here slug-title" type="text">
												</div>
											</div>

											<div class="form-group row">
												<label for="slug" class="col-12 col-form-label">Slug</label> 
												<div class="col-12">
													<input id="slug" name="slug" class="form-control here set-slug" type="text">
													<small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</small>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-12 col-form-label">Sort Description</label> 
												<div class="col-12">
													<textarea id="sortdescription" name="sortdescription" cols="40" rows="2" class="form-control"></textarea>
												</div>
											</div> 

											<div class="form-group row">
												<label for="parent-category" class="col-12 col-form-label">Parent Category</label> 
												<div class="col-12">
													<select id="parent-category" name="parent-category" class="custom-select">
													<option value="">Clothes</option>
													<option value="uncategorized">Footwear</option>
													<option value="new category">Jewellry</option>
													<option value="new category">Perfume</option>
													<option value="new category">Cosmatics</option>
													<option value="new category">Glasses</option>
													<option value="new category">Bags</option>
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-12 col-form-label">Full Description</label> 
												<div class="col-12">
													<textarea id="fulldescription" name="fulldescription" cols="40" rows="4" class="form-control"></textarea>
												</div>
											</div> 

											<div class="form-group row">
												<label class="col-12 col-form-label">Product Tags <span>( Type and
														make comma to separate tags )</span></label>
												<div class="col-12">
													<input type="text" class="form-control" id="group_tag" name="group_tag" value="" placeholder="" data-role="tagsinput">
												</div>
											</div>

											<div class="row">
												<div class="col-12">
													<button name="submit" type="submit" class="btn btn-primary">Submit</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-lg-12">
							<div class="ec-cat-list card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table">
											<thead>
												<tr>
													<th>Thumb</th>
													<th>Name</th>
													<th>Main Categories</th>
													<th>Product</th>
													<th>Total Sell</th>
													<th>Status</th>
													<th>Trending</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/clothes.png" alt="product image"/></td>
													<td>Winter Wear</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-tag">Clothes</span>
														</span>
													</td>
													<td>28</td>
													<td>2161</td>
													<td>ACTIVE</td>
													<td><span class="badge badge-success">Top</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/footwear.png" alt="product image" /></td>
													<td>Sport Shoes</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-tag">Footwear</span>
														</span>
													</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td><span class="badge bg-primary">Medium</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/footwear.png" alt="product image" /></td>
													<td>Casual Shoes</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-tag">Footwear</span>
														</span>
													</td>
													<td>68</td>
													<td>5161</td>
													<td><span class="inactive">Inactive</span></td>
													<td><span class="badge badge-success">Top</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/clothes.png" alt="product image" /></td>
													<td>Jeans</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-tag">Clothes</span>
														</span>
													</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td><span class="badge bg-primary">Medium</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/cosmetics.png" alt="product image" /></td>
													<td>Makeup kit</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-tag">Cosmatics</span>
														</span>
													</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td><span class="badge bg-danger">Low</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/glasses.png" alt="product image" /></td>
													<td>Lenses</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-tag">Glasses</span>
														</span>
													</td>
													<td>82</td>
													<td>10061</td>
													<td><span class="inactive">Inactive</span></td>
													<td><span class="badge bg-primary">Medium</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/bag.png" alt="product image" /></td>
													<td>Shopping Bag</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-tag">Bags</span>
														</span>
													</td>
													<td>18</td>
													<td>3061</td>
													<td>ACTIVE</td>
													<td><span class="badge badge-success">Top</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/bag.png" alt="product image" /></td>
													<td>Gym Backpack</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-tag">Bags</span>
														</span>
													</td>
													<td>68</td>
													<td>5161</td>
													<td>ACTIVE</td>
													<td><span class="badge bg-primary">Medium</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/glasses.png" alt="product image" /></td>
													<td>Sunglasses</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-tag">Glasses</span>
														</span>
													</td>
													<td>82</td>
													<td>10061</td>
													<td><span class="inactive">Inactive</span></td>
													<td><span class="badge bg-primary">Medium</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/jewelry.png" alt="product image" /></td>
													<td>Earing</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-tag">Jewellry</span>
														</span>
													</td>
													<td>68</td>
													<td>5161</td>
													<td><span class="inactive">Inactive</span></td>
													<td><span class="badge badge-success">Top</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/perfume.png" alt="product image" /></td>
													<td>Deodorant</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-tag">Perfume</span>
														</span>
													</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td><span class="badge bg-primary">Medium</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
												<td><img class="cat-thumb" src="assets/img/category/clothes.png" alt="product image" /></td>
													<td>Tops</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-tag">Clothes</span>
														</span>
													</td>
													<td>38</td>
													<td>1561</td>
													<td>ACTIVE</td>
													<td><span class="badge bg-primary">Medium</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/img/category/cosmetics.png" alt="product image" /></td>
													<td>Skin care kit</td>
													<td>
														<span class="ec-sub-cat-list">
															<span class="ec-sub-cat-tag">Cosmatics</span>
														</span>
													</td>
													<td>18</td>
													<td>1061</td>
													<td>ACTIVE</td>
													<td><span class="badge bg-danger">Low</span></td>
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
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

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/sub-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:35 GMT -->
</html>