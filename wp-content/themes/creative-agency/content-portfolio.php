<?php
  $po_title = get_field('po_title');
?>

<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title"><?php echo $po_title; ?></h2>
				</div>
				<!-- /Section header -->

        <?php
          $query = new WP_Query(array(
            'post_type' => 'portfolio_post_type',
            'order' => 'ASC'
          ));

          if ($query->have_posts()):
        ?>

        <?php while ($query->have_posts()): $query->the_post(); ?>

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
          <?php if (has_post_thumbnail()):
            $image_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
          ?>
					<img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $image_alt; ?>">
          <?php endif; ?>
					<div class="overlay"></div>
					<div class="work-content">
						<span><?php the_category(); ?></span>
						<h3>  <?php the_title(); ?></h3>
						<div class="work-link">
              <?php
                $po_link_url = get_field('po_link_url');
                if (!empty($po_link_url)):
              ?>
							<a href="<?php echo $po_link_url; ?>"><i class="fa fa-external-link"></i></a>
              <?php endif; ?>
							<a class="lightbox" href="<?php the_post_thumbnail_url(); ?>"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

        <?php endwhile; ?>

        <?php endif; wp_reset_query(); ?>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Portfolio -->
