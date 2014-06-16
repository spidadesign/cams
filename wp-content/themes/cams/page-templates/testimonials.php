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
		$count = 0;

		//Get post count
		$postCount = $loop->post_count;

		//Determine if post count is even or odd
		if($postCount%2 === 1):
			//Subtract 1 from $postCount and divide by 2
			$colCounter = ($postCount+1)/2;
		else:
			$colCounter = $postCount/2;
		endif;
		?>
		
		<?
		while ( $loop->have_posts() ) : $loop->the_post();
			$content = explode(' ', get_the_content());

			//if count = 0, start the first column
			if($count === 0):
				echo '<div class="col-md-6">';
			elseif($count === $colCounter):
				//if count = halfway point, end first column and start second
				echo '</div><div class="col-md-6">';
			endif;
		?>
			<div class="row">
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
				<button type="button" class="btn show-more" data-toggle="collapse" data-target="#demo<?php echo $count; ?>">Show More</button>
			</div>
	<?php
			$count++;
		endwhile;
	?>
	</div>
	</div>
</section>
<?php get_footer(); ?>