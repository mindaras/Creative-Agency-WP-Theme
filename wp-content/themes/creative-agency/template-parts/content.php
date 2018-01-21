<?php
/**
 * Template part for displaying posts
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
						<img class="img-responsive" src="<?php the_post_thumbnail_url($post->ID); ?>" alt="<?php echo $image_alt; ?>">
					</div>
					<div class="blog-content">
						<ul class="blog-meta">
							<li><i class="fa fa-user"></i><?php the_author(); ?></li>
							<li><i class="fa fa-clock-o"></i><?php the_date('j M'); ?></li>
							<li><i class="fa fa-comments"></i><?php  echo get_comments_number(0, 1, '%'); ?></li>
						</ul>
						<h3><?php the_title(); ?></h3>
						<p><?php echo get_the_content(); ?></p>
					</div>

					<!-- blog tags -->
					<div class="blog-tags">
						<h5>Tags :</h5>
						<?php
							$post_tags = get_the_tags();

							foreach ($post_tags as $tag) {
								echo '<a href="#"><i class="fa fa-tag"></i>'.$tag->name.'</a>' . "\n";
							}
						?>
					</div>
					<!-- blog tags -->

					<!-- blog author -->
					<div class="blog-author">
						<div class="media">
							<div class="media-left">
								<?php
									$author_id = get_the_author_meta('ID');
									$facebook = get_the_author_meta('facebook', $author_id);
									$twitter = get_the_author_meta('twitter', $author_id);
									$linkedin = get_the_author_meta('linkedin', $author_id);
									$instagram = get_the_author_meta('instagram', $author_id);
									$description = get_the_author_meta('description', $author_id);
								?>
								<img class="media-object" src="<?php echo get_avatar_url($author_id); ?>" alt="Author avatar">
							</div>
							<div class="media-body">
								<div class="media-heading">
									<h3><?php the_author(); ?></h3>
									<div class="author-social">
										<?php if (!empty($facebook)) {
											echo '<a href="'.$facebook.'"><i class="fa fa-facebook"></i></a>';
										} ?>
										<?php if (!empty($twitter)) {
											echo '<a href="'.$twitter.'"><i class="fa fa-twitter"></i></a>';
										} ?>
										<?php if (!empty($linkedin)) {
											echo '<a href="'.$linkedin.'"><i class="fa fa-linkedin"></i></a>';
										} ?>
										<?php if (!empty($instagram)) {
											echo '<a href="'.$instagram.'"><i class="fa fa-instagram"></i></a>';
										} ?>
									</div>
								</div>
								<p><?php echo $description; ?></p>
							</div>
						</div>
					</div>
					<!-- /blog author -->

					<?php comments_template(); ?>

				</div>
			</main>
			<!-- /Main -->

			<!-- Aside -->
			<aside id="aside" class="col-md-3">

				<?php get_sidebar(); ?>

				<!-- Category -->
				<div class="widget">
					<h3 class="title">Category</h3>
					<div class="widget-category">
						<ul>
							<?php wp_list_categories(array(
								'separator' => '',
								'title_li' => ''
							)); ?>
						</ul>
					</div>
				</div>
				<!-- /Category -->

				<!-- Posts sidebar -->
				<div class="widget">
					<h3 class="title">Popular Posts</h3>

					<?php
						$recent_posts = wp_get_recent_posts(array(
							'numberposts' => 3,
							'order' => 'DESC'
						));

						foreach ($recent_posts as $recent_post):
					?>

					<!-- single post -->
					<div class="widget-post">
						<a href="#">
							<img src="<?php echo get_the_post_thumbnail_url($recent_post['ID']); ?>" alt="recent post" class="recent-thumbnail"> <?php echo $recent_post['post_title']; ?>
						</a>
						<ul class="blog-meta">
							<li><?php echo $recent_post['post_date'] ?></li>
						</ul>
					</div>
					<!-- /single post -->
				<?php endforeach; ?>

				</div>
				<!-- /Posts sidebar -->

				<!-- Tags -->
				<div class="widget">
					<h3 class="title">Tags</h3>
					<div class="widget-tags">
						<?php echo get_the_tag_list('', "\n", '', $post->ID); ?>
					</div>
				</div>
				<!-- /Tags -->

			</aside>
			<!-- /Aside -->

		</div>
		<!-- /Row -->

	</div>
	<!-- /Container -->

</div>
<!-- /Blog -->
