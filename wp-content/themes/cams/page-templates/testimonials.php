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
		$posts = wp_count_posts('testimonial');
//		echo "<pre>"; print_r($posts); echo "</pre>";
		$posts = $posts->publish;
		$count = 1;
		while ( $loop->have_posts() ) : $loop->the_post();
			$content = explode(' ', get_the_content());
			//echo "<pre>"; print_r($content); echo "</pre>";
			if($count%2 === 0):
				echo '<div class="second">';
			else:
				echo '<div class="first">';
			endif;
		?>

				<div class="title"><?php the_title(); ?></div>
				<div class="quote" id="quote<?php echo $count; ?>">
					<?php
						$i = 0;
						foreach($content as $words):
							echo $words.' ';
							$i++;
							if($i===25):
							 echo '</div><div class="full-quote collapse" id="demo'.$count.'">';
							endif;
						endforeach;
					?>

				</div>
				<button type="button" class="btn" data-toggle="collapse" data-target="#demo<?php echo $count; ?>">Show More</button>
			</div>
	<?php
		$count++;
		endwhile;
	?>
	</div>
</section>
<?php get_footer(); ?>