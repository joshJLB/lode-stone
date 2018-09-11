<?php
/*
  Template Name: Home Page
  front-page.php
*/
get_header(); ?>

<main id="home">

  <?php get_template_part('components/home-page/hero'); ?>

  <!-- Continue Sections -->

  <section class="one">
    <div class="one-container">
      <div class="one-content">
        <img src="<?=get_field('one_icon'); ?>" alt="">
        <h2><?=get_field('one_title'); ?></h2>
        <p><?=get_field('one_content'); ?></p>
        <a href="<?=get_field('one_link_url'); ?>"><?=get_field('one_link_text'); ?> >></a>
      </div>
      <div class="one-image" style="background-image:url(<?=get_field('one_image'); ?>)"></div>
    </div>
  </section>

  <section class="two">
    <div class="two-before"><div class="two-before-inner"></div></div>
    <div class="two-after"><div class="two-after-inner"></div></div>
    <div class="two-container" style="background-image:url(<?=get_field('two_image'); ?>);">
      <div class="overlay2"></div>
      <div class="two-inner">
        <?php if(get_field('homepage_slider')): ?>
        <?php while( have_rows('homepage_slider') ): the_row();?>
          <div class="slide">
            <div class="two-content">
              <h2><?=get_sub_field('homepage_slider_title'); ?></h2>
              <p><?=get_sub_field('homepage_slider_content'); ?></p>
              <a href="<?=get_sub_field('homepage_slider_link_url'); ?>"><?=get_sub_field('homepage_slider_link_text'); ?> >></a>
            </div>
          </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="three">
    <div class="three-container">
      <div class="three-image" style="background-image:url(<?=get_field('three_image'); ?>)"></div>
      <div class="three-content">
        <img src="<?=get_field('three_icon'); ?>" alt="">
        <h2><?=get_field('three_title'); ?></h2>
        <p><?=get_field('three_content'); ?></p>
        <a href="<?=get_field('three_link_url'); ?>"><?=get_field('three_link_text'); ?> >></a>
      </div>
    </div>
  </section>

  <section class="four">
    <div class="overlay"></div>
    <div class="four-container" style="background-image:url(<?=get_field('four_image'); ?>);">
      <h2><?=get_field('four_title'); ?></h2>
      <div class="four-blog-container">
        <?php
	        $args = array( 'numberposts' => '3' );
          $recentPosts = wp_get_recent_posts( $args );
          $mostRecent1 = $recentPosts[0];
          $mostRecent2 = $recentPosts[1];
          $mostRecent3 = $recentPosts[2];
        ?>
        <div class="four-blog-post">
          <img src="<?=get_the_post_thumbnail_url($mostRecent1['ID'], 'full')?>" alt="">
          <h3><?=$mostRecent1['post_title']?></h3>
          <div class="four-blog-content"><p><?=$mostRecent1['post_content']?></p></div>
          <a href="<?=get_permalink($mostRecent1['ID']); ?>">Read More >></a>
        </div>
        <div class="four-blog-post">
          <img src="<?=get_the_post_thumbnail_url($mostRecent2['ID'], 'full')?>" alt="">
          <h3><?=$mostRecent2['post_title']?></h3>
          <div class="four-blog-content"><p><?=$mostRecent2['post_content']?></p></div>
          <a href="<?=get_permalink($mostRecent2['ID']); ?>">Read More >></a>
        </div>
        <div class="four-blog-post">
          <img src="<?=get_the_post_thumbnail_url($mostRecent3['ID'], 'full')?>" alt="">
          <h3><?=$mostRecent3['post_title']?></h3>
          <div class="four-blog-content"><p><?=$mostRecent3['post_content']?></p></div>
          <a href="<?=get_permalink($mostRecent3['ID']); ?>">Read More >></a>
        </div>
      </div> 
    </div>
  </section>

  <section class="five">
    <div class="five-container" style="background-image: url(<?=get_field('five_image'); ?>)">
      <?=get_field('five_content'); ?>
    </div>
  </section>

  <section class="six">
    <div class="six-container">
      <h2><?=get_field('six_title'); ?></h2>
      <?=get_field('six_content'); ?>
    </div>
  </section>

</main>

<?php get_footer();
