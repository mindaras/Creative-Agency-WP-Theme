<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Creative_Agency
 */

?>

<!-- Blog -->
<div id="blog" class="section md-padding">

	<!-- Container -->
	<div class="container">

		<!-- Row -->
		<div class="row">

			<!-- Main -->
			<main id="main" class="col-md-9">
				<div class="blog">
					<div class="blog-img">
						<?php
							$image_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
						?>
						<img class="img-responsive" src="<?php get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo $image_alt; ?>">
					</div>
					<div class="blog-content">
						<ul class="blog-meta">
							<li><i class="fa fa-user"></i><?php the_author(); ?></li>
							<li><i class="fa fa-clock-o"></i><?php the_date('j M'); ?></li>
							<li><i class="fa fa-comments"></i><?php get_comments_number(0, 1, '%'); ?></li>
						</ul>
						<h3><?php the_title(); ?></h3>
						<p><?php echo get_the_content(); ?></p>
					</div>

					<!-- blog tags -->
					<div class="blog-tags">
						<h5>Tags :</h5>
						<a href="#"><i class="fa fa-tag"></i>Web</a>
						<a href="#"><i class="fa fa-tag"></i>Design</a>
						<a href="#"><i class="fa fa-tag"></i>Marketing</a>
						<a href="#"><i class="fa fa-tag"></i>Development</a>
						<a href="#"><i class="fa fa-tag"></i>Branding</a>
						<a href="#"><i class="fa fa-tag"></i>Photography</a>
					</div>
					<!-- blog tags -->

					<!-- blog author -->
					<div class="blog-author">
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="./img/author.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="media-heading">
									<h3>Joe Doe</h3>
									<div class="author-social">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
									</div>
								</div>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
							</div>
						</div>
					</div>
					<!-- /blog author -->

				</div>
			</main>
			<!-- /Main -->

		</div>
		<!-- /Row -->

	</div>
	<!-- /Container -->

</div>
<!-- /Blog -->
