<?php
ob_start();
if (!isset($_SESSION)) {
	session_start();

}


if(empty($_SESSION['admin-id'])){

		header("location:../home-1.php#portal");
	}else{
		$conn = mysqli_connect("localhost","root","","charity");
		$id=$_SESSION['admin-id'];
		$query="SELECT * FROM admin WHERE admin_id='{$id}'";
		$data=mysqli_query($conn,$query);
		$row =mysqli_fetch_assoc($data);
	}


?><!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<!--
	 loading
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Admin Start...
			</div>
		</div>
	</div>
-->

	<div class="header">
		
			<div class="col-md-4">
			</div>
			<div class="col-md-8  ">
				<h2 class="pt-3 text-danger">welcome <?php echo $row['admin_name']; ?></h2>

			</div>
			
			
		
		
	</div>


	<div class="left-side-bar ">
		
		<div class="menu-block customscroll mt-5 ">
			<div class="sidebar-menu pt-5">
				<ul id="accordion-menu ">
					<li class="dropdown">
						<a href="manage-admin.php" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="">manage admin</span>
						</a>
						
					</li>
					<li class="dropdown">
						<a href="manage-charity.php" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="">manage charity</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="manage-doner.php" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="mtext">manage Doner</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="manage-category.php" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="mtext">manage Category</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="manage-cases.php" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="mtext">manage Cases</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="manage-contact.php" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="mtext">Contact Us</span>
						</a>
					</li>	
					
					<li class="dropdown">
						<a href="logout-admin.php" class="dropdown-toggle">
							<span class="mtext">Log out <i class="icon-copy dw dw-logout-2"></i></span>
						</a>
					</li>				
	
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="https://kit.fontawesome.com/bbe243f847.js" crossorigin="anonymous"></script>
</body>
</html>