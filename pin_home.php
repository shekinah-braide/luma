<!DOCTYPE html>
<html>

<head>
	<!-- Site made with Mobirise Website Builder v4.8.2, https://mobirise.com -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="generator" content="Mobirise v4.8.2, mobirise.com">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="shortcut icon" href="assets/images/bookcor-122x122.jpg" type="image/x-icon">
	<meta name="description" content="Website Builder Description">
	<title>pin_home</title>
	<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
	<link rel="stylesheet" href="assets/tether/tether.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="assets/dropdown/css/style.css">
	<link rel="stylesheet" href="assets/theme/css/style.css">
	<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="scripts/sweetalert2.css">
	<script type="text/javascript" src="scripts/sweetalert2.js"></script>
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script src='scripts/pin.js' type="text/javascript"></script>


</head>

<body>
	<section class="menu cid-r57vhWEodY" once="menu" id="menu2-m">



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
					<span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="home.php">Luma</a></span>
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
					<li class="nav-item">
						<a class="nav-link link text-black display-4" href="https://mobirise.com"></a>
					</li>
				</ul>

			</div>
		</nav>
	</section>

	<section class="engine"><a href="https://mobiri.se/t">free amp template</a></section>
	<section class="mbr-section form4 cid-r57v9Lds2v mbr-parallax-background" id="form4-l">



		<br><br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<table class="table isSearch" cellspacing="0">
						<thead>
							<tr class="table-heads ">
								<th class="head-item mbr-fonts-style display-7">
									S/N</th>
								<th class="head-item mbr-fonts-style display-7">Registration Code</th>
								<th class="head-item mbr-fonts-style display-7">Pin Status</th>
							</tr>
						</thead>

						<tbody>
							<?php
								include "phpScript/lumacon.php";
								$sql = "SELECT * FROM luma_codes ORDER BY id ASC";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
										echo "<tr>";
										echo "<td class='body-item mbr-fonts-style display-7'>".$row["id"]."</td>
												<td class='body-item mbr-fonts-style display-7'>".$row["reg_code"]."</td>
												<td class='body-item mbr-fonts-style display-7'>".$row["pin_info"]."</td>";
										echo "</tr>";
									}
								}
							?>

						</tbody>
					</table>
				</div>
				<div class="col-md-7">
					<h2 class="pb-3 align-left mbr-fonts-style display-2">Create a Registration Pin</h2>
					<div>
						<div class="icon-block pb-3">
							<span class="icon-block__icon">
								<span class="mbr-iconfont mbri-lock" style="color: rgb(204, 41, 82);"></span>
							</span>
							<h4 class="icon-block__title align-left mbr-fonts-style display-4"><span style="font-style: normal;">Create unique registration pin for each <strong>LUMA</strong> user. Also view your created registration pins by the LHS of this page</span></h4>
						</div>

					</div>
					<div data-form-type="formoid">
						<div data-form-alert="" hidden="">Thanks for filling out the form!</div>
						<form class="block mbr-form">
							<div class="row">
								<div class="col-md-8">
									<input type="text" class="form-control input" name="reg_code" id="reg_code" value="LUMA/18/_____" required="" id="email-form4-l">
									<input type="hidden" class="form-control input" name="pin_info" id="pin_info" value="Free">
								</div>
								<div class="col-md-4">
									<button type="button" id="btnGenerate" onclick='generator();' class="btn btn-form btn-secondary display-4" style='padding:1.3em;'>Generate pin</button>
								</div>
								<div class="col-md-12">
									<button type="button" id="pinBtn" onclick='sendtoServer();' class="btn btn-form btn-secondary display-4">Submit Pin</button>
								</div>
								<div class="input-group-btn col-md-12" style="margin-top: 10px;"></div>
							</div>
						</form>
					</div>
				</div>
				<br><br>
			</div>
		</div>
	</section>

	<section once="" class="cid-r57viFLtRB" id="footer6-n">





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
	<script src="assets/smoothscroll/smooth-scroll.js"></script>
	<script src="assets/dropdown/js/script.min.js"></script>
	<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
	<script src="assets/parallax/jarallax.min.js"></script>
	<script src="assets/theme/js/script.js"></script>
	<script src="assets/formoid/formoid.min.js"></script>


</body>

</html>
