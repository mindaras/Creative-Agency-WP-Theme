
<?php
	$fs_logo = get_field('fs_logo');
	$fs_facebook_link = get_field('fs_facebook_link');
	$fa_facebook_url = get_field('fa_facebook_url');
	$fs_twitter_link = get_field('fs_twitter_link');
	$fs_twitter_url = get_field('fs_twitter_url');
	$fs_google_plus_link = get_field('fs_google_plus_link');
	$fs_google_plus_url = get_field('fs_google_plus_url');
	$fs_instagram_link = get_field('fs_instagram_link');
	$fs_instagram_url = get_field('fs_instagram_url');
	$fs_linkedin_link = get_field('fs_linkedin_link');
	$fs_linkedin_url = get_field('fs_linkedin_url');
	$fs_youtube_link = get_field('fs_youtube_link');
	$fs_youtube_url = get_field('fs_youtube_url');
	$fs_copyrights = get_field('fs_copyrights');
?>

<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="<?php echo $fs_logo['url']; ?>" alt="<?php echo $fs_logo['alt']; ?>"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<?php if ($fs_facebook_link[0] == 'added'): ?>
						<li><a href="<?php echo $fa_facebook_url; ?>"><i class="fa fa-facebook"></i></a></li>
						<?php endif; ?>
						<?php if ($fs_twitter_link[0] == 'added'): ?>
						<li><a href="<?php echo $fs_twitter_url; ?>"><i class="fa fa-twitter"></i></a></li>
						<?php endif; ?>
						<?php if ($fs_google_plus_link[0] == 'added'): ?>
						<li><a href="<?php echo $fs_google_plus_url; ?>"><i class="fa fa-google-plus"></i></a></li>
						<?php endif; ?>
						<?php if ($fs_instagram_link[0] == 'added'): ?>
						<li><a href="<?php echo $fs_instagram_url; ?>"><i class="fa fa-instagram"></i></a></li>
						<?php endif; ?>
						<?php if ($fs_linkedin_link[0] == 'added'): ?>
						<li><a href="<?php echo $fs_linkedin_url; ?>"><i class="fa fa-linkedin"></i></a></li>
						<?php endif; ?>
						<?php if ($fs_youtube_link[0] == 'added'): ?>
						<li><a href="<?php echo $fs_youtube_url; ?>"><i class="fa fa-youtube"></i></a></li>
						<?php endif; ?>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p><?php echo $fs_copyrights; ?></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

	<?php wp_footer(); ?>

</body>

</html>
