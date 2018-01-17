<!-- Testimonial -->
<div id="testimonial" class="section md-padding">

  <!-- Background Image -->
  <div class="bg-img" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/background3.jpg');">
    <div class="overlay"></div>
  </div>
  <!-- /Background Image -->

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <!-- Testimonial slider -->
      <div class="col-md-10 col-md-offset-1">
        <div id="testimonial-slider" class="owl-carousel owl-theme">

          <?php
            $query = new WP_Query(array(
              'post_type' => 'testimonial_post_typ',
              'order' => 'ASC'
            ));

            if ($query->have_posts()):
              while ($query->have_posts()): $query->the_post();
          ?>

          <?php
            $tpt_position = get_field('tpt_position');
          ?>

          <!-- testimonial -->
          <div class="testimonial">
            <div class="testimonial-meta">
              <?php
                if (has_post_thumbnail($post->ID)) {
                  the_post_thumbnail();
                }
              ?>
              <h3 class="white-text"><?php the_title(); ?></h3>
              <span><?php $tpt_position; ?></span>
            </div>
            <p class="white-text"><?php echo get_the_content(); ?></p>
          </div>
          <!-- /testimonial -->

          <?php
              endwhile;
            endif;
            wp_reset_query();
          ?>

        </div>
      </div>
      <!-- /Testimonial slider -->

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</div>
<!-- /Testimonial -->
