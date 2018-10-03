<?php
include "./phpScript/lumacon.php";

if (isset($_SESSION["user_id"])) {
    $StudentID = $_SESSION['user_id'];

    $sql = "SELECT * FROM luma_users WHERE id = '$StudentID'";
    $result = $conn->query($sql) or die("Failed");
    $rows = $result->fetch_assoc();
  
  //$_SESSION["username"] = $rows["username"];

    $name = $rows["name"];
}

?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/bookcor-122x122.jpg" type="image/x-icon">
  <meta name="description" content="Site Builder Description">
  <title>books</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="scripts/sweetalert2.css">
	<script type="text/javascript" src="scripts/sweetalert2.js"></script>
	<script type="text/javascript" src="scripts/jquery.js"></script>
  
  
</head>
<body>
  <section class="menu cid-r4GmEFe1O0" once="menu" id="menu2-n">

    

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
                    <a href="index.php">
                        <img src="assets/images/bookcor-122x122.jpg" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="index.php">Luma</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" onclick="logout(); ">Logout</a>
                </li><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="https://mobirise.com"></a>
                </li></ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobiri.se/g">how to build your own site for free</a></section><section class="features16 cid-r4GnfJlnlP mbr-parallax-background" id="features16-r">
    
    
    
    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">
            Hi, <?php echo $name ?></h2>
        <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-4">
            Welcome to <strong>LUMA Bookshelf</strong>, click to read any book for free!</h3>
        <div class="row media-row">
            
        <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/screenshot-20180919-223604-476x617.png" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <a href= "ebooks/1.pdf"><p class="mbr-fonts-style display-4"><strong>
                           READ</strong></p></a>
                    </div>
                    <div class="item-role px-2">
                        <p>Unleash Your Purpose</p>
                    </div>
                    
                </div>
            </div><div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/screenshot-20180919-223630-461x606.png" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-4"><strong>
                           READ</strong></p>
                    </div>
                    <div class="item-role px-2">
                        <p>The Interceeding Christian</p>
                    </div>
                    
                </div>
            </div><div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/screenshot-20180919-224034-471x617.png" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-4"><strong>
                           READ</strong></p>
                    </div>
                    <div class="item-role px-2">
                        <p>Disability &amp; the Sovereign goodness of God</p>
                    </div>
                    
                </div>
            </div><div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/screenshot-20180919-223820-476x616.png" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-4"><strong>
                           READ</strong></p>
                    </div>
                    <div class="item-role px-2">
                        <p>Destined to Reign</p>
                    </div>
                    
                </div>
            </div></div>    
    </div>
</section>

<section once="" class="cid-r4G2JWWimO" id="footer6-p">

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
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script>
		// testing if sweetalert works
		function start() {
			swal({
				type: 'error',
				title: 'Sorry...',
				text: 'Mobile App still awaiting approval!',
			})
		}

	</script>
	<script>
		// testing if sweetalert works
		function logout() {
			swal({
				title: 'Are you sure?',
				text: "We hate to see you leave",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, logout!',
				showLoaderOnConfirm: true,
			}).then((result)=>{
                if(result.value){
                    swal(
                        'Logging out',
                        'Hope to see you soon',
                        'success',
                        window.location='logout.php',
                    )
                }
            })
		}

	</script>
  
</body>
</html>