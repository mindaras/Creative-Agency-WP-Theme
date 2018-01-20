<?php
  $cs_title = get_field('cs_title');
?>

<!-- Contact -->
<div id="contact" class="section md-padding">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <!-- Section-header -->
      <div class="section-header text-center">
        <h2 class="title"><?php echo $cs_title; ?></h2>
      </div>
      <!-- /Section-header -->

      <?php
        $query = new WP_Query(array(
          'post_type' => 'contact_post_type',
          'order' => 'ASC'
        ));

        if ($query->have_posts()):
          while ($query->have_posts()): $query->the_post();
      ?>

          <?php
            $cpt_icon = get_field('cpt_icon');
            $cpt_info = get_field('cpt_info');
          ?>

      <!-- contact -->
      <div class="col-sm-4">
        <div class="contact">
          <i class="<?php echo $cpt_icon; ?>"></i>
          <h3><?php the_title(); ?></h3>
          <p><?php echo get_field('cpt_info'); ?></p>
        </div>
      </div>
      <!-- /contact -->

      <?php
          endwhile;
        endif;
        wp_reset_query();
      ?>

      <?php
        $query = new WP_Query(array(
          'post_type' => 'contact_form_post_ty'
        ));

        if ($query->have_posts()):
          while ($query->have_posts()): $query->the_post();
      ?>

      <!-- contact form -->
      <div class="col-md-8 col-md-offset-2">
        <?php the_content(); ?>
      </div>
      <!-- /contact form -->

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
<!-- /Contact -->
