<?php
/*
Template Name: Contact
*/
get_header();
?>
<section class="banner-overlay hidden-xs">
	<div class="container">
		<div class="text">
			"Your call to our office will be answered direct by our in house dumpster<br>
			rental dispatchers. All calls are picked up live. No answering machines"
		</div>
		<div class="prez">
			<span>~ Paul Cammarata</span>, President
		</div>
	</div>
</section>
<section class="contact container">
	<h1 class="visible-xs">Contact Us</h1>
	<div class="col-md-6 left">
		<span>Hours</span>
		Monday through Friday<br>
		7:00 AM to 5:00 PM
		<div class="address">
			<span>Offices Cam's Demolition & Disposal, Inc.<span>
			8 Jewel Drive Wilmington, MA 01887
		</div>
		<div class="phone">
			<span>978.694.8911 Sales</span>
			<span>800.684.0023 Toll Free</span>
			<span>978.694.7607 Fax</span>
			<a href="mailto:sales@dumpster-rentals.com">sales@dumpster-rentals.com</a>
		</div>
	</div>
	<div class="col-md-6 form form-horizontal">
		<?php echo do_shortcode('[contact-form-7 id="34" title="Contact Form"]'); ?>
	</div>
</section>
<section class="staff">
	<div class="container">
		<h2>Executive Directors</h2>
		<div class="row">
			<div class="important-peeps col-md-6 col-xs-12">
				Paul Cammarata, President
				<span>phone: 978.694.8911 (ext. 12) mail: paul@dumpster-rentals.com</span>
			</div>
			<div class="important-peeps col-md-6 col-sm-12 col-xs-12">
				Bob Cammarata, V.P Operations
				<span>phone: 978.694.8911 (ext. 15) mail: bob@dumpster-rentals.com</span>
			</div>
		</div>
		<div class="higher-ups row">
			<div class="col-md-12 col-xs-12">
				Michele Percival, Office Manager
				<span>phone: 978.694.8911 (ext. 16) mail: michele@dumpster-rentals.com</span>
			</div>
			<div class="col-md-6 col-xs-12">
				Laurie, Dumpster Rentals
				<span>phone: 978.694.8911 (ext. 10) mail: laurie@dumpster-rentals.com</span>
			</div>
			<div class="col-md-6 col-xs-12">
				Joe DiMarzio, Demolition Estimator
				<span>phone: 978.694.8911 (ext. 14)    mail: joe@dumpster-rentals.com</span>
			</div>
		</div>
	</div>
</section>
<?php get_footer() ?>