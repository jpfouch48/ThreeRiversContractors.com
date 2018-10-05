<?php
/**
 * Displays the site header.
 *
 * @package TRC
 * @since   0.0.0
 */

?>

<div class="hero">

	<?php

	/**
	 * Fires inside the `.hero` element but before the `.hero-inner` element.
	 *
	 * @since 0.0.0
	 */
	do_action( 'trc_pre_hero' );

	?>

	<div class="hero-inner">

		<?php

		/**
		 * Fires inside the `.hero` element.
		 *
		 * @hooked trc_add_hero_content - 10
		 *
		 * @since 0.0.0
		 */
		do_action( 'trc_hero' );

		?>

	</div>

</div>
