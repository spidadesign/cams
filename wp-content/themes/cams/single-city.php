<?php
	/*
	Template Name: Single City

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
<section class="testimonials">
	<div class="container">
	<?php
		wp_reset_query();
		$test = array();
		$custom = get_post_meta(get_the_ID());

		unset($custom['_edit_last']);
		unset($custom['_edit_lock']);
		$count = 1;
		foreach($custom as $key => $value):
		if($count%2 === 0):
	?>
		<div class="second">
				<div class="title"><?php echo $key; ?></div>
				<div class="quote"><?php echo $value[0]; ?></div>
			</div>
		</div>
	<?php else: ?>
		<div class="row">
			<div class="first">
				<div class="title"><?php echo $key; ?></div>
				<div class="quote"><?php echo $value[0]; ?></div>
			</div>
	<?php
		endif;
		$count++;
		endforeach;
	?>
	</div>
</section>
<?php get_footer(); ?>