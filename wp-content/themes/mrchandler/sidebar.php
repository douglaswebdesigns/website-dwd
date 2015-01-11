<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package mrchandler
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-lg-4 col-md-4" role="complementary">
	<div class="well">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
</div><!-- #secondary -->
</div><!-- .row -->
</div><!--.container -->