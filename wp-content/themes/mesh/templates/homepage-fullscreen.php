<?php /*
* Template Name: Homepage - Fullscreen
*/
get_header(); ?>

<main id="main" class="site-main homepage-fullscreen" role="main">
  <div class="main-bg" >
    <div class="panel" id="slides">
      <!-- <div id="slides-control"> -->
        <div class="slides-container">
        <?php 
 
        if ( have_rows('background_images') ):
          $header = get_field('callout_header');
          $callout = get_field('callout_text');
          $cta = get_field('cta_text');
          $ctalink = get_field('cta_link');
          $ctr = 1;
        ?>
          <?php while ( have_rows ('background_images')) : the_row();
              $images = get_sub_field('background_image'); ?>
           
           <div class="full-bg" style="background-image:url('<?php echo $images['url']; ?>');">
              <? if($ctr ==1){ ?>
                <div class="callout-container">
                  <div class="circle"></div>
                    <div class="callout-text">
                      <h2><?php echo $header; ?></h2>
                      <h4><?php echo $callout; ?></h4>
                      <p><a href="<?php echo $ctalink; ?>" title="Check out our Facebook page for event updates!"><?php echo $cta; ?></a></p>
                    </div>
                </div>

             <?php } ?>
           </div>

        <?php $ctr++; endwhile; ?>
        <?php else: ?>
      <?php endif; ?>
        </div>
      <!-- </div> -->
      <nav class="slides-navigation">
        <a href="#" class="next"><img src="<?php echo get_template_directory_uri() ?>/img/arrow.png" /></a>
        <!-- <a href="#" class="prev">PREVIOUS</a> -->
      </nav>
    </div>
</div>
    <!-- <img src="<?php echo get_template_directory_uri() ?>/img/craftweek_bg_1.jpg" />
    <div> -->
 <!-- <?php if (get_field("callout_headline")): ?>
    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <div class="callout">
            <h1><?php the_field("callout_headline"); ?></h1>
          </div>


        </div>
      </div>
    </div>
  <?php endif ?>

  <?php if (have_rows("content_blocks")): ?>
    <div class="container">
      <div class="row">

        <?php while ( have_rows('content_blocks') ) : the_row(); ?>

          <div class="four columns">
            <?php if (get_sub_field('content_block_title')): ?>
              <h3><?php the_sub_field('content_block_title'); ?></h3>
            <?php endif ?>
            <?php if (get_sub_field('content_block_description')): ?>
              <p><?php the_sub_field('content_block_description'); ?></p>
            <?php endif ?>
          </div>

        <?php endwhile; ?>

      </div>
    </div>
  <?php endif ?>

  <?php if (get_field("callout_description")): ?>
    <div class="container">
      <div class="row">
        <div class="eight columns">
          <p><?php the_field('callout_description'); ?></p>
        </div>
      </div>
    </div>
  <?php endif ?> -->


</main><!-- #main -->

<?php get_footer(); ?>
