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
		<h1><?php the_title();?></h1>
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
				<div class="quote" id="quote<?php echo $count; ?>">
					<?php the_excerpt(); ?>
					<button type="button" class="btn" data-toggle="collapse" data-target="#demo<?php echo $count; ?>">Show More</button>
				</div>
				<div class="full-quote collapse" id="demo<?php echo $count; ?>">
					<?php the_content(); ?>
					<button type="button" class="btn" data-toggle="collapse" data-target="#demo<?php echo $count; ?>">Show Less</button>
				</div>
			</div>

	<?php else: ?>

			<div class="first">
			<div class="title"><?php the_title(); ?></div>
				<div class="quote" id="quote<?php echo $count; ?>">
					<?php the_excerpt(); ?>
					<button type="button" class="btn" data-toggle="collapse" data-target="#demo<?php echo $count; ?>">Show More</button>
				</div>
				<div class="full-quote collapse" id="demo<?php echo $count; ?>">
					<?php the_content(); ?>
					<button type="button" class="btn" data-toggle="collapse" data-target="#demo<?php echo $count; ?>">Show Less</button>
				</div>
			</div>
	<?php
		endif;
		$count++;
		endwhile;
	?>
	</div>
</section>
<?php get_footer(); ?>