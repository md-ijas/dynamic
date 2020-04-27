<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>


	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 footer-info">
						<h3>About FISS</h3>
						<p><?php get_component('footer-about-content'); ?></p>
						<div class="social-links mt-3">
							<a target="_blank" href="<?php get_website_custom_field('fb') ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
							<a target="_blank" href="<?php get_website_custom_field('tw') ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
							<a target="_blank" href="<?php get_website_custom_field('insta') ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
							<a target="_blank" href="<?php get_website_custom_field('in') ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
							<a target="_blank" href="https://api.whatsapp.com/send?phone=<?php get_website_custom_field('whatsapp') ?>" class="linkedin"><i class="bx bxl-whatsapp"></i></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="about-us.html">About us</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="our-services.html">Our Services</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="portfolio.html">Portfolio</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="contact-us.html">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Our Location</h4>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50866.41209363167!2d77.77201700213888!3d12.749215141245529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae77c8a61e53c5%3A0xf9dd5f6596a67f59!2sFALCON%20IND%20SECURITY%20SERVICE%20(PSARA)%20Govt.%20Certified%20CAPSI%20Member!5e0!3m2!1sen!2sin!4v1586869270875!5m2!1sen!2sin" width="100%" height="190" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					<div class="col-lg-3 col-md-6 footer-contact">
						<h4>Contact Us</h4>
						<p>
						  <?php get_component('footer-address'); ?><br><br>
						  <strong>Phone:</strong> <a href="tel:<?php get_website_custom_field('phone') ?>"><?php get_website_custom_field('phone') ?></a><br>
						  <strong>Email:</strong> <a href="mailto:<?php get_website_custom_field('email-id') ?>"><?php get_website_custom_field('email-id') ?></a><br>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="copyright">
			&copy; 2020 Copyright <strong><span>Falcon Ind Security Service</span></strong>. All Rights Reserved
			</div>
			<div class="credits">Maintained by <a href="https://www.digitalorbiscreators.org/"><b>DOC LLP</b></a>
			</div>
		</div>
	</footer>

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<script src="<?php get_theme_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php get_theme_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php get_theme_url(); ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?php get_theme_url(); ?>/assets/vendor/php-email-form/validate.js"></script>
	<script src="<?php get_theme_url(); ?>/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
	<script src="<?php get_theme_url(); ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?php get_theme_url(); ?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="<?php get_theme_url(); ?>/assets/vendor/counterup/counterup.min.js"></script>
	<script src="<?php get_theme_url(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?php get_theme_url(); ?>/assets/vendor/venobox/venobox.min.js"></script>

	<script src="<?php get_theme_url(); ?>/assets/js/main.js"></script>

</body>
</html>