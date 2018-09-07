<?php
/*
*
* hero.php
*
*/
?>

<?php
  // Hero Section Variables
  $hero_background = get_field('hero_background');
  // $hero_video = get_field('hero_video');
  // $hero_slider = get_field('hero_slider');
?>
<?php if (!$hero_video && !$hero_slider): ?> 
  <section class="hero" style="background-image: url('<?php echo $hero_background['url']; ?>');">
    <!-- Add Content Here for Static Background -->
    <div class="overlay"></div>
    <div class="hero-container">
      <h1 class="hero-title"><?=get_field('hero_title'); ?></h1>
      <p class="hero-sub-title"><?=get_field('hero_sub_title'); ?></p>
      <div class="tab-container">
        <?php
          $count = 0; 
          $count2 = 0;
        ?>
        <ul class="nav nav-tabs" role="tablist">

        <?php if(get_field('hero_repeater')): ?>
        <?php while( have_rows('hero_repeater') ): the_row(); ?>

          <?php 
            $count++;
          ?>
            <li class="nav-item">
              <a class="nav-link <?php if($count == 1) { echo 'active'; }; ?>" data-toggle="tab" href="#tab-<?php echo $count; ?>" role="tab">
                <?=get_sub_field('hero_tab_title'); ?>
              </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>

        <div class="tab-content">
        
          <?php if(get_field('hero_repeater')): ?>
          <?php while( have_rows('hero_repeater') ): the_row(); ?>
            
            <?php
              $count2++;
            ?>

            <div class="tab-pane <?php if($count2 == 1) { echo 'active'; }; ?>" id="tab-<?php echo $count2; ?>" role="tabpanel">
              <div class="content-holder">
                <?=get_sub_field('hero_tab_content'); ?>
              </div>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
<?php else: ?>
  <section class="hero">
    <?php if ( have_rows('hero_slider') ): ?>
      <div class="hero-slider">
        <?php while ( have_rows('hero_slider') ): the_row();
        //vars
          $b = get_sub_field('background');
        ?>

          <!-- Hero Slider Slides -->
          <div class="hero-slide" style="background-image: url('<?php echo $b['url']; ?>');" title="<?php echo $b['alt']; ?>"></div>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    <?php else: ?>
      <video src="<?php echo $hero_video; ?>" autoplay mute loop></video>
      <div class="hero-content">
        <!-- Add Content Here for Video -->
      </div>
    <?php endif; ?>
  <?php endif; ?>
</section>
