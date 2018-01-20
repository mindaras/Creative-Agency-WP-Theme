<!-- Blog -->
<div id="blog" class="section md-padding bg-grey">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <!-- Section header -->
      <div class="section-header text-center">
        <h2 class="title">Recent news</h2>
      </div>
      <!-- /Section header -->

      <?php
        $latest_posts = get_posts(array(
          'posts_per_page' => 3,
          'order' => 'DESC'
        ));
      ?>
      <?php foreach($latest_posts as $post): setup_postdata($post); ?>

      <!-- blog -->
      <div class="col-md-4">
        <div class="blog">
          <div class="blog-img">
            <img class="img-responsive" src="./img/blog1.jpg" alt="">
          </div>
          <div class="blog-content">
            <ul class="blog-meta">
              <li><i class="fa fa-user"></i><?php the_author(); ?></li>
              <li><i class="fa fa-clock-o"></i><?php echo get_the_date('j M'); ?></li>
              <li><i class="fa fa-comments"></i><?php echo get_comments_number(0, 1, '%') ?></li>
            </ul>
            <h3><?php the_title(); ?></h3>
            <p><?php echo get_the_content(); ?></p>
            <a href="<?php the_permalink(); ?>">Read more</a>
          </div>
        </div>
      </div>
      <!-- /blog -->
      <?php
        endforeach;
        wp_reset_query();
      ?>

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</div>
<!-- /Blog -->
