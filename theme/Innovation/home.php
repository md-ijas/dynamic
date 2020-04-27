<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
$innov_settings = Innovation_Settings();
include('header.inc.php'); 
?>
	<section id="hero">
		<div class="hero-container">
			<div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

			<div class="carousel-inner" role="listbox">

			  <!-- Slide 1 -->
			  <div class="carousel-item active" style="background: url(<?php get_website_custom_field('banner1-image') ?>); background-size:cover">
				<div class="carousel-container">
				  <div class="carousel-content">
					<h2 class="animated fadeInDown"><?php get_website_custom_field('banner1-title') ?></h2>
					<a href="about-us.html" class="btn-get-started animated fadeInUp">Read More</a>
				  </div>
				</div>
			  </div>

			  <!-- Slide 2 -->
			  <div class="carousel-item" style="background: url(<?php get_website_custom_field('banner2-image') ?>);background-size:cover">
				<div class="carousel-container">
				  <div class="carousel-content">
					<h2 class="animated fadeInDown"><?php get_website_custom_field('banner2-title') ?></h2>
					<a href="our-services.html" class="btn-get-started animated fadeInUp">Read More</a>
				  </div>
				</div>
			  </div>
			</div>

			<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>

			<a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
			  <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>

		  </div>
		</div>
	</section>
	
	<main id="main">

		<!-- ======= About Section ======= -->
		<section id="about" class="about">
			<div class="container">
				<?php get_page_content(); ?>
			</div>
		</section><!-- End About Section -->
		
		<section id="counts" class="counts">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-4 col-md-4 d-md-flex align-items-md-stretch">
						<div class="count-box">
						  <i class="icofont-simple-smile"></i>
						  <span data-toggle="counter-up"><?php get_website_custom_field('happy-clients') ?></span>
						  <p><strong>Happy Clients</strong> rerum asperiores dolor molestiae doloribu</p>
						</div>
					  </div>
					  <div class="col-lg-4 col-md-4 d-md-flex align-items-md-stretch">
						<div class="count-box">
						  <i class="icofont-google-map"></i>
						  <span data-toggle="counter-up"><?php get_website_custom_field('locations') ?></span>
						  <p><strong>Locations</strong> rerum asperiores dolor molestiae doloribu</p>
						  
						</div>
					  </div>
					  <div class="col-lg-4 col-md-4 d-md-flex align-items-md-stretch">
						<div class="count-box">
						  <i class="icofont-user"></i>
						  <span data-toggle="counter-up"><?php get_website_custom_field('trined-guards') ?></span>
						  <p><strong>Trined Guards</strong> rerum asperiores dolor molestiae doloribu</p>
						</div>
					  </div>
				</div>
			</div>
		</section>
		
		<!-- ======= Services Section ======= -->
		<section id="services" class="services">
		  <div class="container">

			<div class="section-title" data-aos="fade-up">
			  <h2>Our Services</h2>
			</div>
			<div class="row">
			  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
				<div class="icon-box">
				  <img src="<?php get_website_custom_field('services1-image') ?>" width="100%" /><br><br>
				  <h4><a href="our-services.html"><?php get_website_custom_field('services1-title') ?></a></h4>
				  <!--<p class="text-justify"><?php get_website_custom_field('services1-desc') ?></p>-->
				  
				</div>
			  </div>

			  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
				<div class="icon-box">
				  <img src="<?php get_website_custom_field('services2-image') ?>" width="100%" /><br><br>
				  <h4><a href="our-services.html"><?php get_website_custom_field('services2-title') ?></a></h4>
				  <!--<p class="text-justify"><?php get_website_custom_field('services2-desc') ?></p>-->
				  
				</div>
			  </div>

			  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
				<div class="icon-box">
				  <img src="<?php get_website_custom_field('services3-image') ?>" width="100%" /><br><br>
				  <h4><a href="our-services.html"><?php get_website_custom_field('services3-title') ?></a></h4>
				  <!--<p class="text-justify"><?php get_website_custom_field('services3-desc') ?></p>-->
				  
				</div>
			  </div>
				<div class="text-right col-md-12"><br>
					<a href="our-services.html" class="button">View All Services</a>
				</div>
			</div>
			
		  </div>
		</section><!-- End Services Section -->

		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients">
		  <div class="container">

			<div class="section-title">
			  <h2>Clients</h2>
			  <p><?php get_component('home-page-clients-content'); ?></p>
			</div>

			<div class="owl-carousel clients-carousel">
			  <img src="data/uploads/clients/client1.jpg" alt="Clients">
			  <img src="data/uploads/clients/client2.jpg" alt="Clients">
			  <img src="data/uploads/clients/client3.jpg" alt="Clients">
			  <img src="data/uploads/clients/client4.jpg" alt="Clients">
			  <img src="data/uploads/clients/client5.jpg" alt="Clients">
			  <img src="data/uploads/clients/client6.jpg" alt="Clients">
			  <img src="data/uploads/clients/client7.jpg" alt="Clients">
			  <img src="data/uploads/clients/client8.jpg" alt="Clients">
			  <img src="data/uploads/clients/client9.jpg" alt="Clients">
			  <img src="data/uploads/clients/client10.jpg" alt="Clients">
			  <img src="data/uploads/clients/client11.jpg" alt="Clients">
			  <img src="data/uploads/clients/client12.jpg" alt="Clients">
			  <img src="data/uploads/clients/client13.jpg" alt="Clients">
			</div>

		  </div>
		</section><!-- End Clients Section -->

	  </main>
	
<?php include('footer.inc.php'); ?>