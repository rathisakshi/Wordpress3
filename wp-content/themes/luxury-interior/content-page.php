<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Luxury Interior
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<?php the_post_thumbnail(); ?>
	<header class="entry-header mt-3">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	<div class="entry-content mt-3">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'luxury-interior' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<?php edit_post_link( __( 'Edit', 'luxury-interior' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article>