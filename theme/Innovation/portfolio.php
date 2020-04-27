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
		<section id="portfolio" class="portfolio">
			<div class="container">
				<?php get_page_content(); ?>
			</div>
		</section>
	</main>
	
<?php include('footer.inc.php'); ?>