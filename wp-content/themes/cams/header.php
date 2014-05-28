<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo get_bloginfo('name');  wp_title(); ?></title>

		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/stylesheets/styles.css">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico" />
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body <?php body_class($class); ?>>