<?php
/**
 * Displays site credit.
 *
 * @package TRC
 * @since   1.0.0
 */

?>

<div class="site-info-text">

	<?php

	/**
	 * Filter the footer copyright text.
	 *
	 * @since 1.5.0
	 *
	 * @var string
	 */
	$copyright_text = (string) apply_filters( 'trc_copyright_text', get_theme_mod( 'copyright_text', sprintf(
		/* translators: 1. copyright symbol, 2. year, 3. site title */
		esc_html__( 'Copyright %1$s %2$d %3$s', 'trc' ),
		'&copy;',
		date( 'Y' ),
		get_bloginfo( 'blogname' )
	) ) );

	echo wp_kses_post( $copyright_text );

	/**
	 * Filter the footer author credit display.
	 *
	 * @since 1.0.0
	 *
	 * @var bool
	 */
	if ( (bool) apply_filters( 'trc_author_credit', true ) ) {

		if ( $copyright_text ) {

			echo ' &mdash; ';

		}

		$theme = wp_get_theme();

		printf(
			/* translators: 1. theme name link, 2. theme author link */
			esc_html__( '%1$s WordPress theme by %2$s', 'trc' ),
			esc_html( $theme->get( 'Name' ) ),
			sprintf(
				'<a href="%s" rel="author nofollow">%s</a>',
				esc_url( $theme->get( 'AuthorURI' ) ),
				esc_html( $theme->get( 'Author' ) )
			)
		);

	}

	?>

</div>
