<?php get_header(); ?>

  <div id="wrap-container">

    <div class="container">
      <div class="row">

        <main id="main-col" class="col-xs-12 col-md-9" role="main">
          <div class="main-col__inner">

        <?php while ( have_posts() ): the_post(); ?>
            <?php get_template_part('content'); ?>
        <?php endwhile; ?>

          </div>
        </main>

        <div id="sub-col" class="col-xs-12 col-md-3" role="complementary">
          <?php get_sidebar(); ?>
        </div>

      </div>
    </div>

  </div>

  <?php get_footer(); ?>