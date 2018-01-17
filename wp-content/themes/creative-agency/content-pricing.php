<?php
  $ps_title = get_field('ps_title');
?>

<!-- Pricing -->
<div id="pricing" class="section md-padding">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <!-- Section header -->
      <div class="section-header text-center">
        <h2 class="title"><?php echo $ps_title; ?></h2>
      </div>
      <!-- /Section header -->

      <?php
        $query = new WP_Query(array(
          'post_type' => 'pricing_post_type',
          'order' => 'ASC'
        ));

        if ($query->have_posts()):
          while($query->have_posts()): $query->the_post()
      ?>

      <?php
        $ppt_price = get_field('ppt_price');
        $ppt_price_duration = get_field('ppt_price_duration');
        $ppt_price_features = get_field('ppt_price_features');
        $ppt_button_text = get_field('ppt_button_text');
        $ppt_button_link = get_field('ppt_button_link');
      ?>


      <!-- pricing -->
      <div class="col-sm-4">
        <div class="pricing">
          <div class="price-head">
            <span class="price-title"><?php the_title(); ?></span>
            <div class="price">
              <h3><?php echo $ppt_price; ?><span class="duration">/ <?php echo $ppt_price_duration; ?></span></h3>
            </div>
          </div>

          <?php echo $ppt_price_features; ?>

          <div class="price-btn">
            <a href="<?php echo $ppt_button_link; ?>" class="outline-btn" target="_blank"><?php echo $ppt_button_text; ?></a>
          </div>
        </div>
      </div>
      <!-- /pricing -->

      <?php
          endwhile;
        endif;
        wp_reset_query();
      ?>

    </div>
    <!-- Row -->

  </div>
  <!-- /Container -->

</div>
<!-- /Pricing -->
