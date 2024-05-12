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
					<span class="ec-brand-name text-truncate">ALLY_MD</span>
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
					<!-- Admin -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-account-group"></i>
							<span class="nav-text">Admin</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="add_admin.php">
										<span class="nav-text">Add Admin</span>
									</a>
								</li>

								<li class="">
									<a class="sidenav-item-link" href="admin_list.php">
										<span class="nav-text">Admin List</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<!-- Vendors -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-account-group-outline"></i>
							<span class="nav-text">Vendors</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="vendor_add.php">
										<span class="nav-text">Add Vendor</span>
									</a>
								</li>

								<li class="">
									<a class="sidenav-item-link" href="vendor_list.php">
										<span class="nav-text">Vendor List</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<!-- Vendors -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-pac-man"></i>
							<span class="nav-text">Users</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="user_active.php">
										<span class="nav-text">Membership Users</span>
									</a>
								</li>

								<li class="">
									<a class="sidenav-item-link" href="user_inactive.php">
										<span class="nav-text">Normal Users</span>
									</a>
								</li>
							</ul>
						</div>
					</li>

					<li class="has-sub">
						<a class="sidenav-item-link" href="genology.php">
							<i class="mdi mdi-pac-man"></i>
							<span class="nav-text"> Overall Geneology Report</span> <b class="caret"></b>
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
									<a class="sidenav-item-link" href="product-list.php">
										<span class="nav-text">List Product</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<!-- MTO & RSP OVERALL  -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-palette-advanced"></i>
							<span class="nav-text text-wrap">M.T.O - plan </span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="membership_plan.php">
										<span class="nav-text">Add Active Membership</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="membership_list.php">
										<span class="nav-text">List</span>
									</a>
								</li>
								
							</ul>
						</div>
					</li>
					<!-- UID's Coupen and Benifits -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-palette-advanced"></i>
							<span class="nav-text text-wrap">UID's Coupen's and Benifits </span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="uid_coupons.php">
										<span class="nav-text">Add UID's Coupens</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="uid_coupon_list.php">
										<span class="nav-text">List</span>
									</a>
								</li>
								
							</ul>
						</div>
					</li>

<!-- Reffered Income structure -->
<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-palette-advanced"></i>
							<span class="nav-text text-wrap">Reffered Income Structure </span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="ref_income.php">
										<span class="nav-text">Add Reffered Income Structure </span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="ref_income_list.php">
										<span class="nav-text">List</span>
									</a>
								</li>
								
							</ul>
						</div>
					</li>



					<!-- Membership & Payout Forms -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-palette-advanced"></i>
							<span class="nav-text text-wrap">Membership & Payout Forms</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="mpayout-forms.php">
										<span class="nav-text">Add</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="mpayout-forms-list.php">
										<span class="nav-text">List</span>
									</a>
								</li>
								
							</ul>
						</div>
					</li>

					<!-- TO Targets -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-palette-advanced"></i>
							<span class="nav-text text-wrap">Turn Over Targets</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="turn-over-targets.php">
										<span class="nav-text">Add</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="turn-over-targets-list.php">
										<span class="nav-text">List</span>
									</a>
								</li>
								
							</ul>
						</div>
					</li>

					<!-- TO Balancesheet -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-palette-advanced"></i>
							<span class="nav-text text-wrap">Turn Over Balancesheet</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="turn-over-tsheet.php">
										<span class="nav-text">Add</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="turn-over-tsheet-list.php">
										<span class="nav-text">List</span>
									</a>
								</li>
								
							</ul>
						</div>
					</li>
					<!-- Commission Structure -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-palette-advanced"></i>
							<span class="nav-text text-wrap">Gross T.O Structure [Active Members]</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="commision.php">
										<span class="nav-text">Add</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="commision-list.php">
										<span class="nav-text">List</span>
									</a>
								</li>
								
							</ul>
						</div>
					</li>
					<!-- Payout Reports -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-palette-advanced"></i>
							<span class="nav-text text-wrap">Revenue Sharing Plans [RSP]</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="personal-payment.php">
										<span class="nav-text">Add</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="payment-list.php">
										<span class="nav-text">List</span>
									</a>
								</li>
								
							</ul>
						</div>
					</li>
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-palette-advanced"></i>
							<span class="nav-text text-wrap">BONUS T.O.</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="addbonus.php">
										<span class="nav-text">Add</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="bonus_list.php">
										<span class="nav-text">List</span>
									</a>
								</li>
								
							</ul>
						</div>
					</li>

					<!-- TO Sharing Plan -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-palette-advanced"></i>
							<span class="nav-text text-wrap">Level Income Plan(M.T.O)</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="to-sharing-plan.php">
										<span class="nav-text">Add</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="to-sharing-plan-list.php">
										<span class="nav-text">List</span>
									</a>
								</li>
								
							</ul>
						</div>
					</li>

					<!-- branches -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-dns-outline"></i>
							<span class="nav-text">Add Retailers</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="branch_add.php">
										<span class="nav-text">New Retailer</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="branch_list.php">
										<span class="nav-text">View Retailer</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<!-- Sales Manager -->
					<!-- <li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-currency-usd"></i>
							<span class="nav-text">Sales manager</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="sales_manag_add.php">
										<span class="nav-text">New sales Manager</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="sales_manag_list.php">
										<span class="nav-text">View</span>
									</a>
								</li>
							</ul>
						</div>
					</li> -->
					
					<!-- Sales Manager -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-pen"></i>
							<span class="nav-text">Profile</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="add_md.php">
										<span class="nav-text">New MD</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="view_md.php">
										<span class="nav-text">View MD</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="add_bank.php">
										<span class="nav-text">Add Bank Details</span>
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