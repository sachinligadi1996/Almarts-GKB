<!-- Header -->
<header class="ec-main-header" id="header">
	<nav class="navbar navbar-static-top navbar-expand-lg">
		<!-- Sidebar toggle button -->
		<button id="sidebar-toggler" class="sidebar-toggle"></button>
		<!-- search form -->
		<div class="search-form d-lg-inline-block">
			<!-- <div class="input-group">
				<input type="text" name="query" id="search-input" class="form-control" placeholder="search.." autofocus
					autocomplete="off" />
				<button type="button" name="search" id="search-btn" class="btn btn-flat">
					<i class="mdi mdi-magnify"></i>
				</button>
			</div>
			<div id="search-results-container">
				<ul id="search-results"></ul>
			</div> -->
		</div>
		<?php
		$s = "SELECT * FROM `gkb_branch_detail`";
		$qury_run = mysqli_query($conn, $s);
		while ($row = mysqli_fetch_assoc($qury_run)) {
			?>
			<!-- navbar right -->
			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<!-- User Account -->
					<li class="dropdown user-menu">
						<button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="assets/img/user/user.png" class="user-image" alt="User Image" />
						</button>
						<ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
							<!-- User image -->
							<li class="dropdown-header">
								<!-- <img src="assets/img/user/user.png" class="img-circle" alt="User Image" /> -->
								<div class="d-inline-block">
									<?php echo $row['branch-manager'] ?><small class="pt-1">
										<?php echo $row['branch_mail'] ?>
									</small>
								</div>
							</li>
							<li>
								<a href="user-profile.php">
									<i class="mdi mdi-account"></i> My Profile
								</a>
							</li>
							<!-- <li class="right-sidebar-in">
										<a href="javascript:0"> <i class="mdi mdi-settings-outline"></i> Setting </a>
									</li> -->
							<li class="dropdown-footer">
								<a href="logout.php"> <i class="mdi mdi-logout"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<?php
		}
		?>
				<li class="dropdown notifications-menu custom-dropdown">
					<button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
						<i class="mdi mdi-bell-outline"></i>
					</button>
				</li>
				<li class="right-sidebar-in right-sidebar-2-menu">
					<i class="mdi mdi-settings-outline mdi-spin"></i>
				</li>
			</ul>
		</div>
	</nav>
</header>