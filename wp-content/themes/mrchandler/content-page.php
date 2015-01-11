<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package mrchandler
 */
?>
<div id="primary" class="col-md-8 col-lg-8">
		<main id="main" class="site-main" role="main">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'mrchandler' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</div>
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'mrchandler' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
