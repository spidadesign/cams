<?php
	/*
	Template Name: Services
	*/
	get_header();
?>
<section class="call-us">
	Call <span>(978) 694-8911</span>
		<div>
			For a Demolition Quote <span>Today</span>
		</div>
</section>
<section class="top-content">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<p><?php echo apply_filters('the_content', get_post()->post_content); ?></p>
	</div>
</section>
<section class="middle">
	<div class="container">
		<div class="col-md-6 col-sm-6">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/icon.png">
			<div class="title">Junk Removal</div>
			<p>Cam's 15 and 20 yard dumpsters are ideal for home owners rubbish removal and most home remodeling projects. Our 25 and 30 yard dumpsters are for the larger rubbish removal projects and contractors.g</p>
		</div>
		<div class="col-md-6 col-sm-6">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/icon.png">
			<div class="title">Rubbish Removal</div>
			<p>As a full service demolition contractor we provide rubbish removal for our Boston, MA clients when placing a dumpster on site is not an option. Boston, MA rubbish removal services include labor and "live load" trucking.  Rubbish can be consolidated by you or by our laborers and then removed. We will perform rubbish removal from most anywhere, typically from basements, attics, and yards.  Regular scheduled rubbish removal is available in Boston, MA.</p>
		</div>
		<div class="col-md-6 col-sm-6">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/icon.png">
			<div class="title">Clean - Outs</div>
			<p>Cams' Demolition & Disposal Inc. has laborers and trucks for every situation that may arise with a cleanout.  As a full service demolition contractor we own all of our equipment to provide you with a cost effective cleanout. For cleanouts we have tailgate trucks, ramp trucks, dump trucks, pick-ups and dumpster trucks.  All cleanouts are left broom swept./p>
		</div>
		<div class="col-md-6 col-sm-6">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/icon.png">
			<div class="title">Interior Gutting</div>
			<p>Interior gutting typically involves complete gutting of a building, leaving only the main structural components. Cam's Demolition & Disposal Inc. differentiates themselves from other demolition contractors by dismantling materials in reverse order - last built is first off.  Our crews continually remove the debris while gutting.  This provides a safe and clean work area for our customers and demolition crews.</p>
		</div>
	</div>
</section>
<?php get_footer(); ?>