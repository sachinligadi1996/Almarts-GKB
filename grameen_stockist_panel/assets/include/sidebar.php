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


	<style>
		@keyframes blink {
			0% {
				transform: scale(1);
				opacity: 1;
			}

			50% {
				transform: scale(1.2);
				opacity: 0.5;
			}

			100% {
				transform: scale(1);
				opacity: 1;
			}
		}

		.blink-badge {
			animation: blink 2s infinite;
			/* You can adjust the duration and iteration as needed */
		}
	</style>

</head>

<body>


	<!-- LEFT MAIN SIDEBAR -->
	<div class="ec-left-sidebar ec-bg-sidebar">
		<div id="sidebar" class="sidebar ec-sidebar-footer">

			<div class="ec-brand">
				<a href="index.php" title="Ekka">
					<!-- <img class="ec-brand-icon" src="assets/img/logo/ec-site-logo.png" alt="" /> -->
					<span class="ec-brand-name text-truncate">Stockist</span>
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
							<i class="mdi mdi-account-circle"></i>
							<span class="nav-text">Profile</span> <b class="caret"></b>
						</a>
					</li>

					<!-- Products -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-package"></i>
							<span class="nav-text">Self Inventory</span> <b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="inventory_add.php">
										<span class="nav-text">Add Inventory</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="inventory_all_list.php">
										<span class="nav-text">Inventory List</span>
									</a>
								</li>
							</ul>
						</div>
					</li>

					<li class="has-sub">
						<a class="sidenav-item-link" href="dis_inv.php">
							<i class="mdi mdi-truck"></i>
							<span class="nav-text">Distributor Inventory</span> <b class="caret"></b>
						</a>
					</li>


					<li class="has-sub">
						<a class="sidenav-item-link" href="invoice.php">
							<i class="mdi mdi-receipt"></i>
							<span class="nav-text">Invoice</span> <b class="caret"></b>
						</a>
					</li>



					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-cart-outline"></i>
							<span class="nav-text">
								Order
								<span class="badge badge-pill badge-primary blink-badge">New</span>
							</span>
							<b class="caret"></b>
						</a>
						<div class="collapse">
							<ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="add_order.php">
										<span class="nav-text">Add Order</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="order_list.php">
										<span class="nav-text">Order List</span>
									</a>
								</li>
							</ul>
						</div>
					</li>



					<!-- Business Details -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="javascript:void(0)">
							<i class="mdi mdi-domain"></i>
							<span class="nav-text">Business Details</span> <b class="caret"></b>
						</a>
						<div class="collapse" id="businessDetailsSubMenu"><!-- Added ID for the collapse element -->
							<ul class="sub-menu" data-parent="#sidebar-menu">
								<li class="">
									<a class="sidenav-item-link" href="business_details.php">
										<span class="nav-text">Stockist Details</span>
									</a>
								</li>
								<li class="">
									<a class="sidenav-item-link" href="business_list.php">
										<span class="nav-text">Details List</span>
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