<!DOCTYPE html>
<html>

<head>
	<!-- Site made with Mobirise Website Builder v4.8.2, https://mobirise.com -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="generator" content="Mobirise v4.8.2, mobirise.com">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="shortcut icon" href="assets/images/bookcor-122x122.jpg" type="image/x-icon">
	<meta name="description" content="Web Site Builder Description">
	<title>members</title>
	<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
	<link rel="stylesheet" href="assets/tether/tether.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="assets/dropdown/css/style.css">
	<link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
	<link rel="stylesheet" href="assets/theme/css/style.css">
	<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
	<script src="scripts/jquery.js"></script>
	<script>
		setInterval("my_function();", 2000);
        function my_function(){
            $('#update').load(members.php + '#members');
        }
  </script>



</head>

<body>
	<section class="menu cid-r3Z9PAe6Wn" once="menu" id="menu2-j">



		<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-toggleable-sm bg-color transparent">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<div class="menu-logo">
				<div class="navbar-brand">
					<span class="navbar-logo">
						<a href="home.php">
							<img src="assets/images/bookcor-122x122.jpg" alt="Mobirise" title="" style="height: 3.8rem;">
						</a>
					</span>
					<span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="home.php.php">Luma</a></span>
				</div>
			</div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
					<li class="nav-item">
						<a class="nav-link link text-black display-4" href="home.php">Home</a>
					</li>
					<li class="nav-item"><a class="nav-link link text-black display-4" href="add_book.php">Add E-book</a></li>
					<li class="nav-item"><a class="nav-link link text-black display-4" href="pin_home.php">Create Pin</a></li>
					<li class="nav-item"><a class="nav-link link text-black display-4" href="members.php">View Readers</a></li>
					
				</ul>

			</div>
		</nav>
	</section>

	<section class="engine"><a href="https://mobiri.se/c">site builder</a></section>
	<section class="section-table cid-r4rSC0h17j mbr-parallax-background" id="table1-k">



		<div class="container container-table">
			<h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong>
					LUMA Members</strong></h2>
			<h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-4">View the users of the <strong>Luma</strong></h3>
			<div class="table-wrapper">
				<div id="update"></div>
				<div class="container scroll" id="member">
					<table class="table isSearch" cellspacing="0">
						<thead>
							<tr class="table-heads ">
								<th class="head-item mbr-fonts-style display-7">
									Name</th>
								<th class="head-item mbr-fonts-style display-7">Contact</th>
								<th class="head-item mbr-fonts-style display-7">Username</th>
								<th class="head-item mbr-fonts-style display-7">Password</th>
							</tr>
						</thead>

						<tbody>
							<?php
								include "phpScript/lumacon.php";
								$sql = "SELECT * FROM luma_users WHERE userLevel = '0' ORDER BY id ASC";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo "<tr>";
										echo "<td class='body-item mbr-fonts-style display-7'>".$row["name"]."</td>
												<td class='body-item mbr-fonts-style display-7'>".$row["contact"]."</td>
												<td class='body-item mbr-fonts-style display-7'>".$row["username"]."</td>
												<td class='body-item mbr-fonts-style display-7'>".$row["password"]."</td>";
										echo "</tr>";
									}
								}
							?>

						</tbody>
					</table>
				</div>
				<div class="container table-info-container">
					<div class="row info">
						<div class="col-md-6">
							<div class="dataTables_info mbr-fonts-style display-7">
								<span class="infoBefore">Showing</span>
								<span class="inactive infoRows"></span>
								<span class="infoAfter">entries</span>
								<span class="infoFilteredBefore">(filtered from</span>
								<span class="inactive infoRows"></span>
								<span class="infoFilteredAfter"> total entries)</span>
							</div>
						</div>
						<div class="col-md-6"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section once="" class="cid-r4G37qCoJ7" id="footer6-t">





		<div class="container">
			<div class="media-container-row align-center mbr-white">
				<div class="col-12">
					<p class="mbr-text mb-0 mbr-fonts-style display-7">
						© Copyright 2018 LUMA - All Rights Reserved
					</p>
				</div>
			</div>
		</div>
	</section>


	<script src="assets/web/assets/jquery/jquery.min.js"></script>
	<script src="assets/popper/popper.min.js"></script>
	<script src="assets/tether/tether.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/dropdown/js/script.min.js"></script>
	<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
	<script src="assets/datatables/jquery.data-tables.min.js"></script>
	<script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
	<script src="assets/parallax/jarallax.min.js"></script>
	<script src="assets/smoothscroll/smooth-scroll.js"></script>
	<script src="assets/theme/js/script.js"></script>


</body>

</html>
