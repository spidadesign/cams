<?php
/*
Template Name: Home
*/
get_header();
?>
<ul class="home-slider">
  <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/slider/image1.jpg" title="Boston's Leading Demolition Contractor & Dumpster Rental"></li>
  <li><img src="<?php bloginfo('template_directory'); ?>/assets/images/slider/image2.jpg" title="Boston's Leading Demolition Contractor & Dumpster Rental"></li>
</ul>
<div class="main">
	<div class="container">
		<div class="col-md-8">
			<?php echo apply_filters('the_content', get_post()->post_content); ?>
		</div>
		<div class="col-md-4 sidebar">
			<div class="first">
				Call <span>Now</span> For<br> A Free Estimate
			</div>
			<div class="second">
				<button class="btn btn-default">
					(978) 694-8911
				</button>
			</div>
			<div class="third">
				<strong>Cam's Demolition & Disposal Inc.,</strong>
				8 Jewel Drive, Wilmington, MA 01887
			</div>
			<div class="fourth">
				<span>Office Hours</span>
				Monday through Friday<br>
				7:00 AM to 5:00 PM
			</div>
			<div class="fifth">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/payments.png" alt="Social Placeholder" class="img-responsive">
			</div>
		</div>
	</div>
</div>
<div class="info container">
	<section class="col-md-4">
		<div class="title">Residential Demolition</div>
		<div class="content">
			<div class="col-md-6">
				- Rubbish Removal<br>
				- Junk Removal
			</div>
			<div class="col-md-6">
				- Clean - Outs<br>
				- Interior Gutting
			</div>
		</div>
		<a class="btn btn-primary">Learn More</a>
	</section>
	<section class="col-md-4">
		<div class="title">Commercial Demolition</div>
		<div class="content">
			<div class="col-md-6">
				- Apartments<br>
				- Offices
			</div>
			<div class="col-md-6">
				- Warehouses<br>
				- Retail
			</div>
		</div>
		<a class="btn btn-primary">Learn More</a>
	</section>
	<section class="col-md-4">
		<div class="title">Dumpster Rentals</div>
		<div class="content">
			<div class="col-md-6">
				- Same Day Service<br>
				- Free Delivery
			</div>
			<div class="col-md-6">
				- Free Pickup<br>
				- Low Prices
			</div>
		</div>
		<a class="btn btn-primary">Learn More</a>
	</section>
</div>
<?php get_footer(); ?>
