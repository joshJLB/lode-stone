<?php
/*
  Template Name: Single Post
  single.php (the Template for displaying all single posts)
*/
get_header(); ?>

<main id="single-post">
  <?php get_template_part('components/header/child-header'); ?>

  <div class="single-post-container">
    <?php if ( have_posts() ): ?>
      <?php while ( have_posts() ): the_post(); ?>

        <!-- Content Layout Here -->
        <div class="single-blog-container">
          <img src="<?=the_post_thumbnail_url(); ?>" alt="">
          <div class="single-blog-content">
            <div class="date-wrapper">
              <h3 class="single-blog-date"><?=the_date(); ?></h3>
            </div>
            <?php the_content(); ?>
            <h4>-<?php the_author(); ?></h4>
          </div>
        </div>
        

    <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
</main>

<?php get_footer();
