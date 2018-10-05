<?php
/**
 * Template part for displaying the post content inside The Loop.
 *
 * @package TRC
 * @since   0.0.0
 */

?>

<div class="entry-content">

	<?php

	the_content( 'Read More <span class="meta-nav">&rarr;</span>' );

	wp_link_pages(
		array(
			'before' => '<div class="page-links">' . 'Pages:',
			'after'  => '</div>',
		)
	);

	?>

</div><!-- .entry-content -->
