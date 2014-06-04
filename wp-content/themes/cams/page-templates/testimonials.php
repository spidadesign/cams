<?php
	/*
	Template Name: Testimonials

	*/
	get_header();
	$testimonials = array(
		'post_type' => 'testimonial',
		'posts_per_page' => -1
		);
?>
<section class="call-us">
	Call <span>(978) 694-8911</span>
		<div>
			For a Demolition Quote <span>Today</span>
		</div>
</section>
<section class="top-content">
	<div class="container">
		<p><?php echo apply_filters('the_content', get_post()->post_content); ?></p>
	</div>
</section>
<section class="testimonials">
	<div class="container">
	<?php
		wp_reset_query();
		$loop = new WP_Query( $testimonials );
		$count = 1;
		while ( $loop->have_posts() ) : $loop->the_post();
		//echo "<pre>"; print_r($loop); echo "</pre>";
		if($count%2 === 0):
	?>
		<div class="second">
				<div class="title"><?php the_title(); ?></div>
				<div class="quote"><?php the_content(); ?></div>
			</div>
	</div>
	<?php else: ?>
		<div class="row">
			<div class="first">
				<div class="title"><?php the_title(); ?></div>
				<div class="quote"><?php the_content(); ?></div>
			</div>
	<?php
		endif;
		$count++;
		endwhile;
	?>
	</div>
</section>
<?php get_footer(); ?>