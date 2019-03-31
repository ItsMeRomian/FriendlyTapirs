<?php
switch ($_SERVER['PHP_SELF']) {
    case "/index.php":
        $page = 'Home';
        break;
    case "/about.php":
        $page = 'Over ons';
        break;
    case "/portfolio.php":
        $page = 'Portfolio';
        break;
	case "/contact.php":
		$page = 'Contact';
		break;
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>FriendlyTapirs - <?=$page?></title>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="css/style.css?v<?php echo rand(0,99999); ?>">
</head>
<body>
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt="" style="margin-right: 10px;"><span style="font-weight: bold;">FriendlyTapirs</span></a>
					<a class="navbar-brand logo_inner_page" href="index.php"><img src="img/logo2.png" alt=""></a>      
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav">
							<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about.php">Over</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Diensten</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="webdev.php">Webontwikkeling</a></li>
									<li class="nav-item"><a class="nav-link" href="graphicdesign.php">Grafisch design</a></li>
									<li class="nav-item"><a class="nav-link" href="hosting.php">Domeinen en webhosting</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>