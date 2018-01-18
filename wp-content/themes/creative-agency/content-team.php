<?php
  $ts_title = get_field('ts_title');
?>

<!-- Team -->
<div id="team" class="section md-padding">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <!-- Section header -->
      <div class="section-header text-center">
        <h2 class="title"><?php echo $ts_title; ?></h2>
      </div>
      <!-- /Section header -->

      <?php
        $query = new WP_Query(array(
          'post_type' => 'team_post_type',
          'order' => 'ASC'
        ));

        if ($query->have_posts()):
          while ($query->have_posts()): $query->the_post();
      ?>

      <?php
        $tspt_position = get_field('tspt_position');
        $tspt_add_social_icons = get_field('tspt_add_social_icons');
        $tspt_facebook = get_field('tspt_facebook');
        $tspts_facebook_link = get_field('tspts_facebook_link');
        $tspts_google_plus = get_field('tspts_google-plus');
        $tspts_google_plus_link = get_field('tspts_google-plus_link');
        $tspts_twitter = get_field('tspts_twitter');
        $tspts_twitter_link = get_field('tspts_twitter_link');
      ?>

      <!-- team -->
      <div class="col-sm-4">
        <div class="team">
          <div class="team-img">
            <?php
              if (has_post_thumbnail()):
                $image_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
            ?>
            <img class="img-responsive" src="<?php the_post_thumbnail_url($post->ID) ?>" alt="<?php echo $image_alt ?>">
            <?php endif; ?>
            <div class="overlay">
              <?php if ($tspt_add_social_icons): ?>
              <div class="team-social">
                <?php if ($tspt_facebook[0] == 'added'): ?>
                <a href="<?php echo  $tspts_facebook_link; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                <?php endif; ?>
                <?php if ($tspts_google_plus[0] == 'added'): ?>
                <a href="<?php echo $tspts_google_plus_link; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                <?php endif; ?>
                <?php if ($tspts_twitter[0] == 'added'): ?>
                <a href="<?php echo $tspts_twitter_link; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                <?php endif; ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="team-content">
            <h3><?php the_title(); ?></h3>
            <span><?php echo $tspt_position; ?></span>
          </div>
        </div>
      </div>
      <!-- /team -->
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
<!-- /Team -->
