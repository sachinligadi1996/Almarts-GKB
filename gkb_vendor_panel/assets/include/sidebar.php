<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.3.67/css/materialdesignicons.min.css"
		integrity="sha512-nRzny9w0V2Y1/APe+iEhKAwGAc+K8QYCw4vJek3zXhdn92HtKt226zHs9id8eUq+uYJKaH2gPyuLcaG/dE5c7A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Document</title>
</head>

<body>


	<!-- LEFT MAIN SIDEBAR -->
	<div class="ec-left-sidebar ec-bg-sidebar">
		<div id="sidebar" class="sidebar ec-sidebar-footer">

			<div class="ec-brand">
				<a href="index.php" title="Ekka">
					<!-- <img class="ec-brand-icon" src="assets/img/logo/ec-site-logo.png" alt="" /> -->
					<span class="ec-brand-name text-truncate">VENDOR</span>
				</a>
			</div>

			<!-- begin sidebar scrollbar -->
			<div class="ec-navigation" data-simplebar>
				<!-- sidebar menu -->
				<ul class="nav sidebar-inner" id="sidebar-menu">
					<!-- Dashboard -->
					<li class="active">
						<a class="sidenav-item-link" href="index.php">
							<i class="mdi mdi-view-dashboard-outline"></i>
							<span class="nav-text">Dashboard</span>
						</a>
						<hr>
					</li>
					<!-- Profile -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="user-profile.php">
							<i class="mdi mdi-account-check"></i>
							<span class="nav-text">Profile</span> <b class="caret"></b>
						</a>
					</li>
					<!--document-->
					<li class="has-sub">
							<a class="sidenav-item-link" href="sellerregistration.html">
								<i class="mdi mdi-shopping"></i>
								<span class="nav-text">Documentation</span> <b class="caret"></b>

							</a>
							</li>
							
					<!-- Products -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-palette-advanced"></i>
							<span class="nav-text">Products</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="product-add.php">
										<span class="nav-text">Add Product</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="product-vlist.php">
										<span class="nav-text">List Product</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-star"></i>
								<span class="nav-text">Vendor Policy</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
								<li class="">
										<a class="sidenav-item-link" href="referfees_list.php">
											<span class="nav-text">Referral Fees</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="FBA_feeslist.php">
											<span class="nav-text">Closing Fees On FBA</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="shipfeeslist.php">
											<span class="nav-text">Shipping Fees</span>
										</a>
									</li>
									
									<li class="">
										<a class="sidenav-item-link" href="weightfeeslist.php">
											<span class="nav-text">Weight Handling Fees</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="otherfeeslist.php">
											<span class="nav-text">Other Fees</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<!----term and condition-->
						<li class="has-sub">
							<a class="sidenav-item-link" href="termsandconditions.html">
								<i class="mdi mdi-briefcase-download"></i>
								<span class="nav-text">Term & Condition</span> <b class="caret"></b>

							</a>
							</li>
							
									

					<!-- invoice and po -->
					<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-star"></i>
								<span class="nav-text">Invoice & P.O</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="create_invoice.php">
											<span class="nav-text">Generate Invoice</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="invoice_list.php">
											<span class="nav-text">View Invoice</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="create_po.php">
											<span class="nav-text">Generate P.O</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="po_list.php">
											<span class="nav-text">View P.O</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- query -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-help-rhombus"></i>
							<span class="nav-text">Query</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="query.php">
										<span class="nav-text">Add Query</span>
									</a>
								</li>

								<li class="">
									<a class="sidenav-item-link" href="query_list.php">
										<span class="nav-text">Query List</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>

</html>