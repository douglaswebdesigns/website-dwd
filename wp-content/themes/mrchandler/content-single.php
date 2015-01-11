<?php
/**
 * @package mrchandler
 */
?>
<div id="primary" class="col-md-8 col-lg-8">
		<main id="main" class="site-main" role="main">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php mrchandler_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>

		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'mrchandler' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mrchandler_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
</div>
