<?php
  $se_title = get_field('se_title');
?>

<!-- Service -->
	<div id="service" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title"><?php echo $se_title; ?></h2>
				</div>
				<!-- /Section header -->

        <?php
          $query = new WP_Query(array(
            'post_type' => 'service_post_type',
            'order' => 'ASC'
          ));

          if ($query->have_posts()):
            while ($query->have_posts()): $query->the_post();
              $se_icon = get_field('se_icon');
        ?>

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="<?php echo $se_icon; ?>"></i>
						<h3><?php the_title(); ?></h3>
						<p><?php echo get_the_content(); ?></p>
					</div>
				</div>
				<!-- /service -->

        <?php
            endwhile;
          endif;
          wp_reset_query();
        ?>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->
