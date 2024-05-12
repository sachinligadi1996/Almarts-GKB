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
					<span class="ec-brand-name text-truncate">Retailer</span>
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



					<!-- inventory -->
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

					<!-- <li class="has-sub">
						<a class="sidenav-item-link" href="tree.php">
							<i class="mdi mdi-dns-outline"></i>
							<span class="nav-text">GENOGY REPORT</span> <b class="caret"></b>
						</a>
					</li> -->
					<li class="has-sub">
						<a class="sidenav-item-link" href="new_order.php">
							<i class="mdi mdi-dns-outline"></i>
							<span class="nav-text">NEW ORDER</span> <b class="caret"></b>
						</a>
					</li>
					<li class="has-sub">
						<a class="sidenav-item-link" href="new_delivery_person.php">
							<i class="mdi mdi-dns-outline"></i>
							<span class="nav-text text-wrap">Add Delivery Person</span> <b class="caret"></b>
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