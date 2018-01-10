<?php
  $ns_background_image = get_field('ns_background_image');
?>

<!-- Numbers -->
<div id="numbers" class="section sm-padding">

  <!-- Background Image -->
  <div class="bg-img" style="background-image: url('<?php echo $ns_background_image['url']; ?>');">
    <div class="overlay"></div>
  </div>
  <!-- /Background Image -->

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <?php
        $query = new WP_Query(array(
          'post_type' => 'numbers_post_type',
          'order' => 'ASC'
        ));

        if ($query->have_posts()):
          while ($query->have_posts()): $query->the_post();

          $npt_icon = get_field('npt_icon');
      ?>
      <!-- number -->
      <div class="col-sm-3 col-xs-6">
        <div class="number">
          <i class="<?php echo $npt_icon; ?>"></i>
          <h3 class="white-text"><span class="counter"><?php the_title(); ?></span></h3>
          <span class="white-text"><?php echo get_the_content(); ?></span>
        </div>
      </div>
      <!-- /number -->

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
<!-- /Numbers -->
