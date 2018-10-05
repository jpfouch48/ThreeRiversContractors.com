<?php
/**
 * Displays site credit.
 *
 * @package TRC
 * @since   0.0.0
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
		'Copyright %1$s %2$d %3$s',
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
			'%1$s WordPress theme by %2$s',
			$theme->get( 'Name' ),
			sprintf(
				'<a href="%s" rel="author nofollow">%s</a>',
				$theme->get( 'AuthorURI' ),
				$theme->get( 'Author' )
			)
		);

	}

	?>

</div>
