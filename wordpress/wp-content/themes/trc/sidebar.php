<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#sidebar-php
 *
 * @package TRC
 * @since   1.0.0
 */

if ( ! trc_layout_has_sidebar() || ! is_active_sidebar( 'sidebar-1' ) ) {

	return;

}

?>

<div id="secondary" class="widget-area" role="complementary">

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

</div><!-- #secondary -->
