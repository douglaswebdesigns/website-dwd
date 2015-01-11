<?php
/**
 * @package mrchandler
 */
?>


<div class="container-fluid">
<div id="primary" class="col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php mrchandler_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail(); ?>
			</a>
		<?php endif; ?>
		
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'mrchandler' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'mrchandler' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</div>
</div>
	<footer class="entry-footer">
		<?php mrchandler_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
