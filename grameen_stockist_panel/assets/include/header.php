<!-- Header -->
<?php
//session_start();
include("db.php"); // Assuming you have a valid database connection in this file

$s = "SELECT * FROM `stockist_details`";
$qury_run = mysqli_query($conn, $s);

// Fetching data from the first row (assuming there's only one stockist details)
if ($row = mysqli_fetch_assoc($qury_run)) {
    $branchManager = $row['vendor_name'];
    $branchMail = $row['vendor_mail'];
}
?>

<!-- HTML content starts here -->
<header class="ec-main-header" id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <!-- <button id="sidebar-toggler" class="sidebar-toggle"></button> -->
        <!-- search form -->
        <div class="search-form d-lg-inline-block">
            <!-- ... (your search form content) ... -->
        </div>
        
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
                            <div class="d-inline-block">
                                <?php echo $branchManager; ?>
                                <small class="pt-1"><?php echo $branchMail; ?></small>
                            </div>
                        </li>
                        <li>
                            <a href="user-profile.php">
                                <i class="mdi mdi-account"></i> My Profile
                            </a>
                        </li>
                        <li class="dropdown-footer">
                            <a href="logout.php"><i class="mdi mdi-logout"></i> Log Out </a>
                        </li>
                    </ul>
                </li>

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
