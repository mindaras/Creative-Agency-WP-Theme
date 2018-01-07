<?php
  $fe_title = get_field('fe_title');
  $fe_description = get_field('fe_description');
?>
<!-- Why Choose Us -->
	<div id="features" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title"><?php echo $fe_title; ?></h2>
					</div>
					<p><?php echo $fe_description; ?></p>
          <?php

            $query = new WP_Query(array(
              'post_type' => 'features_post_type',
              'order' => 'ASC'
            ));

            if ($query->have_posts()):
              while ($query->have_posts()): $query->the_post();
          ?>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p><?php echo get_the_content(); ?></p>
					</div>
          <?php endwhile; ?>
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
            <?php
              while ($query->have_posts()): $query->the_post();
                if (has_post_thumbnail()):
                  $image_alt = get_post_meta(get_post_thumbnail_id($post->ID, '_wp_attachment_image_alt', true));
            ?>
						<img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $image_alt; ?>">

            <?php
                endif;
              endwhile;
            ?>
					</div>
				</div>
				<!-- /About slider -->

      <?php endif; wp_reset_query(); ?>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->
