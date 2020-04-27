<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
$innov_settings = Innovation_Settings();
include('header.inc.php'); 
?>
	<main id="main">
		<section id="breadcrumbs" class="breadcrumbs">
			<div class="container">
				<h1><?php get_page_title(); ?></h1>
			</div>
		</section>
		
		<section id="contact" class="contact">
		  <div class="container">

			<?php get_page_content(); ?>

			<div class="row">

			  <div class="col-lg-6 ">
				<iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50866.41209363167!2d77.77201700213888!3d12.749215141245529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae77c8a61e53c5%3A0xf9dd5f6596a67f59!2sFALCON%20IND%20SECURITY%20SERVICE%20(PSARA)%20Govt.%20Certified%20CAPSI%20Member!5e0!3m2!1sen!2sin!4v1586869270875!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
			  </div>

			  <div class="col-lg-6">
				<form action="forms/contact.php" method="post" role="form" class="php-email-form">
				  <div class="form-row">
					<div class="col form-group">
					  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
					  <div class="validate"></div>
					</div>
					<div class="col form-group">
					  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
					  <div class="validate"></div>
					</div>
				  </div>
				  <div class="form-group">
					<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
					<div class="validate"></div>
				  </div>
				  <div class="form-group">
					<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
					<div class="validate"></div>
				  </div>
				  <div class="mb-3">
					<div class="loading">Loading</div>
					<div class="error-message"></div>
					<div class="sent-message">Your message has been sent. Thank you!</div>
				  </div>
				  <div class="text-center"><button type="submit">Submit</button></div>
				</form>
			  </div>

			</div>

		  </div>
		</section><!-- End Contact Section -->

	  </main>
	
<?php include('footer.inc.php'); ?>