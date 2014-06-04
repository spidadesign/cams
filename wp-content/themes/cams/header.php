<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo get_bloginfo('name');  wp_title(); ?></title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/plugins/jquery.bxslider/jquery.bxslider.css">
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/stylesheets/styles.css">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico" />
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body <?php body_class($class); ?>>
	<div class="top-header hidden-sm hidden-xs">
		<div class="container">
			<div class="col-md-3">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="Cam's Demo">
				</a>
			</div>
			<div class="col-md-5 phone">
				Call Now For A Free Estimate <span>(978) 694-8911</span>
			</div>
			<div class="col-md-4 social">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53566a0a492fe796"></script>
				<!-- AddThis Button END -->
			</div>
		</div>
	</div>
	<div class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand hidden-md hidden-lg" href="<?php echo site_url(); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="Social Placeholder" class="img-responsive">
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="container">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo site_url(); ?>/residential-demolition">Residential Demolition</a></li>
						<li><a href="#">Commercial Demolition</a></li>
						<li><a href="#">Dumpster Rentals</a></li>
						<li><a href="<?php echo site_url(); ?>/testimonials">Testimonials</a></li>
						<li><a href="<?php echo site_url(); ?>/contact">Contact Us</a></li>
					</ul>
				</div>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</div>

	<?php
		$curr_page = get_post();
		if($curr_page->ID !== 5):
	?>
	<section class="banner">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/banner.jpg" class="img-responsive">
	</section>
	<?php endif; ?>