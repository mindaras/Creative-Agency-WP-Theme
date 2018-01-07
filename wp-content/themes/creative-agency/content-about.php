<?php
  $ab_title = get_field('ab_title');
?>

<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title"><?php echo $ab_title; ?></h2>
				</div>
				<!-- /Section header -->

        <?php
        $query = new WP_Query(array(
          'post_type' => 'about_post_type'
        ));

        if ($query->have_posts()):
        ?>

        <?php while ($query->have_posts()): $query->the_post(); ?>

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-cogs"></i>
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
            <?php
              $ab_button_text = get_field('ab_button_text');
              $ab_button_link = get_field('ab_button_link');
              if (!empty($ab_button_text)):
            ?>
						<a href="<?php echo $ab_button_link; ?>" target="_blank"><?php echo  $ab_button_text; ?></a>
            <?php endif; ?>
					</div>
				</div>
				<!-- /about -->

      <?php endwhile; ?>

      <?php endif; wp_reset_query(); ?>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->
