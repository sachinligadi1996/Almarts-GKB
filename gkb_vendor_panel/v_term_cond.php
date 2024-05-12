<?php
session_start();

include("db.php");
$vendor = $_SESSION['$vendor'];
// if($vendor == true)
// {

// }
// else
// {
//     header('location:adminlogin.php');
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:35 GMT -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

	<title>Gangotri Ganga</title>

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

	<!-- ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

	<!-- FAVICON -->
	<!-- <link href="assets/img/favicon.png" rel="shortcut icon" /> -->

	<!-- sweet alert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="sweetalert2.all.min.js"></script>
	<script src="sweetalert2.min.js"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">
	<style type="text/css">
		p{
			font-size:18px; 
			font-weight: 400; 
			margin-top: 20px;
		}
		h3{
			margin-top: 25px;
		}

	</style>

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
         <?php
                               
                                $sql = "SELECT * FROM `term_cond`";
                                $execute = mysqli_query($conn, $sql);
                                $total = mysqli_num_rows($execute);
                                $show1 = mysqli_fetch_assoc($execute);
                                ?>
			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div>
					<h1>Term & Condition</h1>
					</div>
					<h3>heading 1</h3>
					<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p><b><?php echo $show1['first_input']; ?></b></p>
					<p>A bowler or fielder asking the umpire to dismiss the batter, usually by shouting 'howzat' (how's that?). Variations include 'howzee' (how's he?), or simply turning to the umpire and cheering.[8] The umpire cannot give a batter out unless the fielding side appeals, even if the criteria for a dismissal have otherwise been met.[5] Batters who are obviously out (e.g. bowled or indisputably caught) will normally walk from the field without waiting for an appeal.</p>
					<p>The trophy for the England v Australia Test match series.[5] The Ashes originated as a result of a satirical obituary published in a British newspaper, The Sporting Times, in 1882 after a match at The Oval in which Australia beat England on an English ground for the first time. The obituary stated that English cricket had died, and the body would be cremated and the ashes taken to Australia. The English press dubbed the next English tour to Australia (1882–83) as the quest to regain The Ashes. During that tour a small terracotta urn was presented to England captain Ivo Bligh by a group of Melbourne women. The urn is reputed to contain the ashes of one or two bails.[5]</p>
					<p>A bowler or fielder asking the umpire to dismiss the batter, usually by shouting 'howzat' (how's that?). Variations include 'howzee' (how's he?), or simply turning to the umpire and cheering.[8] The umpire cannot give a batter out unless the fielding side appeals, even if the criteria for a dismissal have otherwise been met.[5] Batters who are obviously out (e.g. bowled or indisputably caught) will normally walk from the field without waiting for an appeal.</p>
					<h3>Heading 2</h3>
					<p>The trophy for the England v Australia Test match series.[5] The Ashes originated as a result of a satirical obituary published in a British newspaper, The Sporting Times, in 1882 after a match at The Oval in which Australia beat England on an English ground for the first time. The obituary stated that English cricket had died, and the body would be cremated and the ashes taken to Australia. The English press dubbed the next English tour to Australia (1882–83) as the quest to regain The Ashes. During that tour a small terracotta urn was presented to England captain Ivo Bligh by a group of Melbourne women. The urn is reputed to contain the ashes of one or two bails.[5]</p>
				<hr style="height:2px;border-width:0;color:gray;background-color:gray;margin-top: 50px;">

				<p>A bowler or fielder asking the umpire to dismiss the batter, usually by shouting 'howzat' (how's that?). Variations include 'howzee' (how's he?), or simply turning to the umpire and cheering.[8] The umpire cannot give a batter out unless the fielding side appeals, even if the criteria for a dismissal have otherwise been met.[5] Batters who are obviously out (e.g. bowled or indisputably caught) will normally walk from the field without waiting for an appeal.</p>
					<p>The trophy for the England v Australia Test match series.[5] The Ashes originated as a result of a satirical obituary published in a British newspaper, The Sporting Times, in 1882 after a match at The Oval in which Australia beat England on an English ground for the first time. The obituary stated that English cricket had died, and the body would be cremated and the ashes taken to Australia. The English press dubbed the next English tour to Australia (1882–83) as the quest to regain The Ashes. During that tour a small terracotta urn was presented to England captain Ivo Bligh by a group of Melbourne women. The urn is reputed to contain the ashes of one or two bails.[5]</p>
					<p>A bowler or fielder asking the umpire to dismiss the batter, usually by shouting 'howzat' (how's that?). Variations include 'howzee' (how's he?), or simply turning to the umpire and cheering.[8] The umpire cannot give a batter out unless the fielding side appeals, even if the criteria for a dismissal have otherwise been met.[5] Batters who are obviously out (e.g. bowled or indisputably caught) will normally walk from the field without waiting for an appeal.</p>
					<h3>Heading 3</h3>
					<p>The trophy for the England v Australia Test match series.[5] The Ashes originated as a result of a satirical obituary published in a British newspaper, The Sporting Times, in 1882 after a match at The Oval in which Australia beat England on an English ground for the first time. The obituary stated that English cricket had died, and the body would be cremated and the ashes taken to Australia. The English press dubbed the next English tour to Australia (1882–83) as the quest to regain The Ashes. During that tour a small terracotta urn was presented to England captain Ivo Bligh by a group of Melbourne women. The urn is reputed to contain the ashes of one or two bails.[5]</p>
					<p>A bowler or fielder asking the umpire to dismiss the batter, usually by shouting 'howzat' (how's that?). Variations include 'howzee' (how's he?), or simply turning to the umpire and cheering.[8] The umpire cannot give a batter out unless the fielding side appeals, even if the criteria for a dismissal have otherwise been met.[5] Batters who are obviously out (e.g. bowled or indisputably caught) will normally walk from the field without waiting for an appeal.</p>
					<p>The trophy for the England v Australia Test match series.[5] The Ashes originated as a result of a satirical obituary published in a British newspaper, The Sporting Times, in 1882 after a match at The Oval in which Australia beat England on an English ground for the first time. The obituary stated that English cricket had died, and the body would be cremated and the ashes taken to Australia. The English press dubbed the next English tour to Australia (1882–83) as the quest to regain The Ashes. During that tour a small terracotta urn was presented to England captain Ivo Bligh by a group of Melbourne women. The urn is reputed to contain the ashes of one or two bails.[5]</p>
					<p>A bowler or fielder asking the umpire to dismiss the batter, usually by shouting 'howzat' (how's that?). Variations include 'howzee' (how's he?), or simply turning to the umpire and cheering.[8] The umpire cannot give a batter out unless the fielding side appeals, even if the criteria for a dismissal have otherwise been met.[5] Batters who are obviously out (e.g. bowled or indisputably caught) will normally walk from the field without waiting for an appeal.</p>
					<p>The trophy for the England v Australia Test match series.[5] The Ashes originated as a result of a satirical obituary published in a British newspaper, The Sporting Times, in 1882 after a match at The Oval in which Australia beat England on an English ground for the first time. The obituary stated that English cricket had died, and the body would be cremated and the ashes taken to Australia. The English press dubbed the next English tour to Australia (1882–83) as the quest to regain The Ashes. During that tour a small terracotta urn was presented to England captain Ivo Bligh by a group of Melbourne women. The urn is reputed to contain the ashes of one or two bails.[5]</p>
					<p><b><?php echo $show1['second_input']; ?></b></p>
					<h3>Heading 4</h3>
					<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<hr style="height:2px;border-width:0;color:gray;background-color:gray;margin-top: 50px;">
					<h3> Heading 6</h3>
					<p>A bowler or fielder asking the umpire to dismiss the batter, usually by shouting 'howzat' (how's that?). Variations include 'howzee' (how's he?), or simply turning to the umpire and cheering.[8] The umpire cannot give a batter out unless the fielding side appeals, even if the criteria for a dismissal have otherwise been met.[5] Batters who are obviously out (e.g. bowled or indisputably caught) will normally walk from the field without waiting for an appeal.</p>
					<p>The trophy for the England v Australia Test match series.[5] The Ashes originated as a result of a satirical obituary published in a British newspaper, The Sporting Times, in 1882 after a match at The Oval in which Australia beat England on an English ground for the first time. The obituary stated that English cricket had died, and the body would be cremated and the ashes taken to Australia. The English press dubbed the next English tour to Australia (1882–83) as the quest to regain The Ashes. During that tour a small terracotta urn was presented to England captain Ivo Bligh by a group of Melbourne women. The urn is reputed to contain the ashes of one or two bails.[5]</p>
					<p>A bowler or fielder asking the umpire to dismiss the batter, usually by shouting 'howzat' (how's that?). Variations include 'howzee' (how's he?), or simply turning to the umpire and cheering.[8] The umpire cannot give a batter out unless the fielding side appeals, even if the criteria for a dismissal have otherwise been met.[5] Batters who are obviously out (e.g. bowled or indisputably caught) will normally walk from the field without waiting for an appeal.</p>
					<h3>Heading 2</h3>
					<p>The trophy for the England v Australia Test match series.[5] The Ashes originated as a result of a satirical obituary published in a British newspaper, The Sporting Times, in 1882 after a match at The Oval in which Australia beat England on an English ground for the first time. The obituary stated that English cricket had died, and the body would be cremated and the ashes taken to Australia. The English press dubbed the next English tour to Australia (1882–83) as the quest to regain The Ashes. During that tour a small terracotta urn was presented to England captain Ivo Bligh by a group of Melbourne women. The urn is reputed to contain the ashes of one or two bails.[5]</p>
					<p><b><?php echo $show1['third_input']; ?></b></p>
						<p>A bowler or fielder asking the umpire to dismiss the batter, usually by shouting 'howzat' (how's that?). Variations include 'howzee' (how's he?), or simply turning to the umpire and cheering.[8] The umpire cannot give a batter out unless the fielding side appeals, even if the criteria for a dismissal have otherwise been met.[5] Batters who are obviously out (e.g. bowled or indisputably caught) will normally walk from the field without waiting for an appeal.</p>
					<p>The trophy for the England v Australia Test match series.[5] The Ashes originated as a result of a satirical obituary published in a British newspaper, The Sporting Times, in 1882 after a match at The Oval in which Australia beat England on an English ground for the first time. The obituary stated that English cricket had died, and the body would be cremated and the ashes taken to Australia. The English press dubbed the next English tour to Australia (1882–83) as the quest to regain The Ashes. During that tour a small terracotta urn was presented to England captain Ivo Bligh by a group of Melbourne women. The urn is reputed to contain the ashes of one or two bails.[5]</p>

				<hr style="height:2px;border-width:0;color:gray;background-color:gray;margin-top: 50px;">
				

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

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
	

</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 11:00:36 GMT -->

</html>



