<?php
/**
 * The template for displaying the header.
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package trc
 * @since   1.0.0
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php

	/**
	 * Fires inside the `<body>` element.
	 *
	 * @since 1.0.0
	 */
	do_action( 'trc_body' );

	?>

	<div id="page" class="hfeed site">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'trc' ); ?></a>

		<?php

		/**
		 * Fires before the `<header>` element.
		 *
		 * @since 1.0.0
		 */
		do_action( 'trc_before_header' );

		?>

		<header id="masthead" class="site-header" role="banner">

			<?php

			/**
			 * Render the video header element
			 *
			 * @hooked trc_video_header - 5
			 *
			 * @since 1.7.0
			 */
			do_action( 'trc_before_header_wrapper' );

			?>

			<div class="site-header-wrapper">

				<?php

				/**
				 * Fires inside the `<header>` element.
				 *
				 * @hooked trc_add_site_title - 5
				 * @hooked trc_add_hero - 7
				 *
				 * @since 1.0.0
				 */
				do_action( 'trc_header' );

				?>

			</div><!-- .site-header-wrapper -->

			<?php

			/**
			 * Fires inside the `<div class="site-header-wrapper">` element.
			 *
			 * @since 1.0.0
			 */
			do_action( 'trc_after_site_header_wrapper' );

			?>

		</header><!-- #masthead -->

		<?php

		/**
		 * Fires after the `<header>` element.
		 *
		 * @hooked trc_add_primary_navigation - 11
		 * @hooked trc_add_page_title - 12
		 *
		 * @since 1.0.0
		 */
		do_action( 'trc_after_header' );

		?>

		<div id="content" class="site-content">
