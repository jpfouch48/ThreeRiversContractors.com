<?php
/**
 * Template part for displaying the post excerpt inside The Loop.
 *
 * @package TRC
 * @since   0.0.0
 */

?>

<div class="entry-summary">

	<?php the_excerpt(); ?>

	<p><a class="button" href="<?php the_permalink(); ?>" aria-label="<?php printf( 'Continue reading %s', get_the_title() ); ?>"><?php printf( 'Continue Reading %s', is_rtl() ? '&larr;' : '&rarr;' ); ?></a></p>

</div><!-- .entry-summary -->
