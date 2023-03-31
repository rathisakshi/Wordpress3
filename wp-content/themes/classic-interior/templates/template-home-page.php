<?php
/**
 * The Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Classic Interior
 */

get_header(); ?>

<div id="content">
  <?php
    $hidcatslide = get_theme_mod('luxury_interior_hide_categorysec', true);
    if( $hidcatslide != ''){
  ?>
    <section id="catsliderarea">
      <div class="catwrapslider">
        <div class="owl-carousel">
          <?php if( get_theme_mod('luxury_interior_slidersection',false) ) { ?>
          <?php $luxury_interior_queryvar = new WP_Query('cat='.esc_attr(get_theme_mod('luxury_interior_slidersection',true)));
            while( $luxury_interior_queryvar->have_posts() ) : $luxury_interior_queryvar->the_post(); ?>
              <div class="slidesection">
                <?php the_post_thumbnail( 'full' ); ?>
                <div class="slider-box1">
                  <h3><?php the_title(); ?></h3>
                  <?php
                    $luxury_interior_trimexcerpt = get_the_excerpt();
                    $luxury_interior_shortexcerpt = wp_trim_words( $luxury_interior_trimexcerpt, $luxury_interior_num_words = 20 );
                    echo '<p>' . esc_html( $luxury_interior_shortexcerpt ) . '</p>';
                  ?>
                    <div class="slide-btn ">
                      <a href="<?php the_permalink(); ?>"><?php esc_html_e('Buy Now','classic-interior'); ?></a>
                    </div>
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
  <section id="serives_box" >
    <div class="container">
      <div class="ser-heading">
          <h3><span><?php echo esc_html(get_theme_mod('classic_interior_service_spanheading',__('Our','classic-interior'))); ?></span>
        <?php echo esc_html(get_theme_mod('classic_interior_service_heading',__('Services','classic-interior'))); ?></h3>
      </div>

      <div class="row">
        <?php if( get_theme_mod('luxury_interior_services_cat',false) ) { ?>
          <?php $luxury_interior_queryvar = new WP_Query('cat='.esc_attr(get_theme_mod('luxury_interior_services_cat',true)));
            while( $luxury_interior_queryvar->have_posts() ) : $luxury_interior_queryvar->the_post(); ?>
              <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="services_boxinn ">
                    <div class="ser-img">
                      <?php the_post_thumbnail( 'full' ); ?>
                    </div>
                    <div class="ser-containbx">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                          <?php
                            $luxury_interior_trimexcerpt = get_the_excerpt();
                            $luxury_interior_shortexcerpt = wp_trim_words( $luxury_interior_trimexcerpt, $luxury_interior_num_words = 30 );
                            echo '<p class="mb-0">' . esc_html( $luxury_interior_shortexcerpt ) . '</p>';
                          ?>
                        <div class="serbtn">
                          <a href="<?php the_permalink(); ?>"><?php echo esc_html('Read More','classic-interior'); ?></a>
                        </div>
                    </div>
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
