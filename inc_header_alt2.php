 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SIJAMAS</title>
<meta name="description" content="">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<!--Style-->
<!--link rel="stylesheet" href="css/reset.css"-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<!--link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"-->
<link href="css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="js/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bxslider/4.1.1/jquery.bxslider.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/material-kit.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/media1024.css"/>
<link rel="stylesheet" type="text/css" href="css/media768.css"/>
<link rel="stylesheet" type="text/css" href="css/media480.css"/>
<link rel="stylesheet" type="text/css" href="css/media320.css"/>
<!--link rel="stylesheet" href="css/style-temp.css"-->

<!--js-->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.js"></script>
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bxslider/4.1.1/plugins/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/source/jquery.fancybox.js?v=2.1.5"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/material.min.js"></script>
<script src="js/material-kit.js" type="text/javascript"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bxslider/4.1.1/jquery.bxslider.js"></script>
<!--CDN link for  TweenMax-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>

<script src="js/js_lib.js"></script>
<script src="js/js_run.js"></script>
</head>
<body>
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]--> 

<!-- header -->
<header id="mainheader">
	<div class="top-header">
		<div class="wrapper">
			<div class="left logo-top">
				<div id="logo-mobile" class="main-logo"><a href="index.php"><img  src="images/material/logo.png"></a></div>
				<!--div class="text-logo">
					<span class="text-l1">Sistem Informasi Kerjasama Standarisasi dan Penilaian Kesesuaian (SIJAMAS)</span>
					<span class="text-l2">Badan Strandarisasi Nasional</span>
					<span class="text-l3">National Standardization Agency of Indonesia</span>
				</div-->
			</div><!--end.left-->
			<div class="right text-right search-top">
				<div class="right-head">
					<div class="login-mn-row">
						<a href="#login" class="login popup">Login</a>
						<a href="#forgot" class="blue_ref popup">Lupa Password?</a>
						<a href="#pencarianLanjut" class="blue_ref popup">Pencarian Lanjutan</a>
					</div>

					<div class="search-row">
						<input type="text" id="search" class="form-control" name="" placeholder="Search">
						<a href="#" class="searchTrigger"><i class="fa fa-search" aria-hidden="true"></i></a>
					</div>
				</div>
			</div><!--end.right-->
		</div>
	</div><!--end.top-header-->
	<div class="bottom-header">
		<div class="wrapper">
			<div id="logo-desktop" class="main-logo"><a href="index.php"><img  src="images/material/logo.png"></a></div>

			<a href="#" id="trigger-menu">Menu</a>
			<div id="menu-desktop" class="main-menu">
				<ul>
					<li><a href="index.php" <?php if($page == 'home') { echo "class=active"; } ?> >Home</a></li>
					<li><a href="profile.php" <?php if($page == 'profile') { echo "class=active"; } ?>>Profile</a></li>
					<li><a href="usulan-kerjasama.php" <?php if($page == 'usulan') { echo "class=active"; } ?>>Usulan Kerjasama</a></li>
					<li class="sub-menu-parent">
						<a href="#" <?php if($page == 'kerjasama') { echo "class=active"; } ?>>Kategori Kerjasama</a>
						<ul class="sub-menu">
				         <li><a href="kerjasama1.php">Kerjasama Dalam Negeri</a></li>
				         <li><a href="kerjasama2.php">Kerjasama Luar Negeri</a></li>
				       </ul>
					</li>
					<li><a href="kontak.php" <?php if($page == 'kontak') { echo "class=active"; } ?>>Kontak Kami</a></li>
				</ul>
			</div>
			<div id="mobile-menu" class="main-menu-mobile">
				<ul>
					<li><a href="index.php" <?php if($page == 'home') { echo "class=active"; } ?> >Home</a></li>
					<li><a href="profile.php" <?php if($page == 'profile') { echo "class=active"; } ?>>Profile</a></li>
					<li><a href="usulan-kerjasama.php" <?php if($page == 'usulan') { echo "class=active"; } ?>>Usulan Kerjasama</a></li>
					<li class="sub-menu-parent">
						<a href="#" <?php if($page == 'kerjasama') { echo "class=active"; } ?>>Kategori Kerjasama</a>
						<ul class="sub-menu">
				         <li><a href="kerjasama1.php">Kerjasama Dalam Negeri</a></li>
				         <li><a href="kerjasama2.php">Kerjasama Luar Negeri</a></li>
				       </ul>
					</li>
					<li><a href="kontak.php" <?php if($page == 'kontak') { echo "class=active"; } ?>>Kontak Kami</a></li>
				</ul>
				<div class="search-mobile">
					<div class="login-mn-row">
						<a href="#login" class="login popup">Login</a>
						<a href="#forgot" class="blue_ref popup">Lupa Password?</a>
						<a href="#pencarianLanjut" class="blue_ref popup">Pencarian Lanjutan</a>
					</div>
					<div class="search-row">
						<input type="text" id="search" class="form-control" name="" placeholder="Search">
						<a href="#" class="searchTrigger"><i class="fa fa-search" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div><!--end.bottom-header-->
</header>
<!-- end of header -->