<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>
<!DOCTYPE html>
<html lang="en" > 
<head>
	<meta charset="utf-8">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="title" content="Falcon Ind Security Service">
	<title><?php echo(get_custom_title_tag()); ?></title>
	
	
	<meta name="language" content="English">
	<meta name="revisit-after" content="10 days">
	<meta name="googlebot" content="index, follow">
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php get_site_url(); ?>data/uploads/whatsapp.png" />
	<meta property="og:title" content="Falcon Ind Security Service" />
	<meta property="og:description" content="Falcon (Ind) Security Service, would like to introduce ourselves as one of the leading security service providers established in 2010." />
	<meta property="og:url" content="http://www.fissweb.com" />
	<meta property="og:site_name" content="Falcon Ind Security Service" />
	
	<!-- Favicons -->
	<link href="data/uploads/favicon.png" rel="icon">
	<link href="data/uploads/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php get_theme_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/assets/css/style.css" rel="stylesheet">

	<?php get_header(); ?>
	
</head> 
<body id="<?php get_page_slug(); ?>" >
	<section id="topbar" class="d-none d-lg-block">
		<div class="container d-flex">
		  <div class="contact-info mr-auto">
			<i class="icofont-envelope"></i><a href="mailto:<?php get_website_custom_field('email-id') ?>"><?php get_website_custom_field('email-id') ?></a>
			<i class="icofont-phone"></i><a href="tel:<?php get_website_custom_field('phone') ?>"> <?php get_website_custom_field('phone') ?></a>
		  </div>
		  <div class="social-links">
			<a target="_blank" href="<?php get_website_custom_field('fb') ?>" class="facebook"><i class="icofont-facebook"></i></a>
			<a target="_blank" href="<?php get_website_custom_field('tw') ?>" class="twitter"><i class="icofont-twitter"></i></a>
			<a target="_blank" href="<?php get_website_custom_field('insta') ?>" class="instagram"><i class="icofont-instagram"></i></a>
			<a target="_blank" href="<?php get_website_custom_field('in') ?>" class="linkedin"><i class="icofont-linkedin"></i></i></a>
			<a target="_blank" href="https://api.whatsapp.com/send?phone=<?php get_website_custom_field('whatsapp') ?>" class="linkedin"><i class="icofont-whatsapp"></i></i></a>
		  </div>
		</div>
	</section>
	<header id="header">
		<div class="container d-flex">

		  <div class="logo mr-auto">
			<a href="<?php get_site_url(); ?>"><img src="data/uploads/logo.png" alt="Falcon Ind Security Service Hosur" title="Falcon Ind Security Service Hosur" class="img-fluid"></a>
		  </div>

		  <nav class="nav-menu d-none d-lg-block">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about-us.html">About Us</a></li>	
				<li><a href="our-services.html">Our Services</a></li>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li><a href="contact-us.html">Contact Us</a></li>
			</ul>
		  </nav>
		</div>
	</header>
	
	