	<footer>
		<div class="container">
			<div class="refer col-md-6 col-sm-12 col-xs-12">
				<div class="title">
					Refer A Friend
				</div>
				<div class="text">
					Get a $20 Discount
				</div>
			</div>
			<div class="loyalty col-md-6 col-sm-12 col-xs-12">
				<div class="title">
					Loyalty Program
				</div>
				<div class="text">
					Click Here for a $20 Discount
				</div>
			</div>
			<div class="perks">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/perks/1.png" class="img-responsive">
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/perks/2.png" class="img-responsive">
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/perks/3.png" class="img-responsive">
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/perks/4.png"class="img-responsive">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="social">
				<div class="col-md-6">
					<div class="col-md-4">
						<div class="text">
							Follow Us On
						</div>
					</div>
					<div class="col-md-8">
						<div class="icons">
							<div class="facebook"></div>
							<div class="twiiter"></div>
							<div class="google"></div>
							<div class="youtube"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 map">
					Check for regions we cover
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				&copy; 2014 Cam's Demolition & Disposal Inc. All rights reserved.  8 Jewel Drive, Wilmington, MA 01887
				<div class="link">
					Site by: <a href="#">SEO Image</a>
				</div>
			</div>
		</div>
	</footer>
	<script src="<?php bloginfo('template_directory'); ?>/assets/javascripts/jquery-1.11.1.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/plugins/jquery.bxslider/jquery.bxslider.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/bootstrap/collapse.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/bootstrap/transition.js"></script>
		<script>
			$(document).ready(function(){
				$('.home-slider').bxSlider({
					controls: false,
					captions: true
				});
			});
		</script>
	</body>
</html>