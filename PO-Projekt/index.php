<?php
include_once "lib/DB.php";


use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "po-projekt");

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
<!--
Mercury travel - free HTML5 templates!
by Awe7 (http://awe7.com/freebies)
-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="assets/fonts/fontawesome/font-awesome.min.css">
		<!-- Vendors-->
		<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/grid.css">
		<link rel="stylesheet" type="text/css" href="assets/vendors/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" type="text/css" href="assets/vendors/swiper/swiper.css">
		<link rel="stylesheet" type="text/css" href="assets/vendors/jquery.select2/select2.css">
		<link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
		<!-- App & fonts-->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
		<link rel="stylesheet" type="text/css" id="app-stylesheet" href="assets/css/main.css"><!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->

        <style>
            .card {
                border: 1px solid #ccc;
                padding: 10px;
                margin: 10px;
                text-align: center;
            }

            .card h1 {
                margin-top: 10px;
            }

            .card img {
                width: 300px;
                height: 200px;
                margin-bottom: 10px;
            }
        </style>

	</head>
	
	<body>
		<div class="page-wrap" id="root">
			
			<!-- header -->
			<header class="header awe-skin-dark header--fixed">
				<div class="container-fluid pd-0">
					<div class="header__inner">
						<div class="header__logo_menu_wrap">
							<div class="header__logo"><a href="index.php"><img src="assets/img/logo-white.png" alt=""/></a></div>
							<div class="header__menu">
								
								<!-- onepage-nav -->
								<nav class="onepage-nav">
									
									<!-- onepage-menu -->
									<ul class="onepage-menu">
										<li class="current-menu-item"><a href="index.php">Home</a>
										</li>

										<li><a href="admin/login.php">Login</a>

										</li>
									</ul><!-- onepage-menu -->
									
									<div class="navbar-toggle"><span></span><span></span><span></span></div>
								</nav><!-- End / onepage-nav -->
								
							</div>
						</div>
						<div class="header__hotline_book_wrap">
							<div class="header__lang"><a href="#" style="color: red"><span>EN</span><i class="fa fa-angle-down"></i></a>
								<ul class="header__lang_box">
									<li><a href="#"><img src="assets/img/flag/flag_vn.png"/><span>VN</span></a></li>
									<li><a href="#"><img src="assets/img/flag/flag_en.jpg"/><span>EN</span></a></li>
								</ul>
							</div>
							<div class="header__hotline"><span><i class="fa fa-phone"></i>Hotline</span><a href="#" style="color: red">1900 8668</a></div>
							<div class="header__booking">
								<a class="md-btn md-btn--primary md-btn--pill " href="#">Booking now
								</a>
							</div>
						</div>
					</div>
				</div>
			</header><!-- End / header -->
			
			<!-- Content-->
			<div class="md-content">

				<!-- hero -->


				<!-- Section -->
				<section class="awe-section bg-gray">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1 ">
								
								<!-- title -->
								<div class="title">
									<h2 class="title__title">Welcome to <span class='main-color'>Mercury</span><br /> We've been pioneering unique journeys in<br /> <span class='main-color'>Asia</span> for more than two decades.</h2>
									<p class="title__text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
								</div><!-- End / title -->
								
							</div>




							<div class="col-md-12 col-lg-12 ">
                                <?php
                                $countries = $db->getCountriesPage();

                                foreach ($countries as $countryName => $imageURL){
                                    echo '<div class="card">';
                                    echo '<h1>'.$countryName.'</h1>';
                                    echo '<img src="'.$imageURL.'" alt="'.$countryName.', too long image url or empty image url ">';
                                    echo '</div>';
                                }
                                ?>


							</div>
						</div>
					</div>
				</section>
				<!-- End / Section -->

				
			</div>
			<!-- End / Content-->
			
			<!-- footer -->
			<div class="footer">
				<div class="container">
					<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2  col-xxs-12">
						<h6 class="footer__title">About us</h6>
						
						<!-- widget_list -->
						<div class="widget_list">
							<li><a href="#">SEO Optimization</a></li>
							<li><a href="#">Business Planning</a></li>
							<li><a href="#">Social Media</a></li>
							<li><a href="#">Web Development</a></li>
							<li><a href="#">Taxation Services</a></li>
							<li><a href="#">Content Management</a></li>
							<li><a href="#">Risk Management</a></li>
							<li><a href="#">Social Media</a></li>
						</div><!-- End / widget_list -->
						
					</div>
					<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2  col-xxs-12">
						<h6 class="footer__title">Destinations</h6>
						
						<!-- widget_list -->
						<div class="widget_list">
							<li><a href="#">SEO Optimization</a></li>
							<li><a href="#">Social Media</a></li>
							<li><a href="#">Support Services</a></li>
							<li><a href="#">Suppport Team</a></li>
							<li><a href="#">Content Management</a></li>
							<li><a href="#">Lawyer Consulting</a></li>
							<li><a href="#">Web Development</a></li>
							<li><a href="#">Risk Management</a></li>
						</div><!-- End / widget_list -->
						
					</div>
					<div class="col-md-4 col-lg-4 ">
						<h6 class="footer__title">Travel style</h6>
						
						<!-- widget_list -->
						<div class="widget_list column-2">
							<li><a href="#">Website Design</a></li>
							<li><a href="#">Business Planning</a></li>
							<li><a href="#">Taxation Services</a></li>
							<li><a href="#">Support Services</a></li>
							<li><a href="#">Social Media</a></li>
							<li><a href="#">Market Research</a></li>
							<li><a href="#">Online Marketing</a></li>
							<li><a href="#">SEO Optimization</a></li>
							<li><a href="#">SEO Optimization</a></li>
							<li><a href="#">Taxation Services</a></li>
							<li><a href="#">Email Marketing</a></li>
							<li><a href="#">Brand & Identity</a></li>
							<li><a href="#">Brand & Identity</a></li>
						</div><!-- End / widget_list -->
						
					</div>
					<div class="col-md-4 col-lg-4 ">
						<h6 class="footer__title">Subscribes</h6>
						<p style="opacity:.7;">Receive news and offers from Mundo</p>
						<div class="footer__form_wrapper">
							
							<!-- form-item -->
							<div class="form-item">
								<input class="form-control" type="text" name="input" placeholder="Your email here"/>
							</div><!-- End / form-item -->
							
							
							<!-- form-item -->
							<div class="form-item">
								<a class="md-btn footer__btn_custom" href="#">Subscribe
								</a>
							</div><!-- End / form-item -->
							
						</div>
						<div class="footer__social"><span style="font-size:18px;font-weight:bold;">Let’s Get Social:</span>
							
							<!-- social-icon -->
							<a class="social-icon" href="#"><i class="fa fa-facebook"></i>
							</a><!-- End / social-icon -->
							
							
							<!-- social-icon -->
							<a class="social-icon" href="#"><i class="fa fa-twitter"></i>
							</a><!-- End / social-icon -->
							
							
							<!-- social-icon -->
							<a class="social-icon" href="#"><i class="fa fa-linkedin"></i>
							</a><!-- End / social-icon -->
							
							
							<!-- social-icon -->
							<a class="social-icon" href="#"><i class="fa fa-behance"></i>
							</a><!-- End / social-icon -->
							
							
							<!-- social-icon -->
							<a class="social-icon" href="#"><i class="fa fa-vimeo"></i>
							</a><!-- End / social-icon -->
							
						</div>
					</div>
				</div>
			</div><!-- End / footer -->
			
			<div class="footer__wrapper">
				<div class="container">
					<p class="footer__copy">2018 &copy; Copyright <a href="http://awe7.com">Mecury Travel</a>. Free template by <a href="http://awe7.com">Awe7</a>.</p><span class="footer__backtotop" id="back-to-top"> <i class="fa fa-arrow-up"></i>Back to top</span>
				</div>
			</div>
		</div>
		<!-- Vendors-->
		<script type="text/javascript" src="assets/vendors/_jquery/jquery.min.js"></script>
		<script type="text/javascript" src="assets/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/isotope-layout/isotope.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery-one-page/jquery.nav.min.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.easing/jquery.easing.min.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
		<script type="text/javascript" src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="assets/vendors/masonry-layout/masonry.pkgd.js"></script>
		<script type="text/javascript" src="assets/vendors/swiper/swiper.jquery.js"></script>
		<script type="text/javascript" src="assets/vendors/menu/menu.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery.select2/select2.js"></script>
		<script type="text/javascript" src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
		<!-- App-->
		<script type="text/javascript" src="assets/js/main.js"></script>
	</body>
</html>