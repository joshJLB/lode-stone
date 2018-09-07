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

</main>

<?php get_footer();
