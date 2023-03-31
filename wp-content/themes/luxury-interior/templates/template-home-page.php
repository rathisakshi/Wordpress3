<?php
/**
 * The Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Luxury Interior
 */

get_header(); ?>

<div id="content">
  <?php
    $luxury_interior_hidcatslide = get_theme_mod('luxury_interior_hide_categorysec', true);
    if( $luxury_interior_hidcatslide != ''){
  ?>
    <section id="catsliderarea">
      <div class="catwrapslider">
        <div class="slider-leftsvg">
          <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M154.62,-3.45 C152.36,107.06 35.55,62.66 0.00,149.50 L-2.25,143.58 L0.00,0.00 Z" style="stroke: none; "></path></svg>
        </div>
        <div class="owl-carousel">
          <?php if( get_theme_mod('luxury_interior_slidersection',false) ) { ?>
          <?php $luxury_interior_queryvar = new WP_Query('cat='.esc_attr(get_theme_mod('luxury_interior_slidersection',true)));
            while( $luxury_interior_queryvar->have_posts() ) : $luxury_interior_queryvar->the_post(); ?>
              <div class="slidesection">
                <?php the_post_thumbnail( 'full' ); ?>
                <div class="slider-box">
                  <h3><?php the_title(); ?></h3>
                  <?php if ( get_theme_mod('luxury_interior_button_text') != "") { ?>
                    <div class="slide-btn mt-5">
                      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('luxury_interior_button_text',__('Read More','luxury-interior'))); ?></a>
                    </div>
                  <?php }?>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } ?>
        </div>
      </div>
      <div class="clear"></div>
    </section>
  <?php } ?>

  <?php
    $luxury_interior_hidepageboxes = get_theme_mod('luxury_interior_disabled_pgboxes', true);
    if( $luxury_interior_hidepageboxes != ''){
  ?>
  <section id="serives_box" class="py-5">
    <div class="container">

      <div class="heading-box">
        <?php if ( get_theme_mod('luxury_interior_headingtext1') != "") { ?>
          <h2 class="pb-2"><?php echo esc_html(get_theme_mod('luxury_interior_headingtext1','')); ?></h2>
        <?php }?>
        <?php if ( get_theme_mod('luxury_interior_headingtext2') != "") { ?>
          <h3 class="pb-3"><?php echo esc_html(get_theme_mod('luxury_interior_headingtext2','')); ?></h3>
        <?php }?>
        <?php if ( get_theme_mod('luxury_interior_headingtext_para') != "") { ?>
          <p><?php echo esc_html(get_theme_mod('luxury_interior_headingtext_para','')); ?></p>
        <?php }?>
      </div>

      <div class="row">
        <?php if( get_theme_mod('luxury_interior_services_cat',false) ) { ?>
          <?php $luxury_interior_queryvar = new WP_Query('cat='.esc_attr(get_theme_mod('luxury_interior_services_cat',true)));
            while( $luxury_interior_queryvar->have_posts() ) : $luxury_interior_queryvar->the_post(); ?>
              <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
                <div class="services_inner_box text-center p-3">
                  <div class="service-project-container">
                    <?php the_post_thumbnail( 'full' ); ?>
                  </div>
                  <h4 class="py-3 mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <?php
                    $luxury_interior_trimexcerpt = get_the_excerpt();
                    $luxury_interior_shortexcerpt = wp_trim_words( $luxury_interior_trimexcerpt, $luxury_interior_num_words = 10 );
                    echo '<p class="mb-0">' . esc_html( $luxury_interior_shortexcerpt ) . '</p>';
                  ?>
                  <a class="service-box-button" href="<?php the_permalink(); ?>"><?php echo esc_html('Read More','luxury-interior'); ?><i class="fas fa-angle-double-right ml-2"></i></a>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } ?>
        <?php }?>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
