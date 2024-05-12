<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.3.67/css/materialdesignicons.min.css" integrity="sha512-nRzny9w0V2Y1/APe+iEhKAwGAc+K8QYCw4vJek3zXhdn92HtKt226zHs9id8eUq+uYJKaH2gPyuLcaG/dE5c7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Document</title>
</head>
<body>
	

<!-- LEFT MAIN SIDEBAR -->
<div class="ec-left-sidebar ec-bg-sidebar">
			<div id="sidebar" class="sidebar ec-sidebar-footer">

				<div class="ec-brand">
					<a href="index.php" title="Ekka">
						<!-- <img class="ec-brand-icon" src="assets/img/logo/ec-site-logo.png" alt="" /> -->
						<span class="ec-brand-name text-truncate">Admin</span>
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

						<!-- Vendors -->
						<!-- <li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-account-group-outline"></i>
								<span class="nav-text">Vendors</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="vendor-card.php">
											<span class="nav-text">Vendor Grid</span>
										</a>
									</li>

									<li class="">
										<a class="sidenav-item-link" href="vendor-list.php">
											<span class="nav-text">Vendor List</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="vendor-profile.php">
											<span class="nav-text">Vendors Profile</span>
										</a>
									</li>
								</ul>
							</div>
						</li> -->

						<!-- Users -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-account-group"></i>
								<span class="nav-text">User Details</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
									<li>
										<a class="sidenav-item-link" href="user_details.php">
											<span class="nav-text">All Users</span>
										</a>
                                        <a class="sidenav-item-link" href="active_users.php">
											<span class="nav-text">Active Users</span>
										</a>
                                        <a class="sidenav-item-link" href="inactive_users.php">
											<span class="nav-text">Inactive Users</span>
										</a>
									</li>

									<!-- <li class="">
										<a class="sidenav-item-link" href="user-list.php">
											<span class="nav-text">User List</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="user-profile.php">
											<span class="nav-text">Users Profile</span>
										</a>
									</li> -->
								</ul>
							</div>
							<hr>
						</li>

						<!-- Category -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-dns-outline"></i>
								<span class="nav-text">Categories</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="main-category.php">
											<span class="nav-text">All Categories</span>
										</a>
									</li>
								</ul>
							</div>
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
										<a class="sidenav-item-link" href="product-list.php">
											<span class="nav-text">View Products</span>
										</a>
									</li>
									<!-- <li class="">
										<a class="sidenav-item-link" href="product-grid.php">
											<span class="nav-text">Grid Product</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-detail.php">
											<span class="nav-text">Product Detail</span>
										</a>
									</li> -->
								</ul>
							</div>
						</li>
						<!--Vendor Product -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-palette-advanced"></i>
								<span class="nav-text"> Vendor Products</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
									<!-- <li class="">
										<a class="sidenav-item-link" href="product-add.php">
											<span class="nav-text">Add Product</span>
										</a>
									</li> -->
									<li class="">
										<a class="sidenav-item-link" href="vendor_product-list.php">
											<span class="nav-text">View Products</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="vendor-admin-product_list.php">
											<span class="nav-text">Product List</span>
										</a>
									</li>
									</ul>
							</div>
						</li>

						<!-- Orders -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-cart"></i>
								<span class="nav-text">Orders</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="new_order.php">
											<span class="nav-text">Order Details</span>
										</a>
									</li>
									<!-- <li class="">
										<a class="sidenav-item-link" href="order-history.php">
											<span class="nav-text">Order History</span>
										</a>
									</li> -->
									<!-- <li class="">
										<a class="sidenav-item-link" href="order-detail.php">
											<span class="nav-text">Order Detail</span>
										</a>
									</li> -->
									<li class="">
										<a class="sidenav-item-link" href="invoice.php">
											<span class="nav-text">Invoice</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<!-- invoice and po -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-star"></i>
								<span class="nav-text">Vendor Policy</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
								<li class="">
										<a class="sidenav-item-link" href="referfeesadd.php">
											<span class="nav-text">Referral Fees [Add]</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="referfees_list.php">
											<span class="nav-text">Referral Fees [List]</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="FBA_feesadd.php">
											<span class="nav-text">Closing Fees [FBA] Add</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="FBA_feeslist.php">
											<span class="nav-text">Closing Fees [FBA] list</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="shipfeesadd.php">
											<span class="nav-text">Shipping Fees [Add]</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="shipfeeslist.php">
											<span class="nav-text">Shipping Fees [List]</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="weightfeesadd.php">
											<span class="nav-text">Weight Handling Fees[Add]</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="weightfeeslist.php">
											<span class="nav-text">Weight Handling Fees[List]</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="otherfeesadd.php">
											<span class="nav-text">Other Fees [Add]</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="otherfeeslist.php">
											<span class="nav-text">Other Fees [List]</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<!--t&c-->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-star"></i>
								<span class="nav-text">Vendor T&C</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="term_cond.php">
											<span class="nav-text">Add T&C</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="term_list.php">
											<span class="nav-text">List T&C</span>
										</a>
									</li>
									</ul>
							</div>
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

						<!-- contact us -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-pen"></i>
								<span class="nav-text">Questions</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="all_questions.php">
											<span class="nav-text">All Questions</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<!-- get in touch -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-alert-box"></i>
								<span class="nav-text">Get in Touch</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="get_in_touch.php">
											<span class="nav-text">All Queries</span>
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