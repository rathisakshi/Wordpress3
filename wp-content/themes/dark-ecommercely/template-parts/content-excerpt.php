<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dark_ecommercely
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php esc_url(the_permalink()); ?>">
			<?php the_post_thumbnail('large'); ?>
		</a>
	<?php endif; ?>
	<div class="article-contents">
		<header class="entry-header">
			<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>
			<?php if ( get_theme_mod( 'sm_show_post_date' ) == '1' ) : ?>
				<div class="entry-meta">
					<?php echo get_the_date('F j, Y'); ?>
				</div>
			<?php endif; ?>
		</header>
		<div class="entry-content">
			<a href="<?php esc_url(the_permalink()); ?>">
				<?php the_excerpt(); ?>
			</a>
		</div>
	</div>
</article>
