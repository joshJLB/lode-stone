<?php
/*
  Template Name: Contact
  contact.php
*/
  get_header(); 
  $string = get_field('address', 'option');
  $address = wp_strip_all_tags($string, true);
?>

<main id="contact">
  <?php get_template_part('components/header/child-header'); ?>

  <div class="contact-container">
    <!-- Site Origin or Custom, you decide! -->
    <h2><?=get_field('contact_title', 'option'); ?></h2>
    <h4><?=get_field('contact_sub_title', 'option'); ?></h4>
    <div class="contact-icon-containers">
      <div class="contact-icon">
        <a href="tel:<?=get_field('phone', 'option'); ?>">
          <i class="fas fa-mobile-alt"></i>
          <p>Call us</p>
        </a>
      </div>
      <div class="contact-icon">
        <a href="http://maps.google.com/?q=<?=$address; ?>" target="_blank">
          <i class="fas fa-map-marker-alt"></i>
          <p>Visit us</p>
        </a>
      </div>
      <div class="contact-icon">
        <a href="mailto:<?=get_field('email', 'option'); ?>">
          <i class="fas fa-envelope"></i>
          <p>Email us</p>
        </a>
      </div>
    </div>
    <div class="contact-form">
      <?php gravity_form(1); ?>
    </div>
  </div>

</main>

<?php get_footer();
