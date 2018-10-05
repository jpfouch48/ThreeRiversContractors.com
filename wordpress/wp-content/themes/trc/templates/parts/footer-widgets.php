<?php
/**
 * Displays the footer widget areas.
 *
 * @package TRC
 * @since   0.0.0
 */

$sidebars = trc_get_active_footer_sidebars();

if ( $sidebars ) :

	?>
	<div class="footer-widget-area columns-<?php echo count( $sidebars ); ?>">

	<?php foreach ( $sidebars as $sidebar ) : ?>

		<div class="footer-widget">

			<?php dynamic_sidebar( $sidebar ); ?>

		</div>

	<?php endforeach; ?>

	</div>
	<?php

endif;
