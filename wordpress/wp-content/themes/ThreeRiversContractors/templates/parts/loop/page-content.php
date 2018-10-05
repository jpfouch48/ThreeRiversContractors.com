<?php
/**
 * Template part for displaying the page content inside The Loop.
 *
 * @package trc
 * @since   1.0.0
 */

?>

<div class="page-content">

	<?php

	/**
	 * Fires inside the `.page-content` element, before the content.
	 *
	 * @hooked trc_wc_shop_messages - 10
	 *
	 * @since 1.0.0
	 */
	do_action( 'trc_before_page_content' );

	the_content();

	wp_link_pages(
		array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'trc' ),
			'after'  => '</div>',
		)
	);

	/**
	* Fires inside the `.page-content` element, after the content.
	 *
	 * @since 1.0.0
	 */
	do_action( 'trc_after_page_content' );

	?>

</div><!-- .page-content -->
