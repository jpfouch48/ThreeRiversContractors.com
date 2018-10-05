<?php
/**
 * Displays page titles.
 *
 * @package TRC
 * @since   1.0.0
 */

?>

<div class="page-title-container">

	<header class="page-header">

		<?php

		/**
		 * Fires before the page title element.
		 *
		 * @since 1.0.0
		 */
		do_action( 'trc_before_page_title' );

		trc_the_page_title();

		/**
		 * Fires after the page title element.
		 *
		 * @since 1.0.0
		 */
		do_action( 'trc_after_page_title' );

		?>

	</header><!-- .entry-header -->

</div><!-- .page-title-container -->
